<?php
/**
 * Контроллер бекэнда сайта (/admin/)
 */

// подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/UsersModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchasesModel.php';

$smarty->setTemplateDir(TemplateAdminPrefix);
$smarty->assign('templateWebPath', TemplateAdminWebPath);


/**
 * Формирование главной страницы админки
 *
 * @link /admin/
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty){

    $resCategories = getAllMainCategories();
    $smarty->assign('resCategories', $resCategories);

    $smarty->assign('pageTitle', 'Управление сайтом');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'admin');
    loadTemplate($smarty, 'adminFooter');

}

/**
 *контроллер для работы с добавлением новой категории
 */
function addnewcatAction(){
    $catName = $_POST['newCategoryName'];
    $catParentId = $_POST['generalCatId'];

    $res = insertCat($catName, $catParentId);
    if($res){
        $resData['success'] = 1;
        $resData['message'] = 'Категория добавлена';
    }else{
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка добавления категории';
    }
    echo json_encode($resData);
    return;

}

function categoryAction($smarty){
    $resCategories = getAllCategories();
    $resMainCategories = getAllMainCategories();

    $smarty->assign('resCategories', $resCategories);
    $smarty->assign('resMainCategories', $resMainCategories);
    $smarty->assign('pageTitle', 'Управление сайтом');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminCategory');
    loadTemplate($smarty, 'adminFooter');

}

/**
 *контроллер для работы с изминением категории
 */
function updatecategoryAction(){
    $itemId = $_POST['itemId'];
    $parentId = $_POST['parentId'];
    $newName = $_POST['newName'];

    $res = updateCategoryData($itemId, $parentId, $newName);
    if($res){
        $resData['success'] = 1;
        $resData['message'] = 'Категория обновлена';
    }else{
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения категории';
    }
    echo json_encode($resData);
    return;

}