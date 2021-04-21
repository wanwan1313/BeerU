$(function() {


    // 商品分類切換
    if ($(window).width() >= 992) {
        $('.product-select > .product-category').css('display', 'block')
    }


    $(window).resize(function() {

        if ($(window).width() >= 992) {
            $('.product-select > .product-category').css('display', 'block')
        }
        if ($(window).width() < 992) {
            $('.product-select > .product-category').css('display', 'none')
        }
    })

    // 排序與篩選的按鈕
    $('.fixed-btn').on('click',function(){
        $(this).parent('.product-select').toggleClass('on')
    })

    




})