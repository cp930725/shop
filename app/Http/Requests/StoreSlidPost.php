<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSlidPost extends FormRequest
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
            'image'     => 'required|file',
            'url'       => 'required',
            'sort'      => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'iamge.file'        => '轮播图上传失败',
            'iamge.required'    => '轮播图不能为空',
            'url.required'      => '跳转地址不能为空',
            'url.url'           => '跳转地址格式不正确',
            'sort.required'     => '序号不能为空',
            'sort.integer'      => '序号格式不正确',
        ];
    }
}
