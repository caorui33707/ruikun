<?php
namespace app\admin\model;
use think\Db;

class MemberDb extends Db{

    public function  reg($data){
        $this->db = Db::table('admin');
        return  $this->db->insert($data);
    }

    public function login(){

    }

    public function find($k,$v){
        $this->db = Db::table('admin');
        return  $this->db->where($k,$v)->find();
    }

    public function select(){
        $this->db = Db::table('admin');
        return  $this->db->select();
    }

}