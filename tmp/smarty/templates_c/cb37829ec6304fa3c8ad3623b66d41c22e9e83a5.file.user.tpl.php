<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-11 20:05:36
         compiled from "..\views\default\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2832355294d27200be6-54470490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb37829ec6304fa3c8ad3623b66d41c22e9e83a5' => 
    array (
      0 => '..\\views\\default\\user.tpl',
      1 => 1428771934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2832355294d27200be6-54470490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55294d27623650_03499260',
  'variables' => 
  array (
    'arUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55294d27623650_03499260')) {function content_55294d27623650_03499260($_smarty_tpl) {?>

<h2>Ваши регистрационные данные:</h2>
<table id="userTable">
    <tr>
        <td>Логин (email)</td>
        <td>Пользователь: <span class="bolder"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</span></td>
    </tr>
    <tr>
        <td>Имя</td>
        <td><input type="text" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
" /></td>
    </tr>
    <tr>
        <td>Телефон</td>
        <td><input type="text" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
" /></td>
    </tr>
    <tr>
        <td>Адрес</td>
        <td><textarea  id="newAdress"  /><?php echo $_smarty_tpl->tpl_vars['arUser']->value['adress'];?>
</textarea></td>
    </tr>
    <tr>
        <td>Новый пароль</td>
        <td><input type="password" id="newPwd" value="" /></td>
    </tr>
    <tr>
        <td>Для того чтобы сохранить <br />данные введите текущий пароль</td>
        <td><input type="password" id="curPwd" value="" /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="button" value="Сохранить изменения" onClick="updateUserData();"/></td>
    </tr>
</table><?php }} ?>
