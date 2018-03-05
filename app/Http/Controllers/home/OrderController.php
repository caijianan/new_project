<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\h_order;
use App\Http\Model\order_info;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $id = session('userinfo')['id'];
        $res = h_order::where('uid',$id)->get();
        $o_res = $res->morder_info;
        $arr = [];
        foreach ($o_res as $key => $value) {
            $arr[]  = h_food::where('id',$value->fid)->first();
        }
        dd($arr);
        return view('home.order.index');
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
        // 更新订单主表
        $h_order = $request->only('o_sum','o_msg','o_pay');
        $h_order['aid'] = $request->input('aid')[0];
        // 订单号
        $h_order['id'] = rand(1000,9999);
        // 下单时间
        $h_order['o_ctime'] = time();
        $h_order['uid'] = session('userinfo')['id'];
        // 订单状态
        $h_order['o_status'] = 1;
        $row = h_order::insert($h_order);
        // 更新订单详情表
        // 订单id
        $oid = $h_order['id'];
        // 商品id
        $fid = $request->input('fid');
        $f_price = $request->input('f_price');
        $oi_num = $request->input('oi_num');
        $data = [];
        $data['oid'] = $oid;
        foreach ($fid as $k => $v) {
            $data['fid'] = $v;
            $id = order_info::insertGetId($data);
            $row = order_info::where('id',$id)->update(['f_price'=>$f_price[$k],'oi_num'=>$oi_num[$k]]);
        }
        if(!empty($id)){
            $request->session()->forget('cart');
            return view('home.car.order');
        }
        // dd($oi_num);
        
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
