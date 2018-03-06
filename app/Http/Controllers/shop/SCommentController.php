<?php

namespace App\Http\Controllers\shop;

use Illuminate\Http\Request;
use App\Http\Model\h_user;
use App\Http\Model\shop;
use App\Http\Requests;
use App\Http\Model\hs_comment;
use App\Http\Controllers\Controller;

class SCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = hs_comment::where('id', 1) -> get();
        $uname = [];
        foreach ($list as $key=>$value) {
            $uname[$value->uid] = h_user::where('id',$value->uid)->value('uname');
        }
        // dd($f_name);
        // dd($uname);
        // dd($list['uname']);
        return view('shop.scomment.index',compact('uname','list'));
        
        // return view('shop.scomment.index');
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
