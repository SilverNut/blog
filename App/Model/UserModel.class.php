<?php

class UserModel extends Model
{
    public $table;

    public function __construct()
    {
        parent::__construct();
        global $config;
        $this->table = $config[$config['type']]['prefix'] . 'user';
    }

    public function insertUser($data)
    {
        //data receive
        $user_name = $data['user_name'];
        $user_pwd = $data['user_pwd'];
        $user_email = $data['user_email'];
        $user_tel = $data['user_tel'];
        $user_sex = $data['user_sex'];
        $add_time = time();
        $login_time = time();

        $sql = "insert into {$this->table} VALUES (NULL ,'$user_name','$user_pwd','$user_email','$user_tel','$user_sex',$add_time,$login_time)";

        return $this->dao->db_exec($sql);
    }

    public function user_verify($data)
    {
        $user_name = $data['user_name'];


        $sql = "select * from {$this->table} WHERE user_name='$user_name'";
        $res = $this->dao->fetchRow($sql);
        return $res;
    }

    public function user_exist($username)
    {
        $sql = "select * from {$this->table} where user_name='$username'";
        $res = $this->dao->fetchRow($sql);//var_dump($res);
        if ($res == false) $this->dao->writeDaoErr($res);
        return $res;
    }

    public function pdoTest()
    {
        return $this->dao->fetchRow("select * from bg_user where user_name='wdw' ");
    }


}

?>