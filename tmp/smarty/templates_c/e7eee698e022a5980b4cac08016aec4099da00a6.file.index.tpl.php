<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-18 13:33:14
         compiled from "..\views\default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16309551eb0dcb181c9-63166683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7eee698e022a5980b4cac08016aec4099da00a6' => 
    array (
      0 => '..\\views\\default\\index.tpl',
      1 => 1429353192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16309551eb0dcb181c9-63166683',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551eb0ddc29ca9_24431866',
  'variables' => 
  array (
    'resProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551eb0ddc29ca9_24431866')) {function content_551eb0ddc29ca9_24431866($_smarty_tpl) {?>

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
            <img src="../www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="120" />
        </a><br />
        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['item']->iteration%4==0) {?>
        <div id="bot"></div>
    <?php }?>
<?php } ?>




<?php }} ?>
