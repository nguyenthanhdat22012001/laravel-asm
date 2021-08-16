<?php

namespace App\Http\Controllers\backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginBackendController extends Controller
{
    protected $folder = 'backend.auth.';

    public function login(){

        return view($this->folder.'login');
    }

    public function postLogin(Request $request)
    {
       $credentials = $request->only('email', 'password');
            if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password'], 'role' => 'admin'])) {
            return redirect()->route('get_backend.home');
        }else{
            return back()->with('error_login','Email hoặc mật khẩu không đúng');
        }
    }

    public  function getLogout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('get.home');
    }
}
