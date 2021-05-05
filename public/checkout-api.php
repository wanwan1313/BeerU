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

    $output['cart'] = $_SESSION['cart'];
    $output['checkout'] = $_SESSION['checkout'];


    unset($_SESSION['cart']);
    unset($_SESSION['checkout']);
}




echo json_encode($output, JSON_UNESCAPED_UNICODE);
