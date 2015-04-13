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

function registerNewUser($email, $pwdMD5, $name, $phone, $adress){
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


/**
 * Проверка почты (есть ли email адрес в БД)
 *
 * @param string $email
 * @return array  массив - строка из таблицы users, либо пустой массив
 */
function checkUserEmail($email)
{
    global $link;
    $email = mysqli_real_escape_string($link, $email);
    $sql = "SELECT id FROM users WHERE email = '{$email}'";

    $res = mysqli_query($link, $sql);
    $res = createSmartyResArray($res);

    return $res;
}

/**
 * Авторизация пользователя
 *
 * @param string $email почта (логин)
 * @param string $pwd пароль
 * @return array массив данных пользователя
 */
function loginUser($email, $pwd)
{
    global $link;
    $email   = htmlspecialchars(mysqli_real_escape_string($link, $email));
    $pwd     = md5($pwd);

    $sql = "SELECT * FROM users
            WHERE (`email` = '{$email}' and `pwd` = '{$pwd}')
            LIMIT 1";

    $res = mysqli_query($link, $sql);

    $res = createSmartyResArray($res);
    if(isset($res[0])){
        $res['success'] = 1;
    } else {
        $res['success'] = 0;
    }

    return $res;
}


/**
 * Изменение данных пользователя
 *
 * @param string $name имя пользователя
 * @param string $phone телефон
 * @param string $adress адрес
 * @param string $pwd новый пароль
 * @param string $curPwd текущий пароль
 * @return boolean TRUE в случае успеха
 */
function updateUserData($name, $phone, $adress, $pwd, $curPwd)
{
    global $link;
    $email   = htmlspecialchars(mysqli_real_escape_string($link, $_SESSION['user']['email']));
    $name    = htmlspecialchars(mysqli_real_escape_string($link, $name));
    $phone   = htmlspecialchars(mysqli_real_escape_string($link, $phone));
    $adress  = htmlspecialchars(mysqli_real_escape_string($link, $adress));
    $pwd = trim($pwd);

    $newPwd = null;
    $newPwd = md5($pwd);


    $sql = "UPDATE users
            SET ";

    if($newPwd){
        $sql .= "`pwd` = '{$newPwd}', ";
    }

    $sql .= " `name` = '{$name}',
            `phone` = '{$phone}',
            `adress` = '{$adress}'
           WHERE
            `email` = '{$email}' AND `pwd` = '{$curPwd}'
           LIMIT 1";

    $res = mysqli_query($link, $sql);


    return $res;
}