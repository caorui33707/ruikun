<?php
namespace app\home\controller;
use think\Controller;
use think\Request;

class Register extends Controller{

    private $registerDb;

    public function _initialize(){
        $this->registerDb = new \app\home\model\RegisterDb();
    }

    public function add(){
        $request = Request::instance();
        $ip = $request->ip();
        $ip = str_replace('.','-',$ip);
        $file = './fonts/authcode_set_'.$ip;

        //$returnCode  = cookie('authcode_'.$ip);

        //file_put_contents('D:/authcode_get_'.$ip,$returnCode);
        if(is_file($file)) {
            $returnCode = @file_get_contents($file);
        }else{
            $returnCode = '111';
        }


        $mobile =  input('post.mobile','');
        $passwd =  input('post.passwd');
        $messageCode =  input('post.message_code');//短信验证码
        $imgCode = input('post.img_code'); // 图片验证码

        if(!$mobile){
            return json(
                array(
                    'status'=>1,
                    'info'=>'手机号不能为空！'
                ));
        }else if(!preg_match("/^1[3|5|6|7|8|9]\d{9}$/",$mobile)){
            return json(
                array(
                    'status'=>1,
                    'info'=>'手机号错误！'
                ));
        }else if(!$passwd){
            return json(
                array(
                    'status'=>1,
                    'info'=>'密码不能为空！'
                ));
        }else if(!preg_match("/^[a-z0-9]{6,15}$/",$passwd)){
            return json(
                array(
                    'status'=>1,
                    'info'=>'密码必须为6到15位字符！'
                ));
        }else if($returnCode!=$imgCode){
            return json(
                array(
                    'status'=>1,
                    'info'=>'图形验证码错误！'
                ));
        }else {

            $data = [
                'username' => $mobile,
                'mobile' => $mobile,
                'passwd' => md5($passwd),
                'register_time' => time()
            ];

            if($this->registerDb->mobileExist($mobile)){
                return json(
                    array(
                        'status'=>1,
                        'info'=>'手机号已注册！'
                    )
                );
            }else if( $this->registerDb->add($data)) {
                unlink($file);  //删除文件

               return json(
                   array(
                       'status' => 0
                   ));
           }else{
               return json(
                   array(
                       'status'=>1,
                       'info'=>'系统错误！'
                    )
               );
           }
        }

    }
}