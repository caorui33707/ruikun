<?php
namespace app\home\model;
use think\Db;

class ArticleDb extends Db{

    public function find($cid){
        $this->db = Db::table('article');
        return  $this->db->where(array('cat_id'=>$cid))->find();
    }

}