<?php

namespace App\Http\Controllers\frontend\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Socialite;


class LoginController extends Controller
{
 
  protected $folder = 'frontend.form.';

    public function getLogin()
    {
      return view($this->folder.'login');
    }

    public function postLogin(Request $request)
    {
       $credentials = $request->only('email', 'password');
      if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
       return redirect('/');
   }else{
     return back()->with('error_login','Email hoặc mật khẩu không đúng');
   }
    }

   public  function getLogout(Request $request){
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
   }

   public function redirectToGoogle($driver)
   {
       return Socialite::driver($driver)->redirect();
   }

   public function handleGoogleCallback($driver)
   {
       try {
           $user = Socialite::driver($driver)->user();
         //  dd($user);
       } catch (\Exception $e) {
           return redirect()->route('get.login');
       }
   
       $existingUser = User::where('email', $user->email)->first();
   
       if ($existingUser) {
           auth()->login($existingUser, true);
       } else {
           $newUser                    = new User;
           $newUser->google_id         = $user->id;
           $newUser->name              = $user->name;
           $newUser->password          = $user->token;
           $newUser->email             = $user->email;
           $newUser->email_verified_at = now();
           $newUser->avatar            = $user->avatar;
           $newUser->role              = 'user';
           $newUser->save();
   
           auth()->login($newUser, true);
       }
       return redirect('/');
   }


}
