<?php
namespace app\admin\controller;

use think\Controller;

class Admin extends Controller
{
    private $adminDb;

    public function _initialize(){
        $this->adminDb = new \app\admin\model\AdminDb();
    }

    public function reg(){
        $mobile =  input('post.user','');
        $passwd =  input('post.passwd');

        $this->adminDb->reg();
    }

    public function login(){

    }
}