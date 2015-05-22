{* Страница продукта *}
<div class="scrollContainer">
    <div class="scroll">
{if $resProduct}
<h3>{$resProduct['name']}</h3>


                <img src="/www/images/products/{$resProduct['image']}" width="430"  /><br />
            Цена {$resProduct['price']} UAH
            <a id="removeCart_{$resProduct['id']}" {if ! $itemInCart} class="hideme"{/if} href="#" onClick="removeFromCart({$resProduct['id']}); return false;"
               alt="Удалить из корзины">Удалить из корзины</a>
                <a id="addCart_{$resProduct['id']}" {if $itemInCart} class="hideme"{/if} href="#" onClick="addToCart({$resProduct['id']}); return false;"
                        alt="Добавить в корзину">Добавить в корзину</a>

            <p>Описание <br />
                {$resProduct['description']}
            </p>
                </div>
        </div>

{else}
        <div class="text">Нет такого товара!</div>
{/if}
</div>
    </div>