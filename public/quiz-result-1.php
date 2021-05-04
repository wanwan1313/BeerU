<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女BeerU:心理測驗結果';

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
    <div class="container">
        <!-- 推薦商品 -->
        <div class="row related flex-wrap">
            <div class="col-12 rpco-title">
                <p>推薦商品</p>
            </div>
            <div class="col-12 d-flex related-p">
                <!-- 商品BOX -->
                <div class="col-12 col-lg-6 col-xl-4 beer-product-wrap">
                    <div class="beer-product">
                        <div class="pro-pic">
                            <!-- 商品圖 -->
                            <img src="../images/products/Heart of Darkness-01.png" alt="">
                            <!-- 標籤 -->
                            <div class="new-label">
                                <p>NEW</p>
                            </div>
                            <!-- <div class="hot-label"><p>HOT</p></div> -->

                            <!-- 國家圖片 -->
                            <div class="country"><img src="../images/country/flag_denmark_circle.svg" alt=""></div>

                            <!-- 收藏按鈕 -->
                            <div class="collect">
                                <button class="btn_collect"><i class="far fa-heart"></i></button>
                                <!-- <button class="btn_collect_active"><i class="fas fa-heart"></i></button> -->
                            </div>
                        </div>

                        <!-- 商品介紹 -->
                        <div class="pro-intro d-flex flex-column justify-content-between">
                            <!-- 商品名稱 -->
                            <div class="p-name">
                                <p class="p-name-c">奧斯陸．北歐瘋皮爾森</p>
                                <p class="p-name-e">Oslo - Nordic PilsnerOslo</p>
                            </div>
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
                                    <p id="p-price"><span>NT</span>$85</p>
                                </div>
                                <!-- 加入購物車按鈕 -->
                                <button class="col-7 add-cart"><i class="fas fa-shopping-bag"></i>加入購物車</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4 beer-product-wrap">
                    <div class="beer-product">
                        <div class="pro-pic">
                            <!-- 商品圖 -->
                            <img src="../images/products/Heart of Darkness-01.png" alt="">
                            <!-- 標籤 -->
                            <div class="new-label">
                                <p>NEW</p>
                            </div>
                            <!-- <div class="hot-label"><p>HOT</p></div> -->

                            <!-- 國家圖片 -->
                            <div class="country"><img src="../images/country/flag_denmark_circle.svg" alt=""></div>

                            <!-- 收藏按鈕 -->
                            <div class="collect">
                                <button class="btn_collect"><i class="far fa-heart"></i></button>
                                <!-- <button class="btn_collect_active"><i class="fas fa-heart"></i></button> -->
                            </div>
                        </div>

                        <!-- 商品介紹 -->
                        <div class="pro-intro d-flex flex-column justify-content-between">
                            <!-- 商品名稱 -->
                            <div class="p-name">
                                <p class="p-name-c">奧斯陸．北歐瘋皮爾森</p>
                                <p class="p-name-e">Oslo - Nordic PilsnerOslo</p>
                            </div>
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
                                    <p id="p-price"><span>NT</span>$85</p>
                                </div>
                                <!-- 加入購物車按鈕 -->
                                <button class="col-7 add-cart"><i class="fas fa-shopping-bag"></i>加入購物車</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4 beer-product-wrap">
                    <div class="beer-product">
                        <div class="pro-pic">
                            <!-- 商品圖 -->
                            <img src="../images/products/Heart of Darkness-01.png" alt="">
                            <!-- 標籤 -->
                            <div class="new-label">
                                <p>NEW</p>
                            </div>
                            <!-- <div class="hot-label"><p>HOT</p></div> -->

                            <!-- 國家圖片 -->
                            <div class="country"><img src="../images/country/flag_denmark_circle.svg" alt=""></div>

                            <!-- 收藏按鈕 -->
                            <div class="collect">
                                <button class="btn_collect"><i class="far fa-heart"></i></button>
                                <!-- <button class="btn_collect_active"><i class="fas fa-heart"></i></button> -->
                            </div>
                        </div>

                        <!-- 商品介紹 -->
                        <div class="pro-intro d-flex flex-column justify-content-between">
                            <!-- 商品名稱 -->
                            <div class="p-name">
                                <p class="p-name-c">奧斯陸．北歐瘋皮爾森</p>
                                <p class="p-name-e">Oslo - Nordic PilsnerOslo</p>
                            </div>
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
                                    <p id="p-price"><span>NT</span>$85</p>
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