<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 19:41:34
         compiled from "..\views\admin\adminHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1776955522d3ea0a4c8-81844271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f59d7f9db4c7b749ebf5b593e2c183051181f1a2' => 
    array (
      0 => '..\\views\\admin\\adminHeader.tpl',
      1 => 1429370542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1776955522d3ea0a4c8-81844271',
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
  'unifunc' => 'content_55522d3f1732d3_94013206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55522d3f1732d3_94013206')) {function content_55522d3f1732d3_94013206($_smarty_tpl) {?><!doctype HTML>
<html>
<head>
    <meta charset ='utf-8' />
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/view.css" type="text/css" />
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
    <h1>Управление сайтом</h1>
</header>

<?php echo $_smarty_tpl->getSubTemplate ('adminLeftColumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div id="centerColumn"><?php }} ?>
