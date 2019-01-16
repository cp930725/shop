<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\GoodsInfo;
use App\models\GoodsImage;
use App\models\Goods;
use App\models\UsersGoods;

class GoodsInfoController extends Controller
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
        
        $data = GoodsInfo::where('goods_id', $id)->first();

        if($data == null) {
            return back();
        }

        $goods = Goods::find($id);
        $goodsname = $goods->name;  
        $goodsinfo = GoodsInfo::where('goods_id', $id)->get();     
        $goodsimage = [];
        foreach($goodsinfo[0]->getGoodsImage as $k=>$v) {
            if($v->status == 1) {
                $goodsimage[] = $v;
            }
        };

        if(session('user')) {

            $like = UsersGoods::where('users_id', session('user')->id)->get();
            $goodsid = [];
            foreach($like as $k=>$v) {
                $goodsid[] = $v->goods_id;
            }
        } else {
            $goodsid = [];
        }
        return view('home.goodsinfo.show', ['goods'=>$goods, 'goodsinfo'=>$goodsinfo, 'goodsimage'=>$goodsimage, 'goodsid'=>$goodsid, 'title'=>$goodsname]);
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
        //
    }

    public function getGoodsInfo(Request $request)
    {
        $id = $request->input('id');
        $goodsinfo = GoodsInfo::find($id);
        $goodsimg = $goodsinfo->getGoodsImage;
        $goodsimage = [];
        $goodsimage2 = [];
        foreach($goodsimg as $k=>$v) {
            if($v->status == 1) {
                $goodsimage[] = $v;
            } else {
                $goodsimage2[] = $v;
            }
        }
        $arr = [];
        $arr['goodsinfo'] = $goodsinfo;
        $arr['goodsimage'] = $goodsimage;
        $arr['goodsimage2'] = $goodsimage2;
        echo json_encode($arr);
    }
}
