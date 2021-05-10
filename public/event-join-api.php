
<?php include __DIR__ . '../../php/common/config.php';

// if (!isset($_SESSION['event'])) {
//     $_SESSION['event'] = [];
// };

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];


$output['自己的名字'] = $_POST['p0_name'];
$output['自己的電話'] = $_POST['p0_mobile'];
$output['1號的名字'] = $_POST['p1_name'];
$output['1號的電話'] = $_POST['p1_mobile'];
$output['2號的名字'] = $_POST['p2_name'];
$output['2號的電話'] = $_POST['p2_mobile'];


// ?b
// if(isset($_POST['newAccount'])){

//     $e_sql = "SELECT `email` FROM `member` WHERE `email`=?";
//     $e_stmt = $pdo->prepare($a_sql);
//     $e_stmt->execute([ $_POST['sid'] ]);

//     if($e_stmt->rowCount()) {
//         $output['error'] = '您已報名成功';
//         echo json_encode($output, JSON_UNESCAPED_UNICODE);
//         exit;  // 程式結束
//     }

//     $hash = sha1( $_POST['sid']. uniqid() );


//     $sql = "INSERT INTO `member`( `email`, `password`, `nickname`, `birthday`, `address`, `hash`, `created_at`,`user-pic`) VALUES (?,?,?,?,?,?,NOW(),'user.svg')";

//     $stmt = $pdo -> prepare($sql);
     
//     $stmt -> execute([
//         $_POST['newAccount'],
//         password_hash($_POST['newPassword'],PASSWORD_DEFAULT),
//         // $_POST['nickname'],
//         // $_POST['birthday'],
//         // $_POST['address'],
//         $hash
     
        
//     ]);
    
//     if($stmt->rowCount()){
//        $output['success'] = true;
//        $output['error'] = '';
//      } else {
//         $output['error'] = '填寫錯誤';
//      }
// }

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>
















