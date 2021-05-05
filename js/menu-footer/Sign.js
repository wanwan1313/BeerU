function Sign(){

     $.post('Sign-api.php',
     $(document.Sign).serialize(),
     function(data){


        if(data.success){
            alert('資料新增成功');
        }
     },'json')
}