@extends('home.layout.index')

@section('header')
<header class="header clearfix back-tan fs14">
        <div class="common-width">
            <h1 class="fl">
                <i class="icon address-icon"></i>
                当前共有238家餐厅，当前地址：<strong data-ng-bind="currentLocation"></strong>
            </h1>
            <a href="index.html" class="fl">[更改地址]</a>
                <div class="fr search-address-orderList">
                    <div class="input-icon">
                        <input type="text" ng-model="filterObj.name" placeholder="搜索：餐厅" class="trans"/>
                        <i class="icon search-icon"></i>
                    </div>
                </div>
        </div>
    </header> 
@endsection
@section('content')
<div class="banner-carousel" slider-img="fade">
                <ul class="list"><li class="">1</li><li class="on">2</li><li class="">3</li><li class="">4</li><li class="">5</li></ul>
                <ul class="banner_list">
                
                    <li style="opacity: 0; display: none;"><a target="_blank" href="#" title="上海5月-新用户减20元"><img alt="上海5月-新用户减20元" src="http://dhcad.dhero.cn/Fva4qUZRxHr9rgub7MlbjOWu-Ro6"></a></li>
                
                    <li style="display: block; opacity: 1;"><a target="_blank" href="#" title="上海5月-减6元"><img alt="上海5月-减6元" src="images/Fol7bpvmB6TvTvg7-iJQ303-Dmoi"></a></li>
                
                    <li style="display: none;"><a target="_blank" href="#" title="上海5月-飞思乐"><img alt="上海5月-飞思乐" src="http://dhcad.dhero.cn/FjA3bCkGzWz5O7wdn04gNh29XxmC"></a></li>
                
                    <li style="display: none;"><a target="_blank" href="#" title="上海5月-吃鸭脖送啤酒"><img alt="上海5月-吃鸭脖送啤酒" src="http://dhcad.dhero.cn/FqDbdf7883i00z2XJcKo6mZZu0F-"></a></li>
                
                    <li style="display: none;"><a target="_blank" href="#" title="上海5月-份份减十五元"><img alt="上海5月-份份减十五元" src="http://dhcad.dhero.cn/FoRLT8DM-TpV5BPW-0a_Fiq7HLJ2"></a></li>
                
                </ul>
            <a id="prevBtn" class="prevBtn">上一页</a><a id="nextBtn" class="nextBtn">下一页</a>
</div>
<div id="restaurantMain" class="restaurant-main relative">
            <!--筛选条件 start-->
            <div class="restaurant-filter">
                <div class="filter-food">
                    <div class="clearfix restaurant-food" style="height: 24px;">
                        <label class="fl">菜品分类：</label>
                        <ul class="clearfix">
                            
                            <li ng-class="{cur:cuisineIndex=='all'}" ng-click="changeCuisine('all')" class="cur">所有菜系</li>
                            
                            <li ng-class="{cur:cuisineIndex=='cantonese'}" ng-click="changeCuisine('cantonese')">粤菜</li>
                            
                            <li ng-class="{cur:cuisineIndex=='chinese-fastfood'}" ng-click="changeCuisine('chinese-fastfood')">中餐简餐</li>
                            
                            <li ng-class="{cur:cuisineIndex=='drink-snack'}" ng-click="changeCuisine('drink-snack')">饮料小吃</li>
                            
                            <li ng-class="{cur:cuisineIndex=='japan-korea'}" ng-click="changeCuisine('japan-korea')">日韩料理</li>
                            
                            <li ng-class="{cur:cuisineIndex=='noodles-pastry'}" ng-click="changeCuisine('noodles-pastry')">面食|糕点</li>
                            
                            <li ng-class="{cur:cuisineIndex=='pizza'}" ng-click="changeCuisine('pizza')">匹萨</li>
                            
                            <li ng-class="{cur:cuisineIndex=='seafood'}" ng-click="changeCuisine('seafood')">生鲜</li>
                            
                            <li ng-class="{cur:cuisineIndex=='sichuan'}" ng-click="changeCuisine('sichuan')">川菜</li>
                            
                            <li ng-class="{cur:cuisineIndex=='southeast-asian'}" ng-click="changeCuisine('southeast-asian')">东南亚菜</li>
                            
                            <li ng-class="{cur:cuisineIndex=='supermarket'}" ng-click="changeCuisine('supermarket')">超市</li>
                            
                            <li ng-class="{cur:cuisineIndex=='western'}" ng-click="changeCuisine('western')">西餐</li>
                            
                        </ul>
                    </div>
                    <span class="more" toogle-nav-menu="24" style="display: none;">更多<i></i></span>
                </div>
                <div class="filter-food fliter-activity clearfix">
                    <label class="fl">排序方式：</label>
                    <ul class="clearfix">
                        <li ng-class="{cur:sortIndex==1}" ng-click="changeSortA(1)" class="cur">默认</li>
                        <li ng-class="{cur:sortIndex==2}" ng-click="changeSortC(2)">销量<i ng-class="{sortHigh:countReg==true}" class="sortHigh"></i></li>
                        <li ng-class="{cur:sortIndex==3}" ng-click="changeSortP(3)">起送价<i ng-class="{sortHigh:priceReg==false}"></i></li>
                    </ul>
                </div>
            </div>
            <!--筛选条件 end-->
            <!--tab切换 start-->
            <nav class="mark clearfix" restaurant-type-nav="">
                
                    <ul ng-init="tabsAction1 = true">
                
                    <li ng-class="{cur:tabsAction1}" data-index="1" class="business cur">营业中</li>
                     <li ng-class="{cur:tabsAction2}" no-render="1" data-index="2">可预订</li>
                     <li ng-class="{cur:tabsAction3}" no-render="1" data-index="3">休息中</li>
                </ul>
            </nav>
            <!--tab切换 end-->

            <div class="filter-Obj" id="filterBox" scroll-position-static="400" style="position: static;">
                <div class="relative clearfix">
                    <b class="restaurant-type" style="display: block;">附近餐厅</b>
                    <div class="clearfix filter-sort">
                        <div class="fr old-restanurant">
                            <div class="dropdown-box" history-restaurants="">
                                <div class="dropdown-select">
                                    <span class="dropdown-text">已订过的餐厅</span>
                                    <span class="caret" ng-class="{active : isShowHistory}"></span>
                                </div>
                            </div>
                            <!-- ngIf: !(history_accept_order_restaurants.length > 0 || history_pre_order_restaurants.length > 0 || history_offline_restaurants > 0) --><div class="dropdown-menu not-history ng-scope" ng-class="{active : isShowHistory}" ng-if="!(history_accept_order_restaurants.length > 0 || history_pre_order_restaurants.length > 0 || history_offline_restaurants > 0)">
                                <p>
                                    暂无历史订餐记录
                                </p>
                            </div><!-- end ngIf: !(history_accept_order_restaurants.length > 0 || history_pre_order_restaurants.length > 0 || history_offline_restaurants > 0) -->

                            <!-- ngIf: history_accept_order_restaurants.length > 0 || history_pre_order_restaurants.length > 0 || history_offline_restaurants > 0 -->
                        </div>
                        <div class="fr all-activity" filter-activity="" ng-class="{active : isShowActivity}">
                            <div class="dropdown-box">
                                <div class="dropdown-select">
                                    <span class="dropdown-text ellipsis ng-binding" ng-bind="promotionObj[promotionIndex].text">全部活动</span>
                                    <span class="caret"></span>
                                </div>
                            </div>
                            <ul class="dropdown-menu">
                                <!-- ngRepeat: promotion in promotionObj --><li class="ellipsis ng-scope active" ng-class="{active:promotionIndex==$index}" ng-repeat="promotion in promotionObj" ng-click="changePromotion($index)">
                                    <!-- ngIf: !promotion.url --><i class="status-icon status-icon-1 ng-scope aIcon" ng-class="{aIcon:promotion.id==&quot;-1&quot;}" ng-if="!promotion.url"></i><!-- end ngIf: !promotion.url -->
                                    <!-- ngIf: promotion.url -->
                                    <span ng-bind="promotion.text" class="ng-binding">全部活动</span>
                                </li><!-- end ngRepeat: promotion in promotionObj --><li class="ellipsis ng-scope" ng-class="{active:promotionIndex==$index}" ng-repeat="promotion in promotionObj" ng-click="changePromotion($index)">
                                    <!-- ngIf: !promotion.url -->
                                    <!-- ngIf: promotion.url --><img ng-src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" ng-if="promotion.url" class="ng-scope" src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/"><!-- end ngIf: promotion.url -->
                                    <span ng-bind="promotion.text" class="ng-binding">每单赠送价值15元进口果汁1瓶！</span>
                                </li><!-- end ngRepeat: promotion in promotionObj --><li class="ellipsis ng-scope" ng-class="{active:promotionIndex==$index}" ng-repeat="promotion in promotionObj" ng-click="changePromotion($index)">
                                    <!-- ngIf: !promotion.url -->
                                    <!-- ngIf: promotion.url --><img ng-src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" ng-if="promotion.url" class="ng-scope" src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/"><!-- end ngIf: promotion.url -->
                                    <span ng-bind="promotion.text" class="ng-binding">活动菜品立减6元，多点多减！</span>
                                </li><!-- end ngRepeat: promotion in promotionObj --><li class="ellipsis ng-scope" ng-class="{active:promotionIndex==$index}" ng-repeat="promotion in promotionObj" ng-click="changePromotion($index)">
                                    <!-- ngIf: !promotion.url -->
                                    <!-- ngIf: promotion.url --><img ng-src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" ng-if="promotion.url" class="ng-scope" src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/"><!-- end ngIf: promotion.url -->
                                    <span ng-bind="promotion.text" class="ng-binding">该餐厅已通过认证</span>
                                </li><!-- end ngRepeat: promotion in promotionObj --><li class="ellipsis ng-scope" ng-class="{active:promotionIndex==$index}" ng-repeat="promotion in promotionObj" ng-click="changePromotion($index)">
                                    <!-- ngIf: !promotion.url --><i class="status-icon status-icon-1 ng-scope" ng-class="{aIcon:promotion.id==&quot;-1&quot;}" ng-if="!promotion.url"></i><!-- end ngIf: !promotion.url -->
                                    <!-- ngIf: promotion.url -->
                                    <span ng-bind="promotion.text" class="ng-binding">餐厅可使用优惠劵</span>
                                </li><!-- end ngRepeat: promotion in promotionObj --><li class="ellipsis ng-scope" ng-class="{active:promotionIndex==$index}" ng-repeat="promotion in promotionObj" ng-click="changePromotion($index)">
                                    <!-- ngIf: !promotion.url -->
                                    <!-- ngIf: promotion.url --><img ng-src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" ng-if="promotion.url" class="ng-scope" src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/"><!-- end ngIf: promotion.url -->
                                    <span ng-bind="promotion.text" class="ng-binding">品质保证，由超人团队亲自配送。</span>
                                </li><!-- end ngRepeat: promotion in promotionObj --><li class="ellipsis ng-scope" ng-class="{active:promotionIndex==$index}" ng-repeat="promotion in promotionObj" ng-click="changePromotion($index)">
                                    <!-- ngIf: !promotion.url -->
                                    <!-- ngIf: promotion.url --><img ng-src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" ng-if="promotion.url" class="ng-scope" src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/"><!-- end ngIf: promotion.url -->
                                    <span ng-bind="promotion.text" class="ng-binding">本店满98元送Uber5元优惠券</span>
                                </li><!-- end ngRepeat: promotion in promotionObj --><li class="ellipsis ng-scope" ng-class="{active:promotionIndex==$index}" ng-repeat="promotion in promotionObj" ng-click="changePromotion($index)">
                                    <!-- ngIf: !promotion.url -->
                                    <!-- ngIf: promotion.url --><img ng-src="http://dhcactivity.dhero.cn/FmBwiaLjUXTsn667c8UqkOVzkKIh?imageView2/1/w/15/h/15/" alt="" ng-if="promotion.url" class="ng-scope" src="http://dhcactivity.dhero.cn/FmBwiaLjUXTsn667c8UqkOVzkKIh?imageView2/1/w/15/h/15/"><!-- end ngIf: promotion.url -->
                                    <span ng-bind="promotion.text" class="ng-binding">每个订单送2罐三得利清爽啤酒！</span>
                                </li><!-- end ngRepeat: promotion in promotionObj --><li class="ellipsis ng-scope" ng-class="{active:promotionIndex==$index}" ng-repeat="promotion in promotionObj" ng-click="changePromotion($index)">
                                    <!-- ngIf: !promotion.url -->
                                    <!-- ngIf: promotion.url --><img ng-src="http://dhcactivity.dhero.cn/FuiWp8Ny6oGB-R2B5At4XxQ46rFe?imageView2/1/w/15/h/15/" alt="" ng-if="promotion.url" class="ng-scope" src="http://dhcactivity.dhero.cn/FuiWp8Ny6oGB-R2B5At4XxQ46rFe?imageView2/1/w/15/h/15/"><!-- end ngIf: promotion.url -->
                                    <span ng-bind="promotion.text" class="ng-binding">备注超人可乐或超人啤酒随单赠1罐</span>
                                </li><!-- end ngRepeat: promotion in promotionObj -->
                            </ul>
                        </div>
                        
                        <label class="checkbox ng-isolate-scope" model="filterObj.free" title="免费配送"><div class="checker"><span ng-class="{checked:model}"><input type="checkbox" ng-disabled="disable" ng-true-value="true" ng-model="model" class="ng-pristine ng-valid"></span></div><span class="ng-binding">免费配送</span></label>
                        <label class="checkbox ng-isolate-scope" model="filterObj.onlinePay" title="在线支付"><div class="checker"><span ng-class="{checked:model}"><input type="checkbox" ng-disabled="disable" ng-true-value="true" ng-model="model" class="ng-pristine ng-valid"></span></div><span class="ng-binding">在线支付</span></label> 
                    </div>
                </div>
            </div><div style="height: 26px; display: none;"></div>

            <!--餐厅 start-->
           <!-- <div class="restaurant-box">-->
            
                <div id="acceptOrderRestaurants" class="restaurant-list" ng-class="{hide:!tabsAction1}">
                    <div class="cloneTooltip restaurant-info" style="left: 10px; top: 5px;">
                        <s></s>
                        <div><h3 class="ellipsis">[半价菜][送可乐]樱花日本料理</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [09:00-22:30]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt=""><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt=""><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt=""><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul></div>
                    </div>
                    <ul class="clearfix trans recommend-restaurant">
                        
                        
                    </ul>
                    
                    


                    <ul class="clearfix transform-style" id="ye-restaurant">
                        @foreach($shoplist as $v)
                            <li data-index="1" class="restaurant-item fl c_japan-korea c_all p_all p_356 p_352 p_42  p_online fee 0" data-price="150" data-count="1205" data-title="[半价菜][送可乐]樱花日本料理" style="display: block;">
                                <div class="img-box fl">
                                    <a href="shop_detail.html">
                                        <img src="/shop_pic/{{ $v->s_page }}" width="82px" height="82px">
                                    </a>
                                </div>
                                <article class="restaurant-introduce fl">
                                    <h3 class="ellipsis"><a href="shop_detail.html">{{ $v->s_name }}</a></h3>
                                    <dl class="clearfix">
                                        
                                            <dt class="fl ellipsis">已售1205单</dt>
                                        

                                    </dl>
                                    <p>150元起送 0元配送费</p>
                                    <div class="restaurant-state">
                                    <p class="fl">日韩料理</p>
                                    
                                    
                                        <span><i class="status-icon"></i></span>
                                </div>
                                </article>
                                <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">{{ $v->s_name }}</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [09:00-22:30]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><i class="status-icon"></i><span>餐厅支持在线支付</span><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                                    <li><i class="status-icon"></i><span>餐厅支持在线支付</span><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><i class="status-icon"></i><span>餐厅支持在线支付</span><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>

                                
                                    <div class="collect not-collect" title="收藏餐厅" data-rid="1592"></div>
                                    <div class="collect-success">收藏成功</div>
                                
                            </li>
                        @endforeach
                    </ul>
                    
                    <div class="restaurant-list-empty all-restaurant-empty">
                        <div>暂无符合条件的餐厅，返回 <a href="javascript:;" class="link reset-filter">所有餐厅</a></div>
                    </div>
                </div>
            
            
                <div id="preOrderRestaruants" class="restaurant-list hide" ng-class="{hide:!tabsAction2}">
                    <script type="text/template">
                    <div class="cloneTooltip restaurant-info">
                        <s></s>
                        <div></div>
                    </div>
                        
                        <ul class="clearfix trans recommend-restaurant">
                            
                                
                                <li data-index="1"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_150 p_coupon   "
                                    data-price='30' data-count="93" data-title="耶里夏丽(南丹店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ye-li-xia-li-nan-dan-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1061?v=1427853154" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ye-li-xia-li-nan-dan-dian/menu/?gid=602341">耶里夏丽(南丹店)</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis">已售93单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                            
                                            <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">耶里夏丽(南丹店)</h3>
                                        
                                        <h4 class="ellipsis">营业时间 [11:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                            
                                            <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="collect not-collect" title="收藏餐厅" data-rid="1061"></div>
                                    <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                
                                <li data-index="2"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_150 p_coupon   "
                                    data-price='30' data-count="114" data-title="康师傅大牌饭">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/kang-shi-fu-da-pai-fan/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22602?v=1426034248" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/kang-shi-fu-da-pai-fan/menu/?gid=602341">康师傅大牌饭</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis">已售114单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                            
                                            <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">康师傅大牌饭</h3>
                                        
                                        <h4 class="ellipsis">营业时间 [10:30-18:00]</h4>
                                        
                                        <ul>
                                            
                                            <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                            
                                            <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="collect not-collect" title="收藏餐厅" data-rid="22602"></div>
                                    <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                
                                <li data-index="3"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all p_150 p_coupon   "
                                    data-price='30' data-count="98" data-title="【立减】家有好面（腾飞店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/li-jian-jia-you-hao-mian-teng-fei-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/23658?v=1426148701" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/li-jian-jia-you-hao-mian-teng-fei-dian/menu/?gid=602341">【立减】家有好面（腾飞店）</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis">已售98单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:39px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                            <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                            
                                            <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">【立减】家有好面（腾飞店）</h3>
                                        
                                        <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                            
                                            <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="collect not-collect" title="收藏餐厅" data-rid="23658"></div>
                                    <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                
                                <li data-index="4"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all p_150 p_coupon   "
                                    data-price='30' data-count="11" data-title="【立减】家有好面（港汇广场店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/li-jian-jia-you-hao-mian-gang-hui-guang-chan/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/23659?v=1426148842" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/li-jian-jia-you-hao-mian-gang-hui-guang-chan/menu/?gid=602341">【立减】家有好面（港汇广场店）</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis">已售11单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                            <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                            
                                            <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">【立减】家有好面（港汇广场店）</h3>
                                        
                                        <h4 class="ellipsis">营业时间 [10:00-11:00, 14:00-17:00]</h4>
                                        
                                        <ul>
                                            
                                            <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                            
                                            <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="collect not-collect" title="收藏餐厅" data-rid="23659"></div>
                                    <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                
                                <li data-index="5"
                                    class="restaurant-item fl c_western c_all p_all p_150 p_coupon   "
                                    data-price='0' data-count="14" data-title="啡喀咖啡(fix espresso)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/fei-ka-ka-fei-f-i-x-e-s-p-r-e-s-s-o/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22066?v=1421727033" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/fei-ka-ka-fei-f-i-x-e-s-p-r-e-s-s-o/menu/?gid=602341">啡喀咖啡(fix espresso)</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis">已售14单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>0元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                            <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                            
                                            <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">啡喀咖啡(fix espresso)</h3>
                                        
                                        <h4 class="ellipsis">营业时间 [10:00-16:30]</h4>
                                        
                                        <ul>
                                            
                                            <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                            
                                            <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="collect not-collect" title="收藏餐厅" data-rid="22066"></div>
                                    <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                
                                <li data-index="6"
                                    class="restaurant-item fl c_japan-korea c_all p_all p_150 p_coupon   "
                                    data-price='30' data-count="98" data-title="盛寿司">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/sheng-shou-si/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22077?v=1422168009" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/sheng-shou-si/menu/?gid=602341">盛寿司</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis">已售98单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">日韩料理</p>
                                            
                                            <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                            
                                            <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">盛寿司</h3>
                                        
                                        <h4 class="ellipsis">营业时间 [11:30-21:00]</h4>
                                        
                                        <ul>
                                            
                                            <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                            
                                            <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="collect not-collect" title="收藏餐厅" data-rid="22077"></div>
                                    <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                
                                <li data-index="7"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_150 p_coupon   "
                                    data-price='30' data-count="168" data-title="敦煌小亭">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/dun-huang-xiao-ting/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22361?v=1422509389" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/dun-huang-xiao-ting/menu/?gid=602341">敦煌小亭</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis">已售168单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                            
                                            <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">敦煌小亭</h3>
                                        
                                        <h4 class="ellipsis">营业时间 [10:30-21:00]</h4>
                                        
                                        <ul>
                                            
                                            <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                            
                                            <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="collect not-collect" title="收藏餐厅" data-rid="22361"></div>
                                    <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                
                                <li data-index="8"
                                    class="restaurant-item fl c_western c_all p_all p_150 p_coupon   "
                                    data-price='30' data-count="74" data-title="oh my kebab">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/o-h-m-y-k-e-b-a-b/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22371?v=1422321408" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/o-h-m-y-k-e-b-a-b/menu/?gid=602341">OH MY KEBAB</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis">已售74单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                            <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                            
                                            <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">OH MY KEBAB</h3>
                                        
                                        <h4 class="ellipsis">营业时间 [11:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                            
                                            <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="collect not-collect" title="收藏餐厅" data-rid="22371"></div>
                                    <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                
                                <li data-index="9"
                                    class="restaurant-item fl c_southeast-asian c_all p_all p_150 p_coupon   "
                                    data-price='30' data-count="18" data-title="纳摩naam thai">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/na-mo-n-a-a-m-t-h-a-i/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22428?v=1422509259" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/na-mo-n-a-a-m-t-h-a-i/menu/?gid=602341">纳摩Naam Thai</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis">已售18单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">东南亚菜</p>
                                            
                                            <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                            
                                            <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">纳摩Naam Thai</h3>
                                        
                                        <h4 class="ellipsis">营业时间 [11:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                            
                                            <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="collect not-collect" title="收藏餐厅" data-rid="22428"></div>
                                    <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                
                                <li data-index="10"
                                    class="restaurant-item fl c_cantonese c_all p_all p_150 p_coupon   "
                                    data-price='30' data-count="277" data-title="龙记茶餐厅（美罗城店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/long-ji-cha-can-ting-mei-luo-cheng-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22553?v=1427853121" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/long-ji-cha-can-ting-mei-luo-cheng-dian/menu/?gid=602341">龙记茶餐厅（美罗城店）</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis">已售277单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                            <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                            
                                            <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">龙记茶餐厅（美罗城店）</h3>
                                        
                                        <h4 class="ellipsis">营业时间 [10:00-20:45]</h4>
                                        
                                        <ul>
                                            
                                            <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                            
                                            <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="collect not-collect" title="收藏餐厅" data-rid="22553"></div>
                                    <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                
                                <li data-index="11"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352  p_online p_online fee"
                                    data-price='30' data-count="239" data-title="比意食便当">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/bi-yi-shi-bian-dang/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/23976?v=1430206234" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/bi-yi-shi-bian-dang/menu/?gid=602341">比意食便当</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis">已售239单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                            
                                            
                                            <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">比意食便当</h3>
                                        
                                        <h4 class="ellipsis">营业时间 [10:15-15:00, 16:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                            
                                            <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="collect not-collect" title="收藏餐厅" data-rid="23976"></div>
                                    <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                
                                <li data-index="12"
                                    class="restaurant-item fl c_pizza c_all p_all p_coupon p_online p_online fee"
                                    data-price='50' data-count="33" data-title="食必达披萨">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/shi-bi-da-pi-sa/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/23987?v=1426983173" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/shi-bi-da-pi-sa/menu/?gid=602341">食必达披萨</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis">已售33单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">匹萨</p>
                                            
                                            <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">食必达披萨</h3>
                                        
                                        <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="collect not-collect" title="收藏餐厅" data-rid="23987"></div>
                                    <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                
                                <li data-index="13"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all p_42 p_150 p_coupon   "
                                    data-price='30' data-count="5" data-title="秋尼尔 泡芙家族(光启城店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/qiu-ni-er-pao-fu-jia-zu-guang-qi-cheng-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/25310?v=1429467475" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/qiu-ni-er-pao-fu-jia-zu-guang-qi-cheng-dian/menu/?gid=602341">秋尼尔 泡芙家族(光启城店)</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis">已售5单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                            <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                            
                                            <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                            
                                            <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">秋尼尔 泡芙家族(光启城店)</h3>
                                        
                                        <h4 class="ellipsis">营业时间 [10:00-19:00]</h4>
                                        
                                        <ul>
                                            
                                            <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                            
                                            <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                            
                                            <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="collect not-collect" title="收藏餐厅" data-rid="25310"></div>
                                    <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                        </ul>
                        
                        <div class="show-more-recommend-restaurant" count="13">
                            <span>更多推荐餐厅</span>
                        </div>
                        
                        
                        <div class="filter-Obj">
                            <div class="relative clearfix">
                                <b class="restaurant-type">
                                    附近餐厅
                                </b>
                            </div>
                        </div>
                        

                        <ul class="clearfix transform-style">
                            
                                <li data-index="1"
                                    class="restaurant-item fl c_sichuan c_all p_all p_150 p_coupon  "
                                    data-price='30' data-count="40" data-title="干锅传奇">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/gan-guo-chuan-qi/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22608?v=1422900812" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/gan-guo-chuan-qi/menu/?gid=602341">干锅传奇</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售40单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">川菜</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">干锅传奇</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22608"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="2"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all p_150 p_coupon  "
                                    data-price='30' data-count="46" data-title="太麻里台湾私房牛肉面馆">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/tai-ma-li-tai-wan-si-fang-niu-rou-mian-guan/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/23831?v=1426566833" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/tai-ma-li-tai-wan-si-fang-niu-rou-mian-guan/menu/?gid=602341">太麻里台湾私房牛肉面馆</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售46单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:39px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">太麻里台湾私房牛肉面馆</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="23831"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="3"
                                    class="restaurant-item fl c_southeast-asian c_all p_all p_150 p_coupon  "
                                    data-price='30' data-count="4" data-title="金爸爸(正大乐城店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/jin-ba-ba-zheng-da-le-cheng-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/24373?v=1427785939" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/jin-ba-ba-zheng-da-le-cheng-dian/menu/?gid=602341">金爸爸(正大乐城店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售4单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">东南亚菜</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">金爸爸(正大乐城店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="24373"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="4"
                                    class="restaurant-item fl c_southeast-asian c_all p_all   "
                                    data-price='30' data-count="3" data-title="金爸爸(星游城店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/jin-ba-ba-xing-you-cheng-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/24375?v=1427786459" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/jin-ba-ba-xing-you-cheng-dian/menu/?gid=602341">金爸爸(星游城店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售3单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">东南亚菜</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">金爸爸(星游城店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="24375"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="5"
                                    class="restaurant-item fl c_western c_all p_all p_150 p_coupon  "
                                    data-price='30' data-count="5" data-title="朋乐坊">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/peng-le-fang/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22073?v=1421194368" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/peng-le-fang/menu/?gid=602341">朋乐坊</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售5单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">朋乐坊</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-19:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22073"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="6"
                                    class="restaurant-item fl c_western c_all p_all p_150 p_coupon  "
                                    data-price='30' data-count="4" data-title="萄醉">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/tao-zui/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22079?v=1421194336" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/tao-zui/menu/?gid=602341">萄醉</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售4单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">萄醉</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22079"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="7"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all p_150 p_coupon  "
                                    data-price='30' data-count="86" data-title="沙爹云吞面">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/sha-die-yun-tun-mian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22368?v=1422509375" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/sha-die-yun-tun-mian/menu/?gid=602341">沙爹云吞面</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售86单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">沙爹云吞面</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22368"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="8"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_150 p_coupon  "
                                    data-price='30' data-count="24" data-title="可口味（创意小吃）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ke-kou-wei-chuang-yi-xiao-chi/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22369?v=1422509278" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ke-kou-wei-chuang-yi-xiao-chi/menu/?gid=602341">可口味（创意小吃）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售24单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">可口味（创意小吃）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22369"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="9"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_150 p_coupon  "
                                    data-price='30' data-count="127" data-title="德克士（万体馆店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/de-ke-shi-wan-ti-guan-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22604?v=1422764638" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/de-ke-shi-wan-ti-guan-dian/menu/?gid=602341">德克士（万体馆店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售127单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">德克士（万体馆店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-20:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22604"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="10"
                                    class="restaurant-item fl c_pizza c_all p_all p_352 p_42   "
                                    data-price='0' data-count="2094" data-title="那不勒斯匹萨">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/na-bu-le-si-pi-sa/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/36?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/na-bu-le-si-pi-sa/menu/?gid=602341">那不勒斯匹萨</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售2094单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>0元起送 5元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">匹萨</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">那不勒斯匹萨</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="36"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="11"
                                    class="restaurant-item fl c_pizza c_all p_all p_356 p_352  p_online fee"
                                    data-price='50' data-count="2959" data-title="罗尼比萨">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/luo-ni-bi-sa/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/556?v=1426730255" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/luo-ni-bi-sa/menu/?gid=602341">罗尼比萨</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售2959单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">匹萨</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">罗尼比萨</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:45]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="556"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="12"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_356 p_42  p_online fee"
                                    data-price='40' data-count="4944" data-title="曼玲美食">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/man-ling-mei-shi/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1459?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/man-ling-mei-shi/menu/?gid=602341">曼玲美食</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售4944单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">曼玲美食</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1459"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="13"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='30' data-count="356" data-title="珊珊茶面馆 (肇家浜路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/shan-shan-cha-mian-guan-zhao-jia-bang-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1781?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/shan-shan-cha-mian-guan-zhao-jia-bang-lu-dian/menu/?gid=602341">珊珊茶面馆 (肇家浜路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售356单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">珊珊茶面馆 (肇家浜路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1781"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="14"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352 p_42 p_356  p_online fee"
                                    data-price='50' data-count="2074" data-title="湘香缘（虹桥路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xiang-xiang-yuan-hong-qiao-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/4289?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xiang-xiang-yuan-hong-qiao-lu/menu/?gid=602341">湘香缘（虹桥路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售2074单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">湘香缘（虹桥路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-15:00, 16:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4289"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="15"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352   fee"
                                    data-price='90' data-count="1234" data-title="品味轩小厨">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/pin-wei-xuan-xiao-chu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/4303?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/pin-wei-xuan-xiao-chu/menu/?gid=602341">品味轩小厨</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1234单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>90元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">品味轩小厨</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4303"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="16"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352 p_42   fee"
                                    data-price='22' data-count="271" data-title="小熊外卖">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xiao-xiong-wai-mai-1/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/18860?v=1418594277" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xiao-xiong-wai-mai-1/menu/?gid=602341">小熊外卖</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售271单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>22元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">小熊外卖</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="18860"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="17"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_coupon  fee"
                                    data-price='40' data-count="97" data-title="阿姨奶茶(东安路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/a-yi-nai-cha-dong-an-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/19893?v=1419460783" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/a-yi-nai-cha-dong-an-lu-dian/menu/?gid=602341">阿姨奶茶(东安路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售97单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">阿姨奶茶(东安路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="19893"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="18"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_352 p_42   fee"
                                    data-price='40' data-count="9" data-title="good果度">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/g-o-o-d-guo-du/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/25551?v=1429726987" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/g-o-o-d-guo-du/menu/?gid=602341">GOOD果度</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售9单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">GOOD果度</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="25551"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="19"
                                    class="restaurant-item fl c_japan-korea c_all p_all p_341   "
                                    data-price='30' data-count="425" data-title="coco壱番屋 (美罗城店) [快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/c-o-c-o-yi-fan-wu-mei-luo-cheng-dian-kuai-dia/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/779?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/c-o-c-o-yi-fan-wu-mei-luo-cheng-dian-kuai-dia/menu/?gid=602341">CoCo壱番屋 (美罗城店) [快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售425单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">日韩料理</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">CoCo壱番屋 (美罗城店) [快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:30-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="779"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="20"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352   fee"
                                    data-price='50' data-count="268" data-title="侬家小院">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/nong-jia-xiao-yuan/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2973?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/nong-jia-xiao-yuan/menu/?gid=602341">侬家小院</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售268单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">侬家小院</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-13:15]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2973"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="21"
                                    class="restaurant-item fl c_sichuan c_all p_all p_356 p_352 p_42  p_online fee"
                                    data-price='35' data-count="1810" data-title="红唇小吃">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/hong-chun-xiao-chi/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/3905?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/hong-chun-xiao-chi/menu/?gid=602341">红唇小吃</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1810单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>35元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">川菜</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">红唇小吃</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-14:00, 16:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3905"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="22"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='20' data-count="1824" data-title="四季粥坊(斜土路)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/si-ji-zhou-fang-xie-tu-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/5362?v=1404854784" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/si-ji-zhou-fang-xie-tu-lu/menu/?gid=602341">四季粥坊(斜土路)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1824单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">四季粥坊(斜土路)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="5362"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="23"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42 p_352  p_online fee"
                                    data-price='40' data-count="454" data-title="长生源炖汤面">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/chang-sheng-yuan-dun-tang-mian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/8883?v=1409161008" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/chang-sheng-yuan-dun-tang-mian/menu/?gid=602341">长生源炖汤面</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售454单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">长生源炖汤面</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="8883"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="24"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all p_341   "
                                    data-price='30' data-count="200" data-title="味千拉面（光启城店）[快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/wei-qian-la-mian-guang-qi-cheng-dian-kuai-dia/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/12349?v=1411864014" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/wei-qian-la-mian-guang-qi-cheng-dian-kuai-dia/menu/?gid=602341">味千拉面（光启城店）[快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售200单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">味千拉面（光启城店）[快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="12349"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="25"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all p_341   "
                                    data-price='30' data-count="57" data-title="味千拉面（港汇店）[快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/wei-qian-la-mian-gang-hui-dian-kuai-dian-song/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/12356?v=1411863932" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/wei-qian-la-mian-gang-hui-dian-kuai-dian-song/menu/?gid=602341">味千拉面（港汇店）[快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售57单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:13px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">味千拉面（港汇店）[快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="12356"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="26"
                                    class="restaurant-item fl c_cantonese c_all p_all p_341   "
                                    data-price='30' data-count="209" data-title="新旺茶餐厅（虹桥路店）[快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xin-wang-cha-can-ting-hong-qiao-lu-dian-kuai/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/12438?v=1411862224" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xin-wang-cha-can-ting-hong-qiao-lu-dian-kuai/menu/?gid=602341">新旺茶餐厅（虹桥路店）[快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售209单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">新旺茶餐厅（虹桥路店）[快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="12438"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="27"
                                    class="restaurant-item fl c_western c_all p_all p_341   "
                                    data-price='30' data-count="193" data-title="萨莉亚（天钥桥路店）[快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/sa-li-ya-tian-yue-qiao-lu-dian-kuai-dian-song/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/12453?v=1411861683" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/sa-li-ya-tian-yue-qiao-lu-dian-kuai-dian-song/menu/?gid=602341">萨莉亚（天钥桥路店）[快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售193单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:39px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">萨莉亚（天钥桥路店）[快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="12453"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="28"
                                    class="restaurant-item fl c_cantonese c_all p_all p_341   "
                                    data-price='30' data-count="72" data-title="翠华餐厅（日月光广场店）[快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/cui-hua-can-ting-ri-yue-guang-guang-chang-dia/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/12529?v=1411862219" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/cui-hua-can-ting-ri-yue-guang-guang-chang-dia/menu/?gid=602341">翠华餐厅（日月光广场店）[快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售72单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">翠华餐厅（日月光广场店）[快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="12529"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="29"
                                    class="restaurant-item fl c_cantonese c_all p_all p_341   "
                                    data-price='30' data-count="64" data-title="翠华餐厅(永新坊店）[快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/cui-hua-can-ting-yong-xin-fang-dian-kuai-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/12532?v=1411862325" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/cui-hua-can-ting-yong-xin-fang-dian-kuai-dian/menu/?gid=602341">翠华餐厅(永新坊店）[快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售64单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">翠华餐厅(永新坊店）[快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="12532"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="30"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352 p_42  p_online fee"
                                    data-price='15' data-count="625" data-title="龙文桂林米粉（南丹东路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/long-wen-gui-lin-mi-fen-nan-dan-dong-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/13830?v=1418075323" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/long-wen-gui-lin-mi-fen-nan-dan-dong-lu/menu/?gid=602341">龙文桂林米粉（南丹东路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售625单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>15元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">龙文桂林米粉（南丹东路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="13830"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="31"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_42  p_online fee"
                                    data-price='50' data-count="105" data-title="绝味鸭脖（安顺路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/jue-wei-ya-bo-an-shun-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/16610?v=1415677765" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/jue-wei-ya-bo-an-shun-lu-dian/menu/?gid=602341">绝味鸭脖（安顺路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售105单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">绝味鸭脖（安顺路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="16610"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="32"
                                    class="restaurant-item fl c_cantonese c_all p_all p_341   "
                                    data-price='50' data-count="39" data-title="鹿港小镇（港汇店）【快点送】">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/lu-gang-xiao-zhen-gang-hui-dian-kuai-dian-son/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/23162?v=1425413476" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/lu-gang-xiao-zhen-gang-hui-dian-kuai-dian-son/menu/?gid=602341">鹿港小镇（港汇店）【快点送】</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售39单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">鹿港小镇（港汇店）【快点送】</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="23162"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="33"
                                    class="restaurant-item fl c_cantonese c_all p_all p_341   "
                                    data-price='50' data-count="25" data-title="鹿港小镇（龙之梦店）【饭点】">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/lu-gang-xiao-zhen-long-zhi-meng-dian-fan-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/23165?v=1425413438" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/lu-gang-xiao-zhen-long-zhi-meng-dian-fan-dian/menu/?gid=602341">鹿港小镇（龙之梦店）【饭点】</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售25单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:13px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">鹿港小镇（龙之梦店）【饭点】</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="23165"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="34"
                                    class="restaurant-item fl c_western c_all p_all p_341   "
                                    data-price='50' data-count="5" data-title="沃歌斯(港汇店)  【饭点】">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/wo-ge-si-gang-hui-dian-fan-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/23294?v=1425513668" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/wo-ge-si-gang-hui-dian-fan-dian/menu/?gid=602341">沃歌斯(港汇店)  【饭点】</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售5单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">沃歌斯(港汇店)  【饭点】</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="23294"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="35"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='40' data-count="810" data-title="星期一便当 (建国西路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xing-qi-yi-bian-dang-jian-guo-xi-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1552?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xing-qi-yi-bian-dang-jian-guo-xi-lu-dian/menu/?gid=602341">星期一便当 (建国西路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售810单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">星期一便当 (建国西路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-19:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1552"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="36"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all  p_online fee"
                                    data-price='20' data-count="3612" data-title="mini咖喱饭 (徐汇店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/m-i-n-i-ka-li-fan-xu-hui-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1990?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/m-i-n-i-ka-li-fan-xu-hui-dian/menu/?gid=602341">Mini咖喱饭 (徐汇店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售3612单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">Mini咖喱饭 (徐汇店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1990"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="37"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42  p_online fee"
                                    data-price='50' data-count="618" data-title="米粉世家 (枫林路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/mi-fen-shi-jia-feng-lin-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2455?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/mi-fen-shi-jia-feng-lin-lu-dian/menu/?gid=602341">米粉世家 (枫林路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售618单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">米粉世家 (枫林路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2455"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="38"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all p_42   fee"
                                    data-price='100' data-count="876" data-title="哈尔滨刘记饺子粥馆">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ha-er-bin-liu-ji-jiao-zi-zhou-guan/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2521?v=1404859710" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ha-er-bin-liu-ji-jiao-zi-zhou-guan/menu/?gid=602341">哈尔滨刘记饺子粥馆</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售876单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>100元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">哈尔滨刘记饺子粥馆</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2521"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="39"
                                    class="restaurant-item fl c_cantonese c_all p_all p_341   "
                                    data-price='30' data-count="329" data-title="查餐厅 (永新坊店) [快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/cha-can-ting-yong-xin-fang-dian-kuai-dian-son/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2842?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/cha-can-ting-yong-xin-fang-dian-kuai-dian-son/menu/?gid=602341">查餐厅 (永新坊店) [快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售329单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">查餐厅 (永新坊店) [快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:30-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2842"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="40"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_356 p_352 p_42  p_online fee"
                                    data-price='40' data-count="826" data-title="联友餐厅">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/lian-you-can-ting/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2847?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/lian-you-can-ting/menu/?gid=602341">联友餐厅</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售826单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">联友餐厅</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-14:00, 15:00-18:15]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2847"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="41"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_341   "
                                    data-price='30' data-count="407" data-title="小杨生煎 (星游城店) [快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/XiaoYangShengJianXingYouChengDian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/3057?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/XiaoYangShengJianXingYouChengDian/menu/?gid=602341">小杨生煎 (星游城店) [快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售407单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">小杨生煎 (星游城店) [快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3057"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="42"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42 p_coupon  fee"
                                    data-price='15' data-count="620" data-title="朋友圈桂林米粉(零陵路)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/peng-you-quan-gui-lin-mi-fen-ling-ling-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/5707?v=1407886933" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/peng-you-quan-gui-lin-mi-fen-ling-ling-lu/menu/?gid=602341">朋友圈桂林米粉(零陵路)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售620单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>15元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">朋友圈桂林米粉(零陵路)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:30]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="5707"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="43"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_352  p_online fee"
                                    data-price='30' data-count="109" data-title="奶茶大帝（番禹路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/nai-cha-da-di-fan-yu-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/8942?v=1408570784" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/nai-cha-da-di-fan-yu-lu/menu/?gid=602341">奶茶大帝（番禹路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售109单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">奶茶大帝（番禹路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="8942"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="44"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_341   "
                                    data-price='30' data-count="125" data-title="满记甜品（港汇店）[快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/man-ji-tian-pin-gang-hui-dian-kuai-dian-song/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/12380?v=1411861665" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/man-ji-tian-pin-gang-hui-dian-kuai-dian-song/menu/?gid=602341">满记甜品（港汇店）[快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售125单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">满记甜品（港汇店）[快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="12380"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="45"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_341   "
                                    data-price='30' data-count="176" data-title="满记甜品(徐家汇路店)[快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/man-ji-tian-pin-xu-jia-hui-lu-dian-kuai-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/12385?v=1411861811" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/man-ji-tian-pin-xu-jia-hui-lu-dian-kuai-dian/menu/?gid=602341">满记甜品(徐家汇路店)[快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售176单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">满记甜品(徐家汇路店)[快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="12385"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="46"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_341   "
                                    data-price='30' data-count="98" data-title="满记甜品（星游城店）[快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/man-ji-tian-pin-xing-you-cheng-dian-kuai-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/12386?v=1411861822" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/man-ji-tian-pin-xing-you-cheng-dian-kuai-dian/menu/?gid=602341">满记甜品（星游城店）[快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售98单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">满记甜品（星游城店）[快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="12386"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="47"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_341   "
                                    data-price='80' data-count="67" data-title="振鼎鸡（天钥桥路店）【快点送】">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/zhen-ding-ji-tian-yue-qiao-lu-dian-kuai-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/16549?v=1415743578" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/zhen-ding-ji-tian-yue-qiao-lu-dian-kuai-dian/menu/?gid=602341">振鼎鸡（天钥桥路店）【快点送】</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售67单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:39px"></div>
                                            </dd>
                                        </dl>
                                        <p>80元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">振鼎鸡（天钥桥路店）【快点送】</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-17:45]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="16549"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="48"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_352 p_42   fee"
                                    data-price='20' data-count="75" data-title="茶尚茶">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/cha-shang-cha/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/21919?v=1421790341" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/cha-shang-cha/menu/?gid=602341">茶尚茶</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售75单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">茶尚茶</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="21919"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="49"
                                    class="restaurant-item fl c_cantonese c_all p_all p_341   "
                                    data-price='50' data-count="10" data-title="衡山小馆（衡山店）【快点送】">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/heng-shan-xiao-guan-heng-shan-dian-kuai-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/23160?v=1425413532" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/heng-shan-xiao-guan-heng-shan-dian-kuai-dian/menu/?gid=602341">衡山小馆（衡山店）【快点送】</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售10单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">衡山小馆（衡山店）【快点送】</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="23160"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="50"
                                    class="restaurant-item fl c_cantonese c_all p_all p_341   "
                                    data-price='50' data-count="6" data-title="衡山小馆（斜土路店)【快点送】">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/heng-shan-xiao-guan-xie-tu-lu-dian-kuai-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/23161?v=1425413521" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/heng-shan-xiao-guan-xie-tu-lu-dian-kuai-dian/menu/?gid=602341">衡山小馆（斜土路店)【快点送】</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售6单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">衡山小馆（斜土路店)【快点送】</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="23161"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="51"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_341   "
                                    data-price='30' data-count="61" data-title="振鼎鸡（小木桥路店）【饭点】">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/zhen-ding-ji-xiao-mu-qiao-lu-dian-fan-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/23185?v=1425402165" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/zhen-ding-ji-xiao-mu-qiao-lu-dian-fan-dian/menu/?gid=602341">振鼎鸡（小木桥路店）【饭点】</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售61单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">振鼎鸡（小木桥路店）【饭点】</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-19:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="23185"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="52"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_356 p_352 p_42   fee"
                                    data-price='30' data-count="691" data-title="日月便当">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ri-yue-bian-dang/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/990?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ri-yue-bian-dang/menu/?gid=602341">日月便当</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售691单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">日月便当</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="990"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="53"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352 p_42  p_online fee"
                                    data-price='35' data-count="608" data-title="湘菜霸">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xiang-cai-ba/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/3778?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xiang-cai-ba/menu/?gid=602341">湘菜霸</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售608单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>35元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">湘菜霸</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-13:30, 16:00-19:30]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3778"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="54"
                                    class="restaurant-item fl c_drink-snack c_all p_all  p_online fee"
                                    data-price='50' data-count="138" data-title="屌丝奶茶(南京西路)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/diao-si-nai-cha-nan-jing-xi-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/5087?v=1404335942" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/diao-si-nai-cha-nan-jing-xi-lu/menu/?gid=602341">屌丝奶茶(南京西路)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售138单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">屌丝奶茶(南京西路)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="5087"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="55"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_356  p_online fee"
                                    data-price='30' data-count="254" data-title="避风塘小吃-老北京卤肉卷">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/bi-feng-tang-xiao-chi-lao-bei-jing-lu-rou-jua/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/5169?v=1404675923" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/bi-feng-tang-xiao-chi-lao-bei-jing-lu-rou-jua/menu/?gid=602341">避风塘小吃-老北京卤肉卷</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售254单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">避风塘小吃-老北京卤肉卷</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:45]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="5169"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="56"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_356 p_352 p_42   fee"
                                    data-price='60' data-count="747" data-title="魔锅坊麻辣香锅">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/mo-guo-fang-ma-la-xiang-guo/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/18811?v=1418668153" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/mo-guo-fang-ma-la-xiang-guo/menu/?gid=602341">魔锅坊麻辣香锅</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售747单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>60元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">魔锅坊麻辣香锅</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [00:00-04:00, 10:00-23:59]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="18811"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="57"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_coupon  fee"
                                    data-price='30' data-count="52" data-title="永义家常菜馆">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/yong-yi-jia-chang-cai-guan/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22010?v=1422417302" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/yong-yi-jia-chang-cai-guan/menu/?gid=602341">永义家常菜馆</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售52单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">永义家常菜馆</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22010"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="58"
                                    class="restaurant-item fl c_western c_all p_all   "
                                    data-price='50' data-count="36" data-title="【特惠】百世达（美罗城店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/te-hui-bai-shi-da-mei-luo-cheng-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/12123?v=1411864122" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/te-hui-bai-shi-da-mei-luo-cheng-dian/menu/?gid=602341">【特惠】百世达（美罗城店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售36单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 5元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">【特惠】百世达（美罗城店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="12123"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="59"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all p_42   fee"
                                    data-price='20' data-count="490" data-title="兰州牛肉拉面（零陵路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/lan-zhou-niu-rou-la-mian-ling-ling-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/5720?v=1418075129" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/lan-zhou-niu-rou-la-mian-ling-ling-lu-dian/menu/?gid=602341">兰州牛肉拉面（零陵路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售490单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">兰州牛肉拉面（零陵路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-11:30, 14:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="5720"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="60"
                                    class="restaurant-item fl c_drink-snack c_all p_all  p_online fee"
                                    data-price='178' data-count="166" data-title="水果工坊（蟠龙路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/shui-guo-gong-fang-pan-long-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/16449?v=1415600133" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/shui-guo-gong-fang-pan-long-lu-dian/menu/?gid=602341">水果工坊（蟠龙路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售166单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>178元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">水果工坊（蟠龙路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="16449"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="61"
                                    class="restaurant-item fl c_japan-korea c_all p_all p_341   "
                                    data-price='30' data-count="38" data-title="食其家（星游城店）【快点送】">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/shi-qi-jia-xing-you-cheng-dian-kuai-dian-song/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/20044?v=1419465224" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/shi-qi-jia-xing-you-cheng-dian-kuai-dian-song/menu/?gid=602341">食其家（星游城店）【快点送】</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售38单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">日韩料理</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">食其家（星游城店）【快点送】</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="20044"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="62"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_42   fee"
                                    data-price='40' data-count="53" data-title="超级鸡车（光启城店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/chao-ji-ji-che-guang-qi-cheng-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/24064?v=1428384862" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/chao-ji-ji-che-guang-qi-cheng-dian/menu/?gid=602341">超级鸡车（光启城店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售53单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">超级鸡车（光启城店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-19:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="24064"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="63"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='30' data-count="11" data-title="珍辣味麻辣捞汤（万体馆）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/zhen-la-wei-ma-la-lao-tang-wan-ti-guan/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/24333?v=1427826709" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/zhen-la-wei-ma-la-lao-tang-wan-ti-guan/menu/?gid=602341">珍辣味麻辣捞汤（万体馆）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售11单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">珍辣味麻辣捞汤（万体馆）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="24333"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="64"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_coupon  fee"
                                    data-price='20' data-count="31" data-title="鼎鼎香黄焖鸡米饭（零陵路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ding-ding-xiang-huang-men-ji-mi-fan-ling-ling/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/25018?v=1428912060" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ding-ding-xiang-huang-men-ji-mi-fan-ling-ling/menu/?gid=602341">鼎鼎香黄焖鸡米饭（零陵路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售31单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">鼎鼎香黄焖鸡米饭（零陵路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="25018"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="65"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='100' data-count="917" data-title="千秋膳房（漕溪北路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/qian-qiu-shan-fang-cao-xi-bei-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2284?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/qian-qiu-shan-fang-cao-xi-bei-lu-dian/menu/?gid=602341">千秋膳房（漕溪北路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售917单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>100元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">千秋膳房（漕溪北路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-14:00, 16:00-20:15]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2284"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="66"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_356 p_352  p_online fee"
                                    data-price='20' data-count="119" data-title="鼎鼎香黄焖鸡米饭">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ding-ding-xiang-huang-men-ji-mi-fan/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/24552?v=1428791367" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ding-ding-xiang-huang-men-ji-mi-fan/menu/?gid=602341">鼎鼎香黄焖鸡米饭</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售119单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">鼎鼎香黄焖鸡米饭</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="24552"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="67"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_42   fee"
                                    data-price='30' data-count="1433" data-title="豪大大鸡排 (东安店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/hao-da-da-ji-pai-dong-an-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2440?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/hao-da-da-ji-pai-dong-an-dian/menu/?gid=602341">豪大大鸡排 (东安店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1433单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">豪大大鸡排 (东安店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2440"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="68"
                                    class="restaurant-item fl c_drink-snack c_all p_all  p_online fee"
                                    data-price='35' data-count="824" data-title="避风塘 (宜山路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/bi-feng-tang-yi-shan-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/4478?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/bi-feng-tang-yi-shan-lu-dian/menu/?gid=602341">避风塘 (宜山路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售824单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>35元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">避风塘 (宜山路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:45]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4478"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="69"
                                    class="restaurant-item fl c_western c_all p_all p_356 p_42   "
                                    data-price='0' data-count="262" data-title="赛百味（光启城）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/sai-bai-wei-guang-qi-cheng/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/8876?v=1410461317" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/sai-bai-wei-guang-qi-cheng/menu/?gid=602341">赛百味（光启城）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售262单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>0元起送 7元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">赛百味（光启城）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="8876"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="70"
                                    class="restaurant-item fl c_pizza c_all p_all p_coupon  "
                                    data-price='0' data-count="222" data-title="百特喜意式休闲餐厅">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/bai-te-xi-yi-shi-xiu-xian-can-ting/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/3840?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/bai-te-xi-yi-shi-xiu-xian-can-ting/menu/?gid=602341">百特喜意式休闲餐厅</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售222单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>0元起送 5元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">匹萨</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">百特喜意式休闲餐厅</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3840"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="71"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42  p_online fee"
                                    data-price='60' data-count="476" data-title="湘里农家菜">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xiang-li-nong-jia-cai/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/3866?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xiang-li-nong-jia-cai/menu/?gid=602341">湘里农家菜</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售476单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>60元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">湘里农家菜</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-14:00, 16:30-21:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3866"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="72"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='25' data-count="1649" data-title="避风塘·粮全其美手抓饼">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/bi-feng-tang-liang-quan-qi-mei-shou-zhua-bing/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/4010?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/bi-feng-tang-liang-quan-qi-mei-shou-zhua-bing/menu/?gid=602341">避风塘·粮全其美手抓饼</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1649单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>25元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">避风塘·粮全其美手抓饼</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:59]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4010"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="73"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_coupon p_online fee"
                                    data-price='50' data-count="118" data-title="张记烧烤店">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/zhang-ji-shao-kao-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/13485?v=1418354832" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/zhang-ji-shao-kao-dian/menu/?gid=602341">张记烧烤店</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售118单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">张记烧烤店</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [17:00-23:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="13485"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="74"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='20' data-count="136" data-title="沙县小吃（斜土路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/sha-xian-xiao-chi-xie-tu-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/16721?v=1415816174" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/sha-xian-xiao-chi-xie-tu-lu/menu/?gid=602341">沙县小吃（斜土路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售136单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">沙县小吃（斜土路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="16721"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="75"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='20' data-count="175" data-title="正阳拉面馆(宜山路)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/zheng-yang-la-mian-guan-yi-shan-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/5638?v=1404848569" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/zheng-yang-la-mian-guan-yi-shan-lu/menu/?gid=602341">正阳拉面馆(宜山路)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售175单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">正阳拉面馆(宜山路)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="5638"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="76"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_42   fee"
                                    data-price='40' data-count="717" data-title="超级鸡车（天钥桥路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/chao-ji-ji-che-tian-yue-qiao-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/5715?v=1406499172" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/chao-ji-ji-che-tian-yue-qiao-lu-dian/menu/?gid=602341">超级鸡车（天钥桥路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售717单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">超级鸡车（天钥桥路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="5715"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="77"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352   fee"
                                    data-price='20' data-count="143" data-title="长生源粥店（徐家汇店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/chang-sheng-yuan-zhou-dian-xu-jia-hui-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/11437?v=1418073840" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/chang-sheng-yuan-zhou-dian-xu-jia-hui-dian/menu/?gid=602341">长生源粥店（徐家汇店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售143单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">长生源粥店（徐家汇店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="11437"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="78"
                                    class="restaurant-item fl c_cantonese c_all p_all   fee"
                                    data-price='25' data-count="780" data-title="福荣祥烧腊 (斜土路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/fu-rong-xiang-shao-la-xie-tu-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/701?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/fu-rong-xiang-shao-la-xie-tu-lu-dian/menu/?gid=602341">福荣祥烧腊 (斜土路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售780单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>25元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">福荣祥烧腊 (斜土路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-18:25]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="701"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="79"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42   fee"
                                    data-price='25' data-count="651" data-title="心一代 (天钥桥路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xin-yi-dai-tian-yue-qiao-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1952?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xin-yi-dai-tian-yue-qiao-lu-dian/menu/?gid=602341">心一代 (天钥桥路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售651单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>25元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">心一代 (天钥桥路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1952"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="80"
                                    class="restaurant-item fl c_western c_all p_all   "
                                    data-price='0' data-count="1084" data-title="赛百味 (永新坊店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/sai-bai-wei-yong-xin-fang-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1966?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/sai-bai-wei-yong-xin-fang-dian/menu/?gid=602341">赛百味 (永新坊店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1084单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>0元起送 7元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">赛百味 (永新坊店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1966"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="81"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='30' data-count="545" data-title="咸肉菜饭骨头汤 (吴中东路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xian-rou-cai-fan-gu-tou-tang-wu-zhong-dong-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/3878?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xian-rou-cai-fan-gu-tou-tang-wu-zhong-dong-lu/menu/?gid=602341">咸肉菜饭骨头汤 (吴中东路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售545单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">咸肉菜饭骨头汤 (吴中东路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3878"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="82"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='25' data-count="1043" data-title="重庆麻辣烫 (南丹路)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/zhong-qing-ma-la-tang-nan-dan-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/4112?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/zhong-qing-ma-la-tang-nan-dan-lu/menu/?gid=602341">重庆麻辣烫 (南丹路)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1043单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>25元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">重庆麻辣烫 (南丹路)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:39]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4112"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="83"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='20' data-count="1530" data-title="阳阳食府麻辣烫">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/yang-yang-shi-fu-ma-la-tang/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/4120?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/yang-yang-shi-fu-ma-la-tang/menu/?gid=602341">阳阳食府麻辣烫</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1530单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">阳阳食府麻辣烫</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [00:00-02:00, 10:30-23:59]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4120"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="84"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_356 p_42   fee"
                                    data-price='30' data-count="886" data-title="台湾牛肉馆">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/tai-wan-niu-rou-guan/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/11460?v=1418075737" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/tai-wan-niu-rou-guan/menu/?gid=602341">台湾牛肉馆</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售886单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">台湾牛肉馆</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:45]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="11460"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="85"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_354   fee"
                                    data-price='50' data-count="362" data-title="久久丫鸭颈王 (番禺路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/jiu-jiu-ya-ya-jing-wang-fan-yu-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2835?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/jiu-jiu-ya-ya-jing-wang-fan-yu-lu-dian/menu/?gid=602341">久久丫鸭颈王 (番禺路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售362单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FmBwiaLjUXTsn667c8UqkOVzkKIh?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">久久丫鸭颈王 (番禺路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FmBwiaLjUXTsn667c8UqkOVzkKIh?imageView2/1/w/15/h/15/" alt="" /><span>每个订单送2罐三得利清爽啤酒！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2835"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="86"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_341   "
                                    data-price='30' data-count="96" data-title="快乐柠檬 (天钥桥路店) [快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/HappyLemonTianYaoQiaoRd/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/3066?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/HappyLemonTianYaoQiaoRd/menu/?gid=602341">快乐柠檬 (天钥桥路店) [快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售96单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">快乐柠檬 (天钥桥路店) [快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3066"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="87"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='20' data-count="376" data-title="福建沙县营养小吃 (斜土店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/fu-jian-sha-xian-ying-yang-xiao-chi-xie-tu-di/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/4718?v=1418074018" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/fu-jian-sha-xian-ying-yang-xiao-chi-xie-tu-di/menu/?gid=602341">福建沙县营养小吃 (斜土店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售376单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">福建沙县营养小吃 (斜土店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4718"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="88"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_42   fee"
                                    data-price='180' data-count="143" data-title="[送可口可乐][付]绝味鸭脖(航东路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/song-ke-kou-ke-le-fu-jue-wei-ya-bo-hang-dong/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/9138?v=1410311447" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/song-ke-kou-ke-le-fu-jue-wei-ya-bo-hang-dong/menu/?gid=602341">[送可口可乐][付]绝味鸭脖(航东路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售143单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>180元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">[送可口可乐][付]绝味鸭脖(航东路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:59]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="9138"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="89"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_42   fee"
                                    data-price='30' data-count="20" data-title="阿叔奶茶（天钥桥路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/a-shu-nai-cha-tian-yue-qiao-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/13778?v=1414451916" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/a-shu-nai-cha-tian-yue-qiao-lu/menu/?gid=602341">阿叔奶茶（天钥桥路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售20单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">阿叔奶茶（天钥桥路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-18:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="13778"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="90"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42 p_coupon  fee"
                                    data-price='50' data-count="72" data-title="新辉（香港）茶餐厅">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xin-hui-xiang-gang-cha-can-ting/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/14537?v=1422933926" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xin-hui-xiang-gang-cha-can-ting/menu/?gid=602341">新辉（香港）茶餐厅</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售72单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">新辉（香港）茶餐厅</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-22:30]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="14537"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="91"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42  p_online fee"
                                    data-price='40' data-count="26" data-title="心琪粥店（零陵路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xin-qi-zhou-dian-ling-ling-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/19635?v=1422417062" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xin-qi-zhou-dian-ling-ling-lu-dian/menu/?gid=602341">心琪粥店（零陵路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售26单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">心琪粥店（零陵路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="19635"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="92"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='60' data-count="14" data-title="唐记水果百货商店（酒另算）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/tang-ji-shui-guo-bai-huo-shang-dian-jiu-ling/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/19685?v=1419379301" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/tang-ji-shui-guo-bai-huo-shang-dian-jiu-ling/menu/?gid=602341">唐记水果百货商店（酒另算）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售14单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>60元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">唐记水果百货商店（酒另算）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="19685"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="93"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='30' data-count="77" data-title="何记秘制花甲（乐山店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/he-ji-mi-zhi-hua-jia-le-shan-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22008?v=1420669225" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/he-ji-mi-zhi-hua-jia-le-shan-dian/menu/?gid=602341">何记秘制花甲（乐山店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售77单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">何记秘制花甲（乐山店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [12:00-23:45]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22008"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="94"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='30' data-count="35" data-title="雄记桂林米粉（建国西路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xiong-ji-gui-lin-mi-fen-jian-guo-xi-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22205?v=1425452936" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xiong-ji-gui-lin-mi-fen-jian-guo-xi-lu-dian/menu/?gid=602341">雄记桂林米粉（建国西路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售35单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">雄记桂林米粉（建国西路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22205"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="95"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_356  p_online fee"
                                    data-price='15' data-count="25" data-title="生记三鲜粉煲仔饭">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/sheng-ji-san-xian-fen-bao-zi-fan-1/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/24542?v=1428364284" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/sheng-ji-san-xian-fen-bao-zi-fan-1/menu/?gid=602341">生记三鲜粉煲仔饭</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售25单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>15元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">生记三鲜粉煲仔饭</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="24542"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="96"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_42   fee"
                                    data-price='25' data-count="10" data-title="熙亥独排">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xi-hai-du-pai/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/9246?v=1409514656" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xi-hai-du-pai/menu/?gid=602341">熙亥独排</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售10单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>25元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">熙亥独排</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="9246"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="97"
                                    class="restaurant-item fl c_japan-korea c_all p_all p_coupon  fee"
                                    data-price='80' data-count="189" data-title="秋叶寿司">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/qiu-ye-shou-si/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/16387?v=1414946668" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/qiu-ye-shou-si/menu/?gid=602341">秋叶寿司</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售189单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>80元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">日韩料理</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">秋叶寿司</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-14:00, 17:00-23:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="16387"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="98"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='30' data-count="106" data-title="徽州特色菜饭馆 (建国西路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/hui-zhou-te-se-cai-fan-guan-jian-guo-xi-lu-di/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1455?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/hui-zhou-te-se-cai-fan-guan-jian-guo-xi-lu-di/menu/?gid=602341">徽州特色菜饭馆 (建国西路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售106单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">徽州特色菜饭馆 (建国西路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-21:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1455"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="99"
                                    class="restaurant-item fl c_pizza c_all p_all p_352 p_42  p_online fee"
                                    data-price='40' data-count="625" data-title="番茄地带（pizza）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/fan-qie-di-dai-p-i-z-z-a/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1861?v=1421652756" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/fan-qie-di-dai-p-i-z-z-a/menu/?gid=602341">番茄地带（pizza）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售625单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">匹萨</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">番茄地带（pizza）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:30]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1861"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="100"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='20' data-count="423" data-title="黄山菜饭骨头汤（广元路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/huang-shan-cai-fan-gu-tou-tang-guang-yuan-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/9777?v=1410217584" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/huang-shan-cai-fan-gu-tou-tang-guang-yuan-lu/menu/?gid=602341">黄山菜饭骨头汤（广元路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售423单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">黄山菜饭骨头汤（广元路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="9777"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="101"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='30' data-count="741" data-title="青月便当 (徐汇店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/qing-yue-bian-dang-xu-hui-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2504?v=1409531121" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/qing-yue-bian-dang-xu-hui-dian/menu/?gid=602341">青月便当 (徐汇店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售741单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">青月便当 (徐汇店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-13:30, 16:00-19:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2504"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="102"
                                    class="restaurant-item fl c_western c_all p_all p_42  p_online fee"
                                    data-price='25' data-count="133" data-title="咖喱皇后（虹桥路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ka-li-huang-hou-hong-qiao-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/17023?v=1418103869" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ka-li-huang-hou-hong-qiao-lu-dian/menu/?gid=602341">咖喱皇后（虹桥路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售133单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>25元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">咖喱皇后（虹桥路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="17023"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="103"
                                    class="restaurant-item fl c_pizza c_all p_all   fee"
                                    data-price='40' data-count="47" data-title="糖汇甜品比萨简餐">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/tang-hui-tian-pin-bi-sa-jian-can/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/19533?v=1422211182" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/tang-hui-tian-pin-bi-sa-jian-can/menu/?gid=602341">糖汇甜品比萨简餐</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售47单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">匹萨</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">糖汇甜品比萨简餐</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-23:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="19533"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="104"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42   fee"
                                    data-price='40' data-count="937" data-title="古宜粥店">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/gu-yi-zhou-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1129?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/gu-yi-zhou-dian/menu/?gid=602341">古宜粥店</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售937单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">古宜粥店</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1129"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="105"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all  p_online fee"
                                    data-price='50' data-count="2328" data-title="川湘小厨">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/chuan-xiang-xiao-chu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2237?v=1404338573" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/chuan-xiang-xiao-chu/menu/?gid=602341">川湘小厨</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售2328单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">川湘小厨</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2237"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="106"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_352  p_online fee"
                                    data-price='40' data-count="716" data-title="粥艺坊">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/zhou-yi-fang/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2689?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/zhou-yi-fang/menu/?gid=602341">粥艺坊</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售716单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">粥艺坊</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2689"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="107"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='25' data-count="73" data-title="精品牛肉面（零陵路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/jing-pin-niu-rou-mian-ling-ling-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/10603?v=1410222580" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/jing-pin-niu-rou-mian-ling-ling-lu/menu/?gid=602341">精品牛肉面（零陵路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售73单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>25元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">精品牛肉面（零陵路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-11:30, 12:30-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="10603"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="108"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='50' data-count="505" data-title="1930私房菜">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/1-9-3-0-si-fang-cai/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2332?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/1-9-3-0-si-fang-cai/menu/?gid=602341">1930私房菜</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售505单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">1930私房菜</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-14:00, 16:30-21:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2332"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="109"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='40' data-count="35" data-title="久久丫 (徐家汇店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/jiu-jiu-ya-xu-jia-hui-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/4795?v=1402873818" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/jiu-jiu-ya-xu-jia-hui-dian/menu/?gid=602341">久久丫 (徐家汇店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售35单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">久久丫 (徐家汇店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4795"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="110"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42   fee"
                                    data-price='20' data-count="469" data-title="天下第一皮（宛平南路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/tian-xia-di-yi-pi-wan-ping-nan-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/13821?v=1418075755" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/tian-xia-di-yi-pi-wan-ping-nan-lu/menu/?gid=602341">天下第一皮（宛平南路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售469单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">天下第一皮（宛平南路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="13821"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="111"
                                    class="restaurant-item fl c_japan-korea c_all p_all p_341   "
                                    data-price='30' data-count="25" data-title="食其家（广元西路店）【快点送】">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/shi-qi-jia-guang-yuan-xi-lu-dian-kuai-dian-so/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/20043?v=1419465383" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/shi-qi-jia-guang-yuan-xi-lu-dian-kuai-dian-so/menu/?gid=602341">食其家（广元西路店）【快点送】</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售25单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">日韩料理</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">食其家（广元西路店）【快点送】</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="20043"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="112"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352 p_42  p_online fee"
                                    data-price='20' data-count="323" data-title="鑫怡川味食府 (凯进路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xin-yi-chuan-wei-shi-fu-kai-jin-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1087?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xin-yi-chuan-wei-shi-fu-kai-jin-lu-dian/menu/?gid=602341">鑫怡川味食府 (凯进路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售323单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">鑫怡川味食府 (凯进路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-13:00, 16:00-19:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1087"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="113"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='30' data-count="507" data-title="煲宝仔 (天钥桥路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/bao-bao-zi-tian-yue-qiao-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1150?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/bao-bao-zi-tian-yue-qiao-lu-dian/menu/?gid=602341">煲宝仔 (天钥桥路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售507单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">煲宝仔 (天钥桥路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1150"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="114"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42   fee"
                                    data-price='20' data-count="872" data-title="雄记桂林米粉">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xiong-ji-gui-lin-mi-fen/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1346?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xiong-ji-gui-lin-mi-fen/menu/?gid=602341">雄记桂林米粉</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售872单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">雄记桂林米粉</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:45]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1346"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="115"
                                    class="restaurant-item fl c_cantonese c_all p_all p_42   fee"
                                    data-price='30' data-count="1379" data-title="刘记广东煲仔饭">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/liu-ji-guang-dong-bao-zi-fan/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1774?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/liu-ji-guang-dong-bao-zi-fan/menu/?gid=602341">刘记广东煲仔饭</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1379单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">刘记广东煲仔饭</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1774"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="116"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='39' data-count="284" data-title="关东情">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/guan-dong-qing/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1777?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/guan-dong-qing/menu/?gid=602341">关东情</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售284单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>39元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">关东情</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1777"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="117"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42 p_coupon  fee"
                                    data-price='25' data-count="543" data-title="心一代 (南丹店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xin-yi-dai-nan-dan-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1953?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xin-yi-dai-nan-dan-dian/menu/?gid=602341">心一代 (南丹店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售543单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>25元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">心一代 (南丹店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:30]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1953"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="118"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='30' data-count="961" data-title="继光香香鸡 (天钥桥路2号店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ji-guang-xiang-xiang-ji-tian-yue-qiao-lu-2-ha/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2113?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ji-guang-xiang-xiang-ji-tian-yue-qiao-lu-2-ha/menu/?gid=602341">继光香香鸡 (天钥桥路2号店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售961单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">继光香香鸡 (天钥桥路2号店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2113"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="119"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='15' data-count="417" data-title="康味桂林米粉 (徐汇店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/kang-wei-gui-lin-mi-fen-xu-hui-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2204?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/kang-wei-gui-lin-mi-fen-xu-hui-dian/menu/?gid=602341">康味桂林米粉 (徐汇店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售417单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>15元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">康味桂林米粉 (徐汇店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2204"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="120"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42  p_online fee"
                                    data-price='20' data-count="414" data-title="花溪王牛肉米粉店">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/hua-xi-wang-niu-rou-mi-fen-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2526?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/hua-xi-wang-niu-rou-mi-fen-dian/menu/?gid=602341">花溪王牛肉米粉店</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售414单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">花溪王牛肉米粉店</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-14:00, 16:00-19:30]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2526"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="121"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42  p_online fee"
                                    data-price='20' data-count="560" data-title="东北风味（凯进路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/dong-bei-feng-wei-kai-jin-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2640?v=1406575827" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/dong-bei-feng-wei-kai-jin-lu-dian/menu/?gid=602341">东北风味（凯进路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售560单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">东北风味（凯进路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-13:30, 16:00-19:30]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2640"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="122"
                                    class="restaurant-item fl c_drink-snack c_all p_all  p_online fee"
                                    data-price='30' data-count="550" data-title="屌丝奶茶店">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/diao-si-nai-cha-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/3141?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/diao-si-nai-cha-dian/menu/?gid=602341">屌丝奶茶店</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售550单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">屌丝奶茶店</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3141"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="123"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='30' data-count="373" data-title="徽湘情（凯旋路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/hui-xiang-qing-kai-xuan-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/3187?v=1411620907" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/hui-xiang-qing-kai-xuan-lu-dian/menu/?gid=602341">徽湘情（凯旋路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售373单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">徽湘情（凯旋路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3187"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="124"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='40' data-count="335" data-title="汉堡屋 (番禺路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/han-bao-wu-fan-yu-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/4118?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/han-bao-wu-fan-yu-lu-dian/menu/?gid=602341">汉堡屋 (番禺路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售335单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">汉堡屋 (番禺路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-23:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4118"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="125"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42 p_coupon  fee"
                                    data-price='20' data-count="93" data-title="南京汤包馆-麻辣烫">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/nan-jing-tang-bao-guan-ma-la-tang/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22206?v=1422208173" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/nan-jing-tang-bao-guan-ma-la-tang/menu/?gid=602341">南京汤包馆-麻辣烫</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售93单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">南京汤包馆-麻辣烫</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:59]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22206"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="126"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='25' data-count="1313" data-title="谷田稻香 (星游城店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/gu-tian-dao-xiang-xing-you-cheng-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1536?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/gu-tian-dao-xiang-xing-you-cheng-dian/menu/?gid=602341">谷田稻香 (星游城店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1313单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>25元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">谷田稻香 (星游城店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-13:00, 17:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1536"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="127"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42   fee"
                                    data-price='40' data-count="844" data-title="上海美食林">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/shang-hai-mei-shi-lin/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/1854?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/shang-hai-mei-shi-lin/menu/?gid=602341">上海美食林</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售844单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">上海美食林</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1854"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="128"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='50' data-count="222" data-title="甘味黑 (番禺路)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/gan-wei-hei-fan-yu-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/4632?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/gan-wei-hei-fan-yu-lu/menu/?gid=602341">甘味黑 (番禺路)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售222单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">甘味黑 (番禺路)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:45]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4632"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="129"
                                    class="restaurant-item fl c_sichuan c_all p_all p_42   fee"
                                    data-price='30' data-count="155" data-title="渝味麻辣烫（零陵路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/yu-wei-ma-la-tang-ling-ling-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/5697?v=1404932235" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/yu-wei-ma-la-tang-ling-ling-lu-dian/menu/?gid=602341">渝味麻辣烫（零陵路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售155单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:39px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">川菜</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">渝味麻辣烫（零陵路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="5697"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="130"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all  p_online fee"
                                    data-price='20' data-count="28" data-title="思川情麻辣烫(龙山新村)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/si-chuan-qing-ma-la-tang-long-shan-xin-cun/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/24438?v=1428354704" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/si-chuan-qing-ma-la-tang-long-shan-xin-cun/menu/?gid=602341">思川情麻辣烫(龙山新村)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售28单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">思川情麻辣烫(龙山新村)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="24438"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="131"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_coupon  fee"
                                    data-price='50' data-count="50" data-title="张记烧烤（番禺路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/zhang-ji-shao-kao-fan-yu-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/17811?v=1418354738" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/zhang-ji-shao-kao-fan-yu-lu-dian/menu/?gid=602341">张记烧烤（番禺路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售50单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">张记烧烤（番禺路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [17:00-23:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="17811"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="132"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_coupon  fee"
                                    data-price='30' data-count="272" data-title="日式喷汁炸鸡唐扬传 (定西路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ri-shi-pen-zhi-zha-ji-tang-yang-chuan-ding-xi/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/4651?v=1408320228" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ri-shi-pen-zhi-zha-ji-tang-yang-chuan-ding-xi/menu/?gid=602341">日式喷汁炸鸡唐扬传 (定西路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售272单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:39px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">日式喷汁炸鸡唐扬传 (定西路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4651"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="133"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='30' data-count="99" data-title="老鸭粉丝汤店（漕溪北路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/lao-ya-fen-si-tang-dian-cao-xi-bei-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/7930?v=1406483099" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/lao-ya-fen-si-tang-dian-cao-xi-bei-lu-dian/menu/?gid=602341">老鸭粉丝汤店（漕溪北路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售99单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">老鸭粉丝汤店（漕溪北路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="7930"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="134"
                                    class="restaurant-item fl c_western c_all p_all p_42   "
                                    data-price='0' data-count="49" data-title="赛百味（上海影城店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/sai-bai-wei-shang-hai-ying-cheng-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/21562?v=1419729110" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/sai-bai-wei-shang-hai-ying-cheng-dian/menu/?gid=602341">赛百味（上海影城店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售49单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>0元起送 7元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">赛百味（上海影城店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="21562"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="135"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='50' data-count="20" data-title="琛哥茶餐室">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/chen-ge-cha-can-shi/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/11008?v=1418075654" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/chen-ge-cha-can-shi/menu/?gid=602341">琛哥茶餐室</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售20单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">琛哥茶餐室</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-19:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="11008"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="136"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all p_42   "
                                    data-price='40' data-count="122" data-title="光头生煎">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/guang-tou-sheng-jian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/5686?v=1405460708" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/guang-tou-sheng-jian/menu/?gid=602341">光头生煎</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售122单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:39px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 3元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">光头生煎</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-19:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="5686"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="137"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='60' data-count="109" data-title="川湘聚">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/chuan-xiang-ju/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/3845?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/chuan-xiang-ju/menu/?gid=602341">川湘聚</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售109单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:39px"></div>
                                            </dd>
                                        </dl>
                                        <p>60元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">川湘聚</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-14:00, 15:30-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3845"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="138"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all   fee"
                                    data-price='14' data-count="68" data-title="酸辣粉小铺（漕溪北路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/suan-la-fen-xiao-pu-cao-xi-bei-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/13164?v=1413053023" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/suan-la-fen-xiao-pu-cao-xi-bei-lu/menu/?gid=602341">酸辣粉小铺（漕溪北路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售68单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:39px"></div>
                                            </dd>
                                        </dl>
                                        <p>14元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">酸辣粉小铺（漕溪北路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-23:45]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="13164"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="139"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42   fee"
                                    data-price='40' data-count="13" data-title="杨记咸肉菜饭（零陵路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/yang-ji-xian-rou-cai-fan-ling-ling-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/19633?v=1419440843" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/yang-ji-xian-rou-cai-fan-ling-ling-lu/menu/?gid=602341">杨记咸肉菜饭（零陵路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售13单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">杨记咸肉菜饭（零陵路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="19633"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="140"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_341   "
                                    data-price='30' data-count="136" data-title="大娘水饺 (天钥桥路店) [快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/daniangshuijiaotianyaoqiao/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/770?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/daniangshuijiaotianyaoqiao/menu/?gid=602341">大娘水饺 (天钥桥路店) [快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售136单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">大娘水饺 (天钥桥路店) [快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [12:30-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="770"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="141"
                                    class="restaurant-item fl c_drink-snack c_all p_all  p_online "
                                    data-price='80' data-count="131" data-title="哈哈镜 (人民广场总店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ha-ha-jing-ren-min-guang-chang-zong-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2909?v=1405286592" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ha-ha-jing-ren-min-guang-chang-zong-dian/menu/?gid=602341">哈哈镜 (人民广场总店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售131单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>80元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">哈哈镜 (人民广场总店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:30]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2909"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="142"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42   fee"
                                    data-price='30' data-count="31" data-title="沙县小吃（零陵路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/sha-xian-xiao-chi-ling-ling-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/21920?v=1420565634" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/sha-xian-xiao-chi-ling-ling-lu-dian/menu/?gid=602341">沙县小吃（零陵路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售31单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">沙县小吃（零陵路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-23:45]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="21920"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="143"
                                    class="restaurant-item fl c_cantonese c_all p_all p_341   "
                                    data-price='30' data-count="114" data-title="甜蜜蜜港式茶餐厅 (光启城店) [快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/TianMiMiGangShiChaCanTingGuangQiChengDian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2487?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/TianMiMiGangShiChaCanTingGuangQiChengDian/menu/?gid=602341">甜蜜蜜港式茶餐厅 (光启城店) [快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售114单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">甜蜜蜜港式茶餐厅 (光启城店) [快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:30-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fh1gcMZxOT_sLFDVG75HkkBf4yHj?imageView2/1/w/15/h/15/" alt="" /><span>本店满98元送Uber5元优惠券</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2487"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="144"
                                    class="restaurant-item fl c_western c_all p_all p_42 p_coupon  fee"
                                    data-price='30' data-count="23" data-title="na咖啡">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/n-a-ka-fei/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/13240?v=1418075378" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/n-a-ka-fei/menu/?gid=602341">NA咖啡</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售23单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">NA咖啡</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="13240"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="145"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_coupon  fee"
                                    data-price='100' data-count="130" data-title="粤来记 (凯旋路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/yue-lai-ji-kai-xuan-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/2026?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/yue-lai-ji-kai-xuan-lu-dian/menu/?gid=602341">粤来记 (凯旋路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售130单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:39px"></div>
                                            </dd>
                                        </dl>
                                        <p>100元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">粤来记 (凯旋路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:30]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2026"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="146"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='100' data-count="13" data-title="领鲜辣卤（民和路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/lingxianlaluminhelu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/9146?v=1409187457" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/lingxianlaluminhelu/menu/?gid=602341">领鲜辣卤（民和路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售13单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>100元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">领鲜辣卤（民和路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:59]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="9146"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="147"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42   fee"
                                    data-price='40' data-count="2" data-title="膳趣美食">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/shan-qu-mei-shi/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/25597?v=1429825255" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/shan-qu-mei-shi/menu/?gid=602341">膳趣美食</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售2单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">膳趣美食</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="25597"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="148"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='20' data-count="42" data-title="沙县小吃（中山南二路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/sha-xian-xiao-chi-zhong-shan-nan-er-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/12046?v=1411558698" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/sha-xian-xiao-chi-zhong-shan-nan-er-lu-dian/menu/?gid=602341">沙县小吃（中山南二路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售42单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:13px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">沙县小吃（中山南二路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:45]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="12046"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="149"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='50' data-count="2" data-title="小马哥起司马铃薯">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xiao-ma-ge-qi-si-ma-ling-shu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/4064?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xiao-ma-ge-qi-si-ma-ling-shu/menu/?gid=602341">小马哥起司马铃薯</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售2单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">小马哥起司马铃薯</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4064"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="150"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='100' data-count="19" data-title="猫山王 (广元西路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/mao-shan-wang-guang-yuan-xi-lu-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/4087?v=1402216533" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/mao-shan-wang-guang-yuan-xi-lu-dian/menu/?gid=602341">猫山王 (广元西路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售19单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>100元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">猫山王 (广元西路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4087"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="151"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42 p_coupon  fee"
                                    data-price='30' data-count="10" data-title="每顿美食">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/mei-dun-mei-shi/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/5187?v=1407434813" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/mei-dun-mei-shi/menu/?gid=602341">每顿美食</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售10单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">每顿美食</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-14:00, 16:30-19:30]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="5187"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="152"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_coupon  fee"
                                    data-price='200' data-count="0" data-title="绿源蟹庄">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/lv-yuan-xie-zhuang/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/11881?v=1411360423" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/lv-yuan-xie-zhuang/menu/?gid=602341">绿源蟹庄</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>200元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">绿源蟹庄</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="11881"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="153"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_coupon  fee"
                                    data-price='50' data-count="12" data-title="玺玲珑">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xi-ling-long/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/12030?v=1411453903" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xi-ling-long/menu/?gid=602341">玺玲珑</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售12单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">玺玲珑</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="12030"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="154"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='50' data-count="5" data-title="同城便利">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/tong-cheng-bian-li/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/16781?v=1415774722" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/tong-cheng-bian-li/menu/?gid=602341">同城便利</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售5单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">同城便利</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="16781"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="155"
                                    class="restaurant-item fl c_cantonese c_all p_all p_coupon p_online fee"
                                    data-price='68' data-count="23" data-title="爱尚爱汤坊">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ai-shang-ai-tang-fang/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/17659?v=1416683437" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ai-shang-ai-tang-fang/menu/?gid=602341">爱尚爱汤坊</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售23单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>68元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">爱尚爱汤坊</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="17659"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="156"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all p_42 p_coupon  fee"
                                    data-price='50' data-count="3" data-title="孝洋食品店（菜品都是生的）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xiao-yang-shi-pin-dian-cai-pin-du-shi-sheng-d/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/18865?v=1418103034" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xiao-yang-shi-pin-dian-cai-pin-du-shi-sheng-d/menu/?gid=602341">孝洋食品店（菜品都是生的）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售3单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">孝洋食品店（菜品都是生的）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-19:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="18865"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="157"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42 p_coupon  fee"
                                    data-price='40' data-count="6" data-title="山西面馆黄焖鸡米饭（天钥桥路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/shan-xi-mian-guan-huang-men-ji-mi-fan-tian-yu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/21733?v=1419976002" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/shan-xi-mian-guan-huang-men-ji-mi-fan-tian-yu/menu/?gid=602341">山西面馆黄焖鸡米饭（天钥桥路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售6单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">山西面馆黄焖鸡米饭（天钥桥路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-11:00, 13:30-22:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="21733"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="158"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='20' data-count="4" data-title="福建沙县特色营养小吃（天钥桥路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/fu-jian-sha-xian-te-se-ying-yang-xiao-chi-tia-1/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22521?v=1422499907" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/fu-jian-sha-xian-te-se-ying-yang-xiao-chi-tia-1/menu/?gid=602341">福建沙县特色营养小吃（天钥桥路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售4单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">福建沙县特色营养小吃（天钥桥路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22521"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="159"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='32' data-count="5" data-title="吉香斋黄焖鸡米饭（南丹店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ji-xiang-zhai-huang-men-ji-mi-fan-nan-dan-dia/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22522?v=1422404763" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ji-xiang-zhai-huang-men-ji-mi-fan-nan-dan-dia/menu/?gid=602341">吉香斋黄焖鸡米饭（南丹店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售5单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>32元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">吉香斋黄焖鸡米饭（南丹店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22522"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="160"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='25' data-count="4" data-title="正宗山东水饺（天钥桥路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/zheng-zong-shan-dong-shui-jiao-tian-yue-qiao/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/22558?v=1427843713" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/zheng-zong-shan-dong-shui-jiao-tian-yue-qiao/menu/?gid=602341">正宗山东水饺（天钥桥路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售4单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>25元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">正宗山东水饺（天钥桥路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22558"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="161"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_coupon  fee"
                                    data-price='30' data-count="1" data-title="振记和味烧腊午茶（天钥桥店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/zhen-ji-he-wei-shao-la-wu-cha-tian-yue-qiao-d/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/23556?v=1426034944" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/zhen-ji-he-wei-shao-la-wu-cha-tian-yue-qiao-d/menu/?gid=602341">振记和味烧腊午茶（天钥桥店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">振记和味烧腊午茶（天钥桥店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="23556"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="162"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='30' data-count="6" data-title="张记菜饭骨头汤（天钥桥路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/zhang-ji-cai-fan-gu-tou-tang-tian-yue-qiao-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/23557?v=1425975291" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/zhang-ji-cai-fan-gu-tou-tang-tian-yue-qiao-lu/menu/?gid=602341">张记菜饭骨头汤（天钥桥路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售6单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">张记菜饭骨头汤（天钥桥路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-19:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="23557"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="163"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_coupon  fee"
                                    data-price='40' data-count="12" data-title="汪记麻辣烫（肇嘉浜路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/wang-ji-ma-la-tang-zhao-jia-bang-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/23832?v=1426718172" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/wang-ji-ma-la-tang-zhao-jia-bang-lu/menu/?gid=602341">汪记麻辣烫（肇嘉浜路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售12单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">汪记麻辣烫（肇嘉浜路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="23832"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="164"
                                    class="restaurant-item fl c_pizza c_all p_all p_150 p_coupon  "
                                    data-price='30' data-count="0" data-title="熊猫披萨（徐汇店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xiong-mao-pi-sa-xu-hui-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/24177?v=1427347180" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xiong-mao-pi-sa-xu-hui-dian/menu/?gid=602341">熊猫披萨（徐汇店）</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">匹萨</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">熊猫披萨（徐汇店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="24177"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="165"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352   fee"
                                    data-price='20' data-count="2" data-title="鸿兴桂林米粉（天钥桥店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/hong-xing-gui-lin-mi-fen-tian-yue-qiao-dian/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/24338?v=1427841185" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/hong-xing-gui-lin-mi-fen-tian-yue-qiao-dian/menu/?gid=602341">鸿兴桂林米粉（天钥桥店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售2单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">鸿兴桂林米粉（天钥桥店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="24338"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="166"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='100' data-count="1" data-title="小刘炒货">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xiao-liu-chao-huo/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/24423?v=1427914253" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xiao-liu-chao-huo/menu/?gid=602341">小刘炒货</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>100元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">小刘炒货</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-18:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="24423"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="167"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_coupon  fee"
                                    data-price='100' data-count="6" data-title="老曹快乐烧烤">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/lao-cao-kuai-le-shao-kao/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/24553?v=1428532421" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/lao-cao-kuai-le-shao-kao/menu/?gid=602341">老曹快乐烧烤</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售6单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>100元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">老曹快乐烧烤</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [18:30-23:45]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="24553"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="168"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42   fee"
                                    data-price='60' data-count="0" data-title="大众商务快餐">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/da-zhong-shang-wu-kuai-can/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/24584?v=1428446892" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/da-zhong-shang-wu-kuai-can/menu/?gid=602341">大众商务快餐</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>60元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">大众商务快餐</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-14:30, 16:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="24584"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="169"
                                    class="restaurant-item fl c_supermarket c_all p_all   fee"
                                    data-price='50' data-count="2" data-title="平价水果大卖场">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ping-jia-shui-guo-da-mai-chang/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/24743?v=1428516922" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ping-jia-shui-guo-da-mai-chang/menu/?gid=602341">平价水果大卖场</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售2单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">超市</p>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">平价水果大卖场</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="24743"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="170"
                                    class="restaurant-item fl c_supermarket c_all p_all p_355   fee"
                                    data-price='68' data-count="0" data-title="鲜果多果店（龙漕路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xian-guo-duo-guo-dian-long-cao-lu/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/25363?v=1429506980" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xian-guo-duo-guo-dian-long-cao-lu/menu/?gid=602341">鲜果多果店（龙漕路）</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>68元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">超市</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FuiWp8Ny6oGB-R2B5At4XxQ46rFe?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">鲜果多果店（龙漕路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FuiWp8Ny6oGB-R2B5At4XxQ46rFe?imageView2/1/w/15/h/15/" alt="" /><span>备注超人可乐或超人啤酒随单赠1罐</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="25363"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="171"
                                    class="restaurant-item fl c_western c_all p_all p_coupon  "
                                    data-price='30' data-count="0" data-title="giga zone">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/g-i-g-a-z-o-n-e/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/25372?v=1429509072" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/g-i-g-a-z-o-n-e/menu/?gid=602341">GIGA ZONE</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">GIGA ZONE</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="25372"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="172"
                                    class="restaurant-item fl c_western c_all p_all p_coupon  fee"
                                    data-price='50' data-count="1" data-title="saucepan(test)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/s-a-u-c-e-p-a-n-t-e-s-t/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/25499?v=1429606793" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/s-a-u-c-e-p-a-n-t-e-s-t/menu/?gid=602341">Saucepan(test)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">Saucepan(test)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="25499"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="173"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42   fee"
                                    data-price='28' data-count="1" data-title="爱湘园">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ai-xiang-yuan/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/25562?v=1429690702" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ai-xiang-yuan/menu/?gid=602341">爱湘园</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1单</dt>
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>28元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">爱湘园</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="25562"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="174"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all p_42   fee"
                                    data-price='50' data-count="0" data-title="韩国面馆">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/han-guo-mian-guan/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/25616?v=1429824804" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/han-guo-mian-guan/menu/?gid=602341">韩国面馆</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">韩国面馆</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="25616"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="175"
                                    class="restaurant-item fl c_cantonese c_all p_all p_42 p_coupon  fee"
                                    data-price='100' data-count="0" data-title="邱记潮汕砂锅粥（杨宅路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/qiu-ji-chao-shan-sha-guo-zhou-yang-zhai-lu-di/menu/?gid=602341">
                                            <img  src="http://dhcrestaurantlogo.dhero.cn/0" data-src="http://dhcrestaurantlogo.dhero.cn/25835?v=1430288314" width="82px" height="82px">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/qiu-ji-chao-shan-sha-guo-zhou-yang-zhai-lu-di/menu/?gid=602341">邱记潮汕砂锅粥（杨宅路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>100元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                           
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">邱记潮汕砂锅粥（杨宅路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:59]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="25835"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                        </ul>
                        <div class="restaurant-list-empty all-restaurant-empty">
                            <div>暂无符合条件的餐厅，返回 <a href="javascript:;" class="link reset-filter">所有餐厅</a></div>
                        </div>
                     </script>
                </div>
            
            
                <div id="offlineRestaurants" class="restaurant-list hide" ng-class="{hide:!tabsAction3}">
                   <script type="text/template">
                        <div class="cloneTooltip restaurant-info">
                            <s></s>
                            <div></div>
                        </div>
                        
                        <ul class="clearfix trans recommend-restaurant">
                        
                            
                            <li data-index="1"
                                class="restaurant-item fl c_western c_all p_all p_150 p_coupon  "
                                data-price='0' data-count="17" data-title="bad girl bbq">
                                <div class="img-box fl">
                                    <a href="/Shanghai/b-a-d-g-i-r-l-b-b-q/menu/?gid=602341">
                                        <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/22065?v=1421194416">
                                    </a>
                                </div>
                                <article class="restaurant-introduce fl">
                                    <h3 class="ellipsis"><a href="/Shanghai/b-a-d-g-i-r-l-b-b-q/menu/?gid=602341">Bad Girl BBQ</a></h3>
                                    <dl class="clearfix">
                                        
                                        <dt class="fl ellipsis">已售17单</dt>
                                        
                                        <dt class="fl ellipsis hide"></dt>
                                        <dd class="small-star fl">
                                            <div class="small-star score" style="width:65px"></div>
                                        </dd>
                                    </dl>
                                    <p>0元起送 10元配送费</p>
                                    <div class="restaurant-state">
                                        <p class="fl">西餐</p>
                                        
                                        <span><i class="status-icon status-icon-1"></i></span>
                                        
                                        
                                        
                                        
                                        <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                        
                                        
                                    </div>
                                </article>
                                <div class="tooltip restaurant-info">
                                    <h3 class="ellipsis">Bad Girl BBQ</h3>
                                    
                                    <h4 class="ellipsis">营业时间 [11:00-21:00]</h4>
                                    
                                    <ul>
                                        
                                        <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                        
                                        
                                        
                                        
                                        <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                        
                                        
                                    </ul>
                                </div>
                                
                                <div class="collect not-collect" title="收藏餐厅" data-rid="22065"></div>
                                <div class="collect-success">收藏成功</div>
                                
                            </li>
                        
                            
                            <li data-index="2"
                                class="restaurant-item fl c_western c_all p_all p_150 p_coupon  "
                                data-price='30' data-count="9" data-title="habibi">
                                <div class="img-box fl">
                                    <a href="/Shanghai/h-a-b-i-b-i/menu/?gid=602341">
                                        <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/22069?v=1421194389">
                                    </a>
                                </div>
                                <article class="restaurant-introduce fl">
                                    <h3 class="ellipsis"><a href="/Shanghai/h-a-b-i-b-i/menu/?gid=602341">Habibi</a></h3>
                                    <dl class="clearfix">
                                        
                                        <dt class="fl ellipsis">已售9单</dt>
                                        
                                        <dt class="fl ellipsis hide"></dt>
                                        <dd class="small-star fl">
                                            <div class="small-star score" style="width:65px"></div>
                                        </dd>
                                    </dl>
                                    <p>30元起送 10元配送费</p>
                                    <div class="restaurant-state">
                                        <p class="fl">西餐</p>
                                        
                                        <span><i class="status-icon status-icon-1"></i></span>
                                        
                                        
                                        
                                        
                                        <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                        
                                        
                                    </div>
                                </article>
                                <div class="tooltip restaurant-info">
                                    <h3 class="ellipsis">Habibi</h3>
                                    
                                    <h4 class="ellipsis">营业时间 [12:00-21:00]</h4>
                                    
                                    <ul>
                                        
                                        <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                        
                                        
                                        
                                        
                                        <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                        
                                        
                                    </ul>
                                </div>
                                
                                <div class="collect not-collect" title="收藏餐厅" data-rid="22069"></div>
                                <div class="collect-success">收藏成功</div>
                                
                            </li>
                        
                            
                            <li data-index="3"
                                class="restaurant-item fl c_western c_all p_all p_150 p_coupon  "
                                data-price='30' data-count="9" data-title="逸所咖啡">
                                <div class="img-box fl">
                                    <a href="/Shanghai/yi-suo-ka-fei/menu/?gid=602341">
                                        <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/22080?v=1421194326">
                                    </a>
                                </div>
                                <article class="restaurant-introduce fl">
                                    <h3 class="ellipsis"><a href="/Shanghai/yi-suo-ka-fei/menu/?gid=602341">逸所咖啡</a></h3>
                                    <dl class="clearfix">
                                        
                                        <dt class="fl ellipsis">已售9单</dt>
                                        
                                        <dt class="fl ellipsis hide"></dt>
                                        <dd class="small-star fl">
                                            <div class="small-star score" style="width:52px"></div>
                                        </dd>
                                    </dl>
                                    <p>30元起送 10元配送费</p>
                                    <div class="restaurant-state">
                                        <p class="fl">西餐</p>
                                        
                                        <span><i class="status-icon status-icon-1"></i></span>
                                        
                                        
                                        
                                        
                                        <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                        
                                        
                                    </div>
                                </article>
                                <div class="tooltip restaurant-info">
                                    <h3 class="ellipsis">逸所咖啡</h3>
                                    
                                    <h4 class="ellipsis">营业时间 [11:00-21:00]</h4>
                                    
                                    <ul>
                                        
                                        <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                        
                                        
                                        
                                        
                                        <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                        
                                        
                                    </ul>
                                </div>
                                
                                <div class="collect not-collect" title="收藏餐厅" data-rid="22080"></div>
                                <div class="collect-success">收藏成功</div>
                                
                            </li>
                        
                        </ul>

                        
                        
                        <div class="filter-Obj">
                            <div class="relative clearfix">
                                <b class="restaurant-type">
                                    附近餐厅
                                </b>
                            </div>
                        </div>
                        


                        <ul class="clearfix transform-style">
                            
                                <li data-index="1"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_150 p_coupon  "
                                    data-price='30' data-count="35" data-title="芒不颠(嘉善路)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/mang-bu-dian-jia-shan-lu/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/22600?v=1422754279">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/mang-bu-dian-jia-shan-lu/menu/?gid=602341">芒不颠(嘉善路)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售35单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">芒不颠(嘉善路)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-19:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22600"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="2"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_150 p_coupon  "
                                    data-price='30' data-count="259" data-title="辛香汇（飞洲店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xin-xiang-hui-fei-zhou-dian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/12425?v=1411862947">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xin-xiang-hui-fei-zhou-dian/menu/?gid=602341">辛香汇（飞洲店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售259单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">辛香汇（飞洲店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-14:00, 16:30-20:30]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FpCbq9h0s3AGwpJRBkrM1IvpCOHn?imageView2/1/w/15/h/15/" alt="" /><span>品质保证，由超人团队亲自配送。</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="12425"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="3"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42 p_356 p_352  p_online fee"
                                    data-price='30' data-count="2057" data-title="苏湘汇">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/su-xiang-hui/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/1550?v=1402216533">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/su-xiang-hui/menu/?gid=602341">苏湘汇</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售2057单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">苏湘汇</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-14:00, 16:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1550"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="4"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_356 p_352 p_42   fee"
                                    data-price='20' data-count="2186" data-title="吉祥馄饨 (徐家汇店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ji-xiang-hun-tun-xu-jia-hui-dian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/2512?v=1402216533">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ji-xiang-hun-tun-xu-jia-hui-dian/menu/?gid=602341">吉祥馄饨 (徐家汇店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售2186单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">吉祥馄饨 (徐家汇店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2512"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="5"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_356 p_352 p_42   fee"
                                    data-price='25' data-count="1078" data-title="荣忠小吃-广东煲仔饭">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/rong-zhong-xiao-chi-guang-dong-bao-zi-fan/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/2547?v=1418074070">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/rong-zhong-xiao-chi-guang-dong-bao-zi-fan/menu/?gid=602341">荣忠小吃-广东煲仔饭</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1078单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>25元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">荣忠小吃-广东煲仔饭</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2547"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="6"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_356  p_online fee"
                                    data-price='50' data-count="684" data-title="番茄部落精作咖喱料理">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/fan-qie-bu-la-jing-zuo-ka-li-liao-li/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/8269?v=1427351065">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/fan-qie-bu-la-jing-zuo-ka-li-liao-li/menu/?gid=602341">番茄部落精作咖喱料理</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售684单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">番茄部落精作咖喱料理</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [09:30-23:30]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Fg-4kUvXVpR1DRR0O3VFr73KHEQr?imageView2/1/w/15/h/15/" alt="" /><span>每单赠送价值15元进口果汁1瓶！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="8269"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="7"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352   fee"
                                    data-price='40' data-count="39" data-title="不二熊与花">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/bu-er-xiong-yu-hua/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/21837?v=1422399077">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/bu-er-xiong-yu-hua/menu/?gid=602341">不二熊与花</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售39单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">不二熊与花</h3>
                                        
                                            <h4 class="ellipsis">营业时间 []</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="21837"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="8"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   "
                                    data-price='0' data-count="854" data-title="望湘园 (星游城店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/wang-xiang-yuan-xing-you-cheng-dian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/1577?v=1419965627">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/wang-xiang-yuan-xing-you-cheng-dian/menu/?gid=602341">望湘园 (星游城店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售854单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>0元起送 7元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">望湘园 (星游城店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1577"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="9"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352 p_42  p_online fee"
                                    data-price='40' data-count="1338" data-title="饭香思咸肉菜饭骨头汤（中山西路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/fan-xiang-si-xian-rou-cai-fan-gu-tou-tang-zho/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/3876?v=1402216533">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/fan-xiang-si-xian-rou-cai-fan-gu-tou-tang-zho/menu/?gid=602341">饭香思咸肉菜饭骨头汤（中山西路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1338单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>40元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">饭香思咸肉菜饭骨头汤（中山西路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3876"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="10"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   "
                                    data-price='30' data-count="78" data-title="吉野家（港汇广场店）[快点送]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/ji-ye-jia-gang-hui-guang-chang-dian-kuai-dian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/12534?v=1411862359">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/ji-ye-jia-gang-hui-guang-chang-dian-kuai-dian/menu/?gid=602341">吉野家（港汇广场店）[快点送]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售78单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 10元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">吉野家（港汇广场店）[快点送]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="12534"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="11"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_42   fee"
                                    data-price='20' data-count="209" data-title="滋美卤肉卷（天钥桥路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/zi-mei-lu-rou-juan-tian-yue-qiao-lu/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/13827?v=1418076176">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/zi-mei-lu-rou-juan-tian-yue-qiao-lu/menu/?gid=602341">滋美卤肉卷（天钥桥路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售209单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">滋美卤肉卷（天钥桥路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="13827"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="12"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='100' data-count="1039" data-title="星期一便当 (宜山路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xing-qi-yi-bian-dang-yi-shan-lu-dian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/3165?v=1402216533">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xing-qi-yi-bian-dang-yi-shan-lu-dian/menu/?gid=602341">星期一便当 (宜山路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1039单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>100元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">星期一便当 (宜山路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-19:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3165"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="13"
                                    class="restaurant-item fl c_drink-snack c_all p_all  p_online fee"
                                    data-price='120' data-count="52" data-title="杜小姐很甜">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/du-xiao-jie-hen-tian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/21659?v=1420408388">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/du-xiao-jie-hen-tian/menu/?gid=602341">杜小姐很甜</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售52单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>120元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">杜小姐很甜</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [00:00-03:00, 10:30-23:59]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="21659"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="14"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352 p_42  p_online fee"
                                    data-price='50' data-count="714" data-title="瓦罐汤（虹桥路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/wa-guan-tang-hong-qiao-lu/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/4119?v=1410470972">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/wa-guan-tang-hong-qiao-lu/menu/?gid=602341">瓦罐汤（虹桥路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售714单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">瓦罐汤（虹桥路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-13:00, 17:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4119"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="15"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352 p_42  p_online fee"
                                    data-price='30' data-count="23" data-title="徐虹餐馆（徐虹中路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xu-hong-can-guan-xu-hong-zhong-lu/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/14175?v=1413665410">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xu-hong-can-guan-xu-hong-zhong-lu/menu/?gid=602341">徐虹餐馆（徐虹中路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售23单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">徐虹餐馆（徐虹中路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-20:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="14175"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="16"
                                    class="restaurant-item fl c_western c_all p_all  p_online fee"
                                    data-price='15' data-count="15" data-title="小萍果便当">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xiao-ping-guo-bian-dang/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/846?v=1429503454">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xiao-ping-guo-bian-dang/menu/?gid=602341">小萍果便当</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售15单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>15元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">小萍果便当</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:30]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="846"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="17"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_42   fee"
                                    data-price='30' data-count="58" data-title="藏觅酸奶坊">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/cang-mi-suan-nai-fang/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/3191?v=1402216533">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/cang-mi-suan-nai-fang/menu/?gid=602341">藏觅酸奶坊</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售58单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">藏觅酸奶坊</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-19:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3191"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="18"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='90' data-count="202" data-title="苏州羊肉馆 (吴中东路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/su-zhou-yang-rou-guan-wu-zhong-dong-lu-dian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/3902?v=1402216533">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/su-zhou-yang-rou-guan-wu-zhong-dong-lu-dian/menu/?gid=602341">苏州羊肉馆 (吴中东路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售202单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>90元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">苏州羊肉馆 (吴中东路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:30-23:45]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3902"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="19"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all p_42   fee"
                                    data-price='50' data-count="117" data-title="成妈功夫面馆（番禹路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/cheng-ma-gong-fu-mian-guan-fan-yu-lu-dian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/11531?v=1411414288">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/cheng-ma-gong-fu-mian-guan-fan-yu-lu-dian/menu/?gid=602341">成妈功夫面馆（番禹路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售117单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">成妈功夫面馆（番禹路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:30-19:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="11531"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="20"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42   fee"
                                    data-price='20' data-count="107" data-title="我家小厨">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/wo-jia-xiao-chu/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/18551?v=1417674066">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/wo-jia-xiao-chu/menu/?gid=602341">我家小厨</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售107单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">我家小厨</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="18551"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="21"
                                    class="restaurant-item fl c_cantonese c_all p_all   fee"
                                    data-price='20' data-count="40" data-title="时间轴（徐汇店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/shi-jian-zhou-xu-hui-dian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/19693?v=1421211439">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/shi-jian-zhou-xu-hui-dian/menu/?gid=602341">时间轴（徐汇店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售40单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">粤菜</p>
                                            
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">时间轴（徐汇店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="19693"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="22"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_42   fee"
                                    data-price='30' data-count="165" data-title="绝味鸭脖(南丹东路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/jue-wei-ya-bo-nan-dan-dong-lu-dian-1/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/21521?v=1419972970">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/jue-wei-ya-bo-nan-dan-dong-lu-dian-1/menu/?gid=602341">绝味鸭脖(南丹东路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售165单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">绝味鸭脖(南丹东路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="21521"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="23"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_42   fee"
                                    data-price='30' data-count="46" data-title="绝味鸭脖（天钥桥路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/jue-wei-ya-bo-tian-yue-qiao-lu-dian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/21522?v=1419967971">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/jue-wei-ya-bo-tian-yue-qiao-lu-dian/menu/?gid=602341">绝味鸭脖（天钥桥路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售46单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">绝味鸭脖（天钥桥路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="21522"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="24"
                                    class="restaurant-item fl c_japan-korea c_all p_all p_42   fee"
                                    data-price='35' data-count="984" data-title="和韩居">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/he-han-ju/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/4080?v=1402216533">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/he-han-ju/menu/?gid=602341">和韩居</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售984单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>35元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">日韩料理</p>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">和韩居</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-14:00, 16:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4080"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="25"
                                    class="restaurant-item fl c_southeast-asian c_all p_all p_352 p_42  p_online fee"
                                    data-price='26' data-count="35" data-title="泰咖喱（中山西路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/tai-ka-li-zhong-shan-xi-lu/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/23961?v=1427233030">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/tai-ka-li-zhong-shan-xi-lu/menu/?gid=602341">泰咖喱（中山西路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售35单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>26元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">东南亚菜</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">泰咖喱（中山西路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-14:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="23961"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="26"
                                    class="restaurant-item fl c_noodles-pastry c_all p_all p_42   fee"
                                    data-price='22' data-count="331" data-title="心琪粥店（徐虹北路）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xin-qi-zhou-dian-xu-hong-bei-lu/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/11924?v=1411498372">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xin-qi-zhou-dian-xu-hong-bei-lu/menu/?gid=602341">心琪粥店（徐虹北路）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售331单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:65px"></div>
                                            </dd>
                                        </dl>
                                        <p>22元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">面食|糕点</p>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">心琪粥店（徐虹北路）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [08:00-21:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="11924"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="27"
                                    class="restaurant-item fl c_western c_all p_all   fee"
                                    data-price='50' data-count="232" data-title="豪大大香鸡排&amp;任利德">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/hao-da-da-xiang-ji-pai-ren-li-de/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/1360?v=1402216533">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/hao-da-da-xiang-ji-pai-ren-li-de/menu/?gid=602341">豪大大香鸡排&amp;任利德</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售232单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">西餐</p>
                                            
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">豪大大香鸡排&amp;任利德</h3>
                                        
                                            <h4 class="ellipsis">营业时间 []</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="1360"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="28"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42   fee"
                                    data-price='16' data-count="1664" data-title="天香豆蔻麻辣捞烫 (南丹东路店)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/tian-xiang-dou-kou-ma-la-lao-tang-nan-dan-don/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/2649?v=1402216533">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/tian-xiang-dou-kou-ma-la-lao-tang-nan-dan-don/menu/?gid=602341">天香豆蔻麻辣捞烫 (南丹东路店)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售1664单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>16元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">天香豆蔻麻辣捞烫 (南丹东路店)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-23:45]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="2649"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="29"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='30' data-count="49" data-title="绝味鸭脖 (安顺路店)【关门】">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/jue-wei-ya-bo-an-shun-lu-dian-guan-men/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/3162?v=1402216533">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/jue-wei-ya-bo-an-shun-lu-dian-guan-men/menu/?gid=602341">绝味鸭脖 (安顺路店)【关门】</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售49单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">绝味鸭脖 (安顺路店)【关门】</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-19:30]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="3162"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="30"
                                    class="restaurant-item fl c_drink-snack c_all p_all p_42 p_coupon  fee"
                                    data-price='25' data-count="81" data-title="classic tea coffee">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/c-l-a-s-s-i-c-t-e-a-c-o-f-f-e-e/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/16544?v=1415562332">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/c-l-a-s-s-i-c-t-e-a-c-o-f-f-e-e/menu/?gid=602341">CLASSIC Tea coffee</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售81单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>25元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">CLASSIC Tea coffee</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-19:30]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="16544"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="31"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='30' data-count="12" data-title="动力鸡车(漕东支路)">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/dong-li-ji-che-cao-dong-zhi-lu/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/24137?v=1427307066">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/dong-li-ji-che-cao-dong-zhi-lu/menu/?gid=602341">动力鸡车(漕东支路)</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售12单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">动力鸡车(漕东支路)</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="24137"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="32"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_352  p_online fee"
                                    data-price='20' data-count="322" data-title="小红椒（徐家汇店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xiao-hong-jiao-xu-jia-hui-dian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/22113?v=1421649635">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xiao-hong-jiao-xu-jia-hui-dian/menu/?gid=602341">小红椒（徐家汇店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售322单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>20元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">小红椒（徐家汇店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:30]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/Flswo958RM8GgqlKACT4tY5kr5K7?imageView2/1/w/15/h/15/" alt="" /><span>活动菜品立减6元，多点多减！</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22113"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="33"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all  p_online fee"
                                    data-price='50' data-count="32" data-title="海兴烧腊（中山西路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/hai-xing-shao-la-zhong-shan-xi-lu-dian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/22279?v=1421602118">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/hai-xing-shao-la-zhong-shan-xi-lu-dian/menu/?gid=602341">海兴烧腊（中山西路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售32单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:52px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">海兴烧腊（中山西路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22279"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="34"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='15' data-count="31" data-title="精品牛肉面（徐家汇店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/jing-pin-niu-rou-mian-xu-jia-hui-dian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/11436?v=1418074967">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/jing-pin-niu-rou-mian-xu-jia-hui-dian/menu/?gid=602341">精品牛肉面（徐家汇店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售31单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:39px"></div>
                                            </dd>
                                        </dl>
                                        <p>15元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">精品牛肉面（徐家汇店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-11:30, 13:15-23:45]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="11436"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="35"
                                    class="restaurant-item fl c_drink-snack c_all p_all   "
                                    data-price='45' data-count="12" data-title="costa（徐家汇）[连咖啡]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/419/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/527?v=1402216533">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/419/menu/?gid=602341">Costa（徐家汇）[连咖啡]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售12单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>45元起送 2元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">Costa（徐家汇）[连咖啡]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 []</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="527"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="36"
                                    class="restaurant-item fl c_drink-snack c_all p_all   "
                                    data-price='60' data-count="4" data-title="juice vega">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/juicevega/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/4463?v=1402216533">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/juicevega/menu/?gid=602341">juice vega</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售4单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>60元起送 8元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">juice vega</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-20:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4463"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="37"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   "
                                    data-price='0' data-count="18" data-title="西贝西北菜 (天钥桥路) [shbite]">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/XiBeiXiBeiCaiTianYaoQiaoLu/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/4516?v=1402216533">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/XiBeiXiBeiCaiTianYaoQiaoLu/menu/?gid=602341">西贝西北菜 (天钥桥路) [SHbite]</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售18单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>0元起送 12元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">西贝西北菜 (天钥桥路) [SHbite]</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="4516"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="38"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42 p_coupon  fee"
                                    data-price='50' data-count="8" data-title="泡椒同学">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/pao-jiao-tong-xue/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/16540?v=1415551683">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/pao-jiao-tong-xue/menu/?gid=602341">泡椒同学</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售8单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">泡椒同学</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-14:00, 16:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="16540"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="39"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42   fee"
                                    data-price='70' data-count="0" data-title="星特美食（黄浦区总店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/xing-te-mei-shi-huang-pu-qu-zong-dian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/17519?v=1416539456">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/xing-te-mei-shi-huang-pu-qu-zong-dian/menu/?gid=602341">星特美食（黄浦区总店）</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>70元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">星特美食（黄浦区总店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-23:59]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="17519"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="40"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all   fee"
                                    data-price='30' data-count="4" data-title="家在塔啦（天钥桥路店）">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/jia-zai-ta-la-tian-yue-qiao-lu-dian/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/22456?v=1422499016">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/jia-zai-ta-la-tian-yue-qiao-lu-dian/menu/?gid=602341">家在塔啦（天钥桥路店）</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售4单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>30元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">家在塔啦（天钥桥路店）</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [11:00-21:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="22456"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="41"
                                    class="restaurant-item fl c_chinese-fastfood c_all p_all p_42 p_coupon p_online fee"
                                    data-price='88' data-count="4" data-title="啵一个虾蟹吧">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/bo-yi-ge-xia-xie-ba/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/25267?v=1429505736">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/bo-yi-ge-xia-xie-ba/menu/?gid=602341">啵一个虾蟹吧</a></h3>
                                        <dl class="clearfix">
                                            
                                                <dt class="fl ellipsis">已售4单</dt>
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>88元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">中餐简餐</p>
                                            
                                                <span><i class="status-icon status-icon-1"></i></span>
                                            
                                            
                                                <span><i class="status-icon"></i></span>
                                            
                                            
                                                
                                                     <span><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /></span>
                                                
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">啵一个虾蟹吧</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [00:00-01:00, 17:00-23:59]</h4>
                                        
                                        <ul>
                                            
                                                <li><i class="status-icon status-icon-1"></i><span>餐厅可使用优惠劵</span></li>
                                            
                                             
                                                <li><i class="status-icon"></i><span>餐厅支持在线支付</span></li>
                                            
                                            
                                                
                                                    <li><img src="http://dhcactivity.dhero.cn/FjnSIEuUzJvV6j-ifPq7zevJSt30?imageView2/1/w/15/h/15/" alt="" /><span>该餐厅已通过认证</span></li>
                                                
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="25267"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                                <li data-index="42"
                                    class="restaurant-item fl c_drink-snack c_all p_all   fee"
                                    data-price='50' data-count="0" data-title="hello kitty today">
                                    <div class="img-box fl">
                                        <a href="/Shanghai/h-e-l-l-o-k-i-t-t-y-t-o-d-a-y/menu/?gid=602341">
                                            <img src="http://dhcrestaurantlogo.dhero.cn/0" width="82px" height="82px" data-src="http://dhcrestaurantlogo.dhero.cn/25739?v=1430170297">
                                        </a>
                                    </div>
                                    <article class="restaurant-introduce fl">
                                        <h3 class="ellipsis"><a href="/Shanghai/h-e-l-l-o-k-i-t-t-y-t-o-d-a-y/menu/?gid=602341">Hello Kitty Today</a></h3>
                                        <dl class="clearfix">
                                            
                                            <dt class="fl ellipsis hide"></dt>
                                            <dd class="small-star fl">
                                                <div class="small-star score" style="width:0px"></div>
                                            </dd>
                                        </dl>
                                        <p>50元起送 0元配送费</p>
                                        <div class="restaurant-state">
                                            <p class="fl">饮料小吃</p>
                                            
                                            
                                            
                                        </div>
                                    </article>
                                    <div class="tooltip restaurant-info">
                                        <h3 class="ellipsis">Hello Kitty Today</h3>
                                        
                                            <h4 class="ellipsis">营业时间 [10:00-22:00]</h4>
                                        
                                        <ul>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    
                                        <div class="collect not-collect" title="收藏餐厅" data-rid="25739"></div>
                                        <div class="collect-success">收藏成功</div>
                                    
                                </li>
                            
                        </ul>
                        <div class="restaurant-list-empty all-restaurant-empty">
                            <div>暂无符合条件的餐厅，返回 <a href="javascript:;" class="link reset-filter">所有餐厅</a></div>
                        </div>
                    </script>
                </div>
            
            
            
        </div>
@endsection