@extends('shop.layout.index')
@section('content')
<section id="content">
                <div class="container">
                
                    <div class="card">
                        
                        
                        <div class="card-body card-padding">
                            <p class="c-black f-500 m-b-5"><h4>修改商铺</h4></p>
                            <small>请按规定填写相关信息.</small>
                            
                            <br><br>
                            <form action='{{ url("shop/store/$data->id") }}'' method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-sm-8">                       
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="请填写商铺名称" name="s_name" value="{{ $data->s_name }}">
                                        </div>
                                    </div><br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
                                        <div class="fg-line" >
                                                <input type="text" class="form-control" placeholder="请填写商铺地址" name="s_addr" value="{{ $data->s_addr }}">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="请填写起送价格" name="s_price" value="{{ $data->s_price }}">
                                        </div>
                                    </div>
                                    
                                    <br>
                                    
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="请填写商铺简介" name="s_title" value="{{ $data->s_title }}">
                                        </div>  
                                    </div>
                                    <br>
                                    <div class="col-sm-6">
                                      <label>
                                        营业状态&nbsp;:&nbsp;<input type="radio" name="s_status" id="blankRadio1" value="1" aria-label="..." {{ $data->s_status == 1 ? 'checked' : ''}}>&nbsp;&nbsp;营业
                                        <input type="radio" name="s_status" id="blankRadio1" value="2" aria-label="..." {{ $data->s_status == 2 ? 'checked' : ''}}>&nbsp;&nbsp;不营业
                                      </label>
                                    </div><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    @foreach($s_face as $v)
                                    <div style="display: inline-block;">
                                        <p class="f-500 c-black m-b-20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;修改商铺其他图片:</p>
                            
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput"><img src="/shop_pic/sm_{{$v}}"></div>
                                            <br><br>
                                            <center>
                                            <div >
                                                <span class="btn btn-info btn-file waves-effect">
                                                    <span class="fileinput-new"> 上 传 图 片 </span>
                                                    <span class="fileinput-exists"> 修 改 图 片 </span>
                                                    <input type="file" name="s_face[]">
                                                </span>
                                                <a href="#" class="btn btn-danger fileinput-exists waves-effect" data-dismiss="fileinput"> 删 除 图 片 </a>
                                            </div>
                                            </center>
                                        </div>
                                    </div>
                                        @endforeach
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <div class="fg-line">
                                          <!-- <button class="btn bgm-lightblue waves-effect form-control" >提交</button> -->
                                          <input type="submit" value=" 修 改 店 铺 " class="btn bgm-lightblue waves-effect form-control">
                                        </div>
                                    </div><br>
                                    
                                </div>
                                    <p class="f-500 c-black m-b-20">修改商铺首页图片:</p>
                            
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput"><img src="/shop_pic/sm_{{ $data->s_page }}"></div>
                                            <br><br>
                                            <div>
                                                <span class="btn btn-info btn-file waves-effect">
                                                    <span class="fileinput-new"> 上 传 图 片 </span>
                                                    <span class="fileinput-exists"> 修 改 图 片 </span>
                                                    <input type="file" name="s_page">
                                                </span>
                                                <a href="#" class="btn btn-danger fileinput-exists waves-effect" data-dismiss="fileinput"> 删 除 图 片 </a>
                                            </div>
                                        </div>
                                        
                                        
                                        <br>
                                        <br>
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