<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女BeerU:募資計畫';







?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- my-style -->
<link rel="stylesheet" href="../css/fund/fund.css">

<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>
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
                    <p>
                        新銳神級酒廠Cloudwater 在Raterbeer連續四年(2016-2019)名列在全球最佳酒廠Top 15內，最佳成績為Top
                        2，也是英陸最強IPA代表之一！來自Manchester 的Cloudwater 酒廠，僅僅成立3年已大有名氣，今年更於Ratebeer 最佳酒廠第5名（去年投選）擢升至第2名。
                    </p>
                </div>
                <div class="row d-flex">
                    <div class="col-6 col-md-6 ">
                        <div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span>
                            </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                            <div class="progress-value">90%</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 ">
                        <div class="goal">
                            <div class="current-value">
                                <h3>NT$123,180</h3>
                            </div>
                            <div class="goal-value">
                                <p><span class="goal-title">目標 |</span>
                                    NT$50,180</p>
                            </div>
                            <!-- 加入關注按鈕 -->
                            <button class="btn_attention"><i class="fas fa-plus"></i>加入關注</button>
                            <!-- <button class="btn_attention_active"><i class="fas fa-check"></i>已關注</button> -->
                        </div>
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
                <a href=""><button class="btn_fundnow"><i class="fas fa-coins"></i>我要贊助</button></a>
            </div>
        </div>

    </div>
</section>
<!-- 專案內容 -->
<section class="fund-wrap-2">
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
                <ul class="card-list">
                    <li class="card" id="card1">
                        <a class="card-description" href="../html/fund-step2.html" target="_blank">
                            <!-- pic -->
                            <img class="pic" src="../images/joyce_images/option-1.jpg" alt="" />
                            <!-- option_price -->
                            <h2 class="option_price"><?= $v['option_price'] ?></h2> //$2650
                            <!-- c_name -->
                            <p class="c-name" style="color: var(--gold);">【啤女獨家優惠 | 英國雲水精釀啤酒】</p>
                            <!-- option -->
                            <div class="option">
                                <p><?= $v['option'] ?></p> //4入組｜雲水精釀啤酒(獨享組)
                            </div>
                            <div class="option-content">
                                <p>【口味】</p>
                                <p> ✓ Helles向藝術致敬IPA </p>
                                <p> ✓ Hoppy little lager快腳步愛爾</p>
                                <p> ✓ 加速腳步思陶特 Stout</p>
                                <p> ✓ Light lager不斷進化淡愛爾</p>
                                <hr>
                                <p>注意事項</p>
                                <p>⦿ 此價格已含運費</p>
                                <p>⦿ 訂單若有異動，請至會員中心的訂單留言。</p>
                            </div>
                        </a>
                    </li>

                    <!-- 
                    <div class="c-name">
                                            <a href="http://localhost/BeerU/public/each-product.php?psid=<?= $v['sid'] ?>">
                                                <p><?= $v['c_name'] ?></p>
                                            </a>
                                        </div>
                                        <div class="e-name d-none d-lg-block">
                                            <a href="http://localhost/BeerU/public/each-product.php?psid=<?= $v['sid'] ?>">
                                                <p><?= $v['e_name'] ?></p>
                                            </a>
                                        </div> -->

                    <li class="card" id="card2">
                        <a class="card-description" href="../html/fund-step2.html" target="_blank">
                            <!-- pic -->
                            <img class="pic" src="../images/joyce_images/option-1.jpg" alt="" />
                            <!-- option_price -->
                            <h2 class="option_price"><?= $v['option_price'] ?></h2> //$2650
                            <!-- c_name -->
                            <p class="c-name" style="color: var(--gold);">【啤女獨家優惠 | 英國雲水精釀啤酒】</p>
                            <!-- option -->
                            <div class="option">
                                <p><?= $v['option'] ?></p> //6入分享組｜三種口味各二(330ml)
                            </div>
                            <div class="option-content">
                                <p>【口味】</p>
                                <p> ✓ Helles向藝術致敬IPA </p>
                                <p> ✓ Hoppy little lager快腳步愛爾</p>
                                <p> ✓ Light lager不斷進化淡愛爾</p>
                                <hr>
                                <p>注意事項</p>
                                <p>⦿ 此價格已含運費</p>
                                <p>⦿ 訂單若有異動，請至會員中心的訂單留言。</p>
                            </div>
                        </a>
                    </li>

                    <li class="card" id="card3">
                        <a class="card-description" href="../html/fund-step2.html" target="_blank">
                            <!-- pic -->
                            <img class="pic" src="../images/joyce_images/option-1.jpg" alt="" />
                            <!-- option_price -->
                            <h2 class="option_price"><?= $v['option_price'] ?></h2> //$3050
                            <!-- c_name -->
                            <p class="c-name" style="color: var(--gold);"></p>
                            <!-- 【啤女獨家優惠 | 英國雲水精釀啤酒】 -->
                            <!-- option -->
                            <div class="option">
                                <p><?= $v['option'] ?></p>
                                <!-- 8入趴踢組｜四種口味各二(330ml) -->
                            </div>
                            <div class="option-content">
                                <p>【口味】</p>
                                <p> ✓ Helles向藝術致敬IPA </p>
                                <p> ✓ Hoppy little lager快腳步愛爾</p>
                                <p> ✓ 加速腳步思陶特 Stout</p>
                                <p> ✓ Light lager不斷進化淡愛爾</p>
                                <hr>
                                <p>注意事項</p>
                                <p>⦿ 此價格已含運費</p>
                                <p>⦿ 訂單若有異動，請至會員中心的訂單留言。</p>
                        </a>
                    </li>
                </ul>

            </div>

        </div>

    </div>
</section>

<!-- 過去成功計畫 -->
<section class="fund-success">
    <div class="container">
        <div class="fund-success-title d-flex justify-content-center">
            <img src="../images/common/line-g.svg" alt="">
            <h2>過去成功計畫</h2>
            <img src="../images/common/line-g.svg" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="beer-product product-1">
                    <div class="pro-pic">
                        <!-- 商品圖 -->
                        <img src="../images/products/Heart of Darkness-01.png" alt="">
                        <!-- 標籤 -->
                        <div class="new-label">
                            <p>NEW</p>
                        </div>
                        <!-- <div class="hot-label">
                <p>HOT</p>
            </div> -->
                        <!-- 國家圖片 -->
                        <div class="country"><img src="../images/country/flag_denmark_circle.svg" alt="">
                        </div>

                        <!-- 收藏按鈕 -->
                        <div class="collect">
                            <button class="btn_collect"><i class="far fa-heart"></i></button>
                            <!-- <button class="btn_collect_active"><i class="fas fa-heart"></i></button> -->
                        </div>
                    </div>

                    <!-- 商品介紹 -->
                    <div class="pro-intro">
                        <!-- 商品名稱 -->
                        <div class="p-name">
                            <p class="p-name-c">奧斯陸．北歐瘋皮爾森</p>
                            <p class="p-name-e">Oslo - Nordic Pilsner crazy beer Oslo</p>
                        </div>
                        <!-- 了解更多 -->
                        <a href="">
                            <div class="know-more">了解更多</div>
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-sm">
                <div class="beer-product product-2">
                    <div class="pro-pic">
                        <!-- 商品圖 -->
                        <img src="../images/products/Heart of Darkness-01.png" alt="">
                        <!-- 標籤 -->
                        <div class="new-label">
                            <p>NEW</p>
                        </div>
                        <!-- <div class="hot-label">
                <p>HOT</p>
            </div> -->
                        <!-- 國家圖片 -->
                        <div class="country"><img src="../images/country/flag_denmark_circle.svg" alt="">
                        </div>

                        <!-- 收藏按鈕 -->
                        <div class="collect">
                            <button class="btn_collect"><i class="far fa-heart"></i></button>
                            <!-- <button class="btn_collect_active"><i class="fas fa-heart"></i></button> -->
                        </div>
                    </div>

                    <!-- 商品介紹 -->
                    <div class="pro-intro">
                        <!-- 商品名稱 -->
                        <div class="p-name">
                            <p class="p-name-c">奧斯陸．北歐瘋皮爾森</p>
                            <p class="p-name-e">Oslo - Nordic Pilsner crazy beer Oslo</p>
                        </div>
                        <!-- 了解更多 -->
                        <a href="">
                            <div class="know-more">了解更多</div>
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-sm">
                <div class="beer-product product-3">
                    <div class="pro-pic">
                        <!-- 商品圖 -->
                        <img src="../images/products/Heart of Darkness-01.png" alt="">
                        <!-- 標籤 -->
                        <div class="new-label">
                            <p>NEW</p>
                        </div>
                        <!-- <div class="hot-label">
                <p>HOT</p>
            </div> -->
                        <!-- 國家圖片 -->
                        <div class="country"><img src="../images/country/flag_denmark_circle.svg" alt="">
                        </div>

                        <!-- 收藏按鈕 -->
                        <div class="collect">
                            <button class="btn_collect"><i class="far fa-heart"></i></button>
                            <!-- <button class="btn_collect_active"><i class="fas fa-heart"></i></button> -->
                        </div>
                    </div>

                    <!-- 商品介紹 -->
                    <div class="pro-intro">
                        <!-- 商品名稱 -->
                        <div class="p-name">
                            <p class="p-name-c">奧斯陸．北歐瘋皮爾森</p>
                            <p class="p-name-e">Oslo - Nordic Pilsner crazy beer Oslo</p>
                        </div>
                        <!-- 了解更多 -->
                        <a href="">
                            <div class="know-more">了解更多</div>
                        </a>

                    </div>

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


<!-- my script -->
<script src='../js/fund/fund.js'></script>


<?php include __DIR__ . '../../php/common/html-end.php' ?>