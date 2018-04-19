<?php
namespace app\home\model;
use think\Db;
//use think\db\Query;

class RegisterDb extends Db{

    private $db;

    public function __construct(){

    }

    public function add($data){
        $this->db = Db::table('username');
        return $this->db->insert($data);
    }

    public function mobileExist($mobile){
        $this->db = Db::table('username');
      //$this->db->getLastSql()
        return $this->db->where('mobile',$mobile)->find();
    }

}