<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-26 19:46:47
         compiled from "..\views\default\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:288553d1677bc16b4-74143674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0971306797a147c4e98a27dfe880f0a610e69513' => 
    array (
      0 => '..\\views\\default\\category.tpl',
      1 => 1428425629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288553d1677bc16b4-74143674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resCategory' => 0,
    'resChildCats' => 0,
    'resProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553d1678f05a01_61194804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d1678f05a01_61194804')) {function content_553d1678f05a01_61194804($_smarty_tpl) {?>

<h2>Категория: <?php echo $_smarty_tpl->tpl_vars['resCategory']->value['name'];?>
</h2>
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
" width="140"  />
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
    <h2><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h2>
<?php } ?><?php }} ?>
