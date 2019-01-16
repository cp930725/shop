<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Slid;
use App\Http\Requests\StoreSlidPost;

class SlidController extends Controller
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
        
        $slids = Slid::where('url', 'like', "%{$key}%")->orderBy($order, $data)->paginate($paginate);;
        return view('admin.slids.index', ['title' => '轮播图列表', 'key'=>$key, 'paginate'=>$paginate, 'order'=>$order, 'data'=>$data, 'slids' => $slids]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slids.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSlidPost $request)
    {
        $data = $request->only(['url', 'status', 'sort']);
        $image = $request->file('image');
        $path = $image->store('images');
        $data['image'] = $path;

        $slid = new Slid;
        foreach ($data as $key => $value) {
            $slid[$key] = $value;
        }
        

        $res = $slid->save();

        if ($res) { 
            return redirect('/admin/slids')->with('success', '添加成功');
        } else {
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slid = Slid::find($id);
        return view('admin.slids.edit', ['slid' => $slid]);
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
        $data = $request->only(['url', 'status', 'sort']);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('images');
            $data['image'] = $path;
        }

        $slid = Slid::find($id);

        foreach ($data as $key => $value) {
            $slid[$key] = $value;
        }
        

        $res = $slid->save();

        if ($res) { 
            return redirect('/admin/slids')->with('success', '修改成功');
        } else {
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
        $res = Slid::destroy($id);
        
        if ($res) {
            echo 'success';
        } else {
            echo 'error';
        }
    }
}
