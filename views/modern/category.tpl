{* Страница категории *}
<div class="scroll">
<div class="scrollContainer">
    <div class="panel" id="home">

<h3>Категория: {$resCategory['name']}</h3>
{if $resChildCats == null}

{foreach $resProducts as $item}
    <div id="main">
        <a  href="/product/{$item['id']}/">
            <img src="/www/images/products/{$item['image']}" width="120"  />
        </a><br />
        <a href="/product/{$item['id']}/">{$item['name']}</a>
    </div>

    {foreachelse}
    <div class="text">Нет товаров в данной категории!</div>
    {if $item@iteration mod 3 == 0}
        <div id="bot"></div>
    {/if}

{/foreach}
{/if}

{foreach $resChildCats as $item}
    <h4><a href="/category/{$item['id']}/">{$item['name']}</a></h4>
{/foreach}
        </div>
    </div>
    </div>