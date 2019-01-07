<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StorePwdPost;
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
        $admin = $request->input('admin');
        $pwd = $request->input('pwd');
        $remember = $request->input('remember', '0');

        if ($remember == '1') {
            session(['adminName' => $admin, 'adminRem' => true]);
        } else {
            session(['adminName' => null, 'adminRem' => false]);
        }
        $res = Admin::where('admin', $admin)->orWhere('phone', $admin)->orWhere('email', $admin)->first();

        if ($res->status == '1') {
            return back()->with('error', '该账号已被禁用');       
        }    

        if (Hash::check($pwd, $res->pwd)) {
            $request->setTrustedProxies(array('10.15.109.1/80'));
            $ip = $request->getClientIp();

            $loginLog = new AdminLoginLog;
            $loginLog->admins_id = $res->id;
            $loginLog->login_name = $res->admin;
            $loginLog->login_ip = $ip;
            $result = $loginLog->save();

            if ($result) {
                session(['admin' => $res, 'adminInfo' => $res->adminInfo, 'adminFlag' => true]);

                return redirect('/admin/index')->with('success', '登录成功');
            } else {
                return back()->with('error', '登录失败');
            }

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
        session(['admin' => null, 'adminInfo' => null, 'adminFlag' => false]);

        return redirect('/admin/login');
    }

    /**
     * 后台修改密码页面
     */
    public function getReset()
    {
        return view('admin.pwd.reset');
    }

    /**
     * 后台修改密码
     */
    public function postReset(StorePwdPost $request)
    {
        $oldPwd = $request->input('oldPwd');
        $pwd = $request->input('pwd');
        $id = session('admin')->id;

        $admin = Admin::find($id);

        if (Hash::check($oldPwd, $admin->pwd)) {
            $admin->pwd = Hash::make($pwd);

            $res = $admin->save();
        }

        if (empty($res)) { 
            return back()->with('error', '修改失败');
        } else {
            return redirect('/admin/logout')->with('success', '修改成功');
        }
    }
}
