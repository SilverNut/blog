<?php
/* Smarty version 3.1.30, created on 2017-05-25 19:36:52
  from "G:\DeskWoo\Documents\website\phpClassic\blog\App\Home\View\User\login_register_modal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
    'unifunc' => 'content_5926c1d4cf7ed2_24706332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f45547eee4b3b4b2195085bc6f813715c415e7c' => 
    array (
      0 => 'G:\\DeskWoo\\Documents\\website\\phpClassic\\blog\\App\\Home\\View\\User\\login_register_modal.html',
        1 => 1495712209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
    function content_5926c1d4cf7ed2_24706332(Smarty_Internal_Template $_smarty_tpl)
    {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<style>body{padding-top: 60px;}</style>

    <link href="/Public/bootstrap3/css/bootstrap.css" rel="stylesheet"/>

    <link href="/Public/Home/User/css/login-register.css" rel="stylesheet"/>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	
	<?php echo '<script'; ?>
    src="/Public/Home/User/jquery/jquery-1.10.2.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
    src="/Public/bootstrap3/js/bootstrap.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
    src="/Public/Home/User/js/login-register.js" type="text/javascript"><?php echo '</script'; ?>
>

</head>
<body>
<div class="container" style="border: 1px solid red">
    <div class="row" style="border: 1px solid green">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                 <a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
                 <a class="btn big-register" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a></div>
            <div class="col-sm-4"></div>
        </div>
       
         
		 <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="social">
                                    <a class="circle github" href="/auth/github">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="/auth/google_oauth2">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="/auth/facebook">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="/login" accept-charset="UTF-8">
                                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8">
                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to 
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>        
    		      </div>
		      </div>
		  </div>
    </div>
</body>
</html>
<?php }
}
