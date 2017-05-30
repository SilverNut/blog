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
class CateController extends BackController{
	
	protected $cateModel;

	public function __construct()
	{
		parent::__construct();
		$this->cateModel = new CateModel();
	}

	public function index(){

		$m= new CateModel();
		$info=$m->getAll();
		$this->assign('info',$info);
		$this->display('cateList.html');
	}

	public function add(){
		if (!empty($_POST)) {
			$data['cate_name']=strip_tags(addslashes(trim($_POST['category_name'])));
			$data['cate_description']=strip_tags(addslashes(trim($_POST['category_desc'])));
			$m=new CateModel();
			$res=$m->insertData($data);
			if ($res) {
				// header("location:/index.php?p=back&c=cate&a=index");
				$this->mysuccess('添加成功',"/index.php?p=back&c=cate&a=index",3 );
			} else {
				$this->myerror('添加成功',"/index.php?p=back&c=cate&a=add",3 );
				
			}
			
		} else {
			$this->display('cateAdd.html');
		}
	}

	public function batchDel(){
		$del_cate_id=isset($_POST['id']) ? $_POST['id'] : null;
		if (!empty($del_cate_id)) {

			$res=$this->cateModel->delRowsById($del_cate_id);
			if ($res) {
				$this->mysuccess('批量删除成功','/index.php?p=back&c=Cate&a=index',3);
			} else {
				$this->myerror('批量删除失败','/index.php?p=back&c=Cate&a=index',3);
			}
			
		} else {
			$this->myerror('你还没有选择要删除的?','/index.php?p=back&c=Cate&a=index',3);
		}
		
	}

	public function delete(){
		$data=$cate_id=$_GET['cate_id'];
		$m= new CateModel();
		$res=$m->delRowById($data);

		if ($res) {
				// header("location:/index.php?p=back&c=cate&a=index");
				$this->mysuccess('删除成功',"/index.php?p=back&c=cate&a=index",3 );
			} else {
				$this->myerror('删除失败',"/index.php?p=back&c=cate&a=index",3 );
				
			}

		
	}

	public function update(){
		if (!empty($_POST)) {
			$data['cate_name']=strip_tags(addslashes(trim($_POST['category_name'])));
			$data['cate_description']=strip_tags(addslashes(trim($_POST['category_desc'])));
			$data['is_show']=$_POST['is_show'];
			$data['cate_id']=$cate_id=$_GET['cate_id'];
			
			$m= new CateModel();
			$res=$m->saveData($data);
			if ($res) {
				$this->mysuccess('修改成功','/index.php?p=back&c=Cate&a=index',2);
			} else {
				$this->myerror('修改失败','/index.php?p=back&c=Cate&a=index',4);
			}
			
		} else {
			$cate_id=$_GET['cate_id'];
			$m= new CateModel();
			$info=$m->getInfoById($cate_id);

			$this->assign('info',$info);
			$this->display('cateUpdate.html');
		}
	}

}     
               

?>