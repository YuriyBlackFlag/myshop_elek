{* шаблон корзины *}
<div class="scrollContainer">

    <div class="panel" id="home">
<h2>Корзина</h2>

{if ! $resProducts}
    В корзине пусто.

{else}
    <form action="/cart/order/" method="POST">
    <h3>Данные заказа</h3>
    <table>
        <tr>
            <td>
                №
            </td>
            <td>
                Наименование
            </td>
            <td>
                Количество
            </td>
            <td>
                Цена за единицу
            </td>
            <td>
                Цена
            </td>
            <td>
                Действие
            </td>
        </tr>
        {foreach $resProducts as $item}
            <tr>
                <td>
                    {$item@iteration}
                </td>

                <td>
                    <a href="/product/{$item['id']}/">{$item['name']}</a><br />
                </td>

                <td>
                    <input name="itemCnt_{$item['id']}" id="itemCnt_{$item['id']}" type="text" value="1" onchange="conversionPrice({$item['id']});"/>
                </td>

                <td>
			<span id="itemPrice_{$item['id']}" value="{$item['price']}">
                {$item['price']}
            </span>
                </td>

                <td>
			 <span id="itemRealPrice_{$item['id']}">
            {$item['price']}
            </span>
                </td>

                <td>
                    <a id="removeCart_{$item['id']}" href="#" onClick="removeFromCart({$item['id']}); return false;" title="Удалить из корзины">Удалить</a>
                    <a id="addCart_{$item['id']}" class="hideme" href="#" onClick="addToCart({$item['id']}); return false;" title="Восстановить элемент">Восстановить</a>

                </td>

            </tr>
        {/foreach}

    </table>
        <input type="submit" value="Оформить заказ"/>
    </form>
{/if}
        </div>
        </div>