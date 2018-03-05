<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::resource('/','home\ShopController');

// 后台模块
Route::group(['prefix' => 'admin'],function(){
	Route::get('/',function(){
		return view('admin.layout.index');
	});
	// 后台用户模块
	Route::resource('user','admin\UserController');
	Route::get('user/{id}/info','admin\UserController@info');
	// 后台管理员模块
	Route::resource('administrator','admin\AdministratorController');

	Route::get('administrator/{id}/info','admin\AdministratorController@info');
	// 后台店铺分类模块
	Route::resource('shopcate','admin\ShopcateController');
	// 后台商铺模块
	Route::resource('shop','admin\ShopController');
	// 后台订单模块
	Route::resource('order','admin\OrderController');
	Route::get('order/{id}/info','admin\OrderController@info');
	// 后台活动模块
	Route::resource('activity','admin\ActivityController');
	// 后台投诉模块
	Route::resource('complain','admin\ComplainController');
	// 后台审核模块
	Route::resource('audit','admin\AuditController');
	Route::get('achange/{id}','admin\AuditController@tongguo');
	// 后台广告管理
	Route::resource('advert','admin\AdvertController');
});
// 前台模块
Route::group(['prefix'=>'home'],function(){
	// 前台商铺模块
	Route::resource('shoplist','home\ShopController');
	//前台个人中心
	Route::resource('userinfo','home\UserinfoController');
	Route::resource('addr','home\AddrController');
	//前台登陆
	Route::resource('login','home\LoginController');
	//前台注册
	Route::resource('reg','home\RegController');
	//前台注销
	Route::get('exit','home\LoginController@exit');
	//前台订单
	Route::resource('uorder','home\UorderController');
	//前台用户信息修改
	Route::resource('pwd','home\PwdController');
	//前台注册商户
	Route::resource('audit','home\AuditController');
	// 购物车
	Route::get('car/{id}','home\ShopController@car');
	// 修改购物车 + 
	Route::get('increment/{id}/{increment}','home\ShopController@increment');
	// 修改购物车 -
	Route::get('decrease/{id}/{decrease}','home\ShopController@decrease');
	// 删除购物车
	Route::get('del/{id}','home\ShopController@del');
	// 显示购物车
	Route::get('showcar','home\ShopController@showcar');
	// 个人中心
	Route::resource('userinfo','home\UserinfoController');
	// 收藏模块
	Route::resource('like','home\LikeController');
	Route::get('addlike/{id}','home\UserinfoController@addlike');
	// 订单
	Route::resource('order','home\OrderController');
	// 评价
	Route::resource('comment','home\CommentController');
	// 显示评价模板
	Route::get('comment/show/{fid}','home\CommentController@cshow');
	// 添加评论
	Route::post('comment/addcmt','home\CommentController@addcmt');

});
                                                                                   

// 商家模块
Route::group(['prefix'=>'shop'],function(){
	Route::get('/',function(){
		return view('shop.layout.index');
	});
	// 商家注册模块
	Route::resource('reg','shop\regController');
	// 商家登录模块
	Route::resource('login','shop\LoginController');
	// 商家订单模块
	Route::resource('order','shop\OrderController');
	// 商家店铺模块
	Route::resource('store','shop\StoreController');
	// 商家菜品模块
	Route::resource('food','shop\FoodController');
	// 商家菜品分类模块
	Route::resource('foodcate','shop\FoodCateController');
	// 商铺评论模块
	Route::resource('scomment','shop\SCommentController');
	// 菜品评论模块
	Route::resource('fcomment','shop\FCommentController');
	// 商户中心模块
	Route::resource('userinfo','shop\UserInfoController');
});
//验证码
Route::get('kit/captcha/{tmp}', 'home\LoginController@captcha');

