<?php

use \Esensi\Model\SoftModel;

class Post extends SoftModel {
	protected $fillable = [];

    static public $types = ['text', 'photo', 'invite', 'catch'];

    public function user() {
        return $this->belongsTo('User');
    }

    public function spot() {
        return $this->belongsTo('Spot');
    }

    public function comments() {
        return $this->hasMany('Comment');
    }
}
