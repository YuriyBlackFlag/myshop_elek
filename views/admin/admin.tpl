<div id="blockNewCategory">
    <span id="bolder">Новая категория:</span>
    <input name="newCategoryName" id="newCategoryName" type="text" value="" />
    <br />
    <br />
    Является подкатегорией для
    <select name="generalCatId">
        <option value="0">Главная категория
            {foreach $resCategories as $item}
                <option value="{$item['id']}">{$item['name']}
            {/foreach}
    </select>
    <br />
    <br />
    <input type="button" onclick="newCategory()" value="Добавить категорию" />
</div>