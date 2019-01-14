<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests\StorePwdPost;
use App\Http\Controllers\Controller;

class PassWordController extends Controller
{
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
