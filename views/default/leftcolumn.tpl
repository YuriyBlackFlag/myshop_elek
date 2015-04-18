<div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
        {foreach $resCategories as $item}
        {*<a href="/?controller=category&id={$item['id']}">{$item['name']}</a><br />*}
            <a href="/category/{$item['id']}/">{$item['name']}</a><br />

            {if isset($item['children'])}
                {foreach $item['children'] as $itemChild}
                    {*--<a href="/?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a><br />*}
                    --<a href="/category/{$itemChild['id']}/">{$itemChild['name']}</a><br />
                {/foreach}
            {/if}
        {/foreach}
    </div>

    {if isset($arUser)}
    <div id="userBox">
        Вы: <a href="/user/" id="userLink">{$arUser['displayName']}</a><br/>
        <a href="/user/logout/" onclick="logout();">Выход</a>
    </div>

    {else}
    <div id="userBox" class="hideme">
        Вы: <a href="#" id="userLink"></a><br />
        <a href="/user/logout/" onclick="logout();">Выход</a>
    </div>

    {if ! isset($hideLoginBox)}
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

        {/if}
    {/if}
</div>