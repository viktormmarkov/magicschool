<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'codes';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'UniqueName','xp','ap'
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