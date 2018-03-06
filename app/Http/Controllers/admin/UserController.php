<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\h_user;
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $list = h_user::all();
        // var_dump($res);
        // dd($res);
        $uname = empty($request->input('uname'))?'':$request->input('uname');
        $sex = empty($request->input('sex'))?0:$request->input('sex');
        if($sex == 0){
            $where = '>';
        }else{
            $where = '=';
        }
        $list = h_user::where('sex',$where,$sex)
                             ->where('uname','like',"%$uname%")
                             ->get();
        $tiao=count($list);
         //dd($tiao);
        $list = h_user::where('sex',$where,$sex)
                             ->where('uname','like',"%$uname%")
                             ->paginate(5);                     
        $sou['uname'] = $uname;
        $sou['sex']  = $sex;
        // dd($sou);
       
        // return view('admin.user.index',['list'=>$list]);
        return view('admin.user.index',compact('list','sou','tiao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $arr = $request->except('_token');
        // dd($arr);
        $file = $request->file('uface');
        // dd($file);
        $destinationPath = './user_pic';
        $uface = '';
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
            $uface          .= $fileName;
            $arr['uface']  = $uface;
        }else{
            $arr['uface']  = 'default.jpg';
        }
        $res = h_user::create($arr);
        // dd($res);
        if($res){
            return redirect('/admin/user')->with('msg','添加成功');
        }else{
            return redirect('/admin/user')->with('msg','添加失败');
        }
        // dd($id);
        
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
        $list = h_user::where('id',$id)->first();
        // $list = h_user::find($uid);
        return view('admin.user.edit',['list'=>$list]);
       // return view('admin.user.edit');
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

        $list = $request->except('_method', '_token');
        // dd($list);
        $file = $request->file('uface');
        // dd($file);
        if($file== null){
             $res = h_user::where('id', $id)->update($list);
            // dd($res);
            if($res){
                return redirect('admin/user')->with('msg', '修改成功！');
            }else{
                return back()->with('msg', '修改失败！');
            }
        }
        $destinationPath = './user_pic';
        $uface = '';
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
            $uface          .= $fileName;
            $arr['uface']  = $uface;
        }
        $res = h_user::where('id', $id)->update($arr);
        // dd($res);
        if($res){
            return redirect('admin/user')->with('msg', '修改成功！');
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
         //===============================删除开始==========================================   
            // dd($uid);
        // $res = h_user::where('uid', $uid)->delete();
        // if($uid > 0){
        //     return redirect('/admin/user')->with('msg','删除成功');
        // }else{
        //     return redirect('/admin/user')->with('msg','删除失败');
        // }
        // dd($res);
        // ================================删除结束==========================================
        // dd($uid);
        $res = h_user::where('id',$id)->delete();
        // dd($res);
        if($res == 1){
            return $res;
        } 
    }
    /**
     * 用户详情
     * @return [type] [用户详情模版]
     */
    public function info()
    {
        return view('admin.user.info');
    }
}
