// 關注功能
    // 加入
let btn_attention = $('.btn_attention')

    btn_attention.on('click','.btn_attention_be',function(){
        // let e_sid = $(this).parent().prev('.product-tag').find('p').attr('data-cate')
        // console.log(e_sid)

        $.get('member-attention-api.php',{'action':'add','e_sid':event_sid},function(data){
            // console.log(data)
            $('.pop-up-1').fadeIn(150)
            $('.pop-up-1 .icon').html('<i class="fas fa-check"></i>').css('background-color','var(--gold)')
            $('.pop-up-1 .pop-up-text').text(data.msg)
        }, 'json')
        $(this).addClass('d-none')
        $(this).next().removeClass('d-none')
    })
    // 取消
    btn_attention.on('click','.btn_attention_active',function(){
        // let e_sid = $(this).parent().prev('.product-tag').find('p').attr('data-cate')
        // console.log(e_sid)

        $.get('member-attention-api.php',{'action':'delete','e_sid':event_sid},function(data){
            // console.log(data)
            $('.pop-up-1').fadeIn(150)
            $('.pop-up-1 .icon').html('<i class="fas fa-check"></i>').css('background-color','var(--gold)')
            $('.pop-up-1 .pop-up-text').text(data.msg)
        }, 'json')
        $(this).addClass('d-none')
        $(this).prev().removeClass('d-none')
    })