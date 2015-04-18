<h3>Редактирование товара</h3>
<form id="form" class="appnitro" enctype="multipart/form-data" method="post" action="">
    <div class="form_description">
    </div>
    {foreach $resProducts as $item}
    <ul>
        <span>ID товара :{$item['id']}</span>
        <li id="li_1" >
            <label class="description" for="element_1">Название</label>
            <div>
                <input id="itemName_{$item['id']}" name="element_1" class="element text medium" type="text" maxlength="255" value="{$item['name']}"/>
            </div>
        </li>		<li id="li_2" >
            <label class="description" for="element_2">Цена</label>
            <div>
                <input id="itemPrice_{$item['id']}" name="element_2" class="element text medium" type="text" maxlength="255" value="{$item['price']}"/>
            </div>
        </li>		<li id="li_3" >
            <label class="description" for="element_3">Описание</label>
            <div>
                <textarea id="itemDesc_{$item['id']}" name="element_3" class="element textarea medium" value="">{$item['description']}</textarea>
            </div>
        </li>		<li id="li_4" >
            <label class="description" for="">Категория </label>
            <div>
                <select class="element select medium" id="itemCatId_{$item['id']}" name="element_5">
                    <option value="0">Главная категория
                        {foreach $resCategories as $itemCat}
                    <option value="{$itemCat['id']}"{if $item['category_id'] == $itemCat['id']} selected {/if}>{$mainItem['name']}>{$itemCat['name']}
                        {/foreach}
                </select>
            </div>
        </li>
        <li id="li_5">
            <label class="description" for="element_5">Вставить изображение </label>
            <div>
                {if $item['image']}<img src="/www/images/products/{$item['image']}" width="100"/>{/if}
                <input id="itemImage_{$item['id']}" name="element_5" class="element file" type="file"/>
            </div>
        </li>
        <li id="li_6" >
            <label class="description" for="element_6">Статус товара  </label>
            <div>
                <input id="itemStatus_{$item['id']}" name="element_5" class="element file" type="checkbox" {if $item['status']== 0} checked="checked"{/if}/>
            </div>
        </li>

        <li class="buttons">
            <input  type="button" value="Сохранить" onclick="updateProduct('{$item['id']}');"/>
            <input  type="button" value="Удалить" onclick="deleteProduct('{$item['id']}');"/>
        </li>
    </ul>
        <br />
        <hr>
    {/foreach}
</form>
