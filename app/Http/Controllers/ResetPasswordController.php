<?php

namespace App\Http\Controllers;

use App\Services\ResetPasswordService;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    protected $resetPasswordService;

    public function __construct(ResetPasswordService $resetPasswordService)
    {
        $this->resetPasswordService = $resetPasswordService;
    }

    public function sentResetPasswordLink(Request $request)
    {
       $request->validate([
            "email" => "required|email",
        ],$request->all());
        $this->resetPasswordService->sendEmail($request->only(['email']));
        return self::success(null, "تم إرسال رابط لإعادة تعيين كلمة المرور");
    }
    public function reset(Request $request)
    {
       $request->validate([
            "email" => "required|email",
            "token" => "required|string",
            "password" => "required|string|confirmed",
        ]);
        $res = $this->resetPasswordService->resetPassword($request->only(['email', 'token', 'password']));
        return self::success(null, $res);
    }

}
