<?php

class Post extends \Eloquent {
	protected $fillable = [];

    static public $types = ['text', 'photo', 'invite', 'catch'];
}
