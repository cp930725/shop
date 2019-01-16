<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::where('users_id', session('user')->id)->get();
       
        return view('home.cart.index', ['carts'=>$carts, 'title'=>'我的购物车']);
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
        $cart = Cart::find($id);

        $res = $cart->delete();

        if($res) {
            echo 'success';
        } else {
            echo 'error';
        }
    }

    public function insert(Request $request)
    {
        $number = $request->input('number');
        $users_id = $request->input('user_id');
        $goods_info_id = $request->input('goodsinfo_id');

        $cart2 = Cart::where('users_id', $users_id)->where('goods_info_id', $goods_info_id)->first();

        if($cart2) {
            $newnumber = (int)($cart2->number) + (int)$number;
            $cart2->number = $newnumber;
            $res = $cart2->save();

            if($res) {
            echo 'success';
            } else {
                echo 'error';
            }
        } else {
            $cart = new Cart;
            $cart->number = $number;
            $cart->users_id = $users_id;
            $cart->goods_info_id = $goods_info_id;
            $res = $cart->save();

            if($res) {
                echo 'success';
            } else {
                echo 'error';
            }
        }


        
    }

    public function delete(Request $request)
    {
        foreach($request->input('cids') as $k=>$v) {
            $cate = Cart::find($v);
            $res = $cate->delete();

            if(!$res) {
                echo 'error'; exit;
            }
        }

        echo 'success';
    }
}
