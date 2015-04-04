<?php
/**
 * подключение к базе данных
 */

$dblocation = "127.0.0.1";
$dbname = 'myshop';
$dbuser = 'root';
$dbpasswd = 'root';

//Подключение к БД
try {
        $link = mysqli_connect($dblocation, $dbuser, $dbpasswd, $dbname);
    if(!$link){
        throw new Exception ('Ошибка подлкючения к базе данных');
    }
}catch (Exception $e){
    echo $e->getMessage()."\n";
}
