<div id="templatemo_sidebar">
    <div id="menu">
        <ul class="navigation">
        {foreach $resCategories as $item}
            {*<a href="/?controller=category&id={$item['id']}">{$item['name']}</a><br />*}
            <li><a href="/category/{$item['id']}/">{$item['name']}</a></li>

            {*{if isset($item['children'])}
                {foreach $item['children'] as $itemChild}
                    *}{*--<a href="/?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a><br />*}{*
                    --<a href="/category/{$itemChild['id']}/">{$itemChild['name']}</a><br />
                {/foreach}
            {/if}*}
        {/foreach}
            <li><a href="/views/modern/contactus.html">Контакты</a></li>
        </ul>

        <div class="cleaner">
        </div>

    </div>
</div> <!-- end of templatemo_sidebar -->