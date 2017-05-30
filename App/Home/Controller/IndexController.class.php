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
	public function __construct()
	{
		parent::__construct();
		define('INDEX_URL', '/App/Home/View/Index/');
		define('LOGIN_URL', '/Public/Home/login/');
		@session_start();
	}

	public function index(){

		$this->display('index.html');
	}

	public function singlepost()
	{
		$this->display('singlepost.html');
	}
	// 登录时判断用户是否存在


}
?>