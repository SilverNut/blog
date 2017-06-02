<?php
/* Smarty version 3.1.30, created on 2017-05-31 18:41:02
  from "G:\DeskWoo\Documents\website\phpClassic\blog\App\Home\View\Index\public\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e9dbe8c3e40_03135196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a855e77113e7cd587db588f12943facb45e1881' => 
    array (
      0 => 'G:\\DeskWoo\\Documents\\website\\phpClassic\\blog\\App\\Home\\View\\Index\\public\\header.html',
      1 => 1496227255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e9dbe8c3e40_03135196 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="header-section" style="padding: 4px;">
    <div class="col-sm-10"></div>
    <?php if (!empty($_SESSION['userInfo'])) {?>
    <div class="col-sm-2 text-right">
        <span><a href="?p=home">首页</a></span>
        <span>welcome!&nbsp;</span>
        <span><?php echo $_SESSION['userInfo']['user_name'];?>
</span>
        <span><a href="?c=user&a=user_logout">注销</a></span>
        <?php if ($_SESSION['userInfo']['user_name'] == 'wdw') {?>
        <span><a href="?p=back">后台</a></span>
        <?php }?>
    </div>
    <?php } else { ?>
    <div class="col-sm-2 text-right">
        <a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
        <a class="btn big-register" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a>
    </div>
    <?php }?>
    <div class="col-sm-0"></div>
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
                            <form method="post" action="/index.php?c=user&a=user_login" accept-charset="UTF-8"
                                  id="loginForm">
                                <input id="username_login" class="form-control" type="text" placeholder="username"
                                       name="username_login">
                                <input id="password_login" class="form-control" type="password" placeholder="Password"
                                       name="password_login">
                                七天登录 <input type="checkbox" id="remeber" name="remeber" value="1"/>
                                <input class="btn btn-default btn-login" type="button" value="Login"
                                       onclick="loginAjax()">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="content registerBox" style="display:none;">
                        <div class="form">
                            <form method="post" html="{:multipart=>true}" data-remote="true"
                                  action="/?p=home&c=user&a=user_register" accept-charset="UTF-8" id="registerForm">
                                <input id="username" class="form-control" type="text" placeholder="username"
                                       name="username">
                                <label class="input" for="sex"><span style="font-weight: normal;color: #333">性别：</span></label>
                                <input class="input" type="radio" name="sex" value="0" checked="checked" id="sex"/><span
                                    style="color: #333">男</span>
                                <input class="input" type="radio" name="sex" value="1" id="sex"/><span
                                    style="color: #333">女</span>
                                <input class="input" type="radio" name="sex" value="2" id="sex"/><span
                                    style="color: #333">保密</span>

                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" class="form-control" type="password" placeholder="Password"
                                       name="password">
                                <input id="password_confirmation" class="form-control" type="password"
                                       placeholder="Repeat Password" name="password_confirmation">
                                <input id="tel" class="form-control" type="text" placeholder="telphone" name="tel">

                                <input class="btn btn-default btn-register" type="submit" value="Create account"
                                       name="commit">
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

<section class="header-section">

    <div class="container">


        <div class="row">
            <div class="col-md-2">
                <img src="<?php echo INDEX_URL;?>
assets/img/lazysheep.jpg" class="img-circle img-responsive"
                     title="我是懒羊羊,我的发型好帅^-^"/>
            </div>
            <div class="col-md-4 text-center">
                <h1><strong>Devin Woo </strong></h1>
                <h4>Python & PHP</h4>
            </div>
            <div class="col-md-5">
                <h3>WHO M I :</h3>

                I am a 26 years old guy who loves bloggging and designing .
                I will provide all my works for free here with some good piece of information.
                You can reach me at <i><strong>Devin.gin.@gamil.com</strong></i>
            </div>
            <div class="col-md-1"></div>
        </div>


    </div>

</section>
<!--HOME SECTION END-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-2 spon-txt">
                <span>My Sponsers: </span>
            </div>
            <div class="col-md-10">
                <img src="<?php echo INDEX_URL;?>
assets/img/clients.png" alt="" class="img-rounded img-responsive"/>
            </div>


        </div>
    </div>
</section>
<!--SPONSORS SECTION END-->
<style>
    label.error {
        color: red;
        font-size: smaller;
        font-weight: normal;
        margin-top: 0.5em;
        width: 100%;
        float: none;
    }
</style>
<?php echo '<script'; ?>
>

    $(function () {
//            注册表彰页面验证
        $('#registerForm').validate({
//                验证规则
            rules: {
                username: {required: true, minlength: 3, maxlength: 16, remote: "/?p=home&c=user&a=user_exist"},
                sex: {required: true},
                email: {email: true},
                password: {required: true, minlength: 6, maxlength: 16},
                password_confirmation: {required: true, equalTo: '#password', minlength: 6, maxlength: 16},
                tel: {remote: "/?p=home&c=user&a=isTel"}

            },
//                错误提示
            messages: {
                username: {required: "必须填写用户名", remote: "该用户名已存在"},
                password: {required: "必须填写密码"},
                password_confirmation: {required: "必须填写密码", equalTo: "两次输入密码不一致"},
                tel: {remote: "请填写正确的手机格式"}
            }
        });

//            登录表单页面验证
        $("#loginForm").validate({
//                验证规则
            rules: {
                username_login: {
                    required: true,
                    minlength: 3,
                    maxlength: 16,
                    remote: "/?p=home&c=user&a=user_exist_login"
                },
                password_login: {required: true, minlength: 6, maxlength: 16}
            },
//                错误提示
            messages: {
                username_login: {required: "必须填写用户名", remote: '该用户不存在，请填写已注册用户'},
                password_login: {required: "必须填写密码"}
            }
        });
    });

<?php echo '</script'; ?>
>


<?php }
}
