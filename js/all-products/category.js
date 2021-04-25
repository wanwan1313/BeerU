$(function () {

    let cate = 0;
    let page = 1;
    let hot = 0;
    let order = '`created_at` DESC';
    let p_data = {};
    let product_arrang = $('.all-product .product-arrang')
    let pages_wrap = $('.all-product .pages')
    let product_tag = $('.all-product .product-tag')
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

    // 設定一個頁碼的字樣
    const allpageTpl = n => {
        return `<a href="javascript: changePage(${n})" class="page ${n === page ? 'page-on' : ''}">
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

    const toProductTop = function () {
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
            order
        }, function (data) {
            // console.log(data)
            p_data = data //把資料拉到全域變數
            renderallProducts()
            if (p_data.total_pages == 1) {
                $('.all-product .product-pages').css('opacity', 0)
            } else {
                renderallPages()
                $('.all-product .product-pages').css('opacity', 1)
            }
            if (page == p_data.total_pages) {
                $('.all-product .page-next').addClass('btn_disabled').attr('disabled', true)
                $('.all-product .page-last').addClass('btn_disabled').attr('disabled', true)
            }
            if (page == 1) {
                $('.all-product .page-first').addClass('btn_disabled').attr('disabled', true)
                $('.all-product .page-prev').addClass('btn_disabled').attr('disabled', true)
            }

            if (p_data.cate != 0) {
                product_tag.html('')
                renderallTags()
                $('.all-product .btn_attention').css('display', 'block')

                if (p_data.cate == 54) {
                    $('.all-product .btn_attention').css('display', 'none')
                }
            } else {

                $('.all-product .btn_attention').css('display', 'none')
            }



        }, 'json')
    }

    // 設定一進入全部商品頁的樣貌
    if ($(window).width() >= 992) {
        getallproductData()
    }








    // -------------------------------------------------------
    // 分類按鈕事件

    // 酒廠/國家/類型/周邊
    btn_cates.on('click', function () {
        let mypage_title = document.title
        if (mypage_title != "啤女-精釀啤酒商品") {
            location.href = 'all-product.php'
        }

        cate = $(this).attr('data-sid')
        page = 1
        hot = 0
        getallproductData()
        toProductTop()

        $('.product-category').removeClass('on')
        $('.trigger span').removeClass('on')

        $(this).addClass('on').siblings().removeClass('on')
        $(this).parent().parent().siblings().find('.category-sub-item').removeClass('on')
        btn_first_cates.removeClass('on')
    })

    // 熱門商品
    $('.selectHotitem').on('click', function () {
        let mypage_title = document.title
        if (mypage_title != "啤女-精釀啤酒商品") {
            location.href = 'all-product.php'
        }

        hot = 1
        page = 1
        cate = 0
        getallproductData()
        toProductTop()

        product_tag.html(` 
        <div class="tagpic"><img src="../images/tagespic/hot.svg" alt=""></div>
            <p>#熱門商品</p>
        `)

        $('.product-category').removeClass('on')
        $('.trigger span').removeClass('on')
    })

    // 全部商品
    $('.selectallitem').on('click', function () {
        let mypage_title = document.title
        if (mypage_title != "啤女-精釀啤酒商品") {
            location.href = 'all-product.php'
        }

        cate = 0
        page = 1
        hot = 0
        product_tag.html('')
        getallproductData()
        toProductTop()

        $('.product-category').removeClass('on')
        $('.trigger span').removeClass('on')
    })

    // 選取樣式active
    btn_first_cates.on('click', function () {
        $(this).addClass('on').parent().siblings().find('.category-out-item').removeClass('on')
        btn_cates.removeClass('on')
    })


    // -------------------------------------------------------
    // 排序事件
    function changeSort() {
        if ($('#sort-option').val() == 'new') {
            order = '`created_at` DESC'
            page = 1
            getallproductData()
            toProductTop()


        }
        if ($('#sort-option').val() == 'priceup') {
            order = '`price` ASC'
            page = 1
            getallproductData()
            toProductTop()
        }
        if ($('#sort-option').val() == 'pricedown') {
            order = '`price` DESC'
            page = 1
            getallproductData()
            toProductTop()
        }
        if ($('#sort-option').val() == 'abvup') {
            order = '`abv` ASC'
            page = 1
            getallproductData()
            toProductTop()
        }
        if ($('#sort-option').val() == 'abvdown') {
            order = '`abv` DESC'
            page = 1
            getallproductData()
            toProductTop()
        }
    }

    // -------------------------------------------------------
    // 篩選事件




    // -------------------------------------------------------

    // 分頁按鈕事件
    function changePage(p) {
        page = p
        getallproductData()
        toProductTop()
        btn_pages.removeClass('btn_disabled').removeAttr('disabled', false)


    }

    function prevPage() {
        page = ($('.all-product .page-on').find('p').text() * 1) - 1
        getallproductData()
        toProductTop()
        btn_pages.removeClass('btn_disabled').removeAttr('disabled', false)

    }

    function nextPage() {
        page = ($('.all-product .page-on').find('p').text() * 1) + 1
        getallproductData()
        toProductTop()
        btn_pages.removeClass('btn_disabled').removeAttr('disabled', false)
    }

    function lastPage() {
        page = p_data.total_pages
        getallproductData()
        toProductTop()
        btn_pages.removeClass('btn_disabled').removeAttr('disabled', false)
    }




    // -------------------------------------------------------
    // 產生產品畫面
    function renderallProducts() {
        product_arrang.html('')
        if (p_data.rows && p_data.rows.forEach) {
            p_data.rows.forEach(el => {
                product_arrang.append(allproductTpl(el))
                let ishot = el.hot //抓熱門的值
                let created_at = Date.parse(el.created_at).valueOf() //抓建立時間
                let deadline = Date.parse('2021-04-27').valueOf() //設定要有new標籤的時間點
                let product_label = $(`.${el.sid}-label`)

                const alllabelTpl = function () {

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
    }
})