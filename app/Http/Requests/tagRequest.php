<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tagRequest extends FormRequest
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
            't_name' => 'required|unique:tags,t_name,' .$this->id,
        ];
    }

    public function messages()
    {
        return [
            't_name.required' => 'Nhập tên danh mục',
            't_name.unique' => 'Danh mục này đã tồn tại',
        ];
    }
}
