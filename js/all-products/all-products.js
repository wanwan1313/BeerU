$(function() {


    // 分類手風琴
    $('.category-name').on('click', function () {
        let div_height = $(this).nextAll('.category-sub-item-warp0').height()

        if ($(this).nextAll('.category-sub-item-warp').hasClass('category-sub-item-warp-on') == false) {
            $(this).nextAll('.category-sub-item-warp').addClass('category-sub-item-warp-on').css('height', div_height).end().parent().siblings().children('.category-name').next('.category-sub-item-warp').removeClass('category-sub-item-warp-on').css('height', 0)
            $(this).addClass('category-name-on').parent().siblings().children('.category-name').removeClass('category-name-on')
        } else {
            $(this).nextAll('.category-sub-item-warp').removeClass('category-sub-item-warp-on').css('height', 0)
            $(this).removeClass('category-name-on')
        }
    })

    




})