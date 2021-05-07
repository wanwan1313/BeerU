<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女BeerU:募資計畫-方案確認頁';







?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- my-style -->
<link rel="stylesheet" href="../css/fund/fund-step2.css">

<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>

<!-- 手機版 -->
<!-- <section class="mobile-menu">
    <?php include __DIR__ . '../../php/common/category.php' ?>
</section> -->

<!-- 這裡開始寫html -->
<section class="fund-step2">
    <div class="fund container d-flex">
        <div class="row">
            <div class="col-sm-8">
                <div class="img-demo-wrap">
                    <img class="pic1" src="../images/joyce_images/fund-p-1.jpg" alt="">
                </div>
                <div class="product-intro">
                    <h3>【CLOUDWATER | 英國知名精釀廠】</h3>
                    <p>
                        新銳神級酒廠Cloudwater 在Raterbeer連續四年(2016-2019)名列在全球最佳酒廠Top 15內，最佳成績為Top
                        2，也是英陸最強IPA代表之一！來自Manchester 的Cloudwater 酒廠，僅僅成立3年已大有名氣，今年更於Ratebeer
                        最佳酒廠第5名（去年投選）擢升至第2名。
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="goal">
                    <div class="current-value">
                        <h3>NT$123,180</h3>
                    </div>
                    <div class="goal-value">
                        <p><span class="goal-title">目標 |</span>
                            NT$50,180</p>
                    </div>
                </div>
                <div class="sub-intro mt-2">
                    <p>贊助人數 | 6215 </p>
                    <p>剩餘時間 | 6小時</p>
                    <p>時程 | 2021/05/01 - 2021/05/30</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 方案選擇 -->
<section class="options">
    <div class="fund container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" onclick="changeColor();">
                    <a class="card-description" href="../html/fund-step3.html" target="_blank">
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
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <a class="card-description" href="#" target="_blank">
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
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <a class="card-description" href="../html/fund-step3.html" target="_blank">
                        <img src="../images/joyce_images/option-1.jpg" alt="" />
                        <h2>$3050</h2>
                        <p>【容量】</p>
                        <p> 30ml/瓶 x 8 / 口味各2瓶</p>
                        <p>【口味】</p>
                        <p> ✓ Helles向藝術致敬IPA </p>
                        <p> ✓ Hoppy little lager快腳步愛爾</p>
                        <p> ✓ 加速腳步思陶特 Stout</p>
                        <p> ✓ Light lager不斷進化淡愛爾</p>
                        <hr>
                        <p>注意事項</p>
                        <p>⦿ 此價格已含運費</p>
                        <p>⦿ 訂單若有異動，請至會員中心的訂單留言。</p>
                        </p>
                    </a>
                </div>
            </div>
        </div>


    </div>



</section>




<?php include __DIR__ . '../../php/common/html-body-footer.php' ?>
<?php include __DIR__ . '../../php/common/script.php' ?>
<!-- 這裡開始寫jQuery或JS -->


<!-- my script -->
<!-- <script src='../js/fund/fund.js'></script> -->


<?php include __DIR__ . '../../php/common/html-end.php' ?>