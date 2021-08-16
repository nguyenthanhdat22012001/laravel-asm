<?php

namespace App\Http\Controllers\frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class changePasswordController extends Controller
{
    protected $folder = 'frontend.form.';

    public function index(){
        return view($this->folder.'password.change');
    }

    public function updatePassword(Request $request){
        $idUser = Auth::id();
        $user = User::findOrFail($idUser);
        /*
        * Validate all input fields
        */
        $request->validate(
            [
                'password' => 'required|string|min:8|confirmed',
                'password_confirmation' => 'required',
    
            ], 
            [
               'password.required' => 'Nhập Mật khẩu',
               'password.min' => 'Mật Khẩu ít nhất 8 kí tự',
               'password.confirmed' => 'Mật khẩu xác nhận không khớp',
   
            ],
        );

        if (Hash::check($request->password_old, $user->password)) { 
            $user->fill([
             'password' => Hash::make($request->password)
             ])->save();
             
            return back()->with('success','Cập Nhật Thành Công');
           
         } else {
           
            return back()->with('error','Mật khẩu cũ không hợp lệ!');
         }
   
}
}