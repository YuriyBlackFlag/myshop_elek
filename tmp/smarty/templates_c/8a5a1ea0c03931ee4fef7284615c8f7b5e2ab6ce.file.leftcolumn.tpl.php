<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-18 12:59:44
         compiled from "..\views\default\leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5783551fac94165156-62660367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a5a1ea0c03931ee4fef7284615c8f7b5e2ab6ce' => 
    array (
      0 => '..\\views\\default\\leftcolumn.tpl',
      1 => 1429295479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5783551fac94165156-62660367',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551fac9416ce53_08327393',
  'variables' => 
  array (
    'resCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'arUser' => 0,
    'hideLoginBox' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551fac9416ce53_08327393')) {function content_551fac9416ce53_08327393($_smarty_tpl) {?><div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        
            <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />

            <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
                    
                    --<a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br />
                <?php } ?>
            <?php }?>
        <?php } ?>
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
        <input type="text" id="loginEmail" name="loginEmail" value=""  placeholder="email"/><br />
        <input type="password" id="loginPwd" name="loginPwd" value="" placeholder="password"/><br />
        <input type="button" onclick="login();" value="Войти"/>
    </div>

    <div id="registerBox">
        <div class="menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
        <div id="registerBoxHidden">
            <input type="text" id="email" name="email" value="" placeholder="email"/><br />
            <input type="password" id="pwd" name="pwd" value="" placeholder="password"/><br />
            <input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/>
        </div>
    </div>

        <?php }?>
    <?php }?>
</div><?php }} ?>
