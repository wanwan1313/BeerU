<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php
$page_title = '啤女BeerU:品飲會';

$e_SQL = "SELECT * FROM `event` ORDER BY `sid` DESC";
$e_rows = $pdo->query($e_SQL)->fetchAll();
?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- my-style -->
<link rel="stylesheet" href="../css/event/title.css">
<link rel="stylesheet" href="../css/event/event.css">
<link rel="stylesheet" href="../css/tool.css">

<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>
<!-- 會員登入 -->
<?php include __DIR__ . '../../php/common/Login-Sign.php' ?>
<?php include __DIR__ . '../../php/common/pop-up-1.php' ?>
<?php include __DIR__ . '../../php/common/pop-up-2.php' ?>
<section class="mobile-menu">
    <?php include __DIR__ . '../../php/common/category.php' ?>
</section>

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
        <img class='banner_bg' src="../images/event/SVG/event-banner-bgc.svg" alt="">
        <!-- 2.2.標題+動畫 -->
        <div class="row justify-content-center align-items-center">
            <!-- 2.2.1.大標 -->
            <p class='col-10 col-lg-3 order-2 order-lg-1 animatable fadeInUp'>給我<br>一杯酒的時間...</p>
            <!-- 2.2.2.動畫 -->
            <div class='col-12 col-lg-3 order-1 order-lg-2'>
                <img class='beer_mug' src="../images/event/SVG/beer_mug_0.svg" alt="">
                <img class='beer_mug_b' src="../images/event/SVG/beer_mug_b.svg" alt="">
                <div class="pipi_beer_group">
                    <img class='pipi_beer' src="../images/event/SVG/pipi_beer.svg" alt="">
                    <img class='pipi_beer_b' src="../images/event/SVG/pipi_beer_b.svg" alt="">
                </div>
            </div>
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
        <?php foreach ($e_rows as $e) :
            //1.設定期限exp=[設定日期]<[現在日期]---->顯示已結束，剩餘名額消失
            $exp = strtotime($e['event_date']) < time();
            //2.設定人數小於5--->要變成紅色
            $remain = $e['event_join'] < 5;
        ?>
            <div class="row justify-content-between align-items-center event-card animatable fadeInUp">
                <!-- 3.2.1.banner -->
                <div class='card-banner col-12 col-lg-4 px-0'><img src=" ../images/event/<?= $e['event_pic_s'] ?>" alt=""></div>
                <!-- 3.2.2.content -->
                <div class="col-12 col-lg-6 card-content pr-5">
                    <!-- 3.2.2.1.時間+地區 -->
                    <div class="row justify-content-between">
                        <li class='time'><i class="far fa-clock"></i><?= $e['event_time'] ?></li>
                        <li class='location'><i class="fas fa-map-marker-alt"></i><?= $e['event_zone'] ?></li>
                    </div>
                    <!-- 3.2.2.2.標題+簡介 -->
                    <div class='intro ml-4'>
                        <p><?= $e['event_title'] ?></p>
                        <p><?= $e['event_overview'] ?></p>
                    </div>
                    <!--3.2.2.3.剩餘名額+瀏覽人次 -->
                    <div class="row justify-content-between align-items-end">
                        <?php if (!$exp) : ?>
                            <?php if (!$remain) : ?>
                                <li class='quota blue'>
                                    剩餘名額：<?= $e['event_join'] ?>
                                    /<?= $e['event_people'] ?></li> 
                            <?php else:?>
                                <li class='quota red'>
                                    剩餘名額：<?= $e['event_join'] ?>
                                    /<?= $e['event_people'] ?></li>
                            <?php endif ?>
                        <?php else:?>
                            <li class='quota blue invisible'>剩餘名額：<?= $e['event_join'] ?>/<?= $e['event_people'] ?></li>
                        <?php endif ?>
                        <li class='review'><i class="far fa-eye"></i>
                            <?= $e['event_visited'] ?></li>
                    </div>
                    <!-- 3.2.2.4.加入關注+立即報名 -->
                    <div class="row justify-content-between">
                        <!-- 如果活動時間還沒到：期限exp > 現在日期 -->
                        <?php if (!$exp) : ?>
                            <button class="btn_attention col-6"><i class="fas fa-plus"></i>加入關注</button>
                            <a href="../public/event-join.php?sid=<?=$e['sid']?>" class='col-6'>
                                <div class='btn_join'>立即報名</div>
                            </a>
                        <?php else: ?>
                            <li class='quota aaa col-6 px-0'>已結束</li>
                            <a href="../public/event-over.php" class='col-6'>
                                <div class='btn_join over'>花絮回顧</div>
                            </a>
                        <?php endif ?>
                    </div>
                </div>
                <!-- 3.2.3.card-deco phone-->
                <div class='card-deco-phone col-12 col-lg-1'>
                    <div class='deco-line'>
                    </div>
                    <div class='cut'>
                        <div class='circle'></div>
                    </div>
                </div>
                <!-- 3.2.3.card-deco pc-->
                <div class='card-deco-pc col-12 col-lg-1'>
                    <!-- 3.2.3.1.line -->
                    <div class='deco-line'>
                    </div>
                    <!-- 3.2.3.2.cut -->
                    <div class='cut'>
                        <div class='circle'></div>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

</section>

<?php include __DIR__ . '../../php/common/html-body-footer.php' ?>
<?php include __DIR__ . '../../php/common/script.php' ?>

<!-- my script -->
<script src='../js/event/event_anime_banner.js'></script>
<script src='../js/event/event_anime_scroll.js'></script>
<script src='../js/event/event.js'></script>



<?php include __DIR__ . '../../php/common/html-end.php' ?>