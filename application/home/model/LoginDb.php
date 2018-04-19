<?php
namespace app\home\model;
use think\Db;
//use think\db\Query;

class LoginDb extends Db{

    public function login($mobile){
        $this->db = Db::table('username');
        $arr = $this->db->field('passwd')->where('mobile',$mobile)->find();
        return $arr['passwd']?trim($arr['passwd']):false;
    }

}