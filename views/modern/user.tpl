{* страница пользователя *}
<div class="scroll">
    <div class="scrollContainer">

        <div class="panel" id="home">
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

<h2>Заказы:</h2>
{if ! $resUserOrders}
    Нет заказов
{else}
    <table border="1" cellpadding="1" cellspacing="1">
        <tr>
            <th>№</th>
            <th>Действие</th>
            <th>Статус</th>
            <th>Дата создания</th>
            <th>Дата оплаты</th>
        </tr>
        {foreach $resUserOrders as $item}
            <tr>
                <td>{$item@iteration}</td>
                <td><a href="#" onclick="showProducts('{$item['id']}'); return false;" >Показать товар заказа</a></td>
                <td>{if $item['status']== 0}Заказ не оплачен{else}Заказ оплачен{/if}</td>
                <td>{$item['date_created']}</td>
                <td>{$item['date_payment']}&nbsp;</td>
            </tr>

            <tr class="hideme" id="purchasesForOrderId_{$item['id']}" >
                <td colspan="7">
                    {if $item['children']}
                        <table border="1" cellpadding="1" cellspacing="1" width="100%">
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Цена</th>
                                <th>Количество</th>
                            </tr>
                            {foreach $item['children'] as $itemChild}
                                <tr>
                                    <td>{$itemChild@iteration}</td>
                                    <td><a href="/product/{$itemChild['product_id']}/">{$itemChild['name']}</a></td>
                                    <td>{$itemChild['price']}</td>
                                    <td>{$itemChild['amount']}</td>
                                </tr>
                            {/foreach}
                        </table>
                    {/if}
                </td>
            </tr>
        {/foreach}
    </table>
    <br/>
{/if}
            </div>
            </div>
            </div>