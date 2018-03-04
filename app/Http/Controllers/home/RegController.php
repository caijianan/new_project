<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Model\h_user;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use Session;

class regController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home.user.reg');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //阿里云发信息
        $code = mt_rand(100000, 999999);
        $phone = $request['phone'];

        //手机验证
        $config = [
            'accessKeyId'    => 'LTAIhCYfe7Fm7AcD',
            'accessKeySecret' => 'lqc56htVScbJ9KJYUPr6aqqS3tcOT8',
        ];
        $client  = new Client($config);
        $sendSms = new SendSms;
        $sendSms->setPhoneNumbers($phone);
        $sendSms->setSignName('赤荫');
        $sendSms->setTemplateCode('SMS_123673638');
        $sendSms->setTemplateParam(['code' => $code]);
        $sendSms->setOutId('demo');

        // return response()->json(['msg' => $code]); // 返回验证码
        if($client->execute($sendSms)->Code == 'OK') {
            return response()->json(['msg' => '发送成功']);
        } else {
            return response()->json(['msg' => '发送失败']);
        }
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
        dd(1111);
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
