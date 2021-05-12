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
                        // location.reload();
                         alert('註冊成功');
                    } else {
                        alert(data.error);
                    }
                },
                'json'
            )
        }


}


// 設定註冊只能18歲
let Sign_maxYear = new Date().getFullYear()-18;
let Sign_maxDate = new Date().getDate()
let Sign_maxMonth = new Date().getMonth()+1

function Sign_setMonth(s){
   return s<10 ? '0'+s : s;
}

let Sign_maxAge = Sign_maxYear +'-'+Sign_setMonth(Sign_maxMonth)+'-'+Sign_maxDate ;
$('.birthday').attr('max',Sign_maxAge);