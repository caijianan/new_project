<?php

namespace App\Http\Controllers\shop;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\model\h_order;
use App\Http\model\order_info;
use App\Http\model\h_food;


class ShopPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $res = h_order::all();
        // // dd($res);
        // return view('shop.shoppage.index',['data'=>$res]);

        $res = h_order::paginate(8);
        return view('shop.shoppage.index', ['res'=>$res]);
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
    public function edit(Request $request, $id)
    {
        $data = as_type::where('id', $id)->update($list);
        // dd($res);
        return $data;

        
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
        // $res = $request->o_status;
        // $status = h_order::where('id',$id)->update(['o_status'=>$res]);
        // if($status) {
        //     return 1;
        // } else {
        //     return 0;
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

     public function info($id)
    {
        $res = h_order::where('id',$id)->first();
        $o_res = $res->order_info;
        $arr = [];
        foreach ($o_res as $key => $value) {
            $arr[]  = h_food::where('id',$value->fid)->first();
        }
        return view('shop.shoppage.info',['arr'=>$arr,'order'=>$res,'orinfo'=>$o_res]);
    }

    public function dingdan(Request $request,$id)
    {
        $res = $request->input('o_status');
        $status = h_order::where('id',$id)->update(['o_status'=>$res]);
        return $status;
    }
}
