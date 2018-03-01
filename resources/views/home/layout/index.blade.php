<!DOCTYPE html><!--/*技术支持，小庄602842076     验证：商城技术支持*/
/*技术支持，小庄602842076    验证：商城技术支持*/
/*技术支持，小庄602842076    验证：商城技术支持*/
/*技术支持，小庄602842076    验证：商城技术支持*/
/*技术支持，小庄602842076    验证：商城技术支持*/
/*https://shop116998991.taobao.com/*/
/*https://shop116998991.taobao.com/*/
/*https://shop116998991.taobao.com/*/-->

<html>
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="order by dede58.com"/>
    <meta name="author" content="order by dede58.com"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="description" content="首页" />
    <meta name="viewport" content="user-scalable=no">
    
    <meta name="google-site-verification" content="BstJA3X9z6f9HcvoN9AZTwaKo_9Abj_j7dVBPfy640s" />
    <meta name="baidu-site-verification" content="IYCrtVH0i1" />
    <meta property="wb:webmaster" content="239d3d1dbdde1b2c" />
    <link rel="icon" type="image/png" href="images/favicon.ico"/>
    
    <script type="text/javascript">
        
        (function(document, screen) {if (screen.width < 760) {document.location.href="/mobile/";}}(document, screen));
    </script>
    
    <link rel="stylesheet" href="/homes/css/common.css?v=2015-5-20"/>
    
    <link rel="stylesheet" href="/homes/css/frontPage.css"/>
    

    <!--[if lte IE 7]><script>window.onload=function(){location.href="/ie6warning/"}</script><![endif]-->
    <!--[if lt IE 9]>
    <script src="/homes/js/respond.js"></script>
    <script>
        var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video, dh-dialog, dh-checkbox".split(', ');
         var i= e.length;while (i--){document.createElement(e[i])}
    </script>
    <![endif]-->
    <title>首页</title>

    <script>
                var countdown=60; 
                function getCode(obj) { 
                     if (countdown == 0) { 
                        obj.removeAttribute("disabled");    
                        obj.value="免费获取验证码"; 
                        countdown = 60; 
                        return;
                    } else { 
                        obj.setAttribute("disabled", true); 
                        obj.value="重新发送(" + countdown + ")"; 
                        countdown--; 
                    } 
                    setTimeout(function() { 
                    getCode(obj) }
                    ,1000) 
                    }  
    </script>

</head>
<body class="day " ng-controller="bodyCtrl"  day-or-night>
    <section class="common-back" id="wrapBackground">
        
        <div id="main-box">
             <!--二维码-->
            <div class="qrCode-frame" ng-hide="qrCodeStatus">
                <img src="/homes/images/wx.png" alt="扫描二维码" />
                <em ng-click="qrCodeStatus=true">X</em>
            </div>
        
            
    
    <section class="member-wrap" id="member-wrap">
        <div class="common-width posr">
            
                <div class="member-box fs12" login-box info="loginInfo">
                    <a href="javascript:void(0)" ng-click="logoinDialogShow()">登录</a>
                    <span>/</span>
                    <a href="javascript:void(0)" ng-click="registerDialogShow()">注册</a>
                    <span>|</span>
                    <a href="member_order.html">查看订单</a>
                </div>
            
        </div>
    </section>
	<section class="common-width">
        <section class="city-list-wrap clearfix">
            <h1 class="fl">
                <a class="frontpage-logo" href="index.html">外卖超人</a>
            </h1>
            <div class="city-list-box back-yellow">
                <div class="dropdown-box">
                    <div class="dropdown-select">
                        <span class="dropdown-text" id="cityName" cityName="Shanghai">上海站</span>
                        <span class="caret"></span></div>
                    <ul class="dropdown-menu">
                        
                            <li ng-click="setCityAndRedirect('suzhou', '/suzhou/');">
                                <a href="javascript:;">苏州站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('fuzhou', '/fuzhou/');">
                                <a href="javascript:;">福州站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('hangzhou', '/hangzhou/');">
                                <a href="javascript:;">杭州站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('qingdao', '/qingdao/');">
                                <a href="javascript:;">青岛站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('ningbo', '/ningbo/');">
                                <a href="javascript:;">宁波站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('nanjing', '/nanjing/');">
                                <a href="javascript:;">南京站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('chongqing', '/chongqing/');">
                                <a href="javascript:;">重庆站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('xiamen', '/xiamen/');">
                                <a href="javascript:;">厦门站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('chengdu', '/chengdu/');">
                                <a href="javascript:;">成都站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('jinan', '/jinan/');">
                                <a href="javascript:;">济南站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('guangzhou', '/guangzhou/');">
                                <a href="javascript:;">广州站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('shenzhen', '/shenzhen/');">
                                <a href="javascript:;">深圳站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('zhengzhou', '/zhengzhou/');">
                                <a href="javascript:;">郑州站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('tianjin', '/tianjin/');">
                                <a href="javascript:;">天津站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('beijing', '/beijing/');">
                                <a href="javascript:;">北京站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('wuhan', '/wuhan/');">
                                <a href="javascript:;">武汉站</a>
                            </li>
                        
                            <li ng-click="setCityAndRedirect('changsha', '/changsha/');">
                                <a href="javascript:;">长沙站</a>
                            </li>
                        
                    </ul>
                </div>
            </div>
        </section>
        <section class="search-box-wrap">
            <div class="big-logo position"></div>
            <div class="search-box-inner">
                <h2 class="search-title">
                    <strong class="fs24">输入地址，</strong>
                    <strong class="fs20">查找附近餐厅</strong>
                </h2>
                <div class="search-box-left search-box-border">
                    <div class="search-box-right search-box-border"  ng-init="city_name='上海'">
                        
                        <div class="search-box search-box-border">
                            <div class="clearfix">
                                <div class="search-input-box">
                                    <div class="search-input-inner">
                                        <input type="text" ng-model="keyword" autocomplete placeholder="我在哪儿？" class="search-input" ng-initial value="" onkeyup="this.setAttribute('value',this.value);"/>
                                        <ul ng-class="{disblock:searchResultIsShow}" class="search-result-box">
                                            <li ng-class="{active:currentActiveIndex==$index}" ng-repeat="item in datas track by $index" ng-click="searchResultSelect($index)">
                                                <h5 ng-bind="item"></h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button class="btn btn-success fs18 fl" ng-click="searachRestaurant()" ng-disabled="searchBtnDisabled" ng-bind="searchBtnName">查找餐厅</button>
                                
                            </div>
                            <div class="hot-area clearfix fs12">
                                
                                    <h3 class="fl">热门区域:</h3>
                                    <ul class="fl clearfix">
                                        
                                            <li><a href="shop_list.html">五角场</a></li>
                                        
                                            <li><a href="shop_list.html">徐家汇</a></li>
                                        
                                            <li><a href="shop_list.html">漕河泾开发区</a></li>
                                        
                                            <li><a href="shop_list.html">静安寺</a></li>
                                        
                                            <li><a href="shop_list.html">浦东软件园</a></li>
                                        
                                    </ul>
                                
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
            <div class="back-icon icon1"></div>
            <div class="back-icon icon2"></div>
            <div class="back-icon icon3"></div>
            <div class="back-icon icon4"></div>
            <div class="back-icon star star1"></div>
            <div class="back-icon star star2"></div>
            <div class="back-icon star star3"></div>
            <div class="back-icon star star4"></div>
            <div class="back-icon star star5"></div>
            <div class="back-icon star star6"></div>
            <div class="back-icon star star7"></div>
        </section>
        <section class="street-error" ng-class="{disblock:isNotFindStreet}">
            <p>很抱歉，我们很难找到您的地址。</p>
            <p>请您检查地址拼写/格式是否正确， 或者联系我们客服获得帮助：4001-517-577</p>
        </section>
    </section>

    <section class="brand-restaurant-box ">
        <div class="ceiling-img brand-restaurant-img"></div>
        <div class="brand-restaurant common-width">
            <a href="javascript:;" class="iphone5-img"></a>
            <span class="qr_code trans disnone"></span>
            <div class="clearfix brand-restaurant-body">
                <div class="brand-restaurant-log fl"></div>
                <div class="restaurant-list fl">
                    <ul class="clearfix">
                        <li>
                            <a href="shop_brand.html" target="_blank">
                                <img src="/homes/images/restaurant_03.png" alt="巴贝拉">
                            </a>
                            <a href="shop_brand.html" target="_blank" class="restaurant-name fs14">巴贝拉</a>
                        </li>
                        <li>
                            <a href="shop_brand.html" target="_blank">
                                <img src="/homes/images/restaurant_04.jpg" alt="望湘园">
                            </a>
                            <a href="shop_brand.html" target="_blank" class="restaurant-name fs14">望湘园</a>
                        </li>
                        <li>
                            <a href="shop_brand.html" target="_blank">
                                <img src="/homes/images/restaurant_09.png" alt="鲜芋仙">
                            </a>
                            <a href="shop_brand.html" target="_blank" class="restaurant-name fs14">鲜芋仙</a>
                        </li>
                        <li>
                            <a href="shop_brand.html" target="_blank">
                                <img src="/homes/images/restaurant_15.png" alt="星巴克">
                            </a>
                            <a href="shop_brand.html" target="_blank" class="restaurant-name fs14">星巴克</a>
                        </li>
                        <li>
                            <a href="shop_brand.html" target="_blank">
                                <img src="/homes/images/subway.png" alt="赛百味">
                            </a>
                            <a href="shop_brand.html" target="_blank" class="restaurant-name fs14">赛百味</a>
                        </li>
                        <li>
                            <a href="shop_brand.html" target="_blank">
                                <img src="/homes/images/bifengtang.png" alt="避风塘">
                            </a>
                            <a href="shop_brand.html" target="_blank" class="restaurant-name fs14">避风塘</a>
                        </li>
                        <li>
                            <a href="shop_brand.html" target="_blank">
                                <img src="/homes/images/restaurant_07.png" alt="味千拉面">
                            </a>
                            <a href="shop_brand.html" target="_blank" class="restaurant-name fs14">味千拉面</a>
                        </li>
                        <li>
                            <a href="shop_brand.html" target="_blank">
                                <img src="/homes/images/restaurant_08.jpg" alt="吉野家">
                            </a>
                            <a href="shop_brand.html" target="_blank" class="restaurant-name fs14">吉野家</a>
                        </li>
                        <li>
                            <a href="shop_brand.html" target="_blank">
                                <img src="/homes/images/restaurant_14.jpg" alt="必胜客">
                            </a>
                            <a href="shop_brand.html" target="_blank" class="restaurant-name fs14">必胜客</a>
                        </li>
                        <li>
                            <a href="shop_brand.html" target="_blank">
                                <img src="/homes/images/restaurant_10.png" alt="萨莉亚">
                            </a>
                            <a href="shop_brand.html" target="_blank" class="restaurant-name fs14">萨莉亚</a>
                        </li>
                        <li>
                            <a href="shop_brand.html" target="_blank">
                                <img src="/homes/images/restaurant_12.jpg" alt="新旺茶餐厅">
                            </a>
                            <a href="shop_brand.html" target="_blank" class="restaurant-name fs14">新旺茶餐厅</a>
                        </li>
                        <li>
                            <a href="shop_brand.html" target="_blank">
                                <img src="/homes/images/restaurant_16.png" alt="CoCo壱番屋">
                            </a>
                            <a href="shop_brand.html" target="_blank" class="restaurant-name fs14">CoCo壱番屋</a>
                        </li>
                    </ul>
                </div>
            </div>
        <div class="brand-restaurant-border"></div>
        </div>
    </section>

        </div>
    </section>
    
        <footer id="footer">
        <div class="footer-first gray">
            <div class="company-info clearfix fs14 gray">
                <a href="about.html" target="_blank"  rel="nofollow">关于我们</a>
                <a href="help.html" target="_blank"  rel="nofollow">帮助中心</a>
                <a href="javascript:;" target="_blank"  rel="nofollow">法律声明</a>
                <a href="jobs.html" target="_blank"  rel="nofollow">人才招聘</a>
                <a href="contact.html" target="_blank"  rel="nofollow">联系我们</a>
                <a href="javascript:;" user-feedback ng-click="userFeedback=true" class="last" rel="nofollow">意见反馈</a>
                <a href="javascript:;" class="last" target="_blank" style="display:none">上海餐厅导航</a>
            </div>
        </div>
        <div class="footer-last">
            <a target="_blank" class="foot-logo-1 base-logo" href="index.html"></a>
            <div class="tc fs14 light-gray mb10">
              ©2014 waimaichaoren.com All Rights Reserved - 沪ICP备11019908号
            </div>
        </div>
    </footer>
    
    
    <dh-dialog class="disnone" height="500" feeedbackclass="userFeedback" type="user-feedback" header="意见反馈" show="userFeedback">
        <div ng-controller="feedbackCtrl">
            <form novalidate name="feedbackForm" class="inline">
                <div class="form-group row mb10">
                    <label class="col-3">联系方式：</label>
                    <div class="col-8">
                        <input type="text" maxlength="20" name="tel" required ng-focus="userContactFocus()" ng-class="{error:feedback.phoneMessage}" placeholder="请输入您的手机号码" ng-model="feedback.userContact"/>
                    </div>
                </div>
                <div class="row mb10">
                    <div class="clo-8 col-offset-3" ng-if="feedback.phoneMessage">
                        <span class="vaildate-error">联系方式不能为空</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 vt">反馈信息：</label>
                    <div class="col-8">
                        <textarea name="feedbackMessage"  placeholder="可以说说您对外卖超人的意见" ng-focus="feedbacFocus()" required ng-class="{error:feedback.feedbackMessageTip}" ng-model="feedback.feedbackMessage" maxlength="300" cols="25" rows="7"></textarea>
                    </div>
                </div>
                <div class="row mb10">
                    <div class="clo-8 col-offset-3" ng-if="feedback.feedbackMessageTip">
                        <span class="vaildate-error">反馈信息不能为空</span>
                    </div>
                </div>
                <div class="tc">
                    <button class="btn normal-btn btn-success" ng-click="feedbackSubmit()">确认</button>
                    <button class="btn normal-btn btn-cancel" ng-click="feedbackCancel()">取消</button>
                </div>
            </form>
        </div>
        <div class="common-dialog-footer">
            咨询加QQ群：337212031
        </div>
    </dh-dialog>
    
    <a href="javascript:void(0)" animate-top="-65" class="merchants-icon" ng-click="merchantsShow=true;merchants={};merchants.checkbox=true;"></a>
    
<dh-dialog class="disnone" type='login' height="500" header="登录" show="loginShow" >
        <form action="{{ url('/login') }}" method="post" class="login-form" novalidate name="loginForm" ng-controller="loginCtrl">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">手机号码</label>
            <div>
                <input type="text" name="tel" ng-model="user.username" ng-class="{error:user.usernameMessage}" ng-focus="user.usernameMessage=''" maxlength="11" placeholder="请输入你的手机号码" />
                <span class="vaildate-error" ng-if="user.usernameMessage">
                    <span ng-bind="user.usernameMessage"></span>
                </span>
                <span class="vaildate-error" ng-if="user.isLogined">
                    该手机号码尚未注册！<a href="javascript:;" ng-click="locationRegister()" class="link">立即注册</a>
                </span>
            </div>
        </div>
        <div class="form-group mb10">
            <label for="">登录密码</label>
            <div>
                <input type="password" name="passwd" onpaste="return false" ng-model="user.password" ng-focus="user.passwordMessage=''"  ng-class="{error:user.passwordMessage}" maxlength="10" placeholder="请输入登录密码" />
                <span class="vaildate-error" ng-if="user.passwordMessage">
                    <span ng-bind="user.passwordMessage"></span>
                </span>
            </div>
        </div>
        <div ng-init="showCaptcha=0" ng-if="showCaptcha" class="form-group inline clearfix mb10">
            <div class="fl w50p">
                <input type="text" ng-model="user.captcha" ng-focus="user.captchaMessage=''"  ng-class="{error:user.captchaMessage}" placeholder="请输入验证码">
                <span class="vaildate-error" ng-if="user.captchaMessage">
                    <span ng-bind="user.captchaMessage"></span>
                </span>
            </div>
            <label class="fr">
                <dh-captcha change="captchaChange" src="/homes/images/yzm.gif"></dh-captcha>
            </label>
        </div>
        <div class="clearfix mb10">
            <dh-checkbox model="user.rememberme" title="记住我" class="fl"></dh-checkbox>
            <a href="/account/password/reset_via_mobile/" target="_blank" class="fs12 fr link">忘记密码</a>
        </div>
       <!--  <button class="big-btn btn-green btn mb10" ng-click="loginVaildate()" ng-disabled="loginBtnDisabled" ng-bind="loginBtn"></button> -->
        <input  class="big-btn btn-green btn mb10" type="submit" value=" 登录 " class="btn bgm-lightblue waves-effect form-control">
        <div class="clearfix">
            <span class="fr fs12">
                没有账号?
                <a href="javascript:void(0)" ng-click="locationRegister()" class="link">立即注册</a>
            </span>
        </div>
    </form>
</dh-dialog>
<dh-dialog class="disnone" type='register' height="500" header="注册" show="registerShow" >
    <form action="http://www.elm.com" ng-controller="registerCtrl" class="register-form" name="registerForm">
        <div class="form-group mb10">
            <label for="">手机号码</label>
            <div>
                <input type="text" ng-class="{error:user.usernameMessage}" maxlength="11" placeholder="请输入您的手机号码" ng-model="user.username"/>
                <span class="vaildate-error" ng-if="user.usernameMessage">
                    <span ng-bind="user.usernameMessage"></span>
                </span>
                <span class="vaildate-error" ng-if="user.isRegistered">
                    该手机号码已经注册！<a href="javascript:;" ng-click="locationLogin()" class="link">立即登录</a>
                </span>
            </div>
        </div>



        <div class="form-group captcha-wrap">
            <div class="clearfix captcha-box">
                <div class="fl form-group captcha-item">
                    <div class="fl w50p">
                        <input type="text" ng-class="{error:user.captchaMessage}" ng-focus="user.captchaMessage=''" placeholder="请输入验证码" ng-model="user.captcha" />
                        <span class="vaildate-error" ng-if="user.captchaMessage">
                            <span ng-bind="user.captchaMessage"></span>
                        </span>
                    </div>
                    <button class="fs12 fr w40p btn btn-pink" ng-click="getCaptcha()" ng-disabled="captchaDisabled" ng-bind="captchaVal"></button>
                </div>
                <div class="fl form-group captcha-item">
                    <div class="fl w50p">
                        <input type="text" ng-model="user.imgCaptcha" maxlength="4" ng-class="{error:user.imgCaptchaMessage}" placeholder="请输入验证码">
                        <span class="vaildate-error" ng-if="user.imgCaptchaMessage">
                            <span ng-bind="user.imgCaptchaMessage"></span>
                        </span>
                    </div>
                   <input style="width:110px;height:34px; padding-left:10px" type="button" id="btn" value="免费获取验证码" onclick="getCode(this)" /> 
                </div>
            </div>
        </div>
        <div class="form-group mb10">
            <label for="">登录密码</label>
            <div><input type="password" ng-class="{error:user.passwordMessage}" ng-focus="user.passwordMessage=''"  maxlength="10" onpaste="return false" placeholder="输入登录密码 6-10个字符" ng-model="user.password" />
                <span class="vaildate-error" ng-if="user.passwordMessage">
                    <span ng-bind="user.passwordMessage"></span>
                </span>
            </div>
        </div>
        <div class="form-group mb10">
            <div><input type="password" ng-class="{error:user.password2Message}" ng-focus="user.password2Message=''" maxlength="10" onpaste="return false" placeholder="输入登录密码 6-10个字符" ng-model="user.password2"/>
                <span class="vaildate-error" ng-if="user.password2Message">
                    <span ng-bind="user.password2Message"></span>
                </span>
            </div>
        </div>
        <div class="clearfix mb10">
            <dh-checkbox model="user.remember" title="我同意外卖超人" class="fl"></dh-checkbox>
            <a href="/terms-and-conditions/" target="_blank" class="fs12 fl link"> " 注册条款 "</a>
        </div>
        <button ng-disabled="!user.remember || registerBtnDisabled" ng-click="registerVaildate()" class="big-btn btn-green btn mb10" ng-bind="registerBtn"></button>
    </form>
</dh-dialog>
<script>
    var common_sms_code = '/ajax/common_sms_code/';
    var ajax_customer_user_register_start = '/ajax/customer_user_register_start/';
    var common_validate_sms_code = '/ajax/common_validate_sms_code/';
    var ajax_customer_user_register_register = '/ajax/customer_user_register_register/';
</script>

    <dh-dialog class="disnone" height="500" type="street" header="请选择最靠近你的地址" show="addressShow">
        <ul class="select-street">
            <li ng-repeat="item in shreets" ng-click="resultClick(item)">
                <i class="icon address-yellow"></i>
                <div class="shreets-item">
                    <h4 ng-bind="item.name"></h4>
                    <h5 ng-bind="item.address"></h5>
                </div>
            </li>
        </ul>
        <div class="street-commet">
            <p>以上列出地址都不正确么？</p>
            <p>请您检查地址拼写/格式是否正确和 <a href="javascript:void(0)" class="link" ng-click="resetStreet()">重新输入您的地址</a>。</p>
        </div>
    </dh-dialog>
    <dh-dialog class="disnone" height="500" type="merchants" header="商户入驻申请" show="merchantsShow">
        <div class="inline" ng-controller="merchantCtrl">
            <div class="form-group row mb10">
                <label class="col-3" >商户名称：</label>
                <div class="col-8">
                    <input type="text" ng-class="{error:merchants.nameMessage}" maxlength="11" placeholder="输入店铺的名称，例：美美小厨" ng-model="merchants.name"/>
                </div>
                <span class="vaildate-error col-8 col-offset-3" ng-if="merchants.nameMessage">
                    <span ng-bind="merchants.nameMessage"></span>
                </span>
            </div>
            <div class="form-group row mb10">
                <label class="col-3">所属城市：</label>
                <div class="col-8">
                    <select model="city" area-model="area" ng-class="{error:merchants.cityMessage}" class="city-change"></select>
                </div>
                <span class="vaildate-error col-8 col-offset-3" ng-if="merchants.cityMessage">
                    <span ng-bind="merchants.cityMessage"></span>
                </span>
            </div>
            <div class="form-group row mb10">
                <label class="col-3">行政分区：</label>
                <span class="col-8">
                    <select  id="areaSelect"></select>
                </span>
            </div>
            <div class="form-group row mb10">
                <label class="col-3">店主姓名：</label>
                <div class="col-8">
                    <input type="text" ng-class="{error:merchants.usernameMessage}" placeholder="请输入联系人姓名" ng-model="merchants.username"/>
                </div>
                <span class="vaildate-error col-8 col-offset-3" ng-if="merchants.usernameMessage">
                    <span ng-bind="merchants.usernameMessage"></span>
                </span>
            </div>
            <div class="form-group row mb20">
                <label class="col-3">联系电话：</label>
                <div class="col-8">
                   <input type="text" ng-class="{error:merchants.phoneMessage}" maxlength="11" placeholder="建议输入11位手机号码" ng-model="merchants.phone"/>
                </div>
                <span class="vaildate-error col-8 col-offset-3" ng-if="merchants.phoneMessage">
                    <span ng-bind="merchants.phoneMessage"></span>
                </span>
            </div>
            <div class="form-group row agreement mb20">
               <input type="checkbox" ng-model="merchants.checkbox" id="male"/><label for="male">我同意外卖超人</label><a href="/agreement" target="_blank">"餐厅入驻协议"</a>
            </div>
            <div class="tc merchants-btn">
                <button class="btn normal-btn btn-success" ng-click="merchantSubmit()" ng-disabled="!merchants.checkbox">确认</button>
                <button class="btn normal-btn btn-cancel" ng-click="merchantCancel()">取消</button>
            </div>
        </div>
    </dh-dialog>

    <dh-dialog class="disnone" type="alert" index="1001" header="" show="requestSuccess">
        <div class="alert-box fs14">
            <p>您的入驻申请已经提交成功！<br>请保持手机畅通，超人客服将尽快<br>联系您~</p>
        </div>
    </dh-dialog>
    <dh-dialog class="disnone" type="alert" index="1001" header="" show="requestError">
        <div class="alert-box error fs14">
            <p>抱歉由于系统原因，暂时无法提交。<br>请稍后重试。</p>
        </div>
    </dh-dialog>
    

     <ul class="site-fixed">
        <li class="scroll-top"><img src="/homes/images/scroll_top1.png" alt=""/> </li>
        <li class="scorll-feekback" ng-click="userFeedback=true">
            <img src="/homes/images/scorll_feekback.png" alt=""/>
            <div>意见反馈</div>
        </li>
        <li class="scroll-wx">
            <img src="/homes/images/scroll_wx.png" alt=""/>
             <div><img src="/homes/images/wx.png" alt=""/></div>
        </li>
    </ul>
    
    <script type="text/javascript" src="/homes/js/angular.min.js"></script>
    <script src="/homes/js/common.js"></script>
    
    <script type="text/javascript" src="/homes/http://webapi.amap.com/maps?v=1.3&key=5cd6dcb00bc675bf26c9b4ab2af0759a"></script>
    <script src="/homes/js/service.js"></script>
    
    <script>var feedbackUrl = '/ajax/feedback/';var app = angular.module("app", ["dh.dialog", "dh.form", 'dh.service', 'dh.other']);</script>
    <!--[if lt IE 9]><script src="/homes/js/fix.js"></script><![endif]-->
    
    
    <script>var manually_locations='';</script>
    <script src="/homes/js/frontPage.js"></script>

    
    <script>angular.bootstrap(document, ["app"]);</script>
    



</body>
</html>
