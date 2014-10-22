<?php

class Task extends \Eloquent {
	protected $fillable = ['title', 'body', 'status', 'user_id'];

    public function user () {
        return $this->belongsTo('User');
    }

    public function tags () {
        return $this->belongsToMany('Tag');
    }
}
