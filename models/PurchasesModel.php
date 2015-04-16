<?php

/**
 * Модель для таблицы продукции (purchase)
 *
 */

/**
 *  Внесение в БД данных продуктов с привязкой к заказу
 *
 * @param integer $orderId ID заказа
 * @param array $cart массив корзины
 * @return boolean TRUE в случае успешного добавления в БД
 */
function setPurchaseForOrder($orderId, $cart)
{
    $sql = "INSERT INTO purchase
			(order_id, product_id, price, amount)
			VALUES ";

    $values = array();
    // формируем массив строк для запроса для каждого товара
    foreach ($cart as $item) {
        $values[] = "('{$orderId}', '{$item['id']}', '{$item['price']}', '{$item['cnt']}')";
    }
    // преобразовываем массив в строку
    global $link;
    $sql .= implode($values, ', ');
    $res = mysqli_query($link, $sql);

    return $res;
}


function getPurchaseForOrder($orderId)
{
    $sql = "SELECT `pe`.*, `ps`.`name`
            FROM purchase as `pe`
            JOIN products as `ps` ON `pe`.product_id = `ps`.id
            WHERE `pe`.order_id = {$orderId}";
    global $link;
    $res = mysqli_query($link, $sql);
    return createSmartyResArray($res);
}