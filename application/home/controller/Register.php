<?php
namespace app\home\controller;
use think\Controller;

class Register extends Controller{

    private $registerDb;

    public function _initialize(){
        $this->registerDb = new \app\home\model\RegisterDb();
    }

    public function add(){

        $returnCode  = '8888';

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