<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女-世界精釀啤酒專賣';

$SQL


?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- 這裡插入要放在head的東西 -->
<!-- 包含自己的css和js -->

<link rel="stylesheet" href="../css/all-product/all-product-style.css">
<script src="../js/all-products/all-products.js" defer></script>


<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>
<div class="mobile-menu">
    <?php include __DIR__ . '../../php/common/category.php' ?>
</div>

<!-- 這裡開始寫html -->

<section class="all-product">
    <!-- 輪播Banner -->
    <div class="product-banner d-none d-lg-block">
        <div class="container">
            <div class="row ">
                <div class="product-banner-01  d-flex align-items-center">
                    <div class="col-7 product-banner-pic"><img src="../images/products/Heart of Darkness-01.png" alt=""></div>
                    <div class="col-4 product-banner-intro">
                        <p>奧斯陸 Oslo<span>血橙印度淡愛爾</span></p>
                        <p>Blood Orange IPA</p>
                        <p>這是一款果香味濃郁，相當易飲的美式西岸IPA。使用了滿滿的 Mandarina Bavaria & Cascade
                            啤酒花，加上帶點甜味的血橙果汁。啤酒花跟血橙的搭配將讓你一飲而盡!</p>
                        <a href="">
                            <div class="know-more">了解更多</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 全部商品選擇 -->
    <div class="select-product-wrap ">
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
                                <select name="sort-option" id="mobile-sort-option" class="sort-option">
                                    <option value="new">最新上架商品</option>
                                    <option value="priceup">價格 (由低至高)</option>
                                    <option value="pricedown">價格 (由高至低)</option>
                                    <option value="abvup">酒精濃度 (由低至高)</option>
                                    <option value="abvdown">酒精濃度 (由高至低)</option>
                                </select>
                            </form>
                        </div>
                        <!-- <div class="mobile-sort-item">
                            <label for="m-sort-option-new">
                                <input type="checkbox" id="m-sort-option-new" name="sort-option" value="new"><span>最新上架商品</span>
                            </label>
                            <label for="m-sort-option-priceup">
                                <input type="checkbox" id="m-sort-option-priceup" name="sort-option" value="priceup"><span>價格</span>
                            </label>
                            <label for="m-sort-option-pricedown">
                                <input type="checkbox" id="m-sort-option-pricedown" name="sort-option" value="pricedown"><span>價格</span>
                            </label>
                            <label for="m-sort-option-abvup">
                                <input type="checkbox" id="m-sort-option-abvup" name="sort-option" value="abvup"><span>酒精濃度</span>
                            </label>
                            <label for="m-sort-option-abvdown">
                                <input type="checkbox" id="m-sort-option-abvdown" name="sort-option" value="abvdown"><span>酒精濃度</span>
                            </label>
                        </div> -->
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
                                        <input type="checkbox" id="price-filter-100" name="price-filter" value="100"><span>100元以下</span>
                                    </label><br>
                                    <label for="price-filter-100-150">
                                        <input type="checkbox" id="price-filter-100-150" name="price-filter" value="100-150"><span>100元-150元</span><br>
                                    </label>
                                    <label for="price-filter-150-200">
                                        <input type="checkbox" id="price-filter-150-200" name="price-filter" value="150-200"><span>151元-200元</span><br>
                                    </label>
                                    <label for="price-filter-200-300">
                                        <input type="checkbox" id="price-filter-200-300" name="price-filter" value="200-300"><span>201元-300元</span><br>
                                    </label>
                                    <label for="price-filter-300-500">
                                        <input type="checkbox" id="price-filter-300-500" name="price-filter" value="300-500"><span>300元-500元</span><br>
                                    </label>
                                    <label for="price-filter-500">
                                        <input type="checkbox" id="price-filter-500" name="price-filter" value="500"><span>500元以上</span><br>
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
                                        <input type="checkbox" id="abv-filter-4" name="abv-filter" value="4"><span>低於4%</span>
                                    </label><br>
                                    <label for="abv-filter-4-6">
                                        <input type="checkbox" id="abv-filter-4-6" name="abv-filter" value="4-6"><span>4%-6%</span><br>
                                    </label>
                                    <label for="abv-filter-6-8">
                                        <input type="checkbox" id="abv-filter-6-8" name="abv-filter" value="6-8"><span>6%-8%</span><br>
                                    </label>
                                    <label for="abv-filter-8-10">
                                        <input type="checkbox" id="abv-filter-8-10" name="abv-filter" value="8-10"><span>8%-10%</span><br>
                                    </label>
                                    <label for="abv-filter-10">
                                        <input type="checkbox" id="abv-filter-10" name="abv-filter" value="10"><span>高於10%</span><br>
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
                <div class="col-12 col-lg-9 product-show">
                    <!-- 大標 -->
                    <div class="product-show-title">
                        <p>“ 在啤女，你可以找到<span>一瓶最適合你的精釀啤酒！”</span></p>
                    </div>
                    <!-- 標籤/排序/搜尋 -->
                    <div class="product-header d-flex">

                        <!-- 標籤 -->
                        <div class="col-12 col-lg-6 d-flex align-items-center flex-column flex-lg-row justify-content-center justify-content-lg-start">
                            <div class="product-tag d-flex align-items-center">
                                <div class="tagpic"><img src="../images/country/flag_belgium_square.svg" alt=""></div>
                                <p>#比利時啤酒</p>
                            </div>

                            <!-- 加入關注按鈕 -->
                            <button class="btn_attention"><i class="fas fa-plus"></i>加入關注</button>
                            <!-- <button class="btn_attention_active"><i class="fas fa-check"></i>已關注</button> -->
                        </div>


                        <!-- 排序和搜尋 -->
                        <div class="col-lg-6 d-none d-lg-block product-func d-lg-flex align-items-lg-center justify-content-lg-end">

                            <!-- 排序 -->
                            <div class="sort">
                                <form action="" id="sort">
                                    <select name="sort-option" id="sort-option" class="sort-option">
                                        <option value="new">最新上架商品</option>
                                        <option value="priceup">價格 (由低至高)</option>
                                        <option value="pricedown">價格 (由高至低)</option>
                                        <option value="abvup">酒精濃度 (由低至高)</option>
                                        <option value="abvdown">酒精濃度 (由高至低)</option>
                                    </select>
                                </form>
                            </div>

                            <!-- 搜尋 -->
                            <div class="p_search">
                                <i class="fas fa-search"></i>
                                <input type="text" class="search2" placeholder="搜尋啤酒">
                            </div>

                        </div>
                    </div>
                    <!-- 商品排列 -->
                    <div class="product-arrang d-flex  flex-wrap">
                        <!-- 單支商品 -->
                    </div>

                    <!-- 頁碼 -->
                    <!-- <div class="product-pages d-flex justify-content-center">
                        <a href=""><button class="btn_page page-first"><i class="fas fa-angle-double-left"></i></button></a>
                        <a href=""><button class="btn_page page-prev"><i class="fas fa-angle-left"></i></button></a>
                        <div class="pages-show ">
                            <div class="pages d-flex">
                                <a href="">
                                    <p class="page">1</p>
                                </a>
                                <a href="">
                                    <p class="page">2</p>
                                </a>
                                <a href="">
                                    <p class="page">3</p>
                                </a>
                                <a href="">
                                    <p class="page">4</p>
                                </a>
                                <a href="">
                                    <p class="page">5</p>
                                </a>
                                <a href="">
                                    <p class="page">6</p>
                                </a>
                                <a href="">
                                    <p class="page">7</p>
                                </a>
                                <a href="">
                                    <p class="page">8</p>
                                </a>
                                <a href="">
                                    <p class="page">9</p>
                                </a>
                                <a href="">
                                    <p class="page">10</p>
                                </a>
                                <a href="">
                                    <p class="page">11</p>
                                </a>
                                <a href="">
                                    <p class="page">12</p>
                                </a>
                                <a href="">
                                    <p class="page">13</p>
                                </a>
                                <a href="">
                                    <p class="page">14</p>
                                </a>
                                <a href="">
                                    <p class="page">15</p>
                                </a>
                            </div>
                        </div>
                        <a href=""><button class="btn_page page-next"><i class="fas fa-angle-right"></i></button></a>
                        <a href=""><button class="btn_page page-last"><i class="fas fa-angle-double-right"></i></button></a>
                    </div> -->
                </div>
            </div>

        </div>
</section>





<?php include __DIR__ . '../../php/common/html-body-footer.php' ?>
<?php include __DIR__ . '../../php/common/script.php' ?>
<!-- 這裡開始寫jQuery或JS -->

<script>
    let cate = 0;
    let page = 1;
    let p_data = {};
    let product_arrang = $('.product-arrang')

    // 設定一個產品介紹的字樣
    const productTpl = p => {
        return `
        <div class="col-12 col-lg-6 col-xl-4 beer-product-wrap">
                            <div class="beer-product">
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
                                        <button class="btn_collect"><i class="far fa-heart"></i></button>
                                        <!-- <button class="btn_collect_active"><i class="fas fa-heart"></i></button> -->
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
                                            <p>$${p.price}</p>
                                        </div>
                                        <!-- 加入購物車按鈕 -->
                                        <button class="col-7 add-cart"><i class="fas fa-shopping-bag"></i>加入購物車</button>
                                    </div>
                                </div>
                            </div>
                        </div>
        `
    }



    // 用ajax撈資料
    $.get('all-product-api.php', {
        cate,
        page
    }, function(data) {
        // console.log(data)
        p_data = data //把資料拉到全域變數
        renderProducts()
    }, 'json')

    // 產生產品畫面
    function renderProducts() {
        product_arrang.html('')
        if (p_data.rows && p_data.rows.forEach) {
            p_data.rows.forEach(el => {
                product_arrang.append(productTpl(el))
                let ishot = el.hot  //抓熱門的值
                let created_at = Date.parse(el.created_at).valueOf() //抓建立時間
                let deadline = Date.parse('2021-04-10').valueOf() //設定要有new標籤的時間點
                let product_label = $(`.${el.sid}-label`)

                const labelTpl = function() {

                    // 有hot沒有new
                    if ( ishot == 'true' && created_at >= deadline == false) {
                        return `
                        <div class="hot-label">
                            <p>HOT</p>
                        </div>
                        `
                    }

                    // 有new沒有hot
                    if( created_at >= deadline && ishot == 'false'){
                        return `
                        <div class="new-label">
                            <p>NEW</p>
                        </div>
                        `
                    }

                    // 兩者都有
                    if( ishot == 'true' && created_at >= deadline){
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
                product_label.append(labelTpl())

            })
        }
    }
</script>

<?php include __DIR__ . '../../php/common/html-end.php' ?>