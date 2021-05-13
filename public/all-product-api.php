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
$order = isset($_GET['order']) ? intval($_GET['order']) : 1;
$filterPrice = isset($_GET['filterPrice']) ? intval($_GET['filterPrice']) : 0;
$filterABV = isset($_GET['filterABV']) ? intval($_GET['filterABV']) : 0;
$userSearch = isset($_GET['userSearch']) ? urldecode($_GET['userSearch']) : '';


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

// 篩選-價格
if(!empty($filterPrice) and $filterPrice == 1) {
    $where .= " AND `price` < 100 ";
}
if(!empty($filterPrice) and $filterPrice == 2) {
    $where .= " AND `price` BETWEEN 100 AND 150 ";
}
if(!empty($filterPrice) and $filterPrice == 3) {
    $where .= " AND `price` BETWEEN 150 AND 200 ";
}
if(!empty($filterPrice) and $filterPrice == 4) {
    $where .= " AND `price` BETWEEN 200 AND 300 ";
}
if(!empty($filterPrice) and $filterPrice == 5) {
    $where .= " AND `price` BETWEEN 300 AND 500 ";
}
if(!empty($filterPrice) and $filterPrice == 6) {
    $where .= " AND `price` >= 500 ";
}
// 篩選-酒精濃度
if(!empty($filterABV) and $filterABV == 1) {
    $where .= " AND `abv` <= 4 ";
}
if(!empty($filterABV) and $filterABV == 2) {
    $where .= " AND `abv` BETWEEN 4 AND 6 ";
}
if(!empty($filterABV) and $filterABV == 3) {
    $where .= " AND `abv` BETWEEN 6 AND 8 ";
}
if(!empty($filterABV) and $filterABV == 4) {
    $where .= " AND `abv` BETWEEN 8 AND 10 ";
}
if(!empty($filterABV) and $filterABV == 5) {
    $where .= " AND `abv` >=10 ";
}

// 查詢
$serach =  '%%'.$userSearch.'%%';


if( !empty($userSearch) and $userSearch !=''){
    $where .= " AND (`c_name` LIKE '$serach' OR `e_name` LIKE '$serach' OR `type_name` LIKE '$serach') ";
}

// echo $where;
// exit;


// 排序
$sort =  '`created_at` DESC';
if(empty($order) == false and $order == 1 ){
    $sort =  '`created_at` DESC';
}
if(empty($order) == false and $order == 2 ){
    $sort =  '`price` ASC';
}
if(empty($order) == false and $order == 3 ){
    $sort =  '`price` DESC';
}
if(empty($order) == false and $order == 4 ){
    $sort =  '`abv` ASC';
}
if(empty($order) == false and $order == 5 ){
    $sort =  '`abv` DESC';
}




// 抓資料庫的產品資料
// 設定每頁幾筆資料, 取得總頁數, 取得現在頁數, 放入資料

$page_p = 12; //每頁放9筆
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


$s_SQL = sprintf("SELECT * FROM `products` $where ORDER BY $sort LIMIT %s,%s", ($page - 1) * $page_p, $page_p);

$rows = $pdo->query($s_SQL)->fetchAll();


// 登入會員的狀態，抓收藏商品
$c_arr = [];
if( isset($_SESSION['user'])){

    $m_sid = $_SESSION['user']['sid'] ; 
    $c_SQL = "SELECT `product_sid` FROM `collect` WHERE `member_sid` = $m_sid";
    $c_row = $pdo -> query($c_SQL) -> fetchAll();
    if( !empty($c_row)){
        foreach( $c_row as $c){
            array_push($c_arr, $c['product_sid']);
        }
    }
}


// 抓資料庫裡的關注清單
$a_arr = [];
$attention = false;
if (isset($_SESSION['user'])) {

    $m_sid = $_SESSION['user']['sid'];
    $a_SQL = "SELECT `tag_sid` FROM `attention` WHERE `tag_sid` > 0 AND `member_sid` = $m_sid";
    $a_row = $pdo->query($a_SQL)->fetchAll();
    if (!empty($a_row)) {
        foreach ($a_row as $a) {
            array_push($a_arr, $a['tag_sid']);
        }
    }

    if( in_array($cate, $a_arr)){
        $attention = true;
    }
}

echo json_encode([
    'page' => $page,
    'page_p' => $page_p,
    'total_rows' => $total_rows,
    'total_pages' => $total_pages,
    'cate' => $cate,
    'cate_name' => $cate_name,
    'rows' => $rows,
    'collect' => $c_arr,
    'attention' => $attention,
], JSON_UNESCAPED_UNICODE);
