@extends('admin.layout.index')
@section('content')
<form action="" method="post" name="myform">
    {{ csrf_field() }}
    {{ method_field('delete') }}
</form>
<section id="content">
<div class="container">

    <!-- <div class="block-header">
        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">表</font></font></h2>
    </div> -->
    <div class="card">
        <div class="card-header">
            <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">店铺分类管理</font></font><small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类页面</font></font></small></h2>
            <br>
            <div class="row">
                <div class="col-sm-6">
               <!--  <div class="input-group fg-float">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="fg-line">
                        <input type="text" class="form-control">
                        <label class="fg-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜获用户</font></font></label> 
                    </div>


                </div> -->
                <form action="{{ url('admin/shopcate') }}">
                    <b>类名：</b><input type="text" name="st_name" style="width: 25%"> &nbsp; &nbsp;
                    <input type="submit" calss='btn' value="搜索">
                </form>
                </div>
                <!--<div class="col-sm-1">
                     <select name="" id="" class="form-control">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>                  
                </div>-->   
           </div>

            
        <div class="table-responsive">
            <table class="table table-hover">
                <h3>
                @if (session('msg'))
                    <script>
                        alert("{{ session('msg') }}");
                    </script>
                 @endif
                 </h3>
                <thead>
                    <tr>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>#</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>用户名</h4></font></font>
                        </th>

                    </tr>
                </thead>

                <tbody>
                
                    @foreach ($res as $v)
                       <tr>
                            <td>
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->id }}</font></font>
                            </td>
                            <td>
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->st_name }}</font></font>
                            </td>
                            <td>
                            <font style="vertical-align: inherit;"><a href='{{ url("admin/shopcate/{$v->id}/edit") }}' class="btn btn-info"><font style="vertical-align: inherit;">修改</font></a>
                            </font>&nbsp;
                            <span style="vertical-align: inherit;"><a href="javascript:void(0)" onclick="doDel({{ $v->id }}, this)" class="btn btn-danger">
                                <font style="vertical-align: inherit;">删除</font></a>
                            </span>
                            </td>

                        </tr>     
                    @endforeach                    
                </tbody>
            </table>
            {!! $res->appends(['st_name' => $st_name])->render() !!}
            <nav>
<!--   <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul> -->
</nav>

        </div>
    </div>

        <script src="/d/js/jquery-1.8.3.min.js"></script>
        <script src="/layer/layer/layer.js"></script>
        <script type="text/javascript">
        function doDel(id, obj)
        {
            // alert(111);
            layer.confirm('你确定要删除吗？', {
                btn: ['确定','取消']
            }, function(){
                $.post('{{url("admin/shopcate/")}}/'+id, {'_token':'{{csrf_token()}}', '_method':'delete'},function(data){
                    if(data == 1){
                        layer.msg('删除成功！');
                        $(obj).parents('tr').remove();
                    }else{
                        layer.msg('删除失败！');
                    }
                });
            });
            // var form  = document.myform;
            // form.action = '{{ url("admin/shopcate") }}/'+id;
            // alert(form.action);
            // form.submit();
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