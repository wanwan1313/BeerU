<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女BeerU';




?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- 這裡插入要放在head的東西 -->
<!-- 包含自己的css和js -->

<!-- slick css-->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<link rel="stylesheet" type="text/css" href="../css/slick.css"/>


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
<?php include __DIR__ . '../../php/common/pop-up-1.php' ?>
<?php include __DIR__ . '../../php/common/pop-up-2.php' ?>


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


<!-- 內容開始 -->
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
                    <div class="woman-img  woman01-img">
                        <img src="../images/common/woman1.svg" alt="">
                    </div>
                    <div class="woman-talk talk01">
                        <img src="../images/common/talk01.png" alt="">
                    </div>
                </div>
                <div class="woman woman02">
                    <div class="woman-img  woman02-img">
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
          
            <div class="title-wrap ">
                    <h3>經典精釀啤酒種類</h3>
            </div>
    
              <!-- RWD顯示 -->
              <div class="type-colorDot d-flex">
                <div class="colorDot dot1" style="background-color: #e3d831;"></div>
                <div class="colorDot dot2" style="background-color: #ead346;"></div>
                <div class="colorDot dot3" style="background-color: #f0b62d;"></div>
                <div class="colorDot dot4" style="background-color: #e1a327;"></div>
                <div class="colorDot dot5" style="background-color: #de9300;"></div>
                <div class="colorDot dot6" style="background-color: #f08e19;"></div>
                <div class="colorDot dot7" style="background-color: #b9002e;"></div>
                <div class="colorDot dot8" style="background-color: #88171a;"></div>
                <div class="colorDot dot9" style="background-color: #3f191a;"></div>
             </div>
    
            
           <div class="row type-content ">
    
                <div class="type-forward ">
                   <img src="../images/common/arrow_left-hover.svg" alt="">
               </div> 
    
    
               <div class="Beer-type-window col-lg-7 col-12">
               
                    <div class="Beer-type-content-warp">
    
                        <div class="Beer-type-content type01 ">
    
                            <div class="Beer-type-img type-img01">
                                <img src="../images/glasses/witbier.svg" alt="">
                            </div>
                            
                            <div class="Beer-type-intro-wrap ">
    
                                <div class="Beer-type-name d-flex">
                                <img src="../images/common/dot-1.svg" alt="">
                                <h3>酸啤Witbier</h3>
                                </div>
                                <div class="Beer-type-text">
                                    <p>清爽帶果香的Witbier是當今受歡迎程度最高的啤酒類型前幾名，歷史久遠，可追溯到11世紀的北歐，是最早使用啤酒花的啤酒之一。Witbier的ABV在5%左右，使用30~40%的未發芽小麥釀造，並會在過程中添加芫荽、橙皮和其他香料。「Wit」在原文中便是「白色」的意思。
                                    </p>
                                </div>
    
                                <div class="know-more more-btn02">了解更多</div>
                            </div>
    
                        </div>
    
                        <div class="Beer-type-content type02 ">
    
                            <div class="Beer-type-img type-img02">
                                <img src="../images/glasses/pale_lager.svg" alt="">
                            </div>
                            
                            <div class="Beer-type-intro-wrap ">
    
                                <div class="Beer-type-name d-flex">
                                <img src="../images/common/dot-2.svg" alt="">
                                <h3>淡色拉格Pale Lager</h3>
                                </div>
                                <div class="Beer-type-text">
                                    <p>現今的主流商業啤酒，除麥芽外，也可能添加玉米、米......等副添加物，風味通常非常溫和、爽口，適合大口暢飲。
                                    </p>
                                </div>
    
                                <div class="know-more more-btn02">了解更多</div>
                            </div>
    
                        </div>
    
                        <div class="Beer-type-content type03 ">
    
                            <div class="Beer-type-img type-img03">
                                <img src="../images/glasses/ipa.svg" alt="">
                            </div>
                            
                            <div class="Beer-type-intro-wrap ">
    
                                <div class="Beer-type-name d-flex">
                                <img src="../images/common/dot-3.svg" alt="">
                                <h3>印度淡艾爾IPA </h3>
                                </div>
                                <div class="Beer-type-text">
                                    <p>是一種酒花香氣更濃郁的淡色艾爾，最初為了讓啤酒在從英格蘭到印度的遠距離航程中不至於腐敗，因此在釀造時加入了大量具有防腐性能的啤酒花以確保啤酒的新鮮，從此漸漸形成一種風味獨特的啤酒類型。IPA的苦味在重口味的食物之後，會有意想不到的回甘。

                                    </p>
                                </div>
    
                                <div class="know-more more-btn02">了解更多</div>
                            </div>
    
                        </div>
    
                        <div class="Beer-type-content type04 ">
    
                            <div class="Beer-type-img type-img04">
                                <img src="../images/glasses/pilsner.png" alt="">
                            </div>
                            
                            <div class="Beer-type-intro-wrap ">
    
                                <div class="Beer-type-name d-flex">
                                <img src="../images/common/dot-4.svg" alt="">
                                <h3>皮爾森Pilsner</h3>
                                </div>
                                <div class="Beer-type-text">
                                    <p>皮爾森啤酒，稱作 Pils 或 Pilsner，世界上最早的金色啤酒，名字由來是其最初的產地－捷克的皮爾森市。皮爾森啤酒大膽採用了當時新誕生不久的淺色麥芽，使啤酒呈現出標誌性的金黃色。皮爾森啤酒的色澤從淡黃色到金黃色不等，口味通常較為爽口清淡。明亮澄清的色澤更帶動了透明玻璃啤酒杯的流行。
                                    </p>
                                </div>
    
                                <div class="know-more more-btn02">了解更多</div>
                            </div>
    
                        </div>
    
                        <div class="Beer-type-content type05 ">
    
                            <div class="Beer-type-img type-img05">
                                <img src="../images/glasses/weizen.svg" alt="">
                            </div>
                            
                            <div class="Beer-type-intro-wrap ">
    
                                <div class="Beer-type-name d-flex">
                                <img src="../images/common/dot-5.svg" alt="">
                                <h3>小麥啤酒Weizen</h3>
                                </div>
                                <div class="Beer-type-text">
                                    <p>不同於一般啤酒以大麥為原料，德國小麥啤酒依德國法律規範，小麥麥芽須占穀料一半以上。不會過濾，留存懸浮的酵母使外觀混濁，顏色則在淡金色到暗金色間，味道清新，口感輕盈，帶有香蕉與丁香味道且果香濃郁。
    
                                    </p>
                                </div>
    
                                <div class="know-more more-btn02">了解更多</div>
                            </div>
    
                        </div>
                    
                        <div class="Beer-type-content type06 ">
    
                            <div class="Beer-type-img type-img06">
                                <img src="../images/glasses/pale_ale.svg" alt="">
                            </div>
                            
                            <div class="Beer-type-intro-wrap ">
    
                                <div class="Beer-type-name d-flex">
                                <img src="../images/common/dot-6.svg" alt="">
                                <h3>淡色艾爾Pale Ale</h3>
                                </div>
                                <div class="Beer-type-text">
                                    <p>使用淡色麥芽（Pale Malts）、少量啤酒花、以頂層發酵方式釀造的啤酒，通常氣泡豐富，麥味濃郁。在英國地區，苦啤酒與淡啤酒被當成同義詞，可見苦味也是淡色愛爾的一大特徵。
                                    </p>
                                </div>
    
                                <div class="know-more more-btn02">了解更多</div>
                            </div>
    
                        </div>
    
                        <div class="Beer-type-content type07 ">
    
                            <div class="Beer-type-img type-img07">
                                <img src="../images/glasses/bock.svg" alt="">
                            </div>
                            
                            <div class="Beer-type-intro-wrap ">
    
                                <div class="Beer-type-name d-flex">
                                <img src="../images/common/dot-7.svg" alt="">
                                <h3>勃克啤酒Bock</h3>
                                </div>
                                <div class="Beer-type-text">
                                    <p>源於北德城市Einbeck，為當時僧侶齋戒時的營養來源，17世紀巴伐利亞王室請了釀酒師到慕尼黑釀酒，原先為艾爾，但因1516年的醇酒令而轉成底層發酵的烈性拉格。烘焙麥芽的風味鮮明，口感滑順，顏色較深。
                                    </p>
                                </div>
    
                                <div class="know-more more-btn02">了解更多</div>
                            </div>
    
                        </div>
    
                        <div class="Beer-type-content type08 ">
    
                            <div class="Beer-type-img type-img08">
                                <img src="../images/glasses/porter.svg" alt="">
                            </div>
                            
                            <div class="Beer-type-intro-wrap ">
    
                                <div class="Beer-type-name d-flex">
                                <img src="../images/common/dot-8.svg" alt="">
                                <h3>波特啤酒Porter</h3>
                                </div>
                                <div class="Beer-type-text">
                                    <p>一種深色啤酒，源自於18世紀英國倫敦地區，以烘焙麥芽發酵而成。當時廣受河上及街道搬運工（Porter）的歡迎，因此得名。帶有咖啡般香味。</p>
                                </div>
    
                                <div class="know-more more-btn02">了解更多</div>
                            </div>
    
                        </div>
    
                        <div class="Beer-type-content type09 ">
    
                            <div class="Beer-type-img type-img09">
                                <img src="../images/glasses/stout.svg" alt="">
                            </div>
                            
                            <div class="Beer-type-intro-wrap ">
    
                                <div class="Beer-type-name d-flex">
                                <img src="../images/common/dot-9.svg" alt="">
                                <h3>司陶特Stout</h3>
                                </div>
                                <div class="Beer-type-text">
                                    <p>又稱烈性黑啤酒，是一種由波特啤酒改良而來的深色啤酒，而Stout一名源自法語，原義是強烈的意思，具濃郁烘烤風味，略帶咖啡與巧克力滋味，口味較波特啤酒濃烈。</p>
                                </div>
    
                                <div class="know-more more-btn02">了解更多</div>
                            </div>
    
                        </div>
    
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

        

        <div class="row ">

            <div class="colllection-items-windows col-lg-12 col-12">

                <div class="colllection-items-warp  col-lg-12 col-12">


                    <div class="item item01 col-lg-3 col-12">
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
                    
                    <div class="item item02 col-lg-3 col-12">
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
                    <div class="item item03 col-lg-3 col-12">
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
                    <div class="item item04 col-lg-3 col-12">
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
                    <div class="item item05 col-lg-3 col-12">
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
                    <div class="item item06 col-lg-3 col-12">
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
                    <div class="item item07 col-lg-3 col-12">
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
                    <div class="item item08 col-lg-3 col-12">
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
                    <div class="item item09 col-lg-3 col-12">
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
                    <div class="item item10 col-lg-3 col-12">
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
               <div class="legned-story col-lg-3 col-12">
                   <div class="legned">
                       <h3>以酒<br>會友</h3>
                   </div>
                   <div class="legned-content">
                    <p>酒是最容易讓卸下心防的商品，在啤女裡，你可以找到與你志同道合的酒肉朋友！</p>

                   </div>
                   
               </div>
               <div class="legned-story col-lg-3 col-12">
                   <div class="legned">
                       <h3>信賴<br>專業</h3>
                   </div>
                   <div class="legned-content">
                    <p>我們有世界各國多元的商品，絕對能讓你找到屬於你的那支MR/MS.RIGHT!</p>
                   </div>
                  
               </div>
               <div class="legned-story col-lg-3 col-12">
                   <div class="legned">
                       <h3>學問<br>殿堂</h3>
                   </div>
                   <div class="legned-content">
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



<!-- slick js -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



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
            $('footer').removeClass('OUT');

    
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