<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserPost;
use App\Http\Requests\StoreUserUpdatePost;
use Illuminate\Support\Facades\Hash;
use App\models\User;
use App\models\UserInfo;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $paginate = $request->input('paginate', 10);
        $key = $request->input('key', '');
        $order = $request->input('order', 'id');
        $data = $request->input('data', 'asc');
        
        $users = User::where('phone', 'like', "%{$key}%")->orWhere('email', 'like', "%{$key}%")->orWhere('name', 'like', "%{$key}%")->orderBy($order, $data)->paginate($paginate);;
        return view('admin.users.index', ['title' => '用户列表', 'key'=>$key, 'paginate'=>$paginate, 'order'=>$order, 'data'=>$data, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPost $request)
    {
        DB::beginTransaction();
        $data = $request->only(['name', 'pwd', 'email', 'phone']);

        $user = new User;
        foreach ($data as $key => $value) {
            $user[$key] = $value;
        }
        
        $user['pwd'] = Hash::make($data['pwd']);

        $res = $user->save();

       
        if($request->hasFile('face')){
            $face = $request->file('face');
            $path = $face->store('images');
            $data['face'] = $path;
        }

        $data = $request->only(['btd', 'nickname', 'sex', 'city']);
        $data['users_id'] = $user->id;

        $info = new UserInfo;
        foreach ($data as $key => $value) {
            $info[$key] = $value;
        }

        $res2 = $info->save();

        if ($res && $res2) { 
            DB::commit();
            return redirect('/admin/users')->with('success', '添加成功');
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
        $user = UserInfo::where('users_id', $id)->first();
        return view('admin.users.show', ['title'=>'详细信息', 'user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUserUpdatePost $request, $id)
    {
        DB::beginTransaction();
        $data = $request->only(['name', 'email', 'phone']);

        $user = User::find($id);
        foreach ($data as $key => $value) {
            $user[$key] = $value;
        }
        
        $res = $user->save();
       
        if($request->hasFile('face')){
            $face = $request->file('face');
            $path = $face->store('images');
            $data['face'] = $path;
        }

        $data = $request->only(['btd', 'nickname', 'sex', 'city']);
        $data['users_id'] = $user->id;

        $info = UserInfo::where('users_id', $id)->first();
        foreach ($data as $key => $value) {
            $info[$key] = $value;
        }

        $res2 = $info->save();

        if ($res && $res2) { 
            DB::commit();
            return redirect('/admin/users')->with('success', '修改成功');
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
        
        $res2 = UserInfo::where('users_id', $id)->delete();
        $res = User::destroy($id);
        
        if ($res && $res2) {
            echo 'success';
            DB::commit();
        } else {
            echo 'error';
            DB::rollBack();
        }
    }
}
