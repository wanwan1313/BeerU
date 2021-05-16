<?php include __DIR__ . '../../php/common/config.php';


$output = [
    'msg' => '啤女感謝您的評論！'
];

$action = isset($_POST['action']) ? $_POST['action'] : NULL;
$csid = isset($_POST['csid']) ? $_POST['csid'] : NULL;
$psid = isset($_POST['psid']) ? intval($_POST['psid']) : NULL;
$score = isset($_POST['score']) ? intval($_POST['score']) : NULL;
$comment = isset($_POST['comment']) ? $_POST['comment'] : NULL;
$user = $_SESSION['user']['sid'];

// step2
if (!empty($psid) and !empty($action)) {


    switch ($action) {
        
        // 新增評論
        case 'add':

            // 寫進comment資料表
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

            // 改評論總數
            $aget_SQL = "SELECT `accum_comment` FROM `member` WHERE `sid` = $user";
            $new_num = $pdo->query($aget_SQL)->fetch(PDO::FETCH_NUM)[0] + 1;
            $ain_SQL = "UPDATE `member` SET `accum_comment`= ? WHERE `sid` = $user";
            $ain_stmt = $pdo->prepare($ain_SQL);
            $ain_stmt->execute([
                $new_num,
            ]);


            // 改order_detail的評論狀態
            $p_SQL = "UPDATE `order_detail` SET `comment`=? 
                    WHERE `member_sid` = $user AND `product_sid` = $psid AND `comment` = 'false' LIMIT 1";

            $p_stmt = $pdo->prepare($p_SQL);
            $p_stmt->execute([
                'true',
            ]);

            break;


        // 修改評論
        case 'edit':

            // update comment資料表
            $edit_SQL = "UPDATE `comment` SET `score`=?,`text`=? WHERE `sid` = ?";
            $e_stmt = $pdo->prepare($edit_SQL);
            $e_stmt->execute([
                $score,
                $comment,
                $csid,
            ]);

            $output['msg'] = '已經修改評論囉！';

            break;
    };


    $output['psid'] = $psid;
    $output['score'] = $score;
    $output['comment'] = $comment;
};




echo json_encode($output, JSON_UNESCAPED_UNICODE);
