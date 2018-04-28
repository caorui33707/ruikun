<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;

class Admin extends Controller{
    protected $adminUser;

    public function __construct(){
        parent::__construct();
        $this->adminUser = session('user_admin');
        $this->assign('user_admin',$this->adminUser);
        if(!$this->adminUser){
            return json(
                array(
                    'status'=>1,
                    'info'=>'没有权限，请登录！'
                ));
        }
    }

    public function index(){
    }
}