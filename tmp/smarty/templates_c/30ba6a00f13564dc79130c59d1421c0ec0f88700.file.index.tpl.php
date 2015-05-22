<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-22 17:33:55
         compiled from "..\views\modern\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11195555ee73e94c912-70390311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ba6a00f13564dc79130c59d1421c0ec0f88700' => 
    array (
      0 => '..\\views\\modern\\index.tpl',
      1 => 1432305225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11195555ee73e94c912-70390311',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555ee73eb3cb06_05147044',
  'variables' => 
  array (
    'resProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ee73eb3cb06_05147044')) {function content_555ee73eb3cb06_05147044($_smarty_tpl) {?>
<div id="templatemo_content">

            <div class="scroll">
                <div class="scrollContainer">

                    <div class="panel" id="home">
                        <h2>Наши товары</h2>

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
                <?php if ($_smarty_tpl->tpl_vars['item']->iteration%3==0) {?>
                        <div id="bot"></div>
                <?php }?>
            <?php } ?>
            </div>
                </div>
            </div>
</div>

<?php }} ?>
