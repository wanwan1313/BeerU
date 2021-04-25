<?php include __DIR__ . '../../php/common/config.php';


// 分類

// 酒廠
$brands_SQL = "SELECT * FROM `tags` WHERE `pre_sid` = 1";
$total_brands = $pdo->query($brands_SQL)->fetchAll();

// 國家
$countries_SQL = "SELECT * FROM `tags` WHERE `pre_sid` = 2";
$total_countries =  $pdo->query($countries_SQL)->fetchAll();

// 類型
$type_SQL = "SELECT * FROM `tags` WHERE `pre_sid` = 3";
$total_type =  $pdo->query($type_SQL)->fetchAll();

// 周邊
$merch_SQL = "SELECT * FROM `tags` WHERE `pre_sid` = 4";
$total_merch =  $pdo->query($merch_SQL)->fetchAll();

$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
$hot = isset($_GET['hot']) ? intval($_GET['hot']) : 0;
$order = isset($_GET['order']) ? $_GET['order'] : '`created_at` DESC';


$where = ' WHERE 1 ';
$cate_name = '';
if (empty($cate) == false and $cate <= $total_brands[count($total_brands) - 1]['sid']) {
    $where .= " AND `brand_sid` = $cate ";
    $cate_name = $total_brands[$cate-($total_brands[0]['sid'])]['name'];
}
if (empty($cate) == false and $cate >= $total_countries[0]['sid'] and $cate <= $total_countries[count($total_countries) - 1]['sid']) {
    $where .= " AND `country_sid` = $cate ";
    $cate_name = $total_countries[$cate-($total_countries[0]['sid'])]['name'];
}
if (empty($cate) == false and $cate >=  $total_type[0]['sid'] and $cate <= $total_type[count($total_type) - 1]['sid']) {
    $where .= " AND `type_sid` = $cate ";
    $cate_name = $total_type[$cate-($total_type[0]['sid'])]['name'];
}
if (empty($cate) == false and $cate == $total_merch[0]['sid']) {
    $where .= " AND `merch_sid` = $cate ";
    $cate_name = $total_merch[0]['name'];
}
if (empty($hot) == false and $hot == 1) {
    $where .= " AND `hot` = 'true' ";
    $cate_name = '熱門商品';
}



// 抓資料庫的產品資料
// 設定每頁幾筆資料, 取得總頁數, 取得現在頁數, 放入資料

$page_p = 9; //每頁放9筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$t_SQL = "SELECT COUNT(1) FROM `products` $where ";
$total_rows = $pdo->query($t_SQL)->fetch(PDO::FETCH_NUM)[0];
$total_pages = ceil($total_rows / $page_p);

// 防呆
if( $total_pages ==0 ){
    $total_pages = 1;
};
if ($page < 1) {
    $page = 1;
} elseif ($page > $total_pages) {
    $page = $total_pages;
};

$s_SQL = sprintf("SELECT * FROM `products` $where ORDER BY $order LIMIT %s,%s", ($page - 1) * $page_p, $page_p);

$rows = $pdo->query($s_SQL)->fetchAll();

echo json_encode([
    'page' => $page,
    'page_p' => $page_p,
    'total_rows' => $total_rows,
    'total_pages' => $total_pages,
    'cate' => $cate,
    'cate_name' => $cate_name,
    'rows' => $rows,
], JSON_UNESCAPED_UNICODE);
