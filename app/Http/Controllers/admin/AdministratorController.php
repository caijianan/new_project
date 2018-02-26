<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Administrator;
use Intervention\Image\ImageManagerStatic as Image;




class AdministratorController extends Controller
{
    /**
     * 管理员列表
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $auname = empty($request->input('auname'))?'':$request->input('auname');
        $ausex = empty($request->input('ausex'))?0:$request->input('ausex');
        if($ausex == 0){
            $where = '>';
        }else{
            $where = '=';
        }
        $list = Administrator::where('ausex',$where,$ausex)
                             ->where('auname','like',"%$auname%")
                             ->paginate(5);
        $yuanyin['auname'] = $auname;
        $yuanyin['ausex']  = $ausex;
        return view('admin.administrator.index',compact('list','yuanyin'));
    }

    /**
     * 添加管理员页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.administrator.create');
    }

    /**
     * 将新创建的资源存储在存储中.

     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->input("auname"));
        // echo '管理员添加';

     //   die;
        $this->validate($request,[
            'auname'    =>'required | max:8',
            'aupass'    =>'required',
            // 'auface'    =>'required'
        ],[
            'auname.required'     => '请填写管理员名称',
            'aupass.required'     => '请填写密码',
            // 'auface.required'     => ''
        ]);
         // $res = Administrator::add($request); 
        $data            = $request->except('_token');
        $data['lip']     = $request->getClientIp();
        $file            = $request->file('auface');
        // 文件存放路径
        $destinationPath = './admin_pic';
        // auface文件名
        $auface          = '';
        if ($request->hasFile('auface')) {
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
        $auface          .= $fileName;
        $data['auface']  = $auface;
        }
        $time            = time();
        // dd($time);
        $data['ltime']   = $time;
        // dd($data);    
        $res             = Administrator::create($data);

        if($res){
            return redirect('admin/administrator')->with('msg','添加成功');
        }else{
            return back()->with('error','添加失败');
        }

      
    }

    /**
     * 显示指定的资源.

     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        // 


    }

    /**
     * 显示用于编辑指定资源的表单(管理员修改).

     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $info = Administrator::find($id);
        return view('admin.administrator.edit',compact('info'));
 
    }

    /**
     * 在存储中更新指定的资源.

     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = $request->except('_token','_method');

        $file            = $request->file('auface');
        // 文件存放路径
        $destinationPath = './admin_pic';
        // auface文件名
        $auface          = '';
        if ($request->hasFile('auface')) {
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
        $auface          .= $fileName;
        $data['auface']  = $auface;
        }
        // dd($data);

        $res = Administrator::where('id',$id)
                            ->update($data);
        if($res){
            return redirect('admin/administrator')->with('msg','更改生效');
        }else{
            return back()->with('error','更改失败'); 
        }

    }

    /**
     * 从存储中删除指定的资源.

     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {   
        $row = Administrator::destroy($id);
        
        if($row){
            return 1;
            
        }else{
            return 2;
            
        }


    }

    public function info($id)
    {
        echo '管理员详情';
    }

}
