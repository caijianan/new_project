@extends('home.layout.userinfo')
@section('userinfo')
    <div class="main-content"> 
        <div class="content-header"> 
         <h2>修改密码</h2> 
        </div> 
        <div class="content-inner profile-changepwd"> 
         <form class="form-horizontal" method="post" id="changepwd_form"> 
          <fieldset> 
           <div class="control-group clear-fix"> 
            <label class="control-label" for=""><span class="required">*</span>原密码</label> 
            <div class="controls"> 
             <input name="user[old_password]" id="sf_guard_user_old_pwd" type="password"> 
             <p class="help-block">(请输入现在正在使用的密码)</p> 
            </div>
            <!--end input--> 
           </div>
           <!--end clearfix--> 
           <div class="control-group"> 
            <label class="control-label" for=""><span class="required">*</span>新密码</label> 
            <div class="controls"> 
             <input name="user[new_password]" id="sf_guard_user_new_pwd" type="password"> 
             <p class="help-block">（请输入新密码）</p> 
            </div>
            <!--end input--> 
           </div>
           <!--end clearfix--> 
           <div class="control-group clear-fix"> 
            <label class="control-label" for=""><span class="required">*</span>重复新密码</label> 
            <div class="controls"> 
             <input name="user[repeat_new_password]" id="sf_guard_user_repeat_pwd" type="password"> 
             <p class="help-block">(请再输入一次新密码)</p> 
            </div>
            <!--end input--> 
           </div>
           <!--end clearfix--> 
           <div class="form-actions"> 
            <button type="button" class="btn btn-yellow" id="sf_guard_user_changepwd_submit">提交更改</button> 
           </div> 
          </fieldset> 
         </form> 
        </div> 
       </div>
@endsection
