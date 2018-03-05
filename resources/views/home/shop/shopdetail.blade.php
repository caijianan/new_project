@extends('home.layout.shop')
@section('content')
  <div class="restaurant-header"> 
   <div class="container rst_header_con"> 
    <article class="rst-header-main rst-header-toggle rst_info_header" itemscope="" itemtype="http://schema.org/Restaurant"> 
     <header class="rst-header-info group"> 
      <a class="rst-logo" href="/hp-jwyb01" itemprop="url"> <img class="rst-logo-img" srcset="/shop_pic/{{ $shop->s_page }}" alt="{{ $shop->s_name }}" itemprop="logo" /> <i class="icon-rst-badge v v-person" title="该商家已通过个人身份认证"></i> </a> 
      <div class="rst-basic-info"> 
       <div class="rst-name-wrapper caret"> 
        <a class="rst-name text-overflow" href="/hp-jwyb01" data-toggle="bs-tooltip" title="绝味鸭脖" itemprop="name">{{ $shop->s_name }}</a> 
       </div> 
       <div class="rst-misc"> 
        <a id="rst_rating" class="rst-rating" href="/hp-jwyb01/rating"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i></span> 3.8 </a> 
        <span class="rst-status">{{ $shop->s_status == 1 ? '营业中' :  '休息中'}}</span> 
       </div> 
      </div> 
     </header> 
     <div class="rst-header-detail rst-header-dropdown"> 
      <section class="rst-header-rating group"> 
       <div class="rating-point header" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating"> 
        <a class="point"><span itemprop="ratingValue">3.8</span></a> 
        <a class="comment" href="/hp-jwyb01/rating"><span itemprop="reviewCount">8</span>人评价</a> 
       </div> 
       <ul class="rating-diagram header"> 
        <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i></span> <span class="bar" style="width: 41.8px;"></span> 38% </li> 
        <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 0px;"></span> 0% </li> 
        <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 69.3px;"></span> 63% </li> 
        <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 0px;"></span> 0% </li> 
        <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 0px;"></span> 0% </li> 
       </ul> 
      </section> 
      <section class="rst-header-intro">
       {{ $shop->s_name }}
      </section> 
      <ul class="rst-header-list"> 
       <li><span class="item">是否营业 : </span>{{ $shop->s_status == 1 ? '营业中' :  '休息中'}}</li> 
       <li><span class="item">地址：</span><span itemprop="address">{{ $shop->s_addr }}</span></li> 
      </ul> 
     </div> 
    </article> 
    <nav class="rst-header-nav"> 
     <a class="rst-header-nav-item ui_active" href="/hp-jwyb01">菜单</a> 
     <div class="inline-block relative"> 
     </div> 
     <a class="rst-header-nav-item" href='{{ url("home/comment/$shop->id")}}'>评价</a> 
    </nav> 
    <ul class="rst-header-aside group rst_info_panel"> 
     <li class="rst-data-block rst-header-toggle rst_head_distance"> 
      <div class="rst-data caret"> 
       <b class="rst-data-info value rst_distance"></b> 
       <span class="rst-data-info unit">餐厅距离/米</span> 
      </div> 
      <div class="rst-header-dropdown"> 
       <div class="rst-header-map rst-data-detail"> 
        <img class="rst_map rst-map-img" alt="餐厅距离示意图" /> 
       </div> 
      </div> </li> 
     <li class="rst-data-block"> 
      <div class="rst-data"> 
       <b class="rst-data-info value rst_deliver_amount"></b> 
       <span class="rst-data-info unit">起送价/元</span> 
      </div> </li> 
    </ul> 
    <div class="rst-fav-wrapper"> 
     <div onclick="dolike({{$shop->id}})" class="rst-block rst-fav"> 
      <i class="glyph">♥</i> 
      <span class="status" data-unfaved="收藏 餐厅" data-faved="已收藏">收藏 餐厅</span> 
     </div> 
    </div> 
   </div> 
  </div> 
<div class="container"> 
   <article id="rst_menus" class="restaurant-main">  
    <div id="cate_view" class="rst-block">
     <section id="cate_view_887211"> 
      <h2 class="menu_title rst-menu-title" title="1元类">1元类</h2>
      <ul class="rst-menu-list">
        @foreach($food as $v)
       <li id="food_view_10766007" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="冬瓜">{{ $v->f_name }}</a></p>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          {{ $v->f_price }}.00
         </div>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <button onclick="docar({{ $v->id }})">点击购买</button>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(15)</span>
         <br>
         <span class="rst-d-sales">月售155份</span>
        </div>
        </li>
        @endforeach
        <br>
        <li style="padding-left: 700px "><button class="ui-btn ui_submit btn-cart-checkout" onclick="redirect()">立即下单</button></li>
      </ul>
     </section>
    </div> 
   </article> 
   <aside id="rst_aside" class="restaurant-aside"> 
    <section class="rst-block restaurant-board"> 
     <h3 class="rst-aside-title">餐厅公告</h3> 
     <p class="rst-deliver-detail"> <i class="icon-rst-deliver"></i>起送价<span class="rst_deliver_amount"></span>元。 </p> 
     <ul class="rst-badge-list"> 
      <li class="rst-badge-item"> <i class="icon-rst-badge v v-person"></i> 该商家已通过个人身份认证 </li> 
      <li class="rst-badge-item"><i class="icon-rst-badge online-payment"></i>该餐厅支持在线支付</li> 
      <li class="rst-badge-item"><i class="icon-rst-badge new-user-discount"></i>饿了么新用户首次订餐，可立减15元。(不与其他活动同享)</li> 
      <li class="rst-badge-item"><i class="icon-rst-badge extra-discount"></i>在线支付满20减10</li> 
     </ul> 
    </section> 
    <section id="favor_food" class="rst-block"></section> 
    <section id="rec_food" class="rst-block hide"> 
     <h3 class="rst-aside-title">本周热卖</h3> 
     <ul id="weekly_ranking" class="rst-aside-menu-list"></ul> 
    </section> 
    <section class="rst-block restaurant-board fixed rst_fix_panel"> 
     <h3 class="rst-aside-title">餐厅公告</h3> 
     <p class="rst-deliver-detail"> <i class="icon-rst-deliver"></i>起送价<span class="rst_deliver_amount"></span>元。 </p> 
    </section> 
   </aside> 
   <div id="rst_cart" class="restaurant-cart"></div> 

  </div>
  <script  src="/h/jquery-3.3.1.min.js"></script>
  <script  src="/layer/layer.js"></script>
  <script>
    function docar(id)
    {
      $.get('{{ url("home/car") }}/'+id,{'id':id},function(data){
        if(data>0){
          layer.msg('添加成功');
        }else{
          layer.msg('添加失败');
        }
      });
    }
    function redirect()
    {
      window.location.href="{{ url('/home/showcar') }}" ;
    }

    function dolike(id)
    {
      $.get('{{ url("home/addlike") }}/'+id,function(data){
        if(data > 0){
          layer.msg('收藏成功');
        }else{
          layer.msg('收藏失败');
        }
      });
    }
  </script>      
@endsection