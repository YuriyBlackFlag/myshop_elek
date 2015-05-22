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

/**
 * Получить список продуктов из массива идентификаторов (ID`s)
 *
 * @param array $itemsIds массив идентификаторов продуктов
 * @return array массив данных продуктов
 */
function getProductsFromArray($itemsIds)
{

    $strIds = implode($itemsIds, ', ');
    $sql = "SELECT *
            FROM products
            WHERE id in ({$strIds})";
    global $link;
    $res = mysqli_query($link, $sql);

    return createSmartyResArray($res);
}


function getProducts()
{
    $sql = "SELECT *
            FROM `products`
            ORDER BY `category_id`";
    global $link;
    $res = mysqli_query($link, $sql);

    return createSmartyResArray($res);
}

/**
 * Добавление нового товара
 * @param $itemName
 * @param $itemPrice
 * @param $itemDesc
 * @param $itemCat
 * @return bool|mysqli_result
 */
function insertProduct($itemName, $itemPrice, $itemDesc, $itemCat, $itemImage){
    $sql = "INSERT INTO
            products
            SET
            `name`= '{$itemName}',
            `price`= '{$itemPrice}',
            `description`= '{$itemDesc}',
            `category_id`= '{$itemCat}',
            `image` = '{$itemImage}';";

    global $link;
    $res = mysqli_query($link, $sql);
    return $res;
}


/**
 * @param $itemName
 * @param $itemPrice
 * @param $itemDesc
 * @param $itemCat
 * @param $itemImage
 * @return bool|mysqli_result
 */
function updateProduct($itemId, $itemName,  $itemPrice, $itemDesc, $itemCat, $itemImage, $itemStatus, $itemImage)
{
    $set = array();

    if ($itemName) {
        $set[] = "`name` = '{$itemName}'";
    }

    if ($itemPrice > 0) {
        $set[] = "`price` = '{$itemPrice}'";
    }
    if ($itemStatus !== null) {
        $set[] = "`status` = '{$itemStatus}'";
    }

    if ($itemDesc) {
        $set[] = "`description` = '{$itemDesc}'";
    }

    if ($itemCat) {
        $set[] = "`category_id` = '{$itemCat}'";
    }

    if ($itemImage) {
        $set[] = "`image` = '{$itemImage}'";
    }

    $setSTR = implode($set, ", ");


    $sql = "UPDATE
            products
            SET {$setSTR}
            WHERE `id` = '{$itemId}'";

    global $link;
    $res = mysqli_query($link, $sql);
    return $res;
}

function deleteProduct($itemId)
{

    $sql = "DELETE FROM
            products
            WHERE id = '{$itemId}'";

    global $link;
    $res = mysqli_query($link, $sql);
    return $res;
}