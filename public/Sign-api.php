<?php include __DIR__ . '../../php/common/config.php' ;


$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];


$output['email'] = $_POST['email'];
$output['password'] = $_POST['password'];
$output['nickname'] = $_POST['nickname'];
$output['address'] = $_POST['address'];
$output['birthday'] = $_POST['birthday'];


if(isset($_POST['email'])){

    // $a_sql = "SELECT `email` FROM `member` WHERE `email`=?";
    // $a_stmt = $pdo->prepare($a_sql);
    // $a_stmt->execute([ $_POST['email'] ]);

    // if($a_stmt->rowCount()) {
    //     $output['error'] = '此 email 已經註冊過';
    //     echo json_encode($output, JSON_UNESCAPED_UNICODE);
    //     exit;  // 程式結束
    // }

    $hash = sha1( $_POST['email']. uniqid() );


    $sql = "INSERT INTO `member`(
        `email`, `password`,`nickname`,
        ,`birthday`,`address`, `hash`,  
        , `created_at`
        ) VALUES (
                  ?, ?,
                  ?, ?, ?,
                  ?, NOW()
        )";



$stmt = $pdo->prepare($sql);
$stmt->execute([
    
    $_POST['email'],
    password_hash($_POST['password'], PASSWORD_DEFAULT),
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







