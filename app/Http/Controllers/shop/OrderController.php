<?php

namespace App\Http\Controllers\shop;

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
    public function index(Request $request)
    {
        // dd('我的订单');
        // $res = h_order::all();
        // dd($res);
        // return view('shop.order.index',['data'=>$res]);
        $res = new h_order;
        $id = empty($request->input('id'))?'':$request->input('id');
        if($id){
            $res = h_order::where('id','=',$id);
        }
        $res = $res->paginate(8);

        return view('shop.order.index',compact('res','id'));
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
        $res = h_order::where('id',$id)->first();
        $o_res = $res->order_info;
        $arr = [];
        foreach ($o_res as $key => $value) {
            $arr[]  = h_food::where('id',$value->fid)->first();
        }
        return view('shop.order.info',['arr'=>$arr,'order'=>$res,'orinfo'=>$o_res]);
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
