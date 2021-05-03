// Scroll to top button 
// 桌機版 
if ($(window).width() >= 992) {
    $(window).scroll(function () {

        if ($(this).scrollTop() >= 2140) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeIn(200);
        }
    })

    $('#return-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 1300
        }, 300, 'swing');

    })

}

// $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top }, 300, 'swing');



// 手機版 
if ($(window).width() < 992) {
    $(window).scroll(function () {

        if ($(this).scrollTop() >= 50) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }


    })

    $('#return-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
    })
}
