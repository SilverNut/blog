<?php
class IndexModel extends Model{
    protected $table_category;
    protected $table_blog;
    public function __construct()
    {
        parent::__construct();
        $this->table_category=PREFIX."cate";
        $this->table_blog=PREFIX."blog";

    }

    //TODO: index category list
    public function categoryList(){
        $sql="select * from {$this->table_category}";
        $res=$this->dao->fetchAll($sql);
        if($res){
            return $res;
        }else{
            $this->wErrLog(__METHOD__.'  line:'.__LINE__,'获取首页分类列表失败:');
        }

    }

    public function getBlogSum(){
        $sql="select count(*) as sum from {$this->table_blog}";
        $res=$this->dao->fetchCol($sql);
        if($res){
            return $res;
        }else{
            $this->wErrLog(__METHOD__.'  line:'.__LINE__,'获取首页博客总数失败:');
        }

    }
    public function blogBrief($offset,$n){
        $sql="select * from {$this->table_blog} ORDER BY upd_time DESC limit $offset,$n";
        $res=$this->dao->fetchAll($sql);
        if($res){
            return $res;
        }else{
            $this->wErrLog(__METHOD__.'  line:'.__LINE__,'获取首页博客简要列表失败:');
        }

    }






}
?>