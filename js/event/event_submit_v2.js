// 1.設定正規表達式
//  --------------------------------------------
//姓名
let name_re = /^[\u4E00-\u9FA5]{2,15}$|^[a-zA-Z\s./\-/,]{3,50}$/;
// 電話
let mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;

// 2.設定套用的對象，設參數
//  -------------------------------------------- 
// p0_name
let $p0_name = $('#p0_name')
// p0_mobile
let $p0_mobile = $('#p0_mobile')
// p1_name
let $p1_name = $('#p1_name')
// p1_mobile
let $p1_mobile = $('#p1_mobile')
// p2_name
let $p2_name = $('#p2_name')
// p2_mobile
let $p2_mobile = $('#p2_mobile')

// 驗證碼
let $input_check = $('#js5-form3-input')

//  -------------------------------------------- 
let isPass = true;

// 3.設定即時驗證
//  --------------------------------------------
function getValue() {
    // 桌機版
    if ($(window).width() >= 768) {
        // 條件1:姓名不對
        // p0_name
        if (!name_re.test($p0_name.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p0_name.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p0_name.parent().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確姓名，以便現場核對身份');
            // 勾勾消失
            $p0_name.prev()
                .removeClass('check_right').html('姓名');
            // -----------
            //  條件1-1:字數小於2字
            if ($p0_name.val().length < 2) {
                // 出錯(同上)
                // 無框
                $p0_name.addClass('input_origin').removeClass('input_wrong');
                // 無字
                $p0_name.parent().next()
                    .removeClass('check_wrong').addClass('d-none').html('');
                // 勾勾消失(同上)
            }
        } else {
            // 金框
            $p0_name.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
            // 紅字消失
            $p0_name.parent().next()
                .removeClass('check_wrong').addClass('d-none').html('');
            // 勾勾出現
            $p0_name.prev()
                .html("姓名 <span class='check_right'><i class='fas fa-check'></i></span>");
        }
        //  ----------------------
        // p1_name
        if (!name_re.test($p1_name.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p1_name.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p1_name.parent().next().next().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確姓名');
            // 勾勾消失
            $p1_name.prev()
                .removeClass('check_right').html('姓名');
            // -----------
            //  條件1-1:字數小於2字
            if ($p1_name.val().length < 2) {
                // 出錯(同上)
                // 無框
                $p1_name.addClass('input_origin').removeClass('input_wrong');
                // 無字
                $p1_name.parent().next().next().next()
                    .removeClass('check_wrong').addClass('d-none').html('');
                // 勾勾消失(同上)
            }
        } else {
            // 金框
            $p1_name.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
            // 紅字消失
            $p1_name.parent().next().next().next()
                .removeClass('check_wrong').addClass('d-none').html('');
            // 勾勾出現
            $p1_name.prev()
                .html("姓名 <span class='check_right'><i class='fas fa-check'></i></span>");
        }
        //  ----------------------
        // p2_name
        if (!name_re.test($p2_name.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p2_name.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p2_name.parent().next().next().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確姓名');
            // 勾勾消失
            $p2_name.prev()
                .removeClass('check_right').html('姓名');
            // -----------
            //  條件1-1:字數小於2字
            if ($p2_name.val().length < 2) {
                // 出錯(同上)
                // 無框
                $p2_name.addClass('input_origin').removeClass('input_wrong');
                // 無字
                $p2_name.parent().next().next().next()
                    .removeClass('check_wrong').addClass('d-none').html('');
                // 勾勾消失(同上)
            }
        } else {
            // 金框
            $p2_name.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
            // 紅字消失
            $p2_name.removeClass('input_origin').parent().next().next().next()
                .removeClass('check_wrong').addClass('d-none').html('');
            // 勾勾出現
            $p2_name.prev()
                .html("姓名 <span class='check_right'><i class='fas fa-check'></i></span>");
        }
        //  --------------------------------------------
        // 條件2:電話不對
        // p0_mobile
        if (!mobile_re.test($p0_mobile.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p0_mobile.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p0_mobile.parent().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話，以便現場核對身份');
            // 勾勾消失
            $p0_mobile.prev()
                .removeClass('check_right').html('電話');
            //  -----------
            // 條件2-1:輸入為10字以下
            if ($p0_mobile.val().length < 10) {
                // 出錯(同上)
                // 無框
                $p0_mobile.addClass('input_origin').removeClass('input_wrong');
                // 無字
                $p0_mobile.parent().next()
                    .removeClass('check_wrong').addClass('d-none').html('');
                // 勾勾消失(同上)
            }
        }
        else {
            // 金框
            $p0_mobile.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
            // 紅字消失
            $p0_mobile.parent().next()
                .removeClass('check_wrong').addClass('d-none').html('');
            // 勾勾出現
            $p0_mobile.prev()
                .html("電話 <span class='check_right'><i class='fas fa-check'></i></span>");
        }
        //  ----------------------
        // p1_mobile
        if (!mobile_re.test($p1_mobile.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p1_mobile.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p1_mobile.parent().next().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話')
                .css('padding-left', '231px');
            // 勾勾消失
            $p1_mobile.prev()
                .removeClass('check_right').html('電話');
            //  -----------
            // 條件2-1:姓名也不對時要移位
            if (!name_re.test($p1_name.val())) {
                $p1_mobile.parent().next().next()
                    .css('padding-left', '90px');
            }
            //  -----------
            // 條件2-2:姓名小於2字
            if ($p1_name.val().length < 2) {
                $p1_mobile.parent().next().next()
                    .css('padding-left', '231px');
            }
            //  -----------
            // 條件2-3:輸入為10字以下
            if ($p1_mobile.val().length < 10) {
                // 出錯(同上)
                // 無框
                $p1_mobile.addClass('input_origin').removeClass('input_wrong');
                // 無字
                $p1_mobile.parent().next().next()
                    .removeClass('check_wrong').addClass('d-none').html('');
                // 勾勾消失(同上)
            }
        }
        else {
            // 金框
            $p1_mobile.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
            // 紅字消失
            $p1_mobile.parent().next().next()
                .removeClass('check_wrong').addClass('d-none').html('');
            // 勾勾出現
            $p1_mobile.prev()
                .html("電話 <span class='check_right'><i class='fas fa-check'></i></span>");
        }
        //  ----------------------
        // p2_mobile
        if (!mobile_re.test($p2_mobile.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p2_mobile.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p2_mobile.parent().next().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話')
                .css('padding-left', '231px');
            // 勾勾消失
            $p2_mobile.prev()
                .removeClass('check_right').html('電話');
            //  -----------
            // 條件2-1:姓名也不對時要移位
            if (!name_re.test($p2_name.val())) {
                $p2_mobile.parent().next().next()
                    .css('padding-left', '90px');
            }
            //  -----------
            // 條件2-2:姓名小於2字
            if ($p2_name.val().length < 2) {
                $p2_mobile.parent().next().next()
                    .css('padding-left', '231px');
            }
            //  -----------
            // 條件2-3:輸入為10字以下
            if ($p2_mobile.val().length < 10) {
                // 出錯(同上)
                // 無框
                $p2_mobile.addClass('input_origin').removeClass('input_wrong');
                // 無字
                $p2_mobile.parent().next().next()
                    .removeClass('check_wrong').addClass('d-none').html('');
                // 勾勾消失(同上)
            }
        }
        else {
            // 金框
            $p2_mobile.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
            // 紅字消失
            $p2_mobile.parent().next().next()
                .removeClass('check_wrong').addClass('d-none').html('');
            // 勾勾出現
            $p2_mobile.prev()
                .html("電話 <span class='check_right'><i class='fas fa-check'></i></span>");
        }
    }
    //  ---------------------------------------- 
    // 手機版
    else {
        // 條件1:姓名不對
        // p0_name(和桌機一樣)
        if (!name_re.test($p0_name.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p0_name.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p0_name.parent().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確姓名，以便現場核對身份');
            // 勾勾消失
            $p0_name.prev()
                .removeClass('check_right').html('姓名');
            // -----------
            //  條件1-1:字數小於2字
            if ($p0_name.val().length < 2) {
                // 出錯(同上)
                // 無框
                $p0_name.addClass('input_origin').removeClass('input_wrong');
                // 無字
                $p0_name.parent().next()
                    .removeClass('check_wrong').addClass('d-none').html('');
                // 勾勾消失(同上)
            }
        } else {
            // 金框
            $p0_name.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
            // 紅字消失
            $p0_name.parent().next()
                .removeClass('check_wrong').addClass('d-none').html('');
            // 勾勾出現
            $p0_name.prev()
                .html("姓名 <span class='check_right'><i class='fas fa-check'></i></span>");
        }
        //  ----------------------
        // 改紅字呈現地方不同
        // p1_name
        if (!name_re.test($p1_name.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p1_name.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字-桌機版關閉
            $p1_name.parent().next().next().next()
                .addClass('d-none').html('');
            // 紅字-手機版打開
            $p1_name.parent().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確姓名');
            // 勾勾消失
            $p1_name.prev()
                .removeClass('check_right').html('姓名');
            // -----------
            //  條件1-1:字數小於2字
            if ($p1_name.val().length < 2) {
                // 出錯(同上)
                // 無框
                $p1_name.addClass('input_origin').removeClass('input_wrong');
                // 無字
                $p1_name.parent().next()
                    .removeClass('check_wrong').addClass('d-none').html('');
                // 勾勾消失(同上)
            }
        } else {
            // 金框
            $p1_name.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
            // 紅字消失
            $p1_name.parent().next()
                .removeClass('input_origin').removeClass('check_wrong').addClass('d-none').html('');
            // 勾勾出現
            $p1_name.prev()
                .html("姓名 <span class='check_right'><i class='fas fa-check'></i></span>");
        }
        //  ----------------------
        // 改紅字呈現地方不同
        // p2_name
        if (!name_re.test($p2_name.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p2_name.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字-桌機版關閉
            $p2_name.parent().next().next().next()
                .addClass('d-none').html('');
            // 紅字-手機版打開
            $p2_name.parent().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確姓名');
            // 勾勾消失
            $p2_name.prev()
                .removeClass('check_right').html('姓名');
            // -----------
            //  條件1-1:字數小於2字
            if ($p2_name.val().length < 2) {
                // 出錯(同上)
                // 無框
                $p2_name.addClass('input_origin').removeClass('input_wrong');
                // 無字
                $p2_name.parent().next()
                    .removeClass('check_wrong').addClass('d-none').html('');
                // 勾勾消失(同上)
            }
        } else {
            // 金框
            $p2_name.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
            // 紅字消失
            $p2_name.parent().next()
                .removeClass('input_origin').removeClass('check_wrong').addClass('d-none').html('');
            // 勾勾出現
            $p2_name.prev()
                .html("姓名 <span class='check_right'><i class='fas fa-check'></i></span>");
        }
        //  --------------------------------------------
        // 條件2:電話不對
        // p0_mobile(和桌機一樣)
        if (!mobile_re.test($p0_mobile.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p0_mobile.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p0_mobile.parent().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話，以便現場核對身份');
            // 勾勾消失
            $p0_mobile.prev()
                .removeClass('check_right').html('電話');
            //  -----------
            // 條件2-1:輸入為10字以下
            if ($p0_mobile.val().length < 10) {
                // 出錯(同上)
                // 無框
                $p0_mobile.addClass('input_origin').removeClass('input_wrong');
                // 無字
                $p0_mobile.parent().next()
                    .removeClass('check_wrong').addClass('d-none').html('');
                // 勾勾消失(同上)
            }
        }
        else {
            // 金框
            $p0_mobile.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
            // 紅字消失
            $p0_mobile.parent().next()
                .removeClass('check_wrong').addClass('d-none').html('');
            // 勾勾出現
            $p0_mobile.prev()
                .html("電話 <span class='check_right'><i class='fas fa-check'></i></span>");
        }
        //  ----------------------
        // 改紅字呈現地方不同
        // p1_mobile
        if (!mobile_re.test($p1_mobile.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p1_mobile.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p1_mobile.parent().next().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話')
                .css('padding-left', '13px');
            // 勾勾消失
            $p1_mobile.prev()
                .removeClass('check_right').html('電話');
            //  -----------
            // 條件2-1:姓名也不對時要移位
            //  -----------
            // 條件2-2:姓名小於2字
            if ($p1_name.val().length < 2) {
                $p1_mobile.parent().next().next()
                    .css('padding-left', '13px');
            }
            //  -----------
            // 條件2-3:輸入為10字以下
            if ($p1_mobile.val().length < 10) {
                // 出錯(同上)
                // 無框
                $p1_mobile.addClass('input_origin').removeClass('input_wrong');
                // 無字
                $p1_mobile.parent().next().next()
                    .removeClass('check_wrong').addClass('d-none').html('');
                // 勾勾消失(同上)
            }
        }
        else {
            // 金框
            $p1_mobile.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
            // 紅字消失
            $p1_mobile.parent().next().next()
                .removeClass('check_wrong').addClass('d-none').html('');
            // 勾勾出現
            $p1_mobile.prev()
                .html("電話 <span class='check_right'><i class='fas fa-check'></i></span>");
        }
        //  ----------------------
        // 改紅字呈現地方不同
        // p2_mobile
        if (!mobile_re.test($p2_mobile.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p2_mobile.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p2_mobile.parent().next().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話')
                .css('padding-left', '13px');
            // 勾勾消失
            $p2_mobile.prev()
                .removeClass('check_right').html('電話');
            //  -----------
            // 條件2-1:姓名也不對時要移位
            //  -----------
            // 條件2-2:姓名小於2字
            if ($p2_name.val().length < 2) {
                $p2_mobile.parent().next().next()
                    .css('padding-left', '13px');
            }
            //  -----------
            // 條件2-3:輸入為10字以下
            if ($p2_mobile.val().length < 10) {
                // 出錯(同上)
                // 無框
                $p2_mobile.addClass('input_origin').removeClass('input_wrong');
                // 無字
                $p2_mobile.parent().next().next()
                    .removeClass('check_wrong').addClass('d-none').html('');
                // 勾勾消失(同上)
            }
        }
        else {
            // 金框
            $p2_mobile.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
            // 紅字消失
            $p2_mobile.parent().next().next()
                .removeClass('check_wrong').addClass('d-none').html('');
            // 勾勾出現
            $p2_mobile.prev()
                .html("電話 <span class='check_right'><i class='fas fa-check'></i></span>");
        }
    }
    //  ---------------------------------------- 
    // 條件3:驗證碼不對
    if ($input_check.val() != authCode) {
        // 出錯
        isPass = false
        // 紅框
        $input_check.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
        // 紅字
        $input_check.next().next().next()
            .addClass('check_wrong').removeClass('d-none').html('*驗證碼錯誤');
        // 勾勾消失
        $input_check.prev()
            .removeClass('check_right').html('驗證碼');
        // -----------
        //條件3-1:輸入為4字以下
        if ($input_check.val().length < 4) {
            // 出錯(同上)
            // 無框
            $input_check.addClass('input_origin').removeClass('input_wrong');
            // 無字
            $input_check.next().next().next()
                .removeClass('check_wrong').addClass('d-none').html('');
            // 勾勾消失(同上)
        }
    }
    else {
        // 金框
        $input_check.removeClass('input_origin').removeClass('input_wrong').addClass('input_right');
        // 紅字消失
        $input_check.next().next().next()
            .removeClass('check_wrong').addClass('d-none').html('');
        // 勾勾出現
        $input_check.prev()
            .html("驗證碼 <span class='check_right'><i class='fas fa-check'></i></span>");
    }
}

// 4.設定「送出」驗證
//  -------------------------------------------- 
function event_submit() {
    isPass = true
    // 只留下re判斷，其餘空白判斷刪除
    //  -------------------------------------------- 
    // 條件1:姓名不對
    // p0_name
    if (!name_re.test($p0_name.val())) {
        // 出錯
        isPass = false
        // 紅框
        $p0_name.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
        // 紅字
        $p0_name.parent().next()
            .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確姓名，以便現場核對身份');
        // 勾勾消失
        $p0_name.prev()
            .removeClass('check_right').html('姓名');
    };
    //  ----------------------
    // 條件2:電話不對
    // p0_mobile
    if (!mobile_re.test($p0_mobile.val())) {
        // 出錯
        isPass = false
        // 紅框
        $p0_mobile.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
        // 紅字
        $p0_mobile.parent().next()
            .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話，以便現場核對身份');
        // 勾勾消失
        $p0_mobile.prev()
            .removeClass('check_right').html('電話');
    };
    //  -------------------------------------------- 
    if ($('#people').val() == 1) {
        // p1_name
        if (!name_re.test($p1_name.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p1_name.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p1_name.parent().next().next().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確姓名');
            // 勾勾消失
            $p1_name.prev()
                .removeClass('check_right').html('姓名');
            //  ----------------------    
            if ($(window).width() < 768) {
                // 改紅字呈現地方不同
                // p1_name
                // 紅框
                $p1_name.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
                // 紅字-桌機版關閉
                $p1_name.parent().next().next().next()
                    .addClass('d-none').html('');
                // 紅字-手機版打開
                $p1_name.parent().next()
                    .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確姓名');
                // 勾勾消失
                $p1_name.prev()
                    .removeClass('check_right').html('姓名');
            }
        };
        //  ----------------------
        // p1_mobile
        if (!mobile_re.test($p1_mobile.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p1_mobile.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p1_mobile.parent().next().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話')
                .css('padding-left', '231px');
            // 勾勾消失
            $p1_mobile.prev()
                .removeClass('check_right').html('電話');
            //  -----------
            // 條件2-1:姓名也不對時要移位
            if (!name_re.test($p1_name.val())) {
                $p1_mobile.parent().next().next()
                    .css('padding-left', '90px');
            }
            //  ----------------------    
            if ($(window).width() < 768) {
                // 改紅字呈現地方不同
                // 紅框
                $p1_mobile.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
                // 紅字
                $p1_mobile.parent().next().next()
                    .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話')
                    .css('padding-left', '13px');
                // 勾勾消失
                $p1_mobile.prev()
                    .removeClass('check_right').html('電話');
            }
        };
    }
    //  -------------------------------------------- 
    if ($('#people').val() == 2) {
        // p1_name
        if (!name_re.test($p1_name.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p1_name.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p1_name.parent().next().next().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確姓名');
            // 勾勾消失
            $p1_name.prev()
                .removeClass('check_right').html('姓名');
            //  ----------------------    
            if ($(window).width() < 768) {
                // 改紅字呈現地方不同
                // p1_name
                // 紅框
                $p1_name.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
                // 紅字-桌機版關閉
                $p1_name.parent().next().next().next()
                    .addClass('d-none').html('');
                // 紅字-手機版打開
                $p1_name.parent().next()
                    .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確姓名');
                // 勾勾消失
                $p1_name.prev()
                    .removeClass('check_right').html('姓名');
            }
        };
        //  ----------------------
        // p2_name
        if (!name_re.test($p2_name.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p2_name.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p2_name.parent().next().next().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確姓名');
            // 勾勾消失
            $p2_name.prev()
                .removeClass('check_right').html('姓名');
            //  ----------------------    
            if ($(window).width() < 768) {
                // 改紅字呈現地方不同
                // p2_name
                // 紅框
                $p2_name.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
                // 紅字-桌機版關閉
                $p2_name.parent().next().next().next()
                    .addClass('d-none').html('');
                // 紅字-手機版打開
                $p2_name.parent().next()
                    .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確姓名');
                // 勾勾消失
                $p2_name.prev()
                    .removeClass('check_right').html('姓名');
            }
        };
        //  ----------------------
        // p1_mobile
        if (!mobile_re.test($p1_mobile.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p1_mobile.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p1_mobile.parent().next().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話')
                .css('padding-left', '231px');
            // 勾勾消失
            $p1_mobile.prev()
                .removeClass('check_right').html('電話');
            //  -----------
            // 條件2-1:姓名也不對時要移位
            if (!name_re.test($p1_name.val())) {
                $p1_mobile.parent().next().next()
                    .css('padding-left', '90px');
            }
            //  ----------------------    
            if ($(window).width() < 768) {
                // 改紅字呈現地方不同
                // 紅框
                $p1_mobile.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
                // 紅字
                $p1_mobile.parent().next().next()
                    .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話')
                    .css('padding-left', '13px');
                // 勾勾消失
                $p1_mobile.prev()
                    .removeClass('check_right').html('電話');
            }
        };
        //  ----------------------
        // p2_mobile
        if (!mobile_re.test($p2_mobile.val())) {
            // 出錯
            isPass = false
            // 紅框
            $p2_mobile.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
            // 紅字
            $p2_mobile.parent().next().next()
                .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話')
                .css('padding-left', '231px');
            // 勾勾消失
            $p2_mobile.prev()
                .removeClass('check_right').html('電話');
            //  -----------
            // 條件2-1:姓名也不對時要移位
            if (!name_re.test($p2_name.val())) {
                $p2_mobile.parent().next().next()
                    .css('padding-left', '90px');
            }
            //  ----------------------    
            if ($(window).width() < 768) {
                // 改紅字呈現地方不同
                // 紅框
                $p2_mobile.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
                // 紅字
                $p2_mobile.parent().next().next()
                    .addClass('check_wrong').removeClass('d-none').html('＊請輸入正確電話')
                    .css('padding-left', '13px');
                // 勾勾消失
                $p2_mobile.prev()
                    .removeClass('check_right').html('電話');
            }
        };
    }
    //  -------------------------------------------- 
    // 條件3:驗證碼不對
    if ($input_check.val() != authCode) {
        // 出錯
        isPass = false
        // 紅框
        $input_check.removeClass('input_origin').addClass('input_wrong').removeClass('input_right');
        // 紅字
        $input_check.next().next().next()
            .addClass('check_wrong').removeClass('d-none').html('*驗證碼錯誤');
        // 勾勾消失
        $input_check.prev()
            .removeClass('check_right').html('驗證碼');
    };
    //  -------------------------------------------- 
    // loading動畫
    if (isPass) {
        $('.Loading-page, .loader, .Loading-page p').show().fadeIn(1)
        setTimeout(() => {
            $('.Loading-page').fadeOut(150);
        }, 2500);
    } else {
        $('.Loading-page').hide()
    }
    //  -------------------------------------------- 
    // 送到後台
    if (isPass) {
        $.post(
            'event-join-api.php',
            $(document.event_join).serialize(),
            function (data) {
                // let pte = $('.pop-up-1 .pop-up-text').text(data.error)
                // if (pte) {
                //     $('.Loading-page').hide()
                // }
                if (data.success) {
                    // $('.Loading-page').fadeOut(1)
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
        // $('.Loading-page').hide()
        $('.pop-up-1').fadeIn(150)
        $('.pop-up-1 .icon').html('<i class="fas fa-times"></i>').css('background-color', 'var(--gold)')
        $('.pop-up-1 .pop-up-text').text('填寫資料有誤，資料沒有新增').addClass('text-center')

        $('button.ok').on('click', function () {
            $('.general-pop-up').fadeOut(150)
        })
    }


}


