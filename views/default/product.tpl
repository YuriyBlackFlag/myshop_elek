{* Страница продукта *}
{if $resProduct}
<h3>{$resProduct['name']}</h3>

        <div>
                <img src="/www/images/products/{$resProduct['image']}" width="500"  /><br />
            Цена {$resProduct['price']} UAH
                <a href="#">Добавить в корзину</a>
            <p>Описание <br />
                {$resProduct['description']}
            </p>
        </div>

{else}
        <div class="text">Нет такого товара!</div>
{/if}