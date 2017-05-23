<?php
/* Smarty version 3.1.30, created on 2017-05-23 16:01:47
  from "G:\DeskWoo\Documents\website\phpClassic\blog\App\Back\View\Cate\cateUpdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5923ec6b945336_53759962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24045e85859e2857854782724eca5aad8386f7ae' => 
    array (
      0 => 'G:\\DeskWoo\\Documents\\website\\phpClassic\\blog\\App\\Back\\View\\Cate\\cateUpdate.html',
      1 => 1495526445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/style.html' => 1,
    'file:../Public/head.html' => 1,
    'file:../Public/left.html' => 1,
  ),
),false)) {
function content_5923ec6b945336_53759962 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <?php $_smarty_tpl->_subTemplateRender("file:../Public/style.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 >
        $(function(){
            $("#nowtime").css({color:'red'});
            window.setInterval('ShowTime()',1000);
        });
        function ShowTime(){
            var t = new Date();
            var str = t.getFullYear() + '年';
            str += t.getMonth() + '月';
            str += t.getDate() + '日 ';
            str += t.getHours() + ':';
            str += t.getMinutes() + ':';
            str += t.getSeconds() + '';
            $("#nowtime").html(str);
        }
    <?php echo '</script'; ?>
>
</head>
<body>



  <!--页面头部-->
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
                <span class="crumb-name">分类管理</span>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">修改分类</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="?p=back&c=Cate&a=update&cate_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['cate_id'];?>
" method="post" id="myform" >
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>分类名称：</th>
                                <td>
                                    <input class="common-text required" id="title" name="category_name" size="50" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cate_name'];?>
" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>分类描述：</th>
                                <td>
                                    <textarea name="category_desc" class="common-textarea" cols="60" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['cate_description'];?>
</textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>是否显示：</th>
                                <td>
                                    <input  name="is_show"  type="radio" value="0"  <?php if ($_smarty_tpl->tpl_vars['info']->value['is_show'] == '0') {?> checked="checked" <?php }?>  >显示
                                    <input  name="is_show"  type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['info']->value['is_show'] == '1') {?> checked="checked" <?php }?> >不显示
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>

        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>
</html><?php }
}
