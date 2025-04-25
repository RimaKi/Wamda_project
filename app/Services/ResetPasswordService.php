<?php

namespace App\Services;

use App\Mail\ResetPassword;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ResetPasswordService
{
    public function sendEmail($data)
    {
        $user = User::where('email', $data['email'])->firstOrFail();

        $code = random_int(100000, 999999);


        DB::table("password_reset_tokens")->upsert(
            [
                "email" => $user->email,
                "token" => bcrypt($code),
                "created_at" => Carbon::now()
            ],
            ["token", "created_at"]
        );
        Mail::to($user->email)->send(new ResetPassword($code));
    }

    public function resetPassword($data)
    {
        $reset = DB::table('password_reset_tokens')->where("email", $data['email'])->firstOrFail();
        if (!Hash::check($data['token'], $reset->token)) {
           throw  new \Exception("كود التحقق غير صحيح");
        }
        $user = User::where('email', $data['email'])->firstOrFail();
        $user->password = Hash::make($data['password']);
        $user->save();
        DB::table('password_reset_tokens')->where("email", $data['email'])->delete();
        return "تم إعادة تعيين كلمة المرور ";
    }

}
