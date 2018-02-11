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
                                <div class="col-xs-3">
                                    <div class="bgm-amber brd-2 p-15">
                                        <div class="c-white m-b-5">#订 单 号</div>
                                        <h2 class="m-0 c-white f-300">456213</h2>
                                    </div>
                                </div>
                                
                                <div class="col-xs-3">
                                    <div class="bgm-blue brd-2 p-15">
                                        <div class="c-white m-b-5">订单 日 期</div>
                                        <h2 class="m-0 c-white f-300">20/06/2015</h2>
                                    </div>
                                </div>
                                
                                <div class="col-xs-3">
                                    <div class="bgm-green brd-2 p-15">
                                        <div class="c-white m-b-5">联 系 方 式</div>
                                        <h2 class="m-0 c-white f-300">472-000</h2>
                                    </div>
                                </div>
                                
                                <div class="col-xs-3">
                                    <div class="bgm-red brd-2 p-15">
                                        <div class="c-white m-b-5">订 单 金 额</div>
                                        <h2 class="m-0 c-white f-300">$23,980</h2>
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
                                        <tr>
                                            <td width="50%">
                                                <h5 class="text-uppercase f-400">Curabitur lobortis</h5>
                                                <p class="text-muted">Nullam consectetur dolor nec ullamcorper finibus. Quisque a porta mauris, non venenatis mi. Pellentesque habitant morbi tristique</p>
                                            </td>
                                            
                                            <td>$450.00</td>
                                            <td>05</td>
                                            <td class="highlight">$2250.00</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <h5 class="text-uppercase f-400">Phasellus idarcu suscipit nun</h5>
                                                <p class="text-muted">Pellentesque habitant morbi tristique senectus</p>
                                            </td>
                                            <td>$20.00</td>
                                            <td>02</td>
                                            <td class="highlight">$40.00</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <h5 class="text-uppercase f-400">Vivamus</h5>
                                                <p class="text-muted">Maecenas nec faucibus lectus. Ut cursus elit ante, rutrum pretium augue tincidunt ut. Suspendisse ultrices sapien sit amet</p>
                                            </td>
                                            <td>$2322.00</td>
                                            <td>01</td>
                                            <td class="highlight">$2322.00</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <h5 class="text-uppercase f-400">Nullam consectetur dolor</h5>
                                                <p class="text-muted">Quisque a porta mauris, non venenatis mi. Pellentesque habitant morbi</p>
                                            </td>
                                            <td>$1290.00</td>
                                            <td>12</td>
                                            <td class="highlight">$15,480.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td class="highlight">$20,092.00</td>
                                        </tr>
                                    </thead> 
                                </tbody>
                            </table>
                            
                            <div class="clearfix"></div>
                            
                            <div class="p-25">
                                <h4 class="c-green f-400">备注信息</h4>
                                <p class="c-gray">Ornare non tortor. Nam quis ipsum vitae dolor porttitor interdum. Curabitur faucibus erat vel ante fermentum lacinia. Integer porttitor laoreet suscipit. Sed cursus cursus massa ut pellentesque. Phasellus vehicula dictum arcu, eu interdum massa bibendum.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <button class="btn btn-float bgm-red m-btn" data-action="print"><i class="zmdi zmdi-print"></i></button>
  


            </section>
