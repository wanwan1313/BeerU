<?php include __DIR__ . '../../php/common/config.php';


$output = [
    'msg' => '我的收藏清單'
];

// 1.列表 2.加入 3.新增 4.刪除
// 1.list 2.add 3.update 4.delete

$action = isset($_GET['action']) ? $_GET['action']:NULL;
$p_sid = isset($_GET['psid']) ? intval($_GET['psid']):NULL;
$order = isset($_GET['order']) ? intval($_GET['order']) : 1;
$userSearch = isset($_GET['userSearch']) ? urldecode($_GET['userSearch']) : '';
$user = $_SESSION['user']['sid'];



if(!empty($action) ){
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
                $output['msg'] = '已加入我的收藏清單';
            }
    
    
            break;
    
        case 'delete' :
    
            if( !empty($p_sid)){
    
                // 從collect資料表裡刪資料
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
}

if( isset($_SESSION['user'])){

    // 排序
    $sort =  'c.`sid` DESC';
    if(empty($order) == false and $order == 1 ){
        $sort =  'c.`sid` DESC';
    }
    if(empty($order) == false and $order == 2 ){
        $sort =  'p.`price` ASC';
    }
    if(empty($order) == false and $order == 3 ){
        $sort =  'p.`price` DESC';
    }
    if(empty($order) == false and $order == 4 ){
        $sort =  'p.`abv` ASC';
    }
    if(empty($order) == false and $order == 5 ){
        $sort =  'p.`abv` DESC';
    }

    // 查詢

    $where = "WHERE c.`member_sid` = $user";
    $serach =  '%%'.$userSearch.'%%';
    if( !empty($userSearch) and $userSearch !=''){
        $where .= " AND (`c_name` LIKE '$serach' OR `e_name` LIKE '$serach' OR `type_name` LIKE '$serach') ";
    }

    

    $m_sid = $_SESSION['user']['sid'] ; 
    $p_SQL = "SELECT c.`sid`,c.`product_sid`, p.c_name, p.e_name, p.`type_name`, p.abv, p.price, p.pic, p.country_pic, p.created_at, p.hot 
                FROM `collect` c
                JOIN `products` p
                ON c.`product_sid` = p.`sid`
                $where
                ORDER BY $sort";
    $p_row = $pdo -> query($p_SQL) -> fetchAll();

    $output['collect'] = $p_row;
}




echo json_encode($output,JSON_UNESCAPED_UNICODE)

?>