<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女BeerU-購物車';


// 從資料庫抓折價券

if (isset($_SESSION['user'])) {

    $m_sid = $_SESSION['user']['sid']; //抓會員sid

    $SQL = "SELECT * FROM `achievement` WHERE `coupon` > 0 AND `member_sid` = $m_sid ORDER BY `create_at`";
    $row = $pdo->query($SQL)->fetchAll();
};




?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- 這裡插入要放在head的東西 -->
<!-- 包含自己的css和js -->

<link rel="stylesheet" href="../css/cart-checkout/cart.css">
<link rel="stylesheet" href="../css/cart-checkout/cart-anima.css">
<link rel="stylesheet" href="../css/cart-checkout/discount.css">


<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>
<!-- 會員登入 -->
<?php include __DIR__ . '../../php/common/Login-Sign.php' ?>
<?php include __DIR__ . '../../php/common/pop-up-1.php' ?>
<?php include __DIR__ . '../../php/common/pop-up-2.php' ?>
<section class="mobile-menu">
    <?php include __DIR__ . '../../php/common/category.php' ?>
</section>
<!-- 這裡開始寫html -->

<!-- 折價券pop-up-->
<section class="discount-popup">
    <?php if (!empty($row)) : ?>
        <div class="discount-box d-flex flex-wrap align-content-start">
            <div class="col-12 box-title d-flex justify-content-center align-items-center">
                <img src="../images/logo/logo_beeru_gold.svg" alt="">
                <p>折價券列表</p>
            </div>
            <p class="col-12 exp">目前未選擇折價券</p>
            <div class="col-12 coupon-list d-flex flex-wrap align-content-start">

                <!-- 單張折價券 -->
                <?php foreach ($row as $d) : ?>
                    <div class="col-6 col-lg-4 coupon-wrap">
                        <div class="coupon" data-sid="<?= $d['sid'] ?>" data-num="<?= $d['coupon'] ?>">
                            <p>折價券 <span class="num">$<?= $d['coupon'] ?></span>元</p>
                            <p>有效期限:<?= date("Y/m/d", strtotime($d['create_at'] . "+6 month")) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="button-wrap-3 mx-auto">
                <button class="confirm">確認</button>
                <button class="cancel">取消</button>
            </div>
        </div>
    <?php else : ?>
        <div class="discount-box d-flex flex-wrap align-content-start">
            <div class="col-12 box-title d-flex justify-content-center align-items-center mb-4">
                <img src="../images/logo/logo_beeru_gold.svg" alt="">
                <p>折價券列表</p>
            </div>
            <div class="col-12 coupon-list d-flex flex-wrap align-content-start">
                <div class="col-12 empty-status d-flex flex-column justify-content-center align-items-center">
                    <p>目前沒有折價券喔!</p>
                    <p>快到<a href="member.php">會員中心</a>><a href="member.php?memberAchievement">我的成就</a>，來累積更多的券吧！</p>
                    <div class="pipi mt-4">
                        <img src="../images/common/pipi_empty.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="button-wrap-3 mx-auto">
                <button class="discount_ok">我知道了</button>
            </div>
        </div>
    <?php endif; ?>
</section>

<section class="cart-list">
    <!-- return to top -->
    <a href="javascript:" id="return-to-top"><img src="../images/common/top.svg" alt=""></a>

    <!-- 購物車清單開始 -->
    <div class="container position-relative">


        <!-- 購物車商品列表 -->
        <div class="row justify-content-center c-product-wrap">

            <div class="sticky col-12 d-flex flex-column align-items-center">

                <!-- 繼續購物按鈕 -->
                <div class="keep-shop">
                    <a href="all-product.php?cate=0&page=1&hot=0&order=1">
                        <i class="fas fa-arrow-alt-circle-left mr-2"></i>繼續購物
                    </a>
                </div>
                <!-- 大標 -->
                <div class="col-12 col-lg-9 cart-title">
                    <img src="../images/common/pipi-blue.svg" alt="">
                    <p>購物車</p>
                </div>

                <!-- 購物車功能 -->
                <div class="col-12 col-lg-9 cart-header d-flex justify-content-between">

                    <!-- 概況與全選 -->
                    <div class="left d-flex ">
                        <!-- 概況 -->
                        <div class="overview d-flex">
                            <img src="../images/common/icon-beer-b.svg" alt="">
                            <p>已勾選<span id="select-p">2</span>項</p>
                        </div>

                        <!-- 全選 -->
                        <div class="select-all">
                            <label for="selectall" class="selectall">
                                <input type="checkbox" id="selectall">
                                <p>全選<span><i class="fas fa-check"></i></span></p>
                            </label>
                        </div>
                    </div>

                    <!-- 清空購物車 -->
                    <div class="right">
                        <button class="del-all" onclick="deleteAllItem()">
                            清空購物車<i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-11 col-lg-8 c-product-list">


                <small class="warn"></small>


                <?php if (empty($_SESSION['cart']) or isset($_SESSION['cart']['fund'])) : ?>
                    <!-- 購物車為空 -->
                    <div class="col-12 col-lg-9 empty-cart mx-auto d-flex flex-column justify-content-center">
                        <p>購物車內是空的喔！<span class="d-block d-lg-inline">請繼續逛逛我們的世界精釀啤酒吧！</span></p>
                        <div class="showpic d-flex my-5 align-items-center">
                            <div class="col-4 pipi"></div>
                            <div class="col-2 beer1"><img src="../images/cart-checkout/beer1.svg" alt=""></div>
                            <div class="col-2 beer2"><img src="../images/cart-checkout/beer2.svg" alt=""></div>
                            <div class="col-2 beer3"><img src="../images/cart-checkout/beer3.svg" alt=""></div>
                            <div class="col-2 beer4"><img src="../images/cart-checkout/beer4.svg" alt=""></div>
                        </div>
                    </div>

                <?php else : ?>
                    <!-- 單支商品開始 -->
                    <?php foreach ($_SESSION['cart'] as $v) : ?>
                        <div class="c-product d-flex justify-content-between align-items-center" data-sid="<?= $v['sid'] ?>" data-price="<?= $v['price'] ?>" data-qty="<?= $v['quantity'] ?>">
                            <!-- checkbox -->
                            <div class="col-1">
                                <button class="pro-checkbox select"><i class="fas fa-check"></i></button>
                            </div>
                            <!-- 商品內容 -->
                            <div class="col-10 col-lg-8 d-flex pro-content">
                                <div class="col-2 pro-img"><a href="each-product.php?psid=<?= $v['sid'] ?>"><img src="../images/products/<?= $v['pic'] ?>" alt=""></a></div>
                                <div class="col-10 pro-detail d-flex flex-column justify-content-center  flex-lg-row align-items-lg-center justify-content-lg-between p-0 ">
                                    <div class="col-lg-6 pro-name p-lg-0">
                                        <div class="c-name">
                                            <a href="each-product.php?psid=<?= $v['sid'] ?>">
                                                <p><?= $v['c_name'] ?></p>
                                            </a>
                                        </div>
                                        <div class="e-name d-none d-lg-block">
                                            <a href="each-product.php?psid=<?= $v['sid'] ?>">
                                                <p><?= $v['e_name'] ?></p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 pro-know p-lg-0">
                                        <p class="sub-t-price"></p>
                                        <div class="intro d-flex flex-wrap ">
                                            <p class="col-12 px-0 price">單價-NT$<?= $v['price'] ?></p>
                                            <?php if ($v['abv'] != 0) : ?>
                                                <p class="abv">ABV-<?= $v['abv'] ?>%</p>
                                            <?php endif; ?>
                                            <p class="cap">容量-<?= $v['capacity'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 數量 -->
                            <div class="col-2 col-lg-3 f-quantity d-flex flex-column flex-lg-row align-items-center justify-content-center">
                                <div class="minus order-3 order-lg-1"><i class="fas fa-minus"></i></div>
                                <input type="text" class="buy-number order-2 order-lg-1" value="<?= $v['quantity'] ?>">
                                <div class="plus order-1 order-lg-1"><i class="fas fa-plus"></i></div>
                            </div>

                            <!-- 刪除 -->
                            <div class="del-p" onclick="deleteItem(event)">
                                <i class="fas fa-times-circle"></i>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif ?>



                <div class="add-purchase-wrap d-flex justify-content-center">
                    <a href="all-product.php?cate=0&page=1&hot=0&order=1">
                        <button class="add-purchase"><i class="fas fa-plus"></i>加購商品<i class="fas fa-shopping-bag"></i></button>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- 結帳 -->
    <div class="checkout-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-lg-9 d-flex justify-content-between checkout-wrap">
                    <div class="left d-flex align-items-center">
                        <div class="user-pic d-none d-lg-block">


                            <?php if (!isset($_SESSION['user'])) : ?>
                                <img src="../images/user/user.svg" alt="">
                            <?php else : ?>
                                <img src="../images/user/<?= $_SESSION['user']['user-pic'] ?>" alt="">
                            <?php endif ?>


                        </div>
                        <div class="mydiscount d-flex flex-column align-items-center">
                            <div class="use-coupon">
                                <i class="fas fa-ticket-alt"></i>
                                <span class="coupon-num">未選擇折價券</span>
                            </div>

                            <?php if (!isset($_SESSION['user'])) : ?>
                                <button class="select-coupon-nologin" onclick="LogIn_btn()">請登入會員</button>
                            <?php else : ?>
                                <button class="select-coupon">我的折價券</button>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="right d-flex flex-column align-items-end justify-content-center flex-lg-row align-items-lg-center">
                        <div class="checkout-price d-flex  flex-column align-items-end mr-lg-5">
                            <div class="myprice d-flex align-items-end flex-lg-column">
                                <p class="d-none d-lg-block">總共金額</p>
                                <p class="discount-price">NT$<span class="t-price-before"></span></p>
                            </div>
                            <p class="calc-price">NT$<span class="t-price-after"></span></p>
                        </div>
                        <?php if (!isset($_SESSION['user'])) : ?>
                            <button class="go-checkout disabled" disabled>去結帳</button>
                        <?php else : ?>
                            <button class="go-checkout">去結帳</button>
                        <?php endif ?>
                    </div>
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
    // 刪除按鈕的hover效果
    if ($(window).width() >= 992) {
        $('.c-product-list').on('mouseenter', '.del-p', function() {
            $(this).addClass('hover')
            $(this).closest('.c-product').addClass('hover')
        })
        $('.c-product-list').on('mouseleave', '.del-p', function() {
            $(this).removeClass('hover')
            $(this).closest('.c-product').removeClass('hover')
        })

    }


    // 概況更新
    const overVeiw = function() {
        let selectCartProduct = $('.select').length
        $('#select-p').text(selectCartProduct)
    }


    // 金額轉換, 加逗號
    const dallorCommas = function(n) {
        return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };


    // 呈現價格&計算價格
    const calcprice = function() {
        let total = 0
        let couponNum = $('.coupon-num').attr('coupon-dollar') != undefined ? $('.coupon-num').attr('coupon-dollar') * 1 : 0;
        // 算小計
        $('.select').each(function() {
            let p = $(this).closest('.c-product').attr('data-price')
            let q = $(this).closest('.c-product').find('.buy-number').val()
            $(this).closest('.c-product').find('.sub-t-price').text('NT$' + dallorCommas(p * q))
            total += p * q
        })
        // 算總計
        // 500以上才可以使用折價券
        if (total >= 500) {
            $('.t-price-before').text(dallorCommas(total))
            $('.t-price-after').text(dallorCommas(total - couponNum > 0 ? total - couponNum : 0))
            $('.t-price-after').attr('data-tprice', total - couponNum > 0 ? total - couponNum : 0)
            $('.select-coupon').removeClass('disabled')
            $('.select-coupon').attr('disabled', false)

            if ($('.coupon-num').attr('coupon-sid') == undefined) {
                $('.coupon-num').text('未選擇折價券')
            }



            if ($(window).width() >= 992) {
                $('.select-coupon').on('mouseenter', function() {
                    $(this).addClass('hover').css('transition', '.5s')
                })
                $('.select-coupon').on('mouseleave', function() {
                    $(this).removeClass('hover').css('transition', '0')
                })
            }
        } else {
            let couponNum = 0
            $('.coupon-num').text('滿500可使用')
            $('.coupon-num').removeAttr('coupon-sid') //拿掉sid
            $('.coupon-num').removeAttr('coupon-dollar') //拿掉面額
            $('.discount-price').css('display', 'none')
            $('.select-coupon').addClass('disabled')
            $('.select-coupon').attr('disabled', true)
            $('.t-price-after').text(dallorCommas(total))
            $('.t-price-after').attr('data-tprice', total)
        }



        // 如果購物車內沒有商品的話，總價=0，關掉結帳按鈕

        if (<?= isset($_SESSION['user']) ? 'true' : 'false' ?> == true) {

            if (total > 0) {
                $('.go-checkout').removeClass('disabled')
                $('.go-checkout').attr('disabled', false)

                if ($(window).width() >= 992) {
                    $('.go-checkout').on('mouseenter', function() {
                        $(this).addClass('hover').css('transition', '.5s')
                    })
                    $('.go-checkout').on('mouseleave', function() {
                        $(this).removeClass('hover').css('transition', '0')
                    })
                }
            } else {
                $('.go-checkout').addClass('disabled')
                $('.go-checkout').attr('disabled', true)
            }
        }





    }



    // 初始
    overVeiw() //更新概況
    calcprice() //計算價格



    // 商品checkbox選取---------------------------------------------------------------------
    $('.c-product-list').on('click', '.pro-checkbox', function() {
        $(this).toggleClass('select')
        $(this).closest('.c-product').toggleClass('noselect')
        $('#selectall').prop('checked', false)
        calcprice()
        overVeiw()
    })

    // 全選
    $('#selectall').on('change', function() {
        if ($('#selectall').prop('checked')) {
            $('.pro-checkbox').addClass('select')
            $('.pro-checkbox').closest('.c-product').removeClass('noselect')
            calcprice()
            overVeiw()
        } else {
            $('.pro-checkbox').removeClass('select')
            $('.pro-checkbox').closest('.c-product').addClass('noselect')
            calcprice()
            overVeiw()
        }
    })




    // 更改數量----------------------------------------------------------------------
    // 手寫更改
    $('.buy-number').on('input', function() {
        let qty = $(this).val()
        let psid = $(this).closest('.c-product').attr('data-sid')

        if (/^(\+|-)?\d+$/.test(qty) && qty > 0 && qty <= 30 || qty == "") {
            calcprice()
        } else if (qty > 30) {
            $('.pop-up-1').fadeIn(150)
            $('.pop-up-1 .icon').html('<i class="fas fa-exclamation"></i>').css('background-color', 'var(--red)')
            $('.pop-up-1 .pop-up-text').text('購買數量超過庫存，庫存為30')
            $(this).val('30')
            qty = 30
        } else {
            $('.pop-up-1').fadeIn(150)
            $('.pop-up-1 .icon').html('<i class="fas fa-times"></i>').css('background-color', 'var(--red)')
            $('.pop-up-1 .pop-up-text').text('請輸入正確數量，數量不得為0')
            $(this).val('1')
            qty = 1
        }

        $.get('cart-api.php', {
            action: 'add',
            psid,
            qty
        }, function(data) {
            // console.log(data) //console.log回傳的資料以方便除錯
            calcprice()
        }, 'json')


        let Q_total = 0;
        $('.buy-number').each(function() {
            Q_total += $(this).val() * 1

            if (Q_total >= 15) {
                $('.warn').html('<i class="fas fa-exclamation-circle"></i>目前選購之商品總數已超過超商取貨大小限制，僅能宅配取貨')
            } else {
                $('.warn').html('')
            }
        })


    })

    // 按+更改
    $('.plus').on('click', function() {
        let qty = $(this).prev().val()
        let psid = $(this).closest('.c-product').attr('data-sid')

        if (/^(\+|-)?\d+$/.test(qty) && qty > 0 && qty < 30 || qty == "") {
            qty = qty * 1 + 1
            $(this).prev().val(qty)

        } else if (qty >= 30) {
            $('.pop-up-1').fadeIn(150)
            $('.pop-up-1 .icon').html('<i class="fas fa-exclamation"></i>').css('background-color', 'var(--red)')
            $('.pop-up-1 .pop-up-text').text('購買數量超過庫存，庫存為30')
            $(this).prev().val('30')
            qty = 30
        }

        $.get('cart-api.php', {
            action: 'add',
            psid,
            qty
        }, function(data) {
            // console.log(data) //console.log回傳的資料以方便除錯
            calcprice()
        }, 'json')


        let Q_total = 0;
        $('.buy-number').each(function() {
            Q_total += $(this).val() * 1

            if (Q_total >= 15) {
                $('.warn').html('<i class="fas fa-exclamation-circle"></i>目前選購之商品總數已超過超商取貨大小限制，僅能宅配取貨')
            } else {
                $('.warn').html('')
            }
        })

    })

    // 按-更改
    $('.minus').on('click', function() {
        let qty = $(this).next().val()
        let psid = $(this).closest('.c-product').attr('data-sid')

        if (/^(\+|-)?\d+$/.test(qty) && qty > 1 && qty <= 30 || qty == "") {
            qty = qty * 1 - 1
            $(this).next().val(qty)

        } else if (qty <= 1) {
            $('.pop-up-1').fadeIn(150)
            $('.pop-up-1 .icon').html('<i class="fas fa-times"></i>').css('background-color', 'var(--red)')
            $('.pop-up-1 .pop-up-text').text('購買數量不得為0')
            $(this).next().val('1')
            qty = 1
        }

        $.get('cart-api.php', {
            action: 'add',
            psid,
            qty
        }, function(data) {
            // console.log(data) //console.log回傳的資料以方便除錯
            calcprice()
        }, 'json')


        let Q_total = 0;
        $('.buy-number').each(function() {
            Q_total += $(this).val() * 1

            if (Q_total >= 15) {
                $('.warn').html('<i class="fas fa-exclamation-circle"></i>目前選購之商品總數已超過超商取貨大小限制，僅能宅配取貨')
            } else {
                $('.warn').html('')
            }
        })


    })





    // 刪除商品-----------------------------------------------------------------------
    // 刪除單項
    const deleteItem = function(event) {
        let del = $(event.currentTarget)
        let psid = del.closest('.c-product').attr('data-sid')
        // let confirm = false

        $('.pop-up-2').fadeIn(150)
        $('.pop-up-2 .button-wrap-1').removeClass('d-none')
        $('.pop-up-2 .button-wrap-2').addClass('d-none')
        $('.pop-up-2 .icon').html('<i class="fas fa-exclamation"></i>').css('background-color', 'var(--red)')
        $('.pop-up-2 .pop-up-text').text('確定要刪除此商品嗎？')



        $('button.no').on('click', function() {
            $('.general-pop-up').fadeOut(150)
        })

        $('button.yes').on('click', function() {
            $.get('cart-api.php', {
                action: 'delete',
                psid
            }, function(data) {
                // console.log(data) //console.log回傳的資料以方便除錯
                showCartCount(data.cart)
                del.closest('.c-product').remove() //從資料庫刪除後再從前端刪除
                calcprice()
                overVeiw()
                $('.pop-up-2 .button-wrap-2').removeClass('d-none')
                $('.pop-up-2 .button-wrap-1').addClass('d-none')
                $('.pop-up-2 .pop-up-text').text(data.msg)

                $('button.ok').on('click', function() {
                    $('.general-pop-up').fadeOut(150)
                    setTimeout(function() {
                        $('.pop-up-2 .button-wrap-1').removeClass('d-none')
                        $('.pop-up-2 .button-wrap-2').addClass('d-none')
                    },150)

                    if ($('.c-product').length < 1) {
                        location.reload()
                    }
                })

                let Q_total = 0;
                $('.buy-number').each(function() {
                    Q_total += $(this).val() * 1

                    if (Q_total >= 15) {
                        $('.warn').html('<i class="fas fa-exclamation-circle"></i>目前選購之商品總數已超過超商取貨大小限制，僅能宅配取貨')
                    } else {
                        $('.warn').html('')
                    }
                })



            }, 'json')

        })




    }

    // 刪除全部
    const deleteAllItem = function() {

        if ($('.c-product').length >= 1) {
            $('.pop-up-2').fadeIn(150)
            $('.pop-up-2 .button-wrap-1').removeClass('d-none')
            $('.pop-up-2 .button-wrap-2').addClass('d-none')
            $('.pop-up-2 .icon').html('<i class="fas fa-exclamation"></i>').css('background-color', 'var(--red)')
            $('.pop-up-2 .pop-up-text').text('確定要刪除全部商品嗎？')

            $('button.no').on('click', function() {
                $('.general-pop-up').fadeOut(150)
            })

            $('button.yes').on('click', function() {
                $.get('cart-api.php', {
                    action: 'deleteall',
                }, function(data) {
                    // console.log(data) //console.log回傳的資料以方便除錯
                    showCartCount(data.cart)
                    $('.c-product').remove() //從資料庫刪除後再從前端刪除
                    calcprice()
                    overVeiw()
                    $('.pop-up-2 .button-wrap-2').removeClass('d-none')
                    $('.pop-up-2 .button-wrap-1').addClass('d-none')
                    $('.pop-up-2 .pop-up-text').text(data.msg)

                    $('button.ok').on('click', function() {
                        $('.general-pop-up').fadeOut(150)

                        if ($('.c-product').length < 1) {
                            location.reload()
                        }
                    })

                    $('.warn').html('')



                }, 'json')
            })
        } else {
            $('.pop-up-1').css('display', 'block')
            $('.pop-up-1 .icon').html('<i class="fas fa-exclamation"></i>').css('background-color', 'var(--red)')
            $('.pop-up-1 .pop-up-text').text('目前購物車內沒有商品喔！')
        }



    }




    // 選擇折價券----------------------------------------------------------------------

    // 開啟彈跳視窗
    $('.select-coupon').on('click', function() {
        $('.discount-popup').fadeIn()
        // 如果有選擇折價券，把該sid的折價券加上choose
        if ($('.coupon-num').attr('coupon-sid') != undefined) {
            let couponSid = $('.coupon-num').attr('coupon-sid')
            $('.coupon[data-sid=' + couponSid + ']').addClass('choose')
            // 加上說明文字
            let couponNum = $('.choose').attr('data-num')
            $('.exp').text('已選擇:' + couponNum + '元')
        } else {
            $('.exp').text('目前未選擇折價券')
        }
    })
    // 取消
    $('button.cancel').on('click', function() {
        $('.discount-popup').fadeOut()
        $('.coupon').removeClass('choose')
    })

    // 我知道了
    $('button.discount_ok').on('click', function() {
        $('.discount-popup').fadeOut(100)
    })

    // 選擇單張折價券
    $('.coupon-wrap').on('click', function() {
        $(this).find('.coupon').toggleClass('choose').parent().siblings().find('.coupon').removeClass('choose')
        // 加上說明文字
        if ($('.choose').length >= 1) {
            let couponNum = $('.choose').attr('data-num')
            $('.exp').text('已選擇:' + couponNum + '元')
        } else {
            $('.exp').text('目前未選擇折價券')
        }
    })
    // 確認
    $('button.confirm').on('click', function() {
        $('.discount-popup').fadeOut()
        if ($('.choose').length >= 1) {
            let couponNum = $('.choose').attr('data-num')
            let couponSid = $('.choose').attr('data-sid')
            $('.coupon-num').text('折價券' + couponNum + '元') //寫入面額
            $('.coupon-num').attr('coupon-sid', couponSid) //記下哪張折價券sid
            $('.coupon-num').attr('coupon-dollar', couponNum) //記下折價券面額
            $('.discount-price').css('display', 'block')
            calcprice()
        } else {
            $('.coupon-num').text('未選擇折價券')
            $('.coupon-num').removeAttr('coupon-sid') //拿掉sid
            $('.coupon-num').removeAttr('coupon-dollar') //拿掉面額
            $('.discount-price').css('display', 'none')
            calcprice()
        }
        $('.coupon').removeClass('choose')
    })


    // 結帳----------------------------------------------------------------------------
    $('.go-checkout').on('click', function() {
        // let totalPrice = $('.t-price-after').attr('data-tprice')
        let cSid = $('.coupon-num').attr('coupon-sid')
        let cdollar = $('.coupon-num').attr('coupon-dollar')

        if ($('.pro-checkbox').not('.select').length > 0) {

            $('.pro-checkbox').not('.select').each(function() {
                let psid = $(this).closest('.c-product').attr('data-sid')
                $.get('cart-api.php', {
                    action: 'delete',
                    psid,
                    cSid,
                    cdollar
                }, function(data) {
                    // console.log(data)
                    location.href = 'checkout.php'
                }, 'json')
            })

        } else {
            $.get('cart-api.php', {
                cSid,
                cdollar
            }, function(data) {
                // console.log(data)
                location.href = 'checkout.php'
            }, 'json')
        }



    })


    // 彈跳視窗-------------------------------------------------------------------------
    $('button.ok').on('click', function() {
        $('.general-pop-up').fadeOut(150)
    })



    // 超過超商限制----------------------------------------------------------------------
    let Q_total = 0;
    $('.buy-number').each(function() {
        Q_total += $(this).val() * 1

        if (Q_total >= 15) {
            $('.warn').html('<i class="fas fa-exclamation-circle"></i>目前選購之商品總數已超過超商取貨大小限制，僅能宅配取貨')
        }
    })




    // 動畫------------------------------------------------------------------------------
    setTimeout(function() {
        let beer_i = 0
        let total_beer_i = $('.c-product').length
        $('.c-product').eq(0).addClass('anima')
        $('.add-purchase').addClass('animate__animated animate__fadeInUp').css('opacity', '1')
        var cbt = setInterval(function() {
            beer_i = beer_i + 1;
            $('.c-product').eq(beer_i).addClass('anima')
            if (beer_i == total_beer_i - 1) {
                clearInterval(cbt)
            }
        }, 100);
    }, 300)
</script>

<?php include __DIR__ . '../../php/common/html-end.php' ?>