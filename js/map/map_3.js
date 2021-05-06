// 卡片跑出-------------------------------------
$('.map .country').click(function () {
    $('.bg-black').show();
    // $('.map-card').addClass('animate__animated animate__flip');
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
// 商品hover--------------------------------------
$('.map .cup, .map .beer').mouseenter(function () {{$(this).css('transform','scale(1.2)')}}).mouseleave(function () {{$(this).css('transform','scale(1)')}})

// $('.map .know-more').mouseenter(function () {
//     {
//         $('.map .cup-name, .map .beer-name').css('opacity','1')}}).mouseleave(function () {{$('.map .cup-name, .map .beer-name').css('opacity','0')}}).
//                 $('.map .cup-name, .map .beer-name').css('opacity','1').mouseleave(function () {{$('.map .cup-name, .map .beer-name').css('opacity','0')}})
