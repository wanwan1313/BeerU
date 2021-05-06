<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女BeerU:募資計畫-方案確認頁';







?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- my-style -->
<link rel="stylesheet" href="../css/fund/fund-step3.css">

<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>

<!-- 手機版 -->
<!-- <section class="mobile-menu">
    <?php include __DIR__ . '../../php/common/category.php' ?>
</section> -->

<!-- 這裡開始寫html -->
<section class="fund-step3">
    <div class="fund container">
        <div class="product-intro">
            <div class="img-demo-wrap">
                <img class="pic1" src="../images/joyce_images/fund-p-1.jpg" alt="">
            </div>
            <div class="product-main-text">
                <h3>【CLOUDWATER | 英國知名精釀廠】</h3>
                <p>全球第二名 / 英倫第一神廠強勢來台，啤女獨家首發，最強CP值!</p>
                <div class="product-sub-text d-flex">
                    <div class="goal mt-2">
                        <div class="current-value">
                            <p>NT$123,180</p>
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
        <div class="row">
            <div class="col-sm-5">
                <div class="card" id="card-click" onclick="changeColor();">
                    <div class="card-description" \ target="_blank">
                        <img src="../images/joyce_images/option-1.jpg" alt="" />
                        <h2>$2650</h2>
                        <p>【容量】</p>
                        <p> 330ml/瓶 x 4 / 口味各1瓶</p>
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
                </div>

                <!-- 更改方案按鈕 -->
                <a href="../html/fund-step2.html"><button class="btn_edit"><i class="fas fa-edit"></i>更改方案</button></a>
            </div>
            <div class="col-sm-7">

                <div class="fund-amount-title">
                    <h2 class="mb-3">贊助金額</h2>
                </div>
                <div class="fund-amount">
                    <div class="unit">
                        <button class="minus"><i class="fas fa-minus mb-5"></i></button>
                        <input class="price" value="$2650" data-price="2650" />
                        <button class="add"><i class="fas fa-plus"></i></button>
                    </div>

                    <p><i class="fas fa-exclamation-circle"></i>小提醒：最低金額為贊助選項價格。</p>
                    <p> 可向上加碼，以100元為單位，幫助計畫加速成功。</p>
                    <p><i class="fas fa-medal"></i>啤啤送好禮：加碼500元以上，可增加酒仙指數5%。</p>


                    <!-- <a href=""><button class="btn_fundnow"><i class="fas fa-coins"></i>立刻付款贊助</button></a> -->

                </div>

                <a href=""><button class="btn_fundnow"><i class="fas fa-coins"></i>立刻付款贊助</button></a>

            </div>

        </div>
    </div>


</section>




<?php include __DIR__ . '../../php/common/html-body-footer.php' ?>
<?php include __DIR__ . '../../php/common/script.php' ?>
<!-- 這裡開始寫jQuery或JS -->


<!-- my script -->
<script src='../js/fund/fund-final.js'></script>


<?php include __DIR__ . '../../php/common/html-end.php' ?>