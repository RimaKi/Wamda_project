<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

;

class Group extends Model
{
    protected $connection = 'mongodb';
    protected $fillable = [
        'subject',
        'title',
        'minimumMark'
    ];

}
