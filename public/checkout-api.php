<?php include __DIR__ . '../../php/common/config.php';


$output = [
    'msg' => '已完成訂購'
];

$ship = isset($_POST['ship']) ? $_POST['ship'] : NULL;
$re_name = isset($_POST['re_name']) ? $_POST['re_name'] : NULL;
$re_mobile = isset($_POST['re_mobile']) ? $_POST['re_mobile'] : NULL;
$shipping = isset($_POST['shipping']) ? $_POST['shipping'] : NULL;
$re_city = isset($_POST['re_city']) ? $_POST['re_city'] : NULL;
$re_dist = isset($_POST['re_dist']) ? $_POST['re_dist'] : NULL;
$re_address = isset($_POST['re_address']) ? $_POST['re_address'] : NULL;
$re_store = isset($_POST['re_store']) ? $_POST['re_store'] : NULL;
$payment = isset($_POST['payment']) ? $_POST['payment'] : NULL;
$totalPrice = isset($_POST['totalPrice']) ? intval($_POST['totalPrice']) : 0;
$order_num = isset($_POST['order_num']) ? intval($_POST['order_num']) : 0;

// step1
if (!empty($ship) and !empty($re_name) and !empty($re_mobile) and !empty($shipping)) {
    $_SESSION['checkout']['ship'] = $ship;
    $_SESSION['checkout']['re_name'] = $re_name;
    $_SESSION['checkout']['re_mobile'] = $re_mobile;
    $_SESSION['checkout']['shipping'] = $shipping;

    if (!empty($re_city) and !empty($re_dist) and !empty($re_address)) {
        $_SESSION['checkout']['re_city'] = $re_city;
        $_SESSION['checkout']['re_dist'] = $re_dist;
        $_SESSION['checkout']['re_address'] = $re_address;
        $_SESSION['checkout']['re_add'] = $re_city . $re_dist . $re_address;
    }

    if (empty($re_city) and empty($re_dist) and empty($re_address) and !empty($re_store)) {
        $_SESSION['checkout']['re_add'] = $re_store;
        unset($_SESSION['checkout']['re_city']);
        unset($_SESSION['checkout']['re_dist']);
        unset($_SESSION['checkout']['re_address']);
    }

    $output['cart'] = $_SESSION['cart'];
    $output['checkout'] = $_SESSION['checkout'];
}

// step2
if (!empty($payment) and !empty($totalPrice) and !empty($order_num)) {
    $_SESSION['checkout']['payment'] = $payment;
    $_SESSION['checkout']['total-price'] = $totalPrice;
    $_SESSION['checkout']['order_num'] = $order_num;

    if ($_SESSION['type'] == 'beer') {

        // 寫進order資料庫
        $o_SQL = "INSERT INTO `orders`
                (`member_sid`, `order_num`, `total_price`, `discount`, `shipping`, `re_name`, `re_mobile`, `re_add`, `ship`, `payment`, `date` ,`status`) 
                VALUES 
                (?,?,?,?,?,?,?,?,?,?,NOW(),'處理中')";

        $o_stmt = $pdo->prepare($o_SQL);
        $o_stmt->execute([
            $_SESSION['user']['sid'],
            $order_num,
            $totalPrice,
            isset($_SESSION['checkout']['discount']) ? $_SESSION['checkout']['discount'] : 0,
            $_SESSION['checkout']['shipping'],
            $_SESSION['checkout']['re_name'],
            $_SESSION['checkout']['re_mobile'],
            $_SESSION['checkout']['re_add'],
            $_SESSION['checkout']['ship'],
            $payment,
        ]);


        // 寫進order_detail資料庫
        $order_sid =  $pdo->lastInsertId();

        $d_SQL = "INSERT INTO `order_detail`
                (`order_sid`, `member_sid`, `product_sid`, `quantity`, `price`) 
                VALUES 
                (?,?,?,?,?)";

        $d_stmt = $pdo->prepare($d_SQL);

        foreach ($_SESSION['cart'] as $c) {
            $d_stmt->execute([
                $order_sid,
                $_SESSION['user']['sid'],
                $c['sid'],
                $c['quantity'],
                $c['price'] * $c['quantity'],
            ]);
        };


        // 改總金額累積
        $user = $_SESSION['user']['sid'];
        $aget_SQL = "SELECT `accum_spend` FROM `member` WHERE `sid` = $user";
        $new_spend = $pdo->query($aget_SQL)->fetch(PDO::FETCH_NUM)[0] + $totalPrice;
        $ain_SQL = "UPDATE `member` SET `accum_spend`= ? WHERE `sid` = $user";
        $ain_stmt = $pdo->prepare($ain_SQL);
        $ain_stmt->execute([
            $new_spend,
        ]);


        // 刪除折價券
        if (isset($_SESSION['checkout']['coupon-sid'])) {
            $coupon_sid = $_SESSION['checkout']['coupon-sid'];
            $delcou_SQL = "DELETE FROM `achievement` WHERE `sid` = $coupon_sid";
            $pdo->query($delcou_SQL);
        }
    };


    if ($_SESSION['type'] == 'fund') {

        // 寫進order資料庫
        $o_SQL = "INSERT INTO `orders`
                (`member_sid`, `order_num`, `total_price`, `shipping`, `re_name`, `re_mobile`, `re_add`, `ship`, `payment`, `date` ,`status`,`reward`) 
                VALUES 
                (?,?,?,?,?,?,?,?,?,NOW(),'感謝您的贊助！',? )";

        $o_stmt = $pdo->prepare($o_SQL);
        $o_stmt->execute([
            $_SESSION['user']['sid'],
            $order_num,
            $totalPrice,
            $_SESSION['checkout']['shipping'],
            $_SESSION['checkout']['re_name'],
            $_SESSION['checkout']['re_mobile'],
            $_SESSION['checkout']['re_add'],
            $_SESSION['checkout']['ship'],
            $payment,
            'noneed',
        ]);

        // 改贊助總數
        $user = $_SESSION['user']['sid'];
        $aget_SQL = "SELECT `accum_fund` FROM `member` WHERE `sid` = $user";
        $new_num = $pdo->query($aget_SQL)->fetch(PDO::FETCH_NUM)[0] + 1;
        $ain_SQL = "UPDATE `member` SET `accum_fund`= ? WHERE `sid` = $user";
        $ain_stmt = $pdo->prepare($ain_SQL);
        $ain_stmt->execute([
            $new_num,
        ]);


        // 寫進order_detail資料庫
        $order_sid =  $pdo->lastInsertId();

        $d_SQL = "INSERT INTO `order_detail`
                (`order_sid`, `member_sid`, `fund_sid`, `quantity`, `price`) 
                VALUES 
                (?,?,?,?,?)";

        $d_stmt = $pdo->prepare($d_SQL);

        foreach ($_SESSION['cart'] as $c) {
            $d_stmt->execute([
                $order_sid,
                $_SESSION['user']['sid'],
                $c['sid'],
                $c['quantity'],
                $c['price'],
            ]);
        };
    }



    // 給前端資料
    $output['cart'] = $_SESSION['cart'];
    $output['checkout'] = $_SESSION['checkout'];
    $output['type'] = $_SESSION['type'];

    // 刪除SESSION
    unset($_SESSION['cart']);
    $_SESSION['cart'] = [];
    unset($_SESSION['checkout']);
    unset($_SESSION['type']);
}




echo json_encode($output, JSON_UNESCAPED_UNICODE);
