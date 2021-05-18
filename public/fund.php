<?php include __DIR__ . '../../php/common/config.php' ?>
<?php include __DIR__ . '../../php/common/__connect_db.php' ?>


<?php
$page_title = '啤女BeerU:募資計畫';

// 現在募資計畫
$f_SQL = "SELECT * FROM `fund`";
$f_rows = $pdo->query($f_SQL)->fetchAll();
$f = $pdo->query($f_SQL)->fetch();
$f_SQL = "SELECT * FROM `fund`";

// 目前募資到的總額
$totalPriceSql = "SELECT SUM(quantity * price) AS `total` FROM `order_detail` WHERE `fund_sid` > 0";
$rowTotalPrice = $pdo->query($totalPriceSql)->fetch();


// 目前募資的進度百分比
// $rowTotalPrice = $pdo->query($totalPriceSql)->fetch();
 $rowNowPercentage = floor(($rowTotalPrice['total'] / 60000)* 100);

// $psid = 5;

// if ($psid != 0) {
//     此頁商品
//     $p_SQL = "SELECT p.* , t1.`name` AS `brand_name`,t2.`name` AS `country_name`,t3.`name` AS `type_name`,t4.`name` AS `merch_name` FROM `products` AS p 
//                 JOIN `tags` AS t1 
//                 ON p.`brand_sid` = t1.`sid`
//                 JOIN `tags` AS t2 
//                 ON p.`country_sid` = t2.`sid`
//                 JOIN `tags` AS t3 
//                 ON p.`type_sid` = t3.`sid`
//                 JOIN `tags` AS t4 
//                 ON p.`merch_sid` = t4.`sid`
//                 WHERE p.`sid` = $psid";
//     $row = $pdo->query($p_SQL)->fetch();

//     $country_sid = $row['country_sid'];
//     $type_sid = $row['type_sid'];
//     $brands_sid = $row['brand_sid'];
//     $merch_sid = $row['merch_sid'];


// 抓資料庫裡的關注清單
// 關注列
$a_arr = [];

// 設定登入會員後
if (isset($_SESSION['user'])) {
    // 設定已登入會員sid
    $m_sid = $_SESSION['user']['sid'];
    // $e_sid = isset($_GET['fund_sid']) ? intval($_GET['fund_sid']) : 0;
    // 選擇attention抓event_sid，綁定有會員sid
    $a_SQL = "SELECT fund_sid FROM attention WHERE member_sid = $m_sid";
    // 抓取建立a_row
    $a_row = $pdo->query($a_SQL)->fetchAll();
    // 如果有關注
    if (!empty($a_row)) {
        foreach ($a_row as $a) {
            // 抓出來
            array_push($a_arr, $a['fund_sid']);
        }
    }
    // 如果不是 會員，也沒有關注
}

    // 推薦商品
    $c_SQL = "SELECT * FROM `products` WHERE `type_sid` = 52 AND `sid` ORDER BY RAND() LIMIT 1";
    $c_row = $pdo->query($c_SQL)->fetch();
    $c_row_sid = $c_row['sid'];


    $t_SQL = "SELECT * FROM `products` WHERE `type_sid` = 50 AND `sid` AND `sid` != $c_row_sid  ORDER BY RAND() LIMIT 1";
    $t_row = $pdo->query($t_SQL)->fetch();
    $t_row_sid = $t_row['sid'];

    $b_SQL = "SELECT * FROM `products` WHERE `type_sid` = 48 AND `sid`  ORDER BY RAND() LIMIT 1";
    
    $b_row = $pdo->query($b_SQL)->fetch();

    // new標籤
    $deadline = strtotime('2021-05-01');

    // 從哪裡來
    $come_from = $_SERVER['HTTP_REFERER'] ?? 'http://localhost/BeerU/public/all-product.php';
    $come_cate = strpos($come_from, 'all-product.php?cate=')  ? explode('=', preg_replace('/[^\d=]/', '', $come_from))[1] : 0;


?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- my-style -->
<link rel="stylesheet" href="../css/fund/fund.css">

<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>
<!-- 會員登入 -->
<?php include __DIR__ . '../../php/common/Login-Sign.php' ?>
<?php include __DIR__ . '../../php/common/pop-up-1.php' ?>
<?php include __DIR__ . '../../php/common/pop-up-2.php' ?>

<section class="mobile-menu">
    <?php include __DIR__ . '../../php/common/category.php' ?>
</section>

<!-- 這裡開始寫html -->
<section class="fund-wrap-1">
    <div class="fund container">
        <div class="row">
            <!-- <h2>募資計畫</h2> -->
            <div class="col-md-6 col-lg-8">
                <div class="product-display container">
                    <div class="row">
                        <div class="col-12">
                            <div class="img-demo">
                                <img class="pics" id="pic1" src="../images/joyce_images/fund-p-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="img-wrap d-flex mt-5">
                                <div class="img-row"><img class="pics" id="pic1" src="../images/joyce_images/fund-p-1.jpg" alt=""></div>
                                <div class="img-row"><img class="pics" id="pic2" src="../images/joyce_images/fund-p-2.jpg" alt=""></div>
                                <div class="img-row"><img class="pics" id="pic3" src="../images/joyce_images/fund-p-3.jpg" alt=""></div>
                                <div class="img-row"><img class="pics" id="pic4" src="../images/joyce_images/fund-p-4.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="demo-carousel" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../images/joyce_images/fund-p-1.jpg" alt="" width="500" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/joyce_images/fund-p-2.jpg" alt="" width="500" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/joyce_images/fund-p-3.jpg" alt="" width="500" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/joyce_images/fund-p-4.jpg" alt="" width="500" height="500">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>

            </div>
            <div class="col-md-6 col-lg-4">
                <div class="fund-title mt-5  mb-5">
                    <h4>募資計畫</h4>
                </div>
                <div class="product-intro">
                    <h3>【CLOUDWATER | 英國知名精釀廠】</h3>
                </div>
                <div class="fund-intro-text">
                    <p>全球第二名 / 英倫第一神廠強勢來台，啤女獨家首發，最強CP值!連續四年(2016-2019)名列在全球最佳酒廠Top 15內，最佳成績為Top2！來自Manchester 的Cloudwater 酒廠，僅僅成立3年已大有名氣，今年更於Ratebeer 最佳酒廠第5名（去年投選）擢升至第2名。
                    </p>
                </div>
                <div class="row d-flex">
                    <div class="col-6 col-md-6 ">
                        <div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span>
                            </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                            <div class="progress-value"><?= $rowNowPercentage ?>%</div>
                          
                        </div>
                    </div>
                    <div class="col-6 col-md-6 ">
                        <div class="goal">
                            <div class="current-value">
                                <h3><?= "NT $" . number_format($rowTotalPrice['total'], 0, ".", ",") ?></h3>
                            </div>
                            <div class="goal-value">
                                <p><span class="goal-title">目標 |</span>
                                    <?= "NT $" . number_format($f['goal_price'], 0, ".", ",") ?></p>
                            </div>
                        </div>
                        <!-- 加入關注按鈕 -->
                        <?php if (!isset($_SESSION['user'])) : ?>

                                <button class="btn_attention btn_attention_nologin" onclick="LogIn_btn()"><i class="fas fa-plus"></i>加入關注</button>
                            <?php else : ?>
                                <!-- ???設定重新載入還是會有的條件，前後頁紀錄關注 -->
                                <?php if (in_array($f['sid'], $a_arr)) : ?>
                                    <!-- 沒有關注的時候顯示 加入關注 -->
                                    <button class="btn_attention btn_attention_be d-none">
                                        <i class="fas fa-plus"></i>加入關注
                                    </button>
                                    <!-- 會員有關注的話 顯示已關注 -->
                                    <button class="btn_attention_active ">
                                        <i class="fas fa-check"></i>已關注
                                    </button>
        
                                <?php else : ?>
                                    <button class="btn_attention btn_attention_be ">
                                        <i class="fas fa-plus"></i>加入關注
                                    </button>
                                    <!-- 一開始顯示加入關注 -->
                                    <button class="btn_attention_active d-none">
                                        <i class="fas fa-check"></i>已關注
                                    </button>
                                <?php endif; ?>
                            <?php endif; ?>
                            <a data-cate= "<?= $f['sid'] ?>"></a>
                    </div>
                    
                </div>
                <div class="sub-intro mt-5">
                    <p>
                        贊助人數 | 6215
                        <br>
                        剩餘時間 | 6小時
                        <br>
                        時程 | 2021/05/01 - 2021/05/30

                    </p>
                </div>
                <a href="#plans">
                    <button class="btn_fundnow"><i class="fas fa-coins"></i>我要贊助</button></a>
            </div>
        </div>

    </div>
</section>
<!-- 專案內容 -->
<section class="fund-wrap-2" id="plans">
    <div class="fund container">
        <div class="row">
            <div class="col-md-6 col-lg-8">
                <!-- 分頁籤 -->
                <div class="tabs">
                    <ul class="tabs-nav">
                        <li><a class="nav-opt" href="#tab-1">專案內容</a></li>
                        <li><a class="nav-opt" href="#tab-2">常見QA</a></li>
                    </ul>
                    <div class="tabs-stage">
                        <div id="tab-1">
                            <!-- 倒數 -->
                            <p id="countdown"></p>

                            <h3>募資計畫倒數計時中</h3>
                            <img src="../images/joyce_images/fund-p-6.jpg" alt="">
                            <h3>全球第二名 / 英倫第一神廠 Cloudwater</h3>
                            <p>Cloudwater 終於要台灣啦～！
                                來自英國曼徹斯特的 Cloudwater 酒廠，名字來自充滿禪意的「雲水」，成立於 2015
                                年，剛成立就奪下年度最佳新進酒廠。從隔年開始，在全球最有公信力的的啤酒評選網站 Raterbeer 上一舉闖入 Top 10 全球最佳酒廠，2017 年更摘下世界
                                No. 2，並至今從未掉出世界前 15 名過。</p>
                            <img src="../images/joyce_images/fund-p-8.jpg" alt="">

                            <h3> 藝術酒標登上泰德美術館</h3>
                            <img id="art" src="../images/joyce_images/fund-p-9.jpg" alt="">
                            <p>除了啤酒質素不容置疑之外，Cloudwater 每季都找來不同的藝術家合作設計酒標，以配合酒款的風格與理念，極具設計感的酒標更曾在英國著名的 Tate
                                當代藝術館舉辦了活動，因此也有人說每次看到 Cloudwater 都像走進了迷你畫廊。</p>
                            <img src="../images/joyce_images/fund-p-10.jpg" alt="">
                            <h3>最令台灣精釀迷興奮的強勢登台!</h3>
                            <p>短短兩年便成為世界第二的 Cloudwater，善於運用酒花的香氣釀出各種不同平衡的酒款。但以激少量、高頻率不斷更新酒款的
                                Cloudwater，每一批次都少得可憐，是極難得的夢幻逸品，在台灣幾乎不可能取得，各位酒友們， 此時不買待何時！</p>
                        </div>
                        <!--常見問題
                         -->
                        <div id="tab-2">
                            <p>常見QA</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <?php foreach ($f_rows as $f) : ?>
                    <ul class="card-list">
                        <?php if (!isset($_SESSION['user'])) : ?>
                            <li class="card" id="card1" onclick="LogIn_btn()">
                                <a class="card-description">
                                    <!-- pic -->
                                    <img class="pic" src="../images/joyce_images/<?= $f['pic'] ?> " alt="">
                                    <!-- plan_price -->
                                    <h2 class=" plan_price">$<?= $f['plan_price'] ?></h2>
                                    <!-- c_name -->
                                    <p class="c_name" style="color: var(--gold);"><?= $f['c_name'] ?></p>
                                    <!-- plan_title在資料庫叫 e-name -->
                                    <div class="e_name mb-3">
                                        <p style="color: var(--gold);"><?= $f['e_name'] ?></p>
                                    </div>
                                    <!-- plan_content -->
                                    <div class="plan_content">
                                        <?= $f['plan_content'] ?>

                                    </div>
                                </a>
                            </li>
                        <?php else : ?>
                            <li class="card" id="card1">
                                <a class="card-description" href="fund-final.php?sid=<?= $f['sid'] ?>">
                                    <!-- pic -->
                                    <img class="pic" src="../images/joyce_images/<?= $f['pic'] ?> " alt="">
                                    <!-- plan_price -->
                                    <h2 class=" plan_price">$<?= $f['plan_price'] ?></h2>
                                    <!-- c_name -->
                                    <p class="c_name" style="color: var(--gold);"><?= $f['c_name'] ?></p>
                                    <!-- plan_title在資料庫叫 e-name -->
                                    <div class="e_name mb-3">
                                        <p style="color: var(--gold);"><?= $f['e_name'] ?></p>
                                    </div>
                                    <!-- plan_content -->
                                    <div class="plan_content">
                                        <?= $f['plan_content'] ?>

                                    </div>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
</section>

<!-- 過去成功計畫 -->
<section class="fund-success">

    <!-- 過去成功計畫title -->
    <div class="container">
        <div class="fund-success-title d-flex justify-content-center">
            <img src="../images/common/line-g.svg" alt="">
            <h2>過去成功計畫</h2>
            <img src="../images/common/line-g.svg" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex related-p">
                <!-- 商品BOX -->
                <div class="col-12 col-lg-6 col-xl-4 f beer-product-wrap">
                    <div class="beer-product" data-sid=<?= $c_row['sid'] ?> data-price=<?= $c_row['price'] ?> data-abv=<?= $c_row['abv'] ?>>
                        <div class="pro-pic">
                            <!-- 商品圖 -->
                            <a href="each-product.php?psid=<?= $c_row['sid'] ?>">
                                <img class="beer-pic" src="../images/products/<?= $c_row['pic'] ?>" alt="">
                            </a>
                            <!-- 標籤 -->
                            <div class="label">
                                <?php if (strtotime($c_row['created_at']) > $deadline) : ?>
                                    <div class="new-label">
                                        <p>NEW</p>
                                    </div>
                                <?php endif; ?>

                                <?php if ($c_row['hot'] == 'true') : ?>
                                    <div class="hot-label">
                                        <p>HOT</p>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- 國家圖片 -->
                            <div class="country"><img src="../images/country/<?= $c_row['country_pic'] ?>" alt=""></div>

                            <!-- 收藏按鈕 -->
                            <div class="collect">
                                <?php if (!isset($_SESSION['user'])) : ?>
                                    <button class="btn_collect_nologin" onclick="LogIn_btn()"><i class="far fa-heart"></i></button>
                                <?php else : ?>
                                    <?php if (in_array($c_row['sid'], $c_arr)) : ?>
                                        <button class="btn_collect_active" onclick="cancelCollectProduct()"><i class="fas fa-heart"></i></button>
                                        <button class="btn_collect d-none" onclick="collectProduct()"><i class="far fa-heart"></i></button>
                                    <?php else : ?>
                                        <button class="btn_collect" onclick="collectProduct()"><i class="far fa-heart"></i></button>
                                        <button class="btn_collect_active d-none" onclick="cancelCollectProduct()"><i class="fas fa-heart"></i></button>
                                    <?php endif; ?>
                                <?php endif; ?>


                            </div>
                        </div>

                        <!-- 商品介紹 -->
                        <div class="pro-intro d-flex flex-column justify-content-between">
                            <!-- 商品名稱 -->
                            <a href="each-product.php?psid=<?= $c_row['sid'] ?>">
                                <div class="p-name">
                                    <p class="p-name-c"><?= $c_row['c_name'] ?></p>
                                    <p class="p-name-e"><?= $c_row['e_name'] ?></p>
                                </div>
                            </a>
                        </div>
                        <!-- 了解更多 -->
                        <a href="">
                            <div class="know-more">了解更多</div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4 beer-product-wrap">
                    <div class="beer-product" data-sid=<?= $t_row['sid'] ?> data-price=<?= $t_row['price'] ?> data-abv=<?= $t_row['abv'] ?>>
                        <div class="pro-pic">
                            <!-- 商品圖 -->
                            <a href="each-product.php?psid=<?= $t_row['sid'] ?>">
                                <img class="beer-pic" src="../images/products/<?= $t_row['pic'] ?>" alt="">
                            </a>
                            <!-- 標籤 -->
                            <div class="label">
                                <?php if (strtotime($t_row['created_at']) > $deadline) : ?>
                                    <div class="new-label">
                                        <p>NEW</p>
                                    </div>
                                <?php endif; ?>

                                <?php if ($t_row['hot'] == 'true') : ?>
                                    <div class="hot-label">
                                        <p>HOT</p>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- 國家圖片 -->
                            <div class="country"><img src="../images/country/<?= $t_row['country_pic'] ?>" alt=""></div>

                            <!-- 收藏按鈕 -->
                            <div class="collect">
                                <?php if (!isset($_SESSION['user'])) : ?>
                                    <button class="btn_collect_nologin" onclick="LogIn_btn()"><i class="far fa-heart"></i></button>
                                <?php else : ?>
                                    <?php if (in_array($t_row['sid'], $c_arr)) : ?>
                                        <button class="btn_collect_active" onclick="cancelCollectProduct()"><i class="fas fa-heart"></i></button>
                                        <button class="btn_collect d-none" onclick="collectProduct()"><i class="far fa-heart"></i></button>
                                    <?php else : ?>
                                        <button class="btn_collect" onclick="collectProduct()"><i class="far fa-heart"></i></button>
                                        <button class="btn_collect_active d-none" onclick="cancelCollectProduct()"><i class="fas fa-heart"></i></button>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- 商品介紹 -->
                        <div class="pro-intro d-flex flex-column justify-content-between">
                            <!-- 商品名稱 -->
                            <a href="each-product.php?psid=<?= $t_row['sid'] ?>">
                                <div class="p-name">
                                    <p class="p-name-c"><?= $t_row['c_name'] ?></p>
                                    <p class="p-name-e"><?= $t_row['e_name'] ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4 beer-product-wrap">
                    <div class="beer-product" data-sid=<?= $b_row['sid'] ?> data-price=<?= $b_row['price'] ?> data-abv=<?= $b_row['abv'] ?>>
                        <div class="pro-pic">
                            <!-- 商品圖 -->
                            <a href="each-product.php?psid=<?= $b_row['sid'] ?>">
                                <img class="beer-pic" src="../images/products/<?= $b_row['pic'] ?>" alt="">
                            </a>
                            <!-- 標籤 -->
                            <div class="label">
                                <?php if (strtotime($b_row['created_at']) > $deadline) : ?>
                                    <div class="new-label">
                                        <p>NEW</p>
                                    </div>
                                <?php endif; ?>

                                <?php if ($b_row['hot'] == 'true') : ?>
                                    <div class="hot-label">
                                        <p>HOT</p>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- 國家圖片 -->
                            <div class="country"><img src="../images/country/<?= $b_row['country_pic'] ?>" alt=""></div>

                            <!-- 收藏按鈕 -->
                            <div class="collect">
                                <?php if (!isset($_SESSION['user'])) : ?>
                                    <button class="btn_collect_nologin" onclick="LogIn_btn()"><i class="far fa-heart"></i></button>
                                <?php else : ?>
                                    <?php if (in_array($b_row['sid'], $c_arr)) : ?>
                                        <button class="btn_collect_active" onclick="cancelCollectProduct()"><i class="fas fa-heart"></i></button>
                                        <button class="btn_collect d-none" onclick="collectProduct()"><i class="far fa-heart"></i></button>
                                    <?php else : ?>
                                        <button class="btn_collect" onclick="collectProduct()"><i class="far fa-heart"></i></button>
                                        <button class="btn_collect_active d-none" onclick="cancelCollectProduct()"><i class="fas fa-heart"></i></button>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- 商品介紹 -->
                        <div class="pro-intro d-flex flex-column justify-content-between">
                            <!-- 商品名稱 -->
                            <a href="each-product.php?psid=<?= $b_row['sid'] ?>">
                                <div class="p-name">
                                    <p class="p-name-c"><?= $b_row['c_name'] ?></p>
                                    <p class="p-name-e"><?= $b_row['e_name'] ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>




    </div>
    </div>

</section>



<?php include __DIR__ . '../../php/common/html-body-footer.php' ?>
<?php include __DIR__ . '../../php/common/script.php' ?>
<!-- 這裡開始寫jQuery或JS -->


<script>

</script>

<!-- my script -->
<script src='../js/fund/fund.js'></script>
<script src='../js/fund/fund_attention.js'></script>

<?php include __DIR__ . '../../php/common/html-end.php' ?>