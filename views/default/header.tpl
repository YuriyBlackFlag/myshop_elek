<!doctype HTML>
<html>
<head>
    <meta charset ='utf-8' />
    <title>{$pageTitle}</title>
    <link rel="stylesheet" href="{$templateWebPath}css/main.css" type="text/css" />
    <script type="text/javascript" src="/www/js/jquery.js"></script>
    <script type="text/javascript" src="/www/js/main.js"></script>
</head>
<body>
<div id="container">
<header>
    <h1>Электрончик </br> <span>интернет магазин нужных вещей</span></h1>
    <div class="Caption">Корзина<br />
        <a href="/cart/" title="Перейти в корзину">В корзине</a>
        <span id="cartCntItems">
            {if $cartCntItems > 0}{$cartCntItems}{else}пусто{/if}
        </span>
    </div>
</header>


{include file='leftcolumn.tpl'}


<div id="centerColumn">


