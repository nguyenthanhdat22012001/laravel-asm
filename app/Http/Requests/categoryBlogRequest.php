<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoryBlogRequest extends FormRequest
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
            'cbl_name' => 'required|unique:category_blogs,cbl_name,' .$this->id,
        ];
    }
    public function messages()
    {
        return [
            'cbl_name.required' => 'Nhập tên danh mục Blog',
            'cbl_name.unique' => 'Danh mục Blog này đã tồn tại',
        ];
    }
}
