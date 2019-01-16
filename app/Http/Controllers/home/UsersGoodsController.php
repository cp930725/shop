<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\UsersGoods;
use App\models\Goods;

class UsersGoodsController extends Controller
{
    public function index()
    {	
    	$like = UsersGoods::where('users_id', session('user')->id)->get();
        $goodsid = [];
        foreach($like as $k=>$v) {
            $goodsid[] = $v->goods_id;
        }

        $goods = Goods::whereIn('id', $goodsid)->paginate(9);
    	return view('home.usersgoods.index', ['goods'=>$goods, 'title'=>'我的收藏']);
    }
}
