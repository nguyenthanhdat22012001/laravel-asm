<?php

namespace App\Http\Controllers\frontend\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundationve\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $folder = 'frontend.form.';

    public function getRegister()
    {

      return view($this->folder.'register');
    }

    public function postRegister(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'min:8', 'confirmed'],
                //'password_confirmation' => 'required|same:password',
            ],
            [
                'name.required' => 'Nhập họ Tên',
                'email.required' => 'Nhập địa chỉ Email',
                'email.unique' => 'Địa chỉ Email Này Đã tồn Tại',
                'password.required' => 'Nhập Mật khẩu',
                'password.min' => 'Mật Khẩu ít nhất 8 kí tự',
                'password.confirmed' => 'Mật khẩu xác nhận không khớp',
               // 'password_confirmation.same' => 'Mật khẩu không khớp',
            ],
    );
        $data = $request->all();
        $check = $this->create($data);
        return redirect('login')
        ->with('register_login','Đăng ký Thành Công');
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user',
        ]);
    }
    // /*
    // |--------------------------------------------------------------------------
    // | Register Controller
    // |--------------------------------------------------------------------------
    // |
    // | This controller handles the registration of new users as well as their
    // | validation and creation. By default this controller uses a trait to
    // | provide this functionality without requiring any additional code.
    // |
    // */

    // use RegistersUsers;

    // /**
    //  * Where to redirect users after registration.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = RouteServiceProvider::HOME;

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    // /**
    //  * Get a validator for an incoming registration request.
    //  *
    //  * @param  array  $data
    //  * @return \Illuminate\Contracts\Validation\Validator
    //  */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\Models\User
    //  */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'role' => 'admin',
    //     ]);
    // }
}
