<?php include __DIR__ . '../../php/common/config.php';

if( ! isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
};

$output = [
    'msg' => '購物車狀況'
];

$output['cart'] = $_SESSION['cart'];

echo json_encode($output,JSON_UNESCAPED_UNICODE)

?>