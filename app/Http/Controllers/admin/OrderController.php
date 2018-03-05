<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\h_order;
use App\Http\model\order_info;
use App\Http\model\h_food;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = h_order::all();
        // dd($res);
        return view('admin.order.index',['data'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo '添加订单页面';
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
     * 订单详情
     * @param  [type] $id 订单id(订单号)
     * @return [type]     [description]
     */
    public function show($id)
    {


        $res = h_order::where('id',$id)->first();
        
        $o_res = $res->order_info; 
        // dd($o_res); 
        $arr = [];
        foreach ($o_res as $key => $value) {
            $arr[]  = h_food::where('id',$value->fid)->first();
        }
        return view('admin.order.info',['arr'=>$arr,'order'=>$res,'orinfo'=>$o_res]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = h_order::where('id',$id)->first();
        return view('admin.order.edit',['data'=>$data]);
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
        $res = $request->except('_token','_method');

        $row = h_order::where('id',$id)->update($res);
        if($row > 0){
            return redirect('admin/order')->with('success','修 改 订 单 成 功');
        }else{
            return back()->with('error','修 改 订 单 失 败');
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
        $row = h_order::where('id',$id)->delete();
        $o_row = order_info::where('oid',$id)->delete();
        if($row > 0 && $o_row > 0){
            return 1;
        }else{
            return 0;
        }
    }
}
