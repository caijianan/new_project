
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>仿饿了么平台管理</title>

        



        <!-- Vendor CSS -->
        <link href="/d/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="/d/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="/d/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
        <link href="/d/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="/d/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
        <link href="/d/vendors/bootgrid/jquery.bootgrid.min.css" rel="stylesheet">  
        <!-- CSS -->
        <link href="/d/css/app.min.1.css" rel="stylesheet">
        <link href="/d/css/app.min.2.css" rel="stylesheet">
        <link href="/d/css/translateelement.css" rel="stylesheet">
        <style type="text/css">
        .notifications .btn {
            width: 100%;
            margin-bottom: 20px;
        }
        </style>
        <script src="/d/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/layer/layer.js"></script>
        <script src="/layer/extend/layer.ext.js"></script>
    </head>
        
    <body>
        <header id="header" class="clearfix" data-current-skin="orange">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>

                <li class="logo hidden-xs">
                    <a href="index.html">商家平台</a>
                </li>
                <li id="toggle-width" style="margin-left: 120px;">
                            <div class="toggle-switch">
                                <input id="tw-switch" type="checkbox" hidden="hidden">
                                <label for="tw-switch" class="ts-helper"></label>
                            </div>
                        </li> 
                <!-- <li class="pull-right">
                    <ul class="top-menu">
                        <li id="toggle-width">
                            <div class="toggle-switch">
                                <input id="tw-switch" type="checkbox" hidden="hidden">
                                <label for="tw-switch" class="ts-helper"></label>
                            </div>
                        </li>

                        <li id="top-search">
                            <a href=""><i class="tm-icon zmdi zmdi-search"></i></a>
                        </li>

                        <li class="dropdown">
                            <a data-toggle="dropdown" href="">
                                <i class="tm-icon zmdi zmdi-email"></i>
                                <i class="tmn-counts">6</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg pull-right">
                                <div class="listview">
                                    <div class="lv-header">
                                        Messages
                                    </div>
                                    <div class="lv-body">
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="/d/img/profile-pics/1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">David Belle</div>
                                                    <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="/d/img/profile-pics/2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Jonathan Morris</div>
                                                    <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="/d/img/profile-pics/3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                                    <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="/d/img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Glenn Jecobs</div>
                                                    <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="/d/img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Bill Phillips</div>
                                                    <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a class="lv-footer" href="">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="">
                                <i class="tm-icon zmdi zmdi-notifications"></i>
                                <i class="tmn-counts">9</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg pull-right">
                                <div class="listview" id="notifications">
                                    <div class="lv-header">
                                        Notification

                                        <ul class="actions">
                                            <li class="dropdown">
                                                <a href="" data-clear="notification">
                                                    <i class="zmdi zmdi-check-all"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="lv-body">
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="/d/img/profile-pics/1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">David Belle</div>
                                                    <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="/d/img/profile-pics/2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Jonathan Morris</div>
                                                    <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                                    <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="/d/img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Glenn Jecobs</div>
                                                    <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="/d/img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Bill Phillips</div>
                                                    <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <a class="lv-footer" href="">View Previous</a>
                                </div>

                            </div>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a data-toggle="dropdown" href="">
                                <i class="tm-icon zmdi zmdi-view-list-alt"></i>
                                <i class="tmn-counts">2</i>
                            </a>
                            <div class="dropdown-menu pull-right dropdown-menu-lg">
                                <div class="listview">
                                    <div class="lv-header">
                                        Tasks
                                    </div>
                                    <div class="lv-body">
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">HTML5 Validation Report</div>

                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                    <span class="sr-only">95% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Google Chrome Extension</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Social Intranet Projects</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Bootstrap Admin Template</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Youtube Client App</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="lv-footer" href="">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" href=""><i class="tm-icon zmdi zmdi-more-vert"></i></a>
                            <ul class="dropdown-menu dm-icon pull-right">
                                <li class="skin-switch hidden-xs">
                                    <span class="ss-skin bgm-lightblue" data-skin="lightblue"></span>
                                    <span class="ss-skin bgm-bluegray" data-skin="bluegray"></span>
                                    <span class="ss-skin bgm-cyan" data-skin="cyan"></span>
                                    <span class="ss-skin bgm-teal" data-skin="teal"></span>
                                    <span class="ss-skin bgm-orange" data-skin="orange"></span>
                                    <span class="ss-skin bgm-blue" data-skin="blue"></span>
                                </li>
                                <li class="divider hidden-xs"></li>
                                <li class="hidden-xs">
                                    <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                                </li>
                                <li>
                                    <a data-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                                </li>
                                <li>
                                    <a href=""><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                                </li>
                                <li>
                                    <a href=""><i class="zmdi zmdi-settings"></i> Other Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-xs" id="chat-trigger" data-trigger="#chat">
                            <a href=""><i class="tm-icon zmdi zmdi-comment-alt-text"></i></a>
                        </li>
                    </ul>
                </li> -->
            </ul>


            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <div class="tsw-inner">
                    <i id="top-search-close" class="zmdi zmdi-arrow-left"></i>
                    <input type="text">
                </div>
            </div>
        </header>
        
        <section id="main" data-layout="layout-1">
            <aside id="sidebar" class="sidebar c-overflow">
                <div class="profile-menu">
                    <a href="">
                        <div class="profile-pic">
                            <img src="/d/img/profile-pics/1.jpg" alt="">
                        </div>

                        <div class="profile-info">
                            我的中心

                            <i class="zmdi zmdi-caret-down"></i>
                        </div>
                    </a>

                    <ul class="main-menu">
                        <li>
                            <a href="{{ url('shop/userinfo') }}"><i class="zmdi zmdi-account"></i>我的资料</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-time-restore"></i>退出</a>
                        </li>
                    </ul>
                </div>

                <ul class="main-menu">
                    <li class="active">
                        <a href="{{ url('shop/') }}"><i class="zmdi zmdi-home" style="color:orange"></i>回到首页</a>
                    </li>
                    <li class="">
                        <a href="{{ url('shop/order') }}"><i class="zmdi zmdi-assignment" style="color:orange"></i>我的订单</a>
                    </li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-local-store zmdi-hc-fw" style="color:orange"></i> 我的店铺</a>
                        <ul>
                            <li><a href="{{ url('shop/store') }}"><i class="zmdi zmdi-store zmdi-hc-fw"></i>店铺列表</a></li>
                            <li><a href="{{ url('shop/store/create') }}"><i class="zmdi zmdi-local-store zmdi-hc-fw"></i>申请店铺</a></li>
                        </ul>
                    </li>
                   
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-cocktail zmdi-hc-fw" style="color:orange"></i> 我的菜品</a>
                        <ul>
                            <li><a href="{{ url('shop/food') }}"><i class="zmdi zmdi-menu zmdi-hc-fw"></i>菜品列表</a></li>
                            <li><a href="{{ url('shop/food/create') }}"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>添加菜品</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-cocktail zmdi-hc-fw" style="color:orange"></i> 我的分类</a>
                        <ul>
                            <li><a href="{{ url('shop/foodcate') }}"><i class="zmdi zmdi-menu zmdi-hc-fw"></i>菜品分类</a></li>
                            <li><a href="{{ url('shop/foodcate/create') }}"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>添加分类</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-comments" style="color:orange"></i> 我的评论</a>
                        <ul>
                            <li><a href="{{ url('shop/scomment') }}">店铺评论</a></li>
                            <li><a href="{{ url('shop/fcomment') }}">商品评论</a></li>
                        </ul>
                    </li>
                    <!-- <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-settings"></i> 其他设置</a>

                        <ul>
                            <li><a href="{{ url('shop/activity') }}">修改密码</a></li>
                            <li><a href="{{ url('shop/activity/create') }}">联系客服</a></li>
                        </ul>
                    </li> -->
                </ul>
            </aside>
            
            <aside id="chat" class="sidebar c-overflow">
            
                <div class="chat-search">
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Search People">
                    </div>
                </div>

                <div class="listview">
                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="/d/img/profile-pics/2.jpg" alt="">
                                <i class="chat-status-busy"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Jonathan Morris</div>
                                <small class="lv-small">Available</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left">
                                <img class="lv-img-sm" src="/d/img/profile-pics/1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lv-title">David Belle</div>
                                <small class="lv-small">Last seen 3 hours ago</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="/d/img/profile-pics/3.jpg" alt="">
                                <i class="chat-status-online"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                <small class="lv-small">Availble</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="/d/img/profile-pics/4.jpg" alt="">
                                <i class="chat-status-online"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Glenn Jecobs</div>
                                <small class="lv-small">Availble</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left">
                                <img class="lv-img-sm" src="/d/img/profile-pics/5.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Bill Phillips</div>
                                <small class="lv-small">Last seen 3 days ago</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left">
                                <img class="lv-img-sm" src="/d/img/profile-pics/6.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Wendy Mitchell</div>
                                <small class="lv-small">Last seen 2 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="/d/img/profile-pics/7.jpg" alt="">
                                <i class="chat-status-busy"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Teena Bell Ann</div>
                                <small class="lv-small">Busy</small>
                            </div>
                        </div>
                    </a>
                </div>
            </aside>
           


            <section id="">
                @if (count($errors) > 0)
                    <div class="alert alert-danger" >
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}    
                </div>
                @endif
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}    
                </div>
                @endif

            @section('content')
                    

            @show
        </section>
        
        <footer id="footer">
            Copyright &copy; 2015 Material Admin
            
            <ul class="f-menu">
                <li><a href="">Home</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Reports</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </footer>

        <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>
        
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->
        
        <!-- Javascript Libraries -->
        
        <script src="/d/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        
        <script src="/d/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="/d/vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="/d/vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="/d/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="/d/vendors/sparklines/jquery.sparkline.min.js"></script>
        <script src="/d/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        
        <script src="/d/vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="/d/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js "></script>
        <script src="/d/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>




         <script src="/d/vendors/bower_components/Waves/dist/waves.min.js"></script>

        
        <script src="/d/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="/d/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
        <script src="/d/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="/d/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
        <script src="/d/vendors/bower_components/nouislider/distribute/jquery.nouislider.all.min.js"></script>
        <script src="/d/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <script src="/d/vendors/bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
        <script src="/d/vendors/summernote/dist/summernote-updated.min.js"></script>
        <script src="/d/vendors/bower_components/chosen/chosen.jquery.min.js"></script>
        <script src="/d/vendors/fileinput/fileinput.min.js"></script>
        <script src="/d/vendors/input-mask/input-mask.min.js"></script>
        <script src="/d/vendors/farbtastic/farbtastic.min.js"></script>
        <script src="/d/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->
        
        <script src="/d/js/flot-charts/curved-line-chart.js"></script>
        <!-- <script src="/d/js/flot-charts/line-chart.js"></script> -->
        <script src="/d/js/charts.js"></script>
        <!-- <script src="/d/js/charts.js"></script> -->
        <script src="/d/js/functions.js"></script>
        <script src="/d/js/demo.js"></script>
        <!-- <script src="/d/js/jquery-1.8.3.min.js"></script>
        <script src="/layer/layer.js"></script> -->
            
        
    </body>
</section >

  </html>
