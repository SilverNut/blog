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
    public $userModel;

    public function __construct()
    {
        parent::__construct();
        $this->userModel = new UserModel();
	}



    public function loginCheck()
    {

        echo 2;
    }

    public function user_register()
    {
        //receive data
        $data['user_name'] = $this->rceDataDel($_POST['username']);
        $data['user_pwd'] = $this->rceDataDel($_POST['password']);
        $data['user_email'] = $this->rceDataDel($_POST['email']);
        $data['user_tel'] = $this->rceDataDel($_POST['tel']);
        $data['user_sex'] = $this->rceDataDel($_POST['sex']);

        //data insert database
        $res = $this->userModel->insertUser($data);
        if ($res) {
            $this->mysuccess('注册成功', '/index.php', 1);
        } else {
            $this->myerror('注册失败', '/index.php', 2);
        }
    }


    public function user_login()
    {
        $data['user_name'] = $this->rceDataDel($_POST['username_login']);
        $user_pwd = $this->rceDataDel($_POST['password_login']);

        //$res=$this->userModel->user_exit($data);
        $res = $this->userModel->user_verify($data);
        if ($res) {
            if ($res['user_pwd'] == $user_pwd) {
                #set cookie
                if (isset($_POST['remeber'])) {
                    setCookie('userId', $res['user_id'], time() + 7 * 24 * 3600, '/', 'blog.com');
                }
                @session_start();
                $_SESSION['userInfo'] = $res;//var_dump($_SESSION);
                $this->mysuccess('登录成功', '/index.php', 1);
            } else {
                $this->myerror('密码错误', '/index.php', 2);
            }
        } else {
            $this->myerror('登录失败', '/index.php', 2);
        }
    }

    public function user_logout()
    {
        setcookie('userId', '', time() - 1, '/', 'blog.com');
        session_start();
        unset($_SESSION['userInfo']);
        header("location:/index.php");
    }


    // 注册时判断手机号规则
    public function isTel()
    {
        if (isset($_GET['tel'])) {
            // 接收用户输入的数据
            $tel = trim($_GET['tel']);
            // 用正则判断手机格式的合法性
            $tel_pat = "/^1[3578]\d{9}$/";
            $result = preg_match($tel_pat, $tel);
            // 判断手机的合法性
            if (!$result) {
                exit("false"); //不是正确的手机格式
            } else {
                exit("true"); //正确的手机格式
            }
        }
    }

    //注册时检测用户是否存在
    public function user_exist()
    {

        if (isset($_GET['username'])) {

            $username = trim($_GET['username']);
            //var_dump($username);
            // 通过用户输入用户，在数据库里进行查找比对
            $res = $this->userModel->user_exist($username);
            //var_dump($res);
            // 判断用户是否存在
            if ($res) {
                exit("false"); //用户名已存在
            } else {
                exit("true"); //用户名不存在，验证通过，输出“true”，并结束程序
            }
        }
    }

    //登录时检测用户,是否为已注册用户
    public function user_exist_login()
    {

        if (isset($_GET['username_login'])) {

            $username = trim($_GET['username_login']);
            //var_dump($username);
            // 通过用户输入用户，在数据库里进行查找比对
            $res = $this->userModel->user_exist($username);
            //var_dump($res);
            // 判断用户是否存在
            if ($res) {
                exit("true"); //用户名已存在,可登录
            } else {
                exit("false"); //用户名不存在，验证失败，输出“false”，并结束程序
            }
        }
    }

    public function pdoTest()
    {
        $res = $this->userModel->pdoTest();
        echo "<pre>";
        print_r($res);
    }



    /*
     *
     * 邮箱规则：
① 邮箱名字长度为6位以上
② 后缀名(.com .cn等) 可以是1个或多个
③ 邮箱中间有@符号
④ 名字的组成内容有 字母、数字、字母数字混合、大小写字母、字母数字.点混合
⑤ 开始的第一个字符要求是 数字、大小写字母(不能是.点)*/


    //class end
}
