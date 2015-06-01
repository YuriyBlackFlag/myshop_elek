<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Электрончик</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- templatemo 345 mini two -->
    <!--
    Mini Two Template
    http://www.templatemo.com/preview/templatemo_345_mini_two
    -->
    <link href="/www/templates/modern/css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/www/templates/modern/css/coda-slider.css" type="text/css" charset="utf-8" />

    <script src="/www/js/jquery.js" type="text/javascript"></script>
    <script src="/www/js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
    <script src="/www/js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
    <script src="/www/js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
    <script src="/www/js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
    <script src="/www/js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="/www/js/main.js"></script>

</head>

<body>

<div id="slider">
            <div id="templatemo_header_wrapper">
                <div id="templatemo_header">
                    <div id="header"><h1><a href="/">Электрончик <h2>магазин<br /> нужных вещей</h2></a></h1></div>
                </div>
                <div class="Caption">Корзина<br />
                    <a href="/cart/" title="Перейти в корзину">В корзине</a>
        <span id="cartCntItems">
            {if $cartCntItems > 0}{$cartCntItems}{else}пусто{/if}
        </span>
                </div>
                {if isset($arUser)}
                    <div id="userBox">
                        Вы: <a href="/user/" id="userLink">{$arUser['displayName']}</a><br/>
                        <a href="/user/logout/" onclick="logout();">Выход</a>
                    </div>

                {else}
                    <div id="userBox" class="hideme">
                        Вы: <a href="#" id="userLink"></a><br />
                        <a href="/user/logout/" onclick="logout();">Выход</a>
                    </div>

                    {if ! isset($hideLoginBox)}
                        <div id="loginBox">
                            <div class="menuCaption">Авторизация</div>
                            <input type="text" id="loginEmail" name="loginEmail" value=""  placeholder="email" class="input_field"/><br />
                            <input type="password" id="loginPwd" name="loginPwd" value="" placeholder="password"  class="input_field"/><br />
                            <input type="button" onclick="login();" class="submit_btn" value="Войти"/>
                        </div>

                        <div id="registerBox">
                            <div class="menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
                            <div id="registerBoxHidden">
                                <input type="text" id="email" name="email" value="" placeholder="email"  class="input_field"/><br />
                                <input type="password" id="pwd" name="pwd" value="" placeholder="password"  class="input_field"/><br />
                                <input type="button" onclick="registerNewUser();" class="submit_btn" value="Зарегистрироваться"/>
                            </div>
                        </div>

                    {/if}
                {/if}
                <div class="contact"><a href="/views/modern/contactus.html">Контакты</a></div>
            </div>


    <div id="templatemo_main">
        {include file='leftcolumn.tpl'}

