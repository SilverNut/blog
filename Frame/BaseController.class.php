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
class BaseController{
	public $view;

	public function __construct(){


		$this->view=new Smarty();
		//var_dump($this->view);

		$this->view->setTemplateDir(PLAT_PATH.'View'.DS.CONTROLLER_NAME.DS);
		$this->view->setCompileDir(PLAT_PATH.'View_C'.DS.CONTROLLER_NAME.DS);
		$this->view->left_delimiter="<{";
		$this->view->right_delimiter="}>";
	}

	public function assign($name,$value){
		$this->view->assign($name,$value);

	}

	public function display($tpl){
		$this->view->display($tpl);

	}
}     
               

?>