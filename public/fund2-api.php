<?php include __DIR__ . '../../php/common/config.php';

if( ! isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
    $_SESSION['checkout'] = [];
};


$output = [
    'msg' => '方案選擇'
];

$f_sid = isset($_GET['fsid']) ? intval($_GET['fsid']) : 0;
$totalPrice = isset($_GET['totalPrice']) ? intval($_GET['totalPrice']) :0;


if (!empty($f_sid)) {

    $F_SQL = "SELECT `sid`,`c_name`,`plan_price`,`e_name`,`pic`,`quantity` FROM `fund` WHERE  `sid` = $f_sid";
    $row = $pdo->query($F_SQL)->fetch();

    // 判斷有沒有從資料庫抓到商品資料
    if (!empty($row)) {
        unset($_SESSION['cart']);
        $_SESSION['cart']['fund'] = $row;
        $_SESSION['cart']['fund']['price'] = $totalPrice;
        $output['msg'] = '已將募資加入清單';
    }
} else {
    // unset($_SESSION['cart']['fund']);
};

$output['cart'] = $_SESSION['cart'];



echo json_encode($output,JSON_UNESCAPED_UNICODE)

?>