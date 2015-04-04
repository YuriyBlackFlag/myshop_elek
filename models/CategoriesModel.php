<?php
/**
 * модель для работы с таблицей categories базы данных myshop
 */


function getAllMainCatsWithChildren(){
    $sql = 'SELECT *
            FROM categories
            WHERE parent_id=0';
    global $link;
    $res = mysqli_query($link, $sql);

    $smartyRes = array();

    while($row = mysqli_fetch_assoc($res)){
        $smartyRes[] = $row;

    }
        return $smartyRes;
}
