<?php

/**
 *
 * Основные функции
 * 
 */

/**
 * Формирование запрашиваемой страницы
 * 
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы 
 */
function loadPage($smarty, $controllerName, $actionName = 'index'){
	
	include_once PathPrefix . $controllerName . PathPostfix;
   
    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * Загрузка шаблона
 * 
 * @param object $smarty объект шаблонизатора
 * @param string $templateName название файла шаблона 
 */
function loadTemplate($smarty, $templateName)
{
    $smarty->display($templateName . TemplatePostfix);
}

/**
 * Функция отладки. Останавливает работу програамы выводя значение переменной
 * $value
 * 
 * @param variant $value переменная для вывода ее на страницу 
 */


function d($value = null, $die = 1)
{
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';
    
    if($die) die;
}

/**
 * Преобразование результатов выборки в ассоциативный массив
 * @param $res набор строк , результат работы Select
 * @return array
 */

function createSmartyResArray($res){
    if(!$res) return false;

    $smartyRes = array();
    while($row = mysqli_fetch_assoc($res)){
        $smartyRes[] = $row;
    }
    return $smartyRes;
}

function redirect($url){
    if(!$url) $url = '/';
    header("location: {$url} ");
    exit;
}










