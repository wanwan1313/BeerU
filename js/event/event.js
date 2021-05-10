// if ($(window).height() < 815) {
//     $("html, body").animate({ scrollTop: 0 }, "slow")
// }
// --------------------------------------------
// $('.event-card').hide()

$('.event-card').mouseenter(function () {
    $(this).css('transform','scale(10)')
}).mouseleave(function () {
    $(this).css('transform','scale(1)')
})

// --------------------------------------------


// 選擇人數：預設關閉
$('.one_people, .two_people').hide()

// 設置選項
// 
// 
$('#people').on('change',function(){
    if ($(this).val() == 0){
        $('.one_people').fadeOut(500);
        $('.two_people').fadeOut(500);
    }

    if ($(this).val() == 1){
        $('.one_people').fadeIn(500);
        $('.two_people').fadeOut(1);
    }

    if ($(this).val() == 2){
        $('.two_people').fadeIn(500);
        $('.one_people').fadeOut(1);
    }
})

