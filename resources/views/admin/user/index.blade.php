@extends('admin.layout.index')
@section('content')
<form action="" method="post" name="myform">
    {{ csrf_field() }}
    {{ method_field('delete') }}
</form>
<section id="content">
<div class="container">
    <div class="block-header">
        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">用户管理</font></font></h2>
    </div>
    <div class="card">
        <div class="card-header">
            <br>
            <form action='{{url("admin/user")}}' method="get">
            <div class="row">
                <div class="col-sm-2">
                <div class="input-group fg-float">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="fg-line">
                        <input type="text" name="uname" class="form-control">
                        <label class="fg-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜获用户</font></font></label> 
                    </div>

                </div>
                </div>
                <div class="col-sm-2">
                   <select name="sex" id="" class="form-control">
                        <option value="">请选择性别</option>
                        <option value="1">男</option>
                        <option value="2">女</option>
                    </select>                         
                </div>
                <div class="col-sm-2">
                   <button class="btn btn-info"><i class="zmdi zmdi-search"></i></button>                
                </div>
            </div>
            </form>
            <br><br><br>
        <div class="table-responsive">
        @if (session('msg'))           <!--判断有没有闪存，如果有闪存就显示一下-->
            <script>
                alert("{{ session('msg') }}")
            </script>
        @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>id</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>用户名</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>联系方式</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>性别</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>用户密码</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>商户/用户</h4></font></font>
                        </th>
                         <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>用户头像</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>修改 &nbsp; / &nbsp;删除</h4></font></font>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    <tr>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->id }}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->uname }}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->tel }}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ ($v->sex=='1')?'男':'女'  }}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->passwd }}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ ($v->isshoper=='1')?'用户':'商户' }}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><img src="/user_pic/sm_{{$v->uface}}"></font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><a href='{{ url("admin/user/$v->id/edit") }}' class="btn btn-info"><font style="vertical-align: inherit;">修改</font></a>
                        </font>&nbsp;
                       
                       <!--  <font style="vertical-align: inherit;"><a href="javascript:doDel({{ $v->uid }})" class="btn btn-danger">
                            <font style="vertical-align: inherit;">删除</font></a></font> -->
                             <!-- <button type="submit" style="vertical-align: inherit;" onclick="doDel({{ $v->uid }}, this)" class="btn btn-danger">
                             <span style="vertical-align: inherit;">删除</span></button> -->
                             <font style="vertical-align: inherit;"><a href="javascript:void(0)" onclick="doDel({{$v->id}},this)" class="btn btn-danger">
                            <font style="vertical-align: inherit;">删除</font></a>
                        </font>
                            
                        </td>


                    </tr>
                    </tr>
                    @endforeach
                </tbody>
            </table>
<nav>
<div align="center">{!! $list->appends($sou)->render()!!}</div>
<div align="center">共<?=$tiao?>条</div>
</nav>


        </div>
        
    </div>

        <script src="/d/vendors/bower_components/jquery/src/jquery.js"></script>
        <script src="/layer/layer.js"></script>
        <script type="text/javascript">
            // function doDel(uid)
            // {
            //     var form = document.myform;
            //     form.action = '{{ url("/admin/user") }}/'+uid;
            //     // alert(form.action);
            //     form.submit();
            // }
            // 
            //===========================================================
           
        function doDel(id, _this){
                // alert(11111);
                layer.confirm('你确定要删除？', {
                      btn: ['确定','取消'] 
                    }, function(){
                      $.post('{{url("admin/user")}}/'+id,{'_token':'{{csrf_token()}}','_method':'delete'},function(data){
                            if(data == 1){
                                layer.msg('成功',{icon: 1,time:1000});
                                $(_this).parents('tr').remove();
                            }else{
                                layer.msg('失败',{icon: 1,time:1000});
                            }
                      });
                    }
                );
            }


            /*
             * Notifications
             */
            function notify(from, align, icon, type, animIn, animOut){
                $.growl({
                    icon: icon,
                    title: ' Bootstrap Growl ',
                    message: 'Turning standard Bootstrap alerts into awesome notifications',
                    url: ''
                },{
                        element: 'body',
                        type: type,
                        allow_dismiss: true,
                        placement: {
                                from: from,
                                align: align
                        },
                        offset: {
                            x: 20,
                            y: 85
                        },
                        spacing: 10,
                        z_index: 1031,
                        delay: 2500,
                        timer: 1000,
                        url_target: '_blank',
                        mouse_over: false,
                        animate: {
                                enter: animIn,
                                exit: animOut
                        },
                        icon_type: 'class',
                        template: '<div data-growl="container" class="alert" role="alert">' +
                                        '<button type="button" class="close" data-growl="dismiss">' +
                                            '<span aria-hidden="true">&times;</span>' +
                                            '<span class="sr-only">Close</span>' +
                                        '</button>' +
                                        '<span data-growl="icon"></span>' +
                                        '<span data-growl="title"></span>' +
                                        '<span data-growl="message"></span>' +
                                        '<a href="#" data-growl="url"></a>' +
                                    '</div>'
                });
            };
            
            $('.notifications > div > .btn').click(function(e){
                e.preventDefault();
                var nFrom = $(this).attr('data-from');
                var nAlign = $(this).attr('data-align');
                var nIcons = $(this).attr('data-icon');
                var nType = $(this).attr('data-type');
                var nAnimIn = $(this).attr('data-animation-in');
                var nAnimOut = $(this).attr('data-animation-out');
                
                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
            });


            /*
             * Dialogs
             */

            //Basic
            $('#sa-basic').click(function(){
                swal("Here's a message!");
            });

            //A title with a text under
            $('#sa-title').click(function(){
                swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis")
            });

            //Success Message
            $('#sa-success').click(function(){
                swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis", "success")
            });

            //Warning Message
            $('#sa-warning').click(function(){
                swal({   
                    title: "Are you sure?",   
                    text: "You will not be able to recover this imaginary file!",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "Yes, delete it!",   
                    closeOnConfirm: false 
                }, function(){   
                    swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
                });
            });
            
            //Parameter
            $('#sa-params').click(function(){
                swal({   
                    title: "Are you sure?",   
                    text: "You will not be able to recover this imaginary file!",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "Yes, delete it!",   
                    cancelButtonText: "No, cancel plx!",   
                    closeOnConfirm: false,   
                    closeOnCancel: false 
                }, function(isConfirm){   
                    if (isConfirm) {     
                        swal("Deleted!", "Your imaginary file has been deleted.", "success");   
                    } else {     
                        swal("Cancelled", "Your imaginary file is safe :)", "error");   
                    } 
                });
            });

            //Custom Image
            $('#sa-image').click(function(){
                swal({   
                    title: "Sweet!",   
                    text: "Here's a custom image.",   
                    imageUrl: "img/thumbs-up.png" 
                });
            });

            //Auto Close Timer
            $('#sa-close').click(function(){
                 swal({   
                    title: "Auto close alert!",   
                    text: "I will close in 2 seconds.",   
                    timer: 2000,   
                    showConfirmButton: false 
                });
            });

        </script>


@endsection