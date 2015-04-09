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