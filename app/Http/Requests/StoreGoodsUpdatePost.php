<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGoodsUpdatePost extends FormRequest
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
            
            'name' => 'required|max:255',           
            'price' => 'required|regex:/^\d{1,6}(\.\d*)?$/',
            'stock' => 'required|numeric',
            'brand' => 'required',
            'addr' => 'required',
            'title' => 'required',
            'intro' => 'required',
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => '商品名不能为空!',
            'price.required' => '价格不能为空!',
            'price.regex' => '请输入最大为6位数金额!',
            'stock.required' => '库存不能为空!',
            'stock.numeric' => '请输入数字!',
            'brand.required' => '品牌不能为空!',
            'addr.required' => '产地不能为空!',
            'title.required' => '标题不能为空!',
            'intro.required' => '简介不能为空',

        ];
    }
}
