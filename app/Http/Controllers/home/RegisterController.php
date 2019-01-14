<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    /**
     * 注册页
     */
    public function index()
    {
        session(['tel_code' => '']);
        return view('home.register.index');
    }

    /**
     * 注册
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required',
            'pwd'     => 'required|confirmed',
            'phone' => 'required|digits:11',
        ]);
        $tel_code = $request->input('tel_code', '');
        if ($tel_code == session('tel_code')) {

            $user = new User;
            $user['name'] = $request->input('name');
            $user['pwd'] = Hash::make($request->input('pwd'));
            $user['phone'] = $request->input('phone');
            $result = User::where('name', $user['name'])->orWhere('phone', $user['phone'])->first();

            if ($result) {
                return '账号或手机号已存在';
            } else {
                $res = $user->save();

                if ($res) {
                    return 'success';
                } else {
                    return '注册失败';
                }
            }
        }

        return '验证码不正确';
    }

    /**
     * 手机号验证
     */
    public function sendTelCode(Request $request,$tel=18830075342)
    {
        $tel_code = rand(1000,9999);
        session(['tel_code'=>$tel_code]);
        $target = "http://106.ihuyi.com/webservice/sms.php?method=Submit";
        $target .= "&account=C73141292&password=4b452906407b10fb8b8d499729461aab&mobile=".$tel."&content=您的验证码是：".rawurlencode($tel_code)."。请不要把验证码泄露给其他人。";
        //使用curl(百度)

        //初使化init方法
       $ch = curl_init();

       //指定URL
       curl_setopt($ch, CURLOPT_URL, $target);

       //设定请求后返回结果
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

       //发送请求
       $res = curl_exec($ch);

       //关闭curl
       curl_close($ch);
       return $tel_code;

    }

    /**
     * ajax验证 用户名是否存在
     */
    public function registerName(Request $request)
    {
        $name = $request->input('name');
        $res = User::where('name', $name)->first();

        if ($res) {
            return json_encode(['valid' => false]);
        } else {
            return json_encode(['valid' => true]);
        }
    }

    /**
     * ajax验证 手机号是否存在
     */
    public function registerPhone(Request $request)
    {
        $phone = $request->input('phone');
        $res = User::where('phone', $phone)->first();
        
        if ($res) {
            return json_encode(['valid' => false]);
        } else {
            return json_encode(['valid' => true]);
        }
    }
}
