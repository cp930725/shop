<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Cate;
use App\models\Goods;
use DB;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {   
        $num = 10;
        if ($req->paginate) {
            $num = $req->paginate;
        }

        $keyword = $req->input('keyword', '');

        $cates = DB::table('cates')->where('name', 'like', '%'.$keyword.'%')->select('*',DB::raw("concat(path,id,',') as paths"))->orderBy('paths','asc')->paginate($num);

        foreach ($cates as $k=>$v) {
            $n = substr_count($v->path, ',') -1;
            $str_pad = str_repeat('　', $n*1).'|--';
            $v->name = $str_pad.$v->name;
        }

        return view('admin.cates.index', ['cates'=>$cates, 'title'=>'类别管理', 'num'=>$num, 'keyword'=>$keyword]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $cates = Cate::where('pid', '0')->get();
     
        return view('admin.cates.create', ['title'=>'添加分类', 'cates'=>$cates]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cate = new Cate;

        if ($request->id == 0) {

            $cate->pid = '0';
            $cate->path = '0,';

        } else if ($request->id2 == null) {

            $cate->pid = $request->id;
            $cate->path = Cate::find($request->id)->path.$request->id.',';

        } else {

            $cate->pid = $request->id2;
            $cate->path = Cate::find($request->id2)->path.$request->id2.',';

        }
        $cate->name = $request->name;
        $res = $cate->save();

        if ($res) {
            
            return redirect('/admin/cates')->with('success', '添加成功');
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
        $cate = Cate::find($id);
        return view('admin.cates.edit', ['title'=>'修改类名', 'cate'=>$cate]);
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
       $cate = Cate::find($id);
       $cate->name = $request->name;
       $res = $cate->save();

       if ($res) {

        return redirect('/admin/cates')->with('success', '修改成功');

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
        $cates = Cate::where('pid', $id)->first();
        $goods = Goods::where('cates_id', $id)->first();
    
        if ($cates) {
            return back()->with('error1', '该类下有子分类,删除失败!');
        }

        if ($goods) {
            return back()->with('error1', '该类下有商品,不能删除!');
        }

        $cate = Cate::find($id);
        $res = $cate->delete();

        if ($res) {
            
            return back()->with('success', '删除成功');
         } else {
            
            return back()->with('error1', '删除失败');
         } 
    }

    public function getcates(Request $req)
    {
        if ($req->pid == 0) {
            $data = [];
        } else {

            $data = Cate::where('pid', $req->pid)->get();
        }


        echo json_encode($data);

    }

    public function createcates($id) 
    {
        $cate = Cate::find($id);
        return view('admin.cates.createcates', ['title'=>'添加子分类', 'cate'=>$cate]);
    }

    public function insert(Request $req)
    {
        $cate = new Cate;
        $cate->name = $req->name;
        $cate->pid = $req->pid;
        $oldcate = Cate::find($req->pid);
        $cate->path = $oldcate->path.$oldcate->id.',';
        $res = $cate->save();

        if ($res) {

            return redirect('/admin/cates')->with('success', '添加子分类成功');

        } else {

            return back()->with('error', '添加子分类失败');

        }
    }
}
