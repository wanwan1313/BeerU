
// 加入購物車功能


// 手寫數量
$('.buy-number').on('input', function () {
    let qty = $(this).val()
    let price = $(this).closest('.beer-product').attr('data-price')
    let changePrice = $(this).closest('.p-buy').find('.price')

    if (/^(\+|-)?\d+$/.test(qty) && qty > 0 && qty <= 30 || qty == "") {
        changePrice.text('$' + qty * price)
    } else if (qty > 30) {
        $('.pop-up-1').fadeIn(150)
        $('.pop-up-1 .icon').html('<i class="fas fa-exclamation"></i>').css('background-color', 'var(--red)')
        $('.pop-up-1 .pop-up-text').text('購買數量超過庫存，庫存為30')
        $(this).val('30')
        changePrice.text('$' + 30 * price)
    } else {
        $('.pop-up-1').fadeIn(150)
        $('.pop-up-1 .icon').html('<i class="fas fa-times"></i>').css('background-color', 'var(--red)')
        $('.pop-up-1 .pop-up-text').text('請輸入正確數量，數量不得為0')
        $(this).val('1')
        changePrice.text('$' + price)
    }
})

// 按+數量
$('.plus').on('click', function () {
    let qty = $(this).prev().val()
    let price = $(this).closest('.beer-product').attr('data-price')
    let changePrice = $(this).closest('.p-buy').find('.price')
    if (/^(\+|-)?\d+$/.test(qty) && qty > 0 && qty < 30 || qty == "") {
        qty = qty * 1 + 1
        $(this).prev().val(qty)
        changePrice.text('$' + qty * price)
    } else if (qty >= 30) {
        $('.pop-up-1').fadeIn(150)
        $('.pop-up-1 .icon').html('<i class="fas fa-exclamation"></i>').css('background-color', 'var(--red)')
        $('.pop-up-1 .pop-up-text').text('購買數量超過庫存，庫存為30')
        $(this).prev().val('30')
        changePrice.text('$' + 30 * price)
    }
})

// 按-數量
$('.minus').on('click', function () {
    let qty = $(this).next().val()
    let price = $(this).closest('.beer-product').attr('data-price')
    let changePrice = $(this).closest('.p-buy').find('.price')
    if (/^(\+|-)?\d+$/.test(qty) && qty > 1 && qty <= 30 || qty == "") {
        qty = qty * 1 - 1
        $(this).next().val(qty)
        changePrice.text('$' + qty * price)
    } else if (qty <= 1) {
        $('.pop-up-1').fadeIn(150)
        $('.pop-up-1 .icon').html('<i class="fas fa-times"></i>').css('background-color', 'var(--red)')
        $('.pop-up-1 .pop-up-text').text('購買數量不得為0')
        $(this).next().val('1')
        changePrice.text('$' + price)
    }
})

// -------------------------------------------------------
// 加入購物車
$('.add-cart').on('click', function () {
    let qty = $(this).closest('.p-buy').find('.buy-number').val()
    let psid = $(this).closest('.beer-product').attr('data-sid')

    $.get('cart-api.php', {
        'action': 'add',
        'psid': psid,
        'qty': qty
    }, function (data) {
        // console.log(data)
        // $('.pop-up-1').zIndex(1000);
        $('.pop-up-1').fadeIn(150)
        $('.pop-up-1 .icon').html('<i class="fas fa-check"></i>').css('background-color', 'var(--gold)')
        $('.pop-up-1 .pop-up-text').text(data.msg)
    }, 'json')

})

// -------------------------------------------------------------
// 彈跳視窗
$('button.ok').on('click', function () {
    $('.general-pop-up').fadeOut(150)
})
