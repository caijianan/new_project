<?php

namespace App\Http\Controllers\shop;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\h_food;
use App\Http\Model\hf_type;
use App\Http\Model\shop;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $food = new h_food;

        $foodname = empty($request->input('foodname'))?'':$request->input('foodname');
        // 搜索菜品名称
        if($request->has('foodname')) {
            $fname = $request->foodname;
            $food->where('f_name','like',"%$fname%");
        } else {
            $food = new h_food;
        }

        // 限定每页显示条数
        if ($request->has('pagenum')) {
            $page = $request->pagenum;
        } else {
            $page = 5;
        }

        $data = $food->paginate($page);
        // 获取类别名
        foreach($data as $k=>$v) {
            $data[$k]['f_tname'] = hf_type::where('id',$v->tid)->value('tname');
        }

        return view('shop.food.index',compact('data','foodname','page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop.food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('insert page'); 
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
