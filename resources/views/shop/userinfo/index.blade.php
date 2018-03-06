@extends('shop.layout.index')
@section('content')
<section id="content">

                <div class="container">
                 @if (session('msg'))           <!--判断有没有闪存，如果有闪存就显示一下 -->
                <script>
                    alert("{{ session('msg') }}")
                </script>
                 @endif
                    
                    <div class="block-header">
                        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">本店信息</font></font><small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></small></h2>
                    </div>
                     @foreach($list as $v)
                    <div class="card" id="profile-main">
                        <div class="pm-overview c-overflow mCustomScrollbar _mCS_3 mCS-autoHide" style="overflow: visible;"><div id="mCSB_3" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical_horizontal mCSB_outside" tabindex="0"><div id="mCSB_3_container" class="mCSB_container mCS_x_hidden mCS_no_scrollbar_x" style="position: relative; top: 0px; left: 0px; width: 100%;" dir="ltr">
                            <div class="pmo-pic">
                                <div class="p-relative">
                                        <img class="img-responsive mCS_img_loaded" src="/scomment_pic/{{ $v->s_face }}" alt=""> 
                                </div>
                                
                              
                            </div>
                            
                            <div class="pmo-block pmo-contact hidden-xs">
                           
                                <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">主要信息</font></font></h2>
                                
                                <ul>
                                    <li><i class="zmdi zmdi-account m-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->s_name }}</font></font></li>
                                    <li><i class="zmdi zmdi-phone"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->s_tel }}</font></font></li>
                                    <li><i class="zmdi zmdi-email"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->s_addr }}</font></font></li>
                                </ul>
                                
                            </div>
                           
                        </div></div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; display: block; height: 557px; max-height: 677px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div><div id="mCSB_3_scrollbar_horizontal" class="mCSB_scrollTools mCSB_3_scrollbar mCS-minimal-dark mCSB_scrollTools_horizontal" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 50px; width: 0px; left: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
                        
                        <div class="pm-body clearfix">
                            <ul class="tab-nav tn-justified">
                                <li class="active waves-effect"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关于</font></font></a></li>
                            </ul>
                            
                            
                            <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-equalizer m-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 商铺简介</font></font></h2>
                                    
                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">编辑</font></font></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                    <div class="pmbb-view"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        {{ $v->s_title }}</font></div>
                                    <form action='{{ url("/shop/userinfo/edit") }}' method="post">
                                     {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="put">
                                    <div class="pmbb-edit">
                                        <div class="fg-line">
                                            <input type="text" name="s_title" class="form-control" value="{{ $v->s_title }}">
                                           <!--  <textarea class="form-control" rows="5" placeholder="">{{ $v->s_title }}</textarea> -->
                                        </div>
                                        <div class="m-t-10">
                                            <button  class="btn btn-info">保存</button>&nbsp;
                                            <button data-pmb-action="reset" class="btn btn-danger">取消</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                            <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-account m-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 基本信息</font></font></h2>
                                    
                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">编辑</font></font></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                    <div class="pmbb-view">
                                        <dl class="dl-horizontal">
                                            <dt><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商铺名:</font></font></dt>
                                            <dd><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->s_name }}</font></font></dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">店铺类别:</font></font></dt>
                                            <dd><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->st_name }}</font></font></dd>
                                        </dl>
                                    </div>
                                    
                                    <div class="pmbb-edit">
                                        <dl class="dl-horizontal">
                                        <form action='{{ url("/shop/userinfo/edit") }}' method="post">
                                         {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="put">
                                            <dt class="p-t-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商铺名</font></font></dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" name="s_name" class="form-control" value="{{ $v->s_name }}">
                                                </div>
                                                
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">店铺类别</font></font></dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <select class="form-control" name="stid">
                                                        @foreach($type as $v)
                                                        <option value="{{ $v->id }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->st_name }}</font></font></option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </dd>
                                        </dl>                       
                                        <div class="m-t-30">
                                            <button  class="btn btn-info">保存</button>&nbsp;
                                            <button data-pmb-action="reset" class="btn btn-danger">取消</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-phone m-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 联系信息</font></font></h2>
                                    
                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">编辑</font></font></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                <form action='{{ url("/shop/userinfo/edit") }}' method="post">
                                         {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="put">
                                 @foreach($list as $v)
                                    <div class="pmbb-view">
                                        <dl class="dl-horizontal">
                                            <dt><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">移动电话</font></font></dt>
                                            <dd><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->s_tel }}</font></font></dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商铺地址</font></font></dt>
                                            <dd><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->s_addr }}</font></font></dd>
                                        </dl>
                                    </div>
                                  @endforeach  
                                </div>    
                                    <div class="pmbb-edit">
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">移动电话</font></font></dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text"  name="s_tel" class="form-control" value="{{ $v->s_tel }}">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商铺地址</font></font></dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" name="s_addr" class="form-control" value="{{ $v->s_addr }}">
                                                </div>
                                            </dd>
                                        </dl>
                                        <div class="m-t-30">
                                           <button  class="btn btn-info">保存</button>&nbsp;
                                            <button data-pmb-action="reset" class="btn btn-danger">取消</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-phone m-r-5"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商铺图片</font></font></h2>
                                    <br><img src="/scomment_pic/{{ $v->s_face }}" width="300" height="250" style="border: 2px solid #ccc">
                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">编辑</font></font></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                               
                                    <div class="pmbb-edit">
                                    <form action='{{ url("/shop/userinfo/edit") }}' method="post" enctype="multipart/form-data">
                                         {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="put">
                                        <p class="f-500 c-black m-b-20">上传图片:</p>
                            
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="line-height: 150px;"><img src="/scomment_pic/{{ $v->s_face }}"></div>
                                            <br><br>
                                            <div>
                                                <span class="btn btn-info btn-file waves-effect">
                                                    <span class="fileinput-new"> 上 传 图 片</span>
                                                    <span class="fileinput-exists"> 修 改 图 片 </span>
                                                    <input type="file" name="s_face">
                                                </span>
                                                <a href="#" class="btn btn-danger fileinput-exists waves-effect" data-dismiss="fileinput"> 删 除 图 片 </a>
                                            </div>
                                        </div>
                                        
                                        <br>
                                        <br>
                                        
                                                    <div class="m-t-30">
                                                       <button  class="btn btn-info">保存</button>&nbsp;
                                                        <button data-pmb-action="reset" class="btn btn-danger">取消</button>
                                                    </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>

                    @endforeach
                </div>
            </section>
@endsection