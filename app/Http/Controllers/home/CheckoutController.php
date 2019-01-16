<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Order;
use App\models\OrderInfo;
use App\models\Check;
use DB;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Check::where('users_id', session('user')->id)->get();
        
        return view('home.checkout.index', ['title'=>'申请退换货','data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {


        $data = OrderInfo::where('id',$id)->first();

        $data2 = Order::where('id', $data->orders_id)->first();

        return view('home.checkout.create', ['title'=>'申请退换货','data'=>$data, 'data2'=>$data2]);
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
        $data = new Check; 
          $data->order_info_id = $request->input('order_info_id');
          $data->goods_id = $request->input('goods_id');
          $data->oid = $request->input('oid');
          $data->cnt = $request->input('cnt');
          $data->sum = $request->input('sum');
          $data->type = $request->input('type');
          $data->users_id = session('user')->id;
        $res = $data->save();

        $type = OrderInfo::where('id',$data->order_info_id)->first();
        $type->type = $data->type;
        $res2 = $type->save();
        if ($res && $res2) {
            DB::commit();
            return redirect('/home/checkout')->with('success', '订单提交成功');
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
}
