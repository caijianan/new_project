@extends('home.layout.userinfo')
@section('userinfo')
<div class="main-content"> 
      <div class="content-header"> 
       <h2> 饿单列表 - 共张 </h2> 
       <button class="btn-who-get-dishes" id="shuiqunawaimai_open">谁去拿外卖</button> 
       <a class="tip-app-promotion" href="/mobile" target="_blank">随时关注饿单状态</a> 
       <a class="btn-faq" href="help.html" target="_blank"><span class="btn-faq-icon">?</span> 热门问题</a> 
      </div>
      <div class="content-inner"> 
       <div class="order-list"> 
        <span id="ref_time"></span>
         <div class="order-table-wrapper"> 
          <table class="order-table table table-striped"> 
           <thead> 
            <tr> 
             <th class="col-name">美食篮子</th> 
             <th class="col-price">单价</th> 
             <th class="col-price">评价</th> 
             <th class="col-quantity">数量</th> 
             <th class="col-sub-total">小计</th> 
            </tr> 
           </thead> 
           <tbody> 
           	@foreach($data as $k => $v)
            <tr 12266119358749105=""> 
             <td class="col-name"> <span>{{$finfo[$k]->f_name}}</span> </td> 
             <td class="col-price">{{$v->f_price}}</td>
             <td class="col-price"><a href='{{url("home/comment/show/$v->fid")}}'>点击评论</a></td>
             <td class="col-quantity">{{$v->oi_num}}</td> 
             <td class="col-sub-total">￥{{$v->f_price * $v->oi_num}}</td> 
            </tr>
            @endforeach  
           </tbody> 
          </table> 
          <table class="order-table total-table table table-striped"> 
           <tfoot> 
            <tr> 
             <td class="col-name">合计</td> 
             <td class="col-rating"></td> 
             <td class="col-quantity"></td> 
             <td class="col-sub-total relative">￥{{$add}}</td> 
            </tr> 
           </tfoot> 
          </table> 
         </div>
      </div>

@endsection