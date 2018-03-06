<!-- error_reporting(3); -->
@extends('shop.layout.index')
@section('content')
<form action="" method="post" name="myform">
    {{ csrf_field() }}
    {{ method_field('delete') }}
</form>
<section id="content">
<div class="container">
    <div class="block-header">
        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">用户评价</font></font></h2>
    </div>
    <div class="card">
        <div class="card-header">
            <br>
            <form action="{{ url('shop/fcomment') }}" method="get">
                <div class="row">

                <div class="col-sm-2">
                   <select name="f_satis" id="" class="form-control">
                        <option value="">请选择满意度</option>
                        <option value="6">满意</option>
                        <option value="4">不满意</option>
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
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>用户</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>商品</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>商品满意度</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>评论时间</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>评论内容</h4></font></font>
                        </th>
                         
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>查看评论</h4></font></font>
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($cmt as $k=>$v)
                    <tr>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->id }}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font>{{ $uarr[$k]->uname}}</font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font>{{ $farr[$k]->f_name }}</font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{($v->f_satis>6)?'满意':'不满意'}} </font></font>
                        </td>
                        <td>
                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ date('Y年m月d日 H:i',$v->f_ctime)}} </font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->f_content }}</font></font>
                        </td>
                    
                        <td>
                            <font style="vertical-align: inherit;"><a href='{{ url("shop/fcomment/$v->id") }}' class="btn btn-info"><font style="vertical-align: inherit;">查看</font></a>
                        </font>&nbsp;
                            
                        </td>


                    </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
            
<nav>
<div align="center">{!! $cmt->appends($where)->render() !!}</div>
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
           
        function doDel(uid, _this){
                // alert(11111);
                layer.confirm('你确定要删除？', {
                      btn: ['确定','取消'] 
                    }, function(){
                      $.post('{{url("admin/user")}}/'+uid,{'_token':'{{csrf_token()}}','_method':'delete'},function(data){
                            if(data == 1){
                                layer.msg('成功',{icon: 1,time:1000});
                                $(this).parents('tr').remove();
                            }else{
                                layer.msg('失败');
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