<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-18 23:40:28
         compiled from "..\views\default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2186155241649531161-37498426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ca4200caec7cef14b1176481d0bfd2c480f07ba' => 
    array (
      0 => '..\\views\\default\\product.tpl',
      1 => 1429389469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2186155241649531161-37498426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5524164971d4d1_87445707',
  'variables' => 
  array (
    'resProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5524164971d4d1_87445707')) {function content_5524164971d4d1_87445707($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['resProduct']->value) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['resProduct']->value['name'];?>
</h3>

        <div>
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

<?php } else { ?>
        <div class="text">Нет такого товара!</div>
<?php }?><?php }} ?>
