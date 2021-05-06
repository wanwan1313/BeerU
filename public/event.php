<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php
$page_title = '啤女BeerU:品飲會';
?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
   <!-- my-style -->
   <link rel="stylesheet" href="../css/event/title.css">
    <link rel="stylesheet" href="../css/event/event.css">
    <link rel="stylesheet" href="../css/tool.css">

<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>

    <!-- 可變動區 -->
    <!-- event品飲會 -->
    <section class="event">
        <!-- 1. title -->
        <div class="col-12 member-title mt-5 ">
            <p>品飲會</p>
        </div>

        <!-- 2.banner -->
        <div class="container-fluid event-banner">
            <!-- 2.1.底圖 -->
            <img src="../images/event/SVG/event-banner-bgc.svg" alt="">
            <!-- 2.2.標題+動畫 -->
            <div class="row justify-content-center align-items-center">
                <!-- 2.2.1.大標 -->
                <p class='col-10 col-lg-3 order-2 order-lg-1'>給我<br>一杯酒的時間...</p>
                <!-- 2.2.2.動畫 -->
                <div class='col-12 col-lg-3 order-1 order-lg-2'>缺：小天使酒杯乾杯動畫</div>
            </div>
        </div>

        <!-- 3.content -->
        <div class="container event-content">
            <!-- 3.1.title -->
            <div class="row mx-0 px-0">
                <div class='title'>
                    <p>精選活動</p>
                </div>
            </div>

            <!-- 3.2.event-card -->
            <!-- 立即報名 -->
            <div class="row justify-content-between align-items-center event-card">
                <!-- 3.2.1.banner -->
                <div class='card-banner col-12 col-lg-4 px-0'>
                    <img src="../images/event/event-open.jpeg" alt="">
                </div>
                <!-- 3.2.2.content -->
                <div class="col-12 col-lg-6 card-content pr-5">
                    <!-- 3.2.2.1.時間+地區 -->
                    <div class="row justify-content-between">
                        <li class='time'><i class="far fa-clock"></i>2021-05-14(五) 13:00~17:00</li>
                        <li class='location'><i class="fas fa-map-marker-alt"></i>台北市</li>
                    </div>
                    <!-- 3.2.2.2.標題+簡介 -->
                    <div class='intro ml-4'>
                        <p>藏酒『嚐酒會』四月『啤酒不簡單』</p>
                        <p>人們可以在BLISS享受精釀啤酒、新式雞尾酒及各國美食， 在觀看現場DJ、樂團與舞蹈表演的同時，還能參加有趣的活動。 享受休閒，夏日體驗，幸福實現!
                        </p>
                    </div>
                    <!--3.2.2.3.剩餘名額+瀏覽人次 -->
                    <div class="row justify-content-between align-items-end">
                        <li class='quota blue'>剩餘名額：19/20</li>
                        <li class='review'><i class="far fa-eye"></i>
                            1,234</li>
                    </div>
                    <!-- 3.2.2.4.加入關注+立即報名 -->
                    <div class="row justify-content-between">
                        <button class="btn_attention col-6"><i class="fas fa-plus"></i>加入關注</button>
                        <a href="../public/event-join.php" class='col-6'>
                            <div class='btn_join'>立即報名</div>
                        </a>
                    </div>
                </div>
                <!-- 3.2.3.card-deco phone-->
                <div class='card-deco-phone col-12 col-lg-1'>
                    <div class='line'>
                    </div>
                    <div class='cut'>
                        <div class='circle'></div>
                    </div>
                </div>
                <!-- 3.2.3.card-deco pc-->
                <div class='card-deco-pc col-12 col-lg-1'>
                    <!-- 3.2.3.1.line -->
                    <div class='line'>
                    </div>
                    <!-- 3.2.3.2.cut -->
                    <div class='cut'>
                        <div class='circle'></div>
                    </div>
                </div>
            </div>

            <!-- 已額滿 -->
            <div class="row justify-content-between align-items-center event-card">
                <!-- 3.2.1.banner -->
                <div class='card-banner col-12 col-lg-4 px-0'>
                    <img src="../images/event/event-open.jpeg" alt="">
                </div>
                <!-- 3.2.2.content -->
                <div class="col-12 col-lg-6 card-content pr-5">
                    <!-- 3.2.2.1.時間+地區 -->
                    <div class="row justify-content-between">
                        <li class='time'><i class="far fa-clock"></i>2021-05-14(五) 13:00~17:00</li>
                        <li class='location'><i class="fas fa-map-marker-alt"></i>台北市</li>
                    </div>
                    <!-- 3.2.2.2.標題+簡介 -->
                    <div class='intro ml-4'>
                        <p>藏酒『嚐酒會』四月『啤酒不簡單』</p>
                        <p>人們可以在BLISS享受精釀啤酒、新式雞尾酒及各國美食， 在觀看現場DJ、樂團與舞蹈表演的同時，還能參加有趣的活動。 享受休閒，夏日體驗，幸福實現!
                        </p>
                    </div>
                    <!--3.2.2.3.剩餘名額+瀏覽人次 -->
                    <div class="row justify-content-between align-items-end">
                        <li class='quota red'>剩餘名額：0/20</li>
                        <li class='review'><i class="far fa-eye"></i>
                            1,234</li>
                    </div>
                    <!-- 3.2.2.4.加入關注+立即報名 -->
                    <div class="row justify-content-between">
                        <button class="btn_attention col-6"><i class="fas fa-plus"></i>加入關注</button>
                        <a href="../public/event-full.php" class='col-6'>
                            <div class='btn_join full'>已額滿</div>
                        </a>
                    </div>
                </div>
                <!-- 3.2.3.card-deco phone-->
                <div class='card-deco-phone col-12 col-lg-1'>
                    <div class='line'>
                    </div>
                    <div class='cut'>
                        <div class='circle'></div>
                    </div>
                </div>
                <!-- 3.2.3.card-deco pc-->
                <div class='card-deco-pc col-12 col-lg-1'>
                    <!-- 3.2.3.1.line -->
                    <div class='line'>
                    </div>
                    <!-- 3.2.3.2.cut -->
                    <div class='cut'>
                        <div class='circle'></div>
                    </div>
                </div>
            </div>

            <!-- 花絮回顧 -->
            <div class="row justify-content-between align-items-center event-card">
                <!-- 3.2.1.banner -->
                <div class='card-banner col-12 col-lg-4 px-0'>
                    <img src="../images/event/event-open.jpeg" alt="">
                </div>
                <!-- 3.2.2.content -->
                <div class="col-12 col-lg-6 card-content pr-5">
                    <!-- 3.2.2.1.時間+地區 -->
                    <div class="row justify-content-between">
                        <li class='time'><i class="far fa-clock"></i>2021-05-14(五) 13:00~17:00</li>
                        <li class='location'><i class="fas fa-map-marker-alt"></i>台北市</li>
                    </div>
                    <!-- 3.2.2.2.標題+簡介 -->
                    <div class='intro ml-4'>
                        <p>藏酒『嚐酒會』四月『啤酒不簡單』</p>
                        <p>人們可以在BLISS享受精釀啤酒、新式雞尾酒及各國美食， 在觀看現場DJ、樂團與舞蹈表演的同時，還能參加有趣的活動。 享受休閒，夏日體驗，幸福實現!
                        </p>
                    </div>
                    <!--3.2.2.3.剩餘名額+瀏覽人次 -->
                    <div class="row justify-content-end">
                        <!-- <li class='quota aaa'>已結束</li> -->
                        <li class='review'><i class="far fa-eye"></i>
                            1,234</li>
                    </div>
                    <!-- 3.2.2.4.加入關注+立即報名 -->
                    <div class="row justify-content-center justify-content-md-end align-items-end">
                        <li class='quota aaa col-6 px-0'>已結束</li>
                        <!-- <button class="btn_attention col-6"><i class="fas fa-plus"></i>加入關注</button> -->
                        <a href="../public/event-over.php" class='col-6'>
                            <div class='btn_join over'>花絮回顧</div>
                        </a>
                    </div>
                </div>
                <!-- 3.2.3.card-deco phone-->
                <div class='card-deco-phone col-12 col-lg-1'>
                    <div class='line'>
                    </div>
                    <div class='cut'>
                        <div class='circle'></div>
                    </div>
                </div>
                <!-- 3.2.3.card-deco pc-->
                <div class='card-deco-pc col-12 col-lg-1'>
                    <!-- 3.2.3.1.line -->
                    <div class='line'>
                    </div>
                    <!-- 3.2.3.2.cut -->
                    <div class='cut'>
                        <div class='circle'></div>
                    </div>
                </div>
            </div>



        </div>
    </section>

<?php include __DIR__ . '../../php/common/html-body-footer.php' ?>
<?php include __DIR__ . '../../php/common/script.php' ?>

  <!-- my script -->
  <script src='../js/map/map.js'></script>



<?php include __DIR__ . '../../php/common/html-end.php' ?>