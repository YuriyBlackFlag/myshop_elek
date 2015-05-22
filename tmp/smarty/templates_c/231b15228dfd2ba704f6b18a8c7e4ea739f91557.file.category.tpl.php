<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-22 23:08:17
         compiled from "..\views\modern\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4317555f1bf3113ad0-23181558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '231b15228dfd2ba704f6b18a8c7e4ea739f91557' => 
    array (
      0 => '..\\views\\modern\\category.tpl',
      1 => 1432325291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4317555f1bf3113ad0-23181558',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555f1bf324c314_26996006',
  'variables' => 
  array (
    'resCategory' => 0,
    'resChildCats' => 0,
    'resProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555f1bf324c314_26996006')) {function content_555f1bf324c314_26996006($_smarty_tpl) {?>
<div class="scroll">
<div class="scrollContainer">
    <div class="panel" id="home">

<h3>Категория: <?php echo $_smarty_tpl->tpl_vars['resCategory']->value['name'];?>
</h3>
<?php if ($_smarty_tpl->tpl_vars['resChildCats']->value==null) {?>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
    <div id="main">
        <a  href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
            <img src="/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="120"  />
        </a><br />
        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
    </div>

    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
    <div class="text">Нет товаров в данной категории!</div>
    <?php if ($_smarty_tpl->tpl_vars['item']->iteration%3==0) {?>
        <div id="bot"></div>
    <?php }?>

<?php } ?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resChildCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
    <h4><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h4>
<?php } ?>
        </div>
    </div>
    </div><?php }} ?>
