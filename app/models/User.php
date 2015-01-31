<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends \Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    protected static $image_paths = [
        'photos' => '/files/user-photos/',
        'avatars' => '/files/user-avatars/'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    public function posts() {
        return $this->hasMany('Post');
    }

    public function getAvatarAttribute($avatar)
    {
        return $this->image_paths . $avatar;
    }
}
