<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 20:40:23
         compiled from "..\views\admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1069552fcd6f46a6f5-38153065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '276fac3283512773fe8c19c1fb756bd2dcf714fc' => 
    array (
      0 => '..\\views\\admin\\admin.tpl',
      1 => 1429206021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1069552fcd6f46a6f5-38153065',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552fcd6f46e579_07312359',
  'variables' => 
  array (
    'resCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552fcd6f46e579_07312359')) {function content_552fcd6f46e579_07312359($_smarty_tpl) {?><div id="blockNewCategory">
    <span id="bolder">Новая категория:</span>
    <input name="newCategoryName" id="newCategoryName" type="text" value="" />
    <br />
    <br />
    Является подкатегорией для
    <select name="generalCatId">
        <option value="0">Главная категория
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

            <?php } ?>
    </select>
    <br />
    <br />
    <input type="button" onclick="newCategory()" value="Добавить категорию" />
</div><?php }} ?>
