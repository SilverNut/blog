<?php
/* Smarty version 3.1.30, created on 2017-05-31 08:40:31
  from "G:\DeskWoo\Documents\website\phpClassic\blog\App\Home\View\Index\public\style.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e10ff216571_27775501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eb2eac4f0656d3fd194575859ebe3380afcdde8' => 
    array (
      0 => 'G:\\DeskWoo\\Documents\\website\\phpClassic\\blog\\App\\Home\\View\\Index\\public\\style.html',
      1 => 1496115585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e10ff216571_27775501 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- BOOTSTRAP CORE STYLE CSS -->
<link href="<?php echo INDEX_URL;?>
assets/css/bootstrap.css" rel="stylesheet"/>
<!-- FONTAWESOME STYLE CSS -->
<link href="<?php echo INDEX_URL;?>
assets/css/font-awesome.css" rel="stylesheet"/>
<!-- CUSTOM STYLE CSS -->
<link href="<?php echo INDEX_URL;?>
assets/css/style.css" rel="stylesheet"/>

<!--login-->
<link href="/Public/bootstrap3/css/bootstrap.css" rel="stylesheet"/>

<link href="<?php echo LOGIN_URL;?>
css/login-register.css" rel="stylesheet"/>
<!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">-->

<?php echo '<script'; ?>
 src="<?php echo LOGIN_URL;?>
jquery/jquery-1.10.2.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/Public/bootstrap3/js/bootstrap.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo LOGIN_URL;?>
js/login-register.js" type="text/javascript"><?php echo '</script'; ?>
>
<!--login-->


<?php echo '<script'; ?>
 src="<?php echo LOGIN_URL;?>
js/modernizr.js" type="text/javascript"><?php echo '</script'; ?>
>
<!--<?php echo '<script'; ?>
 src="<?php echo LOGIN_URL;?>
jquery/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>-->
<!--validate表单验证插件-->
<?php echo '<script'; ?>
 src="<?php echo LOGIN_URL;?>
validate/jquery.validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo LOGIN_URL;?>
validate/messages_zh.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo LOGIN_URL;?>
validate/additional-methods.js"><?php echo '</script'; ?>
><?php }
}
