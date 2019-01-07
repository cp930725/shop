<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Barter;

class BarterController extends Controller
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

        $data = Barter::where('oid', 'like', '%'.$keyword.'%')->orderBy('oid','desc')->paginate($num);

        return view('admin.return.index', ['data'=>$data, 'title'=>'换货列表', 'num'=>$num, 'keyword'=>$keyword]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $request->except('created_at','updated_at','deleted_at');

        $checkbarter = new Barter;
        foreach ($data as $k => $v) {
            $checkreturn->$k = $v;
        }
        $checkbarter->admin_id = '1';
        $res = $checkbarter->save();
        if($res){
             return redirect('/admin/checks')->with('success', '修改成功');
         }else{
             return back()->with('error', '修改失败');
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
        $data = Barter::find($id);
        //dd($data);
        $order = Order::where('oid', $data->oid)->first();
        //sdd($order);

        return view('admin.barterinfo.index',['title'=>'换货用户信息','order'=>$order]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data = Barter::find($id);
        
        return view('admin.barter.edit',['title'=>'退货信息修改表', 'data'=>$data]);
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
        $data = Barter::find($id);
        $data->status = $request->input('status'); 
        $data->reason = $request->input('reason');
        $res = $data->save();

        if ($res) {  
            return redirect('/admin/barters')->with('success', '修改成功');
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
        //
    }
}
