<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Goods;
use App\models\Cate;
use App\Http\Requests\StoreGoodsPost;
use DB;
use App\Http\Requests\StoreGoodsUpdatePost;
use Illuminate\Support\Facades\Storage;
use App\models\GoodsInfo;


class GoodsController extends Controller
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

        $goods = DB::table('goods')->where('title', 'like', '%'.$keyword.'%')->paginate($num);
        return view('admin.goods.index', ['goods'=>$goods, 'num'=>$num, 'keyword'=>$keyword, 'title'=>'商品管理']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cates = Cate::where('pid', '0')->get();
        return view('admin.goods.create', ['cates'=>$cates, 'title'=>'添加商品']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGoodsPost $request)
    {
        $request->flashExcept('_token', 'pic', 'sub_pic', 'cate2', 'cate3');
        $data = $request->except('_token', 'cate1', 'cate2', 'cate3');

        if($request->hasFile('pic')){
            $profile = $request->file('pic');
           
            $res = $profile->store('goods/pic'); 

            $data['pic'] = '/uploads/'.$res;
        }else{
           return back()->with('error', '主图添加失败'); 
        }

        if($request->hasFile('sub_pic')){
            $profile = $request->file('sub_pic');
           
            $res = $profile->store('goods/subpic'); 

            $data['sub_pic'] = '/uploads/'.$res;
        }else{
           return back()->with('error', '附图添加失败'); 
        }

        if($request->input('cate3')) {
            $data['cates_id'] = $request->input('cate3');
        } else {
            $data['cates_id'] = $request->input('cate2');
        }

        $res = DB::table('goods')->insert($data);

        if ($res) {

            return redirect('/admin/goods')->with('success', '添加商品成功');

        } else {

            return back()->with('error', '添加商品失败');

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
        $goods_info = GoodsInfo::where('goods_id', $id)->get();
        return view('admin.goodsinfo.index', ['title'=>'版本列表', 'gid'=>$id, 'goods_info'=>$goods_info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $goods = Goods::find($id);

        return view('admin.goods.edit', ['title'=>'修改商品', 'goods'=>$goods]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGoodsUpdatePost $request, $id)
    {
        $data = $request->except('_token', '_method');
        $goods = Goods::find($id);

        if($request->hasFile('pic')) {
            $profile = $request->file('pic');
           
            $res = $profile->store('goods/pic'); 

            $data['pic'] = '/uploads/'.$res;

            Storage::delete(str_replace('/uploads', '', $goods->pic));

        }
        

        if($request->hasFile('sub_pic')) {
            $profile = $request->file('sub_pic');
           
            $res = $profile->store('goods/subpic'); 

            $data['sub_pic'] = '/uploads/'.$res;

            Storage::delete(str_replace('/uploads', '', $goods->sub_pic));
        }


        $res = Goods::where('id', '=', $id)->update($data);

        if ($res) {

            return redirect('/admin/goods')->with('success', '修改商品成功');

        } else {

            return back()->with('error', '修改商品失败');

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
       $goodsinfo = GoodsInfo::where('goods_id', $id)->first();
       if($goodsinfo) {
        return back()->with('error1', '该商品下有其他版本,不能删除!');
       }

       $goods = Goods::find($id);
       $res = $goods->delete();

       if($res) {
        return back()->with('success', '删除成功!');
       } else {
        return back()->with('error1', '删除失败!');
       }
    }

    public function shift(Request $request)
    {
        $goods = Goods::find($request->input('gid'));

        if($goods->status == 1) {
            $goods->status = 2;
            $res = $goods->save();
            if($res) {
                echo 2; exit;
            } else {
                echo 'error'; exit;
            }
        }

        if($goods->status == 2) {
            $goods->status = 1;
            $res = $goods->save();
            if($res) {
                echo 1; exit;
            } else {
                echo 'error'; exit;
            }
        }
    }
}
