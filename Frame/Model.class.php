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
		define('PREFIX',$config[$config['type']]['prefix']);
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