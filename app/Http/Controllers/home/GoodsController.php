<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Goods;
use App\models\Cate;
use App\models\UsersGoods;

class GoodsController extends Controller
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
        
        $arr_id = Cate::where('path', 'like', "%,$id,%")->get(['id']);
        $arr = [];
        
        foreach($arr_id as $k=>$v) {
            $arr[] = $v->id;
        }
        $arr[] = (int)$id;
        


        $like = UsersGoods::where('users_id', session('user'))->get();
        $goodsid = [];
        foreach($like as $k=>$v) {
            $goodsid[] = $v->goods_id;
        }

        
            
        $goods = Goods::where('status', 1)->whereIn('cates_id', $arr)->paginate(9);
        
        return view('home.goods.show', ['goods'=>$goods, 'goodsid'=>$goodsid]);
        
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

    public function like($id)
    {
        $usersgoods = new UsersGoods;
        $usersgoods->users_id = session('user');  
        $usersgoods->goods_id = $id;
        $res = $usersgoods->save();

        if($res) {
            echo 'success';
        } else {
            echo 'error';
        }
    }

    public function dislike($id)
    {
        $usersgoods = UsersGoods::where('goods_id', $id)->where('users_id', session('user'))->first();
        $res = $usersgoods->delete();

        if($res) {
            echo 'success';
        } else {
            echo 'error';
        }        
    }
}
