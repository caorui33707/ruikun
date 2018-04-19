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

