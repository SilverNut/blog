<?php

/**
 * Created by PhpStorm.
 * User: Mic
 * Date: 17/05/24
 * Time: 11:24
 */
class BlogModel extends Model
{
    protected $table;

    public function __construct()
    {
        parent::__construct();
        $this->setTable(PREFIX . "blog");
    }

    public function setTable($table)
    {
        $this->table = $table;
    }

    public function getAll_blogCate()
    {
        $sql = "select * from bg_cate";
        return $this->dao->fetchAll($sql);
    }

    public function getAll_blog_list()
    {

        $sql = "select b.*,c.cate_name,from_unixtime(add_time) blogtime from {$this->table} as b join bg_cate as c on b.cate_id=c.cate_id order by blog_id desc";
        $res = $this->dao->fetchAll($sql);
        return $res;
    }

    public function getAllBlog_logic()
    {

        $sql = "select b.*,c.cate_name,from_unixtime(add_time) blogtime from {$this->table} as b join bg_cate as c on b.cate_id=c.cate_id where is_del='0' order by blog_id desc";
        $res = $this->dao->fetchAll($sql);
        return $res;
    }

    public function getAllBlog_logicDel()
    {

        $sql = "select b.*,c.cate_name,from_unixtime(add_time) blogtime from {$this->table} as b join bg_cate as c on b.cate_id=c.cate_id where is_del='0' order by blog_id desc";
        $res = $this->dao->fetchAll($sql);
        return $res;
    }

    /**
     * @param $data
     */
    public function insertBlogText($data)
    {
        $blog_title = $data['blog_title'];
        $blog_brief = $data['blog_brief'];
        $blog_cover = $data['blog_cover'];
        $blog_content = $data['blog_content'];
        $author_id = $data['author_id'];
        $cate_id = $data['cate_id'];
        $add_time = $data['add_time'];
        $upd_time = $data['upd_time'];
        $hits = $data['hits'];
        $is_show = $data['is_show'];
        $is_del = $data['is_del'];
        $sql = "insert into {$this->table} values(null,'$blog_title','$blog_brief','$blog_cover','$blog_content','$author_id','$cate_id','$add_time','$upd_time','$hits','$is_show','$is_del')";
        return $this->dao->db_exec($sql);

    }

    public function getRow_blog_list($blog_id)
    {
        $sql = "select * from {$this->table} where blog_id = $blog_id";
        return $this->dao->fetchRow($sql);
    }

    public function updateBlog($data)
    {
        $blog_id = $data['blog_id'];
        $blog_title = $data['blog_title'];
        $blog_brief= $data['blog_brief'];

        if(!empty($data['blog_cover'])){
            if($_FILES['blog_cover']['error']==0){
                $blog_cover=$this->upload_blog_cover();
                if($blog_cover) unlink(BLOG_COVER.$data['blog_cover']);//图片上传成功后,删除原图
            }else{
                $blog_cover=$data['blog_cover'];//原来有图片,不修改
            }
        }else{
            if($_FILES['blog_cover']['error']==0){
                $blog_cover=$this->upload_blog_cover();//原来没有图片,直接上传
            }else{
                $blog_cover=$data['blog_cover'];//原来没有图片,不上传
            }
        }

        $blog_content = $data['blog_content'];
        $cate_id = $data['cate_id'];
        $upd_time = $data['upd_time'];

        $sql = "update {$this->table} set blog_title='$blog_title',blog_brief='$blog_brief',blog_cover='$blog_cover',blog_content='$blog_content',cate_id='$cate_id',upd_time='$upd_time' where blog_id= $blog_id";
        return $this->dao->db_exec($sql);
    }

    public function deleteRowBlog($data)
    {
        $blog_id = $data['blog_id'];
        $sql = "update {$this->table} set is_del='1' where blog_id = $blog_id";
        return $this->dao->db_exec($sql);
    }

    public function batchDel($data)
    {
        $arrStr_blogId = implode(',', array_keys($data));
        $sql = "update {$this->table} set is_del='1' where blog_id in ($arrStr_blogId)";
        return $this->dao->db_exec($sql);
    }

    public function upload_blog_cover(){
        //参数准备
       // var_dump($_FILES['blog_cover']);


        if($_FILES['blog_cover']['error']==0){
            $file=$_FILES['blog_cover'];
        }
        $allow =array('image/jpg','image/png','image/bmp','image/gif','image/jpeg');
        $path ='./Public/uploads/blog_cover';
        $maxsize = 1024*1024*2;

        $upCover=new Upload();
        $res=$upCover->uploadFile($file,$allow,$error,$path,$maxsize);
        if($res){
            //upload success
            return $res;
        }else{
            $this->wErrLog(__METHOD__.' line: '.__LINE__,'图片上传失败');
            return false;
        }
    }






}