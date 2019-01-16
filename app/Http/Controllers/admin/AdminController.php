<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminPost;
use App\Http\Requests\StorePassPost;
use Illuminate\Support\Facades\Hash;
use App\models\Admin;
use App\models\AdminInfo;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   $paginate = $request->input('paginate', 10);
        $key = $request->input('key', '');
        $order = $request->input('order', 'id');
        $data = $request->input('data', 'asc');

        $admins = Admin::where('admin', 'like', "%{$key}%")->orWhere('phone', 'like', "%{$key}%")->orderBy($order, $data)->paginate($paginate);
        return view('admin.admins.index', ['title'=>'管理员列表', 'key'=>$key, 'paginate'=>$paginate, 'order'=>$order, 'data'=>$data, 'admins'=>$admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminPost $request)
    {
        DB::beginTransaction();
        $data = $request->only(['admin', 'pwd', 'status', 'email', 'phone', 'auth']);

        $admin = new Admin;
        foreach ($data as $key => $value) {
            $admin[$key] = $value;
        }
        
        $admin['pwd'] = Hash::make($data['pwd']);

        $res = $admin->save();

       if($request->hasFile('face')){
            $face = $request->file('face');
            $path = $face->store('images');
            $data['face'] = $path;
        }

        $data = $request->only(['service', 'name', 'sex', 'city']);
        $data['admins_id'] = $admin->id;

        $info = new AdminInfo;
        foreach ($data as $key => $value) {
            $info[$key] = $value;
        }

        $res2 = $info->save();

        if ($res && $res2) { 
            DB::commit();
            return redirect('/admin/admins')->with('success', '添加成功');
        } else {
            DB::rollBack();
            return back()->with('error', '添加失败');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $admin = AdminInfo::where('admins_id', $id)->first();
        return view('admin.admins.show', ['title'=>'详细信息', 'admin'=>$admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.admins.edit', ['admin'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        $data = $request->only(['admin', 'email', 'status', 'phone', 'auth']);

        $admin = Admin::find($id);
        foreach ($data as $key => $value) {
            $admin[$key] = $value;
        }

        $res = $admin->save();

       
        if($request->hasFile('face')){
            $face = $request->file('face');
            $path = $face->store('images');
            $data['face'] = $path;
        }

        $data = $request->only(['service', 'name', 'sex', 'city']);

        $info = AdminInfo::where('admins_id', $id)->first();
        foreach ($data as $key => $value) {
            $info[$key] = $value;
        }

        $res2 = $info->save();

        if ($res && $res2) { 
            DB::commit();
            return redirect('/admin/admins')->with('success', '修改成功');
        } else {
            DB::rollBack();
            return back()->with('error', '修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        
        $res2 = AdminInfo::where('admins_id', $id)->delete();
        $res = Admin::destroy($id);
        
        if ($res && $res2) {
            echo 'success';
            DB::commit();
        } else {
            echo 'error';
            DB::rollBack();
        }
    }

    /**
     * 个人中心
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function info($id)
    {
        $admin = Admin::find(1);
        return view('admin.admins.info', ['title'=>'个人中心', 'admin'=>$admin]);
    }

    /**
     * 操作日志
     */
    public function log()
    {
        return view('admin.admins.log');
    }

    /**
     * 后台修改密码页面
     */
    public function getPwd($id)
    {
        $admin = Admin::find($id);
        return view('admin.admins.pwd', ['admin' => $admin]);
    }

    /**
     * 修改密码
     */
    public function postPwd(StorePassPost $request, $id)
    {
        $data = $request->input('pwd');
        $admin = Admin::find($id);
        $admin->pwd = $data;
        $res = $admin->save();
        if ($res) {
            return redirect('/admin/admins')->with('success', '修改成功');
        } else {
            return back()->with('error', '修改失败');
        }
    }
}
