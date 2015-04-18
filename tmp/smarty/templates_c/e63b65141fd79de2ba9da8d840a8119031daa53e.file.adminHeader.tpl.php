<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 17:54:47
         compiled from "..\views\admin\adminHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21591552fcd3788c4b0-28278339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e63b65141fd79de2ba9da8d840a8119031daa53e' => 
    array (
      0 => '..\\views\\admin\\adminHeader.tpl',
      1 => 1429196053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21591552fcd3788c4b0-28278339',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552fcd38145219_88331839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552fcd38145219_88331839')) {function content_552fcd38145219_88331839($_smarty_tpl) {?><!doctype HTML>
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
<header>
    <h1>Управление сайтом</h1>
</header>

<?php echo $_smarty_tpl->getSubTemplate ('adminLeftColumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div id="centerColumn"><?php }} ?>
