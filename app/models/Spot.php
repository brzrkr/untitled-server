<?php

use \Esensi\Model\SoftModel;

class Spot extends SoftModel {
	/**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

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
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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
    ];
}
