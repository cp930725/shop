<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\GoodsImage;
use Illuminate\Support\Facades\Storage;
use DB;

class GoodsImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goodsimage = GoodsImage::find($id);
        
        DB::beginTransaction();
        $res = $goodsimage->delete();

        $res2 = Storage::delete(str_replace('/uploads', '', $goodsimage->img));

        if($res && $res2) {
            DB::commit();
            return back()->with('success', '删除成功');
        } else {
            DB::rollback();
            return back()->with('error', '删除失败');
        }
    }

    public function insert(Request $request, $id)
    {   

        
        if($request->hasFile('imgs1')) {

            $profile = $request->file('imgs1');
           
           foreach($profile as $k=>$v) {
               $res = $v->store('goodsinfo/imgs1');
               $data2['img'] = '/uploads/'.$res;
               $data2['status'] = 1;
               $data2['goods_info_id'] = $id;
               $msg = DB::table('goods_image')->insert($data2);
               if(!$msg) {
                return back()->with('error', '选项卡图添加失败!');
               }
           }

           return back()->with('success', '添加成功!');
            
        }  

        if($request->hasFile('imgs2')) {

            $profile = $request->file('imgs2');
           
           foreach($profile as $k=>$v) {
               $res = $v->store('goodsinfo/imgs2');
               $data2['img'] = '/uploads/'.$res;
               $data2['status'] = 2;
               $data2['goods_info_id'] = $id;
               $msg = DB::table('goods_image')->insert($data2);
               if(!$msg) {
                return back()->with('error', '配图添加失败!');
               }
           }

           return back()->with('success', '添加成功!');
            
        } 

        return back()->with('error', '请选择至少一张图片!');
        
    }
}
