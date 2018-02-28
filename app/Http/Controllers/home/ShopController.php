<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\shop;
use App\Http\Model\h_food;
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
        $f_data = h_food::where('id',$id)->first();
        Cart::add(array('id' => $f_data->id, 'name' => $f_data->f_name, 'qty' => 1, 'price' => $f_data->f_price));
        $cart = Cart::content();
        session(['cart[]' => $cart]);
        // dd(session('cart'));
        // var_dump(session('cart'));
        return back();
    }
}
