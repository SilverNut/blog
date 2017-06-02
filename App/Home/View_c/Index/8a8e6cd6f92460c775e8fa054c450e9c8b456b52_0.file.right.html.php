<?php
/* Smarty version 3.1.30, created on 2017-05-31 17:12:42
  from "G:\DeskWoo\Documents\website\phpClassic\blog\App\Home\View\Index\public\right.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e890acc13c4_52320132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a8e6cd6f92460c775e8fa054c450e9c8b456b52' => 
    array (
      0 => 'G:\\DeskWoo\\Documents\\website\\phpClassic\\blog\\App\\Home\\View\\Index\\public\\right.html',
      1 => 1496221948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e890acc13c4_52320132 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-3">

    <ul class="list-group">
        <li class="list-group-item">
            <strong>Main Categories</strong>
        </li>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoryList']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li class="list-group-item">
            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['v']->value['cate_description'];?>
</span>
            <a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['cate_name'];?>
</a>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        <li class="list-group-item">
            <strong>Other Categories</strong>
        </li>
        <li class="list-group-item">
            <span class="badge">104</span>
            Technology
        </li>
        <li class="list-group-item">
            <span class="badge">34</span>
            Blogging
        </li>
        <li class="list-group-item">
            <span class="badge">10</span>
            Information
        </li>
        <li class="list-group-item">
            <span class="badge">50</span>
            Security
        </li>
    </ul>
    <br/>

    <ul class="list-group">
        <li class="list-group-item">Advrtisements
        </li>
        <li class="list-group-item">
            <a href="#">
                <img src="<?php echo INDEX_URL;?>
assets/img/ad1.jpg" class="img-responsive"/>
            </a>
            <br/>
            <a href="#">
                <img src="<?php echo INDEX_URL;?>
assets/img/ad2.jpg" class="img-responsive"/>
            </a>
        </li>
    </ul>

    <br/>
    <div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Subscribe For Updates</h3>
            </div>
            <div class="panel-body">
                <input type="text" class="form-control" placeholder="Your Email"/>
                <hr/>
                <a href="#" class="btn btn-info btn-sm btn-block">subscribe</a>
            </div>
        </div>
    </div>
</div><?php }
}
