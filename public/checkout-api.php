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


if(!empty($ship)){
    $_SESSION['ship'] = $ship;
}
if(!empty($re_name)){
    $_SESSION['re_name'] = $re_name;
}
if(!empty($re_mobile)){
    $_SESSION['re_mobile'] = $re_mobile;
}
if(!empty($shipping)){
    $_SESSION['shipping'] = $shipping;
}


if(!empty($re_city) and !empty($re_dist) and !empty($re_address)){
    $_SESSION['re_add'] = $re_city.$re_dist.$re_address;
}
if( empty($re_city) and empty($re_dist) and empty($re_address) and !empty($re_store)){
    $_SESSION['re_add'] = $re_store;
}
if(!empty($payment)){
    $_SESSION['payment'] = $payment;
}
if (!empty($totalPrice)) {
    $_SESSION['total-price'] = $totalPrice;
}
if (!empty($order_num)) {
    $_SESSION['order_num'] = $order_num;
}




$output['cart'] = $_SESSION['cart'];
if (isset($_SESSION['coupon-sid'])) {
    $output['coupon-sid'] = $_SESSION['coupon-sid'];
}
if (isset($_SESSION['discount'])) {
    $output['discount'] = $_SESSION['discount'];
}
if(isset($_SESSION['ship'])){
    $output['ship'] = $_SESSION['ship'];
}
if(isset($_SESSION['re_name'])){
    $output['re_name'] = $_SESSION['re_name'];
}
if(isset($_SESSION['re_mobile'])){
    $output['re_mobile'] = $_SESSION['re_mobile'];
}
if(isset($_SESSION['shipping'])){
    $output['shipping'] = $_SESSION['shipping'];
}
if(isset($_SESSION['re_add'])){
    $output['re_add'] = $_SESSION['re_add'];
}
if(isset($_SESSION['payment'])){
    $output['payment'] = $_SESSION['payment'];
}
if (isset($_SESSION['total-price'])) {
    $output['total-price'] = $_SESSION['total-price'];
}
if (isset($_SESSION['order_num'])) {
    $output['order_num'] = $_SESSION['order_num'];
}


echo json_encode($output,JSON_UNESCAPED_UNICODE);

?>