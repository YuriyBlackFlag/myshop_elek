<?php

/**
 *  Контроллер главной страницы
 * 
 */

//Подключаем модели
include_once '../models/CategoriesModel.php';

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
    //d($resCategories);

    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('resCategories', $resCategories);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'index');
	loadTemplate($smarty, 'footer');
}

