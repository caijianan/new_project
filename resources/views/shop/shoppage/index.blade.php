@extends('shop.layout.index')
@section('content')
<form action="" method="post" name="myform">
    {{ csrf_field() }}
    {{ method_field('delete') }}
</form>
<section id="content">
<div class="container">
    <div class="card">
        <div class="card-header">
            <!-- <br> -->
            <div class="row">
                <!-- <div class="col-sm-2"> -->
                <!-- <div class="input-group fg-float">
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
                </div> -->
                <div class="lv-header-alt clearfix m-b-5">
                            <h2 class="lvh-label hidden-xs"><font style="vertical-align: inherit;"><p class="c-black f-500 m-b-5"><h4>待处理订单</h4></font></h2>
                </div>
            <!-- </div> -->
            <!-- <br> -->

<table class="table table-inner table-vmiddle">
    <thead>
        <tr>
            <th>订 单 号</th>
            <th>下 单 时 间</th>
            <th>支 付 方 式</th>
            <th>订 单 状 态</th>
            <th>总 价</th>
            <th>操 作</th>
        </tr>
    </thead>
    <tbody>
        @foreach($res as $k=>$v)
        @if ($v->o_status === 1)
        <tr id="remove">
            <td class="f-500 c-cyan">{{ $v->id }}</td>
            <td>{{ date('Y-m-d H:i:s',$v->o_ctime) }}</td>
            <td>{{ $v->o_pay == 1 ? '线 上 支 付' : '线 下 支 付' }}</td>
            <!-- <td>{{ $v->o_status == 1 ? '完 &nbsp;&nbsp;&nbsp;成' : '未 完 成' }}</td> -->
            <td id="status{{ $v->id }}">
                @if ($v->o_status === 1)
                     待处理
                @elseif ($v->o_status === 2)
                     已接单
                @else
                     已拒单
                @endif
            </td>
            <td class="f-500 c-cyan">¥&nbsp;{{ $v->o_sum }}</td>
            <td>
                     <font style="vertical-align: inherit;"><button onclick="jiedan({{ $v->id }},this)" class="btn btn btn-success">接单</button> 
                    </font>&nbsp;
                    <font style="vertical-align: inherit;"><button onclick="judan({{ $v->id }},this)" class="btn btn btn-danger">拒单</button> 
                    </font>&nbsp;
               
                 <font style="vertical-align: inherit;"><a href='{{ url("shop/shoppage/$v->id/info") }}' class="btn btn-info"> 
                <font style="vertical-align: inherit;">详情</font></a></font>
            
            </td>
        </tr>
          @endif
        @endforeach
    </tbody>
</table>
        <center>{!! $res->render() !!}</center>
</div>

<!-- <br>
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
</center> -->
<div id="recent-items-chart" class="flot-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="761" height="150" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 761px; height: 150px;"></canvas><canvas class="flot-overlay" width="761" height="150" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 761px; height: 150px;"></canvas></div>
</div>


        </div>
    </div>


<script type="text/javascript">
    function jiedan(id,_this)
    {
       layer.confirm('您确定要接单吗？', {
          btn: ['确定','取消'] //按钮
        }, function(){
          $.get('{{ url("shop/shoppage/dingdan") }}/'+id,{'o_status':'2'},function(data){
            // console.log(data);
            if(data > 0){
                layer.msg('成功', {icon: 1,time: 1000});
                $(_this).parents('tr').hide();
            }else{
                layer.msg('接单失败',{icon:2,time:1000});
            }
          });
        });
       $('#layui-layer1').css('top','150px');
    }

    function judan(id,_this)
    {
    // alert(id);
       layer.confirm('您确定要拒单吗？', {
          btn: ['确定','取消'] //按钮
        }, function(){
           $.get('{{ url("shop/shoppage/dingdan") }}/'+id,{'o_status':'3'},function(data){
            if(data > 0){
                layer.msg('成功', {icon: 1,time: 1000});
                $(_this).parents('tr').hide();
            }else{
                layer.msg('接单失败',{icon:2,time:1000});
            }
          });
        });
       $('#layui-layer1').css('top','150px');
    }

// ================接单==========
    // function jd(id)
    //     {
    //         $('#jiedan'+id).attr('disabled',true);  
    //         $('#judan'+id).attr('disabled',true);  
    //         // alert('111111');
    //         // alert(status);
    //         // alert('{{ url("shop/shoppage/dingdan") }}/'+id);
    //         $.get('{{ url("shop/shoppage/dingdan") }}/'+id,{'o_status':'2'},function(data){
    //             if(data > 0){
    //                 // $(this).css({disabled:"disabled"});
                    
    //                 $("#status"+id).html('已接单');

    //             }
    //         });
    //     }

//=================拒单===========       
        // function jud(id)
        // {
        //     $('#judan'+id).attr('disabled',true);  
        //     $('#jiedan'+id).attr('disabled',true);
        //     // alert('111111');
        //     // alert(status);
        //     // alert('{{ url("shop/shoppage/dingdan") }}/'+id);
        //     $.get('{{ url("shop/shoppage/dingdan") }}/'+id,{'o_status':'3'},function(data){
        //         if(data > 0){
        //             // $(this).css({disabled:"disabled"});
                    
        //             $("#status"+id).html('已拒单');
        //         }
        //     });
        // }
// ==============================


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
    
</script>
