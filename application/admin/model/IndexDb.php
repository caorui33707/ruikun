<?php
namespace app\admin\model;
use think\Db;

class IndexDb extends Db{

    public function index($data){

    }

    public function select(){
        $this->db = Db::table('nav');

        return  $this->db->select();
    }

    public function selectLevel($pid=0){
        $this->db = Db::table('nav');
        return  $this->db->where('cid',$pid)->select();
    }

}