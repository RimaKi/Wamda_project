<?php

use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;


Route::post("/login", [UserController::class, "login"]);
Route::post("/register", [UserController::class, "register"]);

Route::middleware("auth:sanctum")->group(function () {
    Route::post("/logout", [UserController::class, "logout"]);
    Route::get("/profile", [UserController::class, "profile"]);
    Route::get("/getExpert", [UserController::class, "getExpert"]);

    Route::apiResource('/children', ChildrenController::class)->only('store', 'show');
    Route::apiResource('/test', TestController::class)->only('index');
    Route::get('/groups', [TestController::class,"getGroups"]);

    Route::post('/results',[ResultController::class,'store']);

});
