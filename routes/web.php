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

//主页
route::any('/',"IndexController@index");
//路由组index
Route::prefix('/')->group(function(){
    route::any('userpage','IndexController@userpage')->middleware('logs');
    route::any('shopcart','IndexController@shopcart')->middleware('logs');
    route::any('allshops','IndexController@allshops');
    route::any('shopcontent/{id?}','IndexController@shopcontent');
    route::any('share','IndexController@share');
});
//路由组login
Route::prefix('/')->group(function(){
    route::any('login','User\UserController@login');
    route::any('register','User\UserController@register');
    route::any('register/do','User\UserController@regdo');
    route::any('regauth','User\UserController@regauth');
    route::post('loginDo','User\UserController@loginDo');
    route::post('code','User\UserController@code');
    route::any('edituser','User\UserController@edituser');
    route::any('edit','User\UserController@edit');
    route::any('buyrecord','User\UserController@buyrecord');
    route::any('mywallet','User\UserController@mywallet');
    route::any('sharedetail','User\UserController@sharedetail');
    route::any('willshare','User\UserController@willshare');
    route::any('set','User\UserController@set');
    route::any('invite','User\UserController@invite');
    route::any('safeset','User\UserController@safeset');
    route::any('resetpassword','User\UserController@resetpassword');
    route::any('loginpwd','User\UserController@loginpwd');
    route::any('rename','User\UserController@rename');
});
//路由组goods
Route::prefix('/')->group(function(){
    route::post('cateshop','Goods\GoodsController@cateshop');
    route::get('cateshops/{id?}','Goods\GoodsController@cateshops');
    route::post('sortshop','Goods\GoodsController@sortshop');

});
    route::any('verify/create','CaptchaController@create');

Route::prefix('/')->group(function(){
    route::post('cartadd','CartController@cartadd')->middleware('logs');
    route::post('cartdel','CartController@cartdel');
    route::any('payment','CartController@payment');

});
Route::prefix('/')->group(function(){
    route::any('address','AddressController@address');
    route::any('writeaddr','AddressController@writeaddr');
    route::any('addressadd','AddressController@addressadd');
    route::any('del','AddressController@del');
    route::any('edit/{id?}','AddressController@edit');
    route::any('editdo','AddressController@editdo');
});

Route::prefix('/')->group(function(){
    route::any('ordersend','OrderController@ordersend');
    route::any('ordersupply','OrderController@ordersupply');
});