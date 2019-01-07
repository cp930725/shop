<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGoodsInfoUpdatePost extends FormRequest
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
            'version' => 'required',
            'num' => 'required',
            'price' => 'required|numeric|regex:/^\d{1,6}(\.\d*)?$/',
            'stock' => 'required|numeric',
            'content' => 'required',
            
        ];
    }

    public function messages() 
    {
        return [
            
            'version.required' => '版本名不能为空!',
            'num.required' => '商品编号不能为空!',
            'price.required' => '价格不能为空!',
            'stock.required' => '商品数量不能为空!',
            'content.required' => '商品描述不能为空!',
            'price.numeric' => '请输入数字',
            'stock.numeric' => '请输入数字',
            'price.regex' => '请输入不大于6位数金额',
        ];
    }
}
