<?php
namespace app\admin\controller;

use think\Controller;

class Article extends Admin{
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
        $img = input('post.img/a','');

        $title2 = input('post.title2','');
        $content2 = input('post.content2','');
        $cat_name = input('post.cat_name','');

       $img = json_encode($img);


        if(!$catId){
            //$menu = $this->IndexDb->selectLevel();

            return json(
                array(
                    'status'=>1,
                    'info'=>'请选择二级菜单！'
                ));
            $this->assign('menu',$menu);
            $this->assign('info','请选择二级菜单！');
            return  view('admin/main/second-menu');
            //$this->redirect('/template/admin/main/second-menu.html',array('info'=>'请选择二级菜单！'));
            return false;
        }else if(!$title){
            return json(
                array(
                    'status'=>1,
                    'info'=>'标题不能为空！'
                ));
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
                'img' =>$img,
                'title2'    =>$title2,
                'content2' =>$content2,
                'cat_name'=>$cat_name,
            ];
            if($this->articleDb->add($data)){
                return json(
                    array(
                        'status'=>0,
                       // 'info'=>'标题不能为空！'
                    ));
                $this->redirect('/template/admin/main/second-menu.html');
            }else{
                return json(
                    array(
                        'status'=>1,
                        'info'=>'添加失败！'
                    ));
            }

        }
    }

    public function edit(){
        $id   = input('post.id',0);
        $dataArr = input();

        $key = $dataArr['name'];
        $val = $dataArr['val'];

        if(!$id){
            return json(
                array(
                    'status'=>1,
                    'info'=>'操作不存在！'
                )
            );
        }else {
            $data = array($key=>$val);
            if($this->articleDb->edit($id,$data)){
                return json(
                    array(
                        'status'=>0,
                        // 'info'=>'标题不能为空！'
                    ));
            }else{
                return json(
                    array(
                        'status'=>1,
                        'info'=>'修改失败！'
                    )
                );
            }
        }
    }

    public function artList(){
        return $this->articleDb-> artList();
    }

}