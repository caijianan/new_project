@extends('admin.layout.index')
@section('content')

                <div class="container">
                    <div class="block-header">

                    <div class="card">
                        
                        
                        <div class="card-body card-padding">
                            <p class="c-black f-500 m-b-5"><h4>添加商铺</h4></p>
                            <small>请按规定填写相关信息.</small>
                            
                            <br><br>
                            <form action="{{ url('admin/shop') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-8">                       
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="请填写商铺名称" name="s_name">
                                        </div>
                                    </div><br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
                                        <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="请填写商铺地址" name="s_addr">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="请填写起送价格" name="s_price">
                                        </div>
                                    </div>
                                    
                                    <br>
                                    
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="请填写商铺简介" name="s_title">
                                        </div>  
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <div class="fg-line">
                                          <!-- <button class="btn bgm-lightblue waves-effect form-control" >提交</button> -->
                                          <input type="submit" value=" 添 加 店 铺 " class="btn bgm-lightblue waves-effect form-control">
                                        </div>
                                    </div><br>
                                    
                                </div>
                                    <div class="col-sm-4">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-primary btn-file m-r-10 waves-effect">
                                            <span class="fileinput-new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">选择商铺首页</font></font></span>
                                            <span class="fileinput-exists">修改图片</span>
                                            <input type="hidden"><input type="file" name="s_page"  >
                                        </span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">×</a>
                                    </div><br><br>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-primary btn-file m-r-10 waves-effect">
                                            <span class="fileinput-new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">选择商铺其他图片</font></font></span>
                                            <span class="fileinput-exists">修改图片</span>
                                            <input type="hidden"><input type="file" name="s_face[]"  >
                                        </span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">×</a>
                                    </div><br><br>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-primary btn-file m-r-10 waves-effect">
                                            <span class="fileinput-new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">选择商铺其他图片</font></font></span>
                                            <span class="fileinput-exists">修改图片</span>
                                            <input type="hidden"><input type="file" name="s_face[]"  >
                                        </span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">×</a>
                                    </div><br><br><br>
                                    <div class="col-sm-6">
                                      <label>
                                        <input type="radio" name="s_status" id="blankRadio1" value="1" aria-label="..." checked>&nbsp;营业
                                        <input type="radio" name="s_status" id="blankRadio1" value="2" aria-label="...">&nbsp;不营业
                                      </label>
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