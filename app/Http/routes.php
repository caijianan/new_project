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
// 平台首页
Route::resource('/','home\HomeController');
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
	Route::resource('activity','admin\activityController');
	// 后台投诉模块
	Route::resource('complain','admin\ComplainController');
	// 后台审核模块
	Route::resource('audit','admin\AuditController');
	// 后台广告管理
	Route::resource('advert','admin\AdvertController');
});
// 前台模块

Route::group(['prefix'=>'home'],function(){
	// 前台商铺模块
	Route::resource('shoplist','home\ShopController');
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