@extends('home.layout.shop')
@section('content')
<div class="container"> 
   <div class="restaurant-main"> 
    <div id="fixed_placeholder" class="rst-subnav-placeholder"> 
     <div id="sub_nav" class="rst-block rst-subnav-wrapper group"> 
      <a class="rst-subnav ui_active" href="/kxljmlt-pt/rating">全部评价</a> 
     </div> 
    </div> 
    <div id="rating_wrap" class="rst-rating-wrapper"> 
     <section class="rst-rating-column rst_rating_wrap"> 
      @foreach($data as $k=>$v)
      <div class="rst-block rst-rating-block"> 
       <p class="rst-rating-dish"> <a class="link" href="/kxljmlt-pt#food/10766816" title="日本豆腐"> {{ $food[$k]->f_name }} <span class="price symbol-rmb">{{ $food[$k]->f_price }}</span> </a> <i class="icon-d-star s{{ $v->f_satis }}"></i> </p> 
       <p class="rst-rating-text">{{ $v->f_content }}</p> 
       <p class="rst-rating-info"> <span class="username">C***n</span> {{ date('Y-m-d',$v->f_ctime) }}</p> 
      </div>
      @endforeach
     </section> 
     <p id="rst_pager" class="rst-pager"> <span class="pager_item rst-pager-item current">1</span> <a class="pager_item rst-pager-item" data-page="2">2</a> <a class="pager_item rst-pager-item" data-page="3">3</a> <a class="pager_item rst-pager-item" data-page="4">4</a> <a class="pager_item rst-pager-item" data-page="5">5</a> <a class="pager_item rst-pager-item flip glyph-caret-right" data-page="2"></a> </p> 
    </div> 
   </div> 
   <aside class="restaurant-aside"> 
    <aside class="rst-aside"> 
     <div class="rst-block rst-rating-aside group"> 
      <div class="rating-point aside" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating"> 
       <strong class="point float-l" itemprop="ratingValue">4.4</strong> 
       <div class="detail"> 
        <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i></span> 
        <span class="comment" href="/kxljmlt-pt/rating"><span itemprop="reviewCount">495</span>人评价</span> 
       </div> 
      </div> 
      <ul class="rating-diagram aside"> 
       <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i></span> <span class="bar" style="width: 97.2px;"></span> 81% </li> 
       <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 6px;"></span> 5% </li> 
       <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 2.4px;"></span> 2% </li> 
       <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 0px;"></span> 0% </li> 
       <li class="diagram-item"> <span class="rating-stars"> <i class="glyph-rating-star">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i><i class="glyph-rating-star off">★</i></span> <span class="bar" style="width: 14.4px;"></span> 12% </li> 
      </ul> 
     </div> 
    </aside> 
   </aside> 
  </div>
@endsection