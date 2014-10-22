<?php

class TagTaskTableSeeder extends Seeder {

    public function run () {
        DB::table ( 'tag_task' )->delete ();

        $task = Task::where ( [
            'title' => 'Apprendre Laravel #school'
        ] )->first();

        $tag = Tag::where ( [
            'name' => 'school'
        ] )->first();

        $task->tags()->attach($tag->id);
    }
}
