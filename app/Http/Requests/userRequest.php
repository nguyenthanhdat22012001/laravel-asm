<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required| string|max:255| unique:users,email,'. $this->id,
            'name' => 'required|string|max:255',
            'password' => 'required|min:8|confirmed',
            'phone' => 'regex:/^0[0-9]{9}$/',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nhập họ Tên',
            'email.required' => 'Nhập địa chỉ Email',
            'email.unique' => 'Địa chỉ Email Này Đã tồn Tại',
            'password.required' => 'Nhập Mật khẩu',
            'password.min' => 'Mật Khẩu ít nhất 8 kí tự',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp',
            'phone.regex' => 'Không đúng dạng số điện thoại',
        ];
    }
}
