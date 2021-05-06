// banner動畫
// 預設關閉
$('.beer_mug, .pipi_beer, .pipi_mug_b .pipi_beer_b').hide()

// 左邊mug出現
$('.beer_mug').delay(500).show().toggleClass('animate__animated animate__fadeIn')

// 右邊天使飛進
setTimeout(function () {
    $('.pipi_beer').show().toggleClass('animate__animated animate__fadeInTopRight').toggleClass('time-05s')
}, 500);

// 天使動動
// setTimeout(function () {
//     $('.pipi_beer').toggleClass('animate__animated animate__fadeInTopRight').toggleClass('time-05s').toggleClass('animate__animated animate__pulse').toggleClass('infinite');
// }, 1000);

// ---------------------------





