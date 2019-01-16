<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\models\User;

class LoginController extends Controller
{
    /**
     * 登录页
     */
    public function index()
    {
        if (\Cookie::get('user_token')) {
            $user = user::where('user_token', \Cookie::get('user_token'))->first();
            $code = $user->code;
            session(['userName' => $user->$code]);
        }
        return view('home.login.index');
    }

    /**
     * 手机验证码登陆
     *
     */
    public function phone(Request $request)
    {
        $phone = $request->input('phone');
        $tel_code = $request->input('tel_code');

        if ($tel_code == session('tel_code')) {
            $user = User::where('phone', $phone)->first();
            if ($user) {
                session(['user' => $user, 'userInfo' => $user->adminInfo, 'userFlag' => true]);
                return 'success';            
            } else {
                return 'error';
            }
        } else {
            return 'error';
        }
    }

    /**
     * 账号密码登录
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'name'    => 'required',
            'pwd'     => 'required',
            'captcha' => 'required|captcha',
        ]);
        $name = $request->input('name');
        $pwd = $request->input('pwd');
        $remember = $request->input('remember', '0');


        $user = User::where('name', $name)->orWhere('phone', $name)->orWhere('email', $name)->first();
        if ($user) {
            if (Hash::check($pwd, $user->pwd)) {
                if ($remember == '1') {
                    $token = str_random(64);
                    $user->user_token = $token;

                    if ($user->name == $name) {
                        $user->code = 'name';
                    } else if ($user->phone == $name) {
                        $user->code = 'phone';
                    } else if ($user->email == $name) {
                        $user->code = 'email';
                    }

                    $user->save();
                    \Cookie::queue('user_token', $token);
                } else {
                    $user->user_token = null;
                    $user->save();
                    \Cookie::queue('user_token', null);
                }

                session(['user' => $user, 'userInfo' => $user->adminInfo, 'userFlag' => true]);

                return 'success';
            } else {
                return 'error';
            }
        }
            return 'error';
    }

    /**
     * 退出登录
     */
    public function logout()
    {
        session(['user' => null, 'userInfo' => null, 'userFlag' => null]);
        return redirect('/login');
    }
}
