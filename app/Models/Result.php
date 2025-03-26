<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use MongoDB\Laravel\Eloquent\Model;

;

class Result extends Model
{
    protected $connection = 'mongodb';
    protected $guarded = ['_id'];

//    protected $fillable=[
//        "questionId",
//        "childId",
//        "answer",
//        "mark"
//    ];

    protected $casts = [
        'mark' => 'float'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class, 'questionId', '_id');
    }

    public function child()
    {
        return $this->belongsTo(Child::class, 'childId', '_id');
    }

    public function URLAnswer(){
        if(!is_array($this->answer)){
            if ($this->answer != null && Storage::disk("public")->exists($this->answer)) {
                return Storage::disk('public')->url($this->answer);
            }
        }
        return $this->answer;
    }


}
