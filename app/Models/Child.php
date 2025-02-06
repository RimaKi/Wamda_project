<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

;

class Child extends Model
{
    protected $connection = 'mongodb';
    protected $fillable = [
        'parentId',
        'name',
        'birthday',
        'isMale'
    ];
    protected $casts = [
        'birthday' => 'date'
    ];

    public function parent()
    {
        return $this->belongsTo(User::class, 'parentId', '_id');
    }
}
