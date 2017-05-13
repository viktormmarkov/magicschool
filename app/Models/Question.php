<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Question extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    protected $table = 'question' ;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question','time','ap','xp','user_id','answer_id','classes_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function teacherName() {

        $teacher = User::where('id',$this->attributes['user_id'])->first();
        return $teacher['Name'];
    }
}