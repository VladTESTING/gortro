// JavaScript Document
$(document).ready(function(){
     
    //Показать форму
    $('#callback').click(function(){
        $('#callback_form').slideDown();
    });
     
     
     
    //Скрыть форму
    $('#close').click(function(){
        $('#callback_form').slideUp();    
    });
     
     
     
    //Нажали на кнопку - заказать звонок
    $('#send').click(function(){
         
        name = $('#name').val();
        phone = $('#phone').val();
         
        //Если поля заполнены, то отправляем данные
        if( name != '' && phone != '' ){
 
            $.post("php/callback.php",{
                name: name,
                phone: phone
            },function success(data){
                if( data != 0 ) $('#callback_form').html('Отправлено!').slideUp(3000);
            });
         
        }else $(this).siblings('input').animate({opacity: 0.25}, 500).animate({opacity: 1}, 500);
         
    });
 
});