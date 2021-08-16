<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoryChildRequest extends FormRequest
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
            'cchild_name' => 'required|unique:category_children,cchild_name,' .$this->id,
        ];
    }

    public function messages()
    {
        return [
            'cchild_name.required' => 'Nhập tên danh mục con',
            'cchild_name.unique' => 'Danh mục con này đã tồn tại',
        ];
    }
}
