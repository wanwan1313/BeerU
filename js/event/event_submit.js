// 預設正確勾勾符號為消失
$('.join form .fa-check').css('display', 'none')
//  -------------------------------------------- 

// 1.設定正規表達式
// 姓名
const name_re = /^[\u4E00-\u9FA5]{2,15}$/;
// 手機
const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
//  -------------------------------------------- 
// 2.設定套用的對象，設參數
// p0_name
const $p0_name = $('#p0_name')
// p0_mobile
const $p0_mobile = $('#p0_mobile')
// p1_name
const $p1_name = $('#p1_name')
// p1_mobile
const $p1_mobile = $('#p1_mobile')
// p2_name
const $p2_name = $('#p2_name')
// p2_mobile
const $p2_mobile = $('#p2_mobile')
// -----------------------------
// checkbox
// const $checkbox = $('#checkbox')
// -----------------------------
const $input_check_val = $('#js5-form3-input').val()
const $input_check = $('#js5-form3-input')

let isPass = true;



//  -------------------------------------------- 
// 3.設定即時驗證
function getValue() {
    // 姓名:
    // 即時驗證：設置不要一開始就紅框？
    // if (name_re.test($p0_name.val())=='') {
    //   $p0_name.css('border', '0px solid var(--gold)');
    // $p0_name.parent().next().next().css('color', '#aaa');
    // $p0_name.siblings().children().css('display', 'none');
    // }

    isPass = true

    let $p0_name_val = $('#p0_name').val()
    // console.log('$p0_name_val:', $p0_name_val)
    let $p0_name_val_length = $p0_name_val.length
    // console.log('$p0_name_val_length:', $p0_name_val_length)
    if (!name_re.test($p0_name.val())) {
        // 如果姓名不符合正規表達式
        isPass = false
        $p0_name.css('border', '2px solid var(--pink)');
        $p0_name.parent().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)');
        $p0_name.siblings().children().css('display', 'none');
    }
    else if ($p0_name_val_length <= 1) {
        // 如果姓名字數小於1字或等於1字
        isPass = false
        $p0_name.css('border', '2px solid var(--pink)');
        $p0_name.parent().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)');
        $p0_name.siblings().children().css('display', 'none');
    }

    else {
        // 沒有以上條件的話
        // isPass = true
        $p0_name.css('border', '2px solid var(--gold)');
        $p0_name.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
        $p0_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
    }
    // console.log('isPass=', isPass)

    // 手機版
    if ($(window).width() < 768) {
        // 姓名
        if (!name_re.test($p1_name.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p1_name.css('border', '2px solid var(--pink)');
            $p1_name.parent().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '4px');
            $p1_name.siblings().children().css('display', 'none');
        } else {
            // isPass = true
            $p1_name.css('border', '2px solid var(--gold)');
            $p1_name.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
            $p1_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
        }
        if (!name_re.test($p2_name.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p2_name.css('border', '2px solid var(--pink)');
            $p2_name.parent().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '4px');;
            $p2_name.siblings().children().css('display', 'none');
        } else {
            // isPass = true
            $p2_name.css('border', '2px solid var(--gold)');
            $p2_name.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
            $p2_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
        }
        // 電話
        if (!mobile_re.test($p1_mobile.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p1_mobile.css('border', '2px solid var(--pink)');
            $p1_mobile.parent().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '12.5px');
            $p1_mobile.siblings().children().css('display', 'none');
        } else {
            // isPass = true
            $p1_mobile.css('border', '2px solid var(--gold)');
            $p1_mobile.parent().next().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
            $p1_mobile.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
        }
        if (!mobile_re.test($p2_mobile.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p2_mobile.css('border', '2px solid var(--pink)');
            $p2_mobile.parent().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '12.5px');
            $p2_mobile.siblings().children().css('display', 'none');
        } else {
            // isPass = true
            $p2_mobile.css('border', '2px solid var(--gold)');
            $p2_mobile.parent().next().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
            $p2_mobile.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
        }
        // 桌機版
    } else {
        if (!name_re.test($p1_name.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p1_name.css('border', '2px solid var(--pink)');
            $p1_name.parent().next().next().next().addClass('d-block').removeClass('d-none').removeClass('invisible').css('color', 'var(--pink)').css('padding-left', '4px');
            $p1_name.siblings().children().css('display', 'none');
        } else {
            // isPass = true
            $p1_name.css('border', '2px solid var(--gold)');
            $p1_name.parent().next().next().next().removeClass('d-block').addClass('d-none').removeClass('invisible').css('color', '#aaa');
            $p1_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
            if (!mobile_re.test($p1_mobile.val())) {
                isPass = false
                $p1_mobile.parent().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '231px');
            }
        }
        if (!name_re.test($p2_name.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p2_name.css('border', '2px solid var(--pink)');
            $p2_name.parent().next().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '4px');
            $p2_name.siblings().children().css('display', 'none');
            if (!mobile_re.test($p2_mobile.val())) {
                isPass = false
                $p2_mobile.parent().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '231px');
            }
        } else {
            // isPass = true
            $p2_name.css('border', '2px solid var(--gold)');
            $p2_name.parent().next().next().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
            $p2_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
        }
        // 電話號碼
        if (!mobile_re.test($p1_mobile.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p1_mobile.css('border', '2px solid var(--pink)');
            $p1_mobile.parent().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '231px');
            $p1_mobile.siblings().children().css('display', 'none');
            if (!name_re.test($p1_name.val())) {
                $p1_mobile.parent().next().next().removeClass('d-none').addClass('d-block').css('color', 'var(--pink)').css('padding-left', '84px');
            }
        } else {
            // isPass = true
            $p1_mobile.css('border', '2px solid var(--gold)');
            $p1_mobile.parent().next().next().removeClass('d-block').addClass('d-none').css('color', '#aaa').css('padding-left', '231px');
            $p1_mobile.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
        }

        if (!mobile_re.test($p2_mobile.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p2_mobile.css('border', '2px solid var(--pink)');
            $p2_mobile.parent().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '231px');
            $p2_mobile.siblings().children().css('display', 'none');
            if (!name_re.test($p2_name.val())) {
                $p2_mobile.parent().next().next().removeClass('d-none').addClass('d-block').css('color', 'var(--pink)').css('padding-left', '84px');
            }
        } else {
            // isPass = true
            $p2_mobile.css('border', '2px solid var(--gold)');
            $p2_mobile.parent().next().next().removeClass('d-block').addClass('d-none').css('color', '#aaa').css('padding-left', '231px');
            $p2_mobile.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
        }
    }

    // 手機:

    if (!mobile_re.test($p0_mobile.val())) {
        //  !point!要設定結果為「錯誤」
        isPass = false
        $p0_mobile.css('border', '2px solid var(--pink)');
        $p0_mobile.parent().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)');
        $p0_mobile.siblings().children().css('display', 'none');
    } else {
        // isPass = true
        $p0_mobile.css('border', '2px solid var(--gold)');
        $p0_mobile.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
        $p0_mobile.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
    }

    //驗證碼:
    // 1.設定套用的對象，設參數
    const $input_check_val = $('#js5-form3-input').val()
    const $input_check = $('#js5-form3-input')
    // 2.設定正規表達式
    // 條件為等於，不用設
    // 3.設定「錯誤狀態」顯示方式

    // console.log($input_check_val)
    // console.log(authCode)
    if ($input_check_val.length >= 4 && $input_check_val != authCode) {
        isPass = false;
        $input_check.css('border', '2px solid var(--pink)');
        $input_check.prev().children().css('display', 'none');
        $input_check.next().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)');
    } else {
        // isPass = true
        $input_check.css('border', '2px solid var(--gold)');
        $input_check.prev().children().css('color', 'var(--gold)').css('display', 'inline-block');
        $input_check.next().next().next().removeClass('d-block').addClass('d-none');
    }
    if ($input_check_val.length < 4) {
        isPass = false;
        $input_check.css('border', '0px solid var(--pink)');
        $input_check.prev().children().css('display', 'none');

    }
}

// checkbox
// $('#checkbox').on('change', function() {
//     if ($(this).prop('checked') == true) {
//         isPass = true;
//         $('.memo_check').css('color', '#aaa')
//     }
//     if ($(this).prop('checked') != true) {
//         isPass = false;
//         $('.memo_check').css('color', 'var(--gold)')
//     }
// })

// 套入「送出」function
function event_submit() {
// 1.設定正規表達式
// 姓名
const name_re = /^[\u4E00-\u9FA5]{2,15}$/;
// 手機
const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
//  -------------------------------------------- 
// 2.設定套用的對象，設參數
// p0_name
const $p0_name = $('#p0_name')
// p0_mobile
const $p0_mobile = $('#p0_mobile')
// p1_name
const $p1_name = $('#p1_name')
// p1_mobile
const $p1_mobile = $('#p1_mobile')
// p2_name
const $p2_name = $('#p2_name')
// p2_mobile
const $p2_mobile = $('#p2_mobile')

    // let isPass = true;

    let $p0_name_val = $('#p0_name').val()
    // console.log('$p0_name_val:', $p0_name_val)
    let $p0_name_val_length = $p0_name_val.length
    console.log('$p0_name_val_length:', $p0_name_val_length)
    if (!name_re.test($p0_name.val())) {
        // 如果姓名不符合正規表達式
        isPass = false
        $p0_name.css('border', '2px solid var(--pink)');
        $p0_name.parent().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)');
        $p0_name.siblings().children().css('display', 'none');
    }
    else if ($p0_name_val_length <= 1) {
        // 如果姓名字數小於1字或等於1字
        isPass = false
        $p0_name.css('border', '2px solid var(--pink)');
        $p0_name.parent().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)');
        $p0_name.siblings().children().css('display', 'none');
    }

    else {
        // 沒有以上條件的話
        // isPass = true
        $p0_name.css('border', '2px solid var(--gold)');
        $p0_name.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
        $p0_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
    }
    console.log('isPass=', isPass)
    // -----------------------------------------

    // 手機版
    if ($(window).width() < 768) {
        // 姓名
        if (!name_re.test($p1_name.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p1_name.css('border', '2px solid var(--pink)');
            $p1_name.parent().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '4px');
            $p1_name.siblings().children().css('display', 'none');
        } else {
            // isPass = true
            $p1_name.css('border', '2px solid var(--gold)');
            $p1_name.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
            $p1_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
        }
        if (!name_re.test($p2_name.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p2_name.css('border', '2px solid var(--pink)');
            $p2_name.parent().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '4px');;
            $p2_name.siblings().children().css('display', 'none');
        } else {
            // isPass = true
            $p2_name.css('border', '2px solid var(--gold)');
            $p2_name.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
            $p2_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
        }
        // 電話
        if (!mobile_re.test($p1_mobile.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p1_mobile.css('border', '2px solid var(--pink)');
            $p1_mobile.parent().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '12.5px');
            $p1_mobile.siblings().children().css('display', 'none');
        } else {
            // isPass = true
            $p1_mobile.css('border', '2px solid var(--gold)');
            $p1_mobile.parent().next().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
            $p1_mobile.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
        }
        if (!mobile_re.test($p2_mobile.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p2_mobile.css('border', '2px solid var(--pink)');
            $p2_mobile.parent().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '12.5px');
            $p2_mobile.siblings().children().css('display', 'none');
        } else {
            // isPass = true
            $p2_mobile.css('border', '2px solid var(--gold)');
            $p2_mobile.parent().next().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
            $p2_mobile.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
        }
        // 桌機版
    } else {
        if (!name_re.test($p1_name.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p1_name.css('border', '2px solid var(--pink)');
            $p1_name.parent().next().next().next().addClass('d-block').removeClass('d-none').removeClass('invisible').css('color', 'var(--pink)').css('padding-left', '4px');
            $p1_name.siblings().children().css('display', 'none');
        } else {
            // isPass = true
            $p1_name.css('border', '2px solid var(--gold)');
            $p1_name.parent().next().next().next().removeClass('d-block').addClass('d-none').removeClass('invisible').css('color', '#aaa');
            $p1_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
            if (!mobile_re.test($p1_mobile.val())) {
                isPass = false
                $p1_mobile.parent().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '231px');
            }
        }
        if (!name_re.test($p2_name.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p2_name.css('border', '2px solid var(--pink)');
            $p2_name.parent().next().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '4px');
            $p2_name.siblings().children().css('display', 'none');
            if (!mobile_re.test($p2_mobile.val())) {
                isPass = false
                $p2_mobile.parent().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '231px');
            }
        } else {
            // isPass = true
            $p2_name.css('border', '2px solid var(--gold)');
            $p2_name.parent().next().next().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
            $p2_name.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
        }
        // 電話號碼
        if (!mobile_re.test($p1_mobile.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p1_mobile.css('border', '2px solid var(--pink)');
            $p1_mobile.parent().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '231px');
            $p1_mobile.siblings().children().css('display', 'none');
            if (!name_re.test($p1_name.val())) {
                $p1_mobile.parent().next().next().removeClass('d-none').addClass('d-block').css('color', 'var(--pink)').css('padding-left', '84px');
            }
        } else {
            // isPass = true
            $p1_mobile.css('border', '2px solid var(--gold)');
            $p1_mobile.parent().next().next().removeClass('d-block').addClass('d-none').css('color', '#aaa').css('padding-left', '231px');
            $p1_mobile.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
        }

        if (!mobile_re.test($p2_mobile.val())) {
            //  !point!要設定結果為「錯誤」
            isPass = false
            $p2_mobile.css('border', '2px solid var(--pink)');
            $p2_mobile.parent().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)').css('padding-left', '231px');
            $p2_mobile.siblings().children().css('display', 'none');
            if (!name_re.test($p2_name.val())) {
                $p2_mobile.parent().next().next().removeClass('d-none').addClass('d-block').css('color', 'var(--pink)').css('padding-left', '84px');
            }
        } else {
            // isPass = true
            $p2_mobile.css('border', '2px solid var(--gold)');
            $p2_mobile.parent().next().next().removeClass('d-block').addClass('d-none').css('color', '#aaa').css('padding-left', '231px');
            $p2_mobile.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
        }
    }

    // 手機:
    // 即時驗證：設置不要一開始就紅框？
    // if (mobile_re.test($p0_mobile.val()).length=='') {
    //   $p0_mobile.css('border', '0px solid var(--gold)');
    // $p0_mobile.parent().next().css('color', '#aaa');
    // $p0_mobile.siblings().children().css('display', 'none');
    // }


    if (!mobile_re.test($p0_mobile.val())) {
        //  !point!要設定結果為「錯誤」
        isPass = false
        $p0_mobile.css('border', '2px solid var(--pink)');
        $p0_mobile.parent().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)');
        $p0_mobile.siblings().children().css('display', 'none');
    } else {
        // isPass = true
        $p0_mobile.css('border', '2px solid var(--gold)');
        $p0_mobile.parent().next().removeClass('d-block').addClass('d-none').css('color', '#aaa');
        $p0_mobile.siblings().children().css('color', 'var(--gold)').css('display', 'inline-block');
    }

    //驗證碼:
    // 1.設定套用的對象，設參數
    const $input_check_val = $('#js5-form3-input').val()
    const $input_check = $('#js5-form3-input')
    // 2.設定正規表達式
    // 條件為等於，不用設
    // 3.設定「錯誤狀態」顯示方式

    // console.log($input_check_val)
    // console.log(authCode)
    if ($input_check_val != authCode) {
        isPass = false;
        $input_check.css('border', '2px solid var(--pink)');
        $input_check.prev().children().css('display', 'none');
        $input_check.next().next().next().addClass('d-block').removeClass('d-none').css('color', 'var(--pink)');
    } else {
        // isPass = true
        $input_check.css('border', '2px solid var(--gold)');
        $input_check.prev().children().css('color', 'var(--gold)').css('display', 'inline-block');
        $input_check.next().next().next().removeClass('d-block').addClass('d-none');
    }
    // if ($input_check_val.length < 4) {
    //     isPass = false;
    //     $input_check.css('border', '2px solid var(--pink)');
    //     $input_check.prev().children().css('display', 'none');

    // }else {
    //     isPass = true
    //     $input_check.css('border', '2px solid var(--gold)');
    //     $input_check.prev().children().css('color', 'var(--gold)').css('display', 'inline-block');
    //     $input_check.next().next().next().removeClass('d-block').addClass('d-none');
    // }
    // -----------------------------------------


    if (isPass == true) {
        $('.Loading-page, .loader, .Loading-page p').show().fadeIn(1)
        // setTimeout(() => {
        //     $('.loader, .Loading-page p').fadeOut(150);
        // }, 2500);
        setTimeout(() => {
            $('.Loading-page').fadeOut(150);
        }, 2500);
    } else {
        $('.Loading-page').hide()
    }
    // !point!要先設給「通過」的條件



    // 如果上述條件都達到
    if (isPass == true) {
        $.post(
            'event-join-api.php',
            $(document.event_join).serialize(),
            function (data) {
                let pte = $('.pop-up-1 .pop-up-text').text(data.error)
                if (pte == true) {
                    $('.Loading-page').hide()
                }
                // console.log(data)
                if (data.success) {
                    $('.Loading-page').fadeOut(1)
                    $('.pop-up-1').fadeIn(150)
                    $('.pop-up-1 .icon').html('<i class="fas fa-check"></i>').css('background-color', 'var(--gold)')
                    $('.pop-up-1 .pop-up-text').html('已報名成功，並發送郵件至信箱。<br>您也可前往會員中心查詢。').addClass('text-center')
                    $('button.ok').on('click', function () {
                        $('.general-pop-up').fadeOut(150)
                        window.location.href = 'member.php?memberEvent';
                    })

                } else {
                    $('.pop-up-1').fadeIn(150)
                    $('.pop-up-1 .icon').html('<i class="fas fa-times"></i>').css('background-color', 'var(--gold)')
                    $('.pop-up-1 .pop-up-text').text(data.error).addClass('text-center')

                    $('button.ok').on('click', function () {
                        $('.general-pop-up').fadeOut(150)
                    })
                }
            },
            'json'
        )
    } else {
        $('.Loading-page').hide()
        $('.pop-up-1').fadeIn(150)
        $('.pop-up-1 .icon').html('<i class="fas fa-times"></i>').css('background-color', 'var(--gold)')
        $('.pop-up-1 .pop-up-text').text('填寫資料有誤，資料沒有新增').addClass('text-center')

        $('button.ok').on('click', function () {
            $('.general-pop-up').fadeOut(150)
        })
    }

}