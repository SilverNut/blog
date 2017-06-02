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
class IndexController extends HomeController{

	protected $indexModel;
	public function __construct()
	{
		parent::__construct();
		define('INDEX_URL', '/App/Home/View/Index/');
		define('LOGIN_URL', '/Public/Home/login/');

		$this->indexModel=new IndexModel();
		@session_start();
		$this->loginCookie();

		$this->assignPub();
	}
	//分配 公共变量
	public function assignPub()
	{
		$categoryList=$this->indexModel->categoryList();
		$this->assign('categoryList',$categoryList);
	}

	public function index(){
		//分页数据准备
		$rows=$this->indexModel->getBlogSum();
		$rowsPer=5;
		$lrPages=3;

		$page=new Page($rows,$rowsPer,'',$lrPages);
		$pageStr=$page->pageDiv();
		$pageFace=$page->pageFace();//echo "<pre>";print_r($pageFace);
		$this->assign('pageFace',$pageFace);
		$this->assign('pageStr',$pageStr);

		$blogBrief=$this->indexModel->blogBrief($page->offset,$rowsPer);
		$this->assign('blogBrief',$blogBrief);
		$this->display('index.html');
	}

	public function singlepost()
	{
		//$this->loginCookie();
		$this->display('singlepost.html');
	}

	//检测是否设置七天免登陆
	public function loginCookie()
	{
		if(isset($_COOKIE['userId'])) {
			$userModel=new UserModel();//var_dump($userModel);
			$res = $userModel->userIdInfo($_COOKIE['userId']);//var_dump($res);
			//@session_start();
			$_SESSION['userInfo'] = $res;
		}
	}

	public function page(){
		$page=new Page(100,10);

	}


}
?>