<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users' ;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','password','level','name','family','Access_level','Class_in_school','Character_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function skills() {
        return $this->belongsToMany('App\Models\Skill','users_skills','user_id','skill_id');
    }
    public function activeskills () {
        return $this->belongsToMany('App\Models\Skill','users_skills','user_id','skill_id')->where('passive',0);
    }
     public function questions() {
        return $this->belongsToMany('App\Models\Question','send_question_to_user','user_id','question_id');
    }
    public function characterName() {
        $producer = Character::where('id',$this->attributes['Character_type'])->first();
        return $producer['Name'];
    }
}