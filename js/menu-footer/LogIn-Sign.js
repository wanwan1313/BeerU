$(document).ready(function(){

const $account = $('.account');
const $password = $('.password');


const $newAccount = $('.newAccount');
const $newPassword = $('.newPassword');
const $nickname = $('.nickname');
const $birthday = $('.birthday');

    
//會員登入的視覺效果

//navbar登入起始畫面按鈕
$('.user-login').click(function(){

    const fileds01 = [$account,$password];

    fileds01.forEach(el =>{
    
        el.css('border', '1px solid var(--gold)');
        $('.warn').css('display', 'none');
        

    });



    if ($(window).width() >= 992){
        $('.log-box').css('width','35%').css('height','60%').css('min-height','494px').css('transition','.4s');

    }

    if ($(window).width() < 992){
    $('.log-box').css('width','90%').css('max-width','338px').css('height','50%').css('min-height','460px').css('transition','.4s');


    }


    $('.LogIn-Sign').fadeIn(100);
    $('.first-login-page').fadeIn(1);
    
    $('.LogIn-page').fadeOut(1);
    $('.LogSign-page').fadeOut(1);
    $('.Check-page').fadeOut(1);
    $('.Sign-Success').fadeOut(1);

});





//按周圍區域退出
$('.log-sandbox').click(function(){

   $('.LogIn-Sign').fadeOut(300);
   const fileds01 = [$account,$password];

   const fileds02 = [$newAccount,$newPassword,$nickname,$birthday];

   fileds01.forEach(el2 =>{
  
       el2.css('border', '1px solid var(--gold)');
       $('.warn').css('display', 'none');
      

   });

   fileds02.forEach(el =>{
   
    el.css('border', '1px solid var(--gold)');
    $('.LogIn-Sign .warn').css('display', 'none');

  
   });

 

})

$('.cancel-quit').click(function(){
    $('.Check-page').fadeOut(300);
   $('.LogIn-Sign').fadeOut(300);
   const fileds01 = [$account,$password];
   const fileds02 = [$newAccount,$newPassword,$nickname,$birthday];

   fileds01.forEach(el =>{
  
       el.css('border', '1px solid var(--gold)');
       $('.warn').css('display', 'none');
      

   });

   fileds02.forEach(el2 =>{
   
    el2.css('border', '1px solid var(--gold)');
    $('.LogIn-Sign .warn').css('display', 'none');

  
   });

})

$('.later-check').click(function(){
   $('.Check-page').fadeOut(300);
   $('.LogIn-Sign').fadeOut(300);
   const fileds01 = [$account,$password];
   const fileds02 = [$newAccount,$newPassword,$nickname,$birthday];

   fileds01.forEach(el =>{
  
       el.css('border', '1px solid var(--gold)');
       $('.warn').css('display', 'none');
      

   });

   fileds02.forEach(el2 =>{
   
    el2.css('border', '1px solid var(--gold)');
    $('.LogIn-Sign .warn').css('display', 'none');

  
   });

})


//進入登入頁
$('.LogIn-btn01').click(function(){




   
    if ($(window).width() >= 992){
        $('.log-box').css('width','35%').css('height','60%').css('min-height','494px').css('transition','.4s');

    }

    if ($(window).width() < 992){
    $('.log-box').css('width','90%').css('max-width','338px').css('height','60%').css('min-height','500px').css('transition','.4s');


    }




   $('.first-login-page').fadeOut(1);
   
   $('.LogIn-page').fadeIn(1000);

    
})


//進入註冊畫面

$('.LogOut-btn02').click(function(){
    const fileds01 = [$account,$password];
    const fileds02 = [$newAccount,$newPassword,$nickname,$birthday];

    fileds01.forEach(el =>{
    
        el.css('border', '1px solid var(--gold)');
        $('.warn').css('display', 'none');
        

    });


    fileds02.forEach(el2 =>{
   
        el2.css('border', '1px solid var(--gold)');
        $('.LogIn-Sign .warn').css('display', 'none');

      
       });



    if ($(window).width() >= 992){

        $('.log-box').css('width','50%').css('height','86%').css('transition','.4s');
    }

    if ($(window).width() < 992){
        $('.log-box').css('width','90%').css('max-width','338px').css('height','80%').css('transition','.4s');


    }



    $('.first-login-page').fadeOut(1);

    

    $('.LogSign-page').fadeIn(1000);
     

})


// 進入驗證頁
// $('.Sign').click(function(){

//     $('.LogSign-page').fadeOut(1);
//     $('.Check-page').fadeIn(1000);
//     $('.log-box').css('width','35%').css('height','500px').css('transition','.4s');


// })


// 立即註冊
$('.LogSign-rightNow').click(function(){

    const fileds01 = [$account,$password];

    const fileds02 = [$newAccount,$newPassword,$nickname,$birthday];

    fileds01.forEach(el =>{
    
        el.css('border', '1px solid var(--gold)');
        $('.warn').css('display', 'none');
        

    });

    fileds02.forEach(el2 =>{
   
        el2.css('border', '1px solid var(--gold)');
        $('.LogIn-Sign .warn').css('display', 'none');

      
     });




    if ($(window).width() >= 992){

        $('.log-box').css('width','50%').css('height','86%').css
    }

    if ($(window).width() < 992){
        $('.log-box').css('width','90%').css('height','80%').css
    }



    $('.LogIn-page').fadeOut(1);
    $('.LogSign-page').fadeIn(1000);

})


// 馬上登入
$('.LogIn-rightNow').click(function(){

    const fileds01 = [$account,$password];

    const fileds02 = [$newAccount,$newPassword,$nickname,$birthday];

    fileds01.forEach(el =>{
    
        el.css('border', '1px solid var(--gold)');
        $('.warn').css('display', 'none');
        

    });

    fileds02.forEach(el2 =>{
   
        el2.css('border', '1px solid var(--gold)');
        $('.LogIn-Sign .warn').css('display', 'none');

      
       });



    if ($(window).width() >= 992){
        $('.log-box').css('width','35%').css('height','60%').css('min-height','494px').css('transition','.4s');

    }

    if ($(window).width() < 992){
    $('.log-box').css('width','90%').css('max-width','338px').css('height','60%').css('min-height','500px').css('transition','.4s');
   
    }



    $('.first-login-page').fadeOut(1);
    $('.LogSign-page').fadeOut(1);
 
    $('.LogIn-page').fadeIn(1000);
 
     
 })


//回到起始畫面
$('.back01 h3').click(function(){

    const fileds01 = [$account,$password];

    const fileds02 = [$newAccount,$newPassword,$nickname,$birthday];

    fileds01.forEach(el =>{
    
        el.css('border', '1px solid var(--gold)');
        $('.warn').css('display', 'none');
        

    });

    fileds02.forEach(el2 =>{
   
        el2.css('border', '1px solid var(--gold)');
        $('.LogIn-Sign .warn').css('display', 'none');

      
       });
   


    if ($(window).width() >= 992){
        $('.log-box').css('width','35%').css('height','60%').css('min-height','494px').css('transition','.4s');

    }

    if ($(window).width() < 992){
        $('.log-box').css('width','90%').css('max-width','338px').css('height','50%').css('min-height','460px').css('transition','.4s');
    
    
    }


    

    $('.LogIn-page').fadeOut(1);
    $('.LogSign-page').fadeOut(1);
    $('.first-login-page').fadeIn(100);
    // $('.log-box').css('width','35%').css('height','60%').css('min-height','494px').css('transition','.4s');

 
})

//回到起始畫面
$('.back02 h3').click(function(){

    const fileds01 = [$account,$password];
    const fileds02 = [$newAccount,$newPassword,$nickname,$birthday];

    fileds01.forEach(el =>{
    
        el.css('border', '1px solid var(--gold)');
        $('.warn').css('display', 'none');
        

    });

    fileds02.forEach(el2 =>{
   
        el2.css('border', '1px solid var(--gold)');
        $('.LogIn-Sign .warn').css('display', 'none');

      
       });
   


    if ($(window).width() >= 992){
        $('.log-box').css('width','35%').css('height','60%').css('min-height','494px').css('transition','.4s');

    }

    if ($(window).width() < 992){
        $('.log-box').css('width','90%').css('max-width','338px').css('height','50%').css('min-height','460px').css('transition','.4s');
    
    
    }


    

    $('.LogIn-page').fadeOut(1);
    $('.LogSign-page').fadeOut(1);
    $('.first-login-page').fadeIn(100);
    // $('.log-box').css('width','35%').css('height','60%').css('min-height','494px').css('transition','.4s');

 
})

//驗證頁返回
$('.back03 h3').click(function(){

    const fileds02 = [$newAccount,$newPassword,$nickname,$birthday];

    fileds02.forEach(el2 =>{

    el2.css('border', '1px solid var(--gold)');
    $('.LogIn-Sign .warn').css('display', 'none');

    
    });




    $('.Check-page').fadeOut(1);
    $('.LogSign-page').fadeIn(1000);

    if ($(window).width() >= 992){

        $('.log-box').css('width','50%').css('height','86%').css
    }

    if ($(window).width() < 992){
        $('.log-box').css('width','90%').css('max-width','338px').css('height','80%').css


    }
  


})






})
