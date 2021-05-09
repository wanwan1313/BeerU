// 登入
function checkform_Login(){

    let isPass = true;

    if(isPass){

        $.post(
            'Login-api.php',
            $(document.Login).serialize(),
            function(data){
                console.log(data)
                if(data.success){

                    $('.pop-up-1').fadeIn(150);
                    $('.pop-up-1 .icon').html('<i class="fas fa-check"></i>').css('background-color','var(--gold)')
                    $('.pop-up-1 .pop-up-text').text('登入成功');
                    $('button.ok').on('click', function () {
                        location.reload();
                    })
                    


                } else {
                    $('.pop-up-1').fadeIn(150);
                    $('.pop-up-1 .icon').html('<i class="fas fa-times"></i>').css('background-color','var(--red)')
                    $('.pop-up-1 .pop-up-text').text('登入失敗');
                    
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