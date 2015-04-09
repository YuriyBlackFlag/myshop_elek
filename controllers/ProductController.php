<?php
/**
 *Контроллер страницы Продукты (/products/1/)
 */

//Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction($smarty){
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if($itemId == null) exit();

    //d($resCategories);
    //Получаем данные продукта
    $resProduct = getProductById($itemId);
    //Получаем все категории
    $resCategories = getAllMainCatsWithChildren();

    $smarty->assign('itemInCart', 0);
    if(in_array($itemId,$_SESSION['cart'])){
        $smarty->assign('itemInCart', 1);
    }

    $smarty->assign('pageTitle', ' ');
    $smarty->assign('resCategories', $resCategories);
    $smarty->assign('resProduct', $resProduct);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');
}

