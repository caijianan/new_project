<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\shop;

use App\Http\Model\h_food;
use App\Http\Model\h_addr as addr;
use Cart;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoplist = shop::all();

        return view('home.shop.index',['shoplist'=>$shoplist]);
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

        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $shop = shop::where('id',$id)->first();
        $food = $shop->h_food;
        return view('home.shop.shopdetail',['shop'=>$shop,'food'=>$food]);
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

    /**
     * 购物车
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function car(Request $request,$id)
    {
        // Cart::destroy();
        // die;
        $f_data = h_food::where('id',$id)->first();
        Cart::add(array('id' => $f_data->id, 'name' => $f_data->f_name, 'qty' =>'1', 'price' => $f_data->f_price));
        $cart = Cart::content();
        if(!empty($cart)){
            session(['cart[]' => $cart]);
            return 1;
        }else{
            return 0;
        }
    }

    public function showcar()
    {
        $uid = session('userinfo')['id'];
        $addr = addr::where('uid',$uid)->get();
        return view('home.car.index',['addr'=>$addr]);
    }

    // 修改购物车 + 
    public function increment($id,$inc)
    {
        $cart = Cart::content();
        foreach($cart as &$v){
            if($v->id == $id){
                $v->qty += 1;
            }
        }
        return back();
    }

    // 修改购物车 - 
    public function decrease($id,$inc)
    {
        $cart = Cart::content();
        foreach($cart as &$v){
            if($v->id == $id){
                if($v->qty <= 1){
                    $v->qty = 1;
                    return back();
                }else{
                    $v->qty -= 1;
                }
            }
        }
        return back();
    }
    public function del($id)
    {
        $cart = Cart::content();
        foreach ($cart as $k => $v) {
            if($v->id == $id){
                Cart::remove($v->rowId);
                return back();
                // dd($cart[$v->rowId]);
            }
        }
    }
}
