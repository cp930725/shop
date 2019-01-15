<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Goods;
use App\models\Sale;
use DB;
use App\Http\Requests\StoreSalePost;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::all();
        return view('admin.sales.index', ['title'=>'活动商品管理', 'sales'=>$sales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {   
        $num = 10;
        if ($req->paginate) {
            $num = $req->paginate;
        }

        $keyword = $req->input('keyword', '');

        $goods = DB::table('goods')->where('title', 'like', '%'.$keyword.'%')->paginate($num);
        return view('admin.sales.create', ['goods'=>$goods, 'num'=>$num, 'keyword'=>$keyword, 'title'=>'添加活动商品']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalePost $request)
    {
        $sale = new Sale;
        $sale->title = $request->input('title');
        $sale->discount = $request->input('discount');
        $sale->goods_id = $request->input('goods_id');
        $res = $sale->save();

        if ($res) {

            return redirect('/admin/sales')->with('success', '添加活动商品成功');

        } else {

            return back()->with('error', '添加活动商品失败');

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
        $goods = Goods::find($id);
        return view('admin.sales.show', ['title'=>'添加活动商品', 'goods'=>$goods]);
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
