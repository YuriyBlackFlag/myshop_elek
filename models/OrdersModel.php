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

/**
 * Получить список заказов с привязкой к продуктам для пользователя $userId
 *
 * @param integer $userId ID пользователя
 * @return array массив заказов с привязкой к продуктам
 */
function getOrdersWithProductsByUser($userId)
{
    $userId = intval($userId);
    $sql = "SELECT * FROM orders
			WHERE `user_id` = '{$userId}'
			ORDER BY id DESC";
    global $link;
    $res = mysqli_query($link, $sql);

    $smartyRes = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $resChildren = getPurchaseForOrder($row['id']);

        if($resChildren){
            $row['children'] = $resChildren;
            $smartyRes[] = $row;
        }
    }

    return $smartyRes;
}



function getOrders()
{
    $sql = "SELECT o.*, u.name, u.email, u.phone, u.adress
            FROM orders as o
            LEFT JOIN users as u
			ON o.user_id = u.id
			ORDER BY id DESC";
    global $link;
    $res = mysqli_query($link, $sql);

    $smartyRes = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $resChildren = getProductsForOrder($row['id']);

        if ($resChildren) {
            $row['children'] = $resChildren;
            $smartyRes[] = $row;
        }
    }

    return $smartyRes;
}


function getProductsForOrder($orderId){
    $sql = "SELECT *
            FROM purchase as pe
            LEFT JOIN products as ps
			ON pe.product_id = ps.id
			WHERE (`order_id` = '{$orderId}')";
    global $link;
    $res = mysqli_query($link, $sql);
    return createSmartyResArray($res);
}

function updateOrderStatus($itemId, $status){
    $status = intval($status);
    $itemId = intval($itemId);
    $sql = "UPDATE orders
            SET `status` = '{$status}'
            WHERE id = '{$itemId}'";
    global $link;
    $res = mysqli_query($link, $sql);

    return $res;
}

function updateOrderDatePayment($itemId, $datePayment){
    $itemId = intval($itemId);
    $date_format = 'Y-m-d';
    $input = $datePayment;

    $input = trim($input);
    $time = strtotime($input);

    $datePayment = date($date_format, $time) == $input;

    $sql = "UPDATE orders
            SET `date_payment` = '{$datePayment}'
            WHERE id = '{$itemId}'";
    global $link;
    $res = mysqli_query($link, $sql);

    return $res;
}