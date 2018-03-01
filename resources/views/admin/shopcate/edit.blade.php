@extends('admin.layout.index')
@section('content')
<section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Form Components</h2>
                    
                        <ul class="actions">
                            <li>
                                <a href="">
                                    <i class="zmdi zmdi-trending-up"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="zmdi zmdi-check-all"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                    
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="">Refresh</a>
                                    </li>
                                    <li>
                                        <a href="">Manage Widgets</a>
                                    </li>
                                    <li>
                                        <a href="">Widgets Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    
                    </div>
                
                    <div class="card">
                        
                        
                        <div class="card-body card-padding">
                            <p class="c-black f-500 m-b-5"><h4>修改分类</h4></p>
                            <small>请按规定填写相关信息.</small>
                            
                            <br><br>
                            <form action='{{ url("admin/shopcate/$type->id") }}' method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-sm-8">                       
                                    <div class="input-group">
                                        <span class="input-group-addon">#</span>
                                        <div class="fg-line" style="width: 20%">
                                                <input type="text" class="form-control" name=id value="{{$type->id}}">
                                        </div>
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                         <div class="fg-line" style="width: 80%">
                                                <input type="text" class="form-control" name=st_name  value="{{$type->st_name}}">
                                             
                                        </div>
                                    </div><br>
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <div class="fg-line">
                                          <!-- <button class="btn bgm-lightblue waves-effect form-control" >提交</button> -->
                                          <input type="submit" value=" 确 认 修 改 " class="btn bgm-lightblue waves-effect form-control">
                                        </div>
                                    </div><br>
                                    
                                </div>
                                
                        <br>
                    </div>

                  </form>
            </section> -->
@endsection