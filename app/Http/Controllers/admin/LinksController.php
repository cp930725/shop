<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Link;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::get();
        return view('admin.links.index', ['links'=>$links]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Link;
        $data->name = $request->input('name');
        $data->href = $request->input('href');
        $res = $data->save();
        if ($res) {
            return redirect('/admin/links')->with('success', '修改成功');
        } else {
            return back()->with('error', '修改失败');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $links = Link::find($id);
        return view('admin.links.edit', ['links'=>$links]);
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
        $links = Link::find($id);
        $links->name = $request->input('name');
        $links->href = $request->input('href');
        $res = $links->save();
        if ($res) {
            return redirect('/admin/links')->with('success', '修改成功');
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
        $links = Link::find($id);
      
        $res = $links->delete();

        if($res) { 
            return back()->with('success', '删除成功!');
        } else {
            return back()->with('success', '删除失败!');
        }
    }
}
