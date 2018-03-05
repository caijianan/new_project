<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\h_user;

class PwdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = session('userinfo')['id'];
        return view('home.like.pwd',compact('id'));
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
        // dd(session('userinfo'));
        $id = session('userinfo')->id;
        $passwd = session('userinfo')->passwd;
        $data = $request->except('_token','_method');
        // if($data->)
        // dd($data);
        if(!empty($data['opassword'])){
            if($data['opassword'] == $passwd){
                unset($data['opassword']);
                if($data['passwd'] == $data['rpassword']){
                    if($data['passwd'] == $passwd){
                        return back()->with('error','两次密码一致');
                    }else{
                        unset($data['rpassword']);
                        $res = h_user::where('id',$id)
                                     ->update($data);
                        if($res){
                            return redirect('home/login')->with('success','修改成功');
                        }else{
                            return back()->with('error','系统繁忙,请稍候再试');
                        }
                    }
                }else{
                    return back()->with('error','两次密码不一致');
                }
            }else{
                return back()->with('error','原密码错误');
            } 
        }else{
            return back()->with('error','请填写原密码');
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
    }
}
