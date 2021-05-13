<?php include __DIR__ . '../../php/common/config.php';

unset($_SESSION['cart']['fund']);
$_SESSION['type'] = 'beer';
if( ! isset($_SESSION['cart'])){
    $_SESSION['cart'] = []; 
    $_SESSION['checkout'] = [];
};


$output = [
    'msg' => ''
];

// 1.列表 2.加入 3.新增 4.刪除
// 1.list 2.add 3.update 4.delete

$action = isset($_GET['action']) ? $_GET['action']:'';
$p_sid = isset($_GET['psid']) ? intval($_GET['psid']):0;
$p_qty = isset($_GET['qty']) ? intval($_GET['qty']):0;
$c_sid = isset($_GET['cSid']) ? intval($_GET['cSid']):NULL;
$c_dla = isset($_GET['cdollar']) ? intval($_GET['cdollar']):NULL;


if(!empty($c_sid)) {
    $_SESSION['checkout']['coupon-sid'] = $c_sid;
    $output['msg'] = '有使用折價券';
}else{
    unset($_SESSION['checkout']['coupon-sid']);
    $output['msg'] = '沒有使用折價券';
}
if(!empty($c_dla)){
    $_SESSION['checkout']['discount'] = $c_dla;
}else{
    unset($_SESSION['checkout']['discount']);
}



switch( $action ){
    case 'update' :
    case 'add' :

        // 先判斷有沒有商品sid
        if(! empty($p_sid)){

            // 判斷購物車內有沒有此項商品
            if( ! empty($_SESSION['cart'][$p_sid])){
                
                //代表購物車內有此商品只需要改數量
                // 判斷有沒有數量
                if( ! empty($p_qty)){
                    $_SESSION['cart'][$p_sid]['quantity'] = $p_qty; 
                    $output['msg'] = '已將購物車內商品更新數量';
                }
                
            }
            // 代表是新加入的商品
            else{

                // 判斷有沒有數量
                if( ! empty($p_qty)){

                    $F_SQL = "SELECT * FROM `products` WHERE `sid` = $p_sid";
                    $row = $pdo -> query($F_SQL) -> fetch();

                // 判斷有沒有從資料庫抓到商品資料
                    if(! empty($row)){
                        $_SESSION['cart'][$p_sid] = $row;
                        $_SESSION['cart'][$p_sid]['quantity'] = $p_qty;
                        $output['msg'] = '已將商品加入購物車清單';
                    }

                }else {
                    unset( $_SESSION['cart'][$p_sid]);
                };
                
            }
            

        };


        break;

    case 'delete' :
        if(! empty($p_sid)) {
            unset($_SESSION['cart'][$p_sid]);
            $output['msg'] = '已刪除此項商品';
        }

        break;

    case 'deleteall':
        $_SESSION['cart'] = [];
        $output['msg'] = '已清空購物車內所有商品';
        break;

    default:
    case 'list' :
};

$output['cart'] = $_SESSION['cart'];

if(isset($_SESSION['checkout']['coupon-sid'])){
    $output['checkout']['coupon-sid'] = $_SESSION['checkout']['coupon-sid'];
}
if(isset($_SESSION['checkout']['discount'])){
    $output['checkout']['discount'] = $_SESSION['checkout']['discount'];
}

echo json_encode($output,JSON_UNESCAPED_UNICODE)

?>


















