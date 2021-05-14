$(document).ready(function () {

    $("a").on('click', function (event) {

        if (this.hash !== "") {

            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                window.location.hash = hash;
            });
        }
    });
});


// ------------------- modal -----------------------
$(".modal-trigger").click(function (e) {
    e.preventDefault();
    dataModal = $(this).attr("data-modal");
    $("#" + dataModal).css({ "display": "block" });
    // $("body").css({"overflow-y": "hidden"}); //Prevent double scrollbar.
});

$(".close-modal, .modal-sandbox").click(function () {
    $(".modal").css({ "display": "none" });
    // $("body").css({"overflow-y": "auto"}); //Prevent double scrollbar.
});

// ----------------------text animation 1----------------------------

// $('.animatable').hide()

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


// Scroll to top button 
// 桌機版 
if ($(window).width() >= 992) {
    $(window).scroll(function () {

        if ($(this).scrollTop() >= 400) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
    })

    $('#return-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500, 'swing');

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
