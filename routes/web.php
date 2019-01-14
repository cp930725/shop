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
})->middleware('admin');

// 后台 管理员
Route::resource('admin/admins', 'admin\AdminController')->middleware('admin');
// 管理员操作日志
Route::resource('admin/logs', 'admin\LogController');

// 管理员个人信息
Route::get('admin/admins/info/{id}', 'admin\AdminController@info')->middleware('admin');

// 后台 登录
Route::resource('admin/login', 'admin\LoginController');

// 后台退出
Route::get('admin/logout', 'admin\LoginController@logout');

// 后台 修改密码
Route::get('admin/pwd/reset', 'admin\LoginController@getReset')->middleware('admin');
Route::post('admin/pwd/reset', 'admin\LoginController@postReset')->middleware('admin');

// 后台 用户	
Route::resource('admin/users', 'admin\UserController')->middleware('admin');
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
Route::resource('admin/orders',     'admin\OrderController');
Route::resource('admin/orderinfo',  'admin\OrderInfoController');








// 后台 评论









// 后台 售后
Route::resource('admin/returns',     'admin\ReturnController');
Route::resource('admin/checks',      'admin\CheckController');
Route::resource('admin/barters',      'admin\BarterController');






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






 // 前台 商品
Route::resource('home/goods', 'home\GoodsController');
Route::get('home/goods/like/{id}', 'home\GoodsController@like');
Route::get('home/goods/dislike/{id}', 'home\GoodsController@dislike');

// 前台 商品详情
Route::resource('home/goodsinfo', 'home\GoodsInfoController');
Route::get('/home/getgoodsinfo', 'home\GoodsInfoController@getGoodsInfo');

// 前台 关注
Route::get('/home/usersgoods', 'home\UsersGoodsController@index');

// 前台 购物车
Route::resource('/home/carts', 'home\CartController');
Route::get('/home/cart/insert', 'home\CartController@insert');
Route::get('/home/delcarts', 'home\CartController@delete');
