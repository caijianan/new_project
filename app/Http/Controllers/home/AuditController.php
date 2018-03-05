<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Audit;

class AuditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home.like.audit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        $this->validate($request,[
            'ap_name'    =>'required',
            's_name'    =>'required',
            'ap_person'    =>'required',
            'ap_addr'  =>'required',
            'ap_range' =>'required',
            'ap_img'   =>'required'
        ],[
            'auname.required'     => '请填写管理员名称',
            'ap_person.required'     => '请填写法人名称',
            's_name.required'     => '请填写商店名称',
            'ap_addr.required'     => '请填写地址',
            'ap_range.required'     => '请填写运营范围',
            'ap_img.required'     => '请上传许可证号',          // 'auface.required'     => ''
        ]);
       $data = $request->except('_token');

        //
        $file            = $request->file('ap_img');
        // 文件存放路径
        $destinationPath = './audit_pic';
        // auface文件名
        $ap_img          = '';
        if ($request->hasFile('ap_img')) {
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
            $ap_img          .= $fileName;
            $data['ap_img'] = $ap_img;
            // dd($data);
        }
        $uid =  session('userinfo')['id'];
        // dd(session('userinfo'));
        $data['ap_status'] = 1;
        $data['ap_time'] = time();
        $data['uid'] = $uid;
        $res = Audit::create($data);
        if($res){
            return redirect('home/userinfo')->with('success','申请已发送');
        }else{
            return back()->with('error','申请发送失败'); 
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
