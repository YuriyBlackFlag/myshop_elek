<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-22 15:33:22
         compiled from "..\views\modern\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13394555f1c13921c26-21680378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '901fb3ba15c8ba248d9c6cffcea4897c6c6421ed' => 
    array (
      0 => '..\\views\\modern\\product.tpl',
      1 => 1432297480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13394555f1c13921c26-21680378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555f1c139b6347_89409353',
  'variables' => 
  array (
    'resProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555f1c139b6347_89409353')) {function content_555f1c139b6347_89409353($_smarty_tpl) {?>
<div class="scrollContainer">
    <div class="scroll">
<?php if ($_smarty_tpl->tpl_vars['resProduct']->value) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['resProduct']->value['name'];?>
</h3>


                <img src="/www/images/products/<?php echo $_smarty_tpl->tpl_vars['resProduct']->value['image'];?>
" width="430"  /><br />
            Цена <?php echo $_smarty_tpl->tpl_vars['resProduct']->value['price'];?>
 UAH
            <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['resProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?> class="hideme"<?php }?> href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['resProduct']->value['id'];?>
); return false;"
               alt="Удалить из корзины">Удалить из корзины</a>
                <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['resProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?> class="hideme"<?php }?> href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['resProduct']->value['id'];?>
); return false;"
                        alt="Добавить в корзину">Добавить в корзину</a>

            <p>Описание <br />
                <?php echo $_smarty_tpl->tpl_vars['resProduct']->value['description'];?>

            </p>
                </div>
        </div>

<?php } else { ?>
        <div class="text">Нет такого товара!</div>
<?php }?>
</div>
    </div><?php }} ?>
