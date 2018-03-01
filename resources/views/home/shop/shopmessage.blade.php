@extends('home.layout.shop')
@section('content')
<div class="container"> 
   <article id="rst_menus" class="restaurant-main"> 
    <nav class="rst-block rst-cate-wrapper"> 
     <h2 class="rst-cate-title">美食分类</h2> 
     <ul class="rst-cate-list">
      <li class="cate_item cate-item" data-cateid="847669"><a class="cate_name cate-name" data-cateid="847669" title="餐盒费（必点）">餐盒费（必点）</a>(1) </li>
      <li class="cate_item cate-item" data-cateid="1379591"><a class="cate_name cate-name" data-cateid="1379591" title="扫码领红包，最高领6元！新用户立减15元">扫码领红包，最高领6…</a>(1) </li>
      <li class="cate_item cate-item" data-cateid="920304"><a class="cate_name cate-name" data-cateid="920304" title="点套餐送冰红茶">点套餐送冰红茶</a>(0) </li>
      <li class="cate_item cate-item" data-cateid="887172"><a class="cate_name cate-name" data-cateid="887172" title="A套餐（12元）">A套餐（12元）</a>(2) </li>
      <li class="cate_item cate-item" data-cateid="847380"><a class="cate_name cate-name" data-cateid="847380" title="B套餐（15元）">B套餐（15元）</a>(2) </li>
      <li class="cate_item cate-item" data-cateid="847458"><a class="cate_name cate-name" data-cateid="847458" title="C套餐（18元）">C套餐（18元）</a>(2) </li>
      <li class="cate_item cate-item" data-cateid="847141"><a class="cate_name cate-name" data-cateid="847141" title="素美套餐  18元">素美套餐 18元</a>(2) </li>
      <li class="cate_item cate-item" data-cateid="847280"><a class="cate_name cate-name" data-cateid="847280" title="金领豪华套餐">金领豪华套餐</a>(2) </li>
      <li class="cate_item cate-item" data-cateid="887211"><a class="cate_name cate-name" data-cateid="887211" title="1元类">1元类</a>(44) </li>
      <li class="cate_item cate-item" data-cateid="887209"><a class="cate_name cate-name" data-cateid="887209" title="2元类">2元类</a>(25) </li>
      <li class="cate_item cate-item" data-cateid="887208"><a class="cate_name cate-name" data-cateid="887208" title="3元类">3元类</a>(27) </li>
      <li class="cate_item cate-item" data-cateid="887206"><a class="cate_name cate-name" data-cateid="887206" title="4元类">4元类</a>(3) </li>
      <li class="cate_item cate-item" data-cateid="887204"><a class="cate_name cate-name" data-cateid="887204" title="5元类">5元类</a>(2) </li>
      <li class="cate_item cate-item" data-cateid="847580"><a class="cate_name cate-name" data-cateid="847580" title="自选调料（免费）">自选调料（免费）</a>(10) </li>
     </ul> 
     <ul class="rst-activity-list"></ul> 
    </nav> 
    <div id="menu_toolbar" class="rst-menu-toolbar"> 
     <div id="toolbar_text" class="rst-toolbar-text" title="餐盒费（必点）">
      餐盒费（必点）
     </div> 
     <div class="rst-menu-tool"> 
      <div id="toolbar_category" class="eleme_dropdown rst-tool-cate"> 
       <a id="toolbar_toggle" class="e_toggle rst-tool-toggle caret">美食分类</a> 
       <div id="toolbar_dropdown" class="e_dropdown rst-tool-dropdown">
        <ul class="rst-cate-list">
         <li class="cate_item cate-item" data-cateid="847669"><a class="cate_name cate-name" data-cateid="847669" title="餐盒费（必点）">餐盒费（必点）</a>(1) </li>
         <li class="cate_item cate-item" data-cateid="1379591"><a class="cate_name cate-name" data-cateid="1379591" title="扫码领红包，最高领6元！新用户立减15元">扫码领红包，最高领6…</a>(1) </li>
         <li class="cate_item cate-item" data-cateid="920304"><a class="cate_name cate-name" data-cateid="920304" title="点套餐送冰红茶">点套餐送冰红茶</a>(0) </li>
         <li class="cate_item cate-item" data-cateid="887172"><a class="cate_name cate-name" data-cateid="887172" title="A套餐（12元）">A套餐（12元）</a>(2) </li>
         <li class="cate_item cate-item" data-cateid="847380"><a class="cate_name cate-name" data-cateid="847380" title="B套餐（15元）">B套餐（15元）</a>(2) </li>
         <li class="cate_item cate-item" data-cateid="847458"><a class="cate_name cate-name" data-cateid="847458" title="C套餐（18元）">C套餐（18元）</a>(2) </li>
         <li class="cate_item cate-item" data-cateid="847141"><a class="cate_name cate-name" data-cateid="847141" title="素美套餐  18元">素美套餐 18元</a>(2) </li>
         <li class="cate_item cate-item" data-cateid="847280"><a class="cate_name cate-name" data-cateid="847280" title="金领豪华套餐">金领豪华套餐</a>(2) </li>
         <li class="cate_item cate-item" data-cateid="887211"><a class="cate_name cate-name" data-cateid="887211" title="1元类">1元类</a>(44) </li>
         <li class="cate_item cate-item" data-cateid="887209"><a class="cate_name cate-name" data-cateid="887209" title="2元类">2元类</a>(25) </li>
         <li class="cate_item cate-item" data-cateid="887208"><a class="cate_name cate-name" data-cateid="887208" title="3元类">3元类</a>(27) </li>
         <li class="cate_item cate-item" data-cateid="887206"><a class="cate_name cate-name" data-cateid="887206" title="4元类">4元类</a>(3) </li>
         <li class="cate_item cate-item" data-cateid="887204"><a class="cate_name cate-name" data-cateid="887204" title="5元类">5元类</a>(2) </li>
         <li class="cate_item cate-item" data-cateid="847580"><a class="cate_name cate-name" data-cateid="847580" title="自选调料（免费）">自选调料（免费）</a>(10) </li>
        </ul> 
        <ul class="rst-activity-list"></ul> 
       </div> 
      </div> 
      <a class="rst-tool-item sort_btn ui_on" data-sort="default">默认排序</a> 
      <a class="rst-tool-item sort_btn" data-sort="rating">评分<i class="glyph-sort"></i></a> 
      <a class="rst-tool-item sort_btn" data-sort="sales">销量<i class="glyph-sort"></i></a> 
      <a class="rst-tool-item sort_btn" data-sort="price">价格<i class="glyph-sort"></i></a> 
     </div> 
    </div> 
    <div id="cate_view" class="rst-block">
     <section id="cate_view_847669"> 
      <h2 class="menu_title rst-menu-title" title="餐盒费（必点）">餐盒费（必点）</h2>
      <ul class="rst-menu-list">
       <li id="food_view_14099047" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="打包盒">打包盒</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(20)</span>
         <br>
         <span class="rst-d-sales">月售184份</span>
        </div> </li> 
      </ul>
     </section>
     <section id="cate_view_1379591"> 
      <h2 class="menu_title rst-menu-title" title="扫码领红包，最高领6元！新用户立减15元">扫码领红包，最高领6元！新用户立减15元</h2>
      <p class="rst-menu-desc" title="扫码领红包，最高领6元！新用户立减15元">扫码领红包，最高领6元！新用户立减15元</p>
      <ul class="rst-menu-img-list">
       <li id="food_view_15466712" class="rst-dish-img-item eleme_view"> <a class="dish-favor favor_btn" title="收藏">♥</a> <a class="rst-d-img-wrapper food_img"> <img class="rst-d-img" srcset="http://fuss10.elemecdn.com/8/e6/5eabafbaaca1f6cc415b899e2e578jpeg.jpeg?w=240&amp;h=180 1x,http://fuss10.elemecdn.com/8/e6/5eabafbaaca1f6cc415b899e2e578jpeg.jpeg?w=480&amp;h=360 2x" alt="扫码领红包，最高领6元！新用户立减15元，可同时使用！">
         <div class="rst-d-desc" title="扫码领红包，最高领6元！新用户立减15元，">
          扫码领红包，最高领6元！新用户立减15元，
         </div></a> 
        <div class="rst-d-img-dish"> 
         <a class="rst-d-name food_name" title="扫码领红包，最高领6元！新用户立减15元，可同时使用！">扫码领红包，最高领6元！新用户立减15…</a> 
         <br> 
         <span class="rst-d-rating food_rating cmt_block"> <i class="icon-d-star s0 i_s"></i></span>
         <br> 
         <span class="rst-d-sales cmt_block">月售6份</span>
         <div class="rst-d-action r_d_a"> 
          <div class="rst-d-act narrow act_btns">
           <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">0</span></a>
           <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
          </div> 
         </div>
         <div class="rst-d-note"> 
          <span class="rst-d-ordered dish_state hide"></span> 
         </div>
        </div> </li> 
      </ul>
     </section>
     <section id="cate_view_920304"> 
      <h2 class="menu_title rst-menu-title" title="点套餐送冰红茶">点套餐送冰红茶</h2>
      <p class="rst-menu-desc" title="每个套餐送一盒">每个套餐送一盒</p>
     </section>
     <section id="cate_view_887172"> 
      <h2 class="menu_title rst-menu-title" title="A套餐（12元）">A套餐（12元）</h2>
      <ul class="rst-menu-list">
       <li id="food_view_10760144" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="A1：包心贡丸、蟹肉棒、金针菇、日本豆腐、生菜、豆腐衣、山芋粉丝">A1：包心贡丸、蟹肉棒、金针菇、日本豆…</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">12</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(1)</span>
         <br>
         <span class="rst-d-sales">月售8份</span>
        </div> </li> 
       <li id="food_view_10760198" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="A2：骨肉相连、蟹肉棒、冬瓜、油条、大白菜、生菜、山芋粉、海带">A2：骨肉相连、蟹肉棒、冬瓜、油条、大…</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">12</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s0 i_s"></i></span>
         <br>
         <span class="rst-d-sales">月售2份</span>
        </div> </li> 
      </ul>
     </section>
     <section id="cate_view_847380"> 
      <h2 class="menu_title rst-menu-title" title="B套餐（15元）">B套餐（15元）</h2>
      <ul class="rst-menu-list">
       <li id="food_view_10760291" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="B1：五香鸡柳、贡丸、蟹肉棒、山芋粉丝、金针菇、生菜、兰花干、日本豆腐">B1：五香鸡柳、贡丸、蟹肉棒、山芋粉丝…</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">15</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s0 i_s"></i></span>
         <br>
         <span class="rst-d-sales">月售3份</span>
        </div> </li> 
       <li id="food_view_10760374" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="B2：玉米肠、鱼竹轮、蟹肉棒、贡丸、山芋粉丝、兰花干、海带、生菜">B2：玉米肠、鱼竹轮、蟹肉棒、贡丸、山…</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">15</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s0 i_s"></i></span>
         <br>
         <span class="rst-d-sales">月售3份</span>
        </div> </li> 
      </ul>
     </section>
     <section id="cate_view_847458"> 
      <h2 class="menu_title rst-menu-title" title="C套餐（18元）">C套餐（18元）</h2>
      <ul class="rst-menu-list">
       <li id="food_view_10760495" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="C1：香菇贡丸、西湖肉燕、钱包鱼片、鹌鹑蛋、蟹肉棒、山芋粉丝、金针菇、油条、生菜、海带">C1：香菇贡丸、西湖肉燕、钱包鱼片、鹌…</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">18</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s0 i_s"></i></span>
         <br>
         <span class="rst-d-sales">月售2份</span>
        </div> </li> 
       <li id="food_view_10760519" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="C2：烤长、鱼皮脆、鱼丸、鲜鲜肠、午餐肉、金针菇、鸡鸭血、油豆腐、生菜、山芋粉丝">C2：烤长、鱼皮脆、鱼丸、鲜鲜肠、午餐…</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">18</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s0 i_s"></i></span>
         <br>
         <span class="rst-d-sales">月售3份</span>
        </div> </li> 
      </ul>
     </section>
     <section id="cate_view_847141"> 
      <h2 class="menu_title rst-menu-title" title="素美套餐  18元">素美套餐 18元</h2>
      <ul class="rst-menu-list">
       <li id="food_view_10760708" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="1：生菜、菠菜、鸡毛菜、花菜、冬瓜、土豆、平菇、大白菜、莲藕片、海带、老豆腐、厚百叶、金针菇、黑木耳、南瓜、米粉、豆腐">1：生菜、菠菜、鸡毛菜、花菜、冬瓜、土…</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">18</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s0 i_s"></i></span>
         <br>
         <span class="rst-d-sales">月售7份</span>
        </div> </li> 
       <li id="food_view_10760779" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="2：兰花干、油豆腐、五香干、老坛酸菜、南瓜、豆腐丝、年糕、油条、冬瓜、土豆、生菜、香菜、菠菜、青菜、山芋粉丝">2：兰花干、油豆腐、五香干、老坛酸菜、…</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">18</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s0 i_s"></i></span>
         <br>
         <span class="rst-d-sales">月售2份</span>
        </div> </li> 
      </ul>
     </section>
     <section id="cate_view_847280"> 
      <h2 class="menu_title rst-menu-title" title="金领豪华套餐">金领豪华套餐</h2>
      <ul class="rst-menu-list">
       <li id="food_view_10350117" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="金领豪华套餐1">金领豪华套餐1</a></p>
         <p class="rst-d-desc" title="五香鸡柳，包心鱼丸，亲亲肠，日本豆腐，龙虾丸，兰花干，牛百叶，金针菇，平菇，老坛酸菜，鸡蛋面，生菜，鸡毛菜，香菜">五香鸡柳，包心鱼丸，亲亲肠，日本豆腐，龙虾丸，兰花干，牛百叶，金针菇，平菇，老坛酸菜，鸡蛋面，生菜，鸡毛菜，香菜</p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">28</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s0 i_s"></i></span>
         <br>
         <span class="rst-d-sales">月售7份</span>
        </div> </li> 
       <li id="food_view_10350711" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="金领豪华套餐2">金领豪华套餐2</a></p>
         <p class="rst-d-desc" title="香菇贡丸，桂花肠，千叶豆腐，四川腊肉，鱼豆腐，蟹肉棒，金针菇，海带，厚百叶，冬瓜，木耳，年糕，山芋粉丝，龙凤片，生菜，大白菜">香菇贡丸，桂花肠，千叶豆腐，四川腊肉，鱼豆腐，蟹肉棒，金针菇，海带，厚百叶，冬瓜，木耳，年糕，山芋粉丝，龙凤片，生菜，大白菜</p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">28</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(1)</span>
         <br>
         <span class="rst-d-sales">月售4份</span>
        </div> </li> 
      </ul>
     </section>
     <section id="cate_view_887211"> 
      <h2 class="menu_title rst-menu-title" title="1元类">1元类</h2>
      <ul class="rst-menu-list">
       <li id="food_view_10766007" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="冬瓜">冬瓜</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(15)</span>
         <br>
         <span class="rst-d-sales">月售155份</span>
        </div> </li> 
       <li id="food_view_10766014" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="烤麸">烤麸</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(4)</span>
         <br>
         <span class="rst-d-sales">月售44份</span>
        </div> </li> 
       <li id="food_view_10766017" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="生菜">生菜</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(18)</span>
         <br>
         <span class="rst-d-sales">月售145份</span>
        </div> </li> 
       <li id="food_view_10766022" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="青菜">青菜</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(5)</span>
         <br>
         <span class="rst-d-sales">月售51份</span>
        </div> </li> 
       <li id="food_view_10766033" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="韭菜">韭菜</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(1)</span>
         <br>
         <span class="rst-d-sales">月售20份</span>
        </div> </li> 
       <li id="food_view_10766039" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="土豆">土豆</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(13)</span>
         <br>
         <span class="rst-d-sales">月售158份</span>
        </div> </li> 
       <li id="food_view_10766055" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="小白菜">小白菜</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(6)</span>
         <br>
         <span class="rst-d-sales">月售68份</span>
        </div> </li> 
       <li id="food_view_10766062" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="黄豆芽">黄豆芽</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(7)</span>
         <br>
         <span class="rst-d-sales">月售69份</span>
        </div> </li> 
       <li id="food_view_10766068" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="绿豆芽">绿豆芽</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(6)</span>
         <br>
         <span class="rst-d-sales">月售80份</span>
        </div> </li> 
       <li id="food_view_10766072" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="海带丝">海带丝</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(16)</span>
         <br>
         <span class="rst-d-sales">月售124份</span>
        </div> </li> 
       <li id="food_view_10766081" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="油豆腐">油豆腐</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(7)</span>
         <br>
         <span class="rst-d-sales">月售77份</span>
        </div> </li> 
       <li id="food_view_10766087" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="豆腐衣">豆腐衣</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(2)</span>
         <br>
         <span class="rst-d-sales">月售61份</span>
        </div> </li> 
       <li id="food_view_10766092" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="厚百叶">厚百叶</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(12)</span>
         <br>
         <span class="rst-d-sales">月售112份</span>
        </div> </li> 
       <li id="food_view_10766101" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="小香干">小香干</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(4)</span>
         <br>
         <span class="rst-d-sales">月售33份</span>
        </div> </li> 
       <li id="food_view_10766105" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="老豆腐">老豆腐</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(6)</span>
         <br>
         <span class="rst-d-sales">月售61份</span>
        </div> </li> 
       <li id="food_view_10766112" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="海带结">海带结</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s4 i_s"></i>(3)</span>
         <br>
         <span class="rst-d-sales">月售39份</span>
        </div> </li> 
       <li id="food_view_10766114" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="油面筋">油面筋</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(6)</span>
         <br>
         <span class="rst-d-sales">月售144份</span>
        </div> </li> 
       <li id="food_view_10766123" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="南瓜">南瓜</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(3)</span>
         <br>
         <span class="rst-d-sales">月售24份</span>
        </div> </li> 
       <li id="food_view_10766132" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="油条">油条</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(15)</span>
         <br>
         <span class="rst-d-sales">月售101份</span>
        </div> </li> 
       <li id="food_view_10766309" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="藕片">藕片</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(13)</span>
         <br>
         <span class="rst-d-sales">月售91份</span>
        </div> </li> 
       <li id="food_view_10766527" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="大白菜">大白菜</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(4)</span>
         <br>
         <span class="rst-d-sales">月售57份</span>
        </div> </li> 
       <li id="food_view_10766530" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="鸡毛菜">鸡毛菜</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(5)</span>
         <br>
         <span class="rst-d-sales">月售86份</span>
        </div> </li> 
       <li id="food_view_10766534" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="豆腐丝">豆腐丝</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(2)</span>
         <br>
         <span class="rst-d-sales">月售27份</span>
        </div> </li> 
       <li id="food_view_10766539" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="黑木耳">黑木耳</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(3)</span>
         <br>
         <span class="rst-d-sales">月售115份</span>
        </div> </li> 
       <li id="food_view_10766544" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="菠菜">菠菜</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(6)</span>
         <br>
         <span class="rst-d-sales">月售99份</span>
        </div> </li> 
       <li id="food_view_10766631" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="青笙">青笙</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(2)</span>
         <br>
         <span class="rst-d-sales">月售16份</span>
        </div> </li> 
       <li id="food_view_10766638" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="香菜">香菜</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(4)</span>
         <br>
         <span class="rst-d-sales">月售64份</span>
        </div> </li> 
       <li id="food_view_10766651" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="黄花菜">黄花菜</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(2)</span>
         <br>
         <span class="rst-d-sales">月售21份</span>
        </div> </li> 
       <li id="food_view_10766655" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="平菇">平菇</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(9)</span>
         <br>
         <span class="rst-d-sales">月售143份</span>
        </div> </li> 
       <li id="food_view_10766659" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="米粉">米粉</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(2)</span>
         <br>
         <span class="rst-d-sales">月售31份</span>
        </div> </li> 
       <li id="food_view_10766663" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="香菇">香菇</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(11)</span>
         <br>
         <span class="rst-d-sales">月售90份</span>
        </div> </li> 
       <li id="food_view_10766671" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="紫菜">紫菜</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(2)</span>
         <br>
         <span class="rst-d-sales">月售39份</span>
        </div> </li> 
       <li id="food_view_10766698" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="酸豆角">酸豆角</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s0 i_s"></i></span>
         <br>
         <span class="rst-d-sales">月售13份</span>
        </div> </li> 
       <li id="food_view_10766706" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="方便面">方便面</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(8)</span>
         <br>
         <span class="rst-d-sales">月售73份</span>
        </div> </li> 
       <li id="food_view_10766714" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="火腿肠">火腿肠</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(9)</span>
         <br>
         <span class="rst-d-sales">月售59份</span>
        </div> </li> 
       <li id="food_view_10766720" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="金针菇">金针菇</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(13)</span>
         <br>
         <span class="rst-d-sales">月售177份</span>
        </div> </li> 
       <li id="food_view_10766728" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="鸡蛋面">鸡蛋面</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(2)</span>
         <br>
         <span class="rst-d-sales">月售20份</span>
        </div> </li> 
       <li id="food_view_10766742" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="山芋粉丝">山芋粉丝</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(5)</span>
         <br>
         <span class="rst-d-sales">月售47份</span>
        </div> </li> 
       <li id="food_view_10766760" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="山芋宽粉">山芋宽粉</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(4)</span>
         <br>
         <span class="rst-d-sales">月售49份</span>
        </div> </li> 
       <li id="food_view_10766766" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="鸡鸭血">鸡鸭血</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(10)</span>
         <br>
         <span class="rst-d-sales">月售126份</span>
        </div> </li> 
       <li id="food_view_10766774" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="锅巴">锅巴</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s10 i_s"></i>(3)</span>
         <br>
         <span class="rst-d-sales">月售61份</span>
        </div> </li> 
       <li id="food_view_10766776" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="花菜">花菜</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(4)</span>
         <br>
         <span class="rst-d-sales">月售71份</span>
        </div> </li> 
       <li id="food_view_10766783" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="腐竹">腐竹</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s9 i_s"></i>(8)</span>
         <br>
         <span class="rst-d-sales">月售113份</span>
        </div> </li> 
       <li id="food_view_10766788" class="rst-dish-item eleme_view"> 
        <div class="rst-d-info"> 
         <p class="rst-d-main"> <a class="dish-favor-flat favor_btn" title="收藏">♥</a><a class="rst-d-name food_name" title="年糕">年糕</a></p>
        </div> 
        <div class="rst-d-note">
         <span class="rst-d-ordered dish_state hide"></span>
        </div> 
        <div class="rst-d-action r_d_a">
         <div class="rst-d-act act_btns">
          <a class="rst-d-act-add add_btn" title="点击饿一份" role="button" ubt-click="add_cart"><span class="rst-d-act-glyph"></span><span class="price symbol-rmb">1</span></a>
          <a class="rst-d-act-toggle caret add_main_btn" role="button"></a>
         </div>
        </div> 
        <div class="rst-d-status cmt_block"> 
         <span class="rst-d-rating food_rating"> <i class="icon-d-star s8 i_s"></i>(8)</span>
         <br>
         <span class="rst-d-sales">月售66份</span>
        </div> </li> 
      </ul>
     </section>
    </div> 
   </article> 
   <aside id="rst_aside" class="restaurant-aside"> 
    <section class="rst-block restaurant-board"> 
     <h3 class="rst-aside-title">餐厅公告</h3> 
     <p class="rst-deliver-detail"> <i class="icon-rst-deliver"></i>起送价<span class="rst_deliver_amount"></span>元。 </p> 
     <ul class="rst-badge-list"> 
      <li class="rst-badge-item"> <i class="icon-rst-badge v v-person"></i> 该商家已通过个人身份认证 </li> 
      <li class="rst-badge-item"><i class="icon-rst-badge online-payment"></i>该餐厅支持在线支付</li> 
      <li class="rst-badge-item"><i class="icon-rst-badge new-user-discount"></i>饿了么新用户首次订餐，可立减15元。(不与其他活动同享)</li> 
      <li class="rst-badge-item"><i class="icon-rst-badge extra-discount"></i>在线支付满20减10</li> 
     </ul> 
    </section> 
    <section id="favor_food" class="rst-block"></section> 
    <section id="rec_food" class="rst-block hide"> 
     <h3 class="rst-aside-title">本周热卖</h3> 
     <ul id="weekly_ranking" class="rst-aside-menu-list"></ul> 
    </section> 
    <section class="rst-block rst-aside-map rst_aside_distance"> 
     <div class="rst-map-distance">
      距离
      <span id="r_d_v" class="distance-value"></span>米
     </div> 
     <img class="rst_map rst-map-img" src="" alt="餐厅距离示意图"> 
    </section> 
    <section class="rst-block restaurant-board fixed rst_fix_panel"> 
     <h3 class="rst-aside-title">餐厅公告</h3> 
     <p class="rst-deliver-detail"> <i class="icon-rst-deliver"></i>起送价<span class="rst_deliver_amount"></span>元。 </p> 
    </section> 
   </aside> 
   <div id="rst_cart" class="restaurant-cart"></div> 
  </div>

@endsection