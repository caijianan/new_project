<!DOCTYPE html>
<html class="no-js" lang="zh">
 <head> 
  <meta charset="utf-8" /> 
  <title>登录-login.html</title> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta name="description" content="饿了么是中国最专业的网上订餐平台，提供各类中式、日式、韩式、西式等优质美食。" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <script>
  // 不支持的跳到 mobile 站
  if(navigator.userAgent.indexOf("MSIE")!=-1 && !window.localStorage){window.location.href="http://m.ele.me/download";}

  // 开始时间
  var startTime = new Date().getTime();

  // 全局变量
  var ELEME = window.ELEME || {};
  ELEME.baseUrl = "";
  ELEME.formerBaseUrl = "http://ele.me";
  ELEME.route = "account_login";
  ELEME.fussHost = "https://fuss.ele.me";
  ELEME.staticHost = "https://static2.ele.me";
  ELEME.rootHost = "ele.me";
  ELEME.mainHost = "v5.ele.me";
  ELEME.payHost = "p.ele.me";
  ELEME.accountHost = "account.ele.me";
    ELEME.csrfToken = "c795810a05951df2e6ebf0a09437311bf979268f";
    ELEME.timeDelta = 1427460160 - new Date().getTime()/1000;
  ELEME.payHost = "p.ele.me";
  </script> 
  <script src="/h/js/jquery-1.8.3.min.js"></script>
   <script src="/layer/layer.js"></script>
  <link class="usemin" rel="stylesheet" href="/h/css/global_rebuild.a739f3af.css" /> 
  <link class="usemin" rel="stylesheet" href="/h/css/account_rebuild.54cf8909.css" /> 
 </head> 
 <body class="page-account"> 
  <header class="header"> 
   <h1 class="header-hd"> <img class="logo-img" src="h/images/logo.b38593f4.png" alt="ele.me| 叫外卖？上饿了么！" /> </a> </h1> 
  </header> 
  <div class="container clrfix"> 
   <aside class="banner"> 
    <img class="img" src="/h/images/6f061d950a7b0208e35f75a169d9f2d3562cc8d8.jpg" alt="随时随地轻松订餐" /> 
   </aside> 
   <div class="panel"> 
    <div class="panel-hd clrfix" id="login-panel-hd"> 
     <h2 class="title">登录</h2> 
     <a class="g-link link-normal hide" href="#login_form">普通方式登录</a> 
    </div> 
    <div class="panel-bd"> 
     <form id="login_form" class="login-form block" action="{{url('home/login')}}" method="post"> 
      {{csrf_field()}}
      <div class="form-item"> 
       <input class="inputbox" name="tel" type="tel" minlength="5" placeholder="手机号" required="" /> 
       <div class="g-error-tip hide"></div> 
      </div> 
      <div class="form-item"> 
       <input class="inputbox" name="passwd" type="password" minlength="6" maxlength="20" placeholder="密码" required="" /> 
       <div class="g-error-tip hide"></div> 
      </div> 
      <div class="form-item clrfix"> 
       <input id="captcha_input" class="inputbox input-captcha" type="text" name="captcha" minlength="4" maxlength="4" placeholder="验证码" autocomplete="off" required="" /> 
       
       <div class="g-error-tip hide"></div> 
       <a onclick="javascript:re_captcha();" ><img src="{{ URL('kit/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="0"></a>
      </div> 
      <script type="text/javascript">
     
        function re_captcha() {
          $url = "{{ URL('kit/captcha') }}";
          $url = $url + "/" + Math.random();
          document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
        }
      </script>
      <button class="g-btn g-btn-l g-btn-submit" type="submit">登录</button> 
     </form> 
    </div> 
    <div class="panel-ft"> 
      
    </div> 
    <div id="loading_mask" class="ui-wave-loader-mask hide"> 
     <i class="ui-wave-loader left"></i> 
     <i class="ui-wave-loader middle"></i> 
     <i class="ui-wave-loader right"></i> 
    </div> 
   </div> 
  </div> 
  <footer class="site-footer group" role="contentinfo"> 
   <div class="container"> 
    <p class="sfooter-line"> <a class="sfooter-link" href="http://kaidian.ele.me">我要开店</a> | <a class="sfooter-link" href="contact.html">联系我们</a> | <a class="sfooter-link" href="http://ele.me/about/agreement">服务条款和协议</a> | <a class="sfooter-link" href="sitemaps.html">站点地图</a> | <a class="sfooter-link" href="http://ele.me/jobs">加入我们</a> </p> 
    <p class="sfooter-line"> 增值电信业务许可证：<a class="sfooter-link sfooter-link-zero" target="_blank" rel="nofollow" href="http://www.shca.gov.cn">沪B2-20150033</a> <a class="sfooter-link" target="_blank" rel="nofollow" href="http://www.miibeian.gov.cn">沪ICP备 09007032</a> <a class="sfooter-link" target="_blank" rel="nofollow" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20120305173227823">上海工商行政管理</a> Copyright &copy;2008-2015 ele.me, All Rights Reserved. </p> 
   </div> 
  </footer> 
  <script type="text/javascript">
                @if(session('error'))
                    layer.alert("{{ session('error') }}", {
                    icon: 2,
                })  
                @endif
                @if(session('success'))
                    layer.alert("{{ session('success') }}", {
                    icon: 1,
                })   
                @endif
   

  </script>
  <!-- UBT --> 
 </body>
</html>