<?php


namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\Audit;
use App\Http\Model\h_user;
use App\Http\Model\shop;
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    

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
        $data['ap_status'] = 1;
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

    public function tongguo($id)
    {
        $data = Audit::where('id',$id)
                     ->first();

        $shop1['uid'] = $data->uid;
        $shop1['s_name'] = $data->ap_name;
        $shop1['s_range'] = $data->ap_range;
        $res =  h_user::where('id',$data->uid)
                      ->update(['isshoper' => '2']);
        $sres = shop::insert($shop1);
        if($res && $sres){
            return  redirect('admin/audit')->with('success','更改生效');
        }else{
            return  back()->with('error','更改失败'); 
        }
    }
}
