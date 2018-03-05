<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        
        <!-- Vendor CSS -->
        <link href="/d/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="/d/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
            
        <!-- CSS -->
        <link href="/d/css/app.min.1.css" rel="stylesheet">
        <link href="/d/css/app.min.2.css" rel="stylesheet">

        <style>
            .code {
               width: 100px;
               height: 30px;
               line-height: 30px;
               display: inline-block;
               background-color: #2aabd2;
               color: #fff;
               text-align: center;
               cursor: pointer;
             }

             /* 倒计时时样式*/
             .code1 {
               background-color: #8c8c8c;
               color: #E6E6E6;
               user-select: none;
             }
        </style>
    </head>
    
    <body class="login-content">
        
        <!-- Register -->
        <div class="lc-block toggled" id="l-register">
        <form action="{{ url('home/reg') }}" method="post" name="myform">
        {{ csrf_field() }}
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                <div class="fg-line">
                    <input type="text" name="username" class="form-control" placeholder="用户名">
                </div>
            </div>
            
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                <div class="fg-line">
                    <input type="password" name="password" class="form-control" placeholder="请输入密码">
                </div>
            </div>
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                <div class="fg-line">
                    <input type="cpassword" name="cpassword" class="form-control" placeholder="再次输入密码">
                </div>
            </div>
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                <div class="fg-line">
                    <input type="text" name="phone" id="phone" class="form-control phone" placeholder="手机号">
                </div>
            </div>

            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                <div class="fg-line">
                    <input type="text" name="code" class="form-control" placeholder="验证码" style="width: 100px">
                    <span class="code">获取验证码</span>
                </div>
            </div>

            <div class="input-group m-b-20">
                <div class="fg-line">
                    <button class="btn bgm-orange waves-effect btn-lg">注册</button>
                </div>
            </div>
            <div class="clearfix"></div>
        </form>
        </div>

        <!-- Javascript Libraries -->
        <script src="/d/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/d/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="/d/vendors/bower_components/Waves/dist/waves.min.js"></script>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="./d/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->
        
        <script src="/d/js/functions.js"></script>
        <script>
            var code = $(".code");
            var validCode = true;

            code.click(function() {

                var phone = $("#phone").val();
                // 手机验证
                $.ajax({
                   type:'get',
                   url:'{{ url("home/reg/create") }}',
                   data:{ '_token':'{{  csrf_token() }}', 'phone':phone },
                   success:function(data){
                      // 倒计时开始
                      var time = 60;
                      if (validCode) {
                        validCode = false;
                        $(this).addClass("code1");
                        var t = setInterval(function() {
                          time--;
                          code.text(time + "秒");
                          if (time == 0) {
                            clearInterval(t);
                            code.text("重新获取");
                            validCode = true;
                            code.removeClass("code1");
                          }
                        }, 1000);
                        $(".code").after("<span>"+data.msg+"</span>");
                      }
                      // 倒计时结束

                    }
                });
            });
        </script>
    </body>
</html>