<div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
        {foreach $resCategories as $item}
        <a href="#">{$item['name']}</a><br />
        {/foreach}
    </div>
</div>