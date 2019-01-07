<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGoodsPost extends FormRequest
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
            'cate2' => 'required',
            'name' => 'required|max:255',
            'pic' => 'required',
            'sub_pic' => 'required',
            'price' => 'required|numeric|regex:/^\d{1,6}(\.\d*)?$/',
            'stock' => 'required|numeric',
            'brand' => 'required',
            'title' => 'required',
            'addr' => 'required',
            'intro' => 'required',

        ];
    }

    public function messages() 
    {
        return [
            'name.required' => '商品名不能为空!',
            'cate2.required' => '请选择分类!',
            'pic.required' => '主图不能为空!',
            'sub_pic.required' => '附图不能为空!',
            'price.required' => '价格不能为空!',
            'price.numeric' => '请输入数字!',
            'stock.required' => '库存不能为空!',
            'stock.numeric' => '请输入数字!',
            'brand.required' => '品牌不能为空!',
            'title.required' => '标题不能为空!',
            'addr.required' => '产地不能为空!',
            'intro.required' => '简介不能为空!',
            'price.regex' => '请输入不大于6位数金额',

        ];
    }
}
