<?php


namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\Audit;
use Intervention\Image\ImageManagerStatic as Image;




class AuditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $ap_name = empty($request->input('ap_name')) ? '' :$request->input('ap_name');
        $ap_range = empty($request->input('ap_range')) ? 0 : $request->input('ap_range');
        if($ap_range == 0){
            $where = '>';
            // $ap_range  ;
        }else{
            $where = '=';
        }
        $data = Audit::where('ap_range',$where,$ap_range)
                             ->where('ap_name','like',"%$ap_name%")
                             ->paginate(2);
        // dd($data);
        $yuanyin['ap_name'] = $ap_name;
        $yuanyin['ap_range'] = $ap_range; 

        // echo 11111;
        // dd($data);
        return view('admin.audit.index',compact('data','yuanyin'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.audit.create');

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

        $this->validate($request,['ap_name' => 'required | max:8',
            'ap_addr' => 'required',
            'ap_person' => 'required',
            'ap_num'  => 'required',
        ],[
            'ap_name.required' => '请填写商户名称',
            'ap_addr.required' => '请填写地址',
            'ap_person.required' => '请填写法人名称',
            'ap_num.required' => '请填写许可证号',

        ]);

        $data = $request->except('_token');
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
            // dd($ap_img);
            $data['ap_img']  = $ap_img;
        }else{
            $data['ap_img']  = 'default.jpg';
        }
        $time            = time();
        // dd($time);
        $data['ap_time']   = $time;

        // dd($data);    
        $res             = Audit::create($data);

        if($res){
            return redirect('admin/audit')->with('success','添加成功');
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
        //

        $info = Audit::find($id);
        // dd($info);
        return view('admin.audit.edit',compact('info'));

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

        $data = $request->except('_token','_method');
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
        $res = Audit::where('id',$id)
                        ->update($data);
        if($res){
            return redirect('admin/audit')->with('success','更改生效');
        }else{
            return back()->with('error','更改失败'); 
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

        $row = Audit::destroy($id);
        
        if($row){
            return 1;
            
        }else{
            return 2;
            
        }

    }
}
