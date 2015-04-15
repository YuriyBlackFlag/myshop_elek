<?php
/**
 * Модель для работы с таблицей Orders
 */

/**
 * Создание заказа (без привязки товара)
 *
 * @param string $name
 * @param string $phone
 * @param string $adress
 * @return integer ID созданного заказа
 */
function makeNewOrder($name, $phone, $adress)
{
    //> инициализация переменных
    $userId		=	$_SESSION['user']['id'];
    $comment	=	"id пользователя: {$userId}<br />
					Имя: {$name}<br />
					Тел: {$phone}<br />
					Адрес: {$adress}";

    $dateCreated	= date('Y.m.d H:i:s');
    $userIp			= $_SERVER['REMOTE_ADDR'];
    //<

    // формирование запроса к БД
    $sql = "INSERT INTO
            orders (`user_id`, `date_created`, `date_payment`,
					 `status`, `comment`, `user_ip`)
           VALUES ('{$userId}', '{$dateCreated}', null,
					'0', '{$comment}', '{$userIp}')";
    global $link;
    $res = mysqli_query($link, $sql);

    // получить id созданного заказа
    if($res){
        $sql = "SELECT id
				FROM orders
				ORDER BY id DESC
				LIMIT 1";
        $res = mysqli_query($link, $sql);
        // преобразование результатов запроса
        $res = createSmartyResArray($res);

        // возвращаем id созданного запроса
        if(isset($res[0])){
            return $res[0]['id'];
        }
    }

    return false;

}

