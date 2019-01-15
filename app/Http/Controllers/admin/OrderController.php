<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    public function index(Request $req)
    {
        $num = 10;
        if ($req->paginate) {
            $num = $req->paginate;
        }
        $keyword = $req->input('keyword', '');

        $order = Order::where('oid', 'like', '%'.$keyword.'%')->orderBy('oid','desc')->paginate($num);

        return view('admin.orders.index', ['order'=>$order, 'title'=>'订单列表', 'num'=>$num, 'keyword'=>$keyword]);
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
        $data = Order::where('id', $id)->first();
        return view('admin.orders.edit',['title'=>'修改订单','data'=>$data]);
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
        $data = Order::find($id);
        $data2 = UserAddr::find($data->user_addr_id);

        DB::beginTransaction();

        $data2->name = $request->input('name');
        $data2->phone = $request->input('phone');
        $data2->addr = $request->input('addr');
        $res2 = $data2->save(); 

        $data->msg = $request->input('msg');
        $res = $data->save();

        if ($res && $res2) {
            DB::commit();
            return redirect('/admin/orders')->with('success', '修改成功');
         } else {
            DB::rollBack();
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
        //
    }
}
