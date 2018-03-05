<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\h_user;
use Intervention\Image\ImageManagerStatic as Image;

use App\Http\model\h_like;


class UserinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = session('userinfo')['id'];
        $info = h_user::where('id',$id)
                      ->first();
        return view('home.like.userinfo',compact('info'));
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        // dd(111111);
        $id1 = $id;
        return view('home.like.edit',compact('id1'));
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
        $data =$request->except('_method','_token');

        $file            = $request->file('uface');
        // 文件存放路径
        $destinationPath = './user_pic';
        // auface文件名
       // dd( $data );
        $uuface          = '';
        if ($request->hasFile('uface')) {
            //生成一个随机文件名（不含后缀）
            $name            = time().rand(1000,9999);
            // 获取文件后缀
            $ext             = $file->getClientOriginalExtension();
            $fileName        = $name.'.'.$ext;
            $file->move($destinationPath, $fileName);
            // 处理用户上传的图片
            $img             = Image::make($destinationPath.'/'.$fileName);
            $img->resize(47,47);
            $img->save($destinationPath.'/sm_'.$fileName);
            $uuface          .= $fileName;
            $data['uface']  = $uuface;
            // dd($data);
        }else{
            $data['uface']  = 'default.jpg';
        }
        $res = h_user::where('id',$id)
                     ->update($data);
        if($res){
            return redirect('home/login')->with('success','修改成功');
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

        $row = h_like::where('id',$id)->delete();
        return $row;
    }
    public function addlike($id)
    {
        $data = h_like::where('sid',$id)->first();
        if(!empty($data)){
            echo 0;
        }else{
            $data = [];
            $data['uid'] = 1;
            $data['sid'] = $id;
            $row = h_like::insert($data);
            echo $row;
        }
    }
}
