<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterRequest;
use App\Http\Resources\QuestionResource;
use App\Http\Resources\TestResource;
use App\Mail\SentNotificationEmail;
use App\Models\Child;
use App\Models\Group;
use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($groupId)
    {
        $question =  Question::query()->where('groupId',$groupId)->with('branchesQuestion')->get();
        return self::success(QuestionResource::collection($question));
    }

    public function getGroups()
    {
        return self::success(Group::all()->groupBy("subject"));
    }

    public function sendEmail(Child $child)
    {
        Mail::to(User::query()->where("role", "expert")->first()->email)->send(new SentNotificationEmail([
            'name' => $child->name,
        ]));
        return self::success();
    }
}
