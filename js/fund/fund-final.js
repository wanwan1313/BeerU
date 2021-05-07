//增加贊助金額 

$('.minus').click(function () {
    var $input = $(this).parent().find('input');
    var $amount = $(this).parent().find('.price');
    var minPrice = $amount.data('price');
    console.log('minPrice', minPrice);
    console.log('amount', $amount.val().replace('$', ''))

    if (parseInt($amount.val().replace('$', '')) > minPrice) {
        $amount.val('$' + (parseInt($amount.val().replace('$', '')) - 100))
    }
});

$('.add').click(function () {
    var $input = $(this).parent().find('input');
    var $amount = $(this).parent().find('.price');
    var minPrice = $amount.data('price');
    console.log('minPrice', minPrice);
    console.log('amount', $amount.val().replace('$', ''))
    $amount.val('$' + (parseInt($amount.val().replace('$', '')) + 100))
    // console.log('amount', $amount[0].innerHTML.replace('NT$', ''))
    // $amount.val('NT$' + (parseInt($input.val()) + 1 * 100) * $amount[0].innerHTML.replace('NT$', '') / parseInt($input.val()))
    // $input.val(parseInt($input.val()) + 1);
});

