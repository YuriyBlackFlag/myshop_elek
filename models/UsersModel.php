<?php
/**
 * Модель для таблицы Users
 */

/**
 * Регистрация нового пользователя
 *
 * @param string $email почта
 * @param string $pwdMD5 пароль зашифрованный в MD5
 * @param string $name имя пользователя
 * @param string $phone телефон
 * @param string $adress адрес пользователя
 * @return array массив данных нового пользователя
 */

function registerNewUser($email, $pdwMD5, $name, $phone, $adress){
    global $link;
    $email   = htmlspecialchars(mysqli_real_escape_string($link, $email));
    $name    = htmlspecialchars(mysqli_real_escape_string($link, $name));
    $phone   = htmlspecialchars(mysqli_real_escape_string($link, $phone));
    $adress  = htmlspecialchars(mysqli_real_escape_string($link, $adress));

    $sql = "INSERT INTO
            users (`email`, `pwd`, `name`, `phone`, `adress`)
           VALUES ('{$email}', '{$pwdMD5}', '{$name}', '{$phone}', '{$adress}')";

    $res = mysqli_query($link, $sql);

    if($res){
        $sql = "SELECT * FROM users
				WHERE (`email` = '{$email}' and `pwd` = '{$pwdMD5}')
				LIMIT 1";

        $res = mysqli_query($link, $sql);
        $res = createSmartyResArray($res);

        if(isset($res[0])){
            $res['success'] = 1;
        } else {
            $res['success'] = 0;
        }

    } else {

        $res['success'] = 0;
    }

    return $res;
}

/**
 * Проверка параметров для регистрации пользователя
 *
 * @param string $email email
 * @param string $pwd пароль
 * @return array результат
 */
function checkRegisterParams($email, $pwd)
{
    $res = null;

    if(! $email){
        $res['success'] = 0;
        $res['message'] = 'Введите email';
    }

    if(! $pwd) {
        $res['success'] = 0;
        $res['message'] = 'Введите пароль';
    }

    return $res;
}

