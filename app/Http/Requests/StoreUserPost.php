<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'required|between:6,15',
            'pwd'       => 'required|between:6,15',
            'repwd'     => 'same:pwd',
            'phone'     => 'required|digits:11',
            'email'     => 'required|email',
            'face'      => 'present|file',

        ];
    }

    public function messages()
    {
        return [
            'user.required'    => '账号不能为空',
            'user.between'     => '请输入6-15位账号',
            'pwd.required'      => '密码不能为空',
            'pwd.between'       => '请输入6-15位密码',
            'repwd.same'        => '两次密码不一致',
            'phone.required'    => '手机号不能为空',
            'phone.digits'      => '手机号格式不正确',
            'email.required'    => '邮箱不能为空',
            'email.email'       => '邮箱格式不正确',
            'face.file'         => '头像上传失败'
        ];
    }
}
