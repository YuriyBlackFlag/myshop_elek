<?php
/**
 * модель для работы с таблицей categories базы данных myshop
 */


/**
 * Получение дочерних категорий для категории $catId
 * @param $catId ID категории
 * @return array массив дочерних категорий
 */


function getChildrenForCat($catId){
    $sql = "SELECT *
            FROM categories
            WHERE parent_id='{$catId}'";
    global $link;
    $res = mysqli_query($link, $sql);

    return createSmartyResArray($res);
}



/**
 * Получение главных категорий с привязками дочерних
 * @return array массив категорий
 */

function getAllMainCatsWithChildren(){
    $sql = 'SELECT *
            FROM categories
            WHERE parent_id=0';
    global $link;
    $res = mysqli_query($link, $sql);

    $smartyRes = array();

    while($row = mysqli_fetch_assoc($res)){
        $resChildren = getChildrenForCat($row['id']);
        if($resChildren){
            $row['children'] = $resChildren;
        }

        $smartyRes[] = $row;

    }
        return $smartyRes;
}

/**
 * Получение данныых категории по id
 * @param $catId  ID категории
 * @return array|null - строка категории
 */

function getCatById($catId){
    $catId = intval($catId);
    $sql = "SELECT *
            FROM categories
            WHERE id = '{$catId}'";
    global $link;
    $res = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($res);
}



function getAllMainCategories(){
    $sql = "SELECT *
            FROM categories
            WHERE parent_id = 0";
    global $link;
    $res = mysqli_query($link, $sql);

    return createSmartyResArray($res);
}

/**
 * Функция добавления категории в базу данных
 * @param $catName
 * @param int $catParentId
 * @return int|string
 */
function insertCat($catName="Новая категория", $catParentId = 0){
    $sql = "INSERT INTO
            categories (`parent_id`, `name`)
            VALUES ('{$catParentId}', '{$catName}')";

    global $link;
    mysqli_query($link, $sql);

    $id = mysqli_insert_id($link);

    return $id;
}

/**
 * Функция вывода всех категорий
 * @return array
 */

function getAllCategories(){
    $sql = "SELECT *
            FROM categories
            ORDER BY  parent_id asc";
    global $link;
    $res = mysqli_query($link, $sql);

    return createSmartyResArray($res);
}


/**
 * функция обновления категорий
 * @param $itemID
 * @param int $parentID
 * @param string $newName
 */
function updateCategoryData($itemId, $parentId = -1, $newName = ''){
    $set = array();

    if($newName){
        $set[]= "`name` = '{$newName}'";
    }

    if($parentId > -1){
        $set[]= "`parent_id` = '{$parentId}'";
    }

    $setSTR = implode($set, ", ");
    $sql = "UPDATE categories
            set {$setSTR}
            WHERE  id = '{$itemId}'";

    global $link;
    $res = mysqli_query($link, $sql);

    return $res;
}