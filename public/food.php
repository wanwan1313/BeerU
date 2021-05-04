<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女BeerU:餐酒搭配';







?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- my-style -->
<link rel="stylesheet" href="../css/food/food.css">

<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>



<!-- 這裡開始寫html -->
<section class="food-wrap">
    <div class="food-banner">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-6 col-sm-4  food-left">
                    <div class="food-left mt-5">
                        <div class="pipi-flyup animate__animated animate__swing">
                            <img src="../images/joyce_images/pipi-up.svg" alt="">
                        </div>
                        <div class="food-left-text">
                            <h2>現在，<br>
                                我想來點...</h2>
                        </div>
                        <div class="plate">
                            <img src="../images/joyce_images/plate.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4 food-intro">
                    <div class=" food-title mt-5  mb-3">
                        <p>餐酒搭配</p>
                    </div>
                    <div class="food-right-text animate__animated animate__fadeInUp animate__delay-1s">
                        <h2><span class="text-highlight">餐與酒</span>的搭配，是地方文化的縮影。</h2>
                        <h2>飲酒儼然成了一種生活態度、藝術甚至是品味與知性的交流，而各種食物跟酒之間的搭配更是一門學問。</h2>
                        <h2 class="mt-5">兩者之間的搭配關係，更被法國人喻為"
                            <span class="mariage"> mariage</span>"，直譯為「結婚」。由此可見餐酒文化在歐洲國家中所扮演的重要地位。
                        </h2>
                        <h2 class="mt-5">如今餐酒搭配已不是葡萄酒的專利。啤酒與食物的交融，更能激盪出不同層次的美味！</h2>
                        <h2 class="mt-5 ml-auto ">
                            <span class="text-highlight"> 啤酒搭餐學</span>掌握三大原則，今晚微醺的更美好！
                        </h2>
                        <!-- 線上訂位 -->
                        <a href="#three-rule">
                            <div class="pair-now">搭餐去</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- food-page-2 -->
<section class="rule-wrap" id="three-rule">
    <!-- return to top -->
    <a href="javascript:" id="return-to-top"><img src="../images/common/top.svg" alt=""></a>

    <div class="container">
        <div class="row">
            <div class="col-12  food-rule">
                <div class="rule-title-line mt-5">
                    <h1 class="title-line">啤酒與美食</h1>
                    <h2>搭配三大原則</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="rules-content col-lg-4">
                <div class="rules">
                    <h3>共鳴<br>原則</h3>
                </div>
                <div class="rules-inner  mt-5">
                    <p>此為最常見的餐酒搭配方式，當啤酒與食物擁有共同的味道和香氣時，彼此映襯對方的風味。這樣的搭配法就像照鏡子一樣，相互映照並勾勒出酒與料理兩者的細膩味道。</p>
                </div>
            </div>

            <div class="rules-content col-lg-4">
                <div class="rules">
                    <h3>對比<br>原則</h3>
                </div>
                <div class="rules-inner  mt-5">
                    <p>食物與精釀啤酒的某些特性會以可預期的方式互動，利用這些互動，讓食物與啤酒之間互相平衡。</p>
                </div>
            </div>
            <div class="rules-content col-lg-4">
                <div class="rules">
                    <h3>補充<br> 原則</h3>
                </div>
                <div class="rules-inner  mt-5">
                    <p>需要考慮的是風味強度，味覺體驗的總和。例如常用大蒜入菜的台式料理就與小麥啤酒就是很對味的搭配。</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="beer-type mt-5">
                    <h1 class="title-line">九種經典精釀啤酒種類</h1>
                    <h2 class="animate__animated animate__headShake animate__delay-5s animate__infinite mt-5">點選酒滴看類型</h2>

                </div>
                <!-------- 酒杯-banner-底圖 --------->
                <div class=" glass-banner">
                    <img src="../images/joyce_images/glass-banner.svg" alt="">
                </div>
            </div>

        </div>
    </div>
    <div class="hand">
        <img src="../images/joyce_images/hand.svg" alt="">

    </div>
    <div class="container">
        <div class="row col-lg">
            <div class="type-color d-flex ">
                <div class="food-drop drop1">
                    <div class="food-drop-img">
                        <a href="#pair-1">
                            <img src="../images/joyce_images/drop-1.svg" alt=""></a>
                    </div>
                    <div class="food-drop-name">
                        <p>酸啤酒<br>Sour beer</p>
                    </div>
                </div>
                <div class="food-drop drop2">
                    <div class="food-drop-img">
                        <a href="#pair-2">
                            <img src="../images/joyce_images/drop-2.svg" alt=""></a>
                    </div>
                    <div class="food-drop-name">
                        <p>淡色拉格<br>
                            <span class="font-s">Pale Lager</span>
                        </p>
                    </div>
                </div>
                <div class="food-drop drop3">
                    <div class="food-drop-img">
                        <a href="#pair-3">
                            <img src="../images/joyce_images/drop-3.svg" alt=""></a>
                    </div>
                    <div class="food-drop-name">
                        <p>印度<br>淡艾爾<br>IPA</p>
                    </div>
                </div>
                <div class="food-drop drop4">
                    <div class="food-drop-img">
                        <a href="#pair-4">
                            <img src="../images/joyce_images/drop-4.svg" alt=""></a>
                    </div>
                    <div class="food-drop-name">
                        <p>皮爾森<br>Pilsner</p>
                    </div>
                </div>
                <div class="food-drop drop5">
                    <div class="food-drop-img">
                        <a href="#pair-5">
                            <img src="../images/joyce_images/drop-5.svg" alt=""></a>
                    </div>
                    <div class="food-drop-name">
                        <p>小麥啤酒
                            <br>Weizen
                        </p>
                    </div>
                </div>
                <div class="food-drop drop6">
                    <div class="food-drop-img">
                        <a href="#pair-6">
                            <img src="../images/joyce_images/drop-6.svg" alt=""></a>
                    </div>
                    <div class="food-drop-name">
                        <p>淡色艾爾
                            <br>Pale Ale
                        </p>
                    </div>
                </div>
                <div class="food-drop drop7">
                    <div class="food-drop-img">
                        <a href="#pair-7">
                            <img src="../images/joyce_images/drop-7.svg" alt=""></a>
                    </div>
                    <div class="food-drop-name">
                        <p> 勃克啤酒<br>Bock</p>
                    </div>
                </div>
                <div class="food-drop drop8">
                    <div class="food-drop-img">
                        <a href="#pair-8">
                            <img src="../images/joyce_images/drop-8.svg" alt=""></a>
                    </div>
                    <div class="food-drop-name">
                        <p>波特啤酒<br>Porter</p>
                    </div>
                </div>
                <div class="food-drop drop9">
                    <div class="food-drop-img">
                        <a href="#pair-9">
                            <img src="../images/joyce_images/drop-9.svg" alt=""></a>
                    </div>
                    <div class="food-drop-name">
                        <p>司陶特<br>Stout</p>
                    </div>
                </div>

            </div>


        </div>

    </div>
    </div>
    <div class="m-beer-drops">
        <img src="../images/joyce_images/9-beer-drop.svg" alt="">
    </div>
</section>
<!-- food-page-pair-1 -->
<section class="pair-wrap">
    <div id="pair-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-block">
                    <div class="pair pair-1">
                        <img src="../images/joyce_images/pair-1.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pair-title">
                        <h2>酸啤酒 Sour beer<img class="drop" src="../images/joyce_images/drop-1.svg" alt=""></h2>
                    </div>
                    <div class="pair pair-1-text">
                        <!-- <h2>白啤酒 Witbier</h2> -->

                        <!-- 分享按鈕們 -->
                        <div class="pair share-icons d-flex align-items-center">
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
                            <div class="share">
                                <i class="fas fa-share-alt"></i>
                            </div>
                        </div>
                        <p>是歷史最悠久的一種啤酒種類，酸味的產生主要運用兩種途徑妥善控制達成，一是細菌發酵（乳酸桿菌或是類球菌等），二是在酒中添加一些酸味的水果。但隨著各家啤酒釀造發酵過程，還是有很多不同變化。 </p>
                        <div class="pair-intro d-flex">
                            <span class="pair-icon">
                                <img src="../images/joyce_images/icon-dish.svg" alt=""></span>
                            <h3>適合搭配餐點</h3>
                        </div>
                        <div class="pair-dish d-flex justify-content-between">
                            <h4><span class="dish-type">台式 | </span>雞排、鹹酥雞</h4>
                            <h4><span class="dish-type">西式 | </span>輕食沙拉</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 d-none d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pair reco-beer d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-beer.svg" alt=""></span>
                    <h3>相似商品推薦</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="reco-beer-opt d-flex justify-content-between">
                            <div class="col-sm d-flex">
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
                                    <div class="pro-intro d-flex flex-column justify-content-between">
                                        <!-- 商品名稱 -->
                                        <div class="p-name ">
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
                            <!-- <div class="col-sm d-flex">
                                    <div class="beer-product product-2">
                                        <div class="pro-pic">
                                        
                                            <img src="../images/products/Heart of Darkness-01.png" alt="">
                                        
                                            <div class="new-label">
                                                <p>NEW</p>
                                            </div>
                                                                          
                                            <div class="country"><img src="../images/country/flag_denmark_circle.svg"
                                                    alt=""></div>

                                                                       <div class="collect">
                                                <button class="btn_collect"><i class="far fa-heart"></i></button>
                                              
                                            </div>
                                        </div>

                                
                                        <div class="pro-intro d-flex flex-column justify-content-between">
                                        
                                            <div class="p-name">
                                                <p class="p-name-c">奧斯陸．北歐瘋皮爾森</p>
                                                <p class="p-name-e">Oslo - Nordic PilsnerOslo</p>
                                            </div>
                                            <a href="">
                                                <div class="know-more">了解更多</div>
                                            </a>
 -->

                            <!-- end here  -->
                            <!-- </div> -->
                            <!-- </div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="pair resto d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-resto.svg" alt=""></span>
                    <h3>推薦酒款來這喝</h3>
                </div>
                <div class="resto-info d-flex">
                    <div class="resto-img-wrap">
                        <img src="../images/joyce_images/restaurants-1.png" alt="">
                    </div>
                    <div class="resto-text">
                        <h4>The 58 Bar 精釀啤酒餐酒館</h4>
                        <h4>台北市萬華區開封街二段58號
                            <br>電話：02-2927-7183
                        </h4>
                        <!-- 線上訂位 -->
                        <a href="">
                            <div class="book-now">線上訂位</div>
                        </a>
                    </div>

                </div>
                <!-- <div class="resto-img-wrap">
                        <img src="../images/joyce_images/restaurants-1.png" alt="">
                    </div>
                    <h4>The 58 Bar 精釀啤酒餐酒館
                        <br>
                        台北市萬華區開封街二段58號
                        電話：02-2927-7183
                    </h4> -->
            </div>

        </div>
    </div>
    <!-- 區隔線 -->
    <div class="deco-line">
        <img src="../images/common/line-g.svg" alt="">
    </div>
    </div>
    </div>

</section>
<!-- food-page-pair-2 -->
<section class="pair-wrap">
    <div id="pair-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-block">
                    <div class="pair pair-1">
                        <img src="../images/joyce_images/pair-2.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pair-title">
                        <h2>淡色拉格 Pale Lager<img class="drop" src="../images/joyce_images/drop-2.svg" alt=""></h2>
                    </div>
                    <div class="pair pair-1-text">
                        <!-- <h2>白啤酒 Witbier</h2> -->

                        <!-- 分享按鈕們 -->
                        <div class="pair share-icons d-flex align-items-center">
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
                            <div class="share">
                                <i class="fas fa-share-alt"></i>
                            </div>
                        </div>
                        <p>現今的主流商業啤酒，除麥芽外，也可能添加玉米、米......等副添加物，風味通常非常溫和、爽口，適合大口暢飲。</p>
                        <div class="pair-intro d-flex">
                            <span class="pair-icon">
                                <img src="../images/joyce_images/icon-dish.svg" alt=""></span>
                            <h3>適合搭配餐點</h3>
                        </div>
                        <div class="pair-dish d-flex justify-content-between">
                            <h4><span class="dish-type">台式 | </span>蚵仔煎、春捲</h4>
                            <h4><span class="dish-type">西式 | </span>鮭魚沙拉</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pair reco-beer d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-beer.svg" alt=""></span>
                    <h3>相似商品推薦</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="reco-beer-opt d-flex justify-content-between">
                            <div class="col-sm d-flex">
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
                                    <div class="pro-intro d-flex flex-column justify-content-between">
                                        <!-- 商品名稱 -->
                                        <div class="p-name ">
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
                            <!-- <div class="col-sm d-flex">
                                    <div class="beer-product product-2">
                                        <div class="pro-pic">
                                        
                                            <img src="../images/products/Heart of Darkness-01.png" alt="">
                                        
                                            <div class="new-label">
                                                <p>NEW</p>
                                            </div>
                                                                          
                                            <div class="country"><img src="../images/country/flag_denmark_circle.svg"
                                                    alt=""></div>

                                                                       <div class="collect">
                                                <button class="btn_collect"><i class="far fa-heart"></i></button>
                                              
                                            </div>
                                        </div>

                                
                                        <div class="pro-intro d-flex flex-column justify-content-between">
                                        
                                            <div class="p-name">
                                                <p class="p-name-c">奧斯陸．北歐瘋皮爾森</p>
                                                <p class="p-name-e">Oslo - Nordic PilsnerOslo</p>
                                            </div>
                                            <a href="">
                                                <div class="know-more">了解更多</div>
                                            </a>
 -->

                            <!-- end here  -->
                            <!-- </div> -->
                            <!-- </div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="pair resto d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-resto.svg" alt=""></span>
                    <h3>推薦酒款來這喝</h3>
                </div>
                <div class="resto-info d-flex">
                    <div class="resto-img-wrap">
                        <img src="../images/joyce_images/restaurants-1.png" alt="">
                    </div>
                    <div class="resto-text">
                        <h4>The 58 Bar 精釀啤酒餐酒館</h4>
                        <h4>台北市萬華區開封街二段58號
                            <br>電話：02-2927-7183
                        </h4>
                        <!-- 線上訂位 -->
                        <a href="">
                            <div class="book-now">線上訂位</div>
                        </a>
                    </div>

                </div>
                <!-- <div class="resto-img-wrap">
                        <img src="../images/joyce_images/restaurants-1.png" alt="">
                    </div>
                    <h4>The 58 Bar 精釀啤酒餐酒館
                        <br>
                        台北市萬華區開封街二段58號
                        電話：02-2927-7183
                    </h4> -->
            </div>

        </div>
    </div>
    <!-- 區隔線 -->
    <div class="deco-line">
        <img src="../images/common/line-g.svg" alt="">
    </div>
    </div>
    </div>

</section>
<!-- food-page-pair-3 -->
<section class="pair-wrap">
    <div id="pair-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-block">
                    <div class="pair pair-1">
                        <img src="../images/joyce_images/pair-3.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pair-title">
                        <h2>印度淡艾爾 IPA<img class="drop" src="../images/joyce_images/drop-3.svg" alt=""></h2>
                    </div>
                    <div class="pair pair-1-text">
                        <!-- 分享按鈕們 -->
                        <div class="pair share-icons d-flex align-items-center">
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
                            <div class="share">
                                <i class="fas fa-share-alt"></i>
                            </div>
                        </div>
                        <p>一種酒花香氣更濃郁的淡色艾爾，釀造時加入了大量具有防腐性能的啤酒花以確保啤酒的新鮮，從此漸漸形成一種風味獨特的啤酒類型。IPA的苦味在重口味的食物之後，會有意想不到的回甘。
                        </p>
                        <div class="pair-intro d-flex">
                            <span class="pair-icon">
                                <img src="../images/joyce_images/icon-dish.svg" alt=""></span>
                            <h3>適合搭配餐點</h3>
                        </div>
                        <div class="pair-dish d-flex justify-content-between">
                            <h4><span class="dish-type">台式 | </span>麻辣鍋、沙茶炒麵</h4>
                            <h4><span class="dish-type">西式 | </span>硬質乳酪</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pair reco-beer d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-beer.svg" alt=""></span>
                    <h3>相似商品推薦</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="reco-beer-opt d-flex justify-content-between">
                            <div class="col-sm d-flex">
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
                                    <div class="pro-intro d-flex flex-column justify-content-between">
                                        <!-- 商品名稱 -->
                                        <div class="p-name ">
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

            <div class="col-md-6">
                <div class="pair resto d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-resto.svg" alt=""></span>
                    <h3>推薦酒款來這喝</h3>
                </div>
                <div class="resto-info d-flex">
                    <div class="resto-img-wrap">
                        <img src="../images/joyce_images/restaurants-1.png" alt="">
                    </div>
                    <div class="resto-text">
                        <h4>The 58 Bar 精釀啤酒餐酒館</h4>
                        <h4>台北市萬華區開封街二段58號
                            <br>電話：02-2927-7183
                        </h4>
                        <!-- 線上訂位 -->
                        <a href="">
                            <div class="book-now">線上訂位</div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- 區隔線 -->
    <div class="deco-line">
        <img src="../images/common/line-g.svg" alt="">
    </div>
    </div>
    </div>

</section>
<!-- food-page-pair-4 -->
<section class="pair-wrap">
    <div id="pair-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-block">
                    <div class="pair pair-1">
                        <img src="../images/joyce_images/pair-4.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pair-title">
                        <h2>皮爾森 Pilsner<img class="drop" src="../images/joyce_images/drop-4.svg" alt=""></h2>
                    </div>
                    <div class="pair pair-1-text">
                        <!-- 分享按鈕們 -->
                        <div class="pair share-icons d-flex align-items-center">
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
                            <div class="share">
                                <i class="fas fa-share-alt"></i>
                            </div>
                        </div>
                        <p>皮爾森啤酒，稱作 Pils 或
                            Pilsner，世界上最早的金色啤酒，名字由來是其最初的產地－捷克的皮爾森市。皮爾森啤酒大膽採用了當時新誕生不久的淺色麥芽，使啤酒呈現出標誌性的金黃色。皮爾森啤酒的色澤從淡黃色到金黃色不等，口味通常較為爽口清淡。
                        </p>
                        <div class="pair-intro d-flex">
                            <span class="pair-icon">
                                <img src="../images/joyce_images/icon-dish.svg" alt=""></span>
                            <h3>適合搭配餐點</h3>
                        </div>
                        <div class="pair-dish d-flex justify-content-between">
                            <h4><span class="dish-type">台式 | </span>炭烤大魷魚</h4>
                            <h4><span class="dish-type">西式 | </span>德式香腸</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pair reco-beer d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-beer.svg" alt=""></span>
                    <h3>相似商品推薦</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="reco-beer-opt d-flex justify-content-between">
                            <div class="col-sm d-flex">
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
                                    <div class="pro-intro d-flex flex-column justify-content-between">
                                        <!-- 商品名稱 -->
                                        <div class="p-name ">
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

            <div class="col-md-6">
                <div class="pair resto d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-resto.svg" alt=""></span>
                    <h3>推薦酒款來這喝</h3>
                </div>
                <div class="resto-info d-flex">
                    <div class="resto-img-wrap">
                        <img src="../images/joyce_images/restaurants-1.png" alt="">
                    </div>
                    <div class="resto-text">
                        <h4>The 58 Bar 精釀啤酒餐酒館</h4>
                        <h4>台北市萬華區開封街二段58號
                            <br>電話：02-2927-7183
                        </h4>
                        <!-- 線上訂位 -->
                        <a href="">
                            <div class="book-now">線上訂位</div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- 區隔線 -->
    <div class="deco-line">
        <img src="../images/common/line-g.svg" alt="">
    </div>
    </div>
    </div>

</section>
<!-- food-page-pair-5 -->
<section class="pair-wrap">
    <div id="pair-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-block">
                    <div class="pair pair-1">
                        <img src="../images/joyce_images/pair-5.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pair-title">
                        <h2>小麥啤酒 Weizen <img class="drop" src="../images/joyce_images/drop-5.svg" alt=""></h2>
                    </div>
                    <div class="pair pair-1-text">
                        <!-- 分享按鈕們 -->
                        <div class="pair share-icons d-flex align-items-center">
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
                            <div class="share">
                                <i class="fas fa-share-alt"></i>
                            </div>
                        </div>
                        <p>不同於一般啤酒以大麥為原料，德國小麥啤酒依德國法律規範，小麥麥芽須占穀料一半以上。不會過濾，留存懸浮的酵母使外觀混濁，顏色則在淡金色到暗金色間，味道清新，口感輕盈，帶有香蕉與丁香味道且果香濃郁。
                        </p>
                        <div class="pair-intro d-flex">
                            <span class="pair-icon">
                                <img src="../images/joyce_images/icon-dish.svg" alt=""></span>
                            <h3>適合搭配餐點</h3>
                        </div>
                        <div class="pair-dish d-flex justify-content-between">
                            <h4><span class="dish-type">台式 | </span>雞蛋糕、車輪餅</h4>
                            <h4><span class="dish-type">西式 | </span>蘋果派</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pair reco-beer d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-beer.svg" alt=""></span>
                    <h3>相似商品推薦</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="reco-beer-opt d-flex justify-content-between">
                            <div class="col-sm d-flex">
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
                                    <div class="pro-intro d-flex flex-column justify-content-between">
                                        <!-- 商品名稱 -->
                                        <div class="p-name ">
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

            <div class="col-md-6">
                <div class="pair resto d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-resto.svg" alt=""></span>
                    <h3>推薦酒款來這喝</h3>
                </div>
                <div class="resto-info d-flex">
                    <div class="resto-img-wrap">
                        <img src="../images/joyce_images/restaurants-1.png" alt="">
                    </div>
                    <div class="resto-text">
                        <h4>The 58 Bar 精釀啤酒餐酒館</h4>
                        <h4>台北市萬華區開封街二段58號
                            <br>電話：02-2927-7183
                        </h4>
                        <!-- 線上訂位 -->
                        <a href="">
                            <div class="book-now">線上訂位</div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- 區隔線 -->
    <div class="deco-line">
        <img src="../images/common/line-g.svg" alt="">
    </div>
    </div>
    </div>

</section>
<!-- food-page-pair-6 -->
<section class="pair-wrap">
    <div id="pair-6">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-block">
                    <div class="pair pair-1">
                        <img src="../images/joyce_images/pair-6.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pair-title">
                        <h2>淡色艾爾 Pale Ale<img class="drop" src="../images/joyce_images/drop-6.svg" alt=""></h2>
                    </div>
                    <div class="pair pair-1-text">
                        <!-- 分享按鈕們 -->
                        <div class="pair share-icons d-flex align-items-center">
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
                            <div class="share">
                                <i class="fas fa-share-alt"></i>
                            </div>
                        </div>
                        <p>使用淡色麥芽（Pale Malts）、少量啤酒花、以頂層發酵方式釀造的啤酒，通常氣泡豐富，麥味濃郁。在英國地區，苦啤酒與淡啤酒被當成同義詞，可見苦味也是淡色愛爾的一大特徵。
                        </p>
                        <div class="pair-intro d-flex">
                            <span class="pair-icon">
                                <img src="../images/joyce_images/icon-dish.svg" alt=""></span>
                            <h3>適合搭配餐點</h3>
                        </div>
                        <div class="pair-dish d-flex justify-content-between">
                            <h4><span class="dish-type">台式 | </span>炸雞腿</h4>
                            <h4><span class="dish-type">西式 | </span>漢堡</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pair reco-beer d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-beer.svg" alt=""></span>
                    <h3>相似商品推薦</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="reco-beer-opt d-flex justify-content-between">
                            <div class="col-sm d-flex">
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
                                    <div class="pro-intro d-flex flex-column justify-content-between">
                                        <!-- 商品名稱 -->
                                        <div class="p-name ">
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

            <div class="col-md-6">
                <div class="pair resto d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-resto.svg" alt=""></span>
                    <h3>推薦酒款來這喝</h3>
                </div>
                <div class="resto-info d-flex">
                    <div class="resto-img-wrap">
                        <img src="../images/joyce_images/restaurants-1.png" alt="">
                    </div>
                    <div class="resto-text">
                        <h4>The 58 Bar 精釀啤酒餐酒館</h4>
                        <h4>台北市萬華區開封街二段58號
                            <br>電話：02-2927-7183
                        </h4>
                        <!-- 線上訂位 -->
                        <a href="">
                            <div class="book-now">線上訂位</div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- 區隔線 -->
    <div class="deco-line">
        <img src="../images/common/line-g.svg" alt="">
    </div>
    </div>
    </div>

</section>
<!-- food-page-pair-7 -->
<section class="pair-wrap">
    <div id="pair-7">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-block">
                    <div class="pair pair-1">
                        <img src="../images/joyce_images/pair-7.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pair-title">
                        <h2>勃克啤酒 BOCK<img class="drop" src="../images/joyce_images/drop-7.svg" alt=""></h2>
                    </div>
                    <div class="pair pair-1-text">
                        <!-- 分享按鈕們 -->
                        <div class="pair share-icons d-flex align-items-center">
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
                            <div class="share">
                                <i class="fas fa-share-alt"></i>
                            </div>
                        </div>
                        <p>源於北德城市Einbeck，為當時僧侶齋戒時的營養來源，17世紀巴伐利亞王室請了釀酒師到慕尼黑釀酒，原先為艾爾，但因1516年的醇酒令而轉成底層發酵的烈性拉格。烘焙麥芽的風味鮮明，口感滑順，顏色較深。
                        </p>
                        <div class="pair-intro d-flex">
                            <span class="pair-icon">
                                <img src="../images/joyce_images/icon-dish.svg" alt=""></span>
                            <h3>適合搭配餐點</h3>
                        </div>
                        <div class="pair-dish d-flex justify-content-between">
                            <h4><span class="dish-type">台式 | </span>滷肉飯</h4>
                            <h4><span class="dish-type">西式 | </span>燉煮豬肉</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pair reco-beer d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-beer.svg" alt=""></span>
                    <h3>相似商品推薦</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="reco-beer-opt d-flex justify-content-between">
                            <div class="col-sm d-flex">
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
                                    <div class="pro-intro d-flex flex-column justify-content-between">
                                        <!-- 商品名稱 -->
                                        <div class="p-name ">
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

            <div class="col-md-6">
                <div class="pair resto d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-resto.svg" alt=""></span>
                    <h3>推薦酒款來這喝</h3>
                </div>
                <div class="resto-info d-flex">
                    <div class="resto-img-wrap">
                        <img src="../images/joyce_images/restaurants-1.png" alt="">
                    </div>
                    <div class="resto-text">
                        <h4>The 58 Bar 精釀啤酒餐酒館</h4>
                        <h4>台北市萬華區開封街二段58號
                            <br>電話：02-2927-7183
                        </h4>
                        <!-- 線上訂位 -->
                        <a href="">
                            <div class="book-now">線上訂位</div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- 區隔線 -->
    <div class="deco-line">
        <img src="../images/common/line-g.svg" alt="">
    </div>
    </div>
    </div>

</section>
<!-- food-page-pair-8 -->
<section class="pair-wrap">
    <div id="pair-8">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-block">
                    <div class="pair pair-1">
                        <img src="../images/joyce_images/pair-8.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pair-title">
                        <h2>波特啤酒 Porter<img class="drop" src="../images/joyce_images/drop-8.svg" alt=""></h2>
                    </div>
                    <div class="pair pair-1-text">
                        <!-- 分享按鈕們 -->
                        <div class="pair share-icons d-flex align-items-center">
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
                            <div class="share">
                                <i class="fas fa-share-alt"></i>
                            </div>
                        </div>
                        <p>一種深色啤酒，源自於18世紀英國倫敦地區，以烘焙麥芽發酵而成。當時廣受河上及街道搬運工（Porter）的歡迎，因此得名。帶有咖啡般香味。</p>
                        <div class="pair-intro d-flex">
                            <span class="pair-icon">
                                <img src="../images/joyce_images/icon-dish.svg" alt=""></span>
                            <h3>適合搭配餐點</h3>
                        </div>
                        <div class="pair-dish d-flex justify-content-between">
                            <h4><span class="dish-type">台式 | </span>烤玉米、烤魚蛋</h4>
                            <h4><span class="dish-type">西式 | </span>煙燻培根</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pair reco-beer d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-beer.svg" alt=""></span>
                    <h3>相似商品推薦</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="reco-beer-opt d-flex justify-content-between">
                            <div class="col-sm d-flex">
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
                                    <div class="pro-intro d-flex flex-column justify-content-between">
                                        <!-- 商品名稱 -->
                                        <div class="p-name ">
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

            <div class="col-md-6">
                <div class="pair resto d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-resto.svg" alt=""></span>
                    <h3>推薦酒款來這喝</h3>
                </div>
                <div class="resto-info d-flex">
                    <div class="resto-img-wrap">
                        <img src="../images/joyce_images/restaurants-1.png" alt="">
                    </div>
                    <div class="resto-text">
                        <h4>The 58 Bar 精釀啤酒餐酒館</h4>
                        <h4>台北市萬華區開封街二段58號
                            <br>電話：02-2927-7183
                        </h4>
                        <!-- 線上訂位 -->
                        <a href="">
                            <div class="book-now">線上訂位</div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- 區隔線 -->
    <div class="deco-line">
        <img src="../images/common/line-g.svg" alt="">
    </div>
    </div>
    </div>

</section>
<!-- food-page-pair-9 -->
<section class="pair-wrap">
    <div id="pair-9">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-block">
                    <div class="pair pair-1">
                        <img src="../images/joyce_images/pair-9.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pair-title">
                        <h2>司陶特 Stout<img class="drop" src="../images/joyce_images/drop-9.svg" alt=""></h2>
                    </div>
                    <div class="pair pair-1-text">
                        <!-- 分享按鈕們 -->
                        <div class="pair share-icons d-flex align-items-center">
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
                            <div class="share">
                                <i class="fas fa-share-alt"></i>
                            </div>
                        </div>
                        <p>又稱烈性黑啤酒，是一種由波特啤酒改良而來的深色啤酒，而Stout一名源自法語，原義是強烈的意思，具濃郁烘烤風味，略帶咖啡與巧克力滋味，口味較波特啤酒濃烈。</p>
                        <div class="pair-intro d-flex">
                            <span class="pair-icon">
                                <img src="../images/joyce_images/icon-dish.svg" alt=""></span>
                            <h3>適合搭配餐點</h3>
                        </div>
                        <div class="pair-dish d-flex justify-content-between">
                            <h4><span class="dish-type">台式 | </span>刈包</h4>
                            <h4><span class="dish-type">西式 | </span>鵝肝、黑巧克力</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pair reco-beer d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-beer.svg" alt=""></span>
                    <h3>相似商品推薦</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="reco-beer-opt d-flex justify-content-between">
                            <div class="col-sm d-flex">
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
                                    <div class="pro-intro d-flex flex-column justify-content-between">
                                        <!-- 商品名稱 -->
                                        <div class="p-name ">
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

            <div class="col-md-6">
                <div class="pair resto d-flex">
                    <span class="pair-icon">
                        <img src="../images/joyce_images/icon-resto.svg" alt=""></span>
                    <h3>推薦酒款來這喝</h3>
                </div>
                <div class="resto-info d-flex">
                    <div class="resto-img-wrap">
                        <img src="../images/joyce_images/restaurants-1.png" alt="">
                    </div>
                    <div class="resto-text">
                        <h4>The 58 Bar 精釀啤酒餐酒館</h4>
                        <h4>台北市萬華區開封街二段58號
                            <br>電話：02-2927-7183
                        </h4>
                        <!-- 線上訂位 -->
                        <a href="">
                            <div class="book-now">線上訂位</div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
    </div>

</section>

<!-- ig -->




<?php include __DIR__ . '../../php/common/html-body-footer.php' ?>
<?php include __DIR__ . '../../php/common/script.php' ?>
<!-- 這裡開始寫jQuery或JS -->


<!-- my script -->
<script src='../js/food/food.js'></script>


<?php include __DIR__ . '../../php/common/html-end.php' ?>