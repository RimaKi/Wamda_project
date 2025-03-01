<?php

namespace App\Http\Controllers;

use App\Http\Requests\Children\StoreRequest;
use App\Http\Resources\ChildResource;
use App\Models\Child;

class ChildrenController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->validationData();
        $data['parentId'] = auth()->user()->_id;
        Child::create($data);
        return self::success(null, 'added successfully', 200);
    }

    public function index(){
        $children = auth()->user()->children;
        return self::success(ChildResource::collection($children));
    }

    public function show(Child $child)
    {
        return self::success(new ChildResource($child));
    }
}
