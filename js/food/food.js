// Scroll to top button 
// 桌機版 
if ($(window).width() >= 992) {
    $(window).scroll(function () {

        if ($(this).scrollTop() >= 1450) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
    })

    $('#return-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 1450
        }, 300, 'swing');

    })

}


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

// $('.scrollbtn').on('click', function (e) {
//     e.preventDefault();
//     $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top - 1000 }, 300, 'swing');

// });


// $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top }, 300, 'swing');



$(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 300, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});



// ------- 手動畫 ------- //

$(window).scroll(function () {


    let scrollNow = $(window).scrollTop();
    console.log('scrollTop', $(this).scrollTop());

    // 桌機版
    if ($(window).width() >= 992) {
        if (scrollNow >= 900) {

            $('.title-line').css('opacity', '1').css('transition', '1s')

        }


        if (scrollNow >= 1000) {

            $('.hand').css('transform', 'translate(-150px,-250px) rotate(0)').css('transition', '1s')



            //   setInterval(() => {
            //     $('.type-color').css('opacity','1').css('transition','1s')

            //   }, 1500);


        }

        else {
            $('.hand').css('transform', 'translate(-150px,-250px) rotate(-30deg)').css('transition', '1s')

        }




    }

    // 

    if ($(window).width() < 992) {

        if (scrollNow >= 764) {

            $('.Beer-type').css('opacity', '1').css('transition', '0.8s')

        }
    }


});

//  ------  scroll-animations  ------ //

jQuery(function ($) {
    // Function which adds the 'animated' class to any '.animatable' in view
    let doAnimations = function () {
        // Calc current offset and get all animatables
        let offset = $(window).scrollTop() + $(window).height(),
            $animatables = $('.animatable');
        // Unbind scroll handler if we have no animatables
        if ($animatables.length == 0) {
            // $(window).off('scroll', doAnimations);
        }
        // Check all animatables and animate them if necessary
        $animatables.each(function (i) {
            let $animatable = $(this);
            // console.log('($animatable.offset().top + $animatable.height() - 100) < offset',($animatable.offset().top + $animatable.height() - 100) < offset);
            if (($animatable.offset().top + $animatable.height() - 20) < offset) {
                $animatable.removeClass('animatable').addClass('animated');
            }
        });

        $('.animated').each(function (i) {
            let $animatable = $(this);

            if (($(this).offset().top + $(this).height() - 40) > offset) {
                $(this).removeClass('animated').addClass('animatable');
            }
        });
    };
    // Hook doAnimations on scroll, and trigger a scroll
    $(window).on('scroll', doAnimations);
    $(window).trigger('scroll');
});