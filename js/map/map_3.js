// 卡片跑出-------------------------------------

const beerTPL = b => {
    return`
    <div class="beer">
        <a href="each-product.php?psid=${b.sid}">
           <div class="beer-img d-flex position-relative"><img src="../images/products/${b.pic}" alt="">
            <div class="beer-name position-absolute">${b.c_name}</div>
           </div>
        </a>
    </div>
    `
}

let beer_wrap = $('.beer-wrap')
let b_data=[]

function renderProducts() {
    beer_wrap.html('')
    if (b_data.beers && b_data.beers.forEach) {
        b_data.beers.forEach(el => {
            beer_wrap.append(beerTPL(el))
        })
    }
}


$('.map .country').click(function () {
    // console.log('this', $(this));
    // console.log('data-cate', $(this).attr('data-cate'));
    // let data_cate=$(this).attr('data-cate')
    // 動畫設置---------------------------
    // 1.卡片跑出
    $('.bg-black').show().addClass( 'opacity-1');
    // 2.卡片動畫
    // $('.map-card').hide()
    // $('.map-card').addClass('animate__animated animate__flip');
    // -------------------------------------------------
    // 使用javascript動態修改內容(不使用php)：搜尋country-name 的p<ru; 將內容改成郵票選項的名字(.map .country)的.country_name
    // $('.country-name p').text($(this).find('.country_name').text());

    // 1.設定countryName為找到的國家名稱('.country_name')並刪除多餘空格.trim()
    const countryName = $(this).find('.country_name').text().trim();

    // 2.用jquery引入php,$.post
    $.post(
        // 2.1'api放入位置',
        '/beeru/public/map-api.php',
        // 2.2{剛才設定的變數const},
        { countryName },

        // 執行function
        function (data) {
            // let {map_row, cups, beers} = data;
            // console.log(data)
            b_data = data
            // 改國家名
            $('.country-name p').text(data.map_row.country);
            // 改國家介紹
            $('.beer-intro p').text(data.map_row.intro);
            // console.log(map_row.stamp);
            // 改郵票圖片位址
            $('.stamp_country img').attr("src", data.map_row.stamp);
            // 改看更多位址
            $('.see_more a').attr("href", data.map_row.see_more);
            // 改背景圖（桌機）
            $('.bg_b img').attr("src", data.map_row.bg_b);
            // 改背景圖（手機）
            $('.bg_s img').attr("src", data.map_row.bg_s);
            // 改brand
            $('.beer-brand').html(data.map_row.brands);
            
            // // cup1
            // for(let i=1; i<=3; i++){
            //     $('.cup' + i).attr("href", cups[i-1].cup_1_link);
            //     $('.cup' + i + ' .cup-name').text(cups[i-1].cup_1_name);
            //     $('.cup' + i + ' img').attr("src", cups[i-1].cup_1_pic);
            // }

            // cup1
            $('.cup1').attr("href", data.map_row.cup_1_link);
            $('.cup1 .cup-name').text(data.map_row.cup_1_name);
            $('.cup1 img').attr("src", data.map_row.cup_1_pic);
            // cup2
            $('.cup2').attr("href", data.map_row.cup_2_link);
            $('.cup2 .cup-name').text(data.map_row.cup_2_name);
            $('.cup2 img').attr("src", data.map_row.cup_2_pic);
            // cup3
            $('.cup3').attr("href", data.map_row.cup_3_link);
            $('.cup3 .cup-name').text(data.map_row.cup_3_name);
            $('.cup3 img').attr("src", data.map_row.cup_3_pic);

            // 為了抓到關注清單的tag_sid設置，不會出現在畫面上
            $('a').attr("data-cate", data.map_row.tag_sid);
            
            renderProducts()
        },
        'json'
    )
})


// popup滑鼠移過動畫，點選關閉視窗-----------------
$('.popup .card-close i').mouseenter(function () {
    {
        $(this).addClass('animate__animated animate__rubberBand').addClass('time-075s').addClass('infinite').click(function () {
            $('.bg-black').fadeOut();
            
        })
    }
}).mouseleave(function () {
    {
        $(this).removeClass('animate__animated animate__rubberBand');
    }
})

// 解決：大小照片同時出現會有一條線，做2套
if ($(window).width() < 700) {
    $('.bg_b img').hide();
    $('.bg_s img').show();
}else{
    $('.bg_s img').hide();
    $('.bg_b img').show();
}

$(window).resize(function () {
    if ($(window).width() < 700) {
        $('.bg_b img').hide();
        $('.bg_s img').show();
    }
    else{
        $('.bg_s img').hide();
        $('.bg_b img').show();
    }

})



//郵票動畫---------------------------------------
$('.stamp_country').addClass('animate__animated animate__fadeInBottomLeft')

$('.bg_country').addClass('animate__animated animate__fadeIn').addClass('time-2s')





// 郵戳動畫--------------------------------------
$('.stamp').addClass('animate__animated animate__fadeInBottomLeft')
// 商品hover--------------------------------------
$('.map .cup').mouseenter(function () { { $(this).css('transform', 'scale(1.2)') } }).mouseleave(function () { { $(this).css('transform', 'scale(1)') } })

// $('.map .beer-wrap').mouseenter(function () { { $(this).css('transform', 'scale(1.2)') } }).mouseleave(function () { { $(this).css('transform', 'scale(1)') } })

// $('.map .know-more').mouseenter(function () {
//     {
//         $('.map .cup-name, .map .beer-name').css('opacity','1')}}).mouseleave(function () {{$('.map .cup-name, .map .beer-name').css('opacity','0')}}).
//                 $('.map .cup-name, .map .beer-name').css('opacity','1').mouseleave(function () {{$('.map .cup-name, .map .beer-name').css('opacity','0')}})
