@extends('admin.layout.index')
@section('content')
<section id="content">
                <button onclick="goBack()" class="btn btn-info btn-icon p-fixed m-l-30" title="返回列表页"><i class="zmdi zmdi-arrow-back"></i></button>
                <div class="container">
                    <div class="card">
                        <div class="card-body card-padding">
                            <p class="c-black f-500 m-b-5"><h4>投诉详情</h4></p>
                            <br>
                            <form action='{{ url("admin/complain/$data->id") }}' method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-sm-8">                       
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>

                                        <div class="fg-line">
                                                <input type="text" name="sid" class="form-control" value="{{ $data->sid }}">
                                        </div>
                                    </div><br>
                                     <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
                                        <div class="fg-line">
                                               <select name="cate" class="form-control" >
                                                   <option value="1" {{ $data->cate==1 ? 'selected' : ''}}>商家资质</option>
                                                   <option value="2" {{ $data->cate==2 ? 'selected' : ''}}>商品价格</option>
                                                   <option value="3" {{ $data->cate==3 ? 'selected' : ''}}>商家配送</option>
                                                   <option value="4" {{ $data->cate==4 ? 'selected' : ''}}>其他问题</option>
                                               </select>
                                        </div>
                                    </div><br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                                <textarea style="resize:none" name="content" id="" cols="80" rows="6">{{ $data->content }}</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                                <input type="text" name="uid" class="form-control" value="{{ $data->uid }}">
                                        </div>
                                    </div><br>
                                    <div class="input-group">
                                        <label class="checkbox checkbox-inline m-r-20">
                                            <input type="radio" value="1" name="status" {{ $data->cate==1 ? 'checked' : ''}}>
                                            <i class="input-helper"></i>    
                                            未处理
                                        </label>
                                        <label class="checkbox checkbox-inline m-r-20">
                                            <input type="radio" value="2" name="status" {{ $data->status==2 ? 'checked' : ''}}>
                                            <i class="input-helper"></i>    
                                            处理中
                                        </label>
                                        <label class="checkbox checkbox-inline m-r-20">
                                            <input type="radio" value="3" name="status" {{ $data->status==3 ? 'checked' : ''}}>
                                            <i class="input-helper"></i>    
                                            处理完成
                                        </label>
                                    </div><br>
                                    <input type="hidden" name='time' value="{{ $data->time }}">
                                    <div class="input-group">
                                        <button class="btn btn-primary btn-block">确认修改</button>
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