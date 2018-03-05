<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\h_addr;


class AddrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd(session('userinfo'));
        $uid = session('userinfo')->id;

        $data = h_addr::where('uid',$uid)
                      ->get();
        return view('home.like.addr',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return $_GET;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uid = session('userinfo')->id;
        $data = $request->except('_token');
        $all = h_addr::where('uid',$uid)
                     ->get();
        if(count($all) >= 8){
            return back()->with('error','只能添加八个地址');
        }
        if(empty(trim($data['address']))){
            return back()->with('error','请填写地址');
        }
        $preg = '/^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])\\d{8}$/';
        if(empty(trim($data['tel']))){
            return back()->with('error','请填写电话');
        }else{
            $matches = [];
            preg_match($preg,$data['tel'],$matches);
            if(empty($matches)){
                return back()->with('error','请正确填写电话号码');
            }
        }
        if(empty(trim($data['rtel']))){
            $data['rtel'] = $data['tel'];
        }else{
            $matches = [];
            preg_match($preg,$data['rtel'],$matches);
            if(empty($matches)){
                return back()->with('error','请正确填写电话号码');
            }
        }
        $data['uid'] =  $uid;
        $data['default'] = 1;
        $res = h_addr::create($data);
        if($res){
             return redirect('home/addr')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败,系统繁忙');
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
        $data = $request->except('_method','_token');
        $all = h_addr::where('default',2)
                     ->where('uid',$id)
                     ->get();
        if(count($all) >= 1 && $data['defalutT'] != '常用地址'){
            $data['default'] = 1;
            unset($data['defalutT']);
            return 3;
        }else{
            if($data['defalutT'] == '设为常用'){
                $data['default'] = 2;
                unset($data['defalutT']);
            }else{
                $data['default'] = 1;
                unset($data['defalutT']);
            }
            $res = h_addr::where('id',$id)
                         ->update($data);
            if($res){
                return 1;  
            }else{
                return 2;
            }
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
        $res = h_addr::destroy($id);
        // return 1;
        if($res){
            return 1;
        }else{
            return 2;
        }

    }
}
