<?php

use think\Route;
// 注册路由到index模块的News控制器的read操作
//Route::rule('login','index/login');
//Route::rule('register','index/register');

Route::rule([
    'login'=>'index/login',
    'register'=>'index/register',
    'verify_code'=>'index/verifyCode'
]);

Route::post([
    'register/add'=>'register/add',
]);

Route::post([
    'login/login'=>'login/login',
]);


//
Route::rule([
    'enter'=>'enter/index',
    'enter/contact'=>'enter/contact',
    'enter/culture'=>'enter/culture',
    'enter/innovate'=>'enter/innovate',
    'enter/instroduction'=>'enter/instroduction',
    'enter/speech'=>'enter/speech',
    'enter/strategy'=>'enter/strategy',
]);

Route::rule([
   'article'=>'article/index',
]);


//admin 后端
Route::rule([
    'admin'=>'admin/index/index',
    'admin/nav'=>'admin/navigator/add',
    'admin/nav/edit'=>'admin/navigator/edit',
    'admin/nav/del'=>'admin/navigator/del',
    'admin/navList'=>'admin/index/navList',
    'admin/navMenu'=>'admin/index/navMenu',
    'admin/artList'=>'admin/article/artList',
]);

Route::rule([
    'admin/navListLevel'=>'admin/index/navListLevel',
    'admin/article/add'=>'admin/article/add',
]);

