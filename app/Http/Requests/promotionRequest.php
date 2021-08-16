<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class promotionRequest extends FormRequest
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
            'promo_sku' => 'required|unique:promotions,promo_sku,' .$this->id,
            'promo_price' => 'required|numeric|min:0',
        ];
    }
    public function messages()
    {
        return [
            'promo_sku.required' => 'Nhập Mã Khuyến Mãi',
            'promo_sku.unique' => 'Mã Khuyến Mãi này đã tồn tại',
            'promo_price.required' => 'Nhập Giá Khuyến Mãi',
            'promo_price.min' => 'Giá Khuyến Mãi không hợp lệ',
        ];
    }
}
