<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'characters' ;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','src'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}