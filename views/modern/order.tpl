{* страница заказа *}
<div class="scrollContainer">
    <div class="scroll">
        <div class="panel" id="home">
<h3>Данные заказа</h3>
<form id="frmOrder" action="/cart/saveorder/" method="POST">
    <table>
        <thead>
        <tr>
            <th>№</th>
            <th>Наименование</th>
            <th>Количество</th>
            <th>Цена за единицу</th>
            <th>Стоимость</th>
        </tr>
        </thead>
        <tbody>
        {foreach $resProducts as $item}

            <tr>
                <td>{$smarty@iteration}</td>
                <td><a href="/product/{$item['id']}/">{$item['name']}</a></td>
                <td>
				<span id="itemCnt_{$item['id']}">
				  <input type="hidden" name="itemCnt_{$item['id']}" value="{$item['cnt']}" />
                    {$item['cnt']}
				</span>
                </td>
                <td>
				<span id="itemPrice_{$item['id']}">
				   <input type="hidden" name="itemPrice_{$item['id']}" value="{$item['price']}" />
                    {$item['price']}
			   </span>
                </td>
                <td>
				 <span id="itemRealPrice_{$item['id']}">
					 <input type="hidden" name="itemRealPrice_{$item['id']}" value="{$item['realPrice']}" />
                     {$item['realPrice']}
				 </span>
                </td>
            </tr>
        {/foreach}
        </tbody>

    </table>

    {if isset($arUser)}
        {$buttonClass = ""}
        <h3>Данные заказчика</h3>
        <div id="orderUserInfoBox" {$buttonClass}>
            {$name = $arUser['name']}
            {$phone = $arUser['phone']}
            {$adress = $arUser['adress']}
            <table>
                <tr>
                    <td>Имя*</td>
                    <td><input type="text" id="name"   name="name"  value="{$name}" /></td>
                </tr>
                <tr>
                    <td>Тел*</td>
                    <td><input type="text" id="phone"  name="phone" value="{$phone}" /></td>
                </tr>
                <tr>
                    <td>Адрес*</td>
                    <td><textarea id="adress" name="adress" />{$adress}</textarea></td>
                </tr>
            </table>
        </div>
    {else}

        <div id="loginBox">
            <div class="menuCaption">Авторизация</div>
            <table>
                <tr>
                    <td>Логин</td>
                    <td><input type="text" id="loginEmail" name="loginEmail" value=""/></td>
                </tr>
                <tr>
                    <td>Пароль</td>
                    <td><input type="password" id="loginPwd" name="loginPwd" value=""/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="button" onclick="login();" value="Войти" class="submit_btn"/></td>
                </tr>
            </table>
        </div>

        <div id="registerBox">или <br />
            <div class="menuCaption">Регистрация нового пользователя:</div>
            email* :<br />
            <input type="text" id="email" name="email" value=""/><br />
            пароль* : <br />
            <input type="password" id="pwd" name="pwd" value=""/><br />

            Имя* :<input type="text" id="name" name="name" value="" /><br />
            Тел* :<input type="text" id="phone" name="phone" value="" /><br />
            Адрес* :<textarea  id="adress" name="adress" /></textarea><br />

            <input type="button" onclick="registerNewUser();" value="Зарегистрироваться" class="submit_btn"/>
        </div>
        {$buttonClass = "class='hideme'"}
    {/if}

    <input {$buttonClass} id="btnSaveOrder" type="button" value="Оформить заказ" onclick="saveOrder();" class="submit_btn"/>
</form>
        </div>
        </div>
        </div>