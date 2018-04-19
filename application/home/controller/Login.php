<?php


namespace app\home\controller;
use think\Controller;

class Login extends Controller{


    private $loginDb;

    public function _initialize(){
        $this->loginDb = new \app\home\model\LoginDb();
    }

    public function login(){

        $mobile =  input('post.mobile','');
        $passwd =  input('post.passwd');

        if(!$mobile){
            return json(
                array(
                    'status'=>1,
                    'info'=>'手机号账号不能为空！'
                ));
        }else if(!$passwd){
            return json(
                array(
                    'status'=>1,
                    'info'=>'密码不能为空！'
                ));
        }

        $passwdMd5 = $this->loginDb->login($mobile);
        if($passwdMd5==md5($passwd)){
            return json(
                array(
                    'status'=>0
                ));
        }else{
            return json(
                array(
                    'status'=>1,
                    'info'=>'密码错误！'
                ));
        }

    }

}