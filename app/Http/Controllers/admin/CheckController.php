<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Order;
use App\models\Check;
use App\models\Returns;
use App\models\Barter;
use DB;

class CheckController extends Controller
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

        $data = Check::where('oid', 'like', '%'.$keyword.'%')->orderBy('oid','desc')->paginate($num);

        return view('admin.checks.index', ['data'=>$data, 'title'=>'退换货审核表', 'num'=>$num, 'keyword'=>$keyword]);
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
        $data = Check::where('id',$id)->first(); 
        return view('admin.checks.edit',['title'=>'审核表','data'=>$data]);
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

        DB::beginTransaction(); 

        $data = $request->except('name','order_create','created_at','updated_at','deleted_at','_token','_method');
        
        //$data['users_id'] =  '1';
        $res = Check::where('id', $id)->update($data);

        if($res){

            $data['name'] = $request->input('name');

            $data['order_create'] = $request->input('order_create');

            if ($data['status'] ==1) {

                $data['check_id'] = $id;

                if ($data['type'] == 2) {
                    $data2 = new Barter;
                    foreach ($data as $key => $value) {
                        $data2->$key = $value;
                    }
                    $res2 = $data2->save();
                    if($res2){
                        DB::commit();
                        return redirect('/admin/barters')->with('success', '修改成功');
                    } else {
                        DB::rollBack();
                        return back()->with('error', '修改失败');
                    }
                } else {
                    $data2 = new Returns;
                    foreach ($data as $key => $value) {
                        $data2->$key = $value;
                    }
                    $res2 = $data2->save();

                    if($res2){
                        DB::commit();
                        return redirect('/admin/returns')->with('success', '修改成功');
                    } else {
                        DB::rollBack();
                        return back()->with('error', '修改失败');
                    }
                }
            } else {
                DB::commit();
                return redirect('/admin/checks')->with('success', '修改成功');
            }
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
