<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女BeerU';







?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- 這裡插入要放在head的東西 -->
<!-- 包含自己的css和js -->

<!-- HomepageJs -->
<script src="../js/Homepage.js" defer></script>


 <!-- 首頁CSS -->
 <link rel="stylesheet" href="../css/Hompage/hompage_style.css">   
    <link rel="stylesheet" href="../css/Hompage/homepage_style_RWD.css"> 
    <link rel="stylesheet" href="../css/Hompage/homepage_animation.css"> 




<style>
   
</style>

<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>
<!-- 這裡開始寫html -->


<!-- 會員登入 -->
<?php include __DIR__ . '../../php/common/Login-Sign.php'?>


<!-- Landingpage門 -->
<section class="LandingPage" id="LandingPage">
        <div class="LandingPage_warp">
            <div class="colum colum01 animate__animated animate__fadeIn">
                <img src="../images/common/door_deco.svg" alt="">
            </div>
            <div class="DOOR door_inside animate__animated animate__fadeIn">
                <div class="door_outside">
                    
                    <div class="pip_push" id="pipi01">
                        <img src="../images/common/pipi-push.svg" alt="">
                    </div>
                    <img src="../images/common/door-1.svg" alt="">


                    <div class="doorSign_warp">
                        <h1>徵人啟示</h1>
                        <p>希歡嚐鮮嗎</p>
                        <p>重視設計感嗎？</p>
                        <p>希歡餐飲文化嗎？</p>
                        <h1>年滿18歲嗎？</h1>
                    </div>
                    <div class="button_warp">
                        <button class="btn01 btn-yes" id="YES">是</button>
                        <button class="btn01 btn-no" id="NO">否</button>

                    </div>
                </div>    
            </div> 
            <div class="colum colum02 animate__animated animate__fadeIn">
                <img src="../images/common/door_deco.svg" alt="">
            </div>
       </div> 
</section>  


<!-- 內容開始    -->
<div class="content-wrap" id="content-wrap">
    
    <!-- 首頁 -->
    <section class="home">
        <div class="home_bg ">

            <div class="Logo_wrap animate__animated animate__slideInDown">
                <div class=" flag flag_L"></div>
                <div class="LOGO_Filter">
                    <div class="pip_pick ">
                        <img src="../images/common/pipi-pick01.svg" alt="">
                    </div>
                    <img src="../images/common/Logo_filter.svg" alt=""> 
                </div>
                <div class="flag flag_R"></div>
            </div>
            

            <div class="RWD-button-wrap">
                <div class="row">
                    <div class="RWD-button icon01 d-flex">
                            <img src="../images/common/RWD-icon01-small.svg" alt="">
                            <h3>新手推薦</h3>
                        
                    </div>
                    
                    <div class="RWD-button icon02  d-flex">
                            <img src="../images/common/RWD-icon02-small.svg" alt="">
                            <h3>餐酒搭配</h3>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="RWD-button icon03 d-flex">
                            <img src="../images/common/RWD-icon03-small.svg" alt="">
                            <h3>風味輪</h3>
                        
                    </div>
                    
                    <div class="RWD-button icon04  d-flex">
                            <img src="../images/common/RWD-icon04-small.svg" alt="">
                            <h3>啤酒地圖</h3>
                    </div>
                    
                </div>
                
                

            </div>

            <div class="Woman_warp">

                <div class="woman woman01">
                    <div class="woman-img  woman01">
                        <img src="../images/common/woman1.svg" alt="">
                    </div>
                    <div class="woman-talk talk01">
                        <img src="../images/common/talk01.png" alt="">
                    </div>
                </div>
                <div class="woman woman02">
                    <div class="woman-img  woman02">
                        <img src="../images/common/woman2.svg" alt="">
                    </div>
                    <div class="woman-talk talk02">
                        <img src="../images/common/talk02.svg" alt="">
                    </div>
                </div>
                <div class="woman woman03">
                    <div class="woman-img  woman03-img">
                        <img src="../images/common/woman3.svg" alt="">
                    </div>
                    <div class="woman-talk talk03">
                        <img src="../images/common/talk03.png" alt="">
                    </div>
                </div>
                <div class="woman woman04">
                    <div class="woman-img  woman04-img">
                        <img src="../images/common/woman4.svg" alt="">
                    </div>
                    <div class="woman-talk talk04">
                        <img src="../images/common/talk04.png" alt="">
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>

    <!-- 精釀小學堂 -->
    <section class="Brew-school">
        <div class="container">
            <!-- 標題 -->

            <div class="title-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12 Brew-school-title  ">
                            <p>精釀小學堂</p>
                        </div>
                    </div>
                </div>
            </div>

           <!-- 精釀/商業啤酒介紹 -->
            <div class="row Brew-school-intro ">

                 <!-- 精釀啤酒 -->
                <div class="brew-beer-left d-flex">
                    <div class="brew-beer-img ">
                        <img src="../images/common/brew-beer.png" alt="">
                    </div>
                    <div class="brew-beer-intro ">
                        <div class="brew-beer-title title-txt">
                            <h2 >精釀啤酒</h2>
                        </div>
                      
                        <div class="brew-beer-content content-txt">
                            <h6>可能加入天然添加物</h6>
                            <h6>啤酒配方多元</h6>
                            <h6>一般採用愛爾酵母菌</h6>
                            <h6>發酵期可長達2個月</h6>
                            <h6>保存短則7天至1個月<br>長則半年到一年</h6>
                        </div>
                    </div>
                </div>
                
                <!-- 中間比較 -->
                <div class="category-middle  ">
                    <h6>原料</h6>
                    <h6>配方</h6>
                    <h6>發酵<br>方式</h6>
                    <h6>製作<br>時間</h6>
                    <h6>保存<br>期限</h6>
                </div>
                
                <!-- 商業啤酒 -->
                <div class="bussiness-beer-right d-flex ">
                    <div class="bussiness-beer-intro">
                        <div class="bussiness-beer-title title-txt">
                            <h2 >商業啤酒</h2>
                        </div>
                        <div class="bussiness-beer-content content-txt">
                            <h6>可能加入人工添加物</h6>
                            <h6>啤酒配方單一</h6>
                            <h6>一般採用拉格酵母菌</h6>
                            <h6>發酵期一般為7天</h6>
                            <h6>保存期限至少1至2年</h6>
                        </div>
                    </div>
                    <div class="bussiness-beer-img">
                        <img src="../images/common/bussines-beer.png" alt="">
                    </div>
                </div>
            </div>
        </div>
       <div class="container">
        <div class="row  mt-4">
            <div class="know-more more-btn01">了解更多</div>
        </div>
    </div>
    </section>

    <!-- 經典精釀啤酒種類 -->
    <section class="Beer-type">
    <div class="container">
      
        <div class="title-wrap">
                <h3>經典精釀啤酒種類</h3>
        </div>
        
       <div class="row type-content d-flex ">

           <div class="type-forward ">
               <img src="../images/common/arrow_left-hover.svg" alt="">
           </div>

           <div class="type-intro d-flex mt-5 col-lg-6 col-12">
               <div class="type-intro-img">
                   <img src="../images/common/brew-beer.png" alt="">
               </div>

               <div class="type-intro-content">
                   <div class="type-intro-title d-flex">
                       <h3>皮爾森啤酒Pilsner</h3>
                   </div>

                   <div class="type-colorDot d-flex">
                       <div class="colorDot dot1">
                           <img src="../images/common/dot-1.svg" alt="">
                       </div>
                       <div class="colorDot dot2">
                        <img src="../images/common/dot-2.svg" alt="">
                       </div>
                       <div class="colorDot dot3">
                        <img src="../images/common/dot-3.svg" alt="">
                       </div>
                       <div class="colorDot dot4">
                        <img src="../images/common/dot-4.svg" alt="">
                       </div>
                       <div class="colorDot dot5">
                        <img src="../images/common/dot-5.svg" alt="">
                       </div>
                       <div class="colorDot dot6">
                            <img src="../images/common/dot-6.svg" alt="">
                       </div>
                       <div class="colorDot dot7">
                        <img src="../images/common/dot-7.svg" alt="">
                       </div>
                       <div class="colorDot dot8">
                        <img src="../images/common/dot-8.svg" alt="">
                       </div>
                       <div class="colorDot dot9">
                        <img src="../images/common/dot-9.svg" alt="">
                       </div>
                       
                   </div>

                   <div class="type-intro-text mt-5">
                       <p>世界上最早的金色啤酒，名字由來是最初的產地-捷克的皮爾森市。皮爾森大膽採用了當時新誕生不久的淺色麥芽，使啤酒呈現出標誌性的金黃色。皮爾森啤酒的色澤從淡黃色到金黃色不等，口味通常較為爽口清淡。
                       </p>
                   </div>
                   <div class="know-more more-btn02">了解更多</div>
               </div>
           </div>
           <div class="type-backward">
            <img src="../images/common/arrow_right-hover.svg" alt="">
           </div>
       </div>
    </div>
    <div class="hand">
        <img src="../images/common/hand.svg" alt="">
    </div>
    <div class="container">
        <div class="row type-color d-flex">
        
                 <div class="drop drop1" >
                    <img src="../images/common/drop_01.svg" alt="">
                 </div>
                 <div class="drop drop2">
                    <img src="../images/common/drop_02.svg" alt="">
                 </div>
                 <div class="drop drop3">
                    <img src="../images/common/drop_03.svg" alt="">
                 </div>
                 <div class="drop drop4">
                    <img src="../images/common/drop_04.svg" alt="">
                 </div>
                 <div class="drop drop5">
                    <img src="../images/common/drop_05.svg" alt="">
                 </div>
                 <div class="drop drop6">
                    <img src="../images/common/drop_06.svg" alt="">
                 </div>
                 <div class="drop drop7">
                    <img src="../images/common/drop_07.svg" alt="">
                 </div>
                 <div class="drop drop8">
                    <img src="../images/common/drop_08.svg" alt="">
                 </div>
                 <div class="drop drop9">
                    <img src="../images/common/drop_09.svg" alt="">
                 </div>

           
            
        </div>
    </div>
   </section>

   <!-- 啤女精選 -->
   <section class="BeerU-colllection">
       <div class="container">

        <div class="title-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12 BeerU-colllection-title  ">
                        <p>啤女精選</p>
                    </div>
                </div>
            </div>
        </div>

           

           <div class="row colllection-items">
               <div class="item item01 col-lg-3 col-sm-12">
                   <div class="item-flag">
                       <img src="../images/country/flag_italy_stick.svg" alt="">
                   </div>
                   <div class="item-img">
                    <img src="../images/Links/beer-001.png" alt="">
                   </div>
                   <div class="item-intro mt-5">
                       <h4>托帕托帕-週末客享瘦</h4>
                       <h4>托帕托帕-週末客享瘦</h4>
                   </div>
               </div>

               <div class="item item02 col-lg-3 col-sm-12">
                    <div class="item-flag">
                        <img src="../images/country/flag_japan_stick.svg" alt="">
                    </div>
                   <div class="item-img">
                    <img src="../images/Links/beer-001.png" alt="">
                   </div>
                   <div class="item-intro mt-5">
                    <h4>托帕托帕-週末客享瘦</h4>
                    <h4>托帕托帕-週末客享瘦</h4>
                  </div>
               </div>

               <div class="item item03 col-lg-3 col-sm-12">
                    <div class="item-flag">
                        <img src="../images/country/flag_new_zealand_stick.svg" alt="">
                    </div>
                   <div class="item-img">
                    <img src="../images/Links/beer-001.png" alt="">
                   </div>
                   <div class="item-intro mt-5">
                    <h4>托帕托帕-週末客享瘦</h4>
                    <h4>托帕托帕-週末客享瘦</h4>
                  </div>
               </div>

               <div class="item item04 col-lg-3 col-sm-12">
                    <div class="item-flag">
                        <img src="../images/country/flag_russia_stick.svg" alt="">
                    </div>
                   <div class="item-img">
                    <img src="../images/Links/beer-001.png" alt="">
                   </div>
                   <div class="item-intro mt-5">
                    <h4>托帕托帕-週末客享瘦</h4>
                    <h4>托帕托帕-週末客享瘦</h4>
                </div>
               </div>
           </div>


          <div class="row mt-5">
           <div class="dot-wrap d-flex">
               <span ></span>
               <span ></span>
               <span ></span>
           </div>
        </div>
       </div>
   </section>

   <!-- 啤女分頁  -->
   <section class="BeerU-feature">
       <div class="container">
           <div class="row feature-wrap ">
               <div class="feature feature01 col-lg-5 col-md-5 col-12 ">
                  
                       <div class="feature-content">
                          <p>試飲會</p> 
                       </div>
                   
               </div>
               <div class="feature feature02 col-lg-5 col-md-5 col-12 ">
                  
                    <div class="feature-content">
                        <p>募資計畫</p> 
                     </div>

                  
               </div>        
            </div>
           <div class="row feature-wrap ">
               <div class="feature feature03 col-lg-5 col-md-5 col-12 ">
                  
                       <div class="feature-content">
                        <p>餐酒搭配</p> 
                       </div>
                   
               </div>
               <div class="feature feature04 col-lg-5 col-md-5 col-12 ">
                  
                    <div class="feature-content">
                        <p>全部商品</p> 
                     </div>
               </div>        
            </div>

   </section>

   <!-- 啤女傳說 -->
   <section class="BeerU-legend"> 
       <div class="container">
          

            <div class="title-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12 BeerU-legend-title  ">
                            <p>啤女傳說</p>
                        </div>
                    </div>
                </div>
            </div>

            


       
           <div class="row legned-story-warp ">
               <div class="legned-story col-lg-3 col-4">
                   <div class="legned">
                       <h3>以酒<br>會友</h3>
                   </div>
                   <div class="legned-content  mt-5">
                    <p>酒是最容易讓卸下心防的商品，在啤女裡，你可以找到與你志同道合的酒肉朋友！</p>

                   </div>
                   
               </div>
               <div class="legned-story col-lg-3 col-4">
                   <div class="legned">
                       <h3>信賴<br>專業</h3>
                   </div>
                   <div class="legned-content mt-5">
                    <p>我們有世界各國多元的商品，絕對能讓你找到屬於你的那支MR/MS.RIGHT!</p>
                   </div>
                  
               </div>
               <div class="legned-story col-lg-3 col-4">
                   <div class="legned">
                       <h3>學問<br>殿堂</h3>
                   </div>
                   <div class="legned-content  mt-5">
                    <p>我們致力於推廣世界釀啤酒的文化，讓你感受到濃濃的異國氣息，增添生活樂趣！</p>
                   </div>
               </div>
           </div>
       </div>
   </section>

   <!-- 啤啤 -->
   <section class="pipi">
    <div class="container clouds">
        <div class="row pipi-wrap">
            <div class="pipi-left col-lg-8 col-12 d-flex">
                <div class="pipi-name">
                    <h3>啤啤</h3>
                    <h3>喜歡你，<br>是我獨家的記憶...</h3>
                </div>
                <div class="pipi-body">
                    <div class="pipi-img">
                        <img src="../images/common/pipi-new2.svg" alt="">
                    </div>
                    <div class="pipi-arrow">
                        <img src="../images/common/pipi-arrow.svg" alt="">
                    </div>
                    
                </div>

            </div>
            <div class="pipi-intro col-lg-4 col-12">
                <p>傳說中，酒精仙子<span>『啤啤』</span>，品嚐世界各國特色啤酒，
                    每當喝到好酒，總是忍不住想與人分享，射出<span>『酒仙之箭』</span>
                    就算你是新手經她的洗禮，也可以找到一隻最代表你的酒，成為你的獨家記憶。
                 </p>
            </div>

        </div>
    </div>
</section>
</div>
<!-- 內容結束 -->




<?php include __DIR__ . '../../php/common/html-body-footer.php' ?>
<?php include __DIR__ . '../../php/common/script.php' ?>
<!-- 這裡開始寫jQuery或JS -->




<script>


$(document).ready(function(){

// 起始navbar、footer、header的狀態
let scrollNow = $(window).scrollTop();

if (scrollNow == 0){

    $('.header').addClass('nav-headerOut');
    $('.beeru-nav-bar').addClass('OUT');
    
    $('footer').addClass('OUT')

    $('#YES').click(function(){

         setTimeout(()=>{
            
            $('.header').removeClass('nav-headerOut');
            $('.beeru-nav-bar').removeClass('OUT');
            $('.beeru-nav-bar').fadeIn();

           
        },5200)  

    });
}


//navbar登入起始畫面按鈕
$('.user-login').click(function(){

$('.LogIn-Sign').fadeIn(100);
$('.first-login-page').fadeIn(1);
$('.log-box').css('width','35%').css('height','500px');
$('.LogIn-page').fadeOut(1);
$('.LogSign-page').fadeOut(1);
$('.Check-page').fadeOut(1);

});



});














</script>

<?php include __DIR__ . '../../php/common/html-end.php' ?>