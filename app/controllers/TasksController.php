<?php
use todo\Forms\AddTask as TaskForm;
use todo\Helpers\TagsHelper as TagsHelper;

class TasksController extends BaseController {

    protected $taskForm;
    protected $tagsHelper;

    public function __construct (TaskForm $taskForm, TagsHelper $tagsHelper) {
        $this->taskForm   = $taskForm;
        $this->tagsHelper = $tagsHelper;
    }

    public function index () {
        $user      = Auth::user ();
        $tasks     = $user->tasks ()->where ( 'status', 0 )->orderBy ( 'created_at', 'desc' )->get ();
        $tasksDone = $user->tasks ()->where ( 'status', 1 )->get ();

        return View::make ( 'tasks.index', compact ( 'user', 'tasks', 'tasksDone' ) );
    }

    public function store () {
        $this->taskForm->validate ( Input::only ( 'title', 'body' ) );

        $task = Task::create ( [
            'title'   => Input::get ( 'title' ),
            'body'    => Input::get ( 'body' ),
            'user_id' => Auth::id ()
        ] );

        $tags = $this->tagsHelper->getTags ( Input::only ( 'title' ) );

        foreach ($tags as $tag)
        {
            $newTag = Tag::firstOrCreate ( [ 'name' => $tag ] );
            $task->tags ()->attach ( $newTag->id );
        }

        return Redirect::to ( 'tasks' );
    }

    public function setDone ($id) {
        $task         = Task:: find ( $id );
        $task->status = 1;

        $task->save ();

        return Redirect::to ( 'tasks' );
    }
}
