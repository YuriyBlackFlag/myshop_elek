<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 19:41:35
         compiled from "..\views\admin\adminLeftColumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1534255522d3f678685-21817336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f774b1f4df1f8a21c7d5c88a46c38a2490058119' => 
    array (
      0 => '..\\views\\admin\\adminLeftColumn.tpl',
      1 => 1429388943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1534255522d3f678685-21817336',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55522d3f67c504_33918018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55522d3f67c504_33918018')) {function content_55522d3f67c504_33918018($_smarty_tpl) {?><div id="leftColumn">

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
