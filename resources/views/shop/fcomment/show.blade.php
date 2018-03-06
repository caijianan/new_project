@extends('shop.layout.index')
@section('content')
@foreach($data as $k=>$v)
<section id="content">
    <div class="container">
        <div class="card" id="profile-main">
                <div class="container">
                    <div class="pmb-block">
                    <div class="pmbb-header">
                        <h2><i class="zmdi zmdi-account m-r-5"></i>评价详情</h2>
                    </div>
                    <div class="pmbb-body p-l-30">
                        <div class="pmbb-view">
                            <dl class="dl-horizontal">
                                <dt>用户</dt>
                                <dd>{{ $uname[$k]}}</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>商品</dt>
                                <dd>{{ $f_name[$k]}}</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>商品满意度</dt>
                                <dd>{{ ($v->f_satis=='1')?'满意':'不满意' }}</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>评论时间</dt>
                                <dd>{{ date('Y年m月d日 H:i',$v->f_ctime) }}</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>评论内容</dt>
                                <dd>{{ $v->f_content }}</dd>
                            </dl>
                           <!--   <dl class="dl-horizontal">
                                <dt>评论图片</dt>
                                <dd><div style="width:304px; height:254px;border: 2px solid #000"><img src="/fcomment_pic/{{ $v->f_img }}" width="300px" height="250px"></div></dd>
                            </dl> -->
                        </div>
@endforeach                        
<!--       <div class="card">
                        <div class="card-header">
                            <h2>Simple File Input <small>The file input plugin allows you to create a visually appealing file or image input widgets</small></h2>
                        </div>
                        
                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="f-500 c-black m-b-20">Basic Example</p>
                                    
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-primary btn-file m-r-10 waves-effect">
                                            <span class="fileinput-new">Select file</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="...">
                                        </span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">×</a>
                                    </div>
                                </div>
                            </div>
                            
                            <br>
                            <br>
                            
                            <p class="f-500 c-black m-b-20">Image Preview</p>
                            
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                <div>
                                    <span class="btn btn-info btn-file waves-effect">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="...">
                                    </span>
                                    <a href="#" class="btn btn-danger fileinput-exists waves-effect" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                            
                            <br>
                            <br>
                            <p><em>Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.</em></p>
                        </div>
                    </div>
            </section> -->
            </div>
        </div>
    </div>

@endsection