<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\User;

class PwdController extends Controller
{
    /**
     * 修改密码页
     */
    public function getReset()
    {
    	return view('home.pwd.reset');
    }

    /**
     * 修改密码
     */
    public function postReset()
    {
    	$oldPwd = $request->input('oldPwd');
        $pwd = $request->input('pwd');
        $id = session('user')->id;

        $user = User::find($id);

        if (Hash::check($oldPwd, $admin->pwd)) {
            $user->pwd = Hash::make($pwd);

            $res = $user->save();
        }

        if (empty($res)) { 
            return 'success';
        } else {
            return 'error';
        }
    }

    /**
     * 忘记密码页
     */
    public function getPhone()
    {
    	return view('home.pwd.phone');
    }

    /**
     * 忘记密码
     */
    public function postPhone(Request $request)
    {
    	if (session('tel_code') == $request->input('tel_code')) {
    		$phone = $request->input('phone');
	        $res = User::where('phone', $phone)->first();
	        
	        if ($res) {
	            return 'success';
	        } else {
	            return 'error';
	        }
    	} else {
    		return 'error';
    	}
    }

    /**
     * ajax验证 手机号是否存在
     */
    public function phone(Request $request)
    {
        $phone = $request->input('phone');
        $res = User::where('phone', $phone)->first();
        
        if ($res) {
            return json_encode(['valid' => true]);
        } else {
            return json_encode(['valid' => false]);
        }
    }
}
