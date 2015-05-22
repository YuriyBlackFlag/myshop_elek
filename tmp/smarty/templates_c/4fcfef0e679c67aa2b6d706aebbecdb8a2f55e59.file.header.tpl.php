<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-25 22:27:38
         compiled from "..\views\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30992553beaaab5b210-71540338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fcfef0e679c67aa2b6d706aebbecdb8a2f55e59' => 
    array (
      0 => '..\\views\\default\\header.tpl',
      1 => 1429351015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30992553beaaab5b210-71540338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553beaaad0cbf5_21040491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553beaaad0cbf5_21040491')) {function content_553beaaad0cbf5_21040491($_smarty_tpl) {?><!doctype HTML>
<html>
<head>
    <meta charset ='utf-8' />
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="/www/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/www/js/main.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="container">
<header>
    <h1>Электрончик </br> <span>интернет магазин нужных вещей</span></h1>
    <div class="Caption">Корзина<br />
        <a href="/cart/" title="Перейти в корзину">В корзине</a>
        <span id="cartCntItems">
            <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>пусто<?php }?>
        </span>
    </div>
</header>


<?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div id="centerColumn">


<?php }} ?>
