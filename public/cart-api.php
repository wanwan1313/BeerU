<?php include __DIR__ . '../../php/common/config.php';

if( ! isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
};


$output = [
    'msg' => '已將商品加入購物車清單'
];

// 1.列表 2.加入 3.新增 4.刪除
// 1.list 2.add 3.update 4.delete

$action = isset($_GET['action']) ? $_GET['action']:'';
$p_sid = isset($_GET['psid']) ? intval($_GET['psid']):0;
$p_qty = isset($_GET['qty']) ? intval($_GET['qty']):0;
$c_sid = isset($_GET['cSid']) ? intval($_GET['cSid']):NULL;
$c_dla = isset($_GET['cdollar']) ? intval($_GET['cdollar']):NULL;
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

if(!empty($totalPrice)){
    $_SESSION['total-price'] = $totalPrice;
}
if(!empty($c_sid)) {
    $_SESSION['coupon-sid'] = $c_sid;
}
if(!empty($c_dla)){
    $_SESSION['coupon-dollar'] = $c_dla;
}
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
// if( empty($re_city) and empty($re_dist) and empty($re_address) and !empty($re_store)){
//     $_SESSION['re_add'] = $re_store;
// }
if(!empty($payment)){
    $_SESSION['payment'] = $payment;
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
if( isset($_SESSION['total-price'])){
    $output['total-price'] = $_SESSION['total-price'];
}
if(isset($_SESSION['coupon-sid'])){
    $output['coupon-sid'] = $_SESSION['coupon-sid'];
}
if(isset($_SESSION['coupon-dollar'])){
    $output['coupon-dollar'] = $_SESSION['coupon-dollar'];
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

echo json_encode($output,JSON_UNESCAPED_UNICODE)

?>


















