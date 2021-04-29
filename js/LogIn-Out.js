$(document).ready(function(){


//navbar登入起始畫面按鈕
$('.user-login').click(function(){

    $('#LogIn-Out').fadeIn(100);
    $('#first-page').fadeIn(1);
    $('.log-box').css('width','35%').css('height','500px');
    $('#LogIn-page').fadeOut(1);

});

//按周圍區域退出
$('.log-sandbox').click(function(){

   $('#LogIn-Out').fadeOut(500);

})


//進入登入頁
$('#LogIn-btn').click(function(){

   $('#first-page').fadeOut(10);
   $('.log-box').css('width','35%').css('height','550px').css('transition','.3s');
   $('#LogIn-page').fadeIn(100);

    
})


//登入頁畫面
$('.backward-logIn h3').click(function(){

    $('#LogIn-page').fadeOut(1);
    $('#first-page').fadeIn(100);
    $('.log-box').css('width','35%').css('height','500px').css('transition','.3s');


 
})


})
