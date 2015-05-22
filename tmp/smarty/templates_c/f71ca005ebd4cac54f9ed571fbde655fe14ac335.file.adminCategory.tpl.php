<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 19:43:00
         compiled from "..\views\admin\adminCategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2298455522d94b69909-41461871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f71ca005ebd4cac54f9ed571fbde655fe14ac335' => 
    array (
      0 => '..\\views\\admin\\adminCategory.tpl',
      1 => 1429299333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2298455522d94b69909-41461871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resCategories' => 0,
    'item' => 0,
    'resMainCategories' => 0,
    'mainItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55522d94cd0f50_76192705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55522d94cd0f50_76192705')) {function content_55522d94cd0f50_76192705($_smarty_tpl) {?>
<h2>Изменение категорий товаров</h2>

<table border="1" cellpadding="1" cellspacing="1" width="80%">
    <tr>
        <th>№</th>
        <th>ID</th>
        <th>Название</th>
        <th>Родительская категория</th>
        <th>Действие</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->iteration;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
            <td><input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/></td>
            <td>
                <select id="parentId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                    <option value="0">Главная категория
                    <?php  $_smarty_tpl->tpl_vars['mainItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mainItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resMainCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mainItem']->key => $_smarty_tpl->tpl_vars['mainItem']->value) {
$_smarty_tpl->tpl_vars['mainItem']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['mainItem']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==$_smarty_tpl->tpl_vars['mainItem']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['mainItem']->value['name'];?>

                    <?php } ?>
                </select>
            </td>
            <td><input type="button" value="Сохранить" onclick="updateCat(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/></td>
        </tr>
    <?php } ?>
</table><?php }} ?>
