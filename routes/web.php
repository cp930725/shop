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
Route::resource('admin/logs', 'admin\LogController')->middleware('admin');
// 管理员个人信息
Route::get('admin/admins/info/{id}', 'admin\AdminController@info')->middleware('admin');
// 后台 登录
Route::resource('admin/login', 'admin\LoginController');
// 后台退出
Route::get('admin/logout', 'admin\LoginController@logout');
// 后台 管理员个人修改密码
Route::get('admin/pwd/reset', 'admin\PassWordController@getReset')->middleware('admin');
Route::post('admin/pwd/reset', 'admin\PassWordController@postReset')->middleware('admin');
// 后台 强制修改密码
Route::get('admin/admins/pwd/{id}', 'admin\AdminController@getPwd')->middleware('admin');
Route::post('admin/admins/pwd/{id}', 'admin\AdminController@postPwd')->middleware('admin');
// 后台 用户	
Route::resource('admin/users', 'admin\UserController')->middleware('admin');
// 用户 登录日志
Route::get('admin/user/log', 'admin\UserController@log')->middleware('admin');
// 后台 类别
Route::resource('admin/cates', 'admin\CateController')->middleware('admin');
Route::get('/admin/getcates', 'admin\CateController@getcates')->middleware('admin');
Route::get('/admin/createcates/{id}', 'admin\CateController@createcates')->middleware('admin');
Route::post('/admin/cates/insert', 'admin\CateController@insert')->middleware('admin');





// 后台 商品
Route::resource('admin/goods', 'admin\GoodsController')->middleware('admin');
Route::get('/home/goodsshift', 'admin\GoodsController@shift')->middleware('admin');
Route::resource('admin/goodsinfo', 'admin\GoodsInfoController')->middleware('admin');
Route::resource('admin/goodsimage', 'admin\GoodsImageController')->middleware('admin');
Route::get('/admin/goodsinfo/create/{id}', 'admin\GoodsInfoController@create')->middleware('admin');
Route::get('/admin/goodsimage/delete/{id}', 'admin\GoodsImageController@destroy')->middleware('admin');
Route::post('/admin/goodsimage/insert/{id}', 'admin\GoodsImageController@insert')->middleware('admin');


// 后台 关注









// 后台 活动
Route::resource('/admin/sales', 'admin\SaleController')->middleware('admin');








// 后台 优惠券





 



// 后台 订单
Route::resource('admin/orders',     'admin\OrderController')->middleware('admin');
Route::resource('admin/orderinfo',  'admin\OrderInfoController')->middleware('admin');







// 后台 评论









// 后台 售后
Route::resource('admin/returns',     'admin\ReturnController')->middleware('admin');
Route::resource('admin/checks',      'admin\CheckController')->middleware('admin');
Route::resource('admin/barters',      'admin\BarterController')->middleware('admin');
Route::get('admin/zhuangtai',     'admin\OrderInfoController@zhuangtai')->middleware('admin');





// 后台 账单
Route::resource('admin/waters',     'admin\WaterController')->middleware('admin');








// 后台 广告









// 后台 公告









// 后台 友情链接
Route::resource('admin/links',      'admin\LinksController')->middleware('admin');








// 后台 轮播图
Route::resource('/admin/slids', 'admin\SlidController')->middleware('admin');








// 后台 回收站









// 后台 网站配置










// 前台 首页
Route::resource('/', 'home\IndexController');

// 前台 登录
Route::resource('login', 'home\LoginController');

// 手机登陆
Route::post('phone/login', 'home\LoginController@phone');


// 前台 退出登录
Route::get('logout', 'home\LoginController@logout');

// 前台 注册
Route::resource('register', 'home\RegisterController');

// ajax验证 用户是否存在
Route::get('register/name/{name}', 'home\RegisterController@registerName');

// 验证手机号是否存在
Route::get('register/phone/{phone}', 'home\RegisterController@registerPhone');

// 发送手机验证码
Route::get('register/send/{tel}', 'home\RegisterController@sendTelCode');

// 忘记密码
Route::get('pwd/phone', 'home\PwdController@getPhone');
Route::post('pwd/phone', 'home\PwdController@postPhone');
Route::get('pwd/phone/{phone}', 'home\PwdController@phone');

// 修改密码
Route::get('pwd/reset', 'home\PwdController@getReset')->middleware('home');
Route::post('pwd/reset', 'home\PwdController@postReset')->middleware('home');

// 前台 用户
Route::resource('home/users', 'home\UserController')->middleware('home');

Route::resource('home/slids', 'home\SlidController');



















//前台订单
Route::resource('home/orders',     'home\OrderController')->middleware('home');
Route::resource('home/orderinfo',  'home\OrderInfoController')->middleware('home');
//前台 ajax
Route::get('home/createaddr',      'home\OrderController@createaddr')->middleware('home');
Route::get('home/ordersdata',      'home\OrderController@ordersdata')->middleware('home');
Route::get('home/orderstatus',     'home\OrderController@orderstatus')->middleware('home');
Route::get('home/checkout/{id}',   'home\CheckoutController@create')->middleware('home');
Route::resource('home/checkout',   'home\CheckoutController')->middleware('home');
Route::resource('home/links',      'home\LinksController')->middleware('home');










// 前台 商品
Route::resource('home/goods', 'home\GoodsController');
Route::get('home/goods/like/{id}', 'home\GoodsController@like');
Route::get('home/goods/dislike/{id}', 'home\GoodsController@dislike');
Route::get('home/search/{id}', 'home\GoodsController@show');
// 前台 商品详情
Route::resource('home/goodsinfo', 'home\GoodsInfoController');
Route::get('/home/getgoodsinfo', 'home\GoodsInfoController@getGoodsInfo');

// 前台 关注
Route::get('/home/usersgoods', 'home\UsersGoodsController@index')->middleware('home');

// 前台 购物车
Route::resource('/home/carts', 'home\CartController')->middleware('home');
Route::get('/home/cart/insert', 'home\CartController@insert')->middleware('home');
Route::get('/home/delcarts', 'home\CartController@delete')->middleware('home');
Route::get('/asdasd', 'home\CartController@index')->middleware('home');






















































