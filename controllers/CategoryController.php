<?php
/**
 * Контроллер страницы Категории (/category/1)
 */

//Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * Формирование страницы Категории товаров
 * @param $smarty object шаблонизатор
 */
function indexAction($smarty){
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if($catId == null) exit();

    $resChildCats = null;
    $resProducts = null;

    $resCategory = getCatById($catId);

    // если главная категория то показываем дочернии категории,
    // иначе показывает товар
    if($resCategory['parent_id'] == 0){
        $resChildCats = getChildrenForCat($catId);
    }else {
        $resProducts = getProductsByCat($catId);
    }

    $resCategories = getAllMainCatsWithChildren();


    $smarty->assign('pageTitle', 'Товары категории ' . $resCategory['name']);

    $smarty->assign('resCategory', $resCategory);
    $smarty->assign('resProducts', $resProducts);
    $smarty->assign('resChildCats', $resChildCats);

    $smarty->assign('resCategories', $resCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');

}
