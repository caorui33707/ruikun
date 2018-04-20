<?php
namespace app\admin\model;
use think\Db;

class NavDb extends Db{

    public function nav($data){
        $this->db = Db::table('nav');

        return  $this->db->insert($data);
    }

    public function edit($data,$id){
        $this->db = Db::table('nav');

        return  $this->db->where('id',$id)->update($data);
    }

}