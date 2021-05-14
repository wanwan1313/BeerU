<?php include __DIR__ . '../../php/common/config.php' ?>
<?php
// <!-- 需要置換的變數們 -->
$page_title = '報名活動測試';

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

// 瀏覽人次
$pdo->query("UPDATE `event` SET `event_visited`=`event_visited`+1 WHERE `sid` = $sid");

// 從上一頁找sid
$e_SQL = "SELECT * FROM `event` WHERE sid=$sid";
$e = $pdo->query($e_SQL)->fetch();


// $exp = strtotime($e['event_date']) < time();
?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- my-style -->
<link rel="stylesheet" href="../css/event/title.css">
<link rel="stylesheet" href="../css/event/event.css">
<link rel="stylesheet" href="../css/event/event-join.css">
<link rel="stylesheet" href="../css/tool.css">
<style>
     /* 更改bg-image */
     .join .event-banner {
          background-image: url(../images/event/<?= $e['event_pic_b'] ?>);
     }

     @media (max-width: 577px) {
          .join .event-banner {
               background-image: url(../images/event/<?= $e['event_pic_s'] ?>);
          }
     }

     .join .serve .row .product:nth-of-type(1) .product-img:before {
          background: url(../<?= $e['event_beer_1_country'] ?>) 0 0 no-repeat;
     }

     .join .serve .row .product:nth-of-type(2) .product-img:before {
          background: url(../<?= $e['event_beer_2_country'] ?>) 0 0 no-repeat;
     }
</style>
<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>

<div class="content">
     <!-- 登入測試 -->
     <form class='col-md-5 px-0 pl-md-0 mr-0 order-2 order-md-1' action="" name='event_join' method="post" novalidate onsubmit=" event_submit()">
          <div class="form-title"><label for='p0_name'>姓名</label> <input type="text" class='col-10' name='p0_name' id='p0_name' placeholder="啤啤" style='letter-spacing: 0;' required></div>
          <small id="nameHelp" class="form-text" style="color:red;"></small>
          <div class="form-title"><label for='p0_mobile'>電話</label> <input class='col-10' type="tel" name='p0_mobile' id='p0_mobile' placeholder="0912-345-678" required></div>
          <small id="mobileHelp" class="form-text"></small>
          <p class='memo'>＊請輸入正確，以便現場核對身份</p>
          <div class="form-title row justify-content-start">
               <div>攜伴人數 <span class="memo ">＊最多可攜戴<span class="number_big">2</span>位朋友</span></div>

          </div>
          <select class='col-12' id="people">
               <option value="0" selected>0</option>
               <option value="1">1</option>
               <option value="2">2</option>
          </select>
          <div class="one_people">
               <div class="gold-line-wrap">
                    <hr class='gold-line mx-0'>
               </div>
               <!--攜伴人數第1列-->
               <div class='one'>
                    <div class="row mx-0 px-0 flex-wrap justify-content-start">
                         <div class="form-title-s col-12 col-md-6">姓名 <input type="text" placeholder="啤啤" name='p1_name'></div>
                         <div class="form-title-s col-12 col-md-6">電話 <input type="tel" placeholder="0912-345-678" name='p1_mobile'>
                         </div>
                    </div>
                    <p class='memo ml-3'>＊請輸入正確，以便現場核對身份</p>
               </div>
          </div>
          <div class="two_people">
               <div class="gold-line-wrap">
                    <hr class='gold-line mx-0'>
               </div>
               <!--攜伴人數第1列-->
               <div class='one'>
                    <div class="row mx-0 px-0 flex-wrap justify-content-start">
                         <div class="form-title-s col-12 col-md-6">姓名 <input type="text" placeholder="啤啤" name='p1_name'>></div>
                         <div class="form-title-s col-12 col-md-6">電話 <input type="tel" placeholder="0912-345-678" name='p1_mobile'>>
                         </div>
                    </div>
                    <p class='memo ml-3'>＊請輸入正確，以便現場核對身份</p>
               </div>
               <!--攜伴人數第2列-->
               <div class='two'>
                    <div class="row mx-0 px-0 flex-wrap justify-content-start">
                         <div class="form-title-s col-12 col-md-6">姓名 <input type="text" placeholder="啤啤" name='p2_name'>></div>
                         <div class="form-title-s col-12 col-md-6">電話 <input type="tel" placeholder="0912-345-678" name='p2_mobile'>>
                         </div>
                    </div>
                    <p class='memo ml-3'>＊請輸入正確，以便現場核對身份</p>
               </div>
          </div>
          <div class="gold-line-wrap">
               <hr class='gold-line-2 mx-0'>
          </div>
          <!-- 驗證碼 -->
          <div class="cant_copy form-title mb-5 mt-5 flex-nowrap text-center text-md-left pb-4 pb-md-0 js5-input-div" id="js5-form" ng-controller="enterCtrl"><span class="js5-input-divSpan">驗證碼 </span><input type="text" placeholder="不區分大小寫" class='check_code js5-form3-input' id="js5-form3-input" ng-model="writeCode" maxlength="6" ng-keyup="mykey($event)" style="width:150px"><input type="text" class="js5-authCode mx-3" style="width:100px;background-color:var(--red);color:var(--yellow);font-size:2rem;font-weight:bold;text-align:center;letter-spacing:.25rem;border:1px solid white" value="" id="js5-authCode" ng-model="showAuthCode" disabled="disabled" oncopy="return false">
               <a class='recode' href="javascript:"><i class="fas fa-undo-alt" style="font-size:1.4rem;letter-spacing:0"> 重新獲取驗證碼</i></a>
          </div>

          <!-- 立即報名 -->
          <button class='btn_join over d-block mx-auto w-75 mb-2 col-md-5' type='submit'>立即報名</button>
          <!-- 說明 -->
          <div class="d-flex w-75 mx-auto col-md-5 memo-check lh15 px-0 align-items-baseline">
               <input class='d-block mr-2' type="checkbox" checked />
               <div class="memo mx-auto d-inline">按下報名鈕的同時，表示您已詳閱我們的資料使用政策與使用條款，同意使用《啤女》所提供的服務並訂閱電子報。</div>
          </div>
     </form>

</div>


<?php include __DIR__ . '../../php/common/html-body-footer.php' ?>
<?php include __DIR__ . '../../php/common/script.php' ?>

<!-- my script -->
<script src='../js/event/event.js'></script>
<script src='../js/event/event_vaild.js'></script>
<script src='../js/event/event_anime_scroll.js'></script>
<script src='../js/event/event_submit.js'></script>



<?php include __DIR__ . '../../php/common/html-end.php' ?>