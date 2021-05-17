<?php
include __DIR__ . '../../php/common/config.php' ;


$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];

$newAccount = $_SESSION['check-user']['newAccount'];
$newPassword = $_SESSION['check-user']['newPassword'];
$nickname = $_SESSION['check-user']['nickname'];
$address = $_SESSION['check-user']['address'];
$birthday = $_SESSION['check-user']['birthday'];


$check_code = $_SESSION['check-user']['check_code'];
$check_number= $_POST['check_number'];



if($check_code == $check_number){



    $hash = sha1( $newAccount. uniqid() );

    // 建立註冊資料
    $sql = "INSERT INTO `member`( `email`, `password`, `nickname`, `birthday`, `address`, `hash`, `created_at`,`user-pic`) VALUES (?,?,?,?,?,?,NOW(),'user-pipi.svg')";

    $stmt = $pdo -> prepare($sql);

    $stmt -> execute([

            $newAccount,
            password_hash($newPassword,PASSWORD_DEFAULT),
            $nickname,
            $birthday,
            $address,
            $hash
             
                
    ]);


    //同時建立成就資料表

    //抓註冊會員的ID
    $m_sql =  "SELECT `sid` FROM `member` ORDER BY sid DESC LIMIT 0 , 1";
    $m_stmt = $pdo -> query($m_sql);
    $m_sid =  $m_stmt -> fetch(PDO::FETCH_NUM)[0];

    //建成就資料
    $ac_sql = "INSERT INTO `achievement`( `member_sid`, `coupon`, `achieve`, `create_at`) VALUES (?,'50','0',NOW())";
    $ac_stmt = $pdo -> prepare($ac_sql);
    $ac_stmt -> execute([
         $m_sid
      
    ]);


    if($stmt->rowCount()){
        $_SESSION['user']['email']= $newAccount;
        $_SESSION['user']['password']=  password_hash($newPassword,PASSWORD_DEFAULT);
        $_SESSION['user']['user-pic']= 'user-pipi.svg';
        $_SESSION['user']['sid'] = $m_sid;

        unset($_SESSION['check-user']);


        $output['member_id']= $m_sid; //註冊時的會員ID
        $output['achieve'] = $ac_stmt; //成就系統的資料表
        $output['success'] = true;
        $output['error'] = '';

     } else {
        $output['error'] = '註冊發生錯誤';
     }

   
    


}else{
    $output['error'] = '驗證碼錯誤';
}

 

echo json_encode($output, JSON_UNESCAPED_UNICODE);


?>







