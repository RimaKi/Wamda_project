<?php

namespace App\Http\Controllers;

use App\Http\Requests\Result\StoreRequest;
use App\Http\Requests\Result\testResultRequest;
use App\Http\Resources\ResultResource;
use App\Models\Child;
use App\Models\Group;
use App\Models\Result;
use App\Services\ResultService;

class ResultController extends Controller
{
    protected $resultService;
    public function __construct(ResultService $resultService)
    {
        $this->resultService=$resultService;
    }

    public function store(StoreRequest $request){
         $this->resultService->storeResult($request->validated());
        return self::success();
    }

    public function update(Result $result,$mark){
        $result = $this->resultService->updateResult($result,$mark);
        return self::success(new ResultResource($result));
    }

    public function resultsForExpert($child){

        return ResultResource::collection(Result::all());
        $results = Result::query()->where('childId',$child)
            ->whereNull('mark')->with('question')->get();
        return self::success(ResultResource::collection($results));
    }

    public function testResult(Child $child){
        $results = $this->resultService->testResult($child);
        return self::success($results);
    }
}
