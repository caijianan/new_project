@extends('home.layout.userinfo')
@section('userinfo')
<div class="main-content"> 
      <div class="content-header"> 
       <h2> 饿单列表 - 共{{count($data)}}张 </h2> 
       <button class="btn-who-get-dishes" id="shuiqunawaimai_open">谁去拿外卖</button> 
       <a class="tip-app-promotion" href="/mobile" target="_blank">随时关注饿单状态</a> 
       <a class="btn-faq" href="help.html" target="_blank"><span class="btn-faq-icon">?</span> 热门问题</a> 
      </div>
      @foreach($data as $k => $v)
      <div class="content-inner"> 
       <div class="order-list"> 
        <span id="ref_time"></span> 
        <div class="order-block" data-id="12266119358749105"> 
         <div class="order-header"> 
          <div class="status-wrapper"> 
           <div class="status gray" id='zhuangta'>
             @if($v->o_status == 1) 
             	已下单
             @elseif($v->o_status == 2)
             	已完成
             @elseif($v->o_status == 3)
             	已拒单
             @else
             	取消
             @endif 
            elm
           </div> 
           
          </div> 
          <div class="line-two"> 
           <table class="table table-condensed"> 
            <tbody> 
             <tr> 
              <td class="col1"><span class="item-name">饿单号:</span>{{$v->id}}</td> 
              <td class="col2"><span class="item-name">下单时间:</span><span class="om_time">{{date('Y/m/d h:i:s',$v->o_ctime)}}</span></td> 
              <td class="col3"><span class="item-name">餐厅名:</span>{{ $sinfo[$k]['s_name'] }}</td> 
             </tr> 
             <tr> 
              <td class="col1"><span class="item-name">饿单地址:</span>{{$ainfo[$k]->address}}</td> 
              <td class="col2"><span class="item-name">联系电话:</span>{{$ainfo[$k]->tel}}&nbsp;{{$ainfo[$k]->rtel}}</td> 
              <td class="col3"><span class="item-name">饿单备注:</span>{{$v->o_msg}}</td> 
             </tr> 
            </tbody> 
           </table> 
          </div> 
         </div> 
         <div class="order-rate"> 
          <div class="line-one"> 
           <div class="col-title">
             点评： 
           </div> 
           <div class="col-content">
           	@if($v->o_status == 2)
           	<a href="#">点击评论</a>
           	@else
             当前状态下不能点评 
           	@endif
           </div> 
          </div> 
         </div> 
         <div class="order-rate"> 
          <div class="line-one"> 
           <div class="col-title">
             订单详情： 
           </div> 
           <div class="col-content">
            <a href="{{url('home/uorder/'.$v->id)}}">点击查看详情</a>
           </div> 
          </div> 
         </div> 
         <div class="order-rate"> 
          <div class="line-one"> 
           <div class="col-title">
             取消订单： 
           </div> 
           <div class="col-content">
          @if($v->o_status == 2)
            <a href="javascript:void(0)" onclick="doQx({{$v->id}},this)">点击取消订单</a>
          @else
             当前状态下不能取消 
          @endif
          </div> 
          <script type="text/javascript">
             function doQx(id,_this)
        {

            layer.confirm('你确定要取消吗', {
                btn: ['确定','取消'] //按钮
                }, function(){
                    $.post('{{ url("/home/uorder") }}/'+id,{'_method':'put','_token':'{{csrf_token()}}'},function(data){
                   
                        if(data == 1){

                             layer.msg('修改成功', {icon: 1,time: 1000});
                              $('#zhuangta').html('已取消')
                              $(_this).html('已取消')
                            // alert(data);
                        }else{
                            // alert(222); 
                             layer.msg('修改失败', {icon: 1,time: 1000});
                        }
                        // alert(data);
                    });
                    //20s后自动关闭
            }, function(){
                layer.msg('马上关闭', {
                time: 1000, //20s后自动关闭
                btn: ['明白了', '知道了']
                });
            });


        }


          </script>
          </div> 
         </div>

        </div> 
       </div>
       @endforeach 
       <div> 
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