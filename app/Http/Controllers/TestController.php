<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterRequest;
use App\Http\Requests\SendEmailRequest;
use App\Http\Resources\QuestionResource;
use App\Http\Resources\TestResource;
use App\Mail\SendEmailToParentRequest;
use App\Mail\SentNotificationEmail;
use App\Models\Child;
use App\Models\Group;
use App\Models\Question;
use App\Models\User;
use Carbon\Carbon;
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
    public function sendEmailToParent(SendEmailRequest $request)
    {
        $data=$request->validated();
        $parent=User::query()->where("id", $data["parentId"])->firstorFail();
        if(!$parent->children()->where('_id', $data["childId"])->exists()){
            throw new \Exception("there are wrong parent email");
        }
        Mail::to($parent->email)->send(new SendEmailToParentRequest([
            'childName' => Child::where("_id", $data["childId"])->first()->name,
            "parent" => $parent,
        ]));
        return self::success();
    }
}
