<?php
namespace app\admin\model;
use think\Db;

class NavDb extends Db{

    public function nav($data){
        $this->db = Db::table('nav');

        return  $this->db->insertGetId($data);
    }

    public function edit($data,$id){
        $this->db = Db::table('nav');

        return  $this->db->whereIn('id',$id)->update($data);
    }

}