// if ($(window).height() < 815) {
//     $("html, body").animate({ scrollTop: 0 }, "slow")
// }
// --------------------------------------------
// $('.event-card').hide()

// $('.event-card').mouseenter(function () {
//     $(this).css('transform','scale(2)').css('transition','.3s')
// }).mouseleave(function () {
//     $(this).css('transform','scale(1)').css('transition','.3s')
// })

// --------------------------------------------

// select選擇人數
// 選擇人數：預設關閉
$('.one, .two, hr').hide()

// 設置選項
$('#people').on('change',function(){
    if ($(this).val() == 0){
        $('.one, .two,hr').fadeOut(500);
    }

    if ($(this).val() == 1){
        $('.one ,hr').fadeIn(500);
        $('.two ').fadeOut(1);
    }

    if ($(this).val() == 2){
        $('.one, .two,hr').fadeIn(500);
    }
})

