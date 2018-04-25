<?php
namespace app\admin\model;
use think\Db;

class ArticleDb extends Db{

    public function add($data){
        $this->db = Db::table('article');
        return  $this->db->insert($data);
    }

}