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
	           <a href="/profile/set_avatar">上传<br>头像</a> 
	          </div> 
	          <div class="safety-level-wrapper"> 
	           <h5>hjl416148489</h5> 
	           <p> <span class="text-gray">安全等级：</span> <a class="user-safety-level full" href="member_safe_set.html" title="太棒了，您已达到最高安全等级"> 高 </a> </p> 
	          </div> 
	         </div> 
	         <div class="col-right"> 
	          <p class="text-gray">账户余额：</p> 
	          <div class="account-balance clearfix"> 
	           <div class="balance">
	            <strong class="">0</strong> 元
	           </div> 
	           <div class="relative"> 
	            <div id="tool-kit-step1" class="toolkit-charge hide">
	             <span id="step1_cancel" class="toolkit-close">×</span>
	            </div> 
	            <a class="btn btn-yellow" href="member_charge.html">立刻充值</a> 
	           </div> 
	          </div> 
	         </div> 
	        </div> 
	        <ul class="related-info clearfix"> 
	         <li> <i class="icon-point"></i>积分： 2800点 <a href="gift.html">兑换礼品</a> </li> 
	         <li> <i class="icon-order"></i>完成订单： <a href="member_order.html">0</a>张（一个月内完成） </li> 
	         <li> <i class="icon-star"></i>收藏： <a href="member_collect_shop.html">25</a>家餐厅 <a href="member_collect_food.html">7</a>份美食 </li> 
	        </ul> 
	       </div> 
	       <div class="latest-orders tab_wrapper"> 
	        <ul class="tab_header"> 
	         <li class="active">最近饿单</li> 
	         <li>最近在线交易<span class="tip">1</span> </li> 
	        </ul> 
	        <div class="tab_body"> 
	         <div class="food-orders"> 
	          <a class="more" href="member_order.html">更多饿单&gt;&gt;</a> 
	          <table> 
	           <thead> 
	            <tr> 
	             <th>饿单号</th> 
	             <th>下单时间</th> 
	             <th>餐厅</th> 
	             <th>饿单详情</th> 
	             <th>饿单状态</th> 
	            </tr> 
	           </thead> 
	           <tbody> 
	            <tr> 
	             <td class="sn"><a href="/profile/order/filter/single/id/12266119358749105" target="_blank">12266119358749105</a></td> 
	             <td class="time">3-9 23:03</td> 
	             <td class="restaurant">臻好时酸奶…</td> 
	             <td>原味炒酸奶1份/抹茶炒酸奶1份/巧克力…</td> 
	             <td class="status"><span class="
	                  gray"> 无效订单 </span> </td> 
	            </tr> 
	           </tbody> 
	          </table> 
	         </div> 
	         <div class="deal-orders hide"> 
	          <a class="more" href="member_schedule.html">更多在线交易&gt;&gt;</a> 
	          <table> 
	           <thead> 
	            <tr> 
	             <th>创建时间</th> 
	             <th>交易类型</th> 
	             <th>交易详情</th> 
	             <th>金额</th> 
	             <th>交易状态</th> 
	            </tr> 
	           </thead> 
	           <tbody> 
	            <tr> 
	             <td class="time">3-9 23:08</td> 
	             <td class="type">充值</td> 
	             <td>网上充值 - 订单号：97835242</td> 
	             <td class="price amount"><span class="green">+300.00</span></td> 
	             <td class="status readable-status"> <span>进行中</span> <br><a href="http://p.ele.me/pay/97835242" target="_blank">完成充值</a> </td> 
	            </tr> 
	            <tr> 
	             <td class="time">9-24 13:25</td> 
	             <td class="type">充值</td> 
	             <td>175519 - 订单号：17472475</td> 
	             <td class="price amount"><span class="green">+58.00</span></td> 
	             <td class="status readable-status"> <span>失败</span> </td> 
	            </tr> 
	            <tr> 
	             <td class="time">9-24 13:25</td> 
	             <td class="type">饿了么外卖</td> 
	             <td>【半价+赠饮】功夫手擀面（原胡一刀） - 订单号：12757021601751831</td> 
	             <td class="price amount"><span class="green">-58.00</span></td> 
	             <td class="status readable-status"> <span>失败</span> </td> 
	            </tr> 
	            <tr> 
	             <td class="time">3-11 11:36</td> 
	             <td class="type">充值</td> 
	             <td>hjl416148489 - 订单号：10643890</td> 
	             <td class="price amount"><span class="green">+28.00</span></td> 
	             <td class="status readable-status"> <span>失败</span> </td> 
	            </tr> 
	            <tr> 
	             <td class="time">3-11 11:36</td> 
	             <td class="type">饿了么外卖</td> 
	             <td>康博煲仔饭 - 订单号：12446256481122141</td> 
	             <td class="price amount"><span class="green">-28.00</span></td> 
	             <td class="status readable-status"> <span>失败</span> </td> 
	            </tr> 
	           </tbody> 
	          </table> 
	         </div> 
	        </div> 
	       </div> 
	      </div> 
	     </div>
@endsection