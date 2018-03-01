@extends('home.layout.index')
@section('content')
<div class="container"> 
    <nav class="breadcrumb" data-geohash="wtw3equp"> 
     <a href="/place/-615736186413943440">登科保洁(长寿路店)</a> 
     <a class="breadcrumb-switch" href="city.html">[切换地址]</a> 
     <span class="breadcrumb-divider">/</span> 饿单中心 
    </nav> 
    <div class="wash-paper clearfix" id="profile"> 
     <nav class="profile-nav"> 
      <ul class="nav nav-list"> 
       <li> <a href="{{url('home/userinfo')}}"> <i class="icon-user"></i> 个人中心 </a> </li> 
       <li class="divider"></li> 
       <li class="nav-header">饿单中心</li> 
       <li > <a href="member_order.html"> <i class="icon-calendar icon-white"></i> 订单列表 </a> </li>  
       <li class="divider"></li> 
       <li class="nav-header">我的收藏</li> 
       <li> <a href="member_collect_shop.html"> <i class="icon-heart"></i> 我收藏的餐厅 </a> </li> 
       <li> <a href="member_collect_food.html"> <i class="icon-star"></i> 我收藏的美食 </a> </li> 
       <li class="divider"></li> 
       <li class="nav-header">账户相关</li> 
       <li> <a href="{{url('home/addr')}}"> <i class="icon-list"></i> 我的地址 </a> </li> 
       <li class="divider"></li> 
       <li class="nav-header">安全中心</li> 
       <li> <a href="{{url('home/pwd')}}"> <i class="icon-cog"></i> 修改密码 </a> </li> 
       <li class="divider"></li> 
      </ul> 
     </nav> 
    @section('userinfo') 

   	@show
    </div> 
   </div>
@endsection