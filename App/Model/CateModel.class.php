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
class CateModel extends Model{
	private $tableName=null;
	protected $cateDAO;

	public function __construct($name='cate'){
		global $config;
		$this->tableName=$config[$config['type']]['prefix'].$name;
		$this->cateDAO=DAO::getInstance();
	}

	public function getAll(){
		$sql="select * from {$this->tableName} order by cate_id desc ";
		$dao= DAO::getInstance();
		$data=$dao->fetchAll($sql);
		return $data;
	}

	public function insertData($data){
		$name=$data['cate_name'];
		$desc=$data['cate_description'];
		$is_show=isset($data['is_show']) ? $data['is_show'] : 0 ;
		$sql="insert into {$this->tableName} values (null,'$name','$desc','$is_show')";

		$dao= DAO::getInstance();
		$data=$dao->db_exec($sql);
		//var_dump(DAO::$error);
		return $data;
	}

	public function saveData($data){
		$cate_id=$data['cate_id'];
		$cate_name=$data['cate_name'];
		$cate_description=$data['cate_description'];
		$is_show=$data['is_show'];
		$sql="update {$this->tableName} set cate_name = '$cate_name', cate_description = '$cate_description', is_show = '$is_show' where cate_id=$cate_id  ";
		$dao= DAO::getInstance();
		$data=$dao->db_exec($sql);
		return $data;
	}

	public function delRowById($data){
		$sql="delete from {$this->tableName} where cate_id = $data ";
		$dao= DAO::getInstance();
		$data=$dao->db_exec($sql);
		return $data;
	}

	public function delRowsById($data){
		$data=array_keys($data);
		$data=implode($data,',');
		$sql="delete from {$this->tableName} where cate_id in ($data) ";
		
		$data=$this->cateDAO->db_exec($sql);
		return $data;
	}

	public function getInfoById($cate_id){
		$sql="select * from {$this->tableName} where cate_id = $cate_id";
		$dao= DAO::getInstance();
		$data=$dao->fetchRow($sql);
		return $data;
		
	}
}     
               

?>