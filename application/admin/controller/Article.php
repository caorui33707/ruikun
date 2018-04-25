<?php
namespace app\admin\controller;

use think\Controller;

class Article extends Controller{
    private $indexDb;
    private $navDb;

    public function _initialize(){
        $this->IndexDb = new \app\admin\model\IndexDb();
        $this->articleDb = new \app\admin\model\ArticleDb();
    }

    public function add(){
        $catId   = input('post.cat_id',0);
        $title = input('post.title','');
        $content = input('post.content','');

        if(!$catId){
            $menu = $this->IndexDb->selectLevel();
            $this->assign('menu',$menu);
            $this->assign('info','请选择二级菜单！');
            return  view('admin/main/second-menu');
            //$this->redirect('/template/admin/main/second-menu.html',array('info'=>'请选择二级菜单！'));
            return false;
        }else if(!$title){
            $menu = $this->IndexDb->selectLevel();
            $this->assign('menu',$menu);
            $this->assign('info','标题不能为空！');
            return  view('admin/main/second-menu');
            //$this->redirect('/template/admin/main/second-menu.html',array('info'=>'标题不能为空！'));
            return false;
        }else{
            $data = [
                'cat_id'   =>$catId,
                'title'    =>$title,
                'content' =>$content,
                'add_time'     =>time(),
            ];
            if($this->articleDb->add($data)){
                $this->redirect('/template/admin/main/second-menu.html');
            }else{
                return false;
            }

        }
    }

    public function artList(){

    }

}