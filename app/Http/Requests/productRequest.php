<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
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
            'p_name' => 'required|unique:products,p_name,' .$this->id,
            'p_category_id' => 'required',
            'p_sku' => 'required |unique:products,p_sku,' .$this->id,
        ];
    }
    public function messages()
    {
        return [
            'p_name.required' => 'Nhập Tiêu Đề',
            'p_name.unique' => 'Sản Phẩm này đã tồn tại',
            'p_category_id.required' => 'Chọn Danh Mục',
            'p_sku.required' => 'Nhập Mã Sản Phẩm',
            'p_sku.unique' => 'Mã Sản Phẩm Đã Tồn Tại',
        ];
    }
}
