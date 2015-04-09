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