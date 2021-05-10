<?php include __DIR__ . '../../php/common/config.php' ;



$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];


$output['newAccount'] = $_POST['newAccount'];
$output['newPassword'] = $_POST['newPassword'];
$output['nickname'] = $_POST['nickname'];
$output['address'] = $_POST['address'];
$output['birthday'] = $_POST['birthday'];



if(isset($_POST['newAccount'])){

    $a_sql = "SELECT `email` FROM `member` WHERE `email`=?";
    $a_stmt = $pdo->prepare($a_sql);
    $a_stmt->execute([ $_POST['newAccount'] ]);

    if($a_stmt->rowCount()) {
        $output['error'] = '此 email 已經註冊過';
        echo json_encode($output, JSON_UNESCAPED_UNICODE);
        exit;  // 程式結束
    }

    $hash = sha1( $_POST['newAccount']. uniqid() );

    
    // 建立註冊資料
    $sql = "INSERT INTO `member`( `email`, `password`, `nickname`, `birthday`, `address`, `hash`, `created_at`,`user-pic`) VALUES (?,?,?,?,?,?,NOW(),'user-pipi.svg')";

    $stmt = $pdo -> prepare($sql);
     
    $stmt -> execute([
        $_POST['newAccount'],
        password_hash($_POST['newPassword'],PASSWORD_DEFAULT),
        $_POST['nickname'],
        $_POST['birthday'],
        $_POST['address'],
        $hash
     
        
    ]);


    //同時建立成就資料表

    //抓註冊會員的ID
    $m_sql =  "SELECT `sid` FROM `member` ORDER BY sid DESC LIMIT 0 , 1";
    $m_stmt = $pdo -> query($m_sql);
    $m_id =  $m_stmt -> fetch(PDO::FETCH_NUM)[0];

    //建成就資料
    $ac_sql = "INSERT INTO `achievement`( `member_sid`, `coupon`, `achieve`, `create_at`) VALUES (?,'50','0',NOW())";
    $ac_stmt = $pdo -> prepare($ac_sql);
    $ac_stmt -> execute([
         $m_id
      
    ]);


    if($stmt->rowCount()){
        $_SESSION['user']['email']= $_POST['newAccount'];
        $_SESSION['user']['user-pic']= 'user-pipi.svg';
        $_SESSION['user']['sid'] = $m_id;


        $output['member_id']= $m_id; //註冊時的會員ID
        $output['achieve'] = $ac_stmt; //成就系統的資料表
        $output['success'] = true;
        $output['error'] = '';

     } else {
        $output['error'] = '註冊發生錯誤';
     }
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);







