<?php

use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::post("/login", [UserController::class, "login"]);
Route::post("/register", [UserController::class, "register"]);

Route::middleware("auth:sanctum")->group(function () {
    Route::post("/logout", [UserController::class, "logout"]);
    Route::get("/profile", [UserController::class, "profile"]);
    Route::get("/getExpert", [UserController::class, "getExpert"]);

    Route::apiResource('/children', ChildrenController::class)->only('store', 'show');

});
