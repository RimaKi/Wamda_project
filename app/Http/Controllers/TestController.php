<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterRequest;
use App\Http\Resources\TestResource;
use App\Models\Group;
use App\Models\Question;
use Illuminate\Http\Request;

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
        return Group::all()->groupBy("subject");
    }
}
