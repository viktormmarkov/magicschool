<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Category extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    protected $table = 'categories' ;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','parent_id','title',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];


    public function getSubCategories(){
        $categories = Category::where('parent_id',$this->attributes['id'])->get();
        return $categories;
    }
}