<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\h_user;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user.login');  //用/也可以
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        if($data['captcha'] !== session('milkcaptcha')){
            return back()->with('error','请正确输入验证码');
        }else{
            $all = h_user::where('tel',$data['tel'])
                         ->first();
            if(empty($all)){
                return back()->with('error','用户名错误');
            }else{
                if($data['passwd'] !== $all->passwd){
                    return back()->with('error','密码错误');
                }else{
                    session(['userinfo'=> $all]);
                    return redirect('home/shoplist')->with('success','登陆成功');
                }
            }
        }
        // dd(session('milkcaptcha'));

    }

    public function captcha($tmp){
        
        $phraseBuilder = new PhraseBuilder(4);
        $builder = new CaptchaBuilder(null, $phraseBuilder);
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //dd($phrase);
        //把内容存入session
        session(['milkcaptcha'=> $phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();


    }

    public function exita(){
        session()->forget('userinfo');
        return redirect('home/shoplist')->with('success','注销成功');     
    }
    // public function exit(){
    // }
}

