<?php include __DIR__ . '../../php/common/config.php' ;



$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];


if(isset($_POST['oldPassword'])){


        $m_sid =  $_SESSION['user']['sid'];

        $op_sql = "SELECT `password` FROM `member` WHERE `sid`= $m_sid ";


        $old_password_hash = $pdo -> query($op_sql) -> fetch(PDO::FETCH_NUM)[0];



       if( password_verify($_POST['oldPassword'],$old_password_hash)){
   
   
             // reset password
             $np_sql = "UPDATE `member` SET `password`=?  WHERE `sid` = $m_sid ";
             $np_stmt = $pdo -> prepare($np_sql);
             $np_stmt -> execute([
 
             password_hash($_POST['resetPassword'],PASSWORD_DEFAULT)
 
             ]);
 
             if($np_stmt->rowCount()){
 
 
             $_SESSION['user']['password'] =password_hash($_POST['resetPassword'],PASSWORD_DEFAULT);
 
 
 
             $output['success'] = true;
             $output['error'] = '';
 
 
             }else {
                 $output['error'] = '重新設定發生錯誤';
             }
 
 
           

        }else{

            $output['error']= '密碼錯誤';

         }
        
        


}


echo json_encode($output, JSON_UNESCAPED_UNICODE);
?>
