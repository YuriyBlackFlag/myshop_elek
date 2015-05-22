<h2>Заказы</h2>

<table>
    <tr>
        <th>№</th>
        <th>Действие</th>
        <th>ID заказа</th>
        <th>Статус</th>
        <th>Дата создания</th>
        <th>Дата оплаты</th>
        <th>Дополнительная информация</th>
        <th>Дата изменения заказа</th>
    </tr>
    {foreach $resOrders as $item}
        <tr>
            <td>{$item@iteration}</td>
            <td><a href="#" onclick="showProducts('{$item['id']}'); return false;">Показать товар заказа</a></td>
            <td>{$item['id']}</td>
            <td><input type="checkbox" id="itemStatus_{$item['id']}" {if $item['status']} checked="checked"
                {/if} onclick="updateOrderStatus('{$item['id']}');" /> Закрыт
            </td>
            <td>{$item['date_created']}</td>
            <td>
                <input type="text" id="datePayment_{$item['id']}" value="{$item['date_payment']}" />
                <input type="button" value="Сохранить" onclick="updateDatePayment('{$item['id']}');"/>
            </td>
            <td>{$item['comment']}</td>
            <td>{$item['date_modification']}</td>
        </tr>

        <tr class="hideme" id="purchasesForOrderId_{$item['id']}" >
            <td colspan="8">
                {if $item['children']}
                    <table width="100%">
                        <tr>
                            <th>№</th>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Цена</th>
                            <th>Количество</th>
                        </tr>
                        {foreach $item['children'] as $itemChild}
                            <tr>
                                <td>{$itemChild@iteration}</td>
                                <td>{$itemChild['product_id']}</td>
                                <td><a href="/admin/product/{$itemChild['product_id']}/">{$itemChild['name']}</a></td>
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