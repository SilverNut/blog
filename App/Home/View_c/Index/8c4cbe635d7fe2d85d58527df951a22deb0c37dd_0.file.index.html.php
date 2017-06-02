<?php
/* Smarty version 3.1.30, created on 2017-06-02 23:51:00
  from "G:\DeskWoo\Documents\website\phpClassic\blog\App\Home\View\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5931896472e947_77586594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c4cbe635d7fe2d85d58527df951a22deb0c37dd' => 
    array (
      0 => 'G:\\DeskWoo\\Documents\\website\\phpClassic\\blog\\App\\Home\\View\\Index\\index.html',
      1 => 1496418655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./public/style.html' => 1,
    'file:./public/header.html' => 1,
    'file:./public/right.html' => 1,
  ),
),false)) {
function content_5931896472e947_77586594 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Bootstrap Free Blog Template</title>
    <?php $_smarty_tpl->_subTemplateRender("file:./public/style.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- BOOTSTRAP CORE STYLE CSS -->
    <!-- FONTAWESOME STYLE CSS -->
    <!-- CUSTOM STYLE CSS -->
</head>
<body>

<?php $_smarty_tpl->_subTemplateRender("file:./public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--HOME SECTION END-->
<!--   &   -->
<!--SPONSORS SECTION END-->
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" title="网站模板">网站模板</a></div>
<hr/>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php echo $_smarty_tpl->tpl_vars['pageStr']->value;?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogBrief']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                <div class="blog-main">
                    <div class="heading-blog">
                        <a href="/index.php?p=home&c=index&a=singlepost"><?php echo $_smarty_tpl->tpl_vars['v']->value['blog_title'];?>
</a>
                    </div>
                    <?php if (!empty($_smarty_tpl->tpl_vars['v']->value['blog_cover'])) {?>
                    <a href="/index.php?p=home&c=index&a=singlepost">
                        <img src="<?php echo BLOG_COVER;
echo $_smarty_tpl->tpl_vars['v']->value['blog_cover'];?>
"  class="img-responsive img-rounded" alt="暂无图片" />
                    </a>
                    <?php }?>
                    <div class="blog-info">
                        <span class="label label-primary">Posted on 26th November 2014</span>
                        <span class="label label-success">In Technology</span>
                        <span class="label label-danger">By Jhon</span>
                            <span class="label label-info">
                                <i class="fa fa-thumbs-up"></i>+ 10
                        <i class="fa fa-thumbs-down"></i>-3
                            </span>
                    </div>
                    <div class="blog-txt">
                       <?php echo $_smarty_tpl->tpl_vars['v']->value['blog_brief'];?>

                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <!--BLOG circle END -->
                <nav>
                    <ul class="pagination">
                        <li><a>共<?php echo $_smarty_tpl->tpl_vars['pageFace']->value['pageHeader']['rows'];?>
条&nbsp;共<?php echo $_smarty_tpl->tpl_vars['pageFace']->value['pageHeader']['pages'];?>
页</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['pageFace']->value['pageCurrent'] == $_smarty_tpl->tpl_vars['pageFace']->value['firstPage']) {?>
                        <li class="disabled" ><a>首页</a></li>
                        <li class="disabled" ><a><span aria-hidden="true">&laquo;</span></a> </li>
                        <?php } else { ?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['pageFace']->value['pageWrap']['firstPage'];?>
">首页</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['pageFace']->value['pageWrap']['prePage'];?>
"><span aria-hidden="true">&laquo;</span></a> </li>
                        <?php }?>
                        <!--<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>-->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageFace']->value['pageList'], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <li <?php if ($_smarty_tpl->tpl_vars['v']->value['page'] == $_smarty_tpl->tpl_vars['pageFace']->value['pageCurrent']) {?>class="active"<?php }?> ><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
</a></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <?php if ($_smarty_tpl->tpl_vars['pageFace']->value['pageCurrent'] == $_smarty_tpl->tpl_vars['pageFace']->value['lastPage']) {?>
                            <li class="disabled" ><a><span aria-hidden="true">&raquo;</span></a> </li>
                             <li class="disabled" ><a>尾页</a></li>
                        <?php } else { ?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['pageFace']->value['pageWrap']['nextPage'];?>
"><span aria-hidden="true">&raquo;</span></a> </li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['pageFace']->value['pageWrap']['lastPage'];?>
">尾页</a></li>
                        <?php }?>

                    </ul>
                </nav>
                <!--PAGING  END -->
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:./public/right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!--right content-->


        </div>
    </div>
</section>
<hr/>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center set-foot">
            &copy 2014 jhon alexan | More Templates <a href="http://www.cssmoban.com/" target="_blank"
                                                       title="模板之家">模板之家</a> - Collect from <a
                href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
        </div>
    </div>
</div>

</body>
</html>
<?php }
}
