$(document).ready(function(){


//navbar登入起始畫面按鈕
$('.user-login').click(function(){

    $('.LogIn-Sign').fadeIn(100);
    $('.first-login-page').fadeIn(1);
    $('.log-box').css('width','35%').css('height','500px');
    $('.LogIn-page').fadeOut(1);
    $('.LogSign-page').fadeOut(1);
    $('.Check-page').fadeOut(1);

});

//按周圍區域退出
$('.log-sandbox').click(function(){

   $('.LogIn-Sign').fadeOut(300);

})

$('.cancel-quit').click(function(){
    $('.Check-page').fadeOut(300);
   $('.LogIn-Sign').fadeOut(300);

})

$('.later-check').click(function(){
   $('.Check-page').fadeOut(300);
   $('.LogIn-Sign').fadeOut(300);

})


//進入登入頁
$('.LogIn-btn01').click(function(){
   

   $('.first-login-page').fadeOut(1);
   $('.log-box').css('width','35%').css('height','calc(100vh - 40vh)').css('transition','.4s');
   $('.LogIn-page').fadeIn(1000);

    
})


//進入註冊畫面

$('.LogOut-btn02').click(function(){


    $('.first-login-page').fadeOut(1);

    $('.log-box').css('width','50%').css('height','calc(100vh - 25vh)').css('transition','.4s')

    $('.LogSign-page').fadeIn(1000);
     

})


// 進入驗證頁
$('.logSign-btn').click(function(){

    $('.LogSign-page').fadeOut(1);
    $('.Check-page').fadeIn(1000);
    $('.log-box').css('width','35%').css('height','500px').css('transition','.4s');


})


// 立即註冊
$('.LogSign-rightNow').click(function(){

    $('.first-login-page').fadeOut(1);
    $('.LogIn-page').fadeOut(1);
    $('.log-box').css('width','50%').css('height','calc(100vh - 25vh)').css('transition','.4s')
    $('.LogSign-page').fadeIn(1000);

})


// 馬上登入
$('.LogIn-rightNow').click(function(){

    $('.first-login-page').fadeOut(1);
    $('.LogSign-page').fadeOut(1);
    $('.log-box').css('width','35%').css('height','calc(100vh - 40vh)').css('transition','.4s');
    $('.LogIn-page').fadeIn(1000);
 
     
 })


//回到起始畫面
$('.backward h3').click(function(){

    $('.LogIn-page').fadeOut(1);
    $('.LogSign-page').fadeOut(1);
    $('.first-login-page').fadeIn(100);
    $('.log-box').css('width','35%').css('height','500px').css('transition','.4s');


 
})







})
