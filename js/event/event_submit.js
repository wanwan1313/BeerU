// const newAccount_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
// const $nickname = $('#nickname'),
//       $newAccount = $('#newAccount');

// const fileds = [$nickname, $newAccount];


function event_submit(){

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
        'event-join-api.php',
        $(document.event_join).serialize(),

        function(data){
            console.log(data)


            if(data.success){
                alert('報名成功');

                
            } else {
                alert(data.error);
            }
        },
        'json'
    )
       

}


}