<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;;

class Question extends Model
{
    protected $connection = 'mongodb';
    protected $guarded=['_id'];



    public  function branchesQuestion(){
        return $this->hasMany(Question::class,"mainQuestionId","_id");
    }

}
