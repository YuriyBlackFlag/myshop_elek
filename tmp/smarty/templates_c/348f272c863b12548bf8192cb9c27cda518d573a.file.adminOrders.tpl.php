<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 19:43:05
         compiled from "..\views\admin\adminOrders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2313755522d99290ed2-54155388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '348f272c863b12548bf8192cb9c27cda518d573a' => 
    array (
      0 => '..\\views\\admin\\adminOrders.tpl',
      1 => 1429469531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2313755522d99290ed2-54155388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resOrders' => 0,
    'item' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55522d993a6496_79758523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55522d993a6496_79758523')) {function content_55522d993a6496_79758523($_smarty_tpl) {?><h2>Заказы</h2>

<table>
    <tr>
        <th>№</th>
        <th>Действие</th>
        <th>ID заказа</th>
        <th>Статус</th>
        <th>Дата создания</th>
        <th>Дата оплаты</th>
        <th>Дополнительная информация</th>
        <th>Дата изменения заказа</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resOrders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->iteration;?>
</td>
            <td><a href="#" onclick="showProducts('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'); return false;">Показать товар заказа</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
            <td><input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status']) {?> checked="checked"
                <?php }?> onclick="updateOrderStatus('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');" /> Закрыт
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</td>
            <td>
                <input type="text" id="datePayment_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
" />
                <input type="button" value="Сохранить" onclick="updateDatePayment('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_modification'];?>
</td>
        </tr>

        <tr class="hideme" id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
            <td colspan="8">
                <?php if ($_smarty_tpl->tpl_vars['item']->value['children']) {?>
                    <table width="100%">
                        <tr>
                            <th>№</th>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Цена</th>
                            <th>Количество</th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['itemChild']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
 $_smarty_tpl->tpl_vars['itemChild']->iteration++;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->iteration;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
</td>
                                <td><a href="/admin/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['price'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['amount'];?>
</td>
                            </tr>
                        <?php } ?>
                    </table>
                <?php }?>
            </td>
        </tr>
    <?php } ?>
</table>
<br/><?php }} ?>
