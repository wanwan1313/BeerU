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
                    location.reload();
                    alert('登入成功');
                } else {
                    alert(data.error);
                }
            },
            'json'
        )

    }

}


// 登出
function Logout(){

    location.href= 'Logout-api.php';
    // history.go(0);
}