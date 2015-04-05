<?php
/**
 * Модель для таблицы Products
 */



/**
 * Получаем последние добавленные товары
 * @param null $limit Лимит товаров
 * @return array массив продуктов
 */

function getLastProducts ($limit = null){
    $sql = "SELECT *
            FROM products
            ORDER BY id DESC";
    if($limit){
        $sql .=" LIMIT {$limit}";
    }
    global $link;
    $res = mysqli_query($link, $sql);

    return createSmartyResArray($res);
}
