<?php include __DIR__ . '../../php/common/config.php';

$output = [
    'msg' => '加入關注清單失敗'
];

// 1.列表 2.加入 3.新增 4.刪除
// 1.list 2.add 3.update 4.delete

$action = isset($_GET['action']) ? $_GET['action']:NULL;
$t_sid = isset($_GET['tag_sid']) ? intval($_GET['tag_sid']):NULL;
$user = $_SESSION['user']['sid'];

if(!empty($action) ){
    switch( $action ){
        case 'add' :
            if( !empty($t_sid)){
                // 寫入attention資料表裡
                $a_SQL= "INSERT INTO `attention`
                (`member_sid`, `tag_sid`,`created_at`) 
                VALUES (?,?,NOW())";
    
                $a_stmt = $pdo->prepare($a_SQL);
                $a_stmt->execute([
                    $user,
                    $t_sid,
                ]);
                $output['tag_sid'] = $t_sid;
                $output['action'] = '加入';
                $output['msg'] = '已加入我的關注清單';
            }
            break;

        case 'delete' :
            if( !empty($t_sid)){
                //從attention資料表裡刪資料
                $d_SQL= " DELETE FROM `attention` WHERE `member_sid`=? AND `tag_sid`=?";
                $d_stmt = $pdo->prepare($d_SQL);
                $d_stmt->execute([
                    $user,
                    $t_sid,
                ]);
                $output['tag_sid'] = $t_sid;
                $output['action'] = '刪除';
                $output['msg'] = '已從我的關注清單中刪除';
            }
            break;
    };
}
echo json_encode($output,JSON_UNESCAPED_UNICODE)
?>