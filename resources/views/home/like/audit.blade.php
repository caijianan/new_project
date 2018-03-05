@extends('home.layout.userinfo')
@section('userinfo')
<div class="main-content"> 
        <div class="content-header"> 
         <h2>注册商户</h2> 
        </div> 
        <div class="content-inner profile-changepwd"> 
         <form class="form-horizontal" method="post"  action="{{url('home/audit')}}">     
         {{csrf_field()}}     
           <div class="control-group clear-fix"> 
            <label class="control-label" for=""><span class="required">*</span>公司名</label> 
            <div class="controls"> 
             <input name="ap_name" id="sf_guard_user_old_pwd" type="text" required > 
             <p class="help-block">(请输入注册的公司名)</p> 
            </div>
            <!--end input--> 
           </div>
           <!--end clearfix--> 
           <div class="control-group"> 
            <label class="control-label" for=""><span class="required">*</span>商铺名</label> 
            <div class="controls"> 
             <input name="s_name" id="sf_guard_user_new_pwd" type="text" required > 
             <p class="help-block">（请输入商铺名）</p> 
            </div>
            <!--end input--> 
           </div>
           <!--end clearfix--> 
           <div class="control-group clear-fix"> 
            <label class="control-label" for=""><span class="required">*</span>法人</label> 
            <div class="controls"> 
             <input name="ap_addr" id="sf_guard_user_repeat_pwd" type="text" required> 
             <p class="help-block">(请再输入法人名称)</p> 
            </div>
            <!--end input--> 
           </div>
           <div class="control-group clear-fix"> 
            <label class="control-label" for=""><span class="required">*</span>运营地址</label> 
            <div class="controls"> 
             <input name="ap_person" id="sf_guard_user_repeat_pwd" type="text" required> 
             <p class="help-block">(请再输入运营地址)</p> 
            </div>
            <!--end input--> 
           </div>
           <div class="control-group clear-fix"> 
            <label class="control-label" for=""><span class="required">*</span>许可证号</label> 
            <div class="controls"> 
             <input name="ap_num" id="sf_guard_user_repeat_pwd" type="number" required> 
             <p class="help-block">(请再输入许可证号)</p> 
            </div>
            <!--end input--> 
           </div>
           <div class="control-group clear-fix"> 
            <label class="control-label" for=""><span class="required">*</span>运营范围</label> 
            <div class="controls"> 
             方圆三~五公里&nbsp;<input type ="radio" name="ap_range" value="1" required>&nbsp;&nbsp;&nbsp;&nbsp;方圆五~十公里&nbsp;<input type ="radio" name="ap_range" value="2" required>&nbsp;&nbsp;&nbsp;&nbsp;本县市&nbsp;<input type ="radio" name="ap_range" value="3" required>&nbsp;&nbsp;&nbsp;&nbsp; 
             <p class="help-block">(请选择运营范围)</p> 
            </div>
            <!--end input--> 
           </div>
           <div class="control-group clear-fix"> 
            <label class="control-label" for=""><span class="required">*</span>许可证图片</label> 
            <div class="controls"> 
             <input name="ap_img" id="sf_guard_user_repeat_pwd" type="file" required> 
             <p class="help-block">(请选择图片)</p> 
            </div>
            <!--end input--> 
           </div>
           <!--end clearfix--> 
           <div class="form-actions"> 
            <input type="submit" class="btn btn-yellow" value="提交更改">
           </div> 
       
         </form> 
           <script type="text/javascript">
                @if(session('error'))
                    layer.alert("{{ session('error') }}", {
                    icon: 2,
                })  
                @endif
                @if(session('success'))
                    layer.alert("{{ session('success') }}", {
                    icon: 1,
                })   
                @endif
          </script>

        </div> 
       </div>

@endsection