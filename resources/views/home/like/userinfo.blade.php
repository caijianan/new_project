@extends('home.layout.userinfo')
@section('userinfo')
	<div class="main-content"> 
	      <div class="content-header"> 
	       <h2>个人中心</h2> 
	      </div> 
	      <div class="content-inner profile-index"> 
	       <div class="account-status clearfix"> 
	        <div class="clearfix"> 
	         <div class="col-left"> 
	          <div class="avatar"> 
	           <img src="/user_pic/sm_{{$info['uface']}}">
	          </div> 
	          <div class="safety-level-wrapper"> 
	           <h5>{{$info['uname']}}</h5>
	           <p> <span class="text-gray">性别：</span> {{$info['sex']==1? '男':'女'}} </p> 
	           <p> <span class="text-gray">注册商户：</span> <a href="{{url('home/audit')}}"> 点击注册 </a> </p>
	           <p> <span class="text-gray">修改信息：</span> <a href='{{url("home/userinfo/".$info['id']."/edit")}}'> 点击修改 </a> </p>  
	          </div> 
	         </div> 
	        </div>  
	       </div>  
	      </div> 
	     </div>
@endsection