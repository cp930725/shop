<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\models\Admin;
use App\models\AdminLoginLog;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Cookie::get('remember_token')) {
            $admin = Admin::where('remember_token', \Cookie::get('remember_token'))->first();
            session(['adminName' => $admin->admin]);
        }
        return view('admin.login.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'admin'    => 'required',
            'pwd'     => 'required',
        ]);
        $admin = $request->input('admin');
        $pwd = $request->input('pwd');
        $remember = $request->input('remember', '0');

        $res = Admin::where('admin', $admin)->orWhere('phone', $admin)->orWhere('email', $admin)->first();
        if ($remember == '1') {
            $token = str_random(64);
            $res->remember_token = $token;
            $res->save();
            \Cookie::queue('remember_token', $token);
        } else {
            $res->remember_token = null;
            $res->save();
            \Cookie::queue('remember_token', null);
        }

        if ($res->status == '1') {
            return back()->with('error', '该账号已被禁用');       
        }    

        if (Hash::check($pwd, $res->pwd)) {

                session(['admin' => $res, 'adminInfo' => $res->adminInfo, 'adminFlag' => true]);

                return redirect('/admin/index')->with('success', '登录成功');
        } else {
            return back()->with('error', '账号或密码错误');
        }
    }

    /**
     * 退出登录 
     *
     */
    public function logout()
    {
        session(['admin' => null, 'adminName' => null, 'adminInfo' => null, 'adminFlag' => false]);

        return redirect('/admin/login');
    }

}
