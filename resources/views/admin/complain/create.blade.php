@extends('admin.layout.index')
@section('content')
<section id="content">
                <button onclick="history.back()" class="btn btn-info btn-icon p-fixed m-l-30" title="返回上一页"><i class="zmdi zmdi-arrow-back"></i></button>
                <div class="container">
                    <div class="card">
                        <div class="card-body card-padding">
                            <p class="c-black f-500 m-b-5"><h4>添加投诉</h4></p>
                            <br>
                            <form action="{{ url('admin/complain') }}" method="post">
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
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
                                        <div class="fg-line">
                                               <select name="cate" id="">
                                                   <option value="">- 投诉类型 -</option>
                                                   <option value="1">aaaaa</option>
                                                   <option value="2">bbbbb</option>
                                                   <option value="3">ccccc</option>
                                                   <option value="4">ddddd</option>
                                               </select>
                                        </div>
                                    </div><br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                                <textarea style="resize:none" name="content" id="" cols="80" rows="6" placeholder="请填写投诉内容"></textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                                <input type="text" name="uid" class="form-control" placeholder="请填写用户ID">
                                        </div>
                                    </div><br>
                                    <input type="hidden" name='time' value="{{ time() }}">
                                    <input type="hidden" name='status' value="1">
                                    <div class="col-sm-2">
                                        <button class="btn btn-primary btn-block">提交</button>
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