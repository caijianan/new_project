@extends('admin.layout.index')
@section('connect')
<br><br><br><br><br><br>
<section id="content">

                <div class="container invoice">
                    
                    <div class="card">
                        <div class="card-header ch-alt text-center">
                            <img class="i-logo" src="/d/img/demo/invoice-logo.png" alt="">
                        </div>
                        
                        <div class="card-body card-padding">
                           
                            <div class="clearfix"></div>
                            
                            <div class="row m-t-25 p-0 m-b-25">
                                <div class="col-xs-4">
                                    <div class="bgm-amber brd-2 p-15">
                                        <div class="c-white m-b-5">#订 单 号</div>
                                        <h2 class="m-0 c-white f-300">{{ $order->id }}</h2>
                                    </div>
                                </div>
                                
                                <div class="col-xs-4">
                                    <div class="bgm-blue brd-2 p-15">
                                        <div class="c-white m-b-5">订单 日 期</div>
                                        <h2 class="m-0 c-white f-300">{{ date('Y-m-d',$order->o_ctime) }}</h2>
                                    </div>
                                </div>
                                
                                <div class="col-xs-4">
                                    <div class="bgm-green brd-2 p-15">
                                        <div class="c-white m-b-5">订 单 状 态</div>
                                        <h2 class="m-0 c-white f-300">{{ $order->o_status == 1 ? '订 单 完 成 ' : '订 单 未 完 成'}}</h2>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <table class="table i-table m-t-25 m-b-25">
                                <thead class="text-uppercase">
                                    <th class="c-gray">商 品 名 称</th>
                                    <th class="c-gray">商 品 价 格</th>
                                    <th class="c-gray">购 买 数 量</th>
                                    <th class="highlight">小 计</th>
                                </thead>
                                
                                <tbody>
                                    <thead>
                                    @foreach($arr as $k=>$v)
                                        <tr>
                                            <td width="50%">
                                                <h5 class="text-uppercase f-400">{{ $v->f_name }}</h5>

                                            </td>
                                            
                                            <td>¥ {{ $v->f_price }}</td>
                                            <td>{{ $orinfo[$k]->oi_num }}</td>
                                            <td class="highlight">¥ {{ $orinfo[$k]->f_price * $orinfo[$k]->oi_num}}</td>
                                        </tr>
                                    @endforeach
                                        <tr>
                                            <td colspan="3"></td>
                                            <td class="highlight">¥ {{ $order->o_sum }}</td>
                                        </tr>
                                    </thead> 
                                </tbody>
                            </table>
                            
                            <div class="clearfix"></div>
                            
                            <div class="p-25">
                                <h4 class="c-green f-400">备注信息</h4>
                                <p class="c-gray">{{ $order->o_msg }}.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <button class="btn btn-float bgm-red m-btn" data-action="print"><i class="zmdi zmdi-print"></i></button>
  


            </section>
