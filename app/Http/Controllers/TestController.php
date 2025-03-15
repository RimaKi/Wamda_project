<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterRequest;
use App\Http\Resources\TestResource;
use App\Mail\SentNotificationEmail;
use App\Models\Child;
use App\Models\Group;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FilterRequest $request)
    {
        $groups=Group::with("questions.branchesQuestion");
       if($request->has("title")){
            $groups=$groups->where("title","=",$request->title);
        }
        return self::success(TestResource::collection($groups->get())) ;
    }
    public function getGroups(){
        return self::success(Group::all()->groupBy("subject"));
    }
    public function sendEmail(Child $child){
        Mail::to(User::query()->where("role","expert")->first()->email)->send(new SentNotificationEmail([
            'name' => $child->name,
        ]));
        return self::success();
    }
}
