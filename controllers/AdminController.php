<?php
/**
 * Контроллер бекэнда сайта (/admin/)
 */

// подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/UsersModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchasesModel.php';
include_once '../models/ProductsModel.php';

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

/**
 * Страница управления товарами
 * @param $smarty
 */
function productsAction($smarty){
    $resCategories = getAllCategories();
    $resProducts = getProducts();

    $smarty->assign('resCategories', $resCategories);
    $smarty->assign('resProducts', $resProducts);
    $smarty->assign('pageTitle', 'Управление сайтом');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminProducts');
    loadTemplate($smarty, 'adminFooter');
}

/**
 * добавление товара в базу данных
 */

function addproductAction(){
    $itemName = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];
    $itemDesc = $_POST['itemDesc'];
    $itemCat = $_POST['itemCatId'];
    $itemImage = $_POST['itemImage'];

    $res = insertProduct($itemName,$itemPrice,$itemDesc,$itemCat, $itemImage);

    if($res){
        $resData['success'] = 1;
        $resData['message'] = 'Изменения внесены';
    }else{
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения';
    }
    echo json_encode($resData);
    return;
}


/**
 * Страница управления товарами
 * @param $smarty
 */
function updateproductAction($smarty){
    $resCategories = getAllCategories();
    $resProducts = getProducts();

    $smarty->assign('resCategories', $resCategories);
    $smarty->assign('resProducts', $resProducts);
    $smarty->assign('pageTitle', 'Управление сайтом');

    loadTemplate($smarty, 'adminHeader');
   loadTemplate($smarty, 'adminProducts1');
    loadTemplate($smarty, 'adminFooter');
}

function upproductAction(){
    $itemName = $_POST['itemName'];
    $itemId = $_POST['itemId'];
    $itemPrice = $_POST['itemPrice'];
    $itemDesc = $_POST['itemDesc'];
    $itemCat = $_POST['itemCatId'];
    $itemImage = $_POST['itemImage'];
    $itemStatus = $_POST['itemStatus'];

    $res = updateProduct($itemId, $itemName,  $itemPrice, $itemDesc, $itemCat, $itemImage, $itemStatus, $itemImage);

    if($res){
        $resData['success'] = 1;
        $resData['message'] = 'Изменения успешно внесены';
    }else{
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения';
    }
    echo json_encode($resData);
    return;
}