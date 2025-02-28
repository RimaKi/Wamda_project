<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

;

class Group extends Model
{
    protected $connection = 'mongodb';

    protected $guarded=["_id"];
    public  function questions(){
        return $this->hasMany(Question::class,"groupId","_id");
    }

    protected $fillable = [
        'subject',
        'title',
        'minimumMark'
    ];


}
