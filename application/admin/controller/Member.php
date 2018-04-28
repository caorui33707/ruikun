<?php
namespace app\admin\controller;

use think\Controller;

class Member extends Controller{
    private $memberDb;

    public function _initialize(){
        $this->memberDb = new \app\admin\model\MemberDb();
    }

    public function reg(){
        $user =  input('post.user','');
        $passwd =  input('post.passwd');

        if(!$user){
            return json(
                array(
                    'status'=>1,
                    'info'=>'用户名不能为空！'
                ));
        }else if(!preg_match("/^[a-z0-9]{3,10}$/",$user)){
            return json(
                array(
                    'status'=>1,
                    'info'=>'用户名必须为3到10位字符！'
                ));
        }else if($this->memberDb->find('user',$user)){
            return json(
                array(
                    'status'=>1,
                    'info'=>'用户名已存在！'
                ));
        }else if(!$passwd){
            return json(
                array(
                    'status'=>1,
                    'info'=>'密码不能为空！'
                ));
        }else if(!preg_match("/^[a-z0-9]{3,15}$/",$passwd)){
            return json(
                array(
                    'status'=>1,
                    'info'=>'密码必须为3到15位字符！'
                ));
        }

        $data = [
            'user'=>$user,
            'passwd'=>md5($passwd)
        ];

        if($this->memberDb->reg($data)){
            return json(
                array(
                    'status'=>0,
                    'info'=>'添加成功！'
                ));
        }else{
            return json(
                array(
                    'status'=>0,
                    'info'=>'添加失败！'
                ));
        }
    }

    public function login(){
        $user =  input('post.user','');
        $passwd =  input('post.passwd');

        if(!$user){
            return json(
                array(
                    'status'=>1,
                    'info'=>'请输入用户名！'
                ));
        }else if(!$passwd){
            return json(
                array(
                    'status'=>1,
                    'info'=>'请输入密码！'
                ));
        }

        if(!$usrArr = $this->memberDb->find('user',$user)){
            return json(
                array(
                    'status'=>1,
                    'info'=>'用户名不存在！'
                ));
        }else if($usrArr['passwd'] != md5($passwd) ){
            return json(
                array(
                    'status'=>1,
                    'info'=>'密码错误！'
                ));
        }else{
            session('user_admin',$usrArr);
            return json(
                array(
                    'status'=>0,
                    'info'=>'登录成功！'
                ));
        }
    }

    public function out(){
        session('user_admin',null);
        return;
    }

    public function index(){
        $jsonArr = json_encode($this->memberDb->select());
        $this->assign('dataArr',$jsonArr);
        return view('admin/main/admin_index') ;
    }

}