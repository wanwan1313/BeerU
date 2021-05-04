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
            scrollTop: 1350
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


// ------- 手動畫 ------- //

$(window).scroll(function () {


    let scrollNow = $(window).scrollTop();
    console.log('scrollTop', $(this).scrollTop());

    // 桌機版
    if ($(window).width() >= 992) {
        if (scrollNow >= 900) {

            $('.title-line').css('opacity', '1').css('transition', '1s')

        }


        if (scrollNow >= 1400) {

            $('.hand').css('transform', 'translate(-150px,-250px) rotate(0)').css('transition', '1s')



            //   setInterval(() => {
            //     $('.type-color').css('opacity','1').css('transition','1s')

            //   }, 1500);


        }

        else {
            $('.hand').css('transform', 'translate(-150px,-250px) rotate(-30deg)').css('transition', '1s')

        }




    }

    // 手機版

    if ($(window).width() < 992) {

        if (scrollNow >= 764) {

            $('.Beer-type').css('opacity', '1').css('transition', '0.8s')

        }
    }


});
