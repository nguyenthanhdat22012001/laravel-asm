<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class paymentRequest extends FormRequest
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
            'pay_name' => 'required|unique:payments,pay_name,' .$this->id,
        ];
    }
    public function messages()
    {
        return [
            'pay_name.required' => 'Nhập Tên Phương Thức Thanh Toán',
            'pay_name.unique' => 'Phương Thức Thanh Toán này đã tồn tại',
        ];
    }
}
