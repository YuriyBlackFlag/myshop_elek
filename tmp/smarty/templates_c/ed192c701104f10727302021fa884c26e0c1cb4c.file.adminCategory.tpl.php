<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-17 22:35:43
         compiled from "..\views\admin\adminCategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2099155315f70e5daf0-13943082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed192c701104f10727302021fa884c26e0c1cb4c' => 
    array (
      0 => '..\\views\\admin\\adminCategory.tpl',
      1 => 1429299333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2099155315f70e5daf0-13943082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55315f718eb4c9_34329799',
  'variables' => 
  array (
    'resCategories' => 0,
    'item' => 0,
    'resMainCategories' => 0,
    'mainItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55315f718eb4c9_34329799')) {function content_55315f718eb4c9_34329799($_smarty_tpl) {?>
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
