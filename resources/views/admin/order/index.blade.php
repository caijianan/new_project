@extends('admin.layout.index')
@section('content')
<form action="" method="post" name="myform">
    {{ csrf_field() }}
    {{ method_field('delete') }}
</form>
<div class="container">
    <div class="card">
        <div class="card-header">
            <br>
            <div class="row">
                <div class="col-sm-2">
                <div class="input-group fg-float">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="fg-line">
                        <input type="text" class="form-control">
                        <label class="fg-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号</font></font></label> 
                    </div>

                </div>
                </div>
                <div class="col-sm-1">
                    <select name="" id="" class="form-control">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>                    
                </div>
            </div>
            <br><br><br>

<table class="table table-inner table-vmiddle">
    <thead>
        <tr>
            <th>订 单 号</th>
            <th>下 单 时 间</th>
            <th>支 付 方 式</th>
            <th>订 单 状 态</th>
            <th>总 价</th>
            <th>修改 &nbsp;&nbsp; / &nbsp;&nbsp; 详情 &nbsp;&nbsp; / &nbsp;&nbsp;删除</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $v)
        <tr id="remove">
            <td class="f-500 c-cyan">{{ $v->id }}</td>
            <td>{{ date('Y-m-d H:i:s',$v->o_ctime) }}</td>
            <td>{{ $v->o_pay == 1 ? '线 上 支 付' : '线 下 支 付' }}</td>
            <td>{{ $v->o_status == 1 ? '完 &nbsp;&nbsp;&nbsp;成' : '未 完 成' }}</td>
            <td class="f-500 c-cyan">¥&nbsp;{{ $v->o_sum }}</td>
            <td>
                <font style="vertical-align: inherit;"><a href='{{ url("admin/order/$v->id/edit") }}' class="btn btn-info"><font style="vertical-align: inherit;">修改</font></a>
            </font>&nbsp;
            <font style="vertical-align: inherit;"><a href="{{ url('admin/order/1/') }}" class="btn btn-success">
                <font style="vertical-align: inherit;">详情</font></a></font> &nbsp;
            <font style="vertical-align: inherit;"><a href="javascript:void(0)" onclick="doDel({{ $v->id }})" class="btn btn-danger">
                <font style="vertical-align: inherit;">删除</font></a></font>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
<br>
<center>
<nav>
  <ul class="pagination">
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
  </ul>
</nav>
</center>
<div id="recent-items-chart" class="flot-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="761" height="150" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 761px; height: 150px;"></canvas><canvas class="flot-overlay" width="761" height="150" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 761px; height: 150px;"></canvas></div>
</div>


        </div>
    </div>






<script type="text/javascript">


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
<script>
    function doDel(id)
    {
       layer.confirm('您确定要删除吗？', {
          btn: ['确定','取消'] //按钮
        }, function(){
          $.post('{{ url("admin/order") }}/'+id,{'_token':'{{ csrf_token() }}','_method':'delete' },function(data){
            if(data > 0){
                layer.msg('删 除 成 功');
                $('#remove').remove();
            }else{
                layer.msg('删 除 失 败');
            }
          });
        });

    }
</script>
