// 登入

const account_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

const $account = $('.account'), $password = $('.password');


function checkform_Login(){

    let isPass = true;


    if(!account_re.test($account.val())){
        isPass = false;
        $('.account').css('border', 'solid 1px var(--pink)');
        $('.account-warn').css('display','block')

    }
    

    if(isPass){

        $.post(
            'Login-api.php',
            $(document.Login).serialize(),
            function(data){
                console.log(data)
                if(data.success){
               
                    // $('.pop-up-1').fadeIn(150);
                    // $('.pop-up-1 .icon').html('<i class="fas fa-check"></i>').css('background-color','var(--gold)')
                    // $('.pop-up-1 .pop-up-text').text('登入成功');
                    // $('button.ok').on('click', function () {
                        
                    // })

                    location.reload();
                    


                } else {
                     
                   
                    $('.enter-warn').css('display','block')
                    $('.input-btn').css('border', 'solid 1px var(--pink)');
                 
                    
                }
            },
            'json'
        )

    }

}


// 登出
function Logout(){
    $('.pop-up-1').fadeIn(150);
    $('.pop-up-1 .icon').html('<i class="fas fa-door-open"></i>').css('color','var(--gold)').css('background-color','transparent');
    $('.pop-up-1 .pop-up-text').text('登出成功');

    $('button.ok').on('click', function () {
        location.href= 'Logout-api.php';
    })
    

}


function LogIn_btn(){

    // 進入登入頁 
    if ($(window).width() >= 992){
        $('.log-box').css('width','35%').css('height','60%').css('min-height','494px').css('transition','.4s');

    }
    if ($(window).width() < 992){
    $('.log-box').css('width','90%').css('max-width','338px').css('height','60%').css('min-height','400px').css('transition','.4s');

    }
    $('.LogIn-Sign').fadeIn(100);
    $('.first-login-page').fadeOut(1);
    
    $('.LogIn-page').fadeIn(1000);
    $('.back01').css('display','none')


    // 立即註冊
    $('.LogSign-rightNow').click(function(){

    if ($(window).width() >= 992){

        $('.log-box').css('width','50%').css('height','86%').css
    }

    if ($(window).width() < 992){
        $('.log-box').css('width','90%').css('height','80%').css
    }


    // 馬上登入
    $('.LogIn-page').fadeOut(1);
    $('.LogSign-page').fadeIn(1000);

    $('.back02').css('display','none')

    $('.LogIn-rightNow').click(function(){



        if ($(window).width() >= 992){
            $('.log-box').css('width','35%').css('height','60%').css('min-height','494px').css('transition','.4s');
    
        }
    
        if ($(window).width() < 992){
            $('.log-box').css('width','90%').css('max-width','338px').css('height','60%').css('min-height','400px').css('transition','.4s');
        }
    
    
    
        $('.first-login-page').fadeOut(1);
        $('.LogSign-page').fadeOut(1);
     
        $('.LogIn-page').fadeIn(1000);
     
         
     })

})


}




