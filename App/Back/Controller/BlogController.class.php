<?php 
/*  
 +----------------------------------------------------------------------
 | Description: demo
 +----------------------------------------------------------------------
 | Date: 2017-05-04
 +----------------------------------------------------------------------
 | update: 2017-05-04
 +----------------------------------------------------------------------
 | Author: Felix
 +----------------------------------------------------------------------
 */

class BlogController extends BackController
{
    protected $blogModel;

    public function __construct()
    {
        parent::__construct();
        $this->blogModel = new BlogModel();
	}

    public function showlist()
    {
        $info = $this->blogModel->getAllBlog_logic();
        //echo "<pre>";var_dump($info);

        $this->assign('info', $info);
        $this->display('blog_list.html');
    }

    /**
     *
     */
    public function Add()
    {

        if (!empty($_POST)) {
            //receive data

            //var_dump($_POST);
            $data['cate_id'] = isset($_POST['category_id']) ? $_POST['category_id'] : '';
            $data['blog_title'] = isset($_POST['blog_title']) ? $_POST['blog_title'] : '';
            $data['blog_brief'] = isset($_POST['blog_brief']) ? $_POST['blog_brief'] : '';
            $data['blog_cover'] = $this->rceDataDel($this->blogModel->upload_blog_cover());
            $data['blog_content'] = isset($_POST['blog_content']) ? $_POST['blog_content'] : '';
            //check data
            if ($data['cate_id'] == 0) {echo "<script>alert('请选择类别！')</script>";exit;}
            if (empty($data['blog_title'])) {echo "<script>alert('博文标题为空！')</script>";exit;}
            if (empty($data['blog_content'])) {echo "<script>alert('博文内容为空！')</script>";exit;}

            //insert into database
            $data['author_id'] = 0;
            $data['upd_time'] = $data['add_time'] = time();
            $data['hits'] = 0;
            $data['is_show'] = $data['is_del'] = '0';


            $res = $this->blogModel->insertBlogText($data);
            if ($res) {
                $this->mysuccess('博文插入成功', '/index.php?p=back&c=blog&a=showlist', 2);
            } else {
                $this->mysuccess('博文插入失败', '/index.php?p=back&c=blog&a=showlist', 2);
            }


        } else {
            $catelist = $this->blogModel->getAll_blogCate();

            $this->assign('catelist', $catelist);
            $this->display('blog_add.html');

        }

    }

    //修改 1.显示数据  2.提交数据
    public function Edit()
    {
        if (!empty($_POST)) {
            //receive data
            //echo "<pre>";print_r($_POST);print_r($_FILES);die;
            $data['blog_id'] = $_GET['blog_id'];

            $data['cate_id'] = isset($_POST['category_id']) ? $_POST['category_id'] : '';
            $data['blog_title'] = isset($_POST['blog_title']) ? $_POST['blog_title'] : '';
            $data['blog_brief'] = isset($_POST['blog_brief']) ? $_POST['blog_brief'] : '';
            $data['blog_cover'] = $this->rceDataDel($_POST['blog_cover']);
            $data['blog_content'] = isset($_POST['blog_content']) ? $_POST['blog_content'] : '';
            //check data
            if ($data['cate_id'] == 0) echo "<script>alert('请选择类别！')</script>";
            if (empty($data['blog_title'])) echo "<script>alert('博文标题为空！')</script>";
            if (empty($data['blog_content'])) echo "<script>alert('博文内容为空！')</script>";

            $data['upd_time'] = time();

            $res = $this->blogModel->updateBlog($data);
            if ($res) {
                $this->mysuccess('修改博文成功', 'index.php?p=back&c=blog&a=showlist', 80);
            } else {
                echo DAO::$error;
                $this->myerror('修改博文失败', 'index.php?p=back&c=blog&a=showlist', 1);
            }


        } else {

            $blog_id = $_GET['blog_id'];
            $info = $this->blogModel->getRow_blog_list($blog_id);
            $catelist = $this->blogModel->getAll_blogCate();

            $this->assign('catelist', $catelist);
            $this->assign('info', $info);
            $this->display('blog_edit.html');
        }
    }

    //删除 逻辑删除
    public function Delete()
    {
        $data['blog_id'] = $_GET['blog_id'];
        $res = $this->blogModel->deleteRowBlog($data);
        if ($res) {
            $this->mysuccess('删除博文成功', 'index.php?p=back&c=blog&a=showlist', 1);
        } else {
            $this->myerror('删除博文失败', 'index.php?p=back&c=blog&a=showlist', 10);
        }

    }

    //批量删除 逻辑删除
    public function batchDel()
    {

        $data = isset($_POST['id']) ? $_POST['id'] : null;
        if (!empty($data)) {

            $res = $this->blogModel->batchDel($data);
            if ($res) {
                $this->mysuccess('批量删除博文成功', 'index.php?p=back&c=blog&a=showlist', 1);
            } else {
                $this->myerror('批量删除博文失败', 'index.php?p=back&c=blog&a=showlist', 4);
            }
        } else {
            $this->myerror('你还没有选择要删除的选项', 'index.php?p=back&c=blog&a=showlist', 4);
        }
    }
}     
               

?>