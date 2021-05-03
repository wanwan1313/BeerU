<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女-結帳';


$subPlus = 0;
foreach ($_SESSION['cart'] as $c) {
    $subPlus += $c['price'] * $c['quantity'];
};
$totalPrice = $subPlus - $_SESSION['coupon-dollar'] + $_SESSION['shipping']





?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- 這裡插入要放在head的東西 -->
<!-- 包含自己的css和js -->
<link rel="stylesheet" href="../css/cart-checkout/checkout.css">



<?php include __DIR__ . '../../php/common/html-body-navbar.php' ?>
<!-- 會員登入 -->
<?php include __DIR__ . '../../php/common/Login-Sign.php' ?>
<?php include __DIR__ . '../../php/common/pop-up-1.php' ?>
<?php include __DIR__ . '../../php/common/pop-up-2.php' ?>
<section class="mobile-menu">
    <?php include __DIR__ . '../../php/common/category.php' ?>
</section>
<!-- 這裡開始寫html -->

<section class="checkout">
    <div class="checkout-wrap">
        <div class="container">

            <!-- header 大標與步驟 -->
            <div class="row justify-content-center">
                <!-- 大標 -->
                <div class="col-12 checkout-title">
                    <p>結帳</p>
                </div>

                <!-- 步驟顯示 -->
                <div class="col-8 col-lg-3 checkout-step d-flex justify-content-between">
                    <div class="step step-1 on">1</div>
                    <div class="step step-2">2</div>
                    <div class="step step-3">3</div>
                </div>
            </div>

            <!-- 物流 -->
            <div id="select-ship">
                <div class="row justify-content-center flex-column align-items-center select-ship">
                    <div class="col-12 col-lg-5">
                        <form name="myship" method="post" novalidate onsubmit="checkshipform(); return false;">

                            <!-- 選擇物流方式 -->
                            <label for="ship" class="shiptitle">選擇物流方式</label><br>
                            <select name="ship" id="ship" class="ship">
                                <option value="宅配到府">宅配</option>
                                <option value="超商取貨">超商取貨</option>
                            </select>
                            <small class="warn"></small>
                            <input type="hidden" name="shipping" id="shipping" value="80">

                            <!-- 收件人資料 -->
                            <div class="checkoutbox recipient">
                                <p class="recipient-title">收件人資訊</p>

                                <div class="name mb-4">
                                    <label for="re_name">收件人姓名</label><br>
                                    <input type="text" class="re_name" id="re_name" name="re_name"><br>
                                    <small class="warn"></small>
                                </div>

                                <div class="mobile mb-4">
                                    <label for="re_mobile">收件人手機</label><br>
                                    <input type="text" class="re_mobile" id="re_mobile" name="re_mobile"><br>
                                    <small class="warn"></small>
                                </div>

                                <div class="address mb-1">
                                    <label for="re_address">宅配地址</label><br>
                                    <div class="re_address">
                                        <div id="twzipcode"></div>
                                        <input type="text" class="re_add" name="re_address">
                                    </div>
                                    <p class="remind">※ 請確認收件地址是否有誤，如有錯誤，需請自行負責，敬請見諒！</p>
                                    <small class="warn"></small><br>
                                </div>

                                <div class="store mb-4">
                                    <label>選擇門市</label><br>
                                    <button class="select-711" disabled>選擇7-11門市</button>
                                    <p>延華門市-台北市大同區延平北路一段89號91號93號1樓</p>
                                    <input type="hidden" name="re_store" value="延華門市-台北市大同區延平北路一段89號91號93號1樓">
                                </div>

                                <div class="order-remarks mb-4">
                                    <label for="remarks">備註</label>
                                    <br>
                                    <textarea class="remarks" name="remarks" id="remarks" rows="2"></textarea>
                                </div>
                            </div>

                            <!-- 下一步按鈕 -->
                            <div class="col-12 submit mt-4 d-flex justify-content-end">
                                <button type="submit" class="next">下一步</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- 金流 -->
            <div id="select-payment">
                <div class="row justify-content-center flex-column align-items-center select-payment">
                    <div class="col-12 col-lg-6">

                        <form name="mypayment" method="post" novalidate onsubmit="checkpaymentform(); return false;">
                            <!-- 選擇金流方式 -->
                            <label for="payment" class="paytitle">選擇金流方式</label><br>
                            <select name="payment" id="payment" class="payment">
                                <option value="取貨付款">取貨付款</option>
                                <option value="信用卡付款">信用卡付款</option>
                            </select>
                            <small class="warn"></small>

                            <!-- 信用卡 -->

                            <!-- 結帳商品 -->
                            <div class="checkoutbox buy-product">
                                <!-- 表頭 -->
                                <div class="table-head d-flex mb-3">
                                    <div class="p-thead col-7 col-lg-8">結帳商品</div>
                                    <div class="p-thead col-2 px-0 text-center">數量</div>
                                    <div class="p-thead col-3 col-lg-2 px-0 text-center">小計</div>
                                </div>


                                <div class="my-checkout-p-wrap">
                                    <!-- 單支產品開始 -->
                                </div>

                                <!-- <?php foreach ($_SESSION['cart'] as $v) : ?>
                                    <div class="my-checkout-p d-flex align-items-center mb-2">
                                        <div class="col-7 col-lg-8 d-flex align-items-center">
                                            <div class="col-2 thisp-pic px-0"><img src="../images/products/<?= $v['pic'] ?>" alt=""></div>
                                            <div class="col-10 thisp-name px-0">
                                                <p class="c-name"><?= $v['c_name'] ?></p>
                                                <p class="e-name d-none d-lg-block"><?= $v['e_name'] ?></p>
                                            </div>
                                        </div>
                                        <div class="col-2 thisp-qty px-0 text-center"><?= $v['quantity'] ?></div>
                                        <div class="col-3 col-lg-2 thisp-subp px-0 text-center">$<?= $v['quantity'] * $v['price'] ?></div>
                                    </div>
                                <?php endforeach; ?> -->

                                <!-- 最後金額計算 -->
                                <div class="calc-price mt-4">
                                    <div class="coupon d-flex justify-content-end">
                                        <div class="col-4 col-lg-2 text-right">折價券</div>
                                        <div class="col-4 col-lg-2 text-right">– $<?= $_SESSION['coupon-dollar'] ?></div>
                                    </div>
                                    <div class="shipping d-flex justify-content-end">
                                        <div class="col-4 col-lg-2 text-right">運費</div>
                                        <div class="col-4 col-lg-2 text-right">$<?= $_SESSION['shipping'] ?></div>
                                    </div>
                                    <div class="total-price d-flex justify-content-end">
                                        <div class="col-4 col-lg-3 text-right">金額總計</div>
                                        <div class="col-4 col-lg-2 text-right" data-tprice="<?= $totalPrice ?>">NT$<?= $totalPrice ?></div>
                                    </div>
                                </div>
                            </div>

                            <!-- 備註 -->
                            <small class="remind">※下單前請再次確認您的購買明細及配送資訊，訂單成立後無法異動訂單內容</small>

                            <!-- 確認結帳按鈕 -->
                            <div class="col-12 submit mt-4 d-flex justify-content-end">
                                <button type="submit" class="confirmbuy">確認購買</button>
                            </div>
                        </form>



                    </div>

                </div>
            </div>

            <!-- 訂單完成 -->
            <div id="complete-order">
                <div class="row justify-content-center flex-column align-items-center complete-order">
                    <div class="col-12 col-lg-7 px-3">
                        <div class="complete-title">
                            <p class="text-center text-lg-left">訂單完成</p>
                        </div>

                        <div class="order-detail">
                            <p class="text-center text-lg-left">訂單編號：202105031234</p>
                            <div class="order-d-box px-3 px-lg-5 py-4">
                                <!-- 訂單資訊 -->
                                <div class="overview">
                                    <div class="view-head d-flex">
                                        <div class="v-thead col-3 px-0 text-center text-lg-left">日期</div>
                                        <div class="v-thead col-3 px-0 text-center text-lg-left">總金額</div>
                                        <div class="v-thead col-3 px-0 text-center text-lg-left">付款方式</div>
                                        <div class="v-thead col-3 px-0 text-center text-lg-left">訂單狀態</div>
                                    </div>
                                    <div class="view-content d-flex">
                                        <div class="v-tbody col-3 px-0 text-center text-lg-left">2021-05-03</div>
                                        <div class="v-tbody col-3 px-0 text-center text-lg-left">NT$<?= $totalPrice ?></div>
                                        <div class="v-tbody col-3 px-0 text-center text-lg-left"><?= $_SESSION['payment'] ?></div>
                                        <div class="v-tbody col-3 px-0 text-center text-lg-left">處理中</div>
                                    </div>
                                </div>
                                <!-- 商品列表 -->
                                <div class="product-detail">
                                    <!-- 表頭 -->
                                    <div class="d-header d-flex flex-wrap">
                                        <p class="col-12 px-2">訂單明細</p>
                                        <div class="p-thead col-7 col-lg-8 pl-2">商品名稱</div>
                                        <div class="p-thead col-2 px-0 text-center">數量</div>
                                        <div class="p-thead col-3 col-lg-2 px-0 text-center">小計</div>
                                    </div>
                                    <!-- 單支產品開始 -->
                                    <?php foreach ($_SESSION['cart'] as $v) : ?>
                                        <div class="my-checkout-p d-flex align-items-center mb-2">
                                            <div class="col-7 col-lg-8 d-flex align-items-center">
                                                <div class="col-2 thisp-pic px-0"><img src="../images/products/<?= $v['pic'] ?>" alt=""></div>
                                                <div class="col-10 thisp-name px-0">
                                                    <p class="c-name"><?= $v['c_name'] ?></p>
                                                    <p class="e-name d-none d-lg-block"><?= $v['e_name'] ?></p>
                                                </div>
                                            </div>
                                            <div class="col-2 thisp-qty px-0 text-center"><?= $v['quantity'] ?></div>
                                            <div class="col-3 col-lg-2 thisp-subp px-0 text-center">$<?= $v['quantity'] * $v['price'] ?></div>
                                        </div>
                                    <?php endforeach; ?>

                                    <!-- 最後金額計算 -->
                                    <div class="calc-price mt-4">
                                        <div class="coupon d-flex justify-content-end">
                                            <div class="col-4 col-lg-2 text-right">折價券</div>
                                            <div class="col-4 col-lg-2 text-right">– $<?= $_SESSION['coupon-dollar'] ?></div>
                                        </div>
                                        <div class="shipping d-flex justify-content-end">
                                            <div class="col-4 col-lg-2 text-right">運費</div>
                                            <div class="col-4 col-lg-2 text-right">$<?= $_SESSION['shipping'] ?></div>
                                        </div>
                                        <div class="total-price d-flex justify-content-end">
                                            <div class="col-4 col-lg-3 text-right">金額總計</div>
                                            <div class="col-4 col-lg-2 text-right" data-tprice="<?= $totalPrice ?>">NT$<?= $totalPrice ?></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 收件人資訊 -->
                                <div class="re-detail mt-5">
                                    <div class="d-header d-flex flex-wrap">
                                        <p class="col-12 px-2">收件人資訊</p>
                                    </div>
                                    <div class="re-content d-flex px-3 flex-column flex-lg-row">
                                        <div class="re01 col-lg-2 px-0 d-flex flex-row flex-lg-column ">
                                            <div class="col-3 col-lg-12 re-thead px-0 pl-lg-1">收件人</div>
                                            <div class="col-9 col-lg-12 re-tbody pl-3 pl-lg-1"><?= $_SESSION['re_name'] ?></div>
                                        </div>
                                        <div class="re02 col-lg-3 px-0 d-flex flex-row flex-lg-column ">
                                            <div class="col-3 col-lg-12 re-thead px-0">收件人電話</div>
                                            <div class="col-9 col-lg-12 re-tbody pl-3 px-lg-0"><?= $_SESSION['re_mobile'] ?></div>
                                        </div>
                                        <div class="re03 col-lg-5 px-0 d-flex flex-row flex-lg-column ">
                                            <div class="col-3 col-lg-12 re-thead px-0">收件地址</div>
                                            <div class="col-9 col-lg-12 re-tbody pl-3 px-lg-0"><?= $_SESSION['re_add'] ?></div>
                                        </div>
                                        <div class="re04 col-lg-2 px-0 d-flex flex-row flex-lg-column ">
                                            <div class="col-3 col-lg-12 re-thead px-0">運送方式</div>
                                            <div class="col-9 col-lg-12 re-tbody pl-3 px-lg-0"><?= $_SESSION['ship'] ?></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 繼續購物按鈕 -->
                        <div class="keep-shop">
                            <a href="http://localhost/BeerU/public/all-product.php">
                                <i class="fas fa-arrow-alt-circle-left mr-2"></i>繼續購物
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>









<?php include __DIR__ . '../../php/common/html-body-footer.php' ?>
<?php include __DIR__ . '../../php/common/script.php' ?>
<!-- 這裡開始寫jQuery或JS -->

<script src="https://cdn.jsdelivr.net/npm/jquery-twzipcode@1.7.14/jquery.twzipcode.min.js"></script>

<script>
    console.log('location', window.location.search);


    let url = location.pathname + '?step=1'
    history.pushState({
        url: url,
        title: document.title
    }, document.title, url)

    // 台灣地址插件
    $("#twzipcode").twzipcode({
        zipcodeIntoDistrict: true, // 郵遞區號自動顯示在區別選單中
        css: ["re_city", "re_dist"], // 自訂 "城市"、"地別" class 名稱 
        countyName: "re_city", // 自訂城市 select 標籤的 name 值
        districtName: "re_dist" // 自訂區別 select 標籤的 name 值
    });

    // 宅配vs超商
    $('#ship').on('change', function() {
        if ($('#ship').val() == '宅配') {
            $('.address').fadeIn(150)
            $('.store').css('display', 'none')
            $('#shipping').val(80)

        }
        if ($('#ship').val() == '超商取貨') {
            $('.store').fadeIn(150)
            $('.address').css('display', 'none')
            $('#shipping').val(60)
        }
    })

    // 下一步

    let p_data = {};

    const checkoutpTpl = p => {
        return `
        <div class="my-checkout-p d-flex align-items-center mb-2">
                                    <div class="col-7 col-lg-8 d-flex align-items-center">
                                        <div class="col-2 thisp-pic px-0"><img src="../images/products/${p.pic}"
                                                alt=""></div>
                                        <div class="col-10 thisp-name px-0">
                                            <p class="c-name">${p.c_name}</p>
                                            <p class="e-name d-none d-lg-block">${p.e_name}</p>
                                        </div>
                                    </div>
                                    <div class="col-2 thisp-qty px-0 text-center">${p.quantity}</div>
                                    <div class="col-3 col-lg-2 thisp-subp px-0 text-center">${p.quantity * p.price}</div>
                                </div>
        `
    }

    function renderCheckoutP() {
        console.log(p_data.cart)
        $('.my-checkout-p-wrap').html('')
       for( let el in p_data.cart) {
           console.log(el.sid)
       }
        // p_data.cart.forEach(el => {
        //     $('.my-checkout-p-wrap').append(checkoutpTpl(el))
        // })

    }

    function checkshipform() {
        let isPass = true

        if (isPass) {
            $.post(
                'cart-api.php',
                $(document.myship).serialize(),
                function(data) {
                    console.log(data.cart)
                    p_data = data
                    $('#select-ship').fadeOut(100)
                    $('#select-payment').fadeIn(150)
                    renderCheckoutP()
                    $('.step-2').addClass('on')
                    $('.step-1').removeClass('on')
                    $('body,html').animate({
                        scrollTop: 0
                    }, 150, 'swing');
                },
                'json'
            )
            let url = location.pathname + '?step=2'
            history.pushState({
                url: url,
                title: document.title
            }, document.title, url)
        }
    }


    // 確認結帳

    function checkpaymentform() {
        let isPass = true
        let totalPrice = <?= $totalPrice ?>;
        let payment = $('#payment').val()

        console.log(totalPrice, payment)

        if (isPass) {
            $.post(
                'cart-api.php', {
                    'payment': payment,
                    'totalPrice': totalPrice,
                },
                function(data) {
                    console.log(data)

                    $('#select-payment').fadeOut(100)
                    $('#complete-order').fadeIn(150)
                    $('.step-3').addClass('on')
                    $('.step-2').removeClass('on')
                    $('body,html').animate({
                        scrollTop: 0
                    }, 150, 'swing');

                },
                'json'
            )
            let url = location.pathname + '?step=3'
            history.pushState({
                url: url,
                title: document.title
            }, document.title, url)
        }

    }
</script>



<?php include __DIR__ . '../../php/common/html-end.php' ?>