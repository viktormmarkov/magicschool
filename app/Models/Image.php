<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'images' ;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url','title','active','order',
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