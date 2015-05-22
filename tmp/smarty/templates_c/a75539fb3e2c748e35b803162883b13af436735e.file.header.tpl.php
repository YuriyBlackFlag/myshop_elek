<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-22 21:02:54
         compiled from "..\views\modern\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5061555ee6de90fd72-42056135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a75539fb3e2c748e35b803162883b13af436735e' => 
    array (
      0 => '..\\views\\modern\\header.tpl',
      1 => 1432317774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5061555ee6de90fd72-42056135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555ee6df049d85_61198722',
  'variables' => 
  array (
    'cartCntItems' => 0,
    'arUser' => 0,
    'hideLoginBox' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ee6df049d85_61198722')) {function content_555ee6df049d85_61198722($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Электрончик</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- templatemo 345 mini two -->
    <!--
    Mini Two Template
    http://www.templatemo.com/preview/templatemo_345_mini_two
    -->
    <link href="/www/templates/modern/css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/www/templates/modern/css/coda-slider.css" type="text/css" charset="utf-8" />

    <?php echo '<script'; ?>
 src="/www/js/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/www/js/jquery.scrollTo-1.3.3.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/www/js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/www/js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/www/js/coda-slider.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/www/js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/www/js/main.js"><?php echo '</script'; ?>
>

</head>

<body>

<div id="slider">
            <div id="templatemo_header_wrapper">
                <div id="templatemo_header">
                    <div id="header"><h1><a href="/www/index.php">Электрончик магазин нужных вещей</a></h1></div>
                </div>
                <div class="Caption">Корзина<br />
                    <a href="/cart/" title="Перейти в корзину">В корзине</a>
        <span id="cartCntItems">
            <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>пусто<?php }?>
        </span>
                </div>
                <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                    <div id="userBox">
                        Вы: <a href="/user/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a><br/>
                        <a href="/user/logout/" onclick="logout();">Выход</a>
                    </div>

                <?php } else { ?>
                    <div id="userBox" class="hideme">
                        Вы: <a href="#" id="userLink"></a><br />
                        <a href="/user/logout/" onclick="logout();">Выход</a>
                    </div>

                    <?php if (!isset($_smarty_tpl->tpl_vars['hideLoginBox']->value)) {?>
                        <div id="loginBox">
                            <div class="menuCaption">Авторизация</div>
                            <input type="text" id="loginEmail" name="loginEmail" value=""  placeholder="email" class="input_field"/><br />
                            <input type="password" id="loginPwd" name="loginPwd" value="" placeholder="password"  class="input_field"/><br />
                            <input type="button" onclick="login();" class="submit_btn" value="Войти"/>
                        </div>

                        <div id="registerBox">
                            <div class="menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
                            <div id="registerBoxHidden">
                                <input type="text" id="email" name="email" value="" placeholder="email"  class="input_field"/><br />
                                <input type="password" id="pwd" name="pwd" value="" placeholder="password"  class="input_field"/><br />
                                <input type="button" onclick="registerNewUser();" class="submit_btn" value="Зарегистрироваться"/>
                            </div>
                        </div>

                    <?php }?>
                <?php }?>
                <div class="contact"><a href="/views/modern/contactus.html">Контакты</a></div>
            </div>


    <div id="templatemo_main">
        <?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
