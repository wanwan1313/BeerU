// 預設關閉
if ($(window).width() > 700) {
    $('.country_name').hide()
        // 設置hover地區讓郵票動，出現國家名
} else {
    $('.country_name').show()
}

$(window).resize(function() {
    if ($(window).width() > 700) {
        $('.country_name').hide()
            // 設置hover地區讓郵票動，出現國家名
    } else {
        $('.country_name').show()
    }
})


// ------------------------------------------
// 美國:從馬克杯～郵票選項
if ($(window).width() > 700) {
    $('.us .mug').mouseenter(function() {
        // 杯子動畫
        $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填色
        $('.us_path').css('fill', '#B676D1')
            // 郵票動畫
        $('.us .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入
        $('.us .countries .country').eq(0).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填色
        $('.us_path').css('fill', '#b293627e')
            // 郵票動畫
        $('.us .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出
        $('.us .countries .country').eq(0).children().first().fadeOut(200)
    })

    // 美國:從區域～郵票選項
    $('.us_path').mouseenter(function() {

        // 杯子動畫
        $('.us .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#B676D1')
            // 底下郵票選項會動(+1)
        $('.us .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.us .countries .country').eq(0).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 區域半透明
        // 杯子動畫
        $('.us .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.us .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.us .countries .country').eq(0).children().first().fadeOut(200)
    })

    // 美國:從郵票選項～區域
    $('.us .countries .country').eq(0).mouseenter(function() {
            // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家)
            $('.us_path').css('fill', '#B676D1')
                // 個別deco動畫(+1)
                // $(this).parent().next().children().eq(0).hide()
                // 杯子動畫
            $('.us .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
        }).mouseleave(function() {
            // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.us_path').css('fill', '#b293627e')
                // 個別deco動畫(+1)
                // $(this).parent().next().children().eq(0).hide()
                // 杯子動畫
            $('.us .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
        })
        // ------------------------------------------
        // 英國:從馬克杯～郵票選項
    $('.eu .flag1 .mug').mouseenter(function() {
        // 郵票自動移到對應國家
        slick = 0;

        if ($(window).width() < 700) {
            $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
        } else {
            $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
        }
        // 杯子動畫
        $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填色 
        $('.uk_path').css('fill', '#44B9AC')
            // 郵票動畫
        $('.eu .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入
        $('.eu .countries .country').eq(0).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫 
        $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填色
        $('.uk_path').css('fill', '#b293627e')
            // 郵票動畫 
        $('.eu .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出
        $('.eu .countries .country').eq(0).children().first().fadeOut(200)
    })

    // 英國:從區域～郵票選項
    $('.uk_path').mouseenter(function() {
        // 郵票自動移到對應國家
        slick = 0;

        if ($(window).width() < 700) {
            $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
        } else {
            $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
        }
        // 杯子動畫
        $('.eu .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#44B9AC')
            // 底下郵票選項會動(+1)
        $('.eu .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.eu .countries .country').eq(0).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $('.eu .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域半透明
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.eu .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.eu .countries .country').eq(0).children().first().fadeOut(200)
    })

    // 英國:從郵票選項～區域
    $('.eu .countries .country').eq(0).mouseenter(function() {
            // 杯子動畫
            $('.eu .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家)
            $('.uk_path').css('fill', '#44B9AC')
                // 個別deco動畫(+1)
                // $(this).parent().next().children().eq(0).hide()
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.uk_path').css('fill', '#b293627e')
                // 個別deco動畫(+1)
                // $(this).parent().next().children().eq(0).hide()
        })
        // ------------------------------------------
        // 法國:從馬克杯～郵票選項
    $('.eu .flag2 .mug').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 1;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色 
            $('.fc_path').css('fill', '#44B9AC')
                // 郵票動畫
            $('.eu .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.eu .countries .country').eq(1).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫 
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.fc_path').css('fill', '#b293627e')
                // 郵票動畫 
            $('.eu .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.eu .countries .country').eq(1).children().first().fadeOut(200)
        })
        // 法國:從區域～郵票選項
    $('.fc_path').mouseenter(function() {
        // 郵票自動移到對應國家
        slick = 1;

        if ($(window).width() < 700) {
            $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
        } else {
            $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
        }
        // 杯子動畫
        $('.eu .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#44B9AC')
            // 底下郵票選項會動(+1)
        $('.eu .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.eu .countries .country').eq(1).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $('.eu .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域半透明
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.eu .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.eu .countries .country').eq(1).children().first().fadeOut(200)
    })

    // 法國:從郵票選項～區域
    $('.eu .countries .country').eq(1).mouseenter(function() {
            // 杯子動畫
            $('.eu .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家) 
            $('.fc_path').css('fill', '#44B9AC')
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.fc_path').css('fill', '#b293627e')
        })
        // ------------------------------------------
        // 比利時:從馬克杯～郵票選項
    $('.eu .flag3 .mug').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 1;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色 
            $('.bl_path').css('fill', '#44B9AC')
                // 郵票動畫
            $('.eu .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.eu .countries .country').eq(2).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫 
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.bl_path').css('fill', '#b293627e')
                // 郵票動畫 
            $('.eu .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.eu .countries .country').eq(2).children().first().fadeOut(200)
        })
        // 比利時:從區域～郵票選項
    $('.bl_path').mouseenter(function() {
        // 郵票自動移到對應國家
        slick = 1;

        if ($(window).width() < 700) {
            $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
        } else {
            $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
        }
        // 杯子動畫
        $('.eu .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#44B9AC')
            // 底下郵票選項會動(+1)
        $('.eu .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.eu .countries .country').eq(2).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $('.eu .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域半透明
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.eu .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.eu .countries .country').eq(2).children().first().fadeOut(200)
    })

    // 比利時:從郵票選項～區域
    $('.eu .countries .country').eq(2).mouseenter(function() {
            // 杯子動畫
            $('.eu .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家) 
            $('.bl_path').css('fill', '#44B9AC')
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.bl_path').css('fill', '#b293627e')
        })
        // ------------------------------------------
        // 挪威:從馬克杯～郵票選項
    $('.eu .flag4 .mug').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 2;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色 
            $('.nw_path').css('fill', '#44B9AC')
                // 郵票動畫
            $('.eu .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.eu .countries .country').eq(3).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫 
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.nw_path').css('fill', '#b293627e')
                // 郵票動畫 
            $('.eu .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.eu .countries .country').eq(3).children().first().fadeOut(200)
        })
        // 挪威:從區域～郵票選項
    $('.nw_path').mouseenter(function() {
        // 郵票自動移到對應國家
        slick = 2;

        if ($(window).width() < 700) {
            $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
        } else {
            $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
        }
        // 杯子動畫
        $('.eu .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#44B9AC')
            // 底下郵票選項會動(+1)
        $('.eu .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.eu .countries .country').eq(3).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $('.eu .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域半透明
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.eu .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.eu .countries .country').eq(3).children().first().fadeOut(200)
    })

    // 挪威:從郵票選項～區域
    $('.eu .countries .country').eq(3).mouseenter(function() {
            // 杯子動畫
            $('.eu .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家) 
            $('.nw_path').css('fill', '#44B9AC')
                // 個別deco動畫(+1)
                // $(this).parent().next().children().eq(3).hide()
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.nw_path').css('fill', '#b293627e')
        })
        // ------------------------------------------
        // 丹麥:從馬克杯～郵票選項
    $('.eu .flag5 .mug').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 3;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色 
            $('.dm_path').css('fill', '#44B9AC')
                // 郵票動畫
            $('.eu .countries .country').eq(4).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.eu .countries .country').eq(4).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫 
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.dm_path').css('fill', '#b293627e')
                // 郵票動畫 
            $('.eu .countries .country').eq(4).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.eu .countries .country').eq(4).children().first().fadeOut(200)
        })
        // 丹麥:從區域～郵票選項
    $('.dm_path').mouseenter(function() {
        // 郵票自動移到對應國家
        slick = 3;

        if ($(window).width() < 700) {
            $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
        } else {
            $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
        }
        // 杯子動畫
        $('.eu .flag5 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#44B9AC')
            // 底下郵票選項會動(+1)
        $('.eu .countries .country').eq(4).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.eu .countries .country').eq(4).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $('.eu .flag5 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域半透明
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.eu .countries .country').eq(4).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.eu .countries .country').eq(4).children().first().fadeOut(200)
    })

    // 丹麥:從郵票選項～區域
    $('.eu .countries .country').eq(4).mouseenter(function() {
            // 杯子動畫
            $('.eu .flag5 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家) 
            $('.dm_path').css('fill', '#44B9AC')
                // 個別deco動畫(+1)
                // $(this).parent().next().children().eq(4).hide()
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag5 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.dm_path').css('fill', '#b293627e')
        })
        // ------------------------------------------
        // 德國:從馬克杯～郵票選項
    $('.eu .flag6 .mug').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 4;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色 
            $('.gm_path').css('fill', '#44B9AC')
                // 郵票動畫
            $('.eu .countries .country').eq(5).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.eu .countries .country').eq(5).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫 
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.gm_path').css('fill', '#b293627e')
                // 郵票動畫 
            $('.eu .countries .country').eq(5).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.eu .countries .country').eq(5).children().first().fadeOut(200)
        })
        // 德國:從區域～郵票選項
    $('.gm_path').mouseenter(function() {
        // 郵票自動移到對應國家
        slick = 4;

        if ($(window).width() < 700) {
            $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
        } else {
            $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
        }
        // 杯子動畫
        $('.eu .flag6 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#44B9AC')
            // 底下郵票選項會動(+1)
        $('.eu .countries .country').eq(5).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.eu .countries .country').eq(5).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $('.eu .flag6 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域半透明
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.eu .countries .country').eq(5).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.eu .countries .country').eq(5).children().first().fadeOut(200)
    })

    // 德國:從郵票選項～區域
    $('.eu .countries .country').eq(5).mouseenter(function() {
            // 杯子動畫
            $('.eu .flag6 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家) 
            $('.gm_path').css('fill', '#44B9AC')
                // 個別deco動畫(+1)
                // $(this).parent().next().children().eq(5).hide()
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag6 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.gm_path').css('fill', '#b293627e')
        })
        // ------------------------------------------
        // 瑞典:從馬克杯～郵票選項
        // 郵票自動移到對應國家
    slick = 5;

    if ($(window).width() < 700) {
        $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
    } else {
        $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
    }
    $('.eu .flag7 .mug').mouseenter(function() {
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色 
            $('.sw_path').css('fill', '#44B9AC')
                // 郵票動畫
            $('.eu .countries .country').eq(6).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.eu .countries .country').eq(6).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫 
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.sw_path').css('fill', '#b293627e')
                // 郵票動畫 
            $('.eu .countries .country').eq(6).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.eu .countries .country').eq(6).children().first().fadeOut(200)
        })
        // 瑞典:從區域～郵票選項
    $('.sw_path').mouseenter(function() {
        // 郵票自動移到對應國家
        slick = 5;

        if ($(window).width() < 700) {
            $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
        } else {
            $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
        }
        // 杯子動畫
        $('.eu .flag7 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#44B9AC')
            // 底下郵票選項會動(+1)
        $('.eu .countries .country').eq(6).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.eu .countries .country').eq(6).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $('.eu .flag7 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域半透明
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.eu .countries .country').eq(6).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.eu .countries .country').eq(6).children().first().fadeOut(200)
    })

    // 瑞典:從郵票選項～區域
    $('.eu .countries .country').eq(6).mouseenter(function() {
            // 杯子動畫
            $('.eu .flag7 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家) 
            $('.sw_path').css('fill', '#44B9AC')
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag7 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.sw_path').css('fill', '#b293627e')
        })
        // ------------------------------------------
        // 義大利:從馬克杯～郵票選項
    $('.eu .flag8 .mug').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 6;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色 
            $('.it_path').css('fill', '#44B9AC')
                // 郵票動畫
            $('.eu .countries .country').eq(7).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.eu .countries .country').eq(7).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫 
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.it_path').css('fill', '#b293627e')
                // 郵票動畫 
            $('.eu .countries .country').eq(7).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.eu .countries .country').eq(7).children().first().fadeOut(200)
        })
        // 義大利:從區域～郵票選項
    $('.it_path').mouseenter(function() {
        // 郵票自動移到對應國家
        slick = 6;

        if ($(window).width() < 700) {
            $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
        } else {
            $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
        }
        // 杯子動畫
        $('.eu .flag8 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#44B9AC')
            // 底下郵票選項會動(+1)
        $('.eu .countries .country').eq(7).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.eu .countries .country').eq(7).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $('.eu .flag8 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域半透明
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.eu .countries .country').eq(7).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.eu .countries .country').eq(7).children().first().fadeOut(200)
    })

    // 義大利:從郵票選項～區域
    $('.eu .countries .country').eq(7).mouseenter(function() {
            // 杯子動畫
            $('.eu .flag8 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家) 
            $('.it_path').css('fill', '#44B9AC')
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag8 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.it_path').css('fill', '#b293627e')
        })
        // ------------------------------------------
        // 日本:從馬克杯～郵票選項
    $('.as .flag1 .mug').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 0;

            if ($(window).width() < 700) {
                $('.as .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.as .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色 
            $('.jp_path').css('fill', '#e27292')
                // 郵票動畫
            $('.as .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.as .countries .country').eq(0).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫 
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.jp_path').css('fill', '#b293627e')
                // 郵票動畫 
            $('.as .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.as .countries .country').eq(0).children().first().fadeOut(200)
        })
        // 日本:從區域～郵票選項
    $('.jp_path').mouseenter(function() {
        // 郵票自動移到對應國家
        slick = 0;

        if ($(window).width() < 700) {
            $('.as .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
        } else {
            $('.as .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
        }
        // 杯子動畫
        $('.as .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#e27292')
            // 底下郵票選項會動(+1)
        $('.as .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.as .countries .country').eq(0).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $('.as .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域半透明
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.as .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.as .countries .country').eq(0).children().first().fadeOut(200)
    })

    // 日本:從郵票選項～區域
    $('.as .countries .country').eq(0).mouseenter(function() {
            // 杯子動畫
            $('.as .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家)
            $('.jp_path').css('fill', '#e27292')
                // 個別deco動畫(+1)
                // $(this).parent().next().children().eq(0).hide()
        }).mouseleave(function() {
            // 杯子動畫
            $('.as .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.jp_path').css('fill', '#b293627e')
                // 個別deco動畫(+1)
                // $(this).parent().next().children().eq(0).hide()
        })
        // ------------------------------------------
        // 俄羅斯:從馬克杯～郵票選項
    $('.as .flag2 .mug').mouseenter(function() {
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色 
            $('.rs_path').css('fill', '#e27292')
                // 郵票動畫
            $('.as .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.as .countries .country').eq(1).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫 
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.rs_path').css('fill', '#b293627e')
                // 郵票動畫 
            $('.as .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.as .countries .country').eq(1).children().first().fadeOut(200)
        })
        // 俄國:從區域～郵票選項
    $('.rs_path').mouseenter(function() {
        // 郵票自動移到對應國家
        slick = 0;

        if ($(window).width() < 700) {
            $('.as .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
        } else {
            $('.as .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
        }
        // 杯子動畫
        $('.as .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#e27292')
            // 底下郵票選項會動(+1)
        $('.as .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.as .countries .country').eq(1).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $('.as .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域半透明
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.as .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.as .countries .country').eq(1).children().first().fadeOut(200)
    })

    // 俄國:從郵票選項～區域
    $('.as .countries .country').eq(1).mouseenter(function() {
            // 杯子動畫
            $('.as .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家) 
            $('.rs_path').css('fill', '#e27292')
                // 個別deco動畫(+1)
                // $(this).parent().next().children().eq(1).hide()
        }).mouseleave(function() {
            // 杯子動畫
            $('.as .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.rs_path').css('fill', '#b293627e')
                // 個別deco動畫(+1)
                // $(this).parent().next().children().eq(1).hide()
        })
        // ------------------------------------------
        // 新加坡:從馬克杯～郵票選項
    $('.as .flag3 .mug').mouseenter(function() {
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色 
            $('.sp_path').css('fill', '#e27292')
                // 郵票動畫
            $('.as .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.as .countries .country').eq(2).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫 
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.sp_path').css('fill', '#b293627e')
                // 郵票動畫 
            $('.as .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.as .countries .country').eq(2).children().first().fadeOut(200)
        })
        // 新加坡:從區域～郵票選項
    $('.sp_path').mouseenter(function() {
        // 郵票自動移到對應國家
        slick = 0;

        if ($(window).width() < 700) {
            $('.as .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
        } else {
            $('.as .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
        }
        // 杯子動畫
        $('.as .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#e27292')
            // 底下郵票選項會動(+1)
        $('.as .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.as .countries .country').eq(2).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $('.as .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域半透明
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.as .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.as .countries .country').eq(2).children().first().fadeOut(200)
    })

    // 新加坡:從郵票選項～區域
    $('.as .countries .country').eq(2).mouseenter(function() {
            // 杯子動畫
            $('.as .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家) 
            $('.sp_path').css('fill', '#e27292')
        }).mouseleave(function() {
            // 杯子動畫
            $('.as .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.sp_path').css('fill', '#b293627e')
        })
        // ------------------------------------------
        // 越南:從馬克杯～郵票選項
    $('.as .flag4 .mug').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 1;

            if ($(window).width() < 700) {
                $('.as .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.as .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色 
            $('.vm_path').css('fill', '#e27292')
                // 郵票動畫
            $('.as .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.as .countries .country').eq(3).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫 
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.vm_path').css('fill', '#b293627e')
                // 郵票動畫 
            $('.as .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.as .countries .country').eq(3).children().first().fadeOut(200)
        })
        // 越南:從區域～郵票選項
    $('.vm_path').mouseenter(function() {
        // 郵票自動移到對應國家
        slick = 1;

        if ($(window).width() < 700) {
            $('.as .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
        } else {
            $('.as .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
        }
        // 杯子動畫
        $('.as .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#e27292')
            // 底下郵票選項會動(+1)
        $('.as .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.as .countries .country').eq(3).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $('.as .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域半透明
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.as .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.as .countries .country').eq(3).children().first().fadeOut(200)
    })

    // 越南:從郵票選項～區域
    $('.as .countries .country').eq(3).mouseenter(function() {
            // 杯子動畫
            $('.as .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家) 
            $('.vm_path').css('fill', '#e27292')
        }).mouseleave(function() {
            // 杯子動畫
            $('.as .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.vm_path').css('fill', '#b293627e')
        })
        // ------------------------------------------
        // 澳洲:從馬克杯～郵票選項
    $('.au .flag1 .mug').mouseenter(function() {
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色 
            $('.au_path').css('fill', '#EB963C')
                // 郵票動畫
            $('.au .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.au .countries .country').eq(0).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫 
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.au_path').css('fill', '#b293627e')
                // 郵票動畫 
            $('.au .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.au .countries .country').eq(0).children().first().fadeOut(200)
        })
        // 澳洲:從區域～郵票選項
    $('.au_path').mouseenter(function() { //(換國家) 
        // 杯子動畫
        $('.au .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#EB963C')
            // 底下郵票選項會動(+1)
        $('.au .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.au .countries .country').eq(0).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $('.au .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域半透明
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.au .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.au .countries .country').eq(0).children().first().fadeOut(200)
    })

    // 澳洲:從郵票選項～區域
    $('.au .countries .country').eq(0).mouseenter(function() { //(換州) 
            // 杯子動畫
            $('.au .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家)
            $('.au_path').css('fill', '#EB963C')
                // 個別deco動畫(+1)
                // $(this).parent().next().children().eq(0).hide()
        }).mouseleave(function() {
            // 杯子動畫
            $('.au .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.au_path').css('fill', '#b293627e')
                // 個別deco動畫(+1)
                // $(this).parent().next().children().eq(0).hide()
        })
        // ------------------------------------------
        // 紐西蘭:從馬克杯～郵票選項
    $('.au .flag2 .mug').mouseenter(function() {
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色 
            $('.nz_path').css('fill', '#EB963C')
                // 郵票動畫
            $('.au .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.au .countries .country').eq(1).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫 
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.nz_path').css('fill', '#b293627e')
                // 郵票動畫 
            $('.au .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.au .countries .country').eq(1).children().first().fadeOut(200)
        })
        // 紐西蘭:從區域～郵票選項
    $('.nz_path').mouseenter(function() { //(換國家) 
        // 杯子動畫
        $('.au .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域填滿綠色
        $(this).css('fill', '#EB963C')
            // 底下郵票選項會動(+1)
        $('.au .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡入(+1)
        $('.au .countries .country').eq(1).children().first().fadeIn(200)
    }).mouseleave(function() {
        // 杯子動畫
        $('.au .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 區域半透明
        $(this).css('fill', '#b293627e')
            // 底下郵票選項不動(+1)
        $('.au .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
            // 國家名淡出(+1)
        $('.au .countries .country').eq(1).children().first().fadeOut(200)
    })

    // 紐西蘭:從郵票選項～區域
    $('.au .countries .country').eq(1).mouseenter(function() { //(換州) 
        // 杯子動畫
        $('.au .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 國家名淡入
        $(this).eq(0).children().first().fadeIn(200)
            // 區域填滿綠色(換國家) 
        $('.nz_path').css('fill', '#EB963C')
    }).mouseleave(function() {
        // 杯子動畫
        $('.au .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            // 國家名淡出   
        $(this).eq(0).children().first().fadeOut(200)
            // 區域半透明(換國家) 
        $('.nz_path').css('fill', '#b293627e')
    })

} else {
    // 杯子動畫
    $('.mug').addClass('animate__animated animate__tada').addClass('infinite');
    // 區域填色
    $('.us_path').css('fill', '#B676D1')
    $('.eu .country_path').css('fill', '#44B9AC')
    $('.as .country_path').css('fill', '#e27292')
    $('.au .country_path').css('fill', '#EB963C')
}

$(window).resize(function() {
    if ($(window).width() > 700) {
        $('.us .mug').mouseenter(function() {
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.us_path').css('fill', '#B676D1')
                // 郵票動畫
            $('.us .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.us .countries .country').eq(0).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.us_path').css('fill', '#b293627e')
                // 郵票動畫
            $('.us .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.us .countries .country').eq(0).children().first().fadeOut(200)
        })

        // 美國:從區域～郵票選項
        $('.us_path').mouseenter(function() {

            // 杯子動畫
            $('.us .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#B676D1')
                // 底下郵票選項會動(+1)
            $('.us .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.us .countries .country').eq(0).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 區域半透明
            // 杯子動畫
            $('.us .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.us .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.us .countries .country').eq(0).children().first().fadeOut(200)
        })

        // 美國:從郵票選項～區域
        $('.us .countries .country').eq(0).mouseenter(function() {
                // 國家名淡入
                $(this).eq(0).children().first().fadeIn(200)
                    // 區域填滿綠色(換國家)
                $('.us_path').css('fill', '#B676D1')
                    // 個別deco動畫(+1)
                    // $(this).parent().next().children().eq(0).hide()
                    // 杯子動畫
                $('.us .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            }).mouseleave(function() {
                // 國家名淡出   
                $(this).eq(0).children().first().fadeOut(200)
                    // 區域半透明(換國家) 
                $('.us_path').css('fill', '#b293627e')
                    // 個別deco動畫(+1)
                    // $(this).parent().next().children().eq(0).hide()
                    // 杯子動畫
                $('.us .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
            })
            // ------------------------------------------
            // 英國:從馬克杯～郵票選項
        $('.eu .flag1 .mug').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 0;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色 
            $('.uk_path').css('fill', '#44B9AC')
                // 郵票動畫
            $('.eu .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入
            $('.eu .countries .country').eq(0).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫 
            $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填色
            $('.uk_path').css('fill', '#b293627e')
                // 郵票動畫 
            $('.eu .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出
            $('.eu .countries .country').eq(0).children().first().fadeOut(200)
        })

        // 英國:從區域～郵票選項
        $('.uk_path').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 0;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $('.eu .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#44B9AC')
                // 底下郵票選項會動(+1)
            $('.eu .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.eu .countries .country').eq(0).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域半透明
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.eu .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.eu .countries .country').eq(0).children().first().fadeOut(200)
        })

        // 英國:從郵票選項～區域
        $('.eu .countries .country').eq(0).mouseenter(function() {
                // 杯子動畫
                $('.eu .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡入
                $(this).eq(0).children().first().fadeIn(200)
                    // 區域填滿綠色(換國家)
                $('.uk_path').css('fill', '#44B9AC')
                    // 個別deco動畫(+1)
                    // $(this).parent().next().children().eq(0).hide()
            }).mouseleave(function() {
                // 杯子動畫
                $('.eu .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡出   
                $(this).eq(0).children().first().fadeOut(200)
                    // 區域半透明(換國家) 
                $('.uk_path').css('fill', '#b293627e')
                    // 個別deco動畫(+1)
                    // $(this).parent().next().children().eq(0).hide()
            })
            // ------------------------------------------
            // 法國:從馬克杯～郵票選項
        $('.eu .flag2 .mug').mouseenter(function() {
                // 郵票自動移到對應國家
                slick = 1;

                if ($(window).width() < 700) {
                    $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
                } else {
                    $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
                }
                // 杯子動畫
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色 
                $('.fc_path').css('fill', '#44B9AC')
                    // 郵票動畫
                $('.eu .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡入
                $('.eu .countries .country').eq(1).children().first().fadeIn(200)
            }).mouseleave(function() {
                // 杯子動畫 
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色
                $('.fc_path').css('fill', '#b293627e')
                    // 郵票動畫 
                $('.eu .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡出
                $('.eu .countries .country').eq(1).children().first().fadeOut(200)
            })
            // 法國:從區域～郵票選項
        $('.fc_path').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 1;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $('.eu .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#44B9AC')
                // 底下郵票選項會動(+1)
            $('.eu .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.eu .countries .country').eq(1).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域半透明
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.eu .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.eu .countries .country').eq(1).children().first().fadeOut(200)
        })

        // 法國:從郵票選項～區域
        $('.eu .countries .country').eq(1).mouseenter(function() {
                // 杯子動畫
                $('.eu .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡入
                $(this).eq(0).children().first().fadeIn(200)
                    // 區域填滿綠色(換國家) 
                $('.fc_path').css('fill', '#44B9AC')
            }).mouseleave(function() {
                // 杯子動畫
                $('.eu .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡出   
                $(this).eq(0).children().first().fadeOut(200)
                    // 區域半透明(換國家) 
                $('.fc_path').css('fill', '#b293627e')
            })
            // ------------------------------------------
            // 比利時:從馬克杯～郵票選項
        $('.eu .flag3 .mug').mouseenter(function() {
                // 郵票自動移到對應國家
                slick = 1;

                if ($(window).width() < 700) {
                    $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
                } else {
                    $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
                }
                // 杯子動畫
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色 
                $('.bl_path').css('fill', '#44B9AC')
                    // 郵票動畫
                $('.eu .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡入
                $('.eu .countries .country').eq(2).children().first().fadeIn(200)
            }).mouseleave(function() {
                // 杯子動畫 
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色
                $('.bl_path').css('fill', '#b293627e')
                    // 郵票動畫 
                $('.eu .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡出
                $('.eu .countries .country').eq(2).children().first().fadeOut(200)
            })
            // 比利時:從區域～郵票選項
        $('.bl_path').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 1;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $('.eu .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#44B9AC')
                // 底下郵票選項會動(+1)
            $('.eu .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.eu .countries .country').eq(2).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域半透明
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.eu .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.eu .countries .country').eq(2).children().first().fadeOut(200)
        })

        // 比利時:從郵票選項～區域
        $('.eu .countries .country').eq(2).mouseenter(function() {
                // 杯子動畫
                $('.eu .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡入
                $(this).eq(0).children().first().fadeIn(200)
                    // 區域填滿綠色(換國家) 
                $('.bl_path').css('fill', '#44B9AC')
            }).mouseleave(function() {
                // 杯子動畫
                $('.eu .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡出   
                $(this).eq(0).children().first().fadeOut(200)
                    // 區域半透明(換國家) 
                $('.bl_path').css('fill', '#b293627e')
            })
            // ------------------------------------------
            // 挪威:從馬克杯～郵票選項
        $('.eu .flag4 .mug').mouseenter(function() {
                // 郵票自動移到對應國家
                slick = 2;

                if ($(window).width() < 700) {
                    $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
                } else {
                    $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
                }
                // 杯子動畫
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色 
                $('.nw_path').css('fill', '#44B9AC')
                    // 郵票動畫
                $('.eu .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡入
                $('.eu .countries .country').eq(3).children().first().fadeIn(200)
            }).mouseleave(function() {
                // 杯子動畫 
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色
                $('.nw_path').css('fill', '#b293627e')
                    // 郵票動畫 
                $('.eu .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡出
                $('.eu .countries .country').eq(3).children().first().fadeOut(200)
            })
            // 挪威:從區域～郵票選項
        $('.nw_path').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 2;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $('.eu .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#44B9AC')
                // 底下郵票選項會動(+1)
            $('.eu .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.eu .countries .country').eq(3).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域半透明
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.eu .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.eu .countries .country').eq(3).children().first().fadeOut(200)
        })

        // 挪威:從郵票選項～區域
        $('.eu .countries .country').eq(3).mouseenter(function() {
                // 杯子動畫
                $('.eu .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡入
                $(this).eq(0).children().first().fadeIn(200)
                    // 區域填滿綠色(換國家) 
                $('.nw_path').css('fill', '#44B9AC')
                    // 個別deco動畫(+1)
                    // $(this).parent().next().children().eq(3).hide()
            }).mouseleave(function() {
                // 杯子動畫
                $('.eu .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡出   
                $(this).eq(0).children().first().fadeOut(200)
                    // 區域半透明(換國家) 
                $('.nw_path').css('fill', '#b293627e')
            })
            // ------------------------------------------
            // 丹麥:從馬克杯～郵票選項
        $('.eu .flag5 .mug').mouseenter(function() {
                // 郵票自動移到對應國家
                slick = 3;

                if ($(window).width() < 700) {
                    $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
                } else {
                    $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
                }
                // 杯子動畫
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色 
                $('.dm_path').css('fill', '#44B9AC')
                    // 郵票動畫
                $('.eu .countries .country').eq(4).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡入
                $('.eu .countries .country').eq(4).children().first().fadeIn(200)
            }).mouseleave(function() {
                // 杯子動畫 
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色
                $('.dm_path').css('fill', '#b293627e')
                    // 郵票動畫 
                $('.eu .countries .country').eq(4).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡出
                $('.eu .countries .country').eq(4).children().first().fadeOut(200)
            })
            // 丹麥:從區域～郵票選項
        $('.dm_path').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 3;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $('.eu .flag5 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#44B9AC')
                // 底下郵票選項會動(+1)
            $('.eu .countries .country').eq(4).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.eu .countries .country').eq(4).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag5 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域半透明
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.eu .countries .country').eq(4).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.eu .countries .country').eq(4).children().first().fadeOut(200)
        })

        // 丹麥:從郵票選項～區域
        $('.eu .countries .country').eq(4).mouseenter(function() {
                // 杯子動畫
                $('.eu .flag5 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡入
                $(this).eq(0).children().first().fadeIn(200)
                    // 區域填滿綠色(換國家) 
                $('.dm_path').css('fill', '#44B9AC')
                    // 個別deco動畫(+1)
                    // $(this).parent().next().children().eq(4).hide()
            }).mouseleave(function() {
                // 杯子動畫
                $('.eu .flag5 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡出   
                $(this).eq(0).children().first().fadeOut(200)
                    // 區域半透明(換國家) 
                $('.dm_path').css('fill', '#b293627e')
            })
            // ------------------------------------------
            // 德國:從馬克杯～郵票選項
        $('.eu .flag6 .mug').mouseenter(function() {
                // 郵票自動移到對應國家
                slick = 4;

                if ($(window).width() < 700) {
                    $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
                } else {
                    $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
                }
                // 杯子動畫
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色 
                $('.gm_path').css('fill', '#44B9AC')
                    // 郵票動畫
                $('.eu .countries .country').eq(5).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡入
                $('.eu .countries .country').eq(5).children().first().fadeIn(200)
            }).mouseleave(function() {
                // 杯子動畫 
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色
                $('.gm_path').css('fill', '#b293627e')
                    // 郵票動畫 
                $('.eu .countries .country').eq(5).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡出
                $('.eu .countries .country').eq(5).children().first().fadeOut(200)
            })
            // 德國:從區域～郵票選項
        $('.gm_path').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 4;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $('.eu .flag6 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#44B9AC')
                // 底下郵票選項會動(+1)
            $('.eu .countries .country').eq(5).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.eu .countries .country').eq(5).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag6 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域半透明
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.eu .countries .country').eq(5).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.eu .countries .country').eq(5).children().first().fadeOut(200)
        })

        // 德國:從郵票選項～區域
        $('.eu .countries .country').eq(5).mouseenter(function() {
                // 杯子動畫
                $('.eu .flag6 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡入
                $(this).eq(0).children().first().fadeIn(200)
                    // 區域填滿綠色(換國家) 
                $('.gm_path').css('fill', '#44B9AC')
                    // 個別deco動畫(+1)
                    // $(this).parent().next().children().eq(5).hide()
            }).mouseleave(function() {
                // 杯子動畫
                $('.eu .flag6 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡出   
                $(this).eq(0).children().first().fadeOut(200)
                    // 區域半透明(換國家) 
                $('.gm_path').css('fill', '#b293627e')
            })
            // ------------------------------------------
            // 瑞典:從馬克杯～郵票選項
            // 郵票自動移到對應國家
        slick = 5;

        if ($(window).width() < 700) {
            $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
        } else {
            $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
        }
        $('.eu .flag7 .mug').mouseenter(function() {
                // 杯子動畫
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色 
                $('.sw_path').css('fill', '#44B9AC')
                    // 郵票動畫
                $('.eu .countries .country').eq(6).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡入
                $('.eu .countries .country').eq(6).children().first().fadeIn(200)
            }).mouseleave(function() {
                // 杯子動畫 
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色
                $('.sw_path').css('fill', '#b293627e')
                    // 郵票動畫 
                $('.eu .countries .country').eq(6).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡出
                $('.eu .countries .country').eq(6).children().first().fadeOut(200)
            })
            // 瑞典:從區域～郵票選項
        $('.sw_path').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 5;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $('.eu .flag7 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#44B9AC')
                // 底下郵票選項會動(+1)
            $('.eu .countries .country').eq(6).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.eu .countries .country').eq(6).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag7 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域半透明
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.eu .countries .country').eq(6).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.eu .countries .country').eq(6).children().first().fadeOut(200)
        })

        // 瑞典:從郵票選項～區域
        $('.eu .countries .country').eq(6).mouseenter(function() {
                // 杯子動畫
                $('.eu .flag7 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡入
                $(this).eq(0).children().first().fadeIn(200)
                    // 區域填滿綠色(換國家) 
                $('.sw_path').css('fill', '#44B9AC')
            }).mouseleave(function() {
                // 杯子動畫
                $('.eu .flag7 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡出   
                $(this).eq(0).children().first().fadeOut(200)
                    // 區域半透明(換國家) 
                $('.sw_path').css('fill', '#b293627e')
            })
            // ------------------------------------------
            // 義大利:從馬克杯～郵票選項
        $('.eu .flag8 .mug').mouseenter(function() {
                // 郵票自動移到對應國家
                slick = 6;

                if ($(window).width() < 700) {
                    $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
                } else {
                    $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
                }
                // 杯子動畫
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色 
                $('.it_path').css('fill', '#44B9AC')
                    // 郵票動畫
                $('.eu .countries .country').eq(7).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡入
                $('.eu .countries .country').eq(7).children().first().fadeIn(200)
            }).mouseleave(function() {
                // 杯子動畫 
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色
                $('.it_path').css('fill', '#b293627e')
                    // 郵票動畫 
                $('.eu .countries .country').eq(7).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡出
                $('.eu .countries .country').eq(7).children().first().fadeOut(200)
            })
            // 義大利:從區域～郵票選項
        $('.it_path').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 6;

            if ($(window).width() < 700) {
                $('.eu .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.eu .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $('.eu .flag8 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#44B9AC')
                // 底下郵票選項會動(+1)
            $('.eu .countries .country').eq(7).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.eu .countries .country').eq(7).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $('.eu .flag8 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域半透明
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.eu .countries .country').eq(7).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.eu .countries .country').eq(7).children().first().fadeOut(200)
        })

        // 義大利:從郵票選項～區域
        $('.eu .countries .country').eq(7).mouseenter(function() {
                // 杯子動畫
                $('.eu .flag8 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡入
                $(this).eq(0).children().first().fadeIn(200)
                    // 區域填滿綠色(換國家) 
                $('.it_path').css('fill', '#44B9AC')
            }).mouseleave(function() {
                // 杯子動畫
                $('.eu .flag8 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡出   
                $(this).eq(0).children().first().fadeOut(200)
                    // 區域半透明(換國家) 
                $('.it_path').css('fill', '#b293627e')
            })
            // ------------------------------------------
            // 日本:從馬克杯～郵票選項
        $('.as .flag1 .mug').mouseenter(function() {
                // 郵票自動移到對應國家
                slick = 0;

                if ($(window).width() < 700) {
                    $('.as .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
                } else {
                    $('.as .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
                }
                // 杯子動畫
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色 
                $('.jp_path').css('fill', '#e27292')
                    // 郵票動畫
                $('.as .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡入
                $('.as .countries .country').eq(0).children().first().fadeIn(200)
            }).mouseleave(function() {
                // 杯子動畫 
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色
                $('.jp_path').css('fill', '#b293627e')
                    // 郵票動畫 
                $('.as .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡出
                $('.as .countries .country').eq(0).children().first().fadeOut(200)
            })
            // 日本:從區域～郵票選項
        $('.jp_path').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 0;

            if ($(window).width() < 700) {
                $('.as .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.as .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $('.as .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#e27292')
                // 底下郵票選項會動(+1)
            $('.as .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.as .countries .country').eq(0).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $('.as .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域半透明
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.as .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.as .countries .country').eq(0).children().first().fadeOut(200)
        })

        // 日本:從郵票選項～區域
        $('.as .countries .country').eq(0).mouseenter(function() {
                // 杯子動畫
                $('.as .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡入
                $(this).eq(0).children().first().fadeIn(200)
                    // 區域填滿綠色(換國家)
                $('.jp_path').css('fill', '#e27292')
                    // 個別deco動畫(+1)
                    // $(this).parent().next().children().eq(0).hide()
            }).mouseleave(function() {
                // 杯子動畫
                $('.as .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡出   
                $(this).eq(0).children().first().fadeOut(200)
                    // 區域半透明(換國家) 
                $('.jp_path').css('fill', '#b293627e')
                    // 個別deco動畫(+1)
                    // $(this).parent().next().children().eq(0).hide()
            })
            // ------------------------------------------
            // 俄羅斯:從馬克杯～郵票選項
        $('.as .flag2 .mug').mouseenter(function() {
                // 杯子動畫
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色 
                $('.rs_path').css('fill', '#e27292')
                    // 郵票動畫
                $('.as .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡入
                $('.as .countries .country').eq(1).children().first().fadeIn(200)
            }).mouseleave(function() {
                // 杯子動畫 
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色
                $('.rs_path').css('fill', '#b293627e')
                    // 郵票動畫 
                $('.as .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡出
                $('.as .countries .country').eq(1).children().first().fadeOut(200)
            })
            // 俄國:從區域～郵票選項
        $('.rs_path').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 0;

            if ($(window).width() < 700) {
                $('.as .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.as .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $('.as .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#e27292')
                // 底下郵票選項會動(+1)
            $('.as .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.as .countries .country').eq(1).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $('.as .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域半透明
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.as .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.as .countries .country').eq(1).children().first().fadeOut(200)
        })

        // 俄國:從郵票選項～區域
        $('.as .countries .country').eq(1).mouseenter(function() {
                // 杯子動畫
                $('.as .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡入
                $(this).eq(0).children().first().fadeIn(200)
                    // 區域填滿綠色(換國家) 
                $('.rs_path').css('fill', '#e27292')
                    // 個別deco動畫(+1)
                    // $(this).parent().next().children().eq(1).hide()
            }).mouseleave(function() {
                // 杯子動畫
                $('.as .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡出   
                $(this).eq(0).children().first().fadeOut(200)
                    // 區域半透明(換國家) 
                $('.rs_path').css('fill', '#b293627e')
                    // 個別deco動畫(+1)
                    // $(this).parent().next().children().eq(1).hide()
            })
            // ------------------------------------------
            // 新加坡:從馬克杯～郵票選項
        $('.as .flag3 .mug').mouseenter(function() {
                // 杯子動畫
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色 
                $('.sp_path').css('fill', '#e27292')
                    // 郵票動畫
                $('.as .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡入
                $('.as .countries .country').eq(2).children().first().fadeIn(200)
            }).mouseleave(function() {
                // 杯子動畫 
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色
                $('.sp_path').css('fill', '#b293627e')
                    // 郵票動畫 
                $('.as .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡出
                $('.as .countries .country').eq(2).children().first().fadeOut(200)
            })
            // 新加坡:從區域～郵票選項
        $('.sp_path').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 0;

            if ($(window).width() < 700) {
                $('.as .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.as .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $('.as .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#e27292')
                // 底下郵票選項會動(+1)
            $('.as .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.as .countries .country').eq(2).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $('.as .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域半透明
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.as .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.as .countries .country').eq(2).children().first().fadeOut(200)
        })

        // 新加坡:從郵票選項～區域
        $('.as .countries .country').eq(2).mouseenter(function() {
                // 杯子動畫
                $('.as .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡入
                $(this).eq(0).children().first().fadeIn(200)
                    // 區域填滿綠色(換國家) 
                $('.sp_path').css('fill', '#e27292')
            }).mouseleave(function() {
                // 杯子動畫
                $('.as .flag3 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡出   
                $(this).eq(0).children().first().fadeOut(200)
                    // 區域半透明(換國家) 
                $('.sp_path').css('fill', '#b293627e')
            })
            // ------------------------------------------
            // 越南:從馬克杯～郵票選項
        $('.as .flag4 .mug').mouseenter(function() {
                // 郵票自動移到對應國家
                slick = 1;

                if ($(window).width() < 700) {
                    $('.as .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
                } else {
                    $('.as .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
                }
                // 杯子動畫
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色 
                $('.vm_path').css('fill', '#e27292')
                    // 郵票動畫
                $('.as .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡入
                $('.as .countries .country').eq(3).children().first().fadeIn(200)
            }).mouseleave(function() {
                // 杯子動畫 
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色
                $('.vm_path').css('fill', '#b293627e')
                    // 郵票動畫 
                $('.as .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡出
                $('.as .countries .country').eq(3).children().first().fadeOut(200)
            })
            // 越南:從區域～郵票選項
        $('.vm_path').mouseenter(function() {
            // 郵票自動移到對應國家
            slick = 1;

            if ($(window).width() < 700) {
                $('.as .manycountry').css('left', slick * -105 + 'px').css('transition', '.3s');
            } else {
                $('.as .manycountry').css('left', slick * -140 + 'px').css('transition', '.3s');
            }
            // 杯子動畫
            $('.as .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#e27292')
                // 底下郵票選項會動(+1)
            $('.as .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.as .countries .country').eq(3).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $('.as .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域半透明
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.as .countries .country').eq(3).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.as .countries .country').eq(3).children().first().fadeOut(200)
        })

        // 越南:從郵票選項～區域
        $('.as .countries .country').eq(3).mouseenter(function() {
                // 杯子動畫
                $('.as .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡入
                $(this).eq(0).children().first().fadeIn(200)
                    // 區域填滿綠色(換國家) 
                $('.vm_path').css('fill', '#e27292')
            }).mouseleave(function() {
                // 杯子動畫
                $('.as .flag4 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡出   
                $(this).eq(0).children().first().fadeOut(200)
                    // 區域半透明(換國家) 
                $('.vm_path').css('fill', '#b293627e')
            })
            // ------------------------------------------
            // 澳洲:從馬克杯～郵票選項
        $('.au .flag1 .mug').mouseenter(function() {
                // 杯子動畫
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色 
                $('.au_path').css('fill', '#EB963C')
                    // 郵票動畫
                $('.au .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡入
                $('.au .countries .country').eq(0).children().first().fadeIn(200)
            }).mouseleave(function() {
                // 杯子動畫 
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色
                $('.au_path').css('fill', '#b293627e')
                    // 郵票動畫 
                $('.au .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡出
                $('.au .countries .country').eq(0).children().first().fadeOut(200)
            })
            // 澳洲:從區域～郵票選項
        $('.au_path').mouseenter(function() { //(換國家) 
            // 杯子動畫
            $('.au .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#EB963C')
                // 底下郵票選項會動(+1)
            $('.au .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.au .countries .country').eq(0).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $('.au .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域半透明
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.au .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.au .countries .country').eq(0).children().first().fadeOut(200)
        })

        // 澳洲:從郵票選項～區域
        $('.au .countries .country').eq(0).mouseenter(function() { //(換州) 
                // 杯子動畫
                $('.au .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡入
                $(this).eq(0).children().first().fadeIn(200)
                    // 區域填滿綠色(換國家)
                $('.au_path').css('fill', '#EB963C')
                    // 個別deco動畫(+1)
                    // $(this).parent().next().children().eq(0).hide()
            }).mouseleave(function() {
                // 杯子動畫
                $('.au .flag1 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 國家名淡出   
                $(this).eq(0).children().first().fadeOut(200)
                    // 區域半透明(換國家) 
                $('.au_path').css('fill', '#b293627e')
                    // 個別deco動畫(+1)
                    // $(this).parent().next().children().eq(0).hide()
            })
            // ------------------------------------------
            // 紐西蘭:從馬克杯～郵票選項
        $('.au .flag2 .mug').mouseenter(function() {
                // 杯子動畫
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色 
                $('.nz_path').css('fill', '#EB963C')
                    // 郵票動畫
                $('.au .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡入
                $('.au .countries .country').eq(1).children().first().fadeIn(200)
            }).mouseleave(function() {
                // 杯子動畫 
                $(this).toggleClass('animate__animated animate__tada').toggleClass('infinite')
                    // 區域填色
                $('.nz_path').css('fill', '#b293627e')
                    // 郵票動畫 
                $('.au .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                    // 國家名淡出
                $('.au .countries .country').eq(1).children().first().fadeOut(200)
            })
            // 紐西蘭:從區域～郵票選項
        $('.nz_path').mouseenter(function() { //(換國家) 
            // 杯子動畫
            $('.au .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域填滿綠色
            $(this).css('fill', '#EB963C')
                // 底下郵票選項會動(+1)
            $('.au .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡入(+1)
            $('.au .countries .country').eq(1).children().first().fadeIn(200)
        }).mouseleave(function() {
            // 杯子動畫
            $('.au .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 區域半透明
            $(this).css('fill', '#b293627e')
                // 底下郵票選項不動(+1)
            $('.au .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
                // 國家名淡出(+1)
            $('.au .countries .country').eq(1).children().first().fadeOut(200)
        })

        // 紐西蘭:從郵票選項～區域
        $('.au .countries .country').eq(1).mouseenter(function() { //(換州) 
            // 杯子動畫
            $('.au .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡入
            $(this).eq(0).children().first().fadeIn(200)
                // 區域填滿綠色(換國家) 
            $('.nz_path').css('fill', '#EB963C')
        }).mouseleave(function() {
            // 杯子動畫
            $('.au .flag2 .mug').toggleClass('animate__animated animate__tada').toggleClass('infinite')
                // 國家名淡出   
            $(this).eq(0).children().first().fadeOut(200)
                // 區域半透明(換國家) 
            $('.nz_path').css('fill', '#b293627e')
        })

    } else {
        // 杯子動畫
        $('.mug').addClass('animate__animated animate__tada').addClass('infinite');
        // 區域填色
        $('.us_path').css('fill', '#B676D1')
        $('.eu .country_path').css('fill', '#44B9AC')
        $('.as .country_path').css('fill', '#e27292')
        $('.au .country_path').css('fill', '#EB963C')
    }
})