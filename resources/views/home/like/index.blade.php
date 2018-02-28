@extends('home.layout.index')
@section('content')

<div class="user-center-main-box common-width clearfix">
            <aside class="fl">
                <ul>
                    <li>
                        <a href="member_index.html" rel="nofollow">账号管理</a>
                    </li>
                    <li>
                        <a href="member_order.html" rel="nofollow">我的订单</a>
                    </li>
                    <li class="active">
                        <a href="member_collect.html" rel="nofollow">我的收藏</a>
                    </li>
                    <li>
                        <a href="member_addr.html" rel="nofollow">地址管理</a>
                    </li>
                </ul>
            </aside>
            <article class="fl user-center-main">
                <header>收藏的餐厅</header>
                
    
        <ul class="favorite clearfix transform-style" >
            @foreach($food_info as $k=>$v)
                <li class="restaurant-item fl" style="margin-left:20px" id="remove{{ $data[$k]->id }}">
                    <div class="img-box fl">
                        <a href="shop_detail.html"><img src="/shop_pic/{{ $v->s_page }}" width="82px" height="82px"></a>
                    </div>
                    <article class="restaurant-introduce fl">
                        <h3 class="ellipsis"><a href="/shanghai/ji-xiang-hun-tun-gao-an-lu-dian/menu/">{{ $v->s_name }}</a></h3>
                        <dl class="clearfix">
                            <dt class="fl">{{ $v->s_title }}</dt>
                        </dl>
                    </article>
                    <div class="close-favorite" data-rid="1019" onclick="doDel({{ $data[$k]->id }})">×</div>

                </li>
            @endforeach
        </ul>
        
    


            </article>
        </div>
@endsection
<script src="/h/js/jquery-1.8.3.min.js"></script>
<script>
    function doDel(id)
    {

        // alert(id);
        $.post('{{ url("home/userinfo") }}/'+id,{'_token':'{{ csrf_token() }}','_method':'delete' },function(data){
            if(data > 0){
                $('#remove'+id).remove();
            }
        });
    }
</script>