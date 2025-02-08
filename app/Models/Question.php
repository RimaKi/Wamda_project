<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;;

class Question extends Model
{
    protected $connection = 'mongodb';
    protected $guarded=['_id'];
}
