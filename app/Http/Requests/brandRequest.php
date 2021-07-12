<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class brandRequest extends FormRequest
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
            'br_name' => 'required|unique:brands,br_name,' .$this->id,
        ];
    }

    public function messages()
    {
        return [
            'br_name.required' => 'Nhập tên danh mục',
            'br_name.unique' => 'Danh mục này đã tồn tại',
        ];
    }
}
