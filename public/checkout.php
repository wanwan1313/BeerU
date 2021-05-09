<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '啤女-結帳';


// 算總啤酒數量
if (isset($_SESSION['cart'])) {
    $Q_total = 0;
    foreach ($_SESSION['cart'] as $c) {
        $Q_total += $c['quantity'];
    };
}

// 查看cart商品sid
// if (isset($_SESSION['cart'])) {
//     echo array_keys($_SESSION['cart'])[0];
// }





?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- 這裡插入要放在head的東西 -->
<!-- 包含自己的css和js -->
<link rel="stylesheet" href="../css/cart-checkout/checkout.css">
<link rel="stylesheet" href="../css/cart-checkout/credit-card.css">



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
        <div class="container" class="position-relative">

            <!-- header 大標與步驟 -->
            <div class="row justify-content-center">
                <!-- 大標 -->
                <div class="col-12 checkout-title">
                    <p>結帳</p>
                </div>

                <!-- 步驟顯示 -->
                <div class="col-8 col-lg-3 checkout-step d-flex justify-content-between">
                    <div class="step step-1">1</div>
                    <div class="step step-2">2</div>
                    <div class="step step-3">3</div>
                </div>
            </div>

            <!-- 物流 -->
            <div id="select-ship">
                <div class="backtocart">
                    <a href="cart-list.php">
                        <i class="fas fa-arrow-alt-circle-left mr-2"></i>返回購物車
                    </a>
                </div>
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
                                    <label for="re_add">宅配地址</label><br>
                                    <div id="twzipcode"></div>
                                    <input type="text" class="re_add" name="re_address" id="re_add">
                                    <p class="remind">※ 請確認收件地址是否有誤，如有錯誤，需請自行負責，敬請見諒！</p>
                                    <small class="warn"></small><br>
                                </div>

                                <div class="store mb-4">
                                    <label>選擇門市</label><br>
                                    <div class="select-711">選擇7-11門市</div>
                                    <p class="re_store_txt"></p>
                                    <input type="hidden" name="re_store" class="re_store" value="">
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
                <div class="backtoship">
                    <a href="http://localhost/BeerU/public/checkout.php?step=1">
                        <i class="fas fa-arrow-alt-circle-left mr-2"></i>返回物流選項
                    </a>
                </div>
                <div class="row justify-content-center flex-column align-items-center select-payment">
                    <div class="col-12 col-lg-8 col-xl-6">

                        <form name="mypayment" method="post" novalidate onsubmit="checkpaymentform(); return false;">
                            <!-- 選擇金流方式 -->
                            <label for="payment" class="paytitle">選擇金流方式</label><br>
                            <select name="payment" id="payment" class="payment">
                                <option value="取貨付款">取貨付款</option>
                                <option value="信用卡付款">信用卡付款</option>
                            </select>
                            <small class="warn"></small>

                            <!-- 信用卡 -->
                            <div class="credit-card">
                                <div class="mycreditcard d-flex mt-4 flex-wrap align-items-center ">
                                    <div class="col-12 col-lg-6 px-lg-0">
                                        <div class="credit-card-box ">
                                            <div class="flip">
                                                <div class="front">
                                                    <div class="chip"></div>
                                                    <div class="logo">
                                                        <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                                                            <g>
                                                                <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                                                            c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                                                            c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                                                            M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                                                            c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                                                            c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                                                            l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                                                            C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                                                            C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                                                            c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                                                            h-3.888L19.153,16.8z" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="number"></div>
                                                    <div class="card-holder">
                                                        <label>Card holder</label>
                                                        <div></div>
                                                    </div>
                                                    <div class="card-expiration-date">
                                                        <label>Expires</label>
                                                        <div></div>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div class="strip"></div>
                                                    <div class="logo">
                                                        <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                                                            <g>
                                                                <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                                                            c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                                                            c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                                                            M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                                                            c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                                                            c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                                                            l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                                                            C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                                                            C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                                                            c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                                                            h-3.888L19.153,16.8z" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="ccv">
                                                        <label>CCV</label>
                                                        <div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 pr-lg-0">
                                        <small class="warn"></small>
                                        <div class="credit-cart-input">
                                            <div>
                                                <label for="card-number">信用卡卡號</label>
                                                <div class="card-number-grop d-flex justify-content-between">
                                                    <input type="num" id="card-number" class="input-cart-number js-input-cart-number" maxlength="4" />
                                                    <input type="num" id="card-number-1" class="input-cart-number js-input-cart-number" maxlength="4" />
                                                    <input type="num" id="card-number-2" class="input-cart-number js-input-cart-number" maxlength="4" />
                                                    <input type="num" id="card-number-3" class="input-cart-number js-input-cart-number" maxlength="4" />
                                                </div>
                                            </div>
                                            <div>
                                                <label for="card-holder">持卡人姓名</label>
                                                <input type="text" id="card-holder" class="js-card-holder" maxlength="30" />
                                            </div>
                                            <div class="fieldset-expiration">
                                                <label for="card-expiration-month">有效期限</label>
                                                <div class="select">
                                                    <select id="card-expiration-month" class="js-card-expiration-month selectdate">
                                                        <option></option>
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                        <option>05</option>
                                                        <option>06</option>
                                                        <option>07</option>
                                                        <option>08</option>
                                                        <option>09</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                    </select>
                                                </div>
                                                <div class="select">
                                                    <select id="card-expiration-year" class="js-card-expiration-year selectdate">
                                                        <option></option>
                                                        <option>2021</option>
                                                        <option>2022</option>
                                                        <option>2023</option>
                                                        <option>2024</option>
                                                        <option>2025</option>
                                                        <option>2026</option>
                                                        <option>2027</option>
                                                        <option>2028</option>
                                                        <option>2029</option>
                                                        <option>2030</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="fieldset-ccv">
                                                <label for="card-ccv">CCV</label>
                                                <input type="text" id="card-ccv" class="js-card-ccv" maxlength="3" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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

                                <!-- 最後金額計算 -->
                                <div class="calc-price mt-4 mr-lg-4">
                                    <div class="coupon d-flex justify-content-end">
                                        <div class="col-4 col-lg-3 text-right">折價券</div>
                                        <div class="col-4 col-lg-3 text-right mydiscount"></div>
                                    </div>
                                    <div class="shipping d-flex justify-content-end">
                                        <div class="col-4 col-lg-3 text-right">運費</div>
                                        <div class="col-4 col-lg-3 text-right myshipping"></div>
                                    </div>
                                    <div class="total-price d-flex justify-content-end">
                                        <div class="col-4 col-lg-3 text-right">金額總計</div>
                                        <div class="col-4 col-lg-3 text-right mytotalprice"></div>
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
                            <p class="text-center text-lg-left" id="order_num"></p>
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
                                        <div class="v-tbody col-3 px-0 text-center text-lg-left" id="orderDay">2021-05-03</div>
                                        <div class="v-tbody col-3 px-0 text-center text-lg-left" id="mytotalprice"></div>
                                        <div class="v-tbody col-3 px-0 text-center text-lg-left" id="mypayment"></div>
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

                                    <div class="my-checkout-p-wrap">
                                        <!-- 單支產品開始 -->
                                    </div>


                                    <!-- 最後金額計算 -->
                                    <div class="calc-price mt-4 mr-lg-4">
                                        <div class="coupon d-flex justify-content-end">
                                            <div class="col-4 col-lg-3 text-right">折價券</div>
                                            <div class="col-4 col-lg-3 text-right mydiscount"></div>
                                        </div>
                                        <div class="shipping d-flex justify-content-end">
                                            <div class="col-4 col-lg-3 text-right">運費</div>
                                            <div class="col-4 col-lg-3 text-right myshipping"></div>
                                        </div>
                                        <div class="total-price d-flex justify-content-end">
                                            <div class="col-4 col-lg-3 text-right">金額總計</div>
                                            <div class="col-4 col-lg-3 text-right mytotalprice"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 收件人資訊 -->
                                <div class="re-detail mt-5">
                                    <div class="d-header d-flex flex-wrap">
                                        <p class="col-12 px-2">收件人資訊</p>
                                    </div>
                                    <div class="re-content d-flex px-3 flex-column flex-lg-row">
                                        <div class="re01 col-lg-2 px-0 d-flex flex-row flex-lg-wrap align-items-lg-start">
                                            <div class="col-3 col-lg-12 re-thead px-0 pl-lg-1">收件人</div>
                                            <div class="col-9 col-lg-12 re-tbody pl-3 pl-lg-1" id="myRecipient"></div>
                                        </div>
                                        <div class=" re02 col-lg-3 px-0 d-flex flex-row flex-lg-wrap align-items-lg-start">
                                            <div class=" col-3 col-lg-12 re-thead px-0">收件人電話</div>
                                            <div class="col-9 col-lg-12 re-tbody pl-3 px-lg-0" id="myRecipientPhone"></div>
                                        </div>
                                        <div class="re03 col-lg-5 px-0 d-flex flex-row flex-lg-wrap align-items-lg-start">
                                            <div class="col-3 col-lg-12 re-thead px-0">收件地址</div>
                                            <div class="col-9 col-lg-12 re-tbody pl-3 pl-lg-0 pr-lg-2" id="myRecipientAdd"></div>
                                        </div>
                                        <div class="re04 col-lg-2 px-0 d-flex flex-row flex-lg-wrap align-items-lg-start">
                                            <div class="col-3 col-lg-12 re-thead px-0">運送方式</div>
                                            <div class="col-9 col-lg-12 re-tbody pl-3 px-lg-0" id="myship"></div>
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
    let Q_total = <?= $Q_total ?>;
    if (Q_total >= 15) {
        $("#ship option[value='超商取貨']").remove();
        $('#ship').next().html('<i class="fas fa-exclamation-circle"></i>目前選購之商品總數已超過超商取貨大小限制，僅能宅配取貨')
    }

    // 台灣地址套件
    $("#twzipcode").twzipcode({
        zipcodeIntoDistrict: true, // 郵遞區號自動顯示在區別選單中
        css: ["re_city", "re_dist"], // 自訂 "城市"、"地別" class 名稱 
        countyName: "re_city", // 自訂城市 select 標籤的 name 值
        districtName: "re_dist" // 自訂區別 select 標籤的 name 值

    });


    // 要被檢查的東西
    const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
    let re_name = $('#re_name')
    let re_mobile = $('#re_mobile')
    let re_city = document.all.re_city
    let re_dist = document.all.re_dist
    let re_add = $('.re_add')
    let re_arr = [re_name, re_mobile, re_add, ]


    // 從session reload資料 for 上一步或刷新
    function reloadData() {

        $('#ship').val('<?= $_SESSION['checkout']['ship'] ?? '宅配到府' ?>')
        if ($('#ship').val() == '超商取貨') {
            $('.store').fadeIn(150)
            $('.address').css('display', 'none')
        }

        $('#shipping').val(<?= $_SESSION['checkout']['shipping'] ?? 80 ?>)

        re_name.val('<?= $_SESSION['checkout']['re_name'] ?? '' ?>')
        re_mobile.val('<?= $_SESSION['checkout']['re_mobile'] ?? '' ?>')

        if (<?= isset($_SESSION['checkout']['re_city']) ? 'true' : 'false' ?> == true) {
            re_add.val("<?= isset($_SESSION['checkout']['re_address']) ? $_SESSION['checkout']['re_address'] : '' ?>")
            re_city.value = "<?= isset($_SESSION['checkout']['re_city']) ? $_SESSION['checkout']['re_city'] : '' ?>"
            re_dist.value = "<?= isset($_SESSION['checkout']['re_dist']) ? $_SESSION['checkout']['re_dist'] : '' ?>"
        }

        $('#payment').val('取貨付款')
    }


    // 偵測購物車內有沒有商品
    function init() {
        let cartProduct = '<?= !empty($_SESSION['cart']) ? 'true' : 'false' ?>'
        if (cartProduct == 'true') {
            // 第一次進入頁面非刷新的時候，給網址step1
            if (window.location.search == '') {
                let url = location.pathname + '?step=1'
                history.pushState({
                    url: url,
                    title: document.title
                }, document.title, url)
                $('#select-ship').fadeIn(150)
                $('.step-1').addClass('on')
            }

            // 刷新的時候偵測網址
            if (window.location.search.substr(6, 1) == 1) {
                $('#select-ship').fadeIn(150)
                $('.step-1').addClass('on')
                reloadData()

            }
            if (window.location.search.substr(6, 1) == 2) {
                reloadData()
                checkshipform()
                $('#select-ship').css('display', 'none')
                $('#select-payment').fadeIn(150)
                $('.step-2').addClass('on')
                $('.step-1').removeClass('on')
            }
            if (window.location.search.substr(6, 1) == 3) {

                location.href = 'cart-list.php'
                // reloadData()
                // checkshipform()
                // checkpaymentform()
                // $('#select-payment').css('display', 'none')
                // $('#complete-order').fadeIn(150)
                // $('.step-3').addClass('on')
                // $('.step-2').removeClass('on')
            }
        } else {
            location.href = 'cart-list.php'
        }

    }

    init()

    window.onpopstate = function() {
        init()
    }


    // 宅配vs超商
    $('#ship').on('change', function() {
        if ($('#ship').val() == '宅配到府') {
            $('.address').fadeIn(150)
            $('.store').css('display', 'none')
            $('#shipping').val(80)
            $('.re_store_txt').text('')
            $('.re_store').val('')

            // 恢復
            re_arr.forEach(el => {
                el.removeClass('borderispink')
                el.nextAll('.warn').text('')
            })

            re_city.classList.remove('borderispink')
            re_dist.classList.remove('borderispink')


        }
        if ($('#ship').val() == '超商取貨') {
            $('.store').fadeIn(150)
            $('.address').css('display', 'none')
            $('#shipping').val(60)
            re_add.val('')
            re_city.value = ''
            re_dist.value = ''

            // 恢復
            re_arr.forEach(el => {
                el.removeClass('borderispink')
                el.nextAll('.warn').text('')
            })

            re_city.classList.remove('borderispink')
            re_dist.classList.remove('borderispink')

        }
    })

    $('.select-711').on('click', function() {
        $(this).next().text('延華門市-台北市大同區延平北路一段89號91號93號1樓')
        $(this).nextAll('input').val('延華門市-台北市大同區延平北路一段89號91號93號1樓')
    })

    // 下一步----------------------------------------------------

    let p_data = {};

    // 商品的html碼
    const checkoutpTpl = p => {
        return `
        <div class="my-checkout-p d-flex align-items-center mb-2">
                                    <div class="col-7 col-lg-8 d-flex align-items-center">
                                        <div class="col-2 thisp-pic px-0"><img src="../images/products/${p.pic}"
                                                alt=""></div>
                                        <div class="col-10 thisp-name px-0">
                                            <p class="c-name">${p.c_name}</p>
                                            <p class="e-name d-none d-lg-block">${p.e_name !=undefined ?p.e_name:'' }</p>
                                        </div>
                                    </div>
                                    <div class="col-2 thisp-qty px-0 text-center">${p.quantity}</div>
                                    <div class="col-3 col-lg-2 thisp-subp px-0 text-center">$${p.quantity * p.price}</div>
                                </div>
        `
    }

    // 產生商品頁面
    function renderCheckoutP() {
        // console.log(p_data.cart)
        $('.my-checkout-p-wrap').html('')
        for (let el in p_data.cart) {
            let p = p_data.cart[el]
            $('.my-checkout-p-wrap').append(checkoutpTpl(p))
        }

    }

    // 計算價格
    function renderCalcPrice() {
        let subPrice = 0
        let coupon = 0
        let shipping = p_data.checkout['shipping']
        for (let el in p_data.cart) {
            let p = p_data.cart[el]
            subPrice += p.quantity * p.price
        }
        if (p_data.checkout['discount'] != undefined) {
            coupon = p_data.checkout['discount']
            $('.coupon').html(`
        <div class="col-4 col-lg-3 text-right">折價券</div>
        <div class="col-4 col-lg-3 text-right mydiscount"></div>`)
            $('.mydiscount').text('– $' + coupon)
        } else {
            $('.coupon').html('')
        }
        let total_Price = subPrice * 1 - coupon * 1 + shipping * 1
        $('.myshipping').text('$' + shipping)
        $('.mytotalprice').text('NT$' + total_Price).attr('data-tprice', total_Price)

    }


    // 檢查表格與AJAX傳送
    function checkshipform() {
        let isPass = true

        // 先把錯誤格式回復
        re_arr.forEach(el => {
            el.removeClass('borderispink')
            el.nextAll('.warn').text('')
        })

        re_city.classList.remove('borderispink')
        re_dist.classList.remove('borderispink')

        if (re_name.val().length < 2) {
            isPass = false
            re_name.addClass('borderispink')
            re_name.nextAll('.warn').html('<i class="far fa-times-circle"></i>請輸入正確的姓名')
        }
        if (mobile_re.test(re_mobile.val()) == false) {
            isPass = false
            re_mobile.addClass('borderispink')
            re_mobile.nextAll('.warn').html('<i class="far fa-times-circle"></i>請輸入正確的手機號碼')
        }

        if ($('#ship').val() == '宅配到府') {


            if (re_city.value == '') {
                isPass = false
                re_city.classList.add('borderispink')
                re_add.nextAll('.warn').html('<i class="far fa-times-circle"></i>請輸入正確的地址')
            }
            if (re_dist.value == '') {
                isPass = false
                re_dist.classList.add('borderispink')
                re_add.nextAll('.warn').html('<i class="far fa-times-circle"></i>請輸入正確的地址')
            }

            if (re_add.val().length < 5) {
                isPass = false
                re_add.addClass('borderispink')
                re_add.nextAll('.warn').html('<i class="far fa-times-circle"></i>請輸入正確的地址')
            }

        }




        if (isPass) {
            $.post(
                'checkout-api.php',
                $(document.myship).serialize(),
                function(data) {
                    p_data = data
                    console.log(p_data)
                    renderCheckoutP()
                    renderCalcPrice()
                    $('#select-ship').css('display', 'none')
                    $('#select-payment').fadeIn(150)
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






    // 確認結帳----------------------------------------------------


    // 日期+0
    function setTimeDateFmt(s) {
        return s < 10 ? '0' + s : s;
    }

    // 產生訂單編號
    function randomNumber() {
        const now = new Date()
        let month = now.getMonth() + 1
        let day = now.getDate()
        let hour = now.getHours()
        let minutes = now.getMinutes()
        let seconds = now.getSeconds()
        month = setTimeDateFmt(month)
        day = setTimeDateFmt(day)
        hour = setTimeDateFmt(hour)
        minutes = setTimeDateFmt(minutes)
        let orderCode = now.getFullYear().toString() + month.toString() + day + hour + minutes + (Math.round(Math.random() * 100)).toString();
        $('#order_num').text('訂單編號：' + orderCode)
        return orderCode;
    }

    // 產生訂單概要
    function renderOrderDetail() {
        let Today = new Date()
        let totalPrice = $('.mytotalprice').attr('data-tprice')
        $('#orderDay').text(Today.getFullYear() + '-' + setTimeDateFmt((Today.getMonth() + 1)) + '-' + setTimeDateFmt(Today.getDate()))
        $('#mytotalprice').text('NT$' + totalPrice)
        $('#mypayment').text(p_data.checkout['payment'])
    }

    // 產生收件人資訊
    function renderRecipient() {
        $('#myRecipient').text(p_data.checkout['re_name'])
        $('#myRecipientPhone').text(p_data.checkout['re_mobile'])
        $('#myRecipientAdd').text(p_data.checkout['re_add'])
        $('#myship').text(p_data.checkout['ship'])
    }

    // 取貨vs信用卡
    $('#payment').on('change', function() {
        if ($('#payment').val() == '信用卡付款') {
            $('.credit-card').fadeIn(150)
        } else {
            $('.credit-card').fadeOut(150)
        }
    })

    // 信用卡動態
    let $t;

    $('.js-input-cart-number').on('keyup change', function() {
        var card_number = '';
        $t = $(this);

        if ($t.val().length > 3) {
            $t.next().focus();
        }

        $('.js-input-cart-number').each(function() {
            card_number += $(this).val() + ' ';

            if ($(this).val().length == 4) {
                $(this).next().focus();
            }
        })

        $('.credit-card-box .number').html(card_number);
    });
    $('.js-card-holder').on('keyup change', function() {
        $t = $(this);
        $('.credit-card-box .card-holder div').html($t.val());
    });
    $('.js-card-holder').on('keyup change', function() {
        $t = $(this);
        $('.credit-card-box .card-holder div').html($t.val());
    });
    $('.js-card-expiration-month, .js-card-expiration-year').change(function() {
        var m = $('#card-expiration-month option').index($('#card-expiration-month option:selected'));
        var y = $('#card-expiration-year').val().substr(2, 2);
        m = (m < 10) ? '0' + m : m;
        $('.card-expiration-date div').html(m + '/' + y);
    })
    $('.js-card-ccv').on('focus', function() {
        $('.credit-card-box').addClass('hover');
    }).on('blur', function() {
        $('.credit-card-box').removeClass('hover');
    }).on('keyup change', function() {
        $('.ccv div').html($(this).val());
    });

    // 檢查表格與AJAX傳送
    function checkpaymentform() {
        let isPass = true
        let totalPrice = $('.mytotalprice').attr('data-tprice')
        let payment = $('#payment').val()
        let order_num = randomNumber()

        // 檢查信用卡表格
        if ($('#payment').val() == '信用卡付款') {
            let cardInput = $('.credit-cart-input input')
            let cardSelect = $('.credit-cart-input .selectdate')

            cardInput.removeClass('borderispink')
            $('.credit-cart-input .select').removeClass('borderispink')
            $('.credit-cart-input').prev().html('')

            if (cardInput.val().length < 4) {
                isPass = false
                cardInput.addClass('borderispink')
                $('.credit-cart-input').prev().html('<i class="far fa-times-circle"></i>請輸入正確的信用卡資訊')
            }
            if (cardSelect.val() == '') {
                isPass = false
                $('.credit-cart-input .select').addClass('borderispink')
                $('.credit-cart-input').prev().html('<i class="far fa-times-circle"></i>請輸入正確的信用卡資訊')
            }


        }

        if (isPass) {
            $.post(
                'checkout-api.php', {
                    'payment': payment,
                    'totalPrice': totalPrice,
                    'order_num': order_num
                },
                function(data) {
                    // console.log(data)
                    p_data = data
                    $('.cart-pnum').addClass('d-none')
                    renderOrderDetail()
                    renderRecipient()
                    $('#select-payment').css('display', 'none')
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