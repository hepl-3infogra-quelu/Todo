<?php namespace todo\Helpers;
class TagsHelper {

    public function getTags ($task) {
        preg_match_all ( '/#\w+/', current ( $task ), $tags );
        foreach (current ( $tags ) as $i => $tag)
        {
            $tags[$i] = explode ( '#', $tag )[1];
        }

        return $tags;
    }
}
