<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserUpdatePost extends FormRequest
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
            'name'      => 'required|between:6,15',
            'phone'     => 'required|digits:11',
            'email'     => 'required|email',
            'face'      => 'file',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => '账号不能为空',
            'name.between'      => '请输入6-15位账号',
            'phone.required'    => '手机号不能为空',
            'phone.digits'      => '手机号格式不正确',
            'email.required'    => '邮箱不能为空',
            'email.email'       => '邮箱格式不正确',
            'face.file'         => '头像上传失败'
        ];
    }
}
