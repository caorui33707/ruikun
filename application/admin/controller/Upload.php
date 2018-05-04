<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;

class Upload extends Controller{

   public function upload(){
       $request = Request::instance();
       $file = $request ->file('Filedata');
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');

       if($info){
           return json(
               array(
                'status'=>0,
                'img'=>$info->getFilename(),
               )
           );
       }else{
           return json(
               array(
                   'status'=>1,
                   'info'=>'网络错误！',
               )
           );
       }
       exit;
    }
}