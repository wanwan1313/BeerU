// 關注功能
let btn_attention = $('.btn_attention_be')
let btn_attention_active = $('.btn_attention_active')

// ??? 要如何呼叫php的a_arr
// a_arr = json_encode($a_arr)

// ???判斷是否已加入
$('.map .country, .flag img').click(function () {
    let data_cate=$(this).attr('data-cate')
    console.log('data_cate',data_cate)
    // console.log($a_arr)
    // if (in_array($a['tag_sid'], $a_arr)){
    //     console.log('hi')
    // }
    // if (a_arr.includes(data_cate)){
    //     console.log('hi')
    // }

})
// 加入
btn_attention.click(function () {
    let t_sid = $(this).parent().find('a').attr('data-cate')
    console.log(t_sid)

    $.get('beer_map-attention-api.php', { 
        'action': 'add', 
        'tag_sid': t_sid 
    }, 
    function (data) {
        console.log(data)
        $('.pop-up-1').fadeIn(150)
        $('.pop-up-1 .icon').html('<i class="fas fa-check"></i>').css('background-color', 'var(--gold)')
        $('.pop-up-1 .pop-up-text').text(data.msg)
    }, 'json')
    $(this).addClass('d-none')
    $(this).prev().removeClass('d-none')
})

// 取消
btn_attention_active.click(function () {
    let t_sid = $(this).parent().find('a').attr('data-cate')
    console.log(t_sid)

    $.get('beer_map-attention-api.php', { 
        'action': 'delete', 
        'tag_sid': t_sid 
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

    // 彈跳視窗
    $('button.ok').on('click', function() {
        $('.general-pop-up').fadeOut(150)
    })

