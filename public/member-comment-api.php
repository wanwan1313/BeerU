<?php include __DIR__ . '../../php/common/config.php';


$output = [
    'msg' => '已送出評價'
];

$psid = isset($_POST['psid']) ? intval($_POST['psid']) : NULL;
$score = isset($_POST['score']) ? intval($_POST['score']) : NULL;
$comment = isset($_POST['comment']) ? $_POST['comment'] : NULL;
$user = $_SESSION['user']['sid'];

// step2
if (!empty($psid)) {

    // 寫進order資料庫
    $SQL = "INSERT INTO `comment`
    (`member_sid`, `product_sid`, `score`, `text`, `created_at`) 
    VALUES (?,?,?,?,NOW())";

    $stmt = $pdo->prepare($SQL);
    $stmt->execute([
        $user,
        $psid,
        $score,
        $comment,
    ]);


    // 改評論狀態
    $p_SQL = "UPDATE `order_detail` SET `comment`=? 
    WHERE `member_sid` = $user AND `product_sid` = $psid LIMIT 1";

    $p_stmt = $pdo->prepare($p_SQL);
    $p_stmt->execute([
        'true',
    ]);

    $output['psid']=$psid;
    $output['score']=$score;
    $output['comment']=$comment;

}




echo json_encode($output, JSON_UNESCAPED_UNICODE);
