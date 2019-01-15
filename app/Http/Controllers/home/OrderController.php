<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\GoodsInfo;
use App\models\Goods;
use App\models\Order;
use App\models\OrderInfo;
use App\models\UserAddr;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $data = Order::where('users_id', '1')->orderBy('id','desc')->paginate(100);

    
        return view('home.order.index', ['data'=>$data, 'title'=>'订单表']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        foreach (session('cnt') as $key => $value) {
            foreach (session('id') as $value) {
                $arr[$key]['id'] = $value;
                $arr[$key]['cnt'] = $value;
            }
        }
        foreach ($arr as $key => $value) {
            
                $goods_info[$key] = GoodsInfo::find($value['id']);
                $goods_info[$key]->cnt = $value['cnt'];
        }
        $datasum = 0;
        foreach ($goods_info as $k => $v) {
            $datasum += $v->price * $v->cnt;
        }
        
        return view('home.order.create', ['title'=>'订单表','goods_info'=>$goods_info,'datasum'=>$datasum]);
    }

    public function ordersdata(Request $req)
    {

        $arr = $req->input('goods_info_id');
        $arr2 = $req->input('cnt');
        session(['id'=>$arr,'cnt'=>$arr2]);
        if ( empty(session('id'))) {
            echo 'error';
        } else {
            echo 'success';
        }

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        $data = new Order;
        $data->users_id = '1';///////////////////////////////////////
        $data->oid = date('YmdHis').mt_rand(1000,9999);
        $data->sum = $request->input("sum");
        $data->user_addr_id = $request->input("user_addr_id");
        $cnt = 0;
        foreach (session('cnt') as $key => $value) {
            $cnt += $value;
        }
        $data->cnt = $cnt;
        $data->msg = $request->input("msg");
        $res = $data->save();

        foreach (session('cnt') as $key => $value) {
            foreach (session('id') as $value) {
                $arr[$key]['id'] = $value;
                $arr[$key]['cnt'] = $value;
            }
        }
        $n = 0;
        foreach ($arr as $key => $value) {
            
                $goods_info[$key] = GoodsInfo::find($value['id']);
                $goods[$key] = Goods::find($goods_info[$key]->goods_id);

                $datainfo = new OrderInfo;
                $datainfo->orders_id = $data->id;
                $datainfo->goods_info_id = $value['id'];
                $datainfo->name = $goods[$key]->name;
                $datainfo->pic = $goods_info[$key]->goods->pic;
                $datainfo->price = $goods_info[$key]->price;
                $datainfo->cnt = $value['cnt'];

                $res2 = $datainfo->save();
                if ($res2) {
                    $n++;
                }       
          }        
            if ($res && $n == count($arr)) {
                DB::commit();
                return redirect('/home/orders')->with('success', '订单提交成功');
            } else {
                DB::rollBack();
                return back()->with('error', '订单提交失败');
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


    public function createaddr(Request $request)
    {
        $data = new UserAddr;
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->addr = $request->input('addr');
        $data->users_id = '1';
        $res = $data->save();
        $id = $data->id;
        if ($res) {
            $msg = ['success'=>'success','id'=>$id];
            echo json_encode($msg); 
            exit;
        } else {
            $msg = ['error'=>'error'];
            echo json_encode($msg);
            exit;
        } 
    }
}
