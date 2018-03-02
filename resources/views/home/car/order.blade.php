
<!DOCTYPE html>
<html class="no-js" lang="zh">
 <head> 
  <meta charset="utf-8" /> 
  <title>个人中心 - 下单成功-order_success.html</title> 
  <meta name="description" content="饿了么是中国最专业的网上订餐平台，提供各类中式、日式、韩式、西式等优质美食。" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
<script>
    if(navigator.userAgent.indexOf("MSIE")!=-1 && !window.localStorage){window.location.href="http://m.ele.me";}
  </script> 
  <link class="usemin" rel="stylesheet" href="/h/css/global.2730d877.css" /> 
  <link class="usemin" rel="stylesheet" href="/h/css/order.58f4e423.css" /> 
  <script class="usemin" src="/h/js/cdn_detect.66c19641.js"></script> 
  <script>
    if(!window.CDNReady){var d=new Date;d.setHours(d.getHours()+6);document.cookie='CDNDown=1; domain=v5.ele.me; expires='+d.toUTCString()+'; path=/';if(!window.localStorage.getItem('CDNBackup')){window.localStorage.setItem('CDNBackup',1);location.reload(true)}}
  </script> 
  <script class="usemin" src="/h/js/modernizr.custom.min.f49cdc05.js"></script> 
  <script>
      var startTime = new Date().getTime();
      var ELEME = window.ELEME || {};
      ELEME.baseUrl = "";
      ELEME.formerBaseUrl = "http://ele.me";
      ELEME.route = "order_success";
      ELEME.fussHost = "http://fuss10.elemecdn.com";
      ELEME.staticHost = "http://static11.elemecdn.com";
      ELEME.rootHost = "ele.me";
      ELEME.mainHost = "v5.ele.me";
      ELEME.payHost = "p.ele.me";
      ELEME.accountHost = "account.ele.me";
            ELEME.csrfToken = "fc76845a2551121f35594e9e85208ae4c888b17d";
            ELEME.timeDelta = 1425913516 - new Date().getTime()/1000;
      ELEME.payHost = "p.ele.me";
    </script> 
 </head> 
 <body class="night   
  cart-narrow
"> 
  <div class="container"> 
   <header class="cart-topbar group"> 
    <a class="ctopbar-logo" role="logo" href="http://ele.me">ele.me</a> 
    <div class="ctopbar-breadcrumb" role="navigation"> 
     <span class="ctopbar-nav">饿单完成</span> 
    </div> 
    <div class="eleme_dropdown ctopbar-usernav"> 
     <a class="e_toggle tuser-link caret">hjl416148489</a> 
     <ul class="e_dropdown topbar-user-dropdown ctopbar-dropdown"> 
      <li><a class="tuser-link" href="http://ele.me/profile"><i class="glyph-user"></i>个人中心</a></li> 
      <li><a class="tuser-link" href="http://ele.me/profile/favor_restaurant"><i class="glyph-fav"></i>我的收藏</a></li> 
      <li><a class="tuser-link" href="http://ele.me/profile/address"><i class="glyph-location"></i>我的地址</a></li> 
      <li><a class="tuser-link" href="http://ele.me/profile/security"><i class="glyph-config"></i>安全设置</a></li> 
      <li class="divider"></li> 
      <li><a id="topbar_logout" class="tuser-link" href="http://ele.me/logout"><i class="glyph-off"></i>退出登录</a></li> 
     </ul> 
    </div> 
   </header> 
   <div id="cart_wrap" class="cart-container order-success"> 
    <article id="order_success" class="order-module" data-id="12266119358749105"> 
     <i class="icon-order-success"></i> 
     <h2 class="omodule-title">饿单已成功提交，请耐心等待你的外卖</h2> 
     <p class="omodule-actions"> <a class="ui-btn btn-small" href="{{ url('home/shoplist') }}">返回首页</a> <a class="ui-btn btn-small btn-rp-test" data-toggle="bs-modal" data-target="#modal_rpTest" role="button">谁去拿外卖</a> </p> 
    </article> 
    <aside class="osuccess-aside"> 
     <p class="tip"><i class="icon-order-note"></i>新增积分会在餐厅确认饿单后入账。</p> 
     <p class="tip clear-margin"><i class="icon-order-watch"></i>预测送餐时间为0分钟，请检查您的电话18005151538是否开机。</p> 
     <img class="osuccess-qr" src="/h/images/qrCode.797c160b.png" alt="扫一扫装饿了么手机应用" /> 
    </aside> 
    <div id="modal_rpTest" class="bs-modal fade" tabindex="-1" role="dialog" aria-hidden="true"> 
     <div class="bs-modal-dialog rptest-modal"> 
      <div class="bs-modal-content"> 
       <div class="bs-modal-header"> 
        <h4 class="bs-modal-title">谁去拿外卖</h4> 
        <a class="bs-close" data-dismiss="bs-modal" aria-hidden="true">&times;</a> 
       </div> 
       <div class="bs-modal-body"> 
        <div id="rptest" class="rptest-wrapper"> 
         <header class="relative"> 
          <div class="rptest-badge">
           光荣勋章
          </div> 
          <a id="rptest_btn" class="rptest-ribbon-wrapper"> 
           <div class="rptest-ribbon-middle"> 
            <h5 class="title">点我扔出一个随机数</h5> 
            <p class="caption">（快捷键：空格）</p> 
            <span class="star left">★</span> 
            <span class="star right">★</span> 
           </div> <span class="rptest-ribbon-side left"></span> <span class="rptest-ribbon-side right"></span> </a> 
          <div class="rptest-rule">
           随机到最小数字的人去拿外卖
          </div> 
         </header> 
         <article id="rptest_list" class="rptest-result-wrapper"></article> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <script id="rptest_tpl" type="text/template">
  <% _.each(data.array, function(num) { %>
    <p class="rptest-result<% if (num === data.min) {print(' ui_hit');} %>">
      扔出一个 <%= num %>
      <% if (num == data.min) { %>
        <strong class="hit-badge">喂人民服务</strong>
      <% } %>
    </p>
  <% }); %>
</script> 
   </div> 
  </div> 
  <footer class="site-footer group" role="contentinfo"> 
   <div class="container"> 
    <p class="sfooter-line"> <a class="sfooter-link" href="http://kaidian.ele.me">我要开店</a> | <a class="sfooter-link" href="contact.html">联系我们</a> | <a class="sfooter-link" href="http://ele.me/about/agreement">服务条款和协议</a> | <a class="sfooter-link" href="sitemaps.html">站点地图</a> | <a class="sfooter-link" href="http://ele.me/jobs">加入我们</a> </p> 
    <p class="sfooter-line"> 增值电信业务许可证：<a class="sfooter-link sfooter-link-zero" target="_blank" rel="nofollow" href="http://www.shca.gov.cn">沪B2-20150033</a> <a class="sfooter-link" target="_blank" rel="nofollow" href="http://www.miibeian.gov.cn">沪ICP备 09007032</a> <a class="sfooter-link" target="_blank" rel="nofollow" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20120305173227823">上海工商行政管理</a> Copyright &copy;2008-2015 ele.me, All Rights Reserved. </p> 
   </div> 
  </footer> 
  <div class="site-bg" style="background-position: 0px -11544.8124px;"> 
   <div class="bg-sun"></div> 
   <div class="bg-moon"></div> 
   <div class="bg-cloud-left"></div> 
   <div class="bg-cloud-right"></div> 
  </div> 
  <script class="usemin" src="/h/js/vendor.9fb19c23.js"></script> 
  <script class="usemin" src="/h/js/global.8d3089f1.js"></script> 
  <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script',('http://static11.elemecdn.com')+'/forward/js/vendor/analytics.js','ga');

      ga('create','UA-2513347-3',{'cookieDomain':'.ele.me'});
      ga('send','pageview','order_success/12266119358749105');
      
      var isReady = false,
          readyList = null;
      function domReady(callback) {
        if (isReady) {
          setTimeout(callback);
          return;
        }

        if (readyList) {
          readyList.push(callback);
          return;
        }

        readyList = [callback];
        var completed = function(event) {
          if (document.addEventListener || event.type == 'load' || document.readyState === 'complete') {
            detach();
            realReady();
          }
        };

        if (document.addEventListener) {
          document.addEventListener('DOMContentLoaded', completed, false);
          window.addEventListener('load', completed, false);
        } else {
          document.attachEvent('onreadystatechange', completed);
          window.attachEvent('onload', completed);

          var top = false;
          try {
            top = window.frameElement == null && document.documentElement;
          } catch(e) {}

          if (top && top.doScroll) {
            (function doScrollCheck() {
              if (!isReady) {
                try {
                  top.doScroll('left');
                } catch(e) {
                  return setTimeout(doScrollCheck, 50);
                }
                detach();
                realReady();
              }
            })();
          }
        }

        function detach() {
          if (document.addEventListener) {
            document.removeEventListener('DOMContentLoaded', completed, false);
            window.removeEventListener('load', completed, false);
          } else {
            document.detachEvent('onreadystatechange', completed);
            window.detachEvent('onload', completed);
          }
        }

        function realReady() {
          if (!document.body) {
            setTimeout(realReady);
            return;
          }
          isReady = true;
          var callback;
          while (callback = readyList.shift()) {
            callback();
          }
        }
      }
      domReady(function(){
        readyTime = new Date().getTime() - startTime;
        if(readyTime < 10000 && readyTime > 0){
          ga('send', 'event', 'ReadyTime', ELEME.route, '', readyTime);
        }
      });
    </script> 
  <!-- UBT --> 
  <script>
    UBT.send('PV', {
      resolution: window.screen ? screen.width + 'x' + screen.height : null,
      location: location.href,
      referrer: document.referrer
    });
    </script> 
  <!-- fingerprint --> 
  <script>
    // fingerprint
    void function() {
      // 已存在 fingerprint 则不做处理
      var fingerprint = document.cookie.match(/(?:^|; )track_fingerprint_1=(.*?)(?:; |$)|$/)[1];
      if(fingerprint) return;
      // 发送 fingerprint data
      var fin = new Fingerprint();
      var data = fin.get();
      var track_id = document.cookie.match(/(?:^|; )track_id=(.*?)(?:; |$)|$/)[1];
      var xhr = !-[1,] ? new XDomainRequest() : new XMLHttpRequest();
      xhr.open('POST', '//restapi.ele.me/v1/browser_fingerprints', true);
      var package = { track_id: track_id, json_string: JSON.stringify(data) };
      xhr.send(JSON.stringify(package));
      // 计算 fingerprint 种下 cookie
      var fingerprint = fin.murmurhash3_32_gc(JSON.stringify(package), 31);
      var domain = document.domain.match(/[\w-]+\.?[\w-]+$/)[0];
      document.cookie = 'track_fingerprint_1=' + fingerprint + '; Expires=Wed, 31 Dec 2098 16:00:00 GMT; Domain=' + domain + '; Path=/';
    }();
    </script> 
  <script class="usemin" src="/h/js/orderSuccess.4d5dd330.js"></script>   
 </body>
</html>