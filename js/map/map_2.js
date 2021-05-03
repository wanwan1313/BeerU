$('.us, .eu, .as, .au').hide()
$('.carousel').carousel()
// 桌機版
// 點選飛到:美洲
$('.world>svg>a:nth-of-type(1)>path, .title_us').click(function () {
    console.log("us");
    $('.pipi_plane_big img').toggleClass('animate__animated animate__pulse')
        .removeClass('infinite')
        .toggleClass('pipi_plane_to_us')
    $('.world').delay(1000).fadeOut(500)
    $('.world-eachs').delay(1000).fadeIn(500)
    $('.us').show()
    setTimeout(function () {
        $('.balloon').show();  
    }, 3000);
    $('.pipi_plane').toggleClass('animate__animated animate__pulse').toggleClass('infinite');
    // 國旗飛下來
    setTimeout(function () {
        $('.flag').show()
        .toggleClass('animate__animated animate__bounceInDown');
    }, 2000);
})

// 點選飛到:歐洲
$('.world>svg>a:nth-of-type(2)>path, .title_eu').click(function () {
    $('.pipi_plane_big img').toggleClass('animate__animated animate__pulse')
        .removeClass('infinite')
        .toggleClass('pipi_plane_to_eu')
    $('.world').delay(1000).fadeOut(500)
    $('.world-eachs').delay(1000).fadeIn(500)
    $('.us, .as, .au').hide()
    $('.eu').show()
    setTimeout(function () {
        $('.balloon').show();  
    }, 3000);
    $('.pipi_plane').toggleClass('animate__animated animate__pulse').toggleClass('infinite');
    // 國旗飛下來
    setTimeout(function () {
        $('.flag').show()
        .toggleClass('animate__animated animate__bounceInDown');
    }, 2000);
    $('.eu .arrow-left, .eu .arrow-right').toggleClass('animate__animated animate__pulse').toggleClass('infinite')
})
// 點選飛到:亞洲
$('.world>svg>a:nth-of-type(3)>path, .title_as').click(function () {
    $('.pipi_plane_big img').toggleClass('animate__animated animate__pulse')
        .removeClass('infinite')
        .toggleClass('pipi_plane_to_as')
    $('.world').delay(1000).fadeOut(500)
    $('.world-eachs').delay(1000).fadeIn(500)
})
// 點選飛到:澳洲
$('.world>svg>a:nth-of-type(4)>path, .title_au').click(function () {
    $('.pipi_plane_big img').toggleClass('animate__animated animate__pulse')
        .removeClass('infinite')
        .toggleClass('pipi_plane_to_au')
    $('.world').delay(1000).fadeOut(500)
    $('.world-eachs').delay(1000).fadeIn(500)

})



// -------------------------
// 輪播牆
let slick = 0

// 左箭頭
$('.arrow-right').click(function(){
  slick += 1
  if(slick > 7){
    slick = 7 ;
  } 
  $('.manycountry').css('left',slick*-140+'px').css('transition','1s');
})

// 右箭頭
$('.arrow-left').click(function(){
  slick -= 1
  if(slick < 0){
    slick = 0 ;
  }
  $('.manycountry').css('left',slick*-140+'px').css('transition','1s');
})





// --------------------------------------------------------------------
// $('.parts>.part:nth-of-type(1)').click(function () {
//     setTimeout(function () {
//         $('.map .world').toggle('slow', 0);
//         $('.parts').toggle('slow', 0)
//     }, 1000);
//     $('.world_us').delay(500).fadeIn('ease-in');
//     $('.map_title').delay(1000).fadeIn('ease-in');
//     setTimeout(function () {
//         $('.countries').delay(5000).fadeIn('ease-in');
//         $('.countries').css('display', 'flex').css('transition', '1s');
//     }, 1500);
//     $('.pipi_plane').delay(1500).fadeIn('ease-in');
//     $('.pipi_plane').addClass('animate__animated animate__pulse').addClass('infinite');
//     $('.balloon').delay(2000).show();
// })
// $('.parts>.part:nth-of-type(2)').click(function () {
//     $('.map .world').css('opacity', '0').css('transition', '.5s');
//     $('.parts').css('opacity', '0').css('transition', '.5s');
//     setTimeout(function () {
//         $('.map .world').toggle();
//         $('.parts').toggle()
//     }, 1000);
//     $('.world_eu').delay(500).fadeIn('ease-in');
//     $('.map_title').delay(1000).fadeIn('ease-in');
//     setTimeout(function () {
//         $('.countries').delay(5000).fadeIn('ease-in');
//         $('.countries').css('display', 'flex').css('transition', '1s');
//     }, 1500);
//     $('.pipi_plane').delay(1500).fadeIn('ease-in');
//     $('.pipi_plane').addClass('animate__animated animate__pulse').addClass('infinite');
//     $('.balloon').delay(2000).show();
// })
// $('.parts>.part:nth-of-type(3)').click(function () {
//     $('.map .world').css('opacity', '0').css('transition', '.5s');
//     $('.parts').css('opacity', '0').css('transition', '.5s');
//     setTimeout(function () {
//         $('.map .world').toggle();
//         $('.parts').toggle()
//     }, 1000);
//     $('.world_as').delay(500).fadeIn('ease-in');
//     $('.map_title').delay(1000).fadeIn('ease-in');
//     setTimeout(function () {
//         $('.countries').delay(5000).fadeIn('ease-in');
//         $('.countries').css('display', 'flex').css('transition', '1s');
//     }, 1500);
//     $('.pipi_plane').delay(1500).fadeIn('ease-in');
//     $('.pipi_plane').addClass('animate__animated animate__pulse').addClass('infinite');
//     $('.balloon').delay(2000).show();
// })
// $('.parts>.part:nth-of-type(4)').click(function () {
//     $('.map .world').css('opacity', '0').css('transition', '.5s');
//     $('.parts').css('opacity', '0').css('transition', '.5s');
//     setTimeout(function () {
//         $('.map .world').toggle();
//         $('.parts').toggle()
//     }, 1000);
//     $('.world_au').delay(500).fadeIn('ease-in');
//     $('.map_title').delay(1000).fadeIn('ease-in');
//     setTimeout(function () {
//         $('.countries').delay(5000).fadeIn('ease-in');
//         $('.countries').css('display', 'flex').css('transition', '1s');
//     }, 1500);
//     $('.pipi_plane').delay(1500).fadeIn('ease-in');
//     $('.pipi_plane').addClass('animate__animated animate__pulse').addClass('infinite');
//     $('.balloon').delay(2000).show();
// })

// 返回上頁飛機-----------------------------------
$('.pipi_plane').click(function () {
    // $(this).removeClass('animate__animated animate__pulse')
    //     $('.world-eachs').fadeOut();
    //     $('.world').fadeIn()
    })


// 氣球天使到處飄移--------------------------------
function Fireworm() {
    this.element = $('.balloon');
}

// 設定初始位置：x軸和y軸
Fireworm.prototype.show = function () {
    this.element.css({
        // "top": this.pointY + "px",
        // "left": this.pointX + "px"

        "top": 300 + "px",
        "left": 200 + "px"
    })
    $('body').append(this.element);
    return this;
};

// 設置x軸randomInt(最大值400)+固定300
// 設置y軸randomInt(最大值200)+固定200
Fireworm.prototype.newPoint = function () {
    this.pointX = randomInt(400) + 300;
    this.pointY = randomInt(200) + 200;
    return this;
};

// 設定速度.speedRun = (randomInt(最大10) + 至少固定1) * 1000;(加起來最大11秒)
Fireworm.prototype.speed = function () {
    this.speedRun = (randomInt(10) + 1) * 1000;
    return this;
};

Fireworm.prototype.fly = function () {
    let self = this;
    this.element.animate({
        "top": this.pointY,
        "left": this.pointX
    }, this.speedRun, function () {
        self.speed().newPoint().fly();
    })
};

// 亂數產生器（固定）
function randomInt(max) {
    return Math.floor(Math.random() * max);
};

//動畫幀數 
$(function () {
    // total隻數
    let totle = 30;
    let fireworm = [];
    for (let i = 0; i < totle; i++) {
        fireworm[i] = new Fireworm();
        fireworm[i].newPoint().show().speed().newPoint().fly()
    }
})
// -------------------------------------------------------


