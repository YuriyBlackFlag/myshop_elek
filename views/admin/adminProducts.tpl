
<h3>Вставка товара</h3>
<form id="form" class="appnitro" enctype="multipart/form-data" method="post" action="">
    <div class="form_description">
    </div>
    <ul>

        <li id="li_1" >
            <label class="description" for="element_1">Название</label>
            <div>
                <input id="newItemName" name="element_1" class="element text medium" type="text" maxlength="255" value=""/>
            </div>
        </li>		<li id="li_2" >
            <label class="description" for="element_2">Цена</label>
            <div>
                <input id="newItemPrice" name="element_2" class="element text medium" type="text" maxlength="255" value=""/>
            </div>
        </li>		<li id="li_3" >
            <label class="description" for="newItemDesc">Описание</label>
            <div>
                <textarea id="newItemDesc" name="element_3" class="element textarea medium"></textarea>
            </div>
        </li>		<li id="li_5" >
            <label class="description" for="">Категория </label>
            <div>
                <select class="element select medium" id="newItemCatId" name="element_5">
                    <option value="0">Главная категория
                        {foreach $resCategories as $itemCat}
                    <option value="{$itemCat['id']}">{$itemCat['name']}
                        {/foreach}
                </select>
            </div>
        </li>		<li id="li_4" >
            <label class="description" for="element_4">Вставить изображение  </label>
            <div>
                <input id="newItemImage" name="element_4" class="element file" type="file"/>
            </div>
        </li>

        <li class="buttons">
            <input  type="button" value="Сохранить" onclick="addProduct();"/>
        </li>
    </ul>
</form>
