<?php
namespace app\home\controller;

use think\Controller;

class Article extends Controller {

    private $articleDb;

    public function _initialize(){
        $this->articleDb = new \app\home\model\ArticleDb();
    }

    public function index(){
        $cid = input('get.cid',0);
        if(!$cid){
            return json(
                array(
                    'status'=>1,
                    'info'=>'请选择一个菜单！'
                ));
        }

        $arr = $this->articleDb->find($cid);

        if(!$arr){
            return json(
                array(
                    'status'=>0,
                    'data'=>[]
                ));
        }else{
            return json(
                array(
                    'status'=>0,
                    'data'=>$arr
                ));
        }

    }
}