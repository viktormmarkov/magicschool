<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Characteristics extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'characteristics';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function Products(){
        return $this->belongsToMany('App\Models\Product','product_characteristics','product_id','char_id');
    }
}