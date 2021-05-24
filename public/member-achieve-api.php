<?php include __DIR__ . '../../php/common/config.php';


$output = [
    'msg' => '我的成就狀況'
];


$user = $_SESSION['user']['sid'];

// 從資料庫撈酒仙指數
$percent_SQL = "SELECT `achieve` FROM `achievement` WHERE `achieve` > 0 AND `member_sid` = $user";
$per_row = $pdo->query($percent_SQL)->fetchAll(PDO::FETCH_NUM);
$per_total = 0;
if (!empty($per_row)) {
    foreach ($per_row as $per) {
        $per_total += $per[0];
    }
}
$output['percent'] = $per_total;


// 查詢單筆消費狀況
$com_SQL = "SELECT COUNT(*) FROM `orders` WHERE `member_sid` = $user AND `total_price` > 1000 AND `reward` = 'false' ";
$com = $pdo->query($com_SQL)->fetch(PDO::FETCH_NUM)[0];
$output['consume'] = $com ;

// 查詢總金額狀況
$totalsp_SQL = "SELECT `accum_spend` FROM `member` WHERE `sid` = $user";
$totalsp = $pdo->query($totalsp_SQL)->fetch(PDO::FETCH_NUM)[0];
$output['accum_spend'] = $totalsp;


// 查詢評論狀況
$totalcom_SQL = "SELECT `accum_comment` FROM `member` WHERE `sid` = $user";
$totalcom = $pdo->query($totalcom_SQL)->fetch(PDO::FETCH_NUM)[0];
$output['accum_comment'] = $totalcom;

// 查詢贊助狀況
$totalfund_SQL = "SELECT `accum_fund` FROM `member` WHERE `sid` = $user";
$totalfund = $pdo->query($totalfund_SQL)->fetch(PDO::FETCH_NUM)[0];
$output['accum_fund'] = $totalfund;

// 查詢預約狀況
$totalevent_SQL = "SELECT `accum_event` FROM `member` WHERE `sid` = $user";
$totalevent = $pdo->query($totalevent_SQL)->fetch(PDO::FETCH_NUM)[0];
$output['accum_event'] = $totalevent;

// 查詢國家領獎狀況
$accumcountry_SQL = "SELECT `accum_country` FROM `member` WHERE `sid` = $user";
$accumcountry = $pdo->query($accumcountry_SQL)->fetch(PDO::FETCH_NUM)[0];
$output['accum_country'] = $accumcountry;

// 查詢類型領獎狀況
$accumtype_SQL = "SELECT `accum_type` FROM `member` WHERE `sid` = $user";
$accumtype = $pdo->query($accumtype_SQL)->fetch(PDO::FETCH_NUM)[0];
$output['accum_type'] = $accumtype;

// 查詢酒廠領獎狀況
$accumbrand_SQL = "SELECT `accum_brand` FROM `member` WHERE `sid` = $user";
$accumbrand = $pdo->query($accumbrand_SQL)->fetch(PDO::FETCH_NUM)[0];
$output['accum_brand'] = $accumbrand;


$gather_arr = [];
// 查詢酒廠集章狀況
$brand_SQL = "SELECT p.`brand_sid` FROM `order_detail` o
JOIN `products` p
ON o.`product_sid` = p.`sid`
WHERE o.`member_sid` = $user AND o.`product_sid` > 0 AND o.`product_sid` <= 224
GROUP BY p.`brand_sid`";
$brand_row = $pdo->query($brand_SQL)->fetchAll();
if (!empty($brand_row)) {
    foreach ($brand_row as $b) {
        array_push($gather_arr, $b['brand_sid']);
    }
}
// 查詢國家集章狀況
$country_SQL = "SELECT p.`country_sid` FROM `order_detail` o
JOIN `products` p
ON o.`product_sid` = p.`sid`
WHERE o.`member_sid` = $user AND o.`product_sid` > 0 AND o.`product_sid` <= 224
GROUP BY p.`country_sid`";
$country_row = $pdo->query($country_SQL)->fetchAll();
if( !empty($country_row)){
    foreach ($country_row as $c) {
        array_push($gather_arr, $c['country_sid']);
    }
}
// 查詢類型集章狀況
$type_SQL = "SELECT p.`type_sid` FROM `order_detail` o
JOIN `products` p
ON o.`product_sid` = p.`sid`
WHERE o.`member_sid` = $user AND o.`product_sid` > 0 AND o.`product_sid` <= 224 AND p.`type_sid` < 53 
GROUP BY p.`type_sid`";
$type_row = $pdo->query($type_SQL)->fetchAll();
if (!empty($type_row)) {
    foreach ($type_row as $t) {
        array_push($gather_arr, $t['type_sid']);
    }
}

$output['gather'] = $gather_arr;



// 領獎寫入----------------------------------------------------------------------------

$genre = isset($_GET['genre']) ? $_GET['genre'] : NULL;
$discount = isset($_GET['discount']) ? intval($_GET['discount']) : 0;
$percent = isset($_GET['percent']) ? intval($_GET['percent']) : 0;

if (!empty($genre)) {
    
    $achieve1_SQL = "INSERT INTO `achievement`(`member_sid`, `coupon`, `achieve`,`create_at`) 
    VALUES (?,?,?,NOW())";

    $achieve1_stmt = $pdo->prepare($achieve1_SQL);
    $achieve1_stmt->execute([
        $user,
        $discount,
        0,
    ]);

    $achieve2_SQL = "INSERT INTO `achievement`(`member_sid`, `coupon` ,`achieve`, `create_at`) 
    VALUES (?,?,?,NOW())";

    $achieve2_stmt = $pdo->prepare($achieve2_SQL);
    $achieve2_stmt->execute([
        $user,
        0,
        $percent,
    ]);



    
    switch ($genre) {
        case 'consume':

            $consume_SQL = "UPDATE `orders` SET `reward`=? WHERE `member_sid` = $user AND `total_price` > 1000 AND `reward` = 'false' LIMIT 1";
            $consume_stmt = $pdo->prepare($consume_SQL);
            $consume_stmt->execute([
                'true',
            ]);
            $output['consume'] = $com - 1;

            break;

        case 'accumspend':

            $new_spend = $totalsp - 6000;
            $asin_SQL = "UPDATE `member` SET `accum_spend`= ? WHERE `sid` = $user";
            $asin_stmt = $pdo->prepare($asin_SQL);
            $asin_stmt->execute([
                $new_spend,
            ]);

            $output['accum_spend'] = $new_spend;

            break;

        case 'country':

            $new_country = $accumcountry + 1 ;
            $acoin_SQL = "UPDATE `member` SET `accum_country`= ? WHERE `sid` = $user";
            $acoin_stmt = $pdo->prepare($acoin_SQL);
            $acoin_stmt->execute([
                $new_country,
            ]);

            $output['accum_country'] = $new_country;


            break;

        case 'type':

            $new_type = $accumtype + 1;
            $atin_SQL = "UPDATE `member` SET `accum_type`= ? WHERE `sid` = $user";
            $atin_stmt = $pdo->prepare($atin_SQL);
            $atin_stmt->execute([
                $new_type,
            ]);

            $output['accum_type'] = $new_type;

            break;

        case 'brand':

            $new_brand = $accumbrand + 1;
            $abin_SQL = "UPDATE `member` SET `accum_brand`= ? WHERE `sid` = $user";
            $abin_stmt = $pdo->prepare($abin_SQL);
            $abin_stmt->execute([
                $new_brand,
            ]);

            $output['accum_brand'] = $new_brand;

            break;

        case 'comment':

            $new_comment = $totalcom - 3;
            $acin_SQL = "UPDATE `member` SET `accum_comment`= ? WHERE `sid` = $user";
            $acin_stmt = $pdo->prepare($acin_SQL);
            $acin_stmt->execute([
                $new_comment,
            ]);
            $output['accum_comment'] = $new_comment;
            

            break;

        case 'event':

            $new_event = $totalevent - 3;
            $aein_SQL = "UPDATE `member` SET `accum_event`= ? WHERE `sid` = $user";
            $aein_stmt = $pdo->prepare($aein_SQL);
            $aein_stmt->execute([
                $new_event,
            ]);
            $output['accum_event'] = $new_event;

            break;

        case 'fund':

            $new_fund = $totalfund - 3;
            $afin_SQL = "UPDATE `member` SET `accum_fund`= ? WHERE `sid` = $user";
            $afin_stmt = $pdo->prepare($afin_SQL);
            $afin_stmt->execute([
                $new_fund,
            ]);
            $output['accum_fund'] = $new_fund;

            break;
    };
}


// 從資料庫抓折價券
$discount_SQL = "SELECT * FROM `achievement` WHERE `coupon` > 0 AND `member_sid` = $user ORDER BY `sid`";
$discount_row = $pdo->query($discount_SQL)->fetchAll();
$output['discount'] = $discount_row;


// 從資料庫撈酒仙指數
$percent_SQL = "SELECT `achieve` FROM `achievement` WHERE `achieve` > 0 AND `member_sid` = $user";
$per_row = $pdo->query($percent_SQL)->fetchAll(PDO::FETCH_NUM);
$per_total = 0;
if (!empty($per_row)) {
    foreach ($per_row as $per) {
        $per_total += $per[0];
    }
}
$output['percent'] = $per_total;



echo json_encode($output,JSON_UNESCAPED_UNICODE);


?>