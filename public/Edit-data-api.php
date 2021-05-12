<?php include __DIR__ . '../../php/common/config.php' ;



$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];


$output['newNickname'] = $_POST['nickname'];
$output['newBirthday'] = $_POST['birthday'];
$output['newAddress'] = $_POST['address'];
$output['userID'] = $_SESSION['user']['sid'];




if(isset( $_POST['nickname']) and isset( $_POST['birthday'])){

    $m_id =  $_SESSION['user']['sid'];

    // 更新會員資料
    $e_sql = "UPDATE `member` SET 
             `nickname`=?,
             `birthday`=?,
             `address`=? 
              
              WHERE `sid`= $m_id ";

    $e_stmt = $pdo -> prepare($e_sql);
     
    $e_stmt -> execute([
        $_POST['nickname'],
        $_POST['birthday'],
        $_POST['address']
        
    ]);





    if($e_stmt->rowCount()){
        $_SESSION['user']['nickname']= $_POST['nickname'];
        $_SESSION['user']['birthday']= $_POST['birthday'];
        $_SESSION['user']['address']= $_POST['address'];
        $_SESSION['user']['sid'] = $m_id;


    
        $output['success'] = true;
        $output['error'] = '';

     } else {
        $output['error'] = '修改發生錯誤';
     }
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>







