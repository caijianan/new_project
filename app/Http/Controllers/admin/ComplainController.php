<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\a_comp;
use App\Http\Model\h_user;
use App\Http\Model\shop;
use Intervention\Image\ImageManagerStatic as Image;

class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        
        $comp = new a_comp;
        // 我想拼接条件字符串拼到url
        if($request->has('uid') && $request->has('sid')) {
            $uid = $request -> input('uid');
            $sid = $request -> input('sid');
            // $where['uid'] = $request -> input('uid');
            // $where['sid'] = $request -> input('sid');
            $wString = '&uid='.$uid.'&sid='.$sid;
            $comp = a_comp::where('uid','=',$uid)->where('sid','=',$sid);
        } elseif ($request->has('uid')) {
            $uid = $request -> input('uid');
            // $where['uid'] = $request -> input('uid');
            $wString = '&uid='.$uid;
            $comp = a_comp::where('uid','=',$uid);
        } elseif ($request->has('sid')) {
            $sid = $request -> input('sid');
            // $where['sid'] = $request -> input('sid');
            $wString = '&sid='.$sid;
            $comp = a_comp::where('sid','=',$sid);
        } else {
            $comp = new a_comp;
        }
        
        
        $comp = $comp->paginate(5);

        // 自己写的这个分页
        $perPage = $comp->perPage();
        $total = $comp->total(); // 总条数
        $currentPage = $comp->currentPage();
        $totalPage = ceil($total/$perPage); // 总页数
        return view('admin.complain.index', compact('comp', 'totalPage', 'currentPage'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.complain.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->except('_token');
        
        // 上传图片
        // 是否存在图片
        if ($request->hasFile('cimg')) {
            // 图片是否有效
            if ($request->file('cimg')->isValid()) {
                $name = time().mt_rand(1000,9999);
                // 获取文件后缀
                $ext = $request->file('cimg')->getClientOriginalExtension();
                
                $fileName = $name.'.'.$ext;
                // 转移图片位置
                $request -> file('cimg') -> move('./comp_pic', $fileName);

                if ($request->file('cimg')->getError() > 0) {
                    return redirect('admin/complain/create')->with('status', '上传图片失败');
                } else {
                    // 使用第三方图片处理类(Intervention Image)
                    $img = Image::make('./comp_pic/'.$fileName);
                    $img->resize(100, 100, function($constraint){
                        $constraint->aspectRatio();
                    });
                    $img->save('./comp_pic/s_'.$fileName);
                }
            }
        }

        $data['cimg'] = './comp_pic/'.$fileName;
        $res = a_comp::insert($data);

        if($res) { 
            return redirect('admin/complain')->with('status', '添加成功');
        } else {
            return redirect('admin/complain/create')->with('status', '添加失败');
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
        $data = a_comp::where('id', $id)->first();
        return view('admin.complain.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = a_comp::where('id', $id)->first();
        return view('admin/complain/edit', ['data' => $data]);
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
        $data = $request->except('_token', '_method');
        $res = a_comp::where('id', $id)->update($data);
        if($res) {
            return redirect('admin/complain')->with('status', '修改成功');
        } else {
            return back()->with('status', '修改失败');
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

        $res = a_comp::where('id', $id)->delete();
        if($res) {
            return redirect('admin/complain')->with('status', '删除成功');
        } else {
            return redirect('admin/complain')->with('status', '删除失败');
        }
    }
}
