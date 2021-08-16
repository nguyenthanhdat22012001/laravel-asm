<?php

namespace App\Http\Controllers\frontend\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
   // protected $redirectTo = RouteServiceProvider::HOME;

    protected $folder = 'frontend.form.';

    public function getPassword($token) {

        return view($this->folder.'password.reset', ['token' => $token]);
     }
 
     public function updatePassword(Request $request)
     {
         $request->validate(
        [
             'email' => 'required|email|exists:users',
             'password' => 'required|string|min:8|confirmed',
             'password_confirmation' => 'required',
 
         ], 
         [
            'email.required' => 'Nhập địa chỉ Email',
            'email.unique' => 'Địa chỉ Email Này Đã tồn Tại',
            'password.required' => 'Nhập Mật khẩu',
            'password.min' => 'Mật Khẩu ít nhất 8 kí tự',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp',

         ],
    );
 
         $updatePassword = DB::table('password_resets')
                             ->where(['email' => $request->email, 'token' => $request->token])
                             ->first();
 
         if(!$updatePassword)
             return back()->withInput()->with('error', 'Yều cầu thay đổi đã bị xóa!');
 
           $user = User::where('email', $request->email)
                       ->update(['password' => Hash::make($request->password)]);
 
           DB::table('password_resets')->where(['email'=> $request->email])->delete();
 
           return redirect('/login')->with('message', 'Mật khẩu của bạn đã được thay đổi!');
     }
}
