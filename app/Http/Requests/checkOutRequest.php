<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkOutRequest extends FormRequest
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
            'or_name' => 'required|string|max:255',
            'or_phone' => 'regex:/^0[0-9]{9}$/',
            'or_address' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'or_name.required' => 'Nhập họ Tên',
            'or_name.string' => 'Nhập kí tự chữ',
            'or_name.max' => 'Tối đa 255 kí tự',
            'or_phone.regex' => 'Không đúng dạng số điện thoại',
        ];
    }
}
