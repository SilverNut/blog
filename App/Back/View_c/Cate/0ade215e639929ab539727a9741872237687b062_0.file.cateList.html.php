<?php
/* Smarty version 3.1.30, created on 2017-05-25 00:29:56
  from "G:\DeskWoo\Documents\website\phpClassic\blog\App\Back\View\Cate\cateList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
    'unifunc' => 'content_5925b504d46218_38098708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ade215e639929ab539727a9741872237687b062' => 
    array (
      0 => 'G:\\DeskWoo\\Documents\\website\\phpClassic\\blog\\App\\Back\\View\\Cate\\cateList.html',
        1 => 1495643394,
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
    function content_5925b504d46218_38098708(Smarty_Internal_Template $_smarty_tpl)
    {
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
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post" action="?p=back&c=Cate&a=batchDel">
                <div class="result-title">
                    <div class="result-list">
                        <a href="?p=back&c=Cate&a=add"><i class="icon-font"></i>添加分类</a>
                        <a id="batchDel"  onclick="batchDelSubmit()" onmouseover="changeCursor()"><i class="icon-font"></i>批量删除</a>
                    </div>
                    <input class="allChoose" name="allChoose" type="radio" id="input_All"  onclick="checkAll()">全选
                    <input class="allChoose" name="allChoose" type="radio" id="input_uncheck"  onclick="uncheck()">反选
                    <input class="allChoose" name="allChoose" type="radio" id="input_othercheck"  onclick="otherCheck()">不选
                </div>
                <div class="result-content" id="divcheck">
                    
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%">
                               <input class="allChoose" name="allChoose" type="checkbox" onclick="checkAll()" >
                            </th>
                            <th>ID</th>
                            <th>标题</th>
                            <th>评论</th>
                            <th>操作</th>
                        </tr>
                     
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <tr>
                            <td class="tc">
                                <input name="id[<?php echo $_smarty_tpl->tpl_vars['value']->value['cate_id'];?>
]" value="1" type="checkbox">
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['cate_id'];?>
</td>
                            <td ><?php echo $_smarty_tpl->tpl_vars['value']->value['cate_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['cate_description'];?>
</td>
                            <td>
                                <a class="link-update" href="?p=back&c=Cate&a=update&cate_id=<?php echo $_smarty_tpl->tpl_vars['value']->value['cate_id'];?>
">修改</a>
                                <a class="link-del" href="javascript:if(confirm('确定删除该记录么么?')) window.location.href='?p=back&c=Cate&a=delete&cate_id=<?php echo $_smarty_tpl->tpl_vars['value']->value['cate_id'];?>
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
