<?php

class Post extends \Eloquent {
	protected $fillable = [];

    static public $types = ['text', 'photo', 'invite', 'catch'];

    public function user() {
        return $this->belongsTo('User');
    }

    public function spot() {
        return $this->belongsTo('Spot');
    }

    public function comment() {
        return $this->hasMany('Comment');
    }
}
