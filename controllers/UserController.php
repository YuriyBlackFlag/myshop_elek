<?php
/**
 * Контроллер функций пользователя
 */

// подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/UsersModel.php';

/**
 * AJAX регистрация пользователя.
 * Инициализация сессионнной переменной ($_SESSION['user'])
 *
 * @return json массив данных нового пользователя
 */
function registerAction(){
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $email = trim($email);

    $pwd = isset($_REQUEST['pwd']) ? $_REQUEST['pwd'] : null;
    $phone  = isset($_REQUEST['phone'])  ? $_REQUEST['phone']  : null;
    $adress = isset($_REQUEST['adress']) ? $_REQUEST['adress'] : null;
    $name   = isset($_REQUEST['name'])   ? $_REQUEST['name']   : null;
    $name = trim($name);


    $resData = null;
    $resData = checkRegisterParams($email, $pwd);

    if(!$resData && checkUserEmail($email)){
        $resData['success'] = false;
        $resData['message'] = "Пользователь с таким email ('{$email}') уже зарегистрирован!";
    }
}
