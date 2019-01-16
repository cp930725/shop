<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminUpdatePost extends FormRequest
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
            'admin'     => 'required|between:6,15',
            'phone'     => 'required|digits:11',
            'email'     => 'required|email',
            'service'   => 'required|digits:4',
            'face'      => 'file',
        ];
    }

    public function messages()
    {
        return [
            'admin.required'    => '账号不能为空',
            'admin.between'     => '请输入6-15位账号',
            'phone.required'    => '手机号不能为空',
            'phone.digits'      => '手机号格式不正确',
            'email.required'    => '邮箱不能为空',
            'email.email'       => '邮箱格式不正确',
            'service.required'  => '编号不能为空',
            'service.digits'    => '编号格式不正确',
            'face.file'         => '头像上传失败'
        ];
    }
}
