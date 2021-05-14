
<?php include __DIR__ . '../../php/common/config.php';

//預設------------------------------
$output = [
    'success' => false,
    'code' => 0,
    // 可以更換error文字
    'error' => '填寫資料有誤，資料沒有新增',
    'post' => $_POST
];
//預設------------------------------

// event_sid
$event_sid = isset($_POST['event_sid']) ? intval($_POST['event_sid']) : NULL;

// total_p
$total_p = isset($_POST['total_p']) ? intval($_POST['total_p']) + 1 : 0;
// p0
$p0_name = isset($_POST['p0_name']) ? $_POST['p0_name'] : '';
$p0_mobile = isset($_POST['p0_mobile']) ? $_POST['p0_mobile'] : '';
// p1
$p1_name = isset($_POST['p1_name']) ? $_POST['p1_name'] : '無';
$p1_mobile = isset($_POST['p1_mobile']) ? $_POST['p1_mobile'] : '無';
// p2
$p2_name = isset($_POST['p2_name']) ? $_POST['p2_name'] : '無';
$p2_mobile = isset($_POST['p2_mobile']) ? $_POST['p2_mobile'] : '無';
$user_sid = $_SESSION['user']['sid'];



if(empty($p0_name) or empty($p0_mobile) or empty($event_sid)){
    echo json_encode($output);
    exit;
}

$join_SQL = "SELECT COUNT(*) FROM `event_join` WHERE `event_sid` = $event_sid AND`member_sid`= $user_sid";
$Join = $pdo->query($join_SQL)->fetch(PDO::FETCH_NUM)[0];

if( $Join > 0) {
    $output['error'] = '重複報名';
}else{
    $sql = "INSERT INTO `event_join` (
        `event_sid`,
        `p0_name`,
        `p0_mobile`,
        `member_sid`,
        `p1_name`,
        `p1_mobile`,
        `p2_name`,
        `p2_mobile`,
        `total_p`,
        `created_at`) 
        VALUES (
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            NOW())";
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->execute([
        $event_sid,
        $p0_name,
        $p0_mobile,
        $_SESSION['user']['sid'],
        $p1_name,
        $p1_mobile,
        $p2_name,
        $p2_mobile,
        $total_p,
    ]);
    
    if($stmt->rowCount()){
        $output['success'] = true;
    }
}


echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>
















