<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\h_order;
use App\Http\Model\h_food;
use App\Http\Model\order_info;

class UorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = session('userinfo')['id'];
        
        $data = h_order::where('uid',$uid)
                       ->get();
        $sinfo = [];
        $ainfo = [];
        foreach ($data as $k => $v) {
            $sinfo[] = $v->shop;
            $ainfo[] = $v->h_addr;
        }
        return view('home.like.order',compact('data','sinfo','ainfo'));
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
        $data = order_info::where('oid',$id)
                          ->get();
        $finfo = [];
        $add = '';
        foreach($data as $k => $v){
            $finfo[] = h_food::where('id',$v->fid)
                             ->first();
            $add += $v->f_price * $v->oi_num;
        }
        return view('home.like.orderInfo',compact('data','finfo','add','status'));
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
    public function update($id)
    {

        //
        $res = h_order::where('id',$id)
                      ->update(['o_status'=>4]);
        return 1;
        // if($res){
        //     return 1;
        // }else{
        //     return 2;
        // }
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
