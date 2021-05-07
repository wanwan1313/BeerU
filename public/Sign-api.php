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


    $sql = "INSERT INTO `member`( `email`, `password`, `nickname`, `birthday`, `address`, `hash`, `created_at`,`user-pic`) VALUES (?,?,?,?,?,?,NOW(),'user.svg')";

    $stmt = $pdo -> prepare($sql);
     
    $stmt -> execute([
        $_POST['newAccount'],
        password_hash($_POST['newPassword'],PASSWORD_DEFAULT),
        $_POST['nickname'],
        $_POST['birthday'],
        $_POST['address'],
        $hash
     
        
    ]);
    
    if($stmt->rowCount()){
       $output['success'] = true;
       $output['error'] = '';
     } else {
        $output['error'] = '註冊發生錯誤';
     }
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);






