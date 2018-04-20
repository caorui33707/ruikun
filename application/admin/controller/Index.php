<?php
namespace app\admin\controller;

use think\Controller;

class Index extends Controller {

    private $indexDb;

    public function _initialize(){
        $this->indexDb = new \app\admin\model\IndexDb();
    }

    public function index(){

            return view('admin/index');
    }



    public function navList(){
        $list = $this->indexDb->select();
        return json($list);
    }

    public function navListLevel(){
        $pid  = input('get.pid',0); dump($pid);exit;
        $list = $this->indexDb->selectLevel($pid);
        return json($list);
    }

}