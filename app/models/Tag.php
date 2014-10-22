<?php


class Tag extends \Eloquent {
    protected $fillable = [ 'name' ];

    public function tasks () {
        return $this->belongsToMany('Task');
    }
}
