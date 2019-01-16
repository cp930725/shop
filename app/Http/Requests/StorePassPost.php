<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePassPost extends FormRequest
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
            'pwd' => 'required|between:6,15|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'pwd.required'      => '新密码不能为空',
            'pwd.between'       => '请输入6-15位新密码',
            'pwd.confirmed'     => '两次密码不一致'
        ]
    }
}
