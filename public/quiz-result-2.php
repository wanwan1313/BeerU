<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女BeerU:心理測驗';

?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- my-style -->
<link rel="stylesheet" href="../css/newbie/quiz-result-style.css">

<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>

<section class="quiz-result-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12 result-info-wrap mt-5">
                <p class="result-title">適合你的精釀啤酒類型：<span>波特</span></p>
                <p class="result-info">
                    有些人在酒精下肚後，容易變得脾氣暴躁，怒火中燒，此時的你們看誰都不順眼，看誰都想生氣。看似狂放不羈的你們，平常個性內向且很少說話，你們的自尊心很強，容易怕別人看不起自己。於是在喝酒後，不滿的情緒就一次爆發。這樣的人，生活始終不如意，感覺自己窮途末路，也對未來沒有信心。
                    酒精對你們來說，是忘記生活煩惱的百憂解。</p>
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
                <div class="fb">
                    <!-- Generator: Adobe Illustrator 25.2.1, SVG Export Plug-In  -->
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24.1px" height="24px" viewBox="0 0 24.1 24" style="overflow:visible;enable-background:new 0 0 24.1 24;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                opacity: 0;
                            }

                            .st1 {
                                fill: url(#Path_1940_2_);
                            }

                            .st2 {
                                fill: #FFD76C;
                            }

                            .st3 {
                                fill: #FFFFFF;
                            }

                            .st4 {
                                fill: url(#Path_1940_3_);
                            }
                        </style>
                        <defs>
                        </defs>
                        <g id="Component_39_1_1_">
                            <g id="b_1_" transform="translate(-1018.717 -1137.252)" class="st0">
                                <g id="Group_140_1_">

                                    <linearGradient id="Path_1940_2_" gradientUnits="userSpaceOnUse" x1="8239.6846" y1="6726.8647" x2="8239.6846" y2="6727.8647" gradientTransform="matrix(23.9999 0 0 -23.9994 -196721.125 162601.9062)">
                                        <stop offset="0" style="stop-color:#FFD76C" />
                                        <stop offset="1" style="stop-color:#C9984B" />
                                    </linearGradient>
                                    <path id="Path_1940_1_" class="st1" d="M1030.7,1161.3c-6.6-0.1-11.9-5.5-11.8-12.2c0.1-6.6,5.5-11.9,12.2-11.8
                                            s11.9,5.5,11.8,12.2c0,0.1,0,0.2,0,0.4C1042.5,1156.2,1037.1,1161.3,1030.7,1161.3z" />
                                </g>
                                <path id="Path_1941_1_" class="st2" d="M1032.1,1157.5c0-0.5,0-1,0-1.5s0-1,0-1.5v-1.5c0-0.5,0-1,0-1.5s0-1,0-1.5h2.5l0.4-3h-2.9
                                        c0-0.3,0-0.5,0-0.8c0-0.5,0-1,0-1.5c0-0.5,0.4-0.9,0.9-1c0.2,0,0.4,0,0.6,0c0.4,0,0.8,0,1.1,0c0.1,0,0.2,0,0.3,0
                                        c0-0.9,0-1.7,0-2.6c-0.7,0-1.3-0.1-1.9-0.1c-0.4,0-0.9,0-1.3,0.1c-1.2,0.2-2.2,1-2.6,2.2c-0.2,0.5-0.3,1.1-0.3,1.6
                                        c0,0.6,0,1.2,0,1.8c0,0.1,0,0.2,0,0.4c-0.8,0-1.7,0-2.5,0v2.9h2.5c0,0.2,0,0.3,0,0.5c0,2.2,0,4.4,0,6.6c0,0.1,0,0.3,0,0.4
                                        L1032.1,1157.5z" />
                            </g>
                            <g id="a_1_" transform="translate(-986.717 -1137.252)">
                                <g id="Group_137_1_">
                                    <path id="Path_1938_1_" class="st3" d="M998.8,1138.2h0.1c3,0,5.9,1.3,7.9,3.5c4.2,4.4,4,11.3-0.3,15.5c-2.1,2-4.8,3.1-7.6,3
                                            h-0.1c-3,0-5.8-1.3-7.8-3.4c-4.2-4.4-4.1-11.3,0.3-15.5C993.2,1139.3,995.9,1138.2,998.8,1138.2 M998.8,1137.3
                                            c-6.6,0-12,5.3-12.1,11.9s5.3,12,11.9,12.1h0.1c6.4,0,11.7-5,12-11.5c0.2-6.7-5-12.3-11.6-12.5c-0.1,0-0.2,0-0.3,0L998.8,1137.3z
                                            " />
                                </g>
                                <g id="Group_138_1_">
                                    <path id="Path_1939_1_" class="st3" d="M1000.1,1157.5c0-0.5,0-1,0-1.5s0-1,0-1.5v-1.5c0-0.5,0-1,0-1.5s0-1,0-1.5h2.5l0.4-3h-2.9
                                            c0-0.3,0-0.5,0-0.8c0-0.5,0-1,0-1.5c0-0.5,0.4-0.9,0.9-1c0.2,0,0.4,0,0.6,0c0.4,0,0.8,0,1.1,0c0.1,0,0.2,0,0.3,0
                                            c0-0.9,0-1.7,0-2.6c-0.7,0-1.3-0.1-1.9-0.1c-0.4,0-0.9,0-1.3,0.1c-1.2,0.2-2.2,1-2.6,2.2c-0.2,0.5-0.3,1.1-0.3,1.6
                                            c0,0.6,0,1.2,0,1.8c0,0.1,0,0.2,0,0.4c-0.8,0-1.7,0-2.5,0v2.9h2.5c0,0.2,0,0.3,0,0.5c0,2.2,0,4.4,0,6.6c0,0.1,0,0.3,0,0.4
                                            L1000.1,1157.5z" />
                                </g>
                            </g>
                        </g>
                    </svg>

                </div>
                <div class="line">
                    <!-- Generator: Adobe Illustrator 25.2.1, SVG Export Plug-In  -->
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="23.1px" height="22px" viewBox="0 0 23.1 22" style="overflow:visible;enable-background:new 0 0 23.1 22;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                opacity: 0;
                            }

                            .st1 {
                                fill: url(#Path_1976_2_);
                            }

                            .st2 {
                                fill: #1E194B;
                            }

                            .st3 {
                                fill: #FFFFFF;
                            }

                            .st4 {
                                fill: url(#Path_1976_3_);
                            }
                        </style>
                        <defs>
                        </defs>
                        <g id="Component_42_1_1_" transform="translate(31.887 1.003)">
                            <g id="b-2_1_" transform="translate(-1019.394 -1204.537)" class="st0">
                                <g id="Group_191_1_">

                                    <linearGradient id="Path_1976_2_" gradientUnits="userSpaceOnUse" x1="8164.439" y1="6810.9761" x2="8164.439" y2="6811.9761" gradientTransform="matrix(23.076 0 0 -21.9908 -187403.4531 151004.6406)">
                                        <stop offset="0" style="stop-color:#F5D778" />
                                        <stop offset="1" style="stop-color:#C9984B" />
                                    </linearGradient>
                                    <path id="Path_1976_1_" class="st1" d="M1010.6,1212.9c0-5.2-5.2-9.4-11.5-9.4s-11.5,4.2-11.5,9.4c0,4.6,4.1,8.5,9.6,9.2
                                            c1.4,0.3,1.2,0.8,0.9,2.6c0,0.3-0.2,1.1,1,0.6c3.3-1.8,6.4-4,9.1-6.7C1009.7,1217.1,1010.5,1215.1,1010.6,1212.9z" />
                                </g>
                                <path id="Path_1977_1_" class="st2" d="M996.7,1210.4h-0.8c-0.1,0-0.2,0.1-0.2,0.2c0,0,0,0,0,0v5c0,0.1,0.1,0.2,0.2,0.2
                                        c0,0,0,0,0,0h0.8c0.1,0,0.2-0.1,0.2-0.2c0,0,0,0,0,0v-5C996.9,1210.5,996.8,1210.4,996.7,1210.4z M1006.7,1210.4h-3.2
                                        c-0.1,0-0.2,0.1-0.2,0.2v5c0,0.1,0.1,0.2,0.2,0.2h3.2c0.1,0,0.2-0.1,0.2-0.2c0,0,0,0,0,0v-0.8c0-0.1-0.1-0.2-0.2-0.2c0,0,0,0,0,0
                                        h-2.2v-0.8h2.2c0.1,0,0.2-0.1,0.2-0.2c0,0,0,0,0,0v-0.8c0-0.1-0.1-0.2-0.2-0.2c0,0,0,0,0,0h-2.2v-0.8h2.2c0.1,0,0.2-0.1,0.2-0.2
                                        c0,0,0,0,0,0v-0.8C1007,1210.5,1006.9,1210.4,1006.7,1210.4L1006.7,1210.4z M994.8,1214.6h-2.2v-4c0-0.1-0.1-0.2-0.2-0.2
                                        c0,0,0,0,0,0h-0.8c-0.1,0-0.2,0.1-0.2,0.2c0,0,0,0,0,0v5c0,0.1,0,0.1,0.1,0.2c0,0,0.1,0.1,0.2,0.1h3.2c0.1,0,0.2-0.1,0.2-0.2
                                        c0,0,0,0,0,0v-0.8C995,1214.7,994.9,1214.6,994.8,1214.6L994.8,1214.6z M1002.5,1210.6v5c0,0.1-0.1,0.2-0.2,0.2c0,0,0,0,0,0h-0.8
                                        c-0.1,0-0.1,0-0.2-0.1l-2.3-3.1v3c0,0.1-0.1,0.2-0.2,0.2c0,0,0,0,0,0h-0.8c-0.1,0-0.2-0.1-0.2-0.2c0,0,0,0,0,0v-5
                                        c0-0.1,0.1-0.2,0.2-0.2c0,0,0,0,0,0h0.8c0.1,0,0.1,0,0.2,0.1l2.3,3.1v-3c0-0.1,0.1-0.2,0.2-0.2c0,0,0,0,0,0h0.8
                                        C1002.4,1210.4,1002.5,1210.5,1002.5,1210.6C1002.5,1210.6,1002.5,1210.6,1002.5,1210.6L1002.5,1210.6z" />
                            </g>
                            <g id="a-2_1_" transform="translate(-989 -1204.537)">
                                <g id="Group_193_1_">
                                    <path id="Path_1978_1_" class="st3" d="M968.7,1204.5c5.8,0,10.5,3.8,10.5,8.4c0,1.9-0.8,3.8-2.2,5.1c-2.4,2.4-5.2,4.5-8.2,6.2
                                            c0.2-1.4,0.2-2.6-1.8-3l0,0l0,0c-5.1-0.7-8.8-4.1-8.8-8.2C958.1,1208.3,962.8,1204.5,968.7,1204.5 M968.7,1203.5
                                            c-6.4,0-11.5,4.2-11.5,9.4c0,4.6,4.1,8.5,9.6,9.2c1.4,0.3,1.2,0.8,0.9,2.6c0,0.2-0.2,0.8,0.4,0.8c0.2,0,0.4-0.1,0.6-0.2
                                            c3.3-1.8,6.4-4,9.1-6.7c1.5-1.5,2.4-3.6,2.5-5.8C980.2,1207.7,975,1203.5,968.7,1203.5L968.7,1203.5z" />
                                </g>
                                <g id="Group_194_1_">
                                    <path id="Path_1979_1_" class="st3" d="M966.3,1210.4h-0.8c-0.1,0-0.2,0.1-0.2,0.2c0,0,0,0,0,0v5c0,0.1,0.1,0.2,0.2,0.2
                                            c0,0,0,0,0,0h0.8c0.1,0,0.2-0.1,0.2-0.2c0,0,0,0,0,0v-5C966.5,1210.5,966.4,1210.4,966.3,1210.4z M976.3,1210.4h-3.2
                                            c-0.1,0-0.2,0.1-0.2,0.2v5c0,0.1,0.1,0.2,0.2,0.2h3.2c0.1,0,0.2-0.1,0.2-0.2c0,0,0,0,0,0v-0.8c0-0.1-0.1-0.2-0.2-0.2c0,0,0,0,0,0
                                            h-2.2v-0.8h2.2c0.1,0,0.2-0.1,0.2-0.2c0,0,0,0,0,0v-0.8c0-0.1-0.1-0.2-0.2-0.2c0,0,0,0,0,0h-2.2v-0.8h2.2c0.1,0,0.2-0.1,0.2-0.2
                                            c0,0,0,0,0,0v-0.8C976.6,1210.5,976.5,1210.4,976.3,1210.4L976.3,1210.4z M964.4,1214.6h-2.2v-4c0-0.1-0.1-0.2-0.2-0.2
                                            c0,0,0,0,0,0h-0.8c-0.1,0-0.2,0.1-0.2,0.2c0,0,0,0,0,0v5c0,0.1,0,0.1,0.1,0.2c0,0,0.1,0.1,0.2,0.1h3.2c0.1,0,0.2-0.1,0.2-0.2
                                            c0,0,0,0,0,0v-0.8C964.6,1214.7,964.5,1214.6,964.4,1214.6L964.4,1214.6z M972.1,1210.6v5c0,0.1-0.1,0.2-0.2,0.2c0,0,0,0,0,0
                                            h-0.8c-0.1,0-0.1,0-0.2-0.1l-2.3-3.1v3c0,0.1-0.1,0.2-0.2,0.2c0,0,0,0,0,0h-0.8c-0.1,0-0.2-0.1-0.2-0.2c0,0,0,0,0,0v-5
                                            c0-0.1,0.1-0.2,0.2-0.2c0,0,0,0,0,0h0.8c0.1,0,0.1,0,0.2,0.1l2.3,3.1v-3c0-0.1,0.1-0.2,0.2-0.2c0,0,0,0,0,0h0.8
                                            C972,1210.4,972.1,1210.5,972.1,1210.6C972.1,1210.6,972.1,1210.6,972.1,1210.6L972.1,1210.6z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
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

<?php include __DIR__ . '../../php/common/html-end.php' ?>