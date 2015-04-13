{* страница пользователя *}

<h2>Ваши регистрационные данные:</h2>
<table id="userTable">
    <tr>
        <td>Логин (email)</td>
        <td>Пользователь: <span class="bolder">{$arUser['email']}</span></td>
    </tr>
    <tr>
        <td>Имя</td>
        <td><input type="text" id="newName" value="{$arUser['name']}" /></td>
    </tr>
    <tr>
        <td>Телефон</td>
        <td><input type="text" id="newPhone" value="{$arUser['phone']}" /></td>
    </tr>
    <tr>
        <td>Адрес</td>
        <td><textarea  id="newAdress"  />{$arUser['adress']}</textarea></td>
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
</table>