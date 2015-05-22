<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-22 20:18:20
         compiled from "..\views\modern\leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17134555f14bc1f3ea1-60417634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9b47c364b198e5090b5ab78b89b76a0a1efe677' => 
    array (
      0 => '..\\views\\modern\\leftcolumn.tpl',
      1 => 1432315099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17134555f14bc1f3ea1-60417634',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555f14bc27ca40_92445807',
  'variables' => 
  array (
    'resCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555f14bc27ca40_92445807')) {function content_555f14bc27ca40_92445807($_smarty_tpl) {?><div id="templatemo_sidebar">
    <div id="menu">
        <ul class="navigation">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            
            <li><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>

            
        <?php } ?>
            <li></li>
        </ul>

        <div class="cleaner">
        </div>

    </div>
</div> <!-- end of templatemo_sidebar --><?php }} ?>
