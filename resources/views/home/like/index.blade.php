@extends('home.layout.userinfo')
@section('userinfo')

<div class="main-content">
    <div class="content-header">
  <h2>我收藏的餐厅</h2>
</div>
      <div id="" class="favor-restaurants">
      <table class="favor_table table">
      <tbody>
        @foreach($food_info as $k=>$v)
              <tr class="my_favored_restaurant" id="remove{{ $data[$k]->id }}">
          <td class="restaurant-column">
<div class="restaurant-block lite  ">
  <div class="line-one">
    <div class="logo-wrapper">
        <div class="logo">
                  <a href="http://r.ele.me/lglfwg" target="_blank"><img class="restaurant-logo" alt="老桂林风味馆  (正宗桂林米粉）" title="老桂林风味馆  (正宗桂林米粉）" src="/shop_pic/{{ $v->s_page }}"></a>
        </div>
                                              <div class="deliver-time-wrapper busy tooltip_on" data-toggle="tooltip" title="餐厅当前送餐较慢">
               45+分钟
              </div>
                          </div>

    <div class="info">
      <div class="name">
        <a class="restaurant-link" href="http://r.ele.me/lglfwg" target="_blank">{{ $v->s_name }}</a>
      </div>
              <div class="flavors three-line">
          {{ $v->s_title }}        </div>

        <div class="ratings three-line">
                    <div class="r10 rating-star" title="餐厅评价：4.6星"></div>

                      <span class="rating-number">1168份</span>
                  </div>

          </div>

  </div>
  <div class="delete-action hidden">
    <a href="#" class="eleme-icon delete" rel="11888"></a>
  </div>

</div>
</td>
          <td valign="top">
            <div class="action">
                            <span class="admin_del">
                  <a href="javascript:void(0);" restaurant_id="11888" onclick="doDel({{ $data[$k]->id }})">
                    <i class="icon-remove"></i>
                  </a>
              </span>
            </div>
          </td>
        </tr>
        @endforeach
            </tbody>
      </table>
    </div>
  </div>
  </div>
<script src="/h/js/jquery-1.8.3.min.js"></script>
<script  src="/layer/layer.js"></script>
<script>
    function doDel(id)
    {

        // alert(id);
        $.post('{{ url("home/like") }}/'+id,{'_token':'{{ csrf_token() }}','_method':'delete' },function(data){
            if(data > 0){
                layer.msg('删除成功');
                $('#remove'+id).remove();
            }else{
              layer.msg('删除失败');
            }
        });
    }
</script>
@endsection
