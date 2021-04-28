$(document).ready(function(){



$('.user-login').click(function(){

    $('#LogIn-Out').fadeIn(100);
    $('#first-page').fadeIn(1);
    $('.log-box').css('width','35%').css('height','520px');
    $('#LogIn-page').fadeOut(1);



});

$('.log-sandbox').click(function(){

   $('#LogIn-Out').fadeOut(500);

})

$('#LogIn-btn').click(function(){


   $('#first-page').fadeOut(10);
   $('.log-box').css('width','35%').css('height','550px').css('transition','.3s');
   $('#LogIn-page').fadeIn(100);

    
})


$('.backward-logIn h3').click(function(){

    $('#LogIn-page').fadeOut(1);
    $('#first-page').fadeIn(100);
    $('.log-box').css('width','35%').css('height','520px').css('transition','.3s');


 
})


})
