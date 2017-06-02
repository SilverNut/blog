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

		define('BLOG_COVER', './Public/uploads/blog_cover/');
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


	public function writeErr($msg = '')
	{
		file_put_contents('./daoErr.txt', DAO::$error . "---*$msg*---" . date("Y-m-d H:i:s") . "\n", FILE_APPEND);
	}
	//receive data deal for security
	public function rceDataDel($data, $dft = null)
	{
		return isset($data) ? strip_tags(addslashes(trim($data))) : $dft;
	}

	public function mysuccess($msg, $url, $time)
	{
		echo
		<<<eof
        				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<h2>$msg</h2>
<span style="font-size:100px; font-weight:bold;">:)</span>
<p>页面在<span id="second">$time</span>秒后会自动跳转，或直接点击<a id="tiao" href="$url">跳转</a></p>
<script type="text/javascript">
    //定义跳转地址
    var url = document.getElementById('tiao').href;
    //制作函数，倒数3、2、1，页面就跳转
    function daoshu(){
        var scd = document.getElementById('second');
        var time = --scd.innerHTML; //是一个真实数秒动作

        if(time<=0){
            //页面跳转
            window.location.href = url;
        }
    }
    //间隔函数，每间隔1s，就去执行daoshu()函数一次
    var mytime = setInterval("daoshu()",1000);
</script>
eof;
	}

	public function myerror($msg, $url, $time)
	{
		echo
		<<<eof
        				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<h2>$msg</h2>
<span style="font-size:100px; font-weight:bold;">>.<</span>
<p>页面在<span id="second">$time</span>秒后会自动跳转，或直接点击<a id="tiao" href="$url">跳转</a></p>
<script type="text/javascript">
    //定义跳转地址
    var url = document.getElementById('tiao').href;
    //制作函数，倒数3、2、1，页面就跳转
    function daoshu(){
        var scd = document.getElementById('second');
        var time = --scd.innerHTML; //是一个真实数秒动作

        if(time<=0){
            //页面跳转
            window.location.href = url;
        }
    }
    //间隔函数，每间隔1s，就去执行daoshu()函数一次
    var mytime = setInterval("daoshu()",1000);
</script>
eof;
	}
}     
               

?>