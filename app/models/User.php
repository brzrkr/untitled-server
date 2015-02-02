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
    protected $hidden = ['password', 'remember_token'];

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


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'name', 'phone', 'email', 'lat', 'lng', 'bio'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['password', 'remember_token', 'key', 'id'];

    /**
     * These are the relationships that the model should set up.
     * Using PHP and Laravel's magic, these relationship keys
     * resolve to the actual models automatically.
     *
     * @example relationship bindings:
     *
     *     [ 'hasOne', 'related', 'foreignKey', 'localKey' ]
     *     [ 'hasMany', 'related', 'foreignKey', 'localKey' ]
     *     [ 'hasManyThrough', 'related', 'through', 'firstKey', 'secondKey' ]
     *     [ 'belongsTo', 'related', 'foreignKey', 'otherKey', 'relation' ]
     *     [ 'belongsToMany', 'related', 'table', 'foreignKey', 'otherKey', 'relation' ]
     *     [ 'morphOne', 'related', 'name', 'type', 'id', 'localKey' ]
     *     [ 'morphMany', 'related', 'name', 'type', 'id', 'localKey' ]
     *     [ 'morphTo', 'name', 'type', 'id' ]
     *     [ 'morphToMany', 'related', 'name', 'table', 'foreignKey', 'otherKey', 'inverse' ]
     *     [ 'morphByMany', 'related', 'name', 'table', 'foreignKey', 'otherKey' ]
     *
     * @var array
     */
    protected $relationships = [
        'posts' => [ 'hasMany', 'Post' ],
    ];

    public function getAvatarAttribute($avatar)
    {
        return url($this->image_paths['avatars'] . $avatar);
    }

    // public function scopeByKey($query, $key)
    // {
    //     return $query->where('key', '=', 100);
    // }
}
