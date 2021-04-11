$(function () {


    // 主選單

    // 桌機板 width >= 992 
    // hover
    if ($(window).width() >= 992) {
        $('.nav-item').on('mouseenter', function () {
            $(this).addClass('nav-item-hover')
            $(this).children('.nav-sub-menu').addClass('nav-sub-menu-open')
        })
        $('.nav-item').on('mouseleave', function () {
            $(this).removeClass('nav-item-hover')
            $(this).children('.nav-sub-menu').removeClass('nav-sub-menu-open')
        })

    }

    // 手機板 width < 992 
    // click
        if ($(window).width() < 992) {
            $('.nav-item').on('click', function () {
                $(this).children('.nav-sub-menu').toggleClass('nav-sub-menu-open').end().siblings().children('.nav-sub-menu').removeClass('nav-sub-menu-open')
            })

        }


    // 搜尋按鈕
    $('.search').on('click', function () {
        $('.search-bar').toggleClass('search-bar-open')
    })

    // 選單按鈕開關
        $('.trigger').click(function () {
            $('.trigger span').toggleClass('on')

        })


})