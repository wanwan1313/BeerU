$(function () {


    

    if ($(window).width() < 992) {
        let btn_cates = $('.product-category .category-sub-item')
        let btn_first_cates = $('.product-category .category-out-item')

        // -------------------------------------------------------
        // 分類按鈕事件

        // 酒廠/國家/類型/周邊
        btn_cates.on('click', function () {
            let cate = $(this).attr('data-sid')
            location.href = `all-product.php?cate=${cate}&page=1&hot=0&order=1`

            $(this).addClass('on').siblings().removeClass('on')
            $(this).parent().parent().siblings().find('.category-sub-item').removeClass('on')
            btn_first_cates.removeClass('on')

        })

        // 熱門商品
        $('.product-category .selectHotitem').on('click', function () {
            location.href = `all-product.php?cate=0&page=1&hot=1&order=1`
        })

        // 全部商品
        $('.product-category .selectallitem').on('click', function () {
            location.href = `all-product.php`
        })

        // 選取樣式active
        btn_first_cates.on('click', function () {
            $(this).addClass('on').parent().siblings().find('.category-out-item').removeClass('on')
            btn_cates.removeClass('on')
        })
    }

})