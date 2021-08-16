<?php

namespace App\Http\Controllers\frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    protected $folder = 'frontend.form.';

    public function getEmail()
    {

       return view($this->folder.'password.email');
    }

    public function postEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(60);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        Mail::send($this->folder.'password.verify',['token' => $token], function($message) use ($request) {
                  $message->from('shoppo-nguyenthanhcong@gmail.com');
                  $message->to($request->email);
                  $message->subject('Thông báo đặt lại mật khẩu');
               });

        return back()->with('message', 'Chúng tôi đã gửi qua e-mail liên kết đặt lại mật khẩu của bạn!');
    }
}
