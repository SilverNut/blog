<?php
/* Smarty version 3.1.30, created on 2017-05-31 21:00:57
  from "G:\DeskWoo\Documents\website\phpClassic\blog\App\Back\View\Blog\blog_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ebe89319a76_86694648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac5c49a9a98a68765820051e983a6cbdb5417c52' => 
    array (
      0 => 'G:\\DeskWoo\\Documents\\website\\phpClassic\\blog\\App\\Back\\View\\Blog\\blog_add.html',
      1 => 1496235374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/style.html' => 1,
    'file:../Public/ueditor.html' => 1,
    'file:../Public/head.html' => 1,
    'file:../Public/left.html' => 1,
  ),
),false)) {
function content_592ebe89319a76_86694648 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <!--加载style配置-->
    <?php $_smarty_tpl->_subTemplateRender("file:../Public/style.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</head>
<body>
<!--加载ueditor-->
<?php $_smarty_tpl->_subTemplateRender("file:../Public/ueditor.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--header-->
<?php $_smarty_tpl->_subTemplateRender("file:../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container clearfix">

    <!--左侧菜单栏-->
    <?php $_smarty_tpl->_subTemplateRender("file:../Public/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!--左侧菜单栏 begin-->
    
    <!--右侧主操作区-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i>
                <a href="?p=back">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">博文管理</span>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">添加博文</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="?p=back&c=Blog&a=Add" method="post" id="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>所属分类：</th>
                                <td>
                                   <select name="category_id">
                                       <option value="0">请选择</option>
                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catelist']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                       <option value='<?php echo $_smarty_tpl->tpl_vars['v']->value['cate_id'];?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['cate_name'];?>
</option>
                                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                   </select>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" name="blog_title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>简述:</th>
                                <td>
                                    <textarea class=" required" name="blog_brief" rows="5" cols="50" ></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>图片：</th>
                                <td>
                                    <input type="text" size="20" name="upfile" id="upfile" style="border:1px dotted #ccc">
                                    <input class='btn' type="button" value="浏览" onclick="path.click()" style="border:1px solid #ccc;">
                                    <input type="file" name="blog_cover" id="path" style="display:none" onchange="upfile.value=this.value">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>内容：</th>
                                <td width="90%">
                                    <?php echo '<script'; ?>
 id="editor" name="blog_content" type="text/plain">

                                    <?php echo '</script'; ?>
>
                                </td>

                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>

        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>
</html><?php }
}
