<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-18 12:59:43
         compiled from "..\views\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11542551fac93ede463-29922514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5f613af10a8a5ffa6cd22d4b177d97fa4813247' => 
    array (
      0 => '..\\views\\default\\header.tpl',
      1 => 1429351015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11542551fac93ede463-29922514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551fac940c4eb4_21796796',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551fac940c4eb4_21796796')) {function content_551fac940c4eb4_21796796($_smarty_tpl) {?><!doctype HTML>
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
