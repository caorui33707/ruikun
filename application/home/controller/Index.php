<?php
namespace app\home\controller;
use think\Controller;

class Index extends Controller{
    public function index(){
        return  view('index');
       // echo 'index';
    }

    public function login(){
        return view('login');
       // echo 'login';
    }

    public function register(){
       // $this->display('register');
       return view('register');
      //  echo 'register';
    }

    public function  verifyCode(){
        $this->image = new \app\home\model\Image();

        return $this->image->img2();
    }


}
