<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Size;

class Order extends Model
{   
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'orders' ;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','family','email','city','address','phone','region',
        'payment_type',
        'firm_name','firm_eik','firm_address','firm_mol',
        'description',
        'egn',
        'cancel','activate',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function products(){
        return $this->belongsToMany('App\Models\Product','order_products','order_id','product_id')->withPivot('count','size_id');
    }

    
}