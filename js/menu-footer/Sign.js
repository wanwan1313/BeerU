const newAccount_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
const $nickname = $('#nickname'),
      $newAccount = $('#newAccount');

const fileds = [$nickname, $newAccount];


function checkform_sign(){

    // 回復原來的狀態
    // fileds.forEach(el=>{
    //         el.css('border', '1px solid #CCCCCC');
    //         el.next().text('');
    //     });




    let isPass = true;


    // 錯誤狀態
    // if(! newAccount_re.test($newAccount.val())){
    //         isPass = false;
    //         $newAccount.css('border', '1px solid red');
    //         $newAccount.next().text('請輸入正確的 email');
    //     }


    if(isPass){
            $.post(
                'Sign-api.php',
                $(document.Sign).serialize(),
                function(data){
                    console.log(data)
                    if(data.success){
                        alert('註冊成功');
                    } else {
                        alert(data.error);
                    }
                },
                'json'
            )
        }


}