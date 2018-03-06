<?php

namespace App\Http\Controllers\shop;

use Illuminate\Http\Request;
use App\Http\Model\shop;
use App\Http\Model\as_type;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = shop::where('id', 1) -> get();
        // $st_name = [];      
        // foreach ($list as $k => $v) {
        //     $st_name[$v->id] = as_type::where('id',$v->stid)->value('st_name');
        // }      
        foreach ($list as $k => $v) {
            $list[$k]['st_name'] = as_type::where('id',$v->stid)->value('st_name');
        }
        $type = as_type::get();
                        
       return view('shop.userinfo.index',compact('list','type'));    
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
        $list = shop::where('id', 1) -> get();

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
        // $list = $request->all();
         // dd($list);
        $list = $request->except('_method', '_token');
        // dd($list);
        $file = $request->file('s_face');
        // dd($file);
        if($file==null){
            $res = shop::where('id', 1)->update($list);
            if($res){
                return redirect('shop/userinfo')->with('msg', '修改成功！');
            }else{
                return back()->with('msg', '修改失败！');
            }

        }
        $destinationPath = './scomment_pic';
        $s_face = '';
        if ($request->hasFile('s_face')) {
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
            $s_face          .= $fileName;
            $arr['s_face']  = $s_face;
        }

        $res = shop::where('id', 1)->update($arr);
        if($res){
            return redirect('shop/userinfo')->with('msg', '修改成功！');
        }else{
            return back()->with('msg', '修改失败！');
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
