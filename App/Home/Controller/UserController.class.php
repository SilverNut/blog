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
class UserController extends HomeController{
	public function login(){
		include PLAT_PATH.'View/'.CONTROLLER_NAME.DS."login_register_modal.html";
	}
}     
               

?>