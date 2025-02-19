<?php

namespace App\Http\Controllers;

use App\Http\Resources\TestResource;
use App\Models\Group;
use App\Models\Question;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups=Group::with("questions.branchesQuestion")->get();
//        return $groups;
        return self::success((TestResource::collection($groups))) ;
    }
}
