@extends('admin.layout.index')
@section('content')

<section id="content">
<div class="container">
    <div class="block-header">
        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理员列表</font></font></h2>
    </div>
    <div class="card">
        <div class="card-header">
                    @if (session('msg')) 
                    <div class="alert alert-success"> 
                        {{ session('msg') }} 
                    </div> 
                    @endif
        </div>
        <br>
        <form action='{{url("admin/audit")}}' method="get">
            <div class="row">
                <div class="col-sm-2">
                <div class="input-group fg-float">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="fg-line">
                        
                        <input type="text" name="auname" class="form-control">
                        <label class="fg-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜获用户</font></font></label>    
                    </div>

                </div>
                </div>
                <div class="col-sm-2">

                    <select name="ausex" id="" class="form-control">
                        <option value="">请选择性别</option>
                        <option value="1">男</option>
                        <option value="2">女</option>
                    </select>                    
                </div>
                <div class="col-sm-2">
                    

                    <input type="submit" value="搜索">

                </div>
            </div>
        </form>
            <br><br><br>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>#</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>用户名</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>头像</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>管理员性别</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>最后登陆时间</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>最近登陆IP</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>修改&nbsp;  / &nbsp;删除</h4></font></font>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $v)
                    <tr>
                        <td>

                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v->id}}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v->auname}}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><img src="/admin_pic/sm_{{$v->auface}}"></font></font>
                        </td>
                         <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                {{$v->ausex==1?'男':'女'}}
                            </font></font>
                        </td>
                        
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{date('Y年m月d日 h时i分',$v->ltime)}}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v->lip}}</font></font>
                        </td>
                        <td>
                        <font style="vertical-align: inherit;"><a href='{{ url("admin/administrator/$v->id/edit")}}' class="btn btn-info">
                            <font style="vertical-align: inherit;">修改</font></a>
                        </font>&nbsp;
                        <font style="vertical-align: inherit;"><a href="javascript:void(0)" onclick="doDel({{$v->id}},this)" class="btn btn-danger">
                            <font style="vertical-align: inherit;">删除</font></a>
                        </font>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <nav>


{!! $data->render()!!}
</nav>

        </div>
    </div>


        
        <script type="text/javascript">

        // 用户删除

        function doDel(id,_this)
        {

            layer.confirm('你确定要删除吗', {
                btn: ['确定','取消'] //按钮
                }, function(){
                    $.post('{{ url("/admin/administrator") }}/'+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
                        if(data == 1){
                             layer.msg('删除成功', {icon: 1,time: 1000});
                              $(_this).parents("tr").hide();
                           
                           

                            // alert(data);
                        }else{
                            // alert(222); 
                             layer.msg('删除不成功', {icon: 1,time: 1000});
                        }
                    });
                    //20s后自动关闭
            }, function(){
                layer.msg('马上关闭', {
                time: 1000, //20s后自动关闭
                btn: ['明白了', '知道了']
                });
            });

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