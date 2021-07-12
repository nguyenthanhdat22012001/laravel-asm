<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class discountRequest extends FormRequest
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
            'd_number' => 'required|numeric|min:0|unique:discounts,d_number,' .$this->id,
        ];
    }

    public function messages()
    {
        return [
            'd_number.required' => 'Nhập giảm giá',
            'd_number.unique' => 'Giảm Giá này đã tồn tại',
            'd_number.min' => 'Giảm giá không hợp lệ',
        ];
    }
}
