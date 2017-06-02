<?php
/* Smarty version 3.1.30, created on 2017-05-31 18:44:38
  from "G:\DeskWoo\Documents\website\phpClassic\blog\App\Back\View\Blog\blog_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e9e966e8e61_79752000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba0d3beb119b1e289d5e79f834065b4875c047f4' => 
    array (
      0 => 'G:\\DeskWoo\\Documents\\website\\phpClassic\\blog\\App\\Back\\View\\Blog\\blog_list.html',
      1 => 1496115586,
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
function content_592e9e966e8e61_79752000 (Smarty_Internal_Template $_smarty_tpl) {
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
                <span class="crumb-name">分类管理</span>
            </div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post" action="?p=back&c=Blog&a=batchDel">
                <div class="result-title">
                    <div class="result-list">
                        <a href="?p=back&c=Blog&a=Add"><i class="icon-font"></i>添加文章</a>
                        <a id="batchDel" onclick="batchDelSubmit()" onmouseover="changeCursor()"><i
                                class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <input class="allChoose" name="allChoose" type="radio" id="input_All" onclick="checkAll()">全选
                <input class="allChoose" name="allChoose" type="radio" id="input_uncheck" onclick="uncheck()">反选
                <input class="allChoose" name="allChoose" type="radio" id="input_othercheck" onclick="otherCheck()">不选
                <div class="result-content" id="divcheck">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%">
                                <input class="allChoose" name="" type="checkbox" onclick="checkAll()">
                            </th>
                            <th>标题</th>
                            <th>所属分类</th>
                            <th>作者</th>
                            <th>发布时间</th>
                            <th>点击数</th>
                            <th>操作</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <tr>
                            <td class="tc">
                                <input name="id[<?php echo $_smarty_tpl->tpl_vars['v']->value['blog_id'];?>
]" value="1" type="checkbox">
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['blog_title'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cate_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['author_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['blogtime'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['hits'];?>
</td>
                            <td>
                                <a class="link-update" href="?p=back&c=Blog&a=Edit&blog_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['blog_id'];?>
">修改</a>
                                <a class="link-del"
                                   href="javascript:if(confirm('确定删除该记录么么?')) window.location.href='?p=back&c=Blog&a=Delete&blog_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['blog_id'];?>
'">删除</a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>
</html><?php }
}
