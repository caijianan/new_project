@extends('admin.layout.index')
@section('content')
<section id="content">
                <button onclick="goBack()" class="btn btn-info btn-icon p-fixed m-l-30" title="返回列表页"><i class="zmdi zmdi-arrow-back"></i></button>
                <div class="container">
                    <div class="card">
                        <div class="card-body card-padding">
                            <p class="c-black f-500 m-b-5"><h4>添加投诉</h4></p>
                            <br>
                            <form action="{{ url('admin/complain') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-8">                       
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                                <input type="text" name="sid" class="form-control" placeholder="请填写要投诉的商铺ID">
                                        </div>
                                    </div><br>
                                     <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                            <input type="text" name="uid" class="form-control" placeholder="请填写用户ID">
                                        </div>
                                    </div><br><br>
                                     <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
                                        <div class="fg-line">
                                               <select name="cate" id="">
                                                   <option value="">- 投诉类型 -</option>
                                                   <option value="1">商家资质</option>
                                                   <option value="2">商品价格</option>
                                                   <option value="3">商家配送</option>
                                                   <option value="4">其他问题</option>
                                               </select>
                                        </div>
                                    </div><br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                                <textarea class="bs-item" style="resize:none; border-radius: 5px;" name="content" cols="80" rows="6" placeholder="请填写投诉内容"></textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        &nbsp;&nbsp;&nbsp;
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <i class="zmdi zmdi-image zmdi-hc-fw"></i>
                                            <span>上传投诉图片</span><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="btn btn-primary btn-file m-r-10">
                                                <span class="fileinput-new">选择图片</span>
                                                <span class="fileinput-exists">更改</span>
                                                <input type="file" name="cimg" multiple>
                                            </span>
                                            <span class="fileinput-filename"></span>
                                            <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon pull-left">&nbsp;<i class="zmdi zmdi-account"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>选择投诉状态</span></span>
                                    </div><br>
                                    <div class="input-group" style="margin-left: 5%">
                                        <label class="checkbox checkbox-inline m-r-10">
                                            <input type="radio" value="1" name="status">
                                            <i class="input-helper"></i>    
                                            未处理
                                        </label>
                                        <label class="checkbox checkbox-inline m-r-10">
                                            <input type="radio" value="2" name="status">
                                            <i class="input-helper"></i>    
                                            处理中
                                        </label>
                                        <label class="checkbox checkbox-inline m-r-10">
                                            <input type="radio" value="3" name="status">
                                            <i class="input-helper"></i>  
                                            处理完成
                                        </label>
                                    </div><br><br>
                                    <input type="hidden" name='time' value="{{ time() }}">
                                    <div class="input-group" style="margin-left:25%; display: inline-block;">
                                        <button class="btn btn-primary btn-block" style="">提交</button>
                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="input-group" style="display: inline-block;">
                                        <button class="btn btn-primary btn-block" type="reset">重置</button>
                                    </div>
                                </div>

                            </div>
                            
                            <br><br>
                            
                            <br>
                            <br>
                            <br>
                        
                        <br>
                    </div>

                  </form>
                  <script>
                      function goBack()
                      {
                        window.location.href = '{{ url("admin/complain") }}';
                      }
                  </script>
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
@endsection