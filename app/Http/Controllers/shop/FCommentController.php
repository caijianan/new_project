<?php

namespace App\Http\Controllers\shop;

use Illuminate\Http\Request;
use App\Http\Model\hf_comment;
use App\Http\Model\h_user;
use App\Http\Model\h_food;
use App\Http\Model\shop;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class FCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $f_satis = $request->input('f_satis');
        $where = [];
        // dd($f_satis);
        if($request->has('f_satis')){
             if(!empty($f_satis) && $f_satis > 5){
                $where['f_satis'] = $f_satis;
                $cmt = hf_comment::where('f_satis','>',$f_satis)->paginate(5);

            }
            if(!empty($f_satis) && $f_satis < 5){
               $where['f_satis'] = $f_satis;

                $cmt = hf_comment::where('f_satis','<',$f_satis)->paginate(5);
                // dd($cmt);
            }
        }
       // var_dump($f_satis);
        if(empty($f_satis)){
            $cmt = hf_comment::where('sid',1)->paginate(5);
        }
        $count = count($cmt);
        $uarr = [];
        foreach($cmt as $k=>$v){
            $uarr[] = $v->h_user;
        }
        $farr = [];
        foreach($cmt as $k=>$v){
            $farr[] = $v->h_food;
        }
        return view('shop.fcomment.index',['cmt'=>$cmt,'uarr'=>$uarr,'farr'=>$farr,'where'=>$where]);
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
        $data = hf_comment::where('id', $id)->get();
        $uname = [];
        foreach ($data as $key=>$value) {
            $uname[] = h_user::where('id',$value->uid)->value('uname');
        }
        // dd($uname);
        $f_name = [];
        foreach ($data as $key=>$value) {
            $f_name[] = h_food::where('id',$value->fid)->value('f_name');
        }
        return view('shop.fcomment.show',compact('data','uname','f_name'));     
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
