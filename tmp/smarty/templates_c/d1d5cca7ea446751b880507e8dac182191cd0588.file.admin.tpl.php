<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 19:41:35
         compiled from "..\views\admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1447955522d3f68fd87-00653521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1d5cca7ea446751b880507e8dac182191cd0588' => 
    array (
      0 => '..\\views\\admin\\admin.tpl',
      1 => 1429206021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1447955522d3f68fd87-00653521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55522d3f77a3c8_46520838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55522d3f77a3c8_46520838')) {function content_55522d3f77a3c8_46520838($_smarty_tpl) {?><div id="blockNewCategory">
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
