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

    Route::apiResource('/children', ChildrenController::class)->only('store', 'show','index');
    Route::get('/test/{groupId}', [TestController::class,'index']);
    Route::get('/groups', [TestController::class,"getGroups"]);
    Route::post('/send-email/{child}', [TestController::class,"sendEmail"]);

    Route::post('/results',[ResultController::class,'store']);
    Route::get('/testResult/{child}',[ResultController::class,'testResult']);

    //expert
    Route::put('/results/{result}/{mark}',[ResultController::class,'update']);
    Route::get('/results-for-expert/{child}',[ResultController::class,'resultsForExpert']);

});
