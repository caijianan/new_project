@extends('home.layout.index')
@section('content')
<style type="text/css">
  .shop-list{display: inline-block;} .shop-list li.li{float: left;margin: 10px 40px 0px 0px;border: 1px solid #ccc;}
</style>
<div class="container"> 

    <div id="promotion_banner" class="promotion-banner"> 
     <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 950px; height: 80px; margin: 0px; overflow: hidden;"><ul id="promotion_carousel" class="carousel-wrapper" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; height: 880px; width: 950px; z-index: auto;"> 
       
      <li class="carousel-block" style="margin-bottom: 0px;"> <a rel="nofollow" target="_blank" href="/activity/cyzxff20150312" data-id="promotion_banner_cyzxff20150312"> <img src="/h/images/795627d940d71323855b99bf36685gif.gif"> </a> </li> 
      <li class="carousel-block" style="margin-bottom: 0px;"> <a rel="nofollow" target="_blank" href="/activity/xnbonus_2015" data-id="promotion_banner_xnbonus_2015"> <img src="/h/images/24afab59cadeac87ec23a51fe5e8dgif.gif"> </a> </li> 
      <li class="carousel-block" style="margin-bottom: 0px;"> <a rel="nofollow" target="_blank" href="/activity/pinpaiguan1" data-id="promotion_banner_pinpaiguan1"> <img src="/h/images/44b92f52c342fe1994164399fd870gif.gif"> </a> </li> 
      <li class="carousel-block" style="margin-bottom: 0px;"> <a rel="nofollow" target="_blank" href="/activity/sdjb" data-id="promotion_banner_sdjb"> <img src="/h/images/10ea2f228dce4ef61c56c52ae5f9agif.gif"> </a> </li> 
     <li class="carousel-block" style="margin-bottom: 0px;"> <a rel="nofollow" target="_blank" href="/activity/100millon-bonus" data-id="promotion_banner_100millon-bonus"> <img src="/h/images/49c76d8868522e2793b74844b5914gif.gif"> </a> </li></ul></div> 
     <ol class="carousel_pager carousel-pager" style="display: block;"><li class="pgn">1</li><li class="pgn selected">2</li><li class="pgn">3</li><li class="pgn">4</li><li class="pgn">5</li></ol> 
    </div> 
    <div class="row favored-restaurants restaurants-row" id="favored-bar"> 
     <div class="span12 row-wrapper"> 
      <div class="row"> 
       <div class="span12 category-restaurant-header"> 
        <span class="title">我的收藏</span> 
        <span class="right-action"><a href="member_collect_shop.html">设置</a></span> 
       </div> 
       <div class="span12" id="favored-restaurants"> 
        <table class="restaurant-list-table zebra-striped1"> 
         <tbody> 
          <tr> 
           <td> 
            <div class="restaurant-block lite"> 
             <div class="add-favor"></div> 
            </div> </td> 
           <td> 
            <div class="restaurant-block lite"> 
             <div class="add-favor"></div> 
            </div> </td> 
           <td> 
            <div class="restaurant-block lite"> 
             <div class="add-favor"></div> 
            </div> </td> 
           <td> 
            <div class="restaurant-block lite"> 
             <div class="add-favor"></div> 
            </div> </td> 
           <td> 
            <div class="restaurant-block lite"> 
             <div class="add-favor"></div> 
            </div> </td> 
          </tr> 
         </tbody> 
        </table> 
       </div> 
      </div> 
     </div> 
    </div> 

    <div class="row promoted-restaurants restaurants-row"> 
     <div class="span12 row-wrapper"> 
      <div class="row"> 
       <div class="span12 category-restaurant-header with-restaurant-filter"> 
        <div class="row"> 
         <div class="span12"> 
          <div id="filter-btn-wrapper"> 
           <span class="filter-btn checked" pinyin="tuijian" ubt-change="filter_tuijian"> <input type="checkbox" name="filter" value="tuijian" checked="checked"><span class="filter-text tuijian">热门餐厅</span> </span> 
           <span class="filter-btn" pinyin="open" ubt-change="filter_open"> <input type="checkbox" name="filter" value="open"><span class="filter-text open">营业中</span> </span> 
           <span class="filter-divider"></span> 
           <span class="filter-btn activity-filter" pinyin="online_payment" ubt-change="filter_online_payment"> <input type="checkbox" name="filter"><span class="filter-text online_payment with-icon">在线支付<span class="new_icon"></span></span> </span> 
           <span class="filter-btn activity-filter" pinyin="chaoshipeifu" ubt-change="filter_chaoshipeifu"> <input type="checkbox" name="filter"><span class="filter-text chaoshipeifu with-icon">超时赔付</span> </span> 
           <div class="flavorblock"> 
            <div class="flavor-dropdown-toggle" data-toggle="dropdown">
             <a>口味<b class="caret"></b></a>
            </div> 
            <ul class="flavor-dropdown-menu" style="display:none"> 
             <li class="flavor all filter-btn"><a>全部</a></li> 
             <li class="flavor filter-btn flavor-filter" pinyin="zhongshi"> <a>中式</a> </li> 
             <li class="flavor filter-btn flavor-filter" pinyin="xishi"> <a>西式</a> </li> 
             <li class="flavor filter-btn flavor-filter" pinyin="gangshi"> <a>港式</a> </li> 
             <li class="flavor filter-btn flavor-filter" pinyin="naichahanbao"> <a>奶茶</a> </li> 
             <li class="flavor filter-btn flavor-filter" pinyin="shaokao"> <a>烧烤</a> </li> 
             <li class="flavor filter-btn flavor-filter" pinyin="rishi"> <a>日式</a> </li> 
             <li class="flavor filter-btn flavor-filter" pinyin="hanshi"> <a>韩式</a> </li> 
             <li class="flavor filter-btn flavor-filter" pinyin="tiandian"> <a>甜点</a> </li> 
             <li class="flavor filter-btn flavor-filter" pinyin="hanbao"> <a>汉堡</a> </li> 
            </ul> 
           </div> 
           <div class="deliver-slider-wrapper "> 
            <span id="deliver-amount-level">全部</span> 
            <div class="slider-wrapper"> 
             <div id="geo_deliver_slider" class="deliver-slider ui-eleme slider tool-tip ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" title="起送价" level="4" max="4" min="1"><div class="ui-slider-range ui-widget-header ui-slider-range-min" style="width: 100%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 100%;"></a></div> 
            </div> 
            <span>起送价</span> 
           </div> 
          </div> 
         </div> 
         <!--<div class="span2">
                      </div>--> 
        </div> 
       </div> 
       <div class="span12 category-restaurant-header with-restaurant-filter area-activities"> 
        <div class="area-activities-other"> 
         <span class="filter-btn activity-filter" pinyin="Activity_14337"> <input type="checkbox" name="filter"><span class="filter-text Activity_14337">闪电红包</span> </span> 
         <span class="filter-btn activity-filter" pinyin="new_user_discount"> <input type="checkbox" name="filter"><span class="filter-text new_user_discount">首次下单立减</span> </span> 
         <span class="filter-btn activity-filter" pinyin="extra_discount"> <input type="checkbox" name="filter"><span class="filter-text extra_discount">满立减</span> </span> 
        </div> 
       </div> 
       <div class="span12"> 
          <ul class="shop-list">
          @foreach( $shoplist as $v)
           <li class="li"> 
            <div class="restaurant-block  " id="restaurant-110720" rel="110720" data-restaurantid="110720"> 
             <div class="favor-book"> 
              <span class="favor-icon hidden"></span>
              <a href="#" class="hover-add-favor hidden entry-favor" rel="110720">收藏</a> 
              <a href="#" class="hover-un-favor hidden entry-un-favor" rel="110720">取消收藏</a> 
             </div> 
             <div class="line-one"> 
              <div class="logo-wrapper"> 
               <div class="logo"> 
                <div class="conform-logo-person"></div> 
                <a href="#" target="_blank"><img class="restaurant-logo" alt="{{ $v->s_name }}" srcset="/shop_pic/{{ $v->s_page }}"></a> 
               </div> 
               <div class="deliver-time-wrapper tooltip_on" data-toggle="tooltip" title="" data-original-title="平均送餐时间:37分钟">
                 37分钟 
               </div> 
              </div> 
              <div class="info"> 
               <div class="name"> 
                <a class="restaurant-link" href='{{ url("home/shoplist/$v->id") }}' target="_blank">{{ $v->s_name }}</a> 
               </div> 
               <div class="flavors ">
                 {{ $v->s_title }} 
               </div> 
               <div class="ratings "> 
                <div class="r10 rating-star" title="餐厅评价：3.7星"></div> 
                <span class="rating-number">3715份</span> 
               </div> 
               <div class="icons"> 
                <span class="restaurant-icons online-payment tooltip_on" data-toggle="tooltip" title="" data-original-title="该餐厅支持在线支付">&nbsp;</span> 
               </div> 
              </div> 
             </div> 
             <div class="hidden line-hover-dlg" id="restaurant-hover-dlg-content-110720"> 
              <div class="restaurant-panel"> 
               <span class="favor-icon hidden"></span> 
               <div class="restaurant-more-info"> 
                <div style="font-size:15px; margin-left:10px;">
                 {{ $v->s_name }}
                </div> 
                <div class="divider hidden"></div> 
                <ul class="icons"> 
                 <li> <span class="restaurant-icons online-payment" title="该餐厅支持在线支付">&nbsp;</span> <span class="desc" title="">该餐厅支持在线支付</span> </li> 
                </ul> 
                <div class="divider hidden"></div> 
                <p class="ann"><strong>公告:</strong>&nbsp;本店500米外{{ $v->s_price }}元起送~！！！ 本餐厅买10杯赠送1杯，下单请备注热饮或冷饮，少冰或去冰，全糖或半糖或无糖</p> 
                <p class="restaurant-deliver-desc"><strong>起送价:</strong>&nbsp;到登科保洁(长寿路店) {{ $v->s_price }}元。 {{ $v->s_price }}元起送)</p> 
                <p><strong>地址:</strong>&nbsp;{{ $v->s_addr }}</p> 
                <p><strong>营业时间:</strong>&nbsp;{{ $v->s_status == 1 ? '营业' : '休息' }}</p> 
                <p><strong>简介:</strong>&nbsp;{{ $v->s_title }}</p> 
               </div> 
              </div> 
             </div> 
            </div>
            </li>
            @endforeach
          </ul>

       </div> 
      </div> 
     </div> 
    </div> 
    <script type="text/javascript">
  var filterJson = '{"tuijian":[31767,24226,36683,168750,119301,12753,13242,12833,44827,21738,17037,25064,58309,165066,110720],"open":[31767,24226,36683,168750,119301,12753,13242,12833,44827,21738,17037,25064,58309,165066,110720,164953,168020,173973,187201,55367,188611,24160,131758,188857,13253,55132,159377,24251,134451,54573,12750,166370,4501,15888,165442,25730,25758,39593,24237,161527,102987,173179,24448,24910,158031,57191,57334,203420,13876,61018,157248,20572,46687,25217,175506,55481,173776,59607,174298,4486,92979,114405,164216,164217,123724,172004,163241,13931,24229,24454,36208,50963,25625,54811,30917,56672,58514,31568,55201,43012,181798,166235,29615,167558,120888,169396,185867,155212,75351,75355,75358,171499,10006,71306,171207,55490,30916,84678,187591,18633,161543,34606,181377,114460,32546,20618,55615,170307,70470,25416,129357,166456,165733,160624,172411,79744,55617,59273,59287,22425,25514,39855,115124,78278,200654,75341,13286,103408],"online_payment":[31767,24226,36683,168750,119301,12753,13242,12833,44827,21738,17037,25064,58309,165066,110720,164953,168020,187201,55367,188611,24160,131758,188857,13253,55132,159377,24251,134451,54573,12750,4501,15888,165442,25730,25758,39593,24237,161527,102987,173179,24448,24910,158031,57191,57334,203420,13876,61018,157248,20572,25217,55481,173776,59607,4486,92979,114405,123724,163241,13931,24229,24454,36208,50963,25625,54811,30917,56672,58514,31568,55201,43012,181798,29615,167558,120888,169396,185867,155212,75358,171499,10006,71306,171207,55490,30916,84678,187591,18633,161543,34606,181377,114460,20618,55615,170307,70470,25416,129357,166456,160624,79744,55617,59273,59287,22425,25514,39855,115124,78278,200654,13286,103408,24259,31737,33734,166408,114363,22840,17143,114310,165016,21105,18982,13411,31757,160581,54617,17156,160588,164976,80645,155440,21113,25213,18051,20615,57347,21939,31567,15864,146088,47654,166403,59614,57894,159854,57879,163975,163974,21118,24248,22301,13180,24452,26631,21589,34060,40425,33357,20666,58520,30906,36213,31781,46630,54030,27023,58517,34705,50187,135171,25216,214277,149026,31281,210492,138336,209994,38987,195042,144474,184081,138345,159857,173193,58515,36500,186523,176922,124529,161450,164898,191185,14370,21115,187629,26865,211707,48393,175382,26414,27863,54074,20820,200643,160610,98156,164213,91530,91549,59670,129352,49320,21462,119648,55275,58865,36852,24575],"chaoshipeifu":[131758,24910,123724,39855,146088,198761,34060,31781,195042,164898,98156],"new_user_discount":[31767,24226,36683,168750,119301,12753,13242,12833,21738,17037,25064,165066,168020,187201,55367,188611,24160,131758,188857,13253,159377,54573,165442,25730,25758,161527,102987,173179,24448,24910,158031,57191,57334,61018,25217,55481,59607,4486,114405,123724,13931,36208,25625,30917,56672,58514,55201,43012,181798,29615,120888,10006,71306,55490,30916,34606,25416,79744,59287,25514,39855,115124,13286,24259,31737,33734,166408,114363,22840,17143,114310,165016,21105,18982,160581,164976,25213,57347,31567,146088,47654,24452,26631,34060,40425,20666,58520,31781,54030,27023,50187,25216,195042,144474,159857,173193,176922,161450,164898,191185,14370,21115,202998,26865,211707,175382,26414,54074,200643,160610,98156,91549,129352,21462,119648,24575],"extra_discount":[31767,24226,36683,168750,119301,12753,13242,12833,21738,17037,25064,165066,168020,187201,55367,188611,24160,131758,188857,13253,159377,54573,165442,25730,25758,161527,102987,173179,24448,24910,158031,57191,57334,61018,25217,55481,59607,4486,114405,123724,13931,36208,25625,30917,56672,58514,55201,43012,181798,29615,120888,10006,71306,55490,30916,34606,25416,79744,59287,25514,39855,115124,13286,24259,31737,33734,166408,114363,22840,17143,114310,165016,21105,18982,160581,164976,25213,57347,31567,146088,47654,24452,26631,34060,40425,20666,58520,31781,54030,27023,50187,25216,195042,144474,159857,173193,176922,161450,164898,191185,14370,21115,202998,26865,211707,175382,26414,54074,200643,160610,98156,91549,129352,21462,119648,24575],"zhongshi":[31767,24226,36683,168750,119301,12753,13242,12833,21738,17037,25064,165066,110720,164953,187201,55367,188611,24160,131758,188857,13253,55132,24251,134451,54573,12750,166370,4501,15888,165442,25730,25758,39593,24237,161527,102987,173179,24448,24910,57191,57334,61018,157248,20572,25217,175506,59607,174298,4486,92979,114405,123724,13931,24229,24454,50963,30917,56672,31568,43012,181798,166235,29615,167558,120888,169396,75351,75355,75358,171499,10006,71306,171207,30916,84678,187591,18633,161543,34606,32546,20618,55615,170307,166456,165733,172411,79744,55617,59273,22425,25514,39855,115124,200654,75341,103408,24259,31737,33734,166408,114363,22840,17143,114310,165016,21105,13411,31757,160588,164976,13318,80645,59704,21113,25213,18051,57347,21939,31567,146088,198761,35950,47654,57894,159854,57879,163975,163974,21118,24248,16930,13180,24452,26631,27065,34060,40425,20666,58520,30906,36213,31781,54030,27023,34659,58517,34705,25216,210492,138336,38987,195042,144474,184081,138345,159857,85647,58515,36500,48362,124529,161450,164898,191185,21115,202998,26865,211707,31959,175382,26414,27863,54074,20820,165719,200643,160610,98156,164213,196477,98453,196483,196486,91530,192919,192911,192914,59670,129352,21462,119648,75749,175080,58865,36852,24575],"xishi":[58309,173973,203420,13876,46687,55481,92979,164216,164217,36208,58514,31568,55490,103408,18982,20615,15864,166403,21589,149026,38987,165494,14370,48393,175889,54074],"gangshi":[134451,92979,50963,43012,155212,160624,78278,103408,31737,114363,114310,35950,47654,22301,26631,46630,149026,176922,164898,187629],"naichahanbao":[110720,134451,203420,61018,173776,54811,31568,181798,155212,160624,78278,31737,54617,20615,15864,22301,21589,50187,135171,149026,186523,48393,49320],"shaokao":[164953,131758,163241,59287,39855,160588,35950],"rishi":[187201,36208,55201,13286,114310,174143,160581,17156,160588,164206,14370,21115,54074,91549],"hanshi":[159377,92979,36208,25416,155440,214277,164898,21115,54074],"tiandian":[13242,110720,168020,13253,155212,70470,78278,103408,31737,54617,194658,35950,166403,59614,50187,149026,31281,38987,173193,48393,175889,174488,55275],"hanbao":[110720,24251,134451,55481,160624,20615,22301,38987,48393],"allRst":[31767,24226,36683,168750,119301,12753,13242,12833,44827,21738,17037,25064,58309,165066,110720,164953,168020,173973,187201,55367,188611,24160,131758,188857,13253,55132,159377,24251,134451,54573,12750,166370,4501,15888,165442,25730,25758,39593,24237,161527,102987,173179,24448,24910,158031,57191,57334,203420,13876,61018,157248,20572,46687,25217,175506,55481,173776,59607,174298,4486,92979,114405,164216,164217,123724,172004,163241,13931,24229,24454,36208,50963,25625,54811,30917,56672,58514,31568,55201,43012,181798,166235,29615,167558,120888,169396,185867,155212,75351,75355,75358,171499,10006,71306,171207,55490,30916,84678,187591,18633,161543,34606,181377,114460,32546,20618,55615,170307,70470,25416,129357,166456,165733,160624,172411,79744,55617,59273,59287,22425,25514,39855,115124,78278,200654,75341,13286,103408,24259,31737,33734,166408,114363,22840,17143,114310,165016,21105,18982,13411,31757,174143,160581,54617,17156,160588,164976,13318,80645,155440,59704,21113,25213,18051,20615,57347,21939,31567,15864,146088,194658,198761,35950,47654,166403,59614,57894,159854,57879,163975,164206,163974,21118,24248,16930,22301,13180,24452,26631,27065,21589,34060,40425,33357,20666,58520,30906,36213,31781,46630,54030,27023,34659,58517,34705,50187,135171,25216,214277,149026,31281,210492,138336,209994,38987,195042,144474,184081,138345,159857,165494,173193,85647,58515,36500,186523,176922,48362,124529,161450,164898,191185,14370,21115,202998,187629,26865,211707,48393,31959,175889,175382,196484,26414,27863,54074,20820,165719,200643,160610,98156,164213,196477,98453,196483,196486,91530,192919,192911,192914,192915,174488,91549,59670,129352,49320,21462,119648,75749,175080,55275,58865,36852,24575],"Activity_14337":[75355,29615],"NameActivity_14337":"\u95ea\u7535\u7ea2\u5305","deliver_amount":[[36683,24160,164216,164217,75351,75355,75358,187591,32546,55617,75341,163975,164206,38987,196484],[31767,24226,36683,168750,119301,12753,13242,12833,44827,25064,24160,13253,55132,12750,24237,158031,157248,25217,175506,173776,92979,164216,164217,24229,58514,75351,75355,75358,187591,32546,20618,55617,75341,103408,24259,31737,33734,166408,114363,22840,17143,114310,165016,31757,54617,13318,59704,57347,31567,146088,198761,57894,163975,164206,21118,24248,27065,31781,34705,210492,38987,195042,144474,184081,176922,191185,202998,196484,27863,200643,129352],[31767,24226,36683,168750,119301,12753,13242,12833,44827,21738,17037,25064,165066,110720,187201,55367,24160,13253,55132,24251,54573,12750,15888,39593,24237,24448,158031,57191,203420,157248,20572,46687,25217,175506,173776,92979,164216,164217,123724,24229,24454,50963,54811,30917,58514,181798,185867,75351,75355,75358,10006,187591,32546,20618,55617,25514,75341,103408,24259,31737,33734,166408,114363,22840,17143,114310,165016,21105,31757,54617,13318,59704,21113,20615,57347,21939,31567,15864,146088,198761,57894,159854,57879,163975,164206,163974,21118,24248,16930,13180,27065,33357,58520,36213,31781,58517,34705,135171,210492,38987,195042,144474,184081,159857,85647,186523,176922,191185,21115,202998,187629,211707,175382,196484,26414,27863,54074,20820,200643,160610,59670,129352,119648,24575],[31767,24226,36683,168750,119301,12753,13242,12833,44827,21738,17037,25064,58309,165066,110720,164953,168020,173973,187201,55367,188611,24160,131758,188857,13253,55132,159377,24251,134451,54573,12750,166370,4501,15888,165442,25730,25758,39593,24237,161527,102987,173179,24448,24910,158031,57191,57334,203420,13876,61018,157248,20572,46687,25217,175506,55481,173776,59607,174298,4486,92979,114405,164216,164217,123724,172004,163241,13931,24229,24454,36208,50963,25625,54811,30917,56672,58514,31568,55201,43012,181798,166235,29615,167558,120888,169396,185867,155212,75351,75355,75358,171499,10006,71306,171207,55490,30916,84678,187591,18633,161543,34606,181377,114460,32546,20618,55615,170307,70470,25416,129357,166456,165733,160624,172411,79744,55617,59273,59287,22425,25514,39855,115124,78278,200654,75341,13286,103408,24259,31737,33734,166408,114363,22840,17143,114310,165016,21105,18982,13411,31757,174143,160581,54617,17156,160588,164976,13318,80645,155440,59704,21113,25213,18051,20615,57347,21939,31567,15864,146088,194658,198761,35950,47654,166403,59614,57894,159854,57879,163975,164206,163974,21118,24248,16930,22301,13180,24452,26631,27065,21589,34060,40425,33357,20666,58520,30906,36213,31781,46630,54030,27023,34659,58517,34705,50187,135171,25216,214277,149026,31281,210492,138336,209994,38987,195042,144474,184081,138345,159857,165494,173193,85647,58515,36500,186523,176922,48362,124529,161450,164898,191185,14370,21115,202998,187629,26865,211707,48393,31959,175889,175382,196484,26414,27863,54074,20820,165719,200643,160610,98156,164213,196477,98453,196483,196486,91530,192919,192911,192914,192915,174488,91549,59670,129352,49320,21462,119648,75749,175080,55275,58865,36852,24575]]}';
  var amountLevelJson = '[10,20,30,999]';
</script> 
    <div id="modal-add-favor" class="modal hide fade" aria-hidden="true" tabindex="-1"> 
     <div class="modal-header"> 
      <a href="#" class="close" aria-hidden="true">×</a> 
      <h3>收藏你喜欢的餐厅</h3> 
     </div> 
     <div class="modal-body"> 
     </div> 
     <div class="modal-footer"> 
      <a href="#" class="btn btn-yellow complete">完成收藏</a> 
     </div> 
    </div> 
    <div id="copy_dlg_restaurant" class="restaurant-hover-dlg right hidden" style="display: none;"> 
     <div class="wrapper dark_shadow"> 
      <div class="callout_tip"></div> 
      <div class="detail"></div> 
     </div> 
    </div> 
    <div id="modal-shuiqunawaimai" class="modal-who-get-dishes modal hide fade" aria-hidden="true" tabindex="-1"> 
     <div class="modal-header"> 
      <a href="#" class="close" aria-hidden="true">×</a> 
      <h3>谁去拿外卖</h3> 
     </div> 
     <div class="modal-body"> 
      <div class="who-get-dishes-wrapper"> 
       <h2 class="wgd-badge"></h2> 
       <a id="trigger" class="wgd-btn"></a> 
       <span class="wgd-rules">随机到最小数字的人去拿外卖</span> 
       <span id="lastResult" class="wgd-bg-text">↓ Start</span> 
       <ul id="result" class="wgd-result-list"></ul> 
      </div> 
     </div> 
    </div> 
    <script type="text/javascript">
  _gaq.push(['_trackEvent', 'view_place', 'forward', '-615736186413943440']);
</script> 
   </div>
@endsection