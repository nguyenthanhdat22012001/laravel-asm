<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class categoryRequest extends FormRequest
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
            'c_name' => 'required|unique:categories,c_name,' .$this->id,
            
        ];
    }

    public function messages()
    {
        return [
            'c_name.required' => 'Nhập tên danh mục',
            'c_name.unique' => 'Danh mục này đã tồn tại',
        ];
    }
}
