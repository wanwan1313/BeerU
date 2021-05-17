//  ------ 募資產品照片點選 ------//
// 取得或設定 HTML tag attribute屬性 的值
// 取值 .attr( attributeName )
// 設值 .attr( attributeName, value )

$('.img-row img').click(function () {
    let imgSrc = $(this).attr('src');
    $('.img-demo img').attr('src', imgSrc);
})


//  ------ 頁簽切換 ------//
// Show the first tab by default
$('.tabs-stage div').hide();
$('.tabs-stage div:first').show();
$('.tabs-nav li:first').addClass('tab-active');

// Change tab class and display content
$('.tabs-nav a').on('click', function (event) {
    event.preventDefault();
    $('.tabs-nav li').removeClass('tab-active');
    $(this).parent().addClass('tab-active');
    $('.tabs-stage div').hide();
    $($(this).attr('href')).show();
});


//  ------ 倒數計畫計時器 ------//
// Set the date we're counting down to
var countDownDate = new Date("May 30, 2021 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function () {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("countdown").innerHTML = days + "天 " + hours + "小時 "
        + minutes + "分 " + seconds + "秒 ";

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
}, 1000);


// -----------------------------------------------------------------
    // 關注功能
    // 加入

    btn_attention.on('click','.btn_attention_be',function(){
        let fsid = 1

        // console.log(fsid)

        $.get('fund-attention-api.php',{'action':'add','fsid':fsid},function(data){
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
        let fsid = $(this).parent().prev('.product-tag').find('p').attr('data-cate')
        console.log(fsid)

        $.get('fund-attention-api.php',{'action':'delete','fsid':fsid},function(data){
            // console.log(data)
            $('.pop-up-1').fadeIn(150)
            $('.pop-up-1 .icon').html('<i class="fas fa-check"></i>').css('background-color','var(--gold)')
            $('.pop-up-1 .pop-up-text').text(data.msg)
        }, 'json')
        $(this).addClass('d-none')
        $(this).prev().removeClass('d-none')
    })