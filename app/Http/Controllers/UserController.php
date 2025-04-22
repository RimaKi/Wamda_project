<?php

namespace App\Http\Controllers;


use App\Http\Requests\Use\SendEmailToSupportRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\UserRequest;
use App\Http\Resources\UserResource;
use App\Mail\SendEmailToSupport;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $data = $request->all();
        $data["password"] = Hash::make($data["password"]);
        $data["role"] = "parent";
        $user = User::create($data);
        $token = $user->createToken($request->ip())->plainTextToken;
        return self::success([
            "user" => (new UserResource($user)),
            "token" => $token
        ]);
    }

    public function login(UserRequest $request)
    {

        $data = $request->only(["email", "password"]);


        if (!Auth::attempt($data)) {
            throw new \Exception("wrong email or password");
        }
        $user = \auth()->user();
        $token = $user->createToken($request->ip())->plainTextToken;

        return self::success(["user" => (new UserResource($user)),
            "token" => $token]);


    }

    public function logout()
    {
        \auth()->user()->tokens()->delete();
        return self::success();
    }

    public function profile()
    {
        return self::success(new UserResource(\auth()->user()->load('children')));
    }

    public function getExpert()
    {
        return self::success(new UserResource(User::where("role", "expert")->first()));
    }
    public function edit(RegisterRequest $request)
    {
        \auth()->user()->update($request->validated());
        return self::success(new UserResource(\auth()->user()->load('children')));
    }

    public function sendEmailToSupport(SendEmailToSupportRequest $request){;
        Mail::to('ehdidgd@gmail.com')->send(new SendEmailToSupport($request->only('message')));
        return self::success(null,'Email sent successfully');
    }
}
