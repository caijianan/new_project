@extends('home.layout.userinfo')
@section('userinfo')
<style type="text/css">
	.high{ color: red; }
	.msg{ font-size: 13px; }
    .onError{ color: red; }
    .onSuccess{ color: green;}
</style>
<div class="main-content"> 
      <div class="content-header"> 
       <h2>管理我的地址</h2> 
      </div> 
      <div class="content-inner profile-address"> 
       <h3>已经保存的送餐地址</h3> 
       <table class="address-table table table-bordered"> 
        <thead> 
         <tr> 
          <th class="col-address">地址</th> 
          <th class="col-phone">手机号码</th> 
          <th class="col-phone-bk">备选电话</th> 
          <th class="col-action">操作</th> 
         </tr> 
        </thead> 
        <tbody>
        @foreach ($data as $v)
         <tr class="stable_address"> 
          <td class="col-address">{{$v->address}}</td> 
          <td class="col-phone">{{$v->tel}}</td> 
          <td class="col-phone-bk">{{$v->rtel}}</td> 
          <td class="col-action"> <span ><a onclick="doChange({{$v->id}},this)">{{$v->default == 1 ? '设为常用' : '常用地址'}}</a></span> | <a class="gray_link" onclick="doDel({{$v->id}},this)">删除</a> </td> 
         </tr> 
        @endforeach 
        </tbody> 
       </table> 

       <h3>新增/编辑送餐地址</h3> 
       <form id="add_address_form" class="ui-form-horizontal" name="addressform" method="post" action="{{url('home/addr')}}" > 
        {{csrf_field()}}
        <label for="address_address"><span class="required-mark">*</span>详细地址</label> 
        <input type="text" name="address" id="address" class="required"> 
        <p>（请填写真实详细的送餐地址）</p> 
        <label for="address_phone"><span class="required-mark">*</span>手机号码</label> 
        <input type="text" name="tel" id="tel" class="required"> 
        <p>（请保证外卖员能打通该号码）</p> 
        <label for="address_phone_bk">备用电话</label> 
        <input type="text" name="rtel" id="rtel" class="required"> 
        <p>（备用电话方便外卖员能联系到您）</p> 
        <div class="ui-form-footer"> 
         <button id="add_address_submit" class="btn btn-yellow">保存</button> 
        </div> 
       </form> 
      </div> 
     </div>
	<script type="text/javascript">
		
                @if(session('error'))
                    alert("{{ session('error') }}")    
                @endif
                @if(session('success'))
                    alert("{{ session('success') }}")    
                @endif

    function doDel(id,_this)
        {

            layer.confirm('你确定要删除吗', {
                btn: ['确定','取消'] //按钮
                }, function(){
                    $.post('{{ url("/home/addr") }}/'+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
                      
                        if(data == 1){
                             layer.msg('删除成功', {icon: 1,time: 1000});
                              $(_this).parents("tr").hide();
                            // alert(data);
                        }else{
                            // alert(222); 
                             layer.msg('删除不成功', {icon: 1,time: 1000});
                        }
                        // alert(data);
                    });
                    //20s后自动关闭
            }, function(){
                layer.msg('马上关闭', {
                time: 1000, //20s后自动关闭
                btn: ['明白了', '知道了']
                });
            });


        }

        function doChange(id,_this)
        {
        	var ht = $(_this).html();
            layer.confirm('你确定要修改吗', {
                btn: ['确定','取消'] //按钮
                }, function(){
                	if(ht == '设为常用'){
	                    $.post('{{ url("/home/addr") }}/'+id,{'_method':'put','_token':'{{csrf_token()}}','defalutT':ht},function(data){
	                        if(data == 1){
	                             layer.msg('修改成功', {icon: 1,time: 1000});
	                              $(_this).html('常用地址');
	                            // alert(data);
	                        }else{
	                            // alert(222); 
	                             layer.msg('修改失败,只能有一个常用地址', {icon: 1,time: 1000});
	                        }
	                    });
                	}else{
                		$.post('{{ url("/home/addr") }}/'+id,{'_method':'put','_token':'{{csrf_token()}}','defalutT':ht},function(data){
	                        if(data == 1){
	                             layer.msg('修改成功', {icon: 1,time: 1000});
	                              $(_this).html('设为常用');
	                            // alert(data);
	                        }else{
	                            // alert(222); 
	                             layer.msg('修改失败,只能有一个常用地址', {icon: 1,time: 1000});
	                        }
	                    });
                	}
                    //20s后自动关闭
            }, function(){
                layer.msg('马上关闭', {
                time: 1000, //20s后自动关闭
                btn: ['明白了', '知道了']
                });
            });


        }
	</script>
@endsection