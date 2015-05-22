<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-22 15:23:07
         compiled from "..\views\modern\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11444555f1b72442133-94947275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7744ee92e63fbf7f98defc5a83c4a59c1fd0a979' => 
    array (
      0 => '..\\views\\modern\\cart.tpl',
      1 => 1432297387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11444555f1b72442133-94947275',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555f1b725111e9_98404535',
  'variables' => 
  array (
    'resProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555f1b725111e9_98404535')) {function content_555f1b725111e9_98404535($_smarty_tpl) {?>
<div class="scrollContainer">

    <div class="panel" id="home">
<h2>Корзина</h2>

<?php if (!$_smarty_tpl->tpl_vars['resProducts']->value) {?>
    В корзине пусто.

<?php } else { ?>
    <form action="/cart/order/" method="POST">
    <h3>Данные заказа</h3>
    <table>
        <tr>
            <td>
                №
            </td>
            <td>
                Наименование
            </td>
            <td>
                Количество
            </td>
            <td>
                Цена за единицу
            </td>
            <td>
                Цена
            </td>
            <td>
                Действие
            </td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->iteration;?>

                </td>

                <td>
                    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
                </td>

                <td>
                    <input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="1" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/>
                </td>

                <td>
			<span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

            </span>
                </td>

                <td>
			 <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

            </span>
                </td>

                <td>
                    <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Удалить из корзины">Удалить</a>
                    <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hideme" href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Восстановить элемент">Восстановить</a>

                </td>

            </tr>
        <?php } ?>

    </table>
        <input type="submit" value="Оформить заказ"/>
    </form>
<?php }?>
        </div>
        </div><?php }} ?>
