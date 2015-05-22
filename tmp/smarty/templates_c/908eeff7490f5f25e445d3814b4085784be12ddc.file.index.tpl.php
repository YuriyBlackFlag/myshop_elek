<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-25 22:27:38
         compiled from "..\views\default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24078553beaaae398b4-45722751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '908eeff7490f5f25e445d3814b4085784be12ddc' => 
    array (
      0 => '..\\views\\default\\index.tpl',
      1 => 1429353192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24078553beaaae398b4-45722751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553beaaae5cb48_60845105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553beaaae5cb48_60845105')) {function content_553beaaae5cb48_60845105($_smarty_tpl) {?>

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
