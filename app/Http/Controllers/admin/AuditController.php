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
    public function index()
    {

        // echo 11111;
        $data = Audit::paginate(5);
        // dd($list);
        return view('admin.audit.index',compact('data'));

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
        }
        $time            = time();
        // dd($time);
        $data['ap_time']   = $time;

        // dd($data);    
        $res             = Audit::create($data);

        if($res){
            return redirect('admin/audit')->with('msg','添加成功');
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
