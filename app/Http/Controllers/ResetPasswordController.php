<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPassword\RestRequest;
use App\Http\Requests\ResetPassword\SendEmailRequest;
use App\Services\ResetPasswordService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class ResetPasswordController extends Controller
{
    protected $resetPasswordService;

    public function __construct(ResetPasswordService $resetPasswordService)
    {
        $this->resetPasswordService = $resetPasswordService;
    }

    public function sentResetPasswordLink(SendEmailRequest $request)
    {
        $this->resetPasswordService->sendEmail($request->only(['email']));
        return self::success(null, "تم إرسال رابط لإعادة تعيين كلمة المرور");
    }
    public function reset(RestRequest $request)
    {
        $res = $this->resetPasswordService->resetPassword($request->only(['email', 'token', 'password']));
        return self::success(null, $res);
    }

}
