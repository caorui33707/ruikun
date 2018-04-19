<?php
namespace app\home\controller;

use think\Controller;

class Enter extends Controller {
    public function index(){
        $this->assign('title','index');
        return  view('index');
       // echo 'index';
    }

    public function speech(){
        $this->assign('v','1');
        $this->assign('title','主席致辞');
        return  view();
    }

    public function instroduction(){
        $this->assign('v','2');
        $this->assign('title','集团介绍');
        return  view();
    }

    public function strategy(){
        $this->assign('v','3');
        $this->assign('title','发展战略');
        return  view();
    }

    public function innovate(){
        $this->assign('v','4');
        $this->assign('title','研发创新');
        return  view();
    }

    public function culture(){
        $this->assign('v','5');
        $this->assign('title','企业文化');
        return  view();
    }

    public function contact(){
        $this->assign('v','6');
        $this->assign('title','联系我们');
        return  view();
    }

}
