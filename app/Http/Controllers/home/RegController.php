<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use App\Http\Model\h_user;


class regController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user.reg');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $code = mt_rand(100000, 999999);
        $phone = $request['phone'];

        //手机验证
        $config = [
            'accessKeyId'    => 'LTAIQDJXLzOMrh5S',
            'accessKeySecret' => 'gUxZZNqwKspfEPwKIctle7T06bogEx',
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
            session(['mycode'=>$code]);
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
        $code = $request->input('code'); // 获取用户输入验证码
        $data = $request->except('_token');
        $put =  [];
        if($code == session('mycode')) {
            $res = h_user::where('uname',$data['username'])
                         ->get();
            if(count($res) >= 1){
                return back()->with('error','用户名已存在');
            }else{
                $put['uname'] = $data['username'];
                $tel = h_user::where('tel',$data['phone'])
                             ->get();
                if(count($tel) >= 1){
                    return back()->with('error','电话号码已注册');
                }else{
                    $put['tel'] = $data['phone'];
                    if($data['password'] !== $data['cpassword']){
                        return back()->with('error','两次密码不一致');
                    }else{
                        $put['passwd'] = $data['password']; 
                        $put['isshoper'] = 1;
                        $put['uface'] = 'default.jpg';
                        $info = h_user::insert($put);
                        if($info){
                            $userinfo = h_user::where('tel',$put['tel'])->first();
                            session(['userinfo'=> $userinfo]);
                            return redirect('home/shoplist')->with('success','注册成功');
                        }else{
                            return back()->with('error','系统繁忙，请稍后再试');
                        }
                    }
                }
             }
        } else {
            return back()->with('error','验证码错误');
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
