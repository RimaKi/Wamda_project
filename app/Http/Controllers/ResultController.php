<?php

namespace App\Http\Controllers;

use App\Http\Requests\Result\StoreRequest;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function store(StoreRequest $request){
        $data = $request->validated();
        $question = Question::where('_id',$data['questionId'])->first();
        if($question->typeAnswer != 'صوت' || $question->typeAnswer != 'صورة' ){
            $data['mark']= $question->answer == $data['answer'] ? $question->mark : 0;
        }
        Result::create($data);
        return self::success();
    }
}
