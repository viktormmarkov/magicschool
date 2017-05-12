<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    protected $table = 'attributes' ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','attr_type_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /*
    public function AttributeTypes(){
        return $this->belongsToMany('App\Models\AttributeType','attribute_sets','attr_type_id','attr_id');
    }
    */

    public function Products(){
        return $this->belongsToMany('App\Models\Product','product_attributes','product_id','attr_id');
    }
}