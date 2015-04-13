/**
 * Created by RedCat on 09.04.2015.
 */
/**
 * Добавление продукта в корзину
 *
 * @param integer id GET параметр - ID добавляемого продукта
 * @return  информация об операции (успех, колво элементов в корзине)
 */
function addToCart(itemId){
    console.log("js - addToCart()");
    $.ajax({
        type: 'POST',
        async: false,
        url: "/cart/addtocart/" + itemId + '/',
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#cartCntItems').html(data['cntItems']);

                $('#addCart_'+ itemId).hide();
                $('#removeCart_'+ itemId).show();
            }
        }
    });
}

/**
 * Удаление продукта из корзины
 *
 * @param integer itemId ID продукта
 * @return в случае успеха обновятся данные корзины на странице
 */
function removeFromCart(itemId){
    console.log("js - removeFromCart("+itemId+")");
    $.ajax({
        type: 'POST',
        async: false,
        url: "/cart/removefromcart/" + itemId + '/',
        dataType: 'json',
        success: function(data){
            if(data['success']){

                $('#cartCntItems').html(data['cntItems']);

                $('#addCart_'+ itemId).show();
                $('#removeCart_'+ itemId).hide();
            }
        }
    });
}

/**
 * Подсчет стоимости купленного товара
 *
 * @param integer itemId ID продукта
 *
 */
function conversionPrice(itemId){
    var newCnt = $('#itemCnt_' + itemId).val();
    var itemPrice = $('#itemPrice_' + itemId).attr('value');
    var itemRealPrice = newCnt * itemPrice;

    $('#itemRealPrice_' + itemId).html(itemRealPrice);
}

/**
 * Получение данных с формы
 *
 */
function getData(obj_form){
    var hData = {};
    $('input, textarea, select',  obj_form).each(function(){
        if(this.name && this.name!=''){
            hData[this.name] = this.value;
            console.log('hData[' + this.name + '] = ' + hData[this.name]);
        }
    });
    return hData;
};

/**
 * Регистрация нового пользователя
 *
 */
function registerNewUser(){
    var postData = getData('#registerBox');

    $.ajax({
        type: 'POST',
        async: false,
        url: "/user/register/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                alert('Регистрация прошла успешно');

                //> блок в левом столбце
                $('#registerBox').hide();

                $('#userLink').attr('href', '/user/');
                $('#userLink').html(data['userName']);
                $('#userBox').show();
                //<

                //> страница заказа
                $('#registerBox').hide();

                $('#loginBox').hide();
                $('#btnSaveOrder').show();
                //<

            } else {
                alert(data['message']);
            }

        }
    });
}
/**
 * Авторизация пользователя
 *
 */
function login() {
    var email = $('#loginEmail').val();
    var pwd = $('#loginPwd').val();

    var postData = "email=" + email + "&pwd=" + pwd;

    $.ajax({
        type: 'POST',
        async: false,
        url: "/user/login/",
        data: postData,
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#registerBox').hide();
                $('#loginBox').hide();

                $('#userLink').attr('href', '/user/');
                $('#userLink').html(data['displayName']);
                $('#userBox').show();

            } else {
                alert(data['message']);
            }

        }
    });
}

/**
 * Показываем или прячем форму регистрации
 */
function showRegisterBox(){
    if($('#registerBoxHidden').css('display') != 'block'){
        $('#registerBoxHidden').show();
    }else{
        $('#registerBoxHidden').hide();
    }
}

/**
 * Обновление данных пользователя
 *
 */
function updateUserData(){
    console.log("js - updateUserData()");
    var phone  = $('#newPhone').val();
    var adress = $('#newAdress').val();
    var pwd   = $('#newPwd').val();
    var curPwd = $('#curPwd').val();
    var name   = $('#newName').val();

    var postData = {phone: phone,
        adress: adress,
        pwd: pwd,
        curPwd: curPwd,
        name: name};

    $.ajax({
        type: 'POST',
        async: false,
        url: "/user/update/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#userLink').html(data['userName']);
                alert(data['message']);
            } else {
                alert(data['message']);
            }
        }

    } );

}