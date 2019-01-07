<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    public function index()
    {
        $data = Check::all();
        return view('admin.checks.index',['title'=>'退换货审核表','data'=>$data]);
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
        $data = $request->except('created_at','updated_at','deleted_at','_token','_method');
        $data['check_id'] = $id;
        //$data['users_id'] =  '1';
        $res = Check::where('id',$id)->updata($data);

        if($res){
            if ($data['status'] ==1) {

                if ($data['type'] == 2) {

                    $barter_res = Barter::create($data);

                    if($barter_res){
                        DB::commit();
                        return redirect('/admin/barter')->with('success', '修改成功');
                    }else{
                        DB::rollBack();
                        return back()->with('error', '修改失败');
                    }
                } else {

                    $return_res = Returns::create($data);

                    if($return_res){
                        DB::commit();
                        return redirect('/admin/returns')->with('success', '修改成功');
                    }else{
                        DB::rollBack();
                        return back()->with('error', '修改失败');
                    }
                }
            }
         }else{
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
