<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女BeerU-全部商品';


?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- 這裡插入要放在head的東西 -->
<!-- 包含自己的css和js -->

<link rel="stylesheet" href="../css/all-product/all-product-style.css">
<link rel="stylesheet" href="../css/all-product/all-product-anima.css">
<script src="../js/all-products/all-products.js" defer></script>


<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>
<!-- 會員登入 -->
<?php include __DIR__ . '../../php/common/Login-Sign.php' ?>
<?php include __DIR__ . '../../php/common/pop-up-1.php' ?>
<?php include __DIR__ . '../../php/common/pop-up-2.php' ?>
<section class="mobile-menu">
    <?php include __DIR__ . '../../php/common/category.php' ?>
</section>

<!-- 這裡開始寫html -->

<section class="all-product">
    <!-- return to top -->
    <a href="javascript:" id="return-to-top"><img src="../images/common/top.svg" alt=""></a>
    <!-- 輪播Banner -->
    <div class="product-banner d-none d-lg-block">
        <div class="container">
            <div class="row ">
                <div class="product-banner-box product-banner-01  d-flex align-items-center">
                    <div class="col-7 product-banner-pic"><img src="../images/products/Brewlander 01.png" alt=""></div>
                    <div class="col-4 product-banner-intro">
                        <p>釀酒島主<img src="../images/brands/logo_beer_brewlander.svg" alt=""><span>希望夏日愛爾</span></p>
                        <p>Brewlander-Hope Summer</p>
                        <p>HOPE是一款喝了會讓你對明天感到興奮，充滿期待的啤酒，它會讓你想起夏天的太陽與果香飄逸的橘子園！這款夏日愛爾清脆爽口，無論是配著烈日炎炎的午休，或是夕陽西下的泳池畔暢飲都非常合適喔！</p>
                        <a href="each-product.php?psid=40">
                            <div class="know-more">了解更多</div>
                        </a>
                    </div>
                </div>
                <div class="product-banner-box product-banner-02  d-flex align-items-center">
                    <div class="col-7 product-banner-pic"><img src="../images/products/MT-Dream Speaker.png" alt=""></div>
                    <div class="col-4 product-banner-intro">
                        <p>摩登時代<img src="../images/brands/logo_beer_modern times.svg" alt=""><span>作夢也要喝NEIPA</span></p>
                        <p>Modern Times-Dream Speaker</p>
                        <p>本酒款在麥芽比例上用盡心機，先層了二稜麥芽與白雪小麥，再層了燕麥片與焦糖泡沫麥芽，聽了就覺得泡沫綿密，酒體肯定滑順乾爽，再層上去芒果，柳橙、萊姆等熱帶果香與多汁口感。</p>
                        <a href="each-product.php?psid=202">
                            <div class="know-more">了解更多</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 全部商品選擇 -->
    <div id="select-allproduct" class="select-allproduct select-product-wrap ">
        <div class="container-fluid">
            <div class="row ">

                <!-- 左邊分類區塊 -->
                <div class="col-lg-2 product-select ">

                    <!-- 產品類別 -->
                    <?php include __DIR__ . '../../php/common/category.php' ?>

                    <!-- 產品排序 僅手機顯示-->
                    <div class="mobile-product-sort d-block d-lg-none">
                        <div class="mobile-sort-title">
                            <i class="fas fa-sort-amount-down"></i>
                        </div>
                        <div class="mobile-sort-item">
                            <form action="" id="mobile-sort">
                                <select name="sort-option" id="mobile-sort-option" class="sort-option" onchange="changeSortM()">
                                    <option value="1">最新上架商品</option>
                                    <option value="2">價格 (由低至高)</option>
                                    <option value="3">價格 (由高至低)</option>
                                    <option value="4">酒精濃度 (由低至高)</option>
                                    <option value="5">酒精濃度 (由高至低)</option>
                                </select>
                            </form>
                        </div>
                    </div>

                    <!-- 產品篩選 -->
                    <div class="product-filter">
                        <div class="filter-title">
                            <i class="fas fa-filter"></i>
                            <p>商品篩選</p>
                        </div>
                        <div class="filter d-flex flex-wrap">
                            <!-- 價格 -->
                            <div class="col-lg-12 filter-item filter-price">
                                <div class="filter-name d-flex justify-content-between">
                                    <p>價格</p>
                                </div>
                                <div class="filter-sub-item-warp">
                                    <label for="price-filter-100">
                                        <input type="checkbox" id="price-filter-100" name="price-filter" value="1"><span data-value="1">100元以下</span>
                                    </label><br>
                                    <label for="price-filter-100-150">
                                        <input type="checkbox" id="price-filter-100-150" name="price-filter" value="2"><span data-value="2">100元-150元</span><br>
                                    </label>
                                    <label for="price-filter-150-200">
                                        <input type="checkbox" id="price-filter-150-200" name="price-filter" value="3"><span data-value="3">150元-200元</span><br>
                                    </label>
                                    <label for="price-filter-200-300">
                                        <input type="checkbox" id="price-filter-200-300" name="price-filter" value="4"><span data-value="4">200元-300元</span><br>
                                    </label>
                                    <label for="price-filter-300-500">
                                        <input type="checkbox" id="price-filter-300-500" name="price-filter" value="5"><span data-value="5">300元-500元</span><br>
                                    </label>
                                    <label for="price-filter-500">
                                        <input type="checkbox" id="price-filter-500" name="price-filter" value="6"><span data-value="6">500元以上</span><br>
                                    </label>
                                </div>
                            </div>
                            <!-- 酒精濃度 -->
                            <div class="col-lg-12 filter-item filter-abv">
                                <div class="filter-name d-flex justify-content-between">
                                    <p>酒精濃度</p>
                                </div>
                                <div class="filter-sub-item-warp">
                                    <label for="abv-filter-4">
                                        <input type="checkbox" id="abv-filter-4" name="abv-filter" value="1"><span data-value="1">低於4%</span>
                                    </label><br>
                                    <label for="abv-filter-4-6">
                                        <input type="checkbox" id="abv-filter-4-6" name="abv-filter" value="2"><span data-value="2">4%-6%</span><br>
                                    </label>
                                    <label for="abv-filter-6-8">
                                        <input type="checkbox" id="abv-filter-6-8" name="abv-filter" value="3"><span data-value="3">6%-8%</span><br>
                                    </label>
                                    <label for="abv-filter-8-10">
                                        <input type="checkbox" id="abv-filter-8-10" name="abv-filter" value="4"><span data-value="4">8%-10%</span><br>
                                    </label>
                                    <label for="abv-filter-10">
                                        <input type="checkbox" id="abv-filter-10" name="abv-filter" value="5"><span data-value="5">高於10%</span><br>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 小標籤 -->
                    <div class="fixed-btn d-block d-lg-none">
                        <p>排序</p>
                        <p>篩選</p>
                    </div>

                </div>


                <!-- 右邊商品區塊 -->
                <div class="col-12 col-lg-9 product-show ">
                    <!-- 大標 -->
                    <div class="product-show-title w-scrollin-anima ">
                        <p>“ 在啤女，你可以找到<span>一瓶最適合你的精釀啤酒！”</span></p>
                    </div>
                    <!-- 標籤/排序/搜尋 -->
                    <div class="product-header d-flex w-scrollin-start">

                        <!-- 標籤 -->
                        <div class="col-12 col-lg-6 d-flex align-items-center flex-column flex-lg-row justify-content-center justify-content-lg-start">
                            <div class="product-tag d-flex align-items-center">
                            </div>

                            <div class="btn_attention_wrap d-none">
                                <!-- 加入關注按鈕 -->
                            </div>

                        </div>


                        <!-- 排序和搜尋 -->
                        <div class="col-lg-6 d-none d-lg-block product-func d-lg-flex align-items-lg-center justify-content-lg-end">

                            <!-- 排序 -->
                            <div class="sort">
                                <form action="" id="sort" name="sort">
                                    <select name="sort-option" id="sort-option" class="sort-option" onchange="changeSort()">
                                        <option value="1">最新上架商品</option>
                                        <option value="2">價格 (由低至高)</option>
                                        <option value="3">價格 (由高至低)</option>
                                        <option value="4">酒精濃度 (由低至高)</option>
                                        <option value="5">酒精濃度 (由高至低)</option>
                                    </select>
                                </form>
                            </div>

                            <!-- 搜尋 -->
                            <div class="p_search">
                                <i class="fas fa-search"></i>
                                <input type="text" id="search2" class="search2" placeholder="搜尋啤酒">
                            </div>

                        </div>
                    </div>
                    <!-- 商品排列 -->
                    <div class="product-arrang d-flex  flex-wrap w-scrollin-start">
                        <!-- 單支商品 -->
                    </div>

                    <!-- 頁碼 -->
                    <div class="product-pages d-flex justify-content-center">
                        <button class="btn_page page-first" onclick="changePage(1)"><i class="fas fa-angle-double-left"></i></button>
                        <button class="btn_page page-prev" onclick="prevPage()"><i class="fas fa-angle-left"></i></button>
                        <div class="pages-show ">
                            <div class="pages d-flex">
                            </div>
                        </div>
                        <button class="btn_page page-next" onclick="nextPage()"><i class="fas fa-angle-right"></i></button>
                        <button class="btn_page page-last" onclick="lastPage()"><i class="fas fa-angle-double-right"></i></button>
                    </div>
                </div>
            </div>

        </div>
</section>







<?php include __DIR__ . '../../php/common/html-body-footer.php' ?>
<?php include __DIR__ . '../../php/common/script.php' ?>
<!-- 這裡開始寫jQuery或JS -->


<script>
    // Scroll to top button 
    // 桌機版 
    if ($(window).width() >= 992) {
        $(window).scroll(function() {

            if ($(this).scrollTop() >= 5) {
                $('#return-to-top').fadeIn(200);
            } else {
                $('#return-to-top').fadeOut(500);
            }
        })

        $('#return-to-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 750, 'swing');

        })

    }

    // 手機版
    if ($(window).width() < 992) {
        $(window).scroll(function() {
            // console.log($(this).scrollTop())
            if ($(this).scrollTop() >= 15) {
                $('#return-to-top').fadeIn(200);
            } else {
                $('#return-to-top').fadeOut(500);
            }


        })

        $('#return-to-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 750, 'swing');
        })
    }
    let cate = 0;
    let page = 1;
    let hot = 0;
    let order = 1;
    let filterPrice = 0;
    let filterABV = 0;
    let userSearch = '';
    let p_data = {};
    let product_arrang = $('.all-product .product-arrang')
    let pages_wrap = $('.all-product .pages')
    let product_tag = $('.all-product .product-tag')
    let btn_attention = $('.all-product .btn_attention_wrap')
    let btn_pages = $('.all-product .btn_page')
    let btn_cates = $('.product-category .category-sub-item')
    let btn_first_cates = $('.product-category .category-out-item')


    // -------------------------------------------------------

    // 設定一個產品介紹的字樣
    const allproductTpl = p => {
        return `
        <div class="col-12 col-lg-6 col-xl-4 beer-product-wrap">
                            <div class="beer-product" data-sid=${p.sid} data-price=${p.price} data-abv=${p.abv}>
                                <div class="pro-pic">
                                    <!-- 商品圖 -->
                                    <a href="each-product.php?psid=${p.sid}">
                                        <img class="beer-pic" src="../images/products/${p.pic}" alt="">
                                    </a>
                                    <!-- 標籤 -->
                                    <div class="label ${p.sid}-label">
                                    </div>

                                    <!-- 國家圖片 -->
                                    <div class="country"><img src="../images/country/${p.country_pic}" alt=""></div>

                                    <!-- 收藏按鈕 -->
                                    <div class="collect">
                                        <?php if (!isset($_SESSION['user'])) : ?>
                                        <button class="btn_collect_nologin" onclick="LogIn_btn()" ><i class="far fa-heart"></i></button>
                                        <?php else : ?>
                                        <button class="btn_collect"><i class="far fa-heart"></i></button>
                                        <button class="btn_collect_active d-none"><i class="fas fa-heart"></i></button>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- 商品介紹 -->
                                <div class="pro-intro d-flex flex-column justify-content-between">
                                    <!-- 商品名稱 -->
                                    <a href="each-product.php?psid=${p.sid}">
                                        <div class="p-name">
                                            <p class="p-name-c">${p.c_name}</p>
                                            <p class="p-name-e">${p.e_name}</p>
                                        </div>
                                    </a>
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
                                            <p class="price" >$${p.price}</p>
                                        </div>
                                        <!-- 加入購物車按鈕 -->
                                        <button class="col-7 add-cart"><i class="fas fa-shopping-bag"></i>加入購物車</button>
                                    </div>
                                </div>
                            </div>
                        </div>
        `
    }
    const allproductTpl2 = p => {
        return `
        <div class="col-12 col-lg-6 col-xl-4 beer-product-wrap">
                            <div class="beer-product" data-sid=${p.sid} data-price=${p.price} data-abv=${p.abv}>
                                <div class="pro-pic">
                                    <!-- 商品圖 -->
                                    <a href="each-product.php?psid=${p.sid}">
                                        <img class="beer-pic" src="../images/products/${p.pic}" alt="">
                                    </a>
                                    <!-- 標籤 -->
                                    <div class="label ${p.sid}-label">
                                    </div>

                                    <!-- 國家圖片 -->
                                    <div class="country"><img src="../images/country/${p.country_pic}" alt=""></div>

                                    <!-- 收藏按鈕 -->
                                    <div class="collect">
                                        <?php if (!isset($_SESSION['user'])) : ?>
                                        <button class="btn_collect_nologin" onclick="LogIn_btn()" ><i class="far fa-heart"></i></button>
                                        <?php else : ?>
                                        <button class="btn_collect d-none"><i class="far fa-heart"></i></button>
                                        <button class="btn_collect_active"><i class="fas fa-heart"></i></button>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- 商品介紹 -->
                                <div class="pro-intro d-flex flex-column justify-content-between">
                                    <!-- 商品名稱 -->
                                    <a href="each-product.php?psid=${p.sid}">
                                        <div class="p-name">
                                            <p class="p-name-c">${p.c_name}</p>
                                            <p class="p-name-e">${p.e_name}</p>
                                        </div>
                                    </a>
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
                                            <p class="price" >$${p.price}</p>
                                        </div>
                                        <!-- 加入購物車按鈕 -->
                                        <button class="col-7 add-cart"><i class="fas fa-shopping-bag"></i>加入購物車</button>
                                    </div>
                                </div>
                            </div>
                        </div>
        `
    }

    // 設定一個頁碼的字樣
    const allpageTpl = n => {
        // console.log('window.location.href =', window.location.href);
        const start = window.location.href.indexOf('page=', 0);
        const end = window.location.href.indexOf('&', start);
        const findpage = +window.location.href.substring(start + 5, end);
        const page = (findpage) ? findpage : 1;
        // console.log('page=', window.location.href.substring(start + 5, end));
        // console.log('start', start, ',end:', end);
        return `<a href="javascript: changePage(${n})" class="page ${ n === page ? 'page-on':''}">
                  <p>${n}</p>
                 </a>`
    }

    // 設定一個關注標籤的字樣
    const allproductTag = t => {
        return `
            <div class="tagpic"><img src="../images/tagespic/${t.cate}.svg" alt=""></div>
            <p data-cate="${t.cate}" >#${t.cate_name}</p>
        `
    }
    // 設定一個關注按鈕的字樣
    const btnAttentionTPL = t => {
        return `
        <?php if (!isset($_SESSION['user'])) : ?>
           <button class="btn_attention btn_attention_nologin" onclick="LogIn_btn()"><i class="fas fa-plus"></i>加入關注</button>
        <?php else : ?>
           <button class="btn_attention btn_attention_be"><i class="fas fa-plus"></i>加入關注</button>
           <button class="btn_attention_active d-none"><i class="fas fa-check"></i>已關注</button>
        <?php endif; ?>
        `
    }
    const btnAttentionTPL2 = t => {
        return `
        <?php if (!isset($_SESSION['user'])) : ?>
           <button class="btn_attention btn_attention_nologin" onclick="LogIn_btn()"><i class="fas fa-plus"></i>加入關注</button>
        <?php else : ?>
            <button class="btn_attention btn_attention_be d-none"><i class="fas fa-plus"></i>加入關注</button>
           <button class="btn_attention_active"><i class="fas fa-check"></i>已關注</button>
        <?php endif; ?>
        `
    }


    // 往上滑到產品開頭
    const toProductTop = function() {
        $('html, body').animate({
            scrollTop: $('.all-product .select-allproduct').offset().top
        }, 300, 'swing');
    }




    // -------------------------------------------------------
    // 用ajax撈資料
    function getallproductData() {
        $.get('all-product-api.php', {
            cate,
            page,
            hot,
            order,
            filterPrice,
            filterABV,
            userSearch,
        }, function(data) {
            // console.log(data)
            p_data = data //把資料拉到全域變數
            renderallProducts()

            // -------------------------------------------
            // 頁碼部分
            // 如果商品只有1頁，分頁按鈕隱藏
            if (p_data.total_pages == 1) {
                $('.all-product .product-pages').css('opacity', 0)
            } else {
                renderallPages()
                $('.all-product .product-pages').css('opacity', 1)
            }
            // 在最後一頁的時候
            if (page == p_data.total_pages) {
                $('.all-product .page-next').addClass('btn_disabled').attr('disabled', true)
                $('.all-product .page-last').addClass('btn_disabled').attr('disabled', true)
                $('.all-product .page-first').removeClass('btn_disabled').attr('disabled', false)
                $('.all-product .page-prev').removeClass('btn_disabled').attr('disabled', false)
            }
            // 在第一頁的時候
            if (page == 1) {
                $('.all-product .page-first').addClass('btn_disabled').attr('disabled', true)
                $('.all-product .page-prev').addClass('btn_disabled').attr('disabled', true)
                $('.all-product .page-next').removeClass('btn_disabled').attr('disabled', false)
                $('.all-product .page-last').removeClass('btn_disabled').attr('disabled', false)
            }

            // -------------------------------------------
            // tag部分
            //國家/酒廠/類型
            if (p_data.cate != 0) {
                product_tag.html('')
                renderallTags()
                $('.all-product .btn_attention_wrap').removeClass('d-none')

                // 啤酒杯，隱藏關注按鈕
                if (p_data.cate == 54 || p_data.cate == 53) {
                    $('.all-product .btn_attention_wrap').addClass('d-none')
                }
            }
            // 熱門商品/全部商品
            else {
                $('.all-product .btn_attention_wrap').addClass('d-none')
            }



        }, 'json')
    }

    // 設定一進入全部商品頁的樣貌
    init()

    function getURL(cate, page, hot, order, userSearch) {

        if (userSearch == undefined || userSearch == '') {
            let url = location.pathname + '?cate=' + cate + '&page=' + page + '&hot=' + hot + '&order=' + order
            history.pushState({
                url: url,
                title: document.title
            }, document.title, url)
        } else {
            let url = location.pathname + '?search=' + userSearch
            history.pushState({
                url: url,
                title: document.title
            }, document.title, url)
        }

    }

    function init() {

        if (location.search.indexOf('search') == -1) {
            let num_g = location.search.match(/\d+/g)
            if (num_g == null) {
                getallproductData()
            } else {
                cate = num_g[0] ?? 0
                page = num_g[1] ?? 1
                hot = num_g[2] ?? 0
                order = num_g[3] ?? 1
                filterPrice = 0
                filterABV = 0
                userSearch = ''

                if (hot == 1) {
                    getallproductData()
                    toProductTop()
                    $('#sort-option').val(order)
                    $('#mobile-sort-option').val(order)
                    product_tag.html(` 
        <div class="tagpic"><img src="../images/tagespic/hot.svg" alt=""></div>
            <p>#熱門商品</p>
        `)
                } else if (cate == 0) {
                    product_tag.html('')
                    getallproductData()
                    toProductTop()
                    $('#sort-option').val(order)
                    $('#mobile-sort-option').val(order)
                } else {
                    getallproductData()
                    toProductTop()
                    $('#sort-option').val(order)
                    $('#mobile-sort-option').val(order)
                }
            }
        }


        if (location.search.indexOf('search') == 1) {
            let search_g = location.search.substr(8)
            if (search_g != '') {
                cate = 0
                page = 1
                hot = 0
                order = 1
                filterPrice = 0
                filterABV = 0
                userSearch = search_g

                getallproductData()
                toProductTop()
                product_tag.html(` 
        <div class="tagpic"><img src="../images/common/userhasSearch.svg" alt=""></div>
            <p class="userSearch">您已查詢：<span class="userSearch-txt" >${decodeURI(userSearch)}</span></p>
        `)

                $('#search2').val(decodeURI(userSearch))
            }
        }


    }

    // 回上一頁
    window.onpopstate = function() {
        init()
    }


    // -------------------------------------------------------
    // 分類按鈕事件

    // 酒廠/國家/類型/周邊
    btn_cates.on('click', function() {
        cate = $(this).attr('data-sid')
        page = 1
        hot = 0
        order = 1
        filterPrice = 0
        filterABV = 0
        userSearch = ''

        // 抓資料
        getallproductData()
        toProductTop()
        getURL(cate, page, hot, order)

        // input/select/checkbox回復
        $('#sort-option').val(1)
        $('#mobile-sort-option').val(1)
        $('.filter-price input').prop('checked', false)
        $('.filter-abv input').prop('checked', false)
        $('#search2').val('')

        // 樣式
        pages_wrap.css('transform', 'translateX(0px)')
        $('.product-category').removeClass('on')
        $('.trigger span').removeClass('on')
        $(this).addClass('on').siblings().removeClass('on')
        $(this).parent().parent().siblings().find('.category-sub-item').removeClass('on')
        btn_first_cates.removeClass('on')
    })

    // 熱門商品
    $('.selectHotitem').on('click', function() {
        hot = 1
        page = 1
        cate = 0
        order = 1
        filterPrice = 0
        filterABV = 0
        userSearch = ''

        // 抓資料
        getallproductData()
        toProductTop()
        getURL(cate, page, hot, order)

        // input/select/checkbox回復
        $('#sort-option').val(1)
        $('#mobile-sort-option').val(1)
        $('.filter-price input').prop('checked', false)
        $('.filter-abv input').prop('checked', false)
        $('#search2').val('')

        // 樣式
        pages_wrap.css('transform', 'translateX(0px)')
        product_tag.html(` 
        <div class="tagpic"><img src="../images/tagespic/hot.svg" alt=""></div>
            <p>#熱門商品</p>
        `)
        $('.product-category').removeClass('on')
        $('.trigger span').removeClass('on')
    })

    // 全部商品
    $('.selectallitem').on('click', function() {
        cate = 0
        page = 1
        hot = 0
        order = 1
        filterPrice = 0
        filterABV = 0
        userSearch = ''

        // 抓資料
        getallproductData()
        toProductTop()
        getURL(cate, page, hot, order)

        // input/select/checkbox回復
        $('#sort-option').val(1)
        $('#mobile-sort-option').val(1)
        $('.filter-price input').prop('checked', false)
        $('.filter-abv input').prop('checked', false)
        $('#search2').val('')

        // 樣式
        pages_wrap.css('transform', 'translateX(0px)')
        product_tag.html('')
        $('.product-category').removeClass('on')
        $('.trigger span').removeClass('on')
    })

    // 選取樣式active
    btn_first_cates.on('click', function() {
        $(this).addClass('on').parent().siblings().find('.category-out-item').removeClass('on')
        btn_cates.removeClass('on')
    })





    // -------------------------------------------------------
    // 排序事件
    function changeSort() {

        order = $('#sort-option').val()
        page = 1
        getallproductData()
        toProductTop()
        getURL(cate, page, hot, order, userSearch)
        pages_wrap.css('transform', 'translateX(0px)')

    }


    // 手機-排序與篩選的按鈕
    $('.fixed-btn').on('click', function() {
        $(this).parent('.product-select').toggleClass('on')
    })

    function changeSortM() {

        order = $('#mobile-sort-option').val()
        page = 1
        getallproductData()
        toProductTop()
        getURL(cate, page, hot, order, userSearch)
        pages_wrap.css('transform', 'translateX(0px)')
        $('.product-select').removeClass('on')

    }




    // -------------------------------------------------------
    // 篩選事件
    $('.filter-price span').on('click', function() {

        // console.log($(this).prev().prop('checked'))

        if ($(this).prev().prop('checked') == false) {
            $(this).closest('label').siblings().find('input').prop('checked', false)

            filterPrice = $(this).attr('data-value')
            page = 1
            getallproductData()
            toProductTop()
        } else {
            filterPrice = 0
            page = 1
            getallproductData()
            toProductTop()
        }
        $('.product-select').removeClass('on')

    })
    $('.filter-abv span').on('click', function() {

        // console.log($(this).prev().prop('checked'))

        if ($(this).prev().prop('checked') == false) {
            $(this).closest('label').siblings().find('input').prop('checked', false)

            filterABV = $(this).attr('data-value')
            page = 1
            getallproductData()
            toProductTop()
        } else {
            filterABV = 0
            page = 1
            getallproductData()
            toProductTop()
        }
        $('.product-select').removeClass('on')
    })



    // -------------------------------------------------------
    // 查詢事件
    $('#search2').on('keypress', function(event) {
        let pressBtn = event.keyCode
        if (pressBtn == 13 && $(this).val() != "") {
            userSearch = $(this).val()
            cate = 0
            page = 1
            hot = 0
            order = 1
            filterPrice = 0
            filterABV = 0

            getallproductData()
            toProductTop()
            getURL(cate, page, hot, order, userSearch)
            product_tag.html(` 
        <div class="tagpic"><img src="../images/common/userhasSearch.svg" alt=""></div>
            <p class="userSearch">您已查詢：<span class="userSearch-txt" >${userSearch}</span></p>
        `)
        }

    })



    // -------------------------------------------------------

    // 分頁按鈕事件
    function changePage(p) {
        page = p
        getallproductData()
        toProductTop()
        getURL(cate, page, hot, order)
        btn_pages.removeClass('btn_disabled').removeAttr('disabled', false)

        if ($(window).width() >= 992) {
            if (page == 10 && p_data.total_pages > 10) {
                if (pages_wrap.css('transform') == 'none' || pages_wrap.css('transform') == "matrix(1, 0, 0, 1, 0, 0)") {
                    pages_wrap.css('transform', 'translateX(-315px)')
                } else if (pages_wrap.css('transform') == "matrix(1, 0, 0, 1, -315, 0)") {
                    pages_wrap.css('transform', 'translateX(0px)')
                }

            }

            if (page == 1) {
                pages_wrap.css('transform', 'translateX(0px)')
            }
        }

        if ($(window).width() < 992) {
            if (p_data.total_pages > 4 && page < 18) {
                pages_wrap.css('transform', `translateX(-` + (page - 2) * 35 + `px)`)
            }
            if (page == 1) {
                pages_wrap.css('transform', 'translateX(0px)')
            }
        }







    }

    function prevPage() {
        page = ($('.all-product .page-on').find('p').text() * 1) - 1
        if (page < 1) {
            page = 1
        }
        getallproductData()
        toProductTop()
        getURL(cate, page, hot, order)
        btn_pages.removeClass('btn_disabled').removeAttr('disabled', false)

        if ($(window).width() >= 992) {
            if (page <= 10 && p_data.total_pages > 10) {
                pages_wrap.css('transform', 'translateX(0px)')
            }
        }
        if ($(window).width() < 992) {
            if (p_data.total_pages > 4 && page < 18) {
                pages_wrap.css('transform', `translateX(-` + (page - 2) * 35 + `px)`)
            }
        }



    }

    function nextPage() {
        page = ($('.all-product .page-on').find('p').text() * 1) + 1
        if (page > p_data.total_pages) {
            page = p_data.total_pages
        }
        getallproductData()
        toProductTop()
        getURL(cate, page, hot, order)
        btn_pages.removeClass('btn_disabled').removeAttr('disabled', false)

        if ($(window).width() >= 992) {
            if (page >= 10 && p_data.total_pages > 10) {
                pages_wrap.css('transform', 'translateX(-315px)')
            }
        }
        if ($(window).width() < 992) {
            if (p_data.total_pages > 4 && page < 18) {
                pages_wrap.css('transform', `translateX(-` + (page - 2) * 35 + `px)`)
            }
        }
    }

    function lastPage() {
        page = p_data.total_pages
        getallproductData()
        toProductTop()
        getURL(cate, page, hot, order)
        btn_pages.removeClass('btn_disabled').removeAttr('disabled', false)
        if ($(window).width() >= 992) {
            if (p_data.total_pages > 10) {
                pages_wrap.css('transform', 'translateX(-315px)')
            }
        }
        if ($(window).width() < 992) {
            if (p_data.total_pages > 4) {
                pages_wrap.css('transform', `translateX(-` + (page - 4) * 35 + `px)`)
            }
        }
    }




    // -------------------------------------------------------
    // 產生產品畫面
    function renderallProducts() {
        product_arrang.html('')
        if (p_data.rows && p_data.rows.forEach) {
            p_data.rows.forEach(el => {

                let psid = el.sid
                // 判斷商品有沒有被收藏
                if (p_data.collect.indexOf(psid) > -1) {
                    product_arrang.append(allproductTpl2(el))
                } else {
                    product_arrang.append(allproductTpl(el))
                }



                let ishot = el.hot //抓熱門的值
                let created_at = Date.parse(el.created_at).valueOf() //抓建立時間
                let deadline = Date.parse('2021-05-15').valueOf() //設定要有new標籤的時間點
                let product_label = $(`.${el.sid}-label`)

                const alllabelTpl = function() {

                    // 有hot沒有new
                    if (ishot == 'true' && created_at >= deadline == false) {
                        return `
                        <div class="hot-label">
                            <p>HOT</p>
                        </div>
                        `
                    }

                    // 有new沒有hot
                    if (created_at >= deadline && ishot == 'false') {
                        return `
                        <div class="new-label">
                            <p>NEW</p>
                        </div>
                        `
                    }

                    // 兩者都有
                    if (ishot == 'true' && created_at >= deadline) {
                        return `
                        <div class="new-label">
                            <p>NEW</p>
                        </div>
                        <div class="hot-label">
                            <p>HOT</p>
                        </div>
                        `
                    }

                }
                product_label.append(alllabelTpl())

            })
        }
    }

    // 產生頁碼畫面
    function renderallPages() {

        pages_wrap.html('')
        for (let i = 1; i <= p_data.total_pages; i++) {
            pages_wrap.append(allpageTpl(i))
        }

    }

    // 產生標籤畫面
    function renderallTags() {
        product_tag.html('')
        product_tag.append(allproductTag(p_data))
        btn_attention.html('')
        if (p_data.attention == true) {
            btn_attention.html(btnAttentionTPL2())
        } else {
            btn_attention.html(btnAttentionTPL())
        }
    }
</script>

<?php include __DIR__ . '../../php/common/html-end.php' ?>