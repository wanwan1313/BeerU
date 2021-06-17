// 自動輸入p0
//  --------------------------------------------
$('.auto_input0').click(function () {
    // 設值
    $p0_name.val('洪喆明');
    // 金框
    $p0_name.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
    // 勾勾出現
    $p0_name.prev()
        .html("姓名 <span class='check_right'><i class='fas fa-check'></i></span>");
    //  -----------
    // 設值
    $p0_mobile.val('0988540103');
    // 金框
    $p0_mobile.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
    // 勾勾出現
    $p0_mobile.prev()
        .html("電話 <span class='check_right'><i class='fas fa-check'></i></span>");
})

// 自動輸入全部
//  --------------------------------------------
$('.auto_input1').click(function () {
    // 設值
    $p1_name.val('伍佰');
    // 金框
    $p1_name.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
    // 勾勾出現
    $p1_name.prev()
        .html("姓名 <span class='check_right'><i class='fas fa-check'></i></span>");
    //  -----------
    // 設值
    $p1_mobile.val('0912345678');
    // 金框
    $p1_mobile.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
    // 勾勾出現
    $p1_mobile.prev()
        .html("電話 <span class='check_right'><i class='fas fa-check'></i></span>");
    //  -----------
    // 設值
    $p2_name.val('蕭花花公子帥鮭魚啊這個名字帥嗎');
    // 金框
    $p2_name.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
    // 勾勾出現
    $p2_name.prev()
        .html("姓名 <span class='check_right'><i class='fas fa-check'></i></span>");
    //  -----------
    // 設值(*故意設錯的)
    $p2_mobile.val('09876543210');
    // 紅框
    $p2_mobile.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
    // 紅字
    $p2_mobile.parent().next().next()
        .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話')
        .css('padding-left', '231px');
    // 紅字-手機版(移位置不同)
    if ($(window).width() < 768) {
        $p2_mobile.parent().next().next()
            .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話')
            .css('padding-left', '13px');
    }
})

// 重設資料
//  --------------------------------------------
$('.input_reset').click(function () {
    // 設值
    $p0_name.val('');
    // 無框
    $p0_name.addClass('input_origin').removeClass('input_wrong').removeClass('input_right');
    // 勾勾消失
    $p0_name.prev()
        .removeClass('check_right').html('姓名');
    // 無字
    $p0_name.parent().next()
        .removeClass('check_wrong').addClass('d-none').html('');

    //  ----------- 
    // 設值  
    $p0_mobile.val('');
    // 無框
    $p0_mobile.addClass('input_origin').removeClass('input_wrong').removeClass('input_right');
    // 勾勾消失
    $p0_mobile.prev()
        .removeClass('check_right').html('電話');
    // 無字
    $p0_mobile.parent().next()
        .removeClass('check_wrong').addClass('d-none').html('');
    //  ----------------------
    // 設值
    $p1_name.val('');
    // 無框
    $p1_name.addClass('input_origin').removeClass('input_wrong').removeClass('input_right');
    // 勾勾消失
    $p1_name.prev()
        .removeClass('check_right').html('姓名');
    // 無字
    $p1_name.parent().next().next().next()
        .removeClass('check_wrong').addClass('d-none').html('');
    // 無字-手機版(移位置不同)
    if ($(window).width() < 768) {
        $p1_name.parent().next()
            .removeClass('input_origin').removeClass('check_wrong').addClass('d-none').html('');
    }
    //  -----------
    // 設值
    $p1_mobile.val('');
    // 無框
    $p1_mobile.addClass('input_origin').removeClass('input_wrong').removeClass('input_right');
    // 勾勾消失
    $p1_mobile.prev()
        .removeClass('check_right').html('電話');
    // 無字
    $p1_mobile.parent().next().next()
        .removeClass('check_wrong').addClass('d-none').html('');
    //  ----------------------
    // 設值
    $p2_name.val('');
    // 無框
    $p2_name.addClass('input_origin').removeClass('input_wrong').removeClass('input_right');
    // 勾勾消失
    $p2_name.prev()
        .removeClass('check_right').html('姓名');
    // 無字
    $p2_name.parent().next().next().next()
        .removeClass('check_wrong').addClass('d-none').html('');
    // 無字-手機版(移位置不同)
    if ($(window).width() < 768) {
        $p2_name.parent().next()
            .removeClass('input_origin').removeClass('check_wrong').addClass('d-none').html('');
    }
    //  -----------
    // 設值
    $p2_mobile.val('');
    // 無框
    $p2_mobile.addClass('input_origin').removeClass('input_wrong').removeClass('input_right');
    // 勾勾消失
    $p2_mobile.prev()
        .removeClass('check_right').html('電話');
    // 無字
    $p2_mobile.parent().next().next()
        .removeClass('check_wrong').addClass('d-none').html('');

    //  ----------------------
    // 設值
    $input_check.val('');
    // 無框
    $input_check.addClass('input_origin').removeClass('input_wrong').removeClass('input_right');
    // 勾勾消失
    $input_check.prev()
        .removeClass('check_right').html('驗證碼');
    // 無字
    $input_check.next().next().next()
        .removeClass('check_wrong').addClass('d-none').html('');
})


