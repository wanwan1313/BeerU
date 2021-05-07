<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女BeerU';







?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- 這裡插入要放在head的東西 -->
<!-- 包含自己的css和js -->


<style>
    /* 空白內容 開始寫之後請刪除以下css */
    .content {
        width: 100%;
        height: 100vh;
    }
</style>

<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>
<!-- 會員登入 -->
<?php include __DIR__ . '../../php/common/Login-Sign.php'?>
<?php include __DIR__ . '../../php/common/pop-up-1.php' ?>
<?php include __DIR__ . '../../php/common/pop-up-2.php' ?>
<section class="mobile-menu">
    <?php include __DIR__ . '../../php/common/category.php' ?>
</section>
<!-- 這裡開始寫html -->

<!-- 空白內容 開始寫之後請刪除以下div -->
<div class="content">
    <p>開始內容</p>
</div>









<?php include __DIR__ . '../../php/common/html-body-footer.php' ?>
<?php include __DIR__ . '../../php/common/script.php' ?>
<!-- 這裡開始寫jQuery或JS -->



<?php include __DIR__ . '../../php/common/html-end.php' ?>