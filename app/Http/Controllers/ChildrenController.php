<?php

namespace App\Http\Controllers;

use App\Http\Requests\Children\StoreRequest;
use App\Http\Resources\ChildResource;
use App\Models\Child;
use App\Services\ChildrenService;

class ChildrenController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->validationData();
        $data['parentId'] = auth()->user()->_id;
        Child::create($data);
        return self::success(null, 'added successfully', 200);
    }

    public function index()
    {
        $user = auth()->user();

        $children = match ($user->role) {
            'expert' => Child::all(),
            default => $user->children
        };
        return self::success(ChildResource::collection($children));
    }

    public function show(Child $child)
    {
        $data = (new ChildrenService())->showChild($child);
        return self::success($data);
    }

    public function update(StoreRequest $request, Child $child)
    {
        $child->update($request->validated());
        return self::success(null, "updated successfully");
    }

    public function destroy(Child $child){
        $child->delete();
        return self::success(null,'deleted successfully');
    }
}
