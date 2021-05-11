<?php include __DIR__ . '../../php/common/config.php';


$output = [
    'msg' => '已加入收藏清單'
];

// 1.列表 2.加入 3.新增 4.刪除
// 1.list 2.add 3.update 4.delete

$action = isset($_GET['action']) ? $_GET['action']:'';
$p_sid = isset($_GET['psid']) ? intval($_GET['psid']):NULL;
$user = $_SESSION['user']['sid'];



switch( $action ){
    case 'add' :

        if( !empty($p_sid)){

            // 寫入collect資料表裡
            $c_SQL= "INSERT INTO `collect`
            (`member_sid`, `product_sid`, `created_at`) 
            VALUES (?,?,NOW())";

            $c_stmt = $pdo->prepare($c_SQL);
            $c_stmt->execute([
                $user,
                $p_sid,
            ]);

            $output['psid'] = $p_sid;
            $output['action'] = '加入';
        }


        break;

    case 'delete' :

        if( !empty($p_sid)){

            // 寫入collect資料表裡
            $d_SQL= " DELETE FROM `collect` WHERE `member_sid`=? AND `product_sid`=?";

            $d_stmt = $pdo->prepare($d_SQL);
            $d_stmt->execute([
                $user,
                $p_sid,
            ]);

            $output['psid'] = $p_sid;
            $output['action'] = '刪除';
            $output['msg'] = '已從我的收藏清單中刪除';

        }

        break;

};

echo json_encode($output,JSON_UNESCAPED_UNICODE)

?>