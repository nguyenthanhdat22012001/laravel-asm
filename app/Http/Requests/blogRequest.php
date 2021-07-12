<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class blogRequest extends FormRequest
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
            'bl_name' => 'required|unique:blogs,bl_name,' .$this->id,
            'bl_categoryBlog_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'bl_name.required' => 'Nhập Tiêu Đề Blog',
            'bl_name.unique' => 'Blog này đã tồn tại',
            'bl_categoryBlog_id.required' => 'Chọn Danh Mục Blog'
        ];
    }
}
