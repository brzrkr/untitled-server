<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use \Esensi\Model\Model;
use \Esensi\Model\SoftModel;

class User extends SoftModel implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    protected $image_paths = [
        'photos' => '/files/user-photos/',
        'avatars' => '/files/user-avatars/'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');
    //protected $appends = array('avatar');

    /**
     * These are the default rules that the model will validate against.
     * Developers will probably want to specify generic validation rules
     * that would apply in any save operation vs. form or route
     * specific validation rules. For simple models, these rules can
     * apply to all save operations.
     *
     * @var array
     */
    protected $rules = [
       'username' => ['required', 'unique:users'],
       'password' => ['required'],
       'name' => [],
       'email' => ['unique:users'],
       'phone' => ['unique:users'],
       'lat' => [],
       'lng' => [],
       'bio' => [],
       'password' => ['required'],
       'key' => ['unique:users'],
       'remember_token' => ['unique:users']
    ];

    protected $fillable = ['username', 'name', 'phone', 'email', 'lat', 'lng', 'bio'];
    protected $guarded = ['password', 'remember_token', 'key', 'id'];

    public function posts() {
        return $this->hasMany('Post');
    }

    public function getAvatarAttribute($avatar)
    {
        return url($this->image_paths['avatars'] . $avatar);
    }
}
