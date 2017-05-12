<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Attribute;

class AttributeType extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    protected $table = 'attribute_types' ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
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
    public function Attributes(){
        return $this->belongsToMany('App\Models\Attribute','attribute_sets','attr_type_id','attr_id');
    }
    */

    public function getAttrValues(){
        $attr = Attribute::where('attr_type_id',$this->attributes['id'])->get();
        return $attr;
    }
}