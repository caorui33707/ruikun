<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;

class Navigator extends Controller {

    private $navDb;

    public function _initialize(){
        $this->navDb = new \app\admin\model\NavDb();
    }

    public function index(){

    }

    public function add(){

        $name   = input('post.name');
        $url    = input('post.url');
        $ifshow = input('post.ifshow');
        $cid = input('post.cid');

        if(!$name){
            return false;
        }else if(!$url){
            return false;
        }else{
            $data = [
                'name'   =>$name,
                'url'    =>$url,
                'ifshow' =>$ifshow,
                'cid'     =>$cid,
            ];
            if($this->navDb->nav($data)){
                $this->redirect('/template/admin/main/menu.html');
            }else{
                return false;
            }

        }
    }

    public function edit(){
        $name   = input('post.name');
        $url    = input('post.url');
        $ifshow = input('post.ifshow');
        $cid = input('post.cid');

        if(!$name){
            return false;
        }else if(!$url){
            return false;
        }else{
            $data = [
                'name'   =>$name,
                'url'    =>$url,
                'ifshow' =>$ifshow,
                'cid'     =>$cid,
            ];
            if($this->navDb->nav($data)){
                $this->redirect('/template/admin/main/menu.html');
            }else{
                return false;
            }

        }
    }

}