<?php
header('Access-Control-Allow-Origin:*');
//$origin = isset($_SERVER['HTTP_ORIGIN'])? $_SERVER['HTTP_ORIGIN'] : '';
//
//$allow_origin = array(
//    'http://192.168.1.106'
//);
//

//
//if(in_array($origin, $allow_origin)){
//    header('Access-Control-Allow-Origin:'.$origin);
//}
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
//define('APP_DEBUG',false);// 开启debug
// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');

define('__ROOT__' , '');
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
