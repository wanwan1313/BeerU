// 預設關閉
$('.country_name').hide()
// 設置hover地區讓郵票動，出現國家名

// ------------------------------------------
// 日本:從區域～郵票選項
$('.jp_path').mouseenter(function(){
    // 個別deco動畫
    // $(this).parent().next().children().eq(0).hide()
    // 區域填滿綠色
    $('.jp_flags').children().eq(0).toggleClass('animate__animated animate__bounce');
    $(this).css('fill', 'var(--blue)');
    // 底下郵票選項會動
    $('.as .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite');
    // 國家名淡入
    $('.as .countries .country').eq(0).children().first().fadeIn(200);
}).mouseleave(function(){
    // 區域半透明
    $(this).css('fill', '#b293627e')
    // 底下郵票選項不動
    $('.as .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
    // 國家名淡出
    $('.as .countries .country').eq(0).children().first().fadeOut(200)
})

// 日本:從郵票選項～區域
$('.as .countries .country').eq(0).mouseenter(function(){
    // 個別deco動畫
    // $(this).parent().next().children().eq(0).hide()
    // 區域填滿綠色
    $('.jp_path').css('fill', 'var(--blue)')
    // 國家名淡入
    $(this).eq(0).children().first().fadeIn(200)
}).mouseleave(function(){
    // 區域半透明
    $('.jp_path').css('fill', '#b293627e')
    // 國家名淡出
    $(this).eq(0).children().first().fadeOut(200)
})
// ------------------------------------------
// 俄國:從區域～郵票選項
$('.rs_path').mouseenter(function(){
    // 個別deco動畫
    // $(this).parent().next().children().eq(0).hide()
    // 區域填滿綠色
    // $('.rs_flags').children().eq(1).toggleClass('animate__animated animate__bounce')
    $(this).css('fill', 'var(--blue)')
    // 底下郵票選項會動
    $('.as .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
    // 國家名淡入
    $('.as .countries .country').eq(1).children().first().fadeIn(200)
}).mouseleave(function(){
    // 個別deco動畫
    // $(this).parent().next().children().eq(1).hide()
    // 區域半透明
    $(this).css('fill', '#b293627e')
    // 底下郵票選項不動
    $('.as .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
    // 國家名淡出
    $('.as .countries .country').eq(0).children().first().fadeOut(200)
})

// 俄國:從郵票選項～區域
$('.as .countries .country').eq(1).mouseenter(function(){
    // 個別deco動畫
    // $(this).parent().next().children().eq(0).hide()
    // 區域填滿綠色
    $('.rs_path').css('fill', 'var(--blue)')
    // 國家名淡入
    $(this).eq(1).children().first().fadeIn(200)
}).mouseleave(function(){
    // 區域半透明
    $('.rs_path').css('fill', '#b293627e')
    // 國家名淡出
    $(this).eq(0).children().first().fadeOut(200)
})
// ------------------------------------------
// 新加坡:從區域～郵票選項
$('.sp_path').mouseenter(function(){
    // 個別deco動畫
    // $(this).parent().next().children().eq(2).hide()
    // 區域填滿綠色
    $(this).css('fill', 'var(--blue)')
    // 底下郵票選項會動
    $('.as .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
    // 國家名淡入
    $('.as .countries .country').eq(2).children().first().fadeIn(200)
}).mouseleave(function(){
    // 個別deco動畫
    // $(this).parent().next().children().eq(2).hide()
    // 區域半透明
    $(this).css('fill', '#b293627e')
    // 底下郵票選項不動
    $('.as .countries .country').eq(2).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
    // 國家名淡出
    $('.as .countries .country').eq(0).children().first().fadeOut(200)
})

// 新加坡:從郵票選項～區域
$('.as .countries .country').eq(2).mouseenter(function(){
    // 個別deco動畫
    // $(this).parent().next().children().eq(2).hide()
    // 區域填滿綠色
    $('.rs_path').css('fill', 'var(--blue)')
    // 國家名淡入
    $(this).eq(2).children().first().fadeIn(200)
}).mouseleave(function(){
    // 區域半透明
    $('.rs_path').css('fill', '#b293627e')
    // 國家名淡出
    $(this).eq(0).children().first().fadeOut(200)
})
// ------------------------------------------

// ------------------------------------------
// 大洋洲:從區域～郵票選項
$('.au_path').mouseenter(function(){
    // 個別deco動畫
    // $(this).parent().next().children().eq(0).hide()
    // 區域填滿綠色
    $(this).css('fill', 'var(--blue)')
    // 底下郵票選項會動
    $('.au .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
    // 國家名淡入
    $('.au .countries .country').eq(0).children().first().fadeIn(200)
}).mouseleave(function(){
    // 個別deco動畫
    // $(this).parent().next().children().eq(0).hide()
    // 區域半透明
    $(this).css('fill', '#b293627e')
    // 底下郵票選項不動
    $('.au .countries .country').eq(0).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
    // 國家名淡出
    $('.au .countries .country').eq(0).children().first().fadeOut(200)
})

// 大洋洲:從郵票選項～區域
$('.au .countries .country').eq(0).mouseenter(function(){
    // 個別deco動畫
    // $(this).parent().next().children().eq(0).hide()
    // 區域填滿綠色
    $('.au_path').css('fill', 'var(--blue)')
    // 國家名淡入
    $(this).eq(0).children().first().fadeIn(200)
}).mouseleave(function(){
    // 個別deco動畫
    // $(this).parent().next().children().eq(0).hide()
    // 區域半透明
    $('.au_path').css('fill', '#b293627e')
    // 國家名淡出
    $(this).eq(0).children().first().fadeOut(200)
})
// ------------------------------------------
// 紐西蘭:從區域～郵票選項
$('.nz_path').mouseenter(function(){
    // 區域填滿綠色
    $(this).css('fill', 'var(--blue)')
    // 個別deco動畫(+1)
    // $(this).parent().next().children().eq(1).hide()
    // 底下郵票選項會動(+1)
    $('.au .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
    // 國家名淡入(+1)
    $('.au .countries .country').eq(1).children().first().fadeIn(200)
}).mouseleave(function(){
    // 區域半透明
    $(this).css('fill', '#b293627e')
    // 個別deco動畫(+1)
    // $(this).parent().next().children().eq(1).hide()
    // 底下郵票選項不動(+1)
    $('.au .countries .country').eq(1).toggleClass('animate__animated animate__pulse').toggleClass('infinite')
    // 國家名淡出(+1)
    $('.au .countries .country').eq(1).children().first().fadeOut(200)
})

// 紐西蘭:從郵票選項～區域
$('.au .countries .country').eq(1).mouseenter(function(){
    // 國家名淡入
    $(this).eq(0).children().first().fadeIn(200)
    // 個別deco動畫(+1)
    // $(this).parent().next().children().eq(1).hide()
    // 區域填滿綠色
    $('.nz_path').css('fill', 'var(--blue)')
}).mouseleave(function(){
    // 個別deco動畫
    // $(this).parent().next().children().eq(1).hide()
      // 區域半透明  
    $('.nz_path').css('fill', '#b293627e')
    // 國家名淡出    
    $(this).eq(0).children().first().fadeOut(200)
})
// ------------------------------------------

// $('path').mouseenter.css('fill', 'var(--blue)').mouseleave.css('fill', '#b293627e')