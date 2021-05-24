// 登入
const account_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

const $account = $('.account');
const $password = $('.password');


//初始錯誤狀態
$('.LogIn-Sign .warn').css('display', 'none');

function checkform_Login(){

    let isPass = true;
    
    const fileds01 = [$account,$password];

    fileds01.forEach(el =>{
   
        el.css('border', '1px solid var(--gold)');
        $('.LogIn-Sign .warn').css('display', 'none');
       

    });



 
    //帳號不符合格式
    if(!account_re.test($account.val())){
        isPass = false;
        $account.css('border', 'solid 2px var(--pink)');
        $account.parent().next().css('display', 'block').children().text('帳號為E-mail格式');
        ;

    }
    
    //輸入不能為空
    if($account.val() == '' && $password.val()== ''){
        isPass = false;
        $account.css('border', 'solid 2px var(--pink)');
        $password.css('border', 'solid 2px var(--pink)');

        $account.parent().next().css('display', 'block').children().text('輸入不可以為空');
        $password.parent().next().css('display', 'block').children().text('輸入不可以為空');



    }

    
    if(isPass){

        $.post(
            'Login-api.php',
            $(document.Login).serialize(),
            function(data){
                console.log(data)
                if(data.success){
                    


                    $('.LogIn-Sign').fadeOut(100);
                    $('.pop-up-1').fadeIn(150);
                    $('.pop-up-1 .icon').html('<i class="fas fa-check"></i>').css('background-color','var(--gold)')
                    $('.pop-up-1 .pop-up-text').text('登入成功');
                    $('button.ok').on('click', function () {
                        location.reload();
                    })

                   
                    


                } else {
                     
                
                    $account.css('border', 'solid 2px var(--pink)');
                    $password.css('border', 'solid 2px var(--pink)');
                    $password.parent().next().css('display', 'block').children().text('帳號或密碼錯誤');
                 
                    
                }
            },
            'json'
        )

    }

}


// 登出
function Logout(){
    $('.pop-up-2').fadeIn(150);
    $('.pop-up-2 .icon').html('<i class="fas fa-door-open"></i>').css('color','var(--gold)').css('background-color','transparent');
    $('.pop-up-2 .pop-up-text').text('是否要登出？');
    $('.pop-up-2 .yes').text('登出');
    $('.pop-up-2 .no').text('取消');

    $('.pop-up-2 .yes').on('click', function () {
        location.href= 'Logout-api.php';
    })
    $('.pop-up-2 .no').on('click', function () {
        $('.pop-up-2').fadeOut(150);
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




