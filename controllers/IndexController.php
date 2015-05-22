<?php

/**
 *  Контроллер главной страницы
 * 
 */

//Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function testAction(){
	echo 'IndexController.php > testAction';
}

/**
 * Формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty){
    $resCategories = getAllMainCatsWithChildren();
    $resProducts = getLastProducts(9);
    //d($resCategories);

    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('resCategories', $resCategories);
    $smarty->assign('resProducts', $resProducts);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'index');
	loadTemplate($smarty, 'footer');
}

