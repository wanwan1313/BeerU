
<?php include __DIR__ . '../../php/common/config.php';

if (!isset($_SESSION['fund'])) {
    $_SESSION['fund'] = [];
    $_SESSION['cart'] = [];
};


$output = [
    'msg' => ''
];

// 1.列表 2.加入 3.新增 4.刪除
// 1.list 2.add 3.update 4.delete

// 抓取個方案資料
$plan1_SQL = "SELECT * FROM `fund` WHERE`sid` = 1";
$plan1_row = $pdo->query($c_SQL)->fetch();
$plan2_SQL = "SELECT * FROM `fund` WHERE `sid`= 2";
$plan2_row = $pdo->query($t_SQL)->fetch();
$plan3_SQL = "SELECT * FROM `fund` WHERE `sid`= 3";
$plan3_row = $pdo->query($b_SQL)->fetch();

$p_sid = isset($_GET['psid']) ? intval($_GET['psid']) : 0;
$action = isset($_GET['action']) ? $_GET['action'] : '';
$c_name = isset($_GET['c_name']) ? intval($_GET['[c_name']) : 0;
$plan = isset($_GET['plan']) ? intval($_GET['[plan']) : "";
$plan_title = isset($_GET['plan_title']) ? intval($_GET['[plan_title']) : 0;
$p_qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0; //?




// $c_sid = isset($_GET['cSid']) ? intval($_GET['cSid']):NULL;
// $c_dla = isset($_GET['cdollar']) ? intval($_GET['cdollar'])



switch ($action) {
    case 'update':
    case 'add':

        // 先判斷有沒有商品sid
        if (!empty($p_sid)) {

            // 判斷購物車內有沒有此項商品
            if (!empty($_SESSION['cart'][$p_sid])) {

                //代表購物車內有此商品只需要改數量
                // 判斷有沒有數量
                if (!empty($p_qty)) {
                    $_SESSION['cart'][$p_sid]['quantity'] = $p_qty;
                    $output['msg'] = '已將購物車內商品更新數量';
                }
            }
            // 代表是新加入的商品
            else {

                // 判斷有沒有數量
                if (!empty($p_qty)) {

                    $F_SQL = "SELECT * FROM `products` WHERE `sid` = $p_sid";
                    $row = $pdo->query($F_SQL)->fetch();

                    // 判斷有沒有從資料庫抓到商品資料
                    if (!empty($row)) {
                        $_SESSION['cart'][$p_sid] = $row;
                        $_SESSION['cart'][$p_sid]['total'] = $p_tlp;
                        $output['msg'] = '已將商品加入購物車清單';
                    }
                } else {
                    unset($_SESSION['cart'][$p_sid]);
                };
            }
        };


        break;

    default:
    case 'list':
};

$output['cart'] = $_SESSION['cart'];


echo json_encode($output, JSON_UNESCAPED_UNICODE)

?>







