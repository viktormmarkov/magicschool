<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    protected $table = 'skills' ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description','passive','req_lvl','req_skill','bonus','bonus_field'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function Characters(){
        return $this->belongsToMany('App\Models\Character','characters_has_skills','skill_id','char_id');
    }

    /*
    public function AttributeTypes(){
        return $this->belongsToMany('App\Models\AttributeType','attribute_sets','attr_type_id','attr_id');
    }
    */

}