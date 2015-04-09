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

/**
 * Получение продуктов для категории $itemId
 * @param $itemId ID категории
 * @return array - массив продуктов
 */

function getProductsByCat($itemId){
    $itemId = intval($itemId);
    $sql = "SELECT *
            FROM products
            WHERE category_id = '{$itemId}'";
    global $link;
    $res = mysqli_query($link, $sql);

    return createSmartyResArray($res);
}

/**
 * Получение товара по id
 * @param $itemId ID продукта
 * @return array - массив продукта
 */
function getProductById($itemId){
    $itemId = intval($itemId);
    $sql = "SELECT *
            FROM products
            WHERE id = '{$itemId}'";
    global $link;
    $res = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($res);
}
