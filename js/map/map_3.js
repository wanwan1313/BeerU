// 卡片跑出-------------------------------------
$('.map .country img').click(function () {
    $('.bg-black').show();
    $('.map-card').addClass('animate__animated animate__flip');
})


// popup滑鼠移過動畫，點選關閉視窗-----------------
$('.popup .card-close i').mouseenter(function () {
    {
        $(this).addClass('animate__animated animate__rubberBand').addClass('time-075s').addClass('infinite').click(function () {
            $('.bg-black').fadeOut()
        })
    }
}).mouseleave(function () {
    {
        $(this).removeClass('animate__animated animate__rubberBand');
    }
})

//郵票動畫---------------------------------------
$('.stamp_country').addClass('animate__animated animate__fadeInBottomLeft')

// 郵戳動畫--------------------------------------
$('.stamp').addClass('animate__animated animate__fadeInBottomLeft')