<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGoodsInfoPost;
use App\Http\Requests\StoreGoodsInfoUpdatePost;
use App\models\Goods;
use App\models\GoodsInfo;
use App\models\GoodsImage;
use DB;
use Illuminate\Support\Facades\Storage;

class GoodsInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.goodsinfo.create', ['title'=>'添加版本', 'gid'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGoodsInfoPost $request)
    {
        
        $request->flashExcept('_token', 'imgs1', 'imgs2');
        $data = $request->except('_token', 'imgs1', 'imgs2');
        $data2 = [];
        $goodsinfo = GoodsInfo::where('num', $request->input('num'))->first();
       
        if($goodsinfo) {
            return back()->with('error', '商品编号已存在');
        }
        $id = DB::table('goods_info')->insertGetId($data);

        if(!$id) {
            return back()->with('error', '添加失败');
        }

        // 多图上传
        if($request->hasFile('imgs1')) {

            $profile = $request->file('imgs1');
           
           foreach($profile as $k=>$v) {
               $res = $v->store('goodsinfo/imgs1');
               $data2['img'] = '/uploads/'.$res;
               $data2['status'] = 1;
               $data2['goods_info_id'] = $id;
               $msg = DB::table('goods_image')->insert($data2);
               if(!$msg) {
                return back()->with('error', '选项卡图添加失败');
               }
           }
            
        }  

        if($request->hasFile('imgs2')) {

            $profile = $request->file('imgs2');
           
           foreach($profile as $k=>$v) {
               $res = $v->store('goodsinfo/imgs2');
               $data2['img'] = '/uploads/'.$res;
               $data2['status'] = 2;
               $msg = DB::table('goods_image')->insert($data2);
               if(!$msg) {
                return back()->with('error', '配图添加失败');
               }
           }
            
        } 
        $id = $request->input('goods_id');
        return redirect('/admin/goods/'.$id)->with('success', '添加商品成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $goods_image = GoodsImage::where('goods_info_id', '=', $id)->where('status', '=', 1)->get();
        $goods_image2 = GoodsImage::where('goods_info_id', '=', $id)->where('status', '=', 2)->get();
        
        return view('admin.goodsinfo.show', ['title'=>'商品相册', 'goodsimage'=>$goods_image, 'goodsimage2'=>$goods_image2, 'id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $goods_info = GoodsInfo::find($id);

        return view('admin.goodsinfo.edit', ['title'=>'修改信息', 'goodsinfo'=>$goods_info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGoodsInfoUpdatePost $request, $id)
    {
        $data = GoodsInfo::find($id);
        $data2 = $request->except('_token', '_method');
        $res = GoodsInfo::where('id', '=', $id)->update($data2);

        if ($res) {

            return redirect('/admin/goods/'.$data->goods_id)->with('success', '修改成功');

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
        $goodsinfo = GoodsInfo::find($id);
        DB::beginTransaction();
        $res = $goodsinfo->delete();

        if(!$res) {
            DB::rollback();
            return back()->with('error', '删除失败!');
        }
        $goodsimage = GoodsImage::where('goods_info_id', $id)->get();

        foreach($goodsimage as $k=>$v) {
            $res2 = $v->delete();
            $res3 = Storage::delete(str_replace('/uploads', '', $v->img));
            if((!$res2) || (!$res3)) {
                DB::rollback();
                return back()->with('error', '删除失败!');
            }
        }

        DB::commit();
        return back()->with('success', '删除成功!');

    }
}
