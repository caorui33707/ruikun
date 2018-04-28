<?php
namespace app\admin\controller;

use think\Controller;

class Index extends Admin {

    private $indexDb;
    private $articleDb;

    public function _initialize(){
        $this->indexDb = new \app\admin\model\IndexDb();
        $this->articleDb = new \app\admin\model\ArticleDb();
    }



    public function index(){
            return view('admin/index');
    }



    public function navList(){
        $list = $this->indexDb->select();
        return json($list);
    }

    public function navMenu(){
        $list = $this->indexDb->select();
        foreach ($list as $l){
            $id = $l['id']-1;
            $cid = $l['cid'];
            if($cid>0) {
                $cid = $l['cid']-1;
                $newList[$cid]['data'][] = $l;
            }else{
                $newList[$id] = $l;
            }
        }

        $newList = array_values($newList);
        return json($newList);
    }


    public function navListLevel(){
        $pid   = input('get.pid',0);

        $list = $this->indexDb->selectLevel($pid);
        return json($list);
    }

    public function article(){

    }

}