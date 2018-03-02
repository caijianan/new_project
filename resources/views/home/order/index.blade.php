@extends('home.layout.userinfo')
@section('content')
<div class="main-content"> 
      <div class="content-header"> 
       <h2> 一个月之前的饿单 - 共12张 </h2> 
       <button class="btn-who-get-dishes" id="shuiqunawaimai_open">谁去拿外卖</button> 
       <a class="tip-app-promotion" href="/mobile" target="_blank">随时关注饿单状态</a> 
       <a class="btn-faq" href="help.html" target="_blank"><span class="btn-faq-icon">?</span> 热门问题</a> 
      </div> 
      <div class="content-inner"> 
       <div class="order-list"> 
        <span id="ref_time"></span> 

        <div class="order-block" data-id="4925688"> 
         <div class="order-header"> 
          <div class="status-wrapper"> 
           <div class="status green">
             交易已完成
            <a href="http://r.ele.me/cy-lj" target="_blank"></a> 
           </div> 
           <div class="order-actions"> 
            <a class="btn-clone clone_order" href="http://v5.ele.me/order/396713535137120/rebuy" val="396713535137120"><i></i>再来一份</a> 
            <div id="cancelOrderConfirm" class="hide flattern"> 
             <p>确认取消 <b>卤家</b> 的饿单吗？</p> 
             <span class="btn btn-small btn-primary cancelOrderConfirmed">确认取消</span> 
             <span class="btn btn-small cancelOrderUnconfirmed">再等等</span> 
            </div> 
            <div id="cancelOrderModal" class="modal hide fade"> 
             <div class="modal-dialog"> 
              <div class="modal-content"> 
               <div class="header"> 
                <span class="close closeCancelOrderModal">×</span> 
               </div> 
               <div class="modal-body"> 
                <div class="cancelOrderMessage fail flattern"> 
                 <h3>取消订单失败</h3> 
                 <p class="msg">未知错误</p> 
                 <span class="btn btn-small btn-primary" data-dismiss="modal">返回饿单</span> 
                </div> 
                <form class="cancelOrderMessage success flattern"> 
                 <h3>取消订单成功</h3> 
                 <p>请告诉我们您取消的原因，帮助我们改进，谢谢！</p> 
                 <label class="radio"><input type="radio" name="reason">临时有事，无法接收外卖</label> 
                 <label class="radio"><input type="radio" name="reason">点错菜了，重新点</label> 
                 <label class="radio"><input type="radio" name="reason">不想买了</label> 
                 <label class="radio"><input type="radio" name="reason" id="cancelOrderReason">其他</label> 
                 <label class="radio hide" id="cancelOrderReasonText"> <textarea name="" id="cancelReasonText" rows="3"></textarea> </label> 
                 <span class="btn btn-small btn-primary submitCancelOrderReason" data-id="4925688">确认提交</span> 
                </form> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="line-two"> 
           <table class="table table-condensed"> 
            <tbody> 
             <tr> 
              <td class="col1"><span class="item-name">饿单号:</span> 396713535137120</td> 
              <td class="col2"><span class="item-name">下单时间:</span><span class="om_time" data-time="2012-07-30 11:41:12">1970-01-01 00:00</span></td> 
              <td class="col3"><span class="item-name">餐厅电话:</span>13260222621 13260222621</td> 
             </tr> 
             <tr> 
              <td class="col1"><span class="item-name">饿单地址:</span> 江苏南京</td> 
              <td class="col2"><span class="item-name">联系电话:</span>18252022121,025-72312112</td> 
              <td class="col3"><span class="item-name">饿单备注:</span> 谢谢:) </td> 
             </tr> 
            </tbody> 
           </table> 
          </div> 
         </div> 
         <div class="order-table-wrapper"> 
          <table class="order-table table table-striped"> 
           <thead> 
            <tr> 
             <th class="col-name">美食篮子</th> 
             <th class="col-rating"></th> 
             <th class="col-price">单价</th> 
             <th class="col-quantity">数量</th> 
             <th class="col-sub-total">小计</th> 
            </tr> 
           </thead> 
           <tbody> 
            <tr 4925688=""> 
             <td class="col-name"> <span>中华宫保鸡丁饭</span> </td> 
             <td class="col-rating"> 过期不能点评 </td> 
             <td class="col-price">￥14</td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total">￥14</td> 
            </tr> 
           </tbody> 
          </table> 
          <table class="order-table total-table table table-striped"> 
           <tfoot> 
            <tr> 
             <td class="col-name">合计</td> 
             <td class="col-rating"></td> 
             <td class="col-price"></td> 
             <td class="col-quantity">1</td> 
             <td class="col-sub-total relative">￥14 </td> 
            </tr> 
           </tfoot> 
          </table> 
         </div> 
        </div> 
       </div> 
       <div> 
        <div class="pagination"> 
         <ul> 
          <li class="prev disabled"><a href="#">← 上一页</a></li> 
          <li class="active"><a href="/profile/order/filter/before-month/page/1">1</a></li> 
          <li><a href="/profile/order/filter/before-month/page/2">2</a></li> 
          <li class="next"><a href="/profile/order/filter/before-month/page/2">下一页 →</a></li> 
         </ul> 
        </div> 
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
      <div id="modal-cart-not-the-same-restaurant" class="modal hide fade" aria-hidden="true" tabindex="-1"> 
       <div class="modal-header"> 
        <a href="#" class="close" aria-hidden="true">×</a> 
        <h3>请先清空美食篮子</h3> 
       </div> 
       <div class="modal-body"> 
        <p>您需要先清空美食篮子才能挑选其他餐厅的美食哦:)</p> 
       </div> 
       <div class="modal-footer"> 
        <a href="/cart/clearGroup" class="btn  btn-yellow clear-cart">清空美食篮子</a> 
       </div> 
      </div> 
      <div id="modal_cancelOrderByPhone" class="modal-cancel-order-by-phone modal hide fade" aria-hidden="true" tabindex="-1"> 
       <div class="modal-header"> 
        <a href="#" class="close" aria-hidden="true">×</a> 
        <h3> <i class="icon-phone"></i>拨打餐厅电话退单： <span id="cancel_rstTel"></span> </h3> 
       </div> 
       <div class="modal-body"> 
        <div class="order-info clearfix"> 
         <img id="cancel_rstLogo"> 
         <h4 id="cancel_rstName"></h4> 
         <p> 饿单号：<span id="cancel_orderSn"></span>&nbsp; 金额：<span id="cancel_orderTotal"></span>元 </p> 
        </div> 
       </div> 
       <div class="modal-footer"> 
        <a href="#" class="btn  btn-yellow close" aria-hidden="true">返回饿单</a> 
       </div> 
      </div> 
      <div id="modal_tradeReport" class="modal-who-get-dishes modal hide fade" aria-hidden="true" tabindex="-1"> 
       <div class="modal-header"> 
        <a href="#" class="close" aria-hidden="true">×</a> 
        <h3>投诉举报</h3> 
       </div> 
       <div class="modal-body"> 
        <div class="alert-error trade-error" id="trade-warning-banner"></div> 
        <form name="trade-form" id="trade-form"> 
         <input type="hidden" name="trade-order-id" id="trade-order-id"> 
         <input type="hidden" id="exchange_csrf" value="f8fad6e4510afe5fbd48dc5206d213175bf57c1f"> 
         <label><input type="radio" class="trade-radio" name="trade-item" value="0">餐厅已确认，但没送外卖</label> 
         <label><input type="radio" class="trade-radio" name="trade-item" value="1">餐厅参加了活动，但没有优惠</label> 
         <label><input type="radio" class="trade-radio" name="trade-item" value="2">吐槽其他</label> 
         <div>
          <textarea class="trade-text" id="trade-text" name="trade-text" disabled="disabled" placeholder="输入您想要吐槽的内容"></textarea>
         </div> 
        </form> 
       </div> 
       <div class="modal-footer"> 
        <a id="trade-check-btn" class="btn" aria-hidden="true">确定</a> 
       </div> 
      </div> 
     </div>
@endsection