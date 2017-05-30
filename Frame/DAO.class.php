<?php 
/*  
 +----------------------------------------------------------------------
 | Description: DAO 
 +----------------------------------------------------------------------
 | Date: 2017-05-19 10:05:17
 +----------------------------------------------------------------------
 | update: 2017-05-19 10:05:18
 +----------------------------------------------------------------------
 | Author: Felix
 +----------------------------------------------------------------------
 */
class DAO{
	public static $error=null;
	private static $dao = null;
	private $pdo;

	private  function __construct(){
		global $config;

		$type     = $config['type'];
		$host     = $config[$type]['host'];
		$port     = $config[$type]['port'];
		$user     = $config[$type]['user'];
		$password = $config[$type]['password'];
		$charset  = $config[$type]['charset'];
		$dbname   = $config[$type]['dbname'];

		try {
			$this->pdo = new PDO("{$type}:host={$host};port={$port};charset={$charset};dbname={$dbname}",$user,$password);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			self::$error=$e->getMessage();
		}
		

	}

	public static function getInstance(){
		if (!self::$dao instanceof self) {
			self::$dao = new self;
		}

		if (!is_object(self::$dao->pdo)) {
			self::$dao=null;
		}

		return self::$dao;

	}

	public function db_exec($sql){
		try {
			return $this->pdo->exec($sql);
		} catch (PDOException $e) {
			self::$error=$e->getMessage();
			return false;
		}
	}

	public function db_insertID(){
		return $this->pdo->lastInsertId();
	}

	public function fetchAll($sql,$format=null){
		$pdoFormat= $format=='num' ? PDO::FETCH_NUM : ($format=='both' ? PDO::FETCH_BOTH : PDO::FETCH_ASSOC) ;
		try {
			$stmt=$this->pdo->query($sql);
			$res= $stmt->fetchAll($pdoFormat);
			return $res;
		} catch (PDOException $e) {
            self::$error  = $e->getMessage();
		}
	}

	public function fetchRow($sql,$format=null){
		$pdoFormat= $format=='num' ? PDO::FETCH_NUM : ($format=='both' ? PDO::FETCH_BOTH : PDO::FETCH_ASSOC) ;
		try {
			$stmt=$this->pdo->query($sql);
			$res= $stmt->fetch($pdoFormat);
			return $res;
		} catch (PDOException $e) {
			 self::$error  = $e->getMessage();
		}
	}

	public function fetchCol($sql,$format=null){

		try {
			$stmt=$this->pdo->query($sql);
			$res= $stmt->fetchColumn (0);
			return $res;
		} catch (PDOException $e) {
			 self::$error  = $e->getMessage();
		}
	}

	public function writeDaoErr($msg = '')
	{
		file_put_contents('./daoErr.txt', DAO::$error . "---*$msg*---" . date("Y-m-d H:i:s") . "\n", FILE_APPEND);
	}

	private function __clone()
	{

	}
}     
               

?>