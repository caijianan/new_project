<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\hf_comment as comment;
use App\Http\Model\h_food;
use App\Http\Model\hf_comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = comment::where('sid',$id)->get();
        $food = [];
        foreach ($data as $k => $v) {
           $food[] = $v->h_food;
        }
        return view('home.comment.index',['data'=>$data,'food'=>$food]);

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
    public function cshow($fid)
    {
        return view('home.comment.create',['fid'=>$fid]);
    }
    public function addcmt(Request $request)
    {
        $uid = session('userinfo')['id'];
        $res = $request->except('_token');
        $shop = h_food::where('id',$res['fid'])->first()->shop->id;
        $res['f_ctime'] = time();
        $res['uid'] = $uid;
        $res['sid'] = $shop;
        $row = hf_comment::insert($res);
        if($row > 0){
            return redirect('home/uorder');
        }
    }
}