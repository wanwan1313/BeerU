$('.auto_input0').click(function () {
    // const $p0_name = $('#p0_name')

    // const $p0_mobile = $('#p0_mobile')


    $p0_name.val('洪喆明');
    $p0_name.css('border', '2px solid var(--gold)');
    $p0_name.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
    $p0_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');

    $p0_mobile.val('0988540103');
    $p0_mobile.css('border', '2px solid var(--gold)');
    $p0_mobile.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
    $p0_mobile.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');

})
$('.auto_input1').click(function () {
    $p1_name.val('伍佰');
    $p1_name.css('border', '2px solid var(--gold)');
    $p1_name.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
    $p1_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
    $('.one .memo').addClass('d-none').removeClass('d-block');

    $p1_mobile.val('0912345678');
    $p1_mobile.css('border', '2px solid var(--gold)');
    $p1_mobile.parent().next().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
    $p1_mobile.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');

    $p2_name.val('蕭花花公子帥鮭魚啊這個名字帥嗎');
    $p2_name.css('border', '2px solid var(--gold)');
    $p2_name.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
    $p2_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
    $(".two .memo:contains('姓名')").addClass('d-none').removeClass('d-block');
    $(".two .memo:contains('電話')").css('padding-left', '231px');

    $p2_mobile.val('09876543210');
    $p2_mobile.css('border', '2px solid var(--pink)');
    $p2_mobile.parent().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '231px');
    $p2_mobile.siblings().children().css('display', 'none');


    // $('#js5-form3-input').val(authCode)
    // $input_check.css('border', '2px solid var(--gold)');
    // $input_check.prev().children().css('color', 'var(--gold)').css('display', 'inline-block');
    // $input_check.next().next().next().removeClass('d-block').addClass('d-none');
})
$('.input_reset').click(function () {

    $p0_name.val('');
    $p0_name.css('border', 'unset');
    $p0_name.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
    $p0_name.siblings().children().css('color', 'unset').css('display', 'none');
    $p0_mobile.val('');
    $p0_mobile.css('border', 'unset');
    $p0_mobile.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
    $p0_mobile.siblings().children().css('color', 'unset').css('display', 'none');
    $p1_name.val('');
    $p1_name.css('border', 'unset');
    $p1_name.parent().next().next().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
    $p1_name.siblings().children().css('color', 'unset').css('display', 'none');

    $p1_mobile.val('');
    $p1_mobile.css('border', 'unset');
    $p1_mobile.parent().next().next().removeClass('d-block').addClass('d-none').css('color', 'unset');
    $p1_mobile.siblings().children().css('color', 'unset').css('display', 'none');

    $p2_name.val('');
    $p2_name.css('border', 'unset');
    $p2_name.parent().next().next().next().removeClass('d-block').addClass('d-none').css('color', 'unset');
    $p2_name.siblings().children().css('color', 'unset').css('display', 'none');

    $p2_mobile.val('');
    $p2_mobile.css('border', 'unset');
    $p2_mobile.parent().next().next().addClass('d-none').removeClass('d-block').css('color', 'unset').css('padding-left', 'unset');
    $p2_mobile.siblings().children().css('display', 'none');

    $('#js5-form3-input').val('')
    $input_check.css('border', '0px solid var(--gold)');
    $input_check.prev().children().css('color', 'var(--gold)').css('display', 'none');
    $input_check.next().next().next().removeClass('d-block').addClass('d-none');
    
})

$('.auto_input_v').click(function () {
    $('#js5-form3-input').val(authCode)
    $input_check.css('border', '2px solid var(--gold)');
    $input_check.prev().children().css('color', 'var(--gold)').css('display', 'inline-block');
    $input_check.next().next().next().removeClass('d-block').addClass('d-none');

})
