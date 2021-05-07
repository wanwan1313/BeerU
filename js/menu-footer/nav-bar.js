$(function () {


    // 主選單

    // 桌機板 width >= 992 
    // hover
    if ($(window).width() >= 992) {
        $('.beeru-nav-bar .nav-item').on('mouseenter', function () {
            $(this).addClass('nav-item-hover')
            $(this).children('.nav-sub-menu').addClass('nav-sub-menu-open')
        })
        $('.beeru-nav-bar .nav-item').on('mouseleave', function () {
            $(this).removeClass('nav-item-hover')
            $(this).children('.nav-sub-menu').removeClass('nav-sub-menu-open')
        })

    }

    // 手機板 width < 992 
    // click
    if ($(window).width() < 992) {
        $('.beeru-nav-bar  .nav-item').on('click', function () {
            $(this).children('.nav-sub-menu').toggleClass('nav-sub-menu-open').end().siblings().children('.nav-sub-menu').removeClass('nav-sub-menu-open')
        })

    }


    // 搜尋按鈕
    $('.beeru-nav-bar .search').on('click', function () {
        $('.search-bar').toggleClass('search-bar-open')
    })

    // 選單按鈕開關
    $('.trigger').click(function () {
        $('.trigger span').toggleClass('on')
        $('.product-category').toggleClass('on')
    })



    // 分類不同尺寸切換
    if ($(window).width() < 992) {
        $('.mobile-menu > .product-category').css('display', 'block')
    }


    $(window).resize(function () {
        if ($(window).width() < 992) {
            $('.mobile-menu > .product-category').css('display', 'block')
        }
        if ($(window).width() >= 992) {
            $('.mobile-menu > .product-category').css('display', 'none')
        }
    })


     // 分類手風琴
     $('.product-category .category-name').on('click', function () {
        let div_height = $(this).nextAll('.category-sub-item-warp0').height()

        if ($(this).nextAll('.category-sub-item-warp').hasClass('category-sub-item-warp-on') == false) {
            $(this).nextAll('.category-sub-item-warp').addClass('category-sub-item-warp-on').css('height', div_height).end().parent().siblings().children('.category-name').next('.category-sub-item-warp').removeClass('category-sub-item-warp-on').css('height', 0)
            $(this).addClass('category-name-on').parent().siblings().children('.category-name').removeClass('category-name-on')
        } else {
            $(this).nextAll('.category-sub-item-warp').removeClass('category-sub-item-warp-on').css('height', 0)
            $(this).removeClass('category-name-on')
        }
    })


    // 搜尋按鈕
    $('#search').on('keypress', function(event) {
        let pressBtn = event.keyCode
        if (pressBtn == 13 && $(this).val() != "" ) {
            location.href = `all-product.php?search=${$(this).val()}`
        }
    })

    

    



})