<?php

use \Esensi\Model\SoftModel;

class Comment extends SoftModel {
	protected $fillable = [];

    public function post() {
        return $this->belongsTo('Post');
    }

    public function user() {
        return $this->belongsTo('User');
    }
}
