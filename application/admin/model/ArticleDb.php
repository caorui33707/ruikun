<?php
namespace app\admin\model;
use think\Db;

class ArticleDb extends Db{

    public function add($data){
        $this->db = Db::table('article');
        return  $this->db->insert($data);
    }

    public function edit($id,$data){
        $this->db = Db::table('article');
        return  $this->db->where('article_id='.$id)->update($data);
    }

    public function artList(){
        $this->db = Db::table('article');
        return  $this->db->select();
    }

}