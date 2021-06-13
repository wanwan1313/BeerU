$('.auto_input0').click(function() {
    const $p0_name = $('#p0_name')

    const $p0_mobile = $('#p0_mobile')


    $p0_name.val('任賢齊');
    $p0_name.css('border', '2px solid var(--gold)');
    $p0_name.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
    $p0_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');

    $p0_mobile.val('0988540103');
    $p0_mobile.css('border', '2px solid var(--gold)');
    $p0_mobile.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
    $p0_mobile.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');

})
$('.auto_input1').click(function() {

    $p1_name.val('九孔');
    $p1_name.css('border', '2px solid var(--gold)');
    $p1_name.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
    $p1_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
    $p1_mobile.val('0912345678');
    $p1_mobile.css('border', '2px solid var(--gold)');
    $p1_mobile.parent().next().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
    $p1_mobile.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
    $p2_name.val('李奧納多皮卡丘');
    $p2_name.css('border', '2px solid var(--gold)');
    $p2_name.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
    $p2_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
    $p2_mobile.val('09876543210');
    $p2_mobile.css('border', '2px solid var(--pink)');
    $p2_mobile.parent().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '231px');
    $p2_mobile.siblings().children().css('display', 'none');
})

// $('.join .one').before().click(function() {
//     const $p1_name = $('#p1_name')

//     const $p1_mobile = $('#p1_mobile')


//     $p1_name.val('鄧紫棋');

//     $p1_mobile.val('0912345678');


// })
// $('.join .two').before().click(function() {
//     const $p2_name = $('#p2_name')

//     const $p2_mobile = $('#p2_mobile')


//     $p2_name.val('黃明志');

//     $p2_mobile.val('0966320901');


// })