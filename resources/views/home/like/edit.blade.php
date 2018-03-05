@extends('home.layout.userinfo')
@section('userinfo')
<div class="main-content"> 
        <div class="content-header"> 
         <h2>修改个人信息</h2> 
        </div> 
        <div class="content-inner profile-changepwd"> 
         <form class="form-horizontal" method="post"  action="{{url('home/userinfo/'.$id1)}}" enctype="multipart/form-data"> 
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token()}}">
          
           <div class="control-group clear-fix"> 
           
            
            <label class="control-label" for=""><span class="required">*</span>用户名</label> 
            <div class="controls"> 
             <input name="uname" id="sf_guard_user_old_pwd" type="text"> 
             <p class="help-block">(请输入现在正在使用的用户名)</p> 
            </div>
            <!--end input--> 
           </div>
           <!--end clearfix--> 
           <div class="control-group clear-fix"> 
            <label class="control-label" for=""><span class="required">*</span>用户头像</label> 
            <div class="controls"> 
             <input name="uface" id="sf_guard_user_repeat_pwd" type="file"> 
             <p class="help-block">(请选择头像)</p> 
            </div>
            <!--end input--> 
           </div>
           <div class="control-group clear-fix"> 
            <label class="control-label" for=""><span class="required">*</span>用户性别</label> 
            <div class="controls"> 
             男<input name="sex" type="radio" value="1">
             女 <input type="radio" name="sex" value="2">	 
             <p class="help-block">(请选择性别)</p> 
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