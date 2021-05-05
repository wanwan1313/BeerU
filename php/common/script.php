<!-- 各種CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


<script>
    // 更新購物車小字
    function showCartCount(cart) {
        let total = 0
        for (let i in cart) {
            total++
        }

        if (total == 0) {
            $('.cart-pnum').addClass('d-none')
        } else {
            $('.cart-pnum').removeClass('d-none')
            $('.cart-pnum').addClass('animate__animated animate__heartBeat')
            $('.cart-pnum').text(total)

            setInterval(() => {
                $('.cart-pnum').removeClass('animate__animated animate__heartBeat ')
            }, 2500);
        }

    }

    $.get('cart-api.php', function(data) {
        showCartCount(data.cart)
    }, 'json')
</script>