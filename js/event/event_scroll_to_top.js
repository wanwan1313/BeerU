// Scroll to top button 
// 桌機版 
if ($(window).width() >= 992) {
    $(window).scroll(function () {

        if ($(this).scrollTop() >= 5) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(500);
        }
    })

    $('#return-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 750, 'swing');

    })

}

// 手機版
if ($(window).width() < 992) {
    $(window).scroll(function () {
        // console.log($(this).scrollTop())
        if ($(this).scrollTop() >= 15) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(500);
        }


    })

    $('#return-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 750,'swing');
    })
}