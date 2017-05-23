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
    $p= isset($_GET['p']) ? ucfirst($_GET['p']) : 'Home';
    $c= isset($_GET['c']) ? ucfirst($_GET['c']) : 'Index';
    $a= isset($_GET['a']) ? $_GET['a'] : 'index';   

    define('DS',DIRECTORY_SEPARATOR);   
    define('ROOT',__DIR__);
    define('APP_PATH',ROOT.DS.'App'.DS);
    define('FRAME_PATH',ROOT.DS.'Frame'.DS);

    define("PUBLIC_PATH","/Public/");

    define('PLAT_NAME',$p);  //Home
    define('CONTROLLER_NAME',$c); //User
    define('ACTION_NAME',$a); //login
    define('PLAT_PATH',APP_PATH.$p.DS); //

    define('CSS_URL',PUBLIC_PATH.PLAT_NAME.'/css/');
    define('JS_URL',PUBLIC_PATH.PLAT_NAME.'/js/');
    define('IMG_URL',PUBLIC_PATH.PLAT_NAME.'/images/');
    define('JQ_URL',PUBLIC_PATH.PLAT_NAME.'/jquery/');



    //include(APP_PATH.$p.DS.'Controller'.DS.$c.'Controller.class.php');
    include_once FRAME_PATH.'Smarty'.DS.'Smarty.class.php';

    global $config;
    $config=include APP_PATH."Config/config.php";
    iniAutoload();
    $controllerName=$c.'Controller';
    $ctl= new $controllerName();
    $ctl->$a();


    function loadController($className){
        $path=PLAT_PATH.'Controller'.DS.$className.'.class.php';
        if (is_file($path)) {
            include_once $path;
        }
    } 

    function loadFrame($className){
        $path=FRAME_PATH.$className.'.class.php';
        if (is_file($path)) {
            include_once $path;
        }
    }

    function loadModel($className){
        $path=APP_PATH.'Model/'.$className.'.class.php';
        if (is_file($path)) {
            include_once $path;
        }
    }

    function iniAutoload(){
        spl_autoload_register('loadController');
        spl_autoload_register('loadFrame');
        spl_autoload_register('loadModel');
    }


?>