// $('.animatable').hide()

// animatable=可以動
// animated=動了

// 手機版
if ($(window).width() < 768) {
    // jQuery(function($) {
    // 設置執行Animations=function (){}
    function doAnimations() {
        // 設offset=捲軸捲動+螢幕高度
        let offset = $(window).scrollTop() + $(window).height(),
            // 設置預設動作的class=$('.animatable')(預設為hidden，paused)
            $animatables = $('.animatable');
        // 條件1:若$('.animatable')的數量為0
        if ($animatables.length == 0) {
            // 結果1:解除綁定scroll,Animations(就停止scroll了,如果要來回做，這個要關掉)
            $(window).off('scroll', doAnimations);
        }

        // 設每個each可以動的做function
        $animatables.each(function(i) {
            //   設每個可以動的animatable=this
            let $animatable = $(this);
            //   （如果這個物件的y座標+物件高度-500(自訂)）<捲軸捲動+螢幕高度
            // =這個物件滑完才出現下個物件(為了不要這樣，可以自訂減少多少，來讓物件還沒滑完，就出現下個物件)
            if (($animatable.offset().top + $animatable.height() - 500) < offset) {
                // 就動起來(關掉「可以動」，開啟「動了」)
                $animatable.removeClass('animatable').addClass('animated');
            }
            //   else{
            // 就不動(開啟「可以動」，關掉「動了」)，若要來回動，這個要關掉，不然往上滑就不動了
            //     $animatable.removeClass('animated').addClass('animatable');
            // }
        });

        // 這裡是設定反向回去時會發生的事：可以讓div消失
        // 設定每個可以動的，執行上一個function
        // $('.animated').each(function (i) {
        //     let $animatable = $(this);
        // // 往回跑的距離(主要看自訂的數值，預設為等於上一個數值)
        //     if (($(this).offset().top + $(this).height() -500) > offset) {
        //         // 這裡反過來寫(開啟「可以動」，關掉「動了」)
        //         $(this).removeClass('animated').addClass('animatable');
        //     }
        // });
    };
    // point!前面先指定動作計算內容，後面才能綁定動作!
    // 進入視窗window,觸發trigger捲軸scroll
    doAnimations()
    $(window).trigger('scroll');
    // 綁定scroll與動畫do animations
    $(window).on('scroll', doAnimations);
    // });
}
// 電腦版
else {
    // jQuery(function($) {
    // 設置執行Animations=function (){}
    function doAnimations() {
        // 設offset=捲軸捲動+螢幕高度
        let offset = $(window).scrollTop() + $(window).height(),
            $animatables = $('.animatable');
        // 條件1:若$('.animatable')的數量為0
        if ($animatables.length == 0) {
            // 結果1:解除綁定scroll,Animations(就停止scroll了,如果要來回做，這個要關掉)
            $(window).off('scroll', doAnimations);
        }
        // 設每個each可以動的做function
        $animatables.each(function(i) {
            //   設每個可以動的animatable=this
            let $animatable = $(this);
            // console.log('($animatable.offset().top + $animatable.height() - 100) < offset',($animatable.offset().top + $animatable.height() - 100) < offset);
            //   （如果這個物件的y座標+物件高度-500(自訂)）<捲軸捲動+螢幕高度
            // =這個物件滑完才出現下個物件(為了不要這樣，可以自訂減少多少，來讓物件還沒滑完，就出現下個物件)
            if (($animatable.offset().top + $animatable.height() - 500) < offset) {
                // 就動起來(關掉「可以動」，開啟「動了」)
                $animatable.removeClass('animatable').addClass('animated');
            }
        });

        // 這裡是設定反向回去時會發生的事：可以讓div消失
        // 設定每個可以動的，執行上一個function
        // $('.animated').each(function (i) {
        //     let $animatable = $(this);
        // // 往回跑的距離(主要看自訂的數值，預設為等於上一個數值)
        //     if (($(this).offset().top + $(this).height() - 200) > offset) {
        //         // 這裡反過來寫(開啟「可以動」，關掉「動了」)
        //         $(this).removeClass('animated').addClass('animatable');
        //     }
        // });
    };

    // point!前面先指定動作計算內容，後面才能綁定動作!
    // 進入視窗window,觸發trigger捲軸scroll
    doAnimations()
    $(window).trigger('scroll');
    // 綁定scroll與動畫do animations
    $(window).on('scroll', doAnimations);
    // });
}

// $(window).scroll(function() {
//     doAnimations()
// })