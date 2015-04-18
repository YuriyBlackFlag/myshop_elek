<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-18 18:20:14
         compiled from "..\views\admin\adminProducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35355325bc18b5603-90366854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ed2e1972beebea6a1c085d140cc451b2bf2eb6a' => 
    array (
      0 => '..\\views\\admin\\adminProducts.tpl',
      1 => 1429370407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35355325bc18b5603-90366854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55325bc18b9488_74868369',
  'variables' => 
  array (
    'resCategories' => 0,
    'itemCat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55325bc18b9488_74868369')) {function content_55325bc18b9488_74868369($_smarty_tpl) {?>
<h3>Вставка товара</h3>
<form id="form" class="appnitro" enctype="multipart/form-data" method="post" action="">
    <div class="form_description">
    </div>
    <ul>

        <li id="li_1" >
            <label class="description" for="element_1">Название</label>
            <div>
                <input id="newItemName" name="element_1" class="element text medium" type="text" maxlength="255" value=""/>
            </div>
        </li>		<li id="li_2" >
            <label class="description" for="element_2">Цена</label>
            <div>
                <input id="newItemPrice" name="element_2" class="element text medium" type="text" maxlength="255" value=""/>
            </div>
        </li>		<li id="li_3" >
            <label class="description" for="newItemDesc">Описание</label>
            <div>
                <textarea id="newItemDesc" name="element_3" class="element textarea medium"></textarea>
            </div>
        </li>		<li id="li_5" >
            <label class="description" for="">Категория </label>
            <div>
                <select class="element select medium" id="newItemCatId" name="element_5">
                    <option value="0">Главная категория
                        <?php  $_smarty_tpl->tpl_vars['itemCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->key => $_smarty_tpl->tpl_vars['itemCat']->value) {
$_smarty_tpl->tpl_vars['itemCat']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

                        <?php } ?>
                </select>
            </div>
        </li>		<li id="li_4" >
            <label class="description" for="element_4">Вставить изображение  </label>
            <div>
                <input id="newItemImage" name="element_4" class="element file" type="file"/>
            </div>
        </li>

        <li class="buttons">
            <input  type="button" value="Сохранить" onclick="addProduct();"/>
        </li>
    </ul>
</form>
<?php }} ?>
