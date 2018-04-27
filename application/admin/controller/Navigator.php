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

        $saveType = input('get.saveType');


        if(!$name){
            return json(
                array(
                    'status'=>1,
                    'info'=>'请输入菜单名！'
                ));
        }else if(!$url){
            return json(
                array(
                    'status'=>1,
                    'info'=>'请输入地址！'
                ));
        }else{
            $data = [
                'name'   =>$name,
                'url'    =>$url,
                'ifshow' =>$ifshow,
                'cid'     =>$cid,
                'addtime'=>time(),
            ];
            if($id=$this->navDb->nav($data)){
                return json(
                    array(
                        'status'=>0,
                        'id'=>$id,
                    ));
            }else{
                return  json(
                    array(
                        'status'=>1,
                        'info'=>'异常！',
                    ));
            }

        }
    }

    public function edit(){

        $id = input('post.id');
        $name   = input('post.name');
        $url    = input('post.url');
        $ifshow = input('post.ifshow');
        $cid = input('post.cid',0);


        if(!$id){
            return json(
                array(
                    'status'=>1,
                    'info'=>'非法操作！'
                ));
        }else if(!$name){
            return json(
                array(
                    'status'=>1,
                    'info'=>'请输入菜单名！'
                ));
        }else if(!$url){
            return json(
                array(
                    'status'=>1,
                    'info'=>'请输入地址！'
                ));
        }else{
            $data = [
                'name'   =>$name,
                'url'    =>$url,
                'ifshow' =>$ifshow,
                'cid'     =>$cid,
            ];
            if($this->navDb->edit($data,$id)){
                return json(
                    array(
                        'status'=>0,
                    ));
            }else{
                return  json(
                    array(
                    'status'=>1,
                    'info'=>'异常！',
                ));
            }

        }
    }

    public function del()
    {
        $id = input('post.id/a',0);

        if (!$id) {
            return json(
                array(
                    'status' => 1,
                    'info' => '非法操作！'
                ));

        }
        $data = [
            'deleted'=>1,
        ];
        if($this->navDb->edit($data,$id)){
            return json(
                array(
                    'status'=>0,
                ));
        }else{
            return  json(
                array(
                    'status'=>1,
                    'info'=>'异常！',
                ));
        }
    }

}