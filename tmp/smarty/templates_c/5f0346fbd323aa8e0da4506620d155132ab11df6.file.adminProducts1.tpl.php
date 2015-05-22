<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 19:41:44
         compiled from "..\views\admin\adminProducts1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1085955522d48dd93e7-05045456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f0346fbd323aa8e0da4506620d155132ab11df6' => 
    array (
      0 => '..\\views\\admin\\adminProducts1.tpl',
      1 => 1429387707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1085955522d48dd93e7-05045456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resProducts' => 0,
    'item' => 0,
    'resCategories' => 0,
    'itemCat' => 0,
    'mainItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55522d48ef66a7_86664519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55522d48ef66a7_86664519')) {function content_55522d48ef66a7_86664519($_smarty_tpl) {?><h3>Редактирование товара</h3>
<form id="form" class="appnitro" enctype="multipart/form-data" method="post" action="">
    <div class="form_description">
    </div>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <ul>
        <span>ID товара :<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</span>
        <li id="li_1" >
            <label class="description" for="element_1">Название</label>
            <div>
                <input id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="element_1" class="element text medium" type="text" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/>
            </div>
        </li>		<li id="li_2" >
            <label class="description" for="element_2">Цена</label>
            <div>
                <input id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="element_2" class="element text medium" type="text" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"/>
            </div>
        </li>		<li id="li_3" >
            <label class="description" for="element_3">Описание</label>
            <div>
                <textarea id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="element_3" class="element textarea medium" value=""><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</textarea>
            </div>
        </li>		<li id="li_4" >
            <label class="description" for="">Категория </label>
            <div>
                <select class="element select medium" id="itemCatId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="element_5">
                    <option value="0">Главная категория
                        <?php  $_smarty_tpl->tpl_vars['itemCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->key => $_smarty_tpl->tpl_vars['itemCat']->value) {
$_smarty_tpl->tpl_vars['itemCat']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['category_id']==$_smarty_tpl->tpl_vars['itemCat']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['mainItem']->value['name'];?>
><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

                        <?php } ?>
                </select>
            </div>
        </li>
        <li id="li_5">
            <label class="description" for="element_5">Вставить изображение </label>
            <div>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?><img src="/www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100"/><?php }?>
                <input id="itemImage_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="element_5" class="element file" type="file"/>
            </div>
        </li>
        <li id="li_6" >
            <label class="description" for="element_6">Статус товара  </label>
            <div>
                <input id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="element_5" class="element file" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['status']==0) {?> checked="checked"<?php }?>/>
            </div>
        </li>

        <li class="buttons">
            <input  type="button" value="Сохранить" onclick="updateProduct('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>
            <input  type="button" value="Удалить" onclick="deleteProduct('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>
        </li>
    </ul>
        <br />
        <hr>
    <?php } ?>
</form>
<?php }} ?>
