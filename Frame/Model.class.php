<?php 
/*  
 +----------------------------------------------------------------------
 | Description: model public
 +----------------------------------------------------------------------
 | Date: 2017-05-19 09:58:42
 +----------------------------------------------------------------------
 | update: 2017-05-19 09:58:44
 +----------------------------------------------------------------------
 | Author: Felix
 +----------------------------------------------------------------------
 */

class Model{
	protected $dao;

	//protected $table='user';


	protected function __construct()
	{
		$this->dao =DAO::getInstance();

		global $config;
		@define('PREFIX',$config[$config['type']]['prefix']);
	}

	public function wErrLog($location,$msg=''){
		$err= "$msg\n"."--*--DAO:      " .DAO::$error."\n--*--location: $location\n--*--". date("Y-m-d H:i:s") . "\n\n";
		file_put_contents('./Public/errLog.txt',$err, FILE_APPEND);
	}
//	protected function getTableName(){
//		return PREFIX.$this->table;
//	}

//	protected function getAll(){
//		$prefix=PREFIX;
//		$sql="select * from {$prefix}{$this->table}";
//		return $this->dao->fetchAll($sql);
//	}
	
}     
               

?>