// 關注功能

let btn_attention = $('.btn_attention_be')
let btn_attention_active = $('.btn_attention_active')

// 加入
btn_attention.click(function () {
    let e_sid = $(this).parent().find('a').attr('data-cate')
    console.log(e_sid)

    $.get('event-attention-api.php', { 
        'action': 'add', 
        'event_sid': e_sid 
    }, 
    function (data) {
        console.log(data)
        $('.pop-up-1').fadeIn(150)
        $('.pop-up-1 .icon').html('<i class="fas fa-check"></i>').css('background-color', 'var(--gold)')
        $('.pop-up-1 .pop-up-text').text(data.msg)
    }, 'json')
    $(this).addClass('d-none')
    $(this).next().removeClass('d-none')
})

// 取消
btn_attention_active.click(function () {
    let e_sid = $(this).parent().find('a').attr('data-cate')
    console.log(e_sid)

    $.get('event-attention-api.php', { 
        'action': 'delete', 
        'event_sid': e_sid 
    }, 
        function (data) {
        // console.log(data)
        $('.pop-up-1').fadeIn(150)
        $('.pop-up-1 .icon').html('<i class="fas fa-check"></i>').css('background-color', 'var(--gold)')
        $('.pop-up-1 .pop-up-text').text(data.msg)
    }, 'json')
    $(this).addClass('d-none')
    $(this).prev().removeClass('d-none')
})

    // 彈跳視窗
    $('button.ok').on('click', function() {
        $('.general-pop-up').fadeOut(150)
    })

