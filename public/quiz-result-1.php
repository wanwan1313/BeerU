<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女BeerU:心理測驗結果';

$psid = substr($_SERVER['QUERY_STRING'], 5);


// 此頁商品
$p_SQL = "SELECT p.* , t1.`name` AS `brand_name`,t2.`name` AS `country_name`,t3.`name` AS `type_name`,t4.`name` AS `merch_name` FROM `products` AS p 
                JOIN `tags` AS t1 
                ON p.`brand_sid` = t1.`sid`
                JOIN `tags` AS t2 
                ON p.`country_sid` = t2.`sid`
                JOIN `tags` AS t3 
                ON p.`type_sid` = t3.`sid`
                JOIN `tags` AS t4 
                ON p.`merch_sid` = t4.`sid`
                WHERE p.`sid` = $psid";
$row = $pdo->query($p_SQL)->fetch();

$country_sid = $row['country_sid'];
$type_sid = $row['type_sid'];
$brands_sid = $row['brand_sid'];
$merch_sid = $row['merch_sid'];


// 推薦商品
$c_SQL = "SELECT * FROM `products` WHERE `type_sid` = $type_sid AND `sid` !=  $psid ORDER BY RAND() LIMIT 1";
$c_row = $pdo->query($c_SQL)->fetch();
$c_row_sid = $c_row['sid'];
$t_SQL = "SELECT * FROM `products` WHERE `type_sid` = $type_sid AND `sid` !=  $psid AND `sid` != $c_row_sid  ORDER BY RAND() LIMIT 1";
$t_row = $pdo->query($t_SQL)->fetch();
$b_SQL = "SELECT * FROM `products` WHERE `brand_sid` = $brands_sid AND `sid` !=  $psid ORDER BY RAND() LIMIT 1";
$b_row = $pdo->query($b_SQL)->fetch();

// new標籤
$deadline = strtotime('2021-05-01');

// 從哪裡來
$come_from = $_SERVER['HTTP_REFERER'] ?? 'http://localhost/BeerU/public/all-product.php';
$come_cate = strpos($come_from, 'all-product.php?cate=')  ? explode('=', preg_replace('/[^\d=]/', '', $come_from))[1] : 0;


?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- my-style -->
<link rel="stylesheet" href="../css/newbie/quiz-result-style.css">

<?php include __DIR__ . '../../public/facebook.php' ?>
<?php include __DIR__ . '../../public/line.php' ?>


<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>


<section class="quiz-result-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12 result-info-wrap mt-5">
                <p class="result-title">適合你的精釀啤酒類型：<span>皮爾森啤酒</span></p>
                <p class="result-info">
                    有些人平常個性內向，很少表達自己真正的想法與見解，只有在特定時間與特定人面前才會展現能力。但在酒後他們卻判若兩人，變得善於社交，侃侃而談，思維敏捷反應快速。如果是工作酒局，那則能在使命必達的同時，也能體恤下屬。這樣的人其實有強烈的進取心，與遠大的抱負。
                    平常安靜，酒後健談，對你們來說，酒精是釋放壓力的一種方式。</p>
            </div>
        </div>
    </div>

    <!-- 相關商品&商品評價-->
    <div class="quiz-result-wrap">
        <div class="container">

            <!-- 相關商品 -->
            <div class="row related flex-wrap">
                <div class="col-12 rpco-title">
                    <p>相關商品</p>
                </div>
                <div class="col-12 d-flex related-p">
                    <!-- 商品BOX -->
                    <div class="col-12 col-lg-6 col-xl-4 beer-product-wrap">
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
                                    <button class="btn_collect"><i class="far fa-heart"></i></button>
                                    <!-- <button class="btn_collect_active"><i class="fas fa-heart"></i></button> -->
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
                                <!-- 購買 -->
                                <div class="p-buy d-flex flex-wrap">
                                    <!-- 選擇數量 -->
                                    <div class="col-12 quantity d-flex justify-content-between">
                                        <div class="minus"><i class="fas fa-minus"></i></div>
                                        <input type="text" class="buy-number" value="1">
                                        <div class="plus"><i class="fas fa-plus"></i></div>
                                    </div>
                                    <!-- 價格 -->
                                    <div class="col-5 p-price">
                                        <p class="price">$<?= $c_row['price'] ?></p>
                                    </div>
                                    <!-- 加入購物車按鈕 -->
                                    <button class="col-7 add-cart"><i class="fas fa-shopping-bag"></i>加入購物車</button>
                                </div>
                            </div>
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
                                    <button class="btn_collect"><i class="far fa-heart"></i></button>
                                    <!-- <button class="btn_collect_active"><i class="fas fa-heart"></i></button> -->
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
                                <!-- 購買 -->
                                <div class="p-buy d-flex flex-wrap">
                                    <!-- 選擇數量 -->
                                    <div class="col-12 quantity d-flex justify-content-between">
                                        <div class="minus"><i class="fas fa-minus"></i></div>
                                        <input type="text" class="buy-number" value="1">
                                        <div class="plus"><i class="fas fa-plus"></i></div>
                                    </div>
                                    <!-- 價格 -->
                                    <div class="col-5 p-price">
                                        <p class="price">$<?= $t_row['price'] ?></p>
                                    </div>
                                    <!-- 加入購物車按鈕 -->
                                    <button class="col-7 add-cart"><i class="fas fa-shopping-bag"></i>加入購物車</button>
                                </div>
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
                                    <button class="btn_collect"><i class="far fa-heart"></i></button>
                                    <!-- <button class="btn_collect_active"><i class="fas fa-heart"></i></button> -->
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
                                <!-- 購買 -->
                                <div class="p-buy d-flex flex-wrap">
                                    <!-- 選擇數量 -->
                                    <div class="col-12 quantity d-flex justify-content-between">
                                        <div class="minus"><i class="fas fa-minus"></i></div>
                                        <input type="text" class="buy-number" value="1">
                                        <div class="plus"><i class="fas fa-plus"></i></div>
                                    </div>
                                    <!-- 價格 -->
                                    <div class="col-5 p-price">
                                        <p class="price">$<?= $b_row['price'] ?></p>
                                    </div>
                                    <!-- 加入購物車按鈕 -->
                                    <button class="col-7 add-cart"><i class="fas fa-shopping-bag"></i>加入購物車</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>



            <div class="share-wrap">
                <p class="share-title mt-5">分享測驗結果</p>
                <!-- 分享按鈕們 -->
                <div class="share-icons d-flex align-items-center">

                    <div class="fb-share-button" data-href="quiz-result-1.php" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">分享</a></div>


                    <div class="line-it-button" data-lang="zh_Hant" data-type="share-a" data-ver="3" data-url="https://org-media.line.me/zh_TW/how_to_install#lineitbutton" data-color="default" data-size="large" data-count="false" style="display: none;"></div>
                    <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>

                </div>
            </div>
            <div class="back-btn-wrap mt-5">
                <a href="newbie.php">
                    <div class="back-btn">返回新手入門</div>
                </a>
            </div>
        </div>
    </div>
</section>









<?php include __DIR__ . '../../php/common/html-body-footer.php' ?>
<?php include __DIR__ . '../../php/common/script.php' ?>

<!-- my script -->

<script src='../js/newbie/quiz.js'></script>
<script src='../js/newbie/quiz-result.js'></script>


<?php include __DIR__ . '../../php/common/html-end.php' ?>