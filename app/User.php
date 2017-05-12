<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','password','level','name','family','Access_level','Class_in_school','Character_type','xp','ap','sp'
    ];

    /*
    protected $fillable = [
        'name','email','password',
    ];
    */
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ]; 

    public function isAdmin()
    {
        return $this->Access_level == 1; // this looks for an admin column in your users table
    }
    public function isTeacher()
    {
        return $this->Access_level == 2; // this looks for an admin column in your users table
    }
    public function isStudent()
    {
        return $this->Access_level == 3; // this looks for an admin column in your users table
    }

    public function skills() {
        return $this->belongsToMany('App\Models\Skill','users_skills','user_id','skill_id');
    }
}
