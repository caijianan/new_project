<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\as_type;

class ShopcateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $res = as_type::paginate(3);
        // return view('admin.shopcate.index', ['res'=>$res]);
        
        // $res = as_type::paginate(3);
        // return view('admin.shopcate.index', ['res'=>$res]);
        $res = new as_type;
        $st_name = empty($request->input('st_name'))?'':$request->input('st_name');
        if($st_name) {
            $res = as_type::where('st_name','like','%'.$st_name.'%');
        }
        $res = $res->paginate(6);
        
        return view('admin.shopcate.index', compact('res','st_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shopcate.create');
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
        $id = as_type::insert($arr);
        // dd($id);
        if($id){
            return redirect('admin/shopcate')->with('msg', '添加成功！');
        }else{
            return redirect('admin/shopcate')->with('msg', '添加失败！');
        }
        // dd($arr);

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
        $type = as_type::where('id', $id)->first();
        // dd($type);
        return view('admin.shopcate.edit', ['type'=>$type]);
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
        $res = as_type::where('id', $id)->update($list);
        if($res > 0){
            return redirect('admin/shopcate')->with('msg', '修改成功！');
        }else{
            return redirect('admin/shopcate')->with('msg', '修改失败！');
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
        $res = as_type::where('id', $id)->delete();
        // dd($res);
        return $res;
    }
}
