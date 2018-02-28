<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\shop;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = shop::all();

        return view('admin.shop.index',['data'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shop.create');
    }

    /**
     * 添加商铺
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 添加商铺表单验证
        $this->validate($request,[
            's_name'    =>'required | max:8',
            's_addr'   =>'required',
            's_title'  =>'required | max:50',
            's_status' =>'required',
            's_page'    =>'required'
        ],[
            's_name.required'   => '请填写商铺名称',
            's_name.max'        => '用户名长度不能超过8位',
            's_addr.required'  => '请填写商铺地址',
            's_title.required' => '请填写商铺简介',
            's_title.max'      => '商铺简介不能超过50个字符',
            's_page.required'   => '请上传商铺图片'
        ]);
        $res = shop::add($request);
        if($res){
            return redirect('admin/shop')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
        
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
        // 获取要修改用的信息
        $res = shop::update_one($id);
        $s_face = rtrim(',',$res->s_face);
        $s_face = explode(',', $res->s_face);
        array_pop($s_face);
        return view('admin.shop.edit',['data'=>$res,'s_face'=>$s_face]);
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
        // 修改商铺表单验证
        $this->validate($request,[
            's_name'    =>'max:8',
            's_addr'   =>'max:30',
            's_title'  =>'max:50',
            's_status' =>'required',
        ],[
            's_name.max'        => '用户名长度不能超过8位',
            's_addr.max'  => '商铺地址不能超过30个字符',
            's_title.max'      => '商铺简介不能超过50个字符',
        ]);

        $row = shop::doupdate($request,$id);
        if($row > 0){
            return redirect('admin/shop')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
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
        $row = shop::del($id);
        if($row){
            return back()->with('success','删除成功');
        }else{
            return back()->with('errot','删除失败');
        }
    }
}
