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

    <div id="userBox" class="hideme">
        Вы: <a href="#" id="userLink"></a><br />
        <a href="/user/logout/" onclick="logout();">Выход</a>
    </div>

    <div id="registerBox">
        <div class="menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
        <div id="registerBoxHidden">
            email:<br />
            <input type="text" id="email" name="email" value=""/><br />
            пароль: <br />
            <input type="password" id="pwd" name="pwd" value=""/><br />
            <input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/>
        </div>
    </div>

    <div class="menuCaption">Корзина</div>
        <a href="/cart/" title="Перейти в корзину">В корзине</a>
        <span id="cartCntItems">
            {if $cartCntItems > 0}{$cartCntItems}{else}пусто{/if}
        </span>
</div>