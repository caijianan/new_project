@extends('admin.layout.index')
@section('content')

<form action="" method="post" name="myform">
    {{ csrf_field() }}
    {{ method_field('delete') }}
</form>
<section id="content">
<div class="container">
    <div class="block-header">
        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">投诉列表</font></font></h2>
    </div>
    <div class="card">
        <div class="card-header">
        <form action="{{ url('admin/complain') }}" method="get">
            <div class="row">
                
                <div class="col-sm-2">
                <div class="input-group fg-float">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="fg-line">
                        <input type="text" class="form-control" name='sid'>
                        <label class="fg-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索商户 </font></font></label> 
                    </div>
                </div>
                </div>
                <div class="col-sm-2">
                <div class="input-group fg-float">
                    <div class="fg-line">
                        <input type="text" class="form-control" name='uid'>
                        <label class="fg-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索投诉人 </font></font></label> 
                    </div>
                </div>
                </div>
                <div class="col-sm-1">
                    <select name="perCount" class="form-control">
                        <option>5</option>
                        <option>10</option>
                        <option>20</option>
                    </select>                 
                </div>
                <div class="col-sm-1">
                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-search"></i></button>
                </div>
            </div>
        </form>
            <br>
            <a href="{{ url('admin/complain/create') }}" ><button class="btn btn-info">添加投诉</button></a>
            <br>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>ID</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>商户</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>投诉内容</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>投诉人</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>投诉时间</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>投诉类别</h4></font></font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>状态</h4></font></font>
                        </th>
                        <th class="text-center">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h4>操作</h4></font></font>
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($comp as $v)
                    <!-- 为tr的class添上id，为ajax删除做准备 -->
                    <tr class="comp{ $v->id }">
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->id }}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->sid }}</font></font>
                        </td>
                         <td width="100">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->content }}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->uid }}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ date('Y/m/d H:i:s', $v->time) }}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                           @if($v->cate == 1)
                            商家资质
                           @elseif($v->cate == 2)
                            商品价格
                           @elseif($v->cate == 3)
                            商家配送
                           @else
                            其他问题
                           @endif
                            </font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                           @if($v->status == 1)
                            未处理
                           @elseif($v->status == 2)
                            处理中
                           @else
                            处理完毕
                           @endif
                            </font></font>
                        </td>
                        <td class="text-center">
                            <font style="vertical-align: inherit;"><a href='{{ url("admin/complain/$v->id/edit") }}' class="btn btn-info"><font style="vertical-align: inherit;">修改</font></a>
                        </font>
                        <font style="vertical-align: inherit;"><a href="javascript:doDel({{ $v->id }})" onclick="" class="btn btn-danger">
                            <font style="vertical-align: inherit;">删除</font></a></font>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <nav>
  <ul class="pagination">
    <li>
      <a href="{{ $comp->previousPageUrl() }}" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li>
      <a href="{{ $comp->url(1) }}" aria-label="Previous">
        <span aria-hidden="true">首页</span>
      </a>
    </li>

    <li><a href="javascript:void(0)" onclick="goPage(this)">@if($currentPage <= 0){{ $currentPage = 1 }}@elseif(($currentPage+2) >= $totalPage && $totalPage >=3){{ $currentPage = $totalPage-2 }}@else{{ $currentPage }}@endif</a></li>
    @if($totalPage >= 2)
    <li><a href="javascript:void(0)" onclick="goPage(this)">{{ $currentPage+1 }}</a></li>
    @endif
    @if($totalPage >= 3)
    <li><a href="javascript:void(0)" onclick="goPage(this)">{{ $currentPage+2 }}</a></li>
    @endif
    <li>
      <a href="{{ $comp->url($comp->lastPage()) }}" aria-label="Next">
        <span aria-hidden="true">末页</span>
      </a>
    </li>
    <li>
      <a href="{{ $comp->nextPageUrl() }}" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

        </div>
    </div>
        <script type="text/javascript">
            @if (session('status'))
                alert("{{ session('status') }}");
            @endif

            function doDel(id)
            {
                if(confirm('确定删除吗？')) {
                    var form = document.myform;
                    form.action = '{{ url("/admin/complain") }}/'+id;
                    form.submit();
                }
            }

            // 跳转到点击的页数
            function goPage(p)
            {
                var url = "{{ url('/admin/complain?page=')}}"+p.innerHTML;
                window.location.href = url+{{  htmlspecialchars_decode($wString) }};
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