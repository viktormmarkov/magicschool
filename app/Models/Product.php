<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Size;
use App\Models\Producer;

class Product extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'products' ;
    public $price = '';
    public $old_price = '';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cat_id','producer_id','name','discount','description','image','title','gift','active','ask','zerop','allowzerop','delivery',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function Attributes(){
        return $this->belongsToMany('App\Models\Attribute','product_attributes','product_id','attr_id');
    }

    public function Characteristics(){
        return $this->belongsToMany('App\Models\Characteristics','product_characteristics','product_id','char_id');
    }  

    public function SizePrice($id){
        $size = Size::where('id',$id)->first();
        return $size['price'];
    }    

    public function Price(){
        $size = Size::where('product_id',$this->attributes['id'])->orderBy('price')->first();
        if($size['old_price']) $result = $size['old_price'];
        else $result = $size['price']*(100-$this->attributes['discount'])/100;
        return $result;
    }

    public function oldPrice(){
        $size = Size::where('product_id',$this->attributes['id'])->orderBy('price')->first();
        return $size['price'];
    }

    public function catTitle(){
        $catInfo = Category::where('id',$this->attributes['cat_id'])->first();
        return $catInfo['title'];
    }

    public function producerImage(){
        $producer = Producer::where('id',$this->attributes['producer_id'])->first();
        return $producer['image'];
    }

    public function producerTitle() {
        $producer = Producer::where('id',$this->attributes['producer_id'])->first();
        return $producer['name'];

    }
    public function orders(){
        return $this->belongsToMany('App\Models\Product','order_products','product_id','order_id')->withPivot('count');
    }
    public function delivery() {
        return $this->Price()<100 or $this->attributes['delivery']>0 ;
    }



    public function size(){
        return $this->hasMany('App\Models\Size','product_id','id');
    }

    public function producer(){
        return $this->hasOne('App\Models\Producer','id','producer_id');
    }
}