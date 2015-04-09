{*Шаблон главной колонки*}

{foreach $resProducts as $item}
    <div id="main">
        <a  href="/product/{$item['id']}/">
            <img src="../www/images/products/{$item['image']}" width="140" />
        </a><br />
        <a href="/product/{$item['id']}/">{$item['name']}</a>
    </div>
    {if $item@iteration mod 4 == 0}
        <div id="bot"></div>
    {/if}
{/foreach}




