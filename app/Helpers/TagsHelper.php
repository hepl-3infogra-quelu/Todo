<?php namespace todo\Helpers;
class TagsHelper {

    public function getTags ($task) {
        preg_match_all ( '/#\w+/', current ( $task ), $tags );
        foreach (current ( $tags ) as $i => $tag)
        {
            $tags[ $i ] = explode ( '#', $tag )[ 1 ];
        }

        return $tags;
    }

    public function tagsToUrl ($tasks) {
        foreach ($tasks as $i => $task)
        {
            $tags = $this->getTags ( [ $task ] );
            foreach ($tags as $tag)
            {
                $tag                = ( is_array ( $tag ) ) ? current ( $tag ) : $tag;
                $tasks[ $i ]->title = str_replace ( '#' . $tag,
                    '<a href="' . route ( 'orderByTag', $tag ) . '">#' . $tag . '</a>',
                    $task->title );
            }
        }

        return $tasks;
    }
}
