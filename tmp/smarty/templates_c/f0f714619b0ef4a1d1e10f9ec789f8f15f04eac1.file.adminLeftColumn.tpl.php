<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-18 23:29:09
         compiled from "..\views\admin\adminLeftColumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6980552fcd6f40cae0-96676683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0f714619b0ef4a1d1e10f9ec789f8f15f04eac1' => 
    array (
      0 => '..\\views\\admin\\adminLeftColumn.tpl',
      1 => 1429388943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6980552fcd6f40cae0-96676683',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552fcd6f410961_89163265',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552fcd6f410961_89163265')) {function content_552fcd6f410961_89163265($_smarty_tpl) {?><div id="leftColumn">

    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
        <dl>
            <dt><a href="/admin/">Главная</a></dt>
            <dt><a href="/admin/category/" >Категории</a></dt>
            <dt><a href="/admin/products/" >Товары</a></dt>
                <dd><a href="/admin/updateproduct/" >Редактирование</a></dd>
            <dt><a href="/admin/orders/" >Заказы</a></dt>
        </dl>
    </div>

</div><?php }} ?>
