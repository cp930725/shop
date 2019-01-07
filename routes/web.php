<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 后台首页
Route::get('admin/index', function () {
    return view('admin.layout.index');
});

// 后台 管理员
Route::resource('admin/admins', 'admin\AdminController');








// 后台 用户









// 后台 类别
Route::resource('admin/cates', 'admin\CateController');
Route::get('/admin/getcates', 'admin\CateController@getcates');
Route::get('/admin/createcates/{id}', 'admin\CateController@createcates');
Route::post('/admin/cates/insert', 'admin\CateController@insert');







// 后台 商品
Route::resource('admin/goods', 'admin\GoodsController');
Route::resource('admin/goodsinfo', 'admin\GoodsInfoController');
Route::resource('admin/goodsimage', 'admin\GoodsImageController');
Route::get('/admin/goodsinfo/create/{id}', 'admin\GoodsInfoController@create');
Route::get('/admin/goodsimage/delete/{id}', 'admin\GoodsImageController@destroy');
Route::post('/admin/goodsimage/insert/{id}', 'admin\GoodsImageController@insert');









// 后台 关注









// 后台 活动









// 后台 优惠券









// 后台 订单









// 后台 评论









// 后台 售后









// 后台 账单









// 后台 广告









// 后台 公告









// 后台 友情链接









// 后台 轮播图









// 后台 回收站









// 后台 网站配置









// 前台 首页
Route::get('/', function () {
    return view('home.layout.index');
});