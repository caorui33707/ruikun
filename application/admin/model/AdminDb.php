<?php
namespace app\admin\model;
use think\Db;

class AdminDb extends Db{

    public function  reg($data){
        $this->db = Db::table('admin');
        return  $this->db->insert($data);
    }

    public function login(){

    }

}