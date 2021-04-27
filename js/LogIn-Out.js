$(document).ready(function(){



$('.user-login').click(function(){

    $('#LogIn-Out').fadeIn(100);



});

$('.log-sandbox').click(function(){

   $('#LogIn-Out').css('display','none');

})

$('#LogIn-btn').click(function(){


   $('#first-page').fadeOut(10);
   $('.log-box').css('width','40%').css('height','550px').css('transition','.5s');
   $('#LogIn-page').fadeIn(100);

    
})


$('.backward-logIn h3').click(function(){

    $('#LogIn-page').fadeOut(1);
    $('#first-page').fadeIn(100);
    $('.log-box').css('width','45%').css('height','500px').css('transition','.5s');;


 
})


})
