<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePwdPost extends FormRequest
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
            'oldPwd' => 'required|between:6,15',
            'pwd' => 'required|between:6,15|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'oldPwd.required'   => '请输入旧密码',
            'oldPwd.between'    => '旧密码格式不正确',
            'pwd.required'      => '新密码不能为空',
            'pwd.between'       => '请输入6-15位新密码',
            'pwd.confirmed'     => '两次密码不一致'
        ];
    }
}
