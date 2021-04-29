// 手機版-4大洲-滑鼠移到時有動畫，州移位

// 桌機版要寫2套
// 桌機版時要回復原位:width
if ($(window).width() < 991){
    $('.part').eq(0).mouseenter(function () {
        $(this).addClass('animate__animated animate__fadeOutUp').addClass('infinite');
        $('.map .world').css('transform','translateX(30%)')
    }).mouseleave(function () {
        {
            $(this).removeClass('animate__animated animate__fadeOutUp');
        }
    })
    
    $('.part').eq(1).mouseenter(function () {
        $(this).addClass('animate__animated animate__fadeOutUp').addClass('infinite');
        $('.map .world').css('transform','translateX(0%)')
    }).mouseleave(function () {
        {
            $(this).removeClass('animate__animated animate__fadeOutUp');
        }
    })
    $('.part').eq(2).mouseenter(function () {
        $(this).addClass('animate__animated animate__fadeOutUp').addClass('infinite');
        $('.map .world').css('transform','translateX(-25%)')
    }).mouseleave(function () {
        {
            $(this).removeClass('animate__animated animate__fadeOutUp');
        }
    })
    $('.part').eq(3).mouseenter(function () {
        $(this).addClass('animate__animated animate__fadeOutUp').addClass('infinite');
        $('.map .world').css('transform','translateX(-30%)')
    }).mouseleave(function () {
        {
            $(this).removeClass('animate__animated animate__fadeOutUp');
        }
    })
}
else{
    $('.map .world').css('transform','translateX(0%)')
}
// 桌機版時要回復原位:resize
$(window).resize(function(){
    if ($(window).width() < 991){
        $('.part').eq(0).mouseenter(function () {
            $(this).addClass('animate__animated animate__fadeOutUp').addClass('infinite');
            $('.map .world').css('transform','translateX(30%)')
        }).mouseleave(function () {
            {
                $(this).removeClass('animate__animated animate__fadeOutUp');
            }
        })
        
        $('.part').eq(1).mouseenter(function () {
            $(this).addClass('animate__animated animate__fadeOutUp').addClass('infinite');
            $('.map .world').css('transform','translateX(0%)')
        }).mouseleave(function () {
            {
                $(this).removeClass('animate__animated animate__fadeOutUp');
            }
        })
        $('.part').eq(2).mouseenter(function () {
            $(this).addClass('animate__animated animate__fadeOutUp').addClass('infinite');
            $('.map .world').css('transform','translateX(-25%)')
        }).mouseleave(function () {
            {
                $(this).removeClass('animate__animated animate__fadeOutUp');
            }
        })
        $('.part').eq(3).mouseenter(function () {
            $(this).addClass('animate__animated animate__fadeOutUp').addClass('infinite');
            $('.map .world').css('transform','translateX(-30%)')
        }).mouseleave(function () {
            {
                $(this).removeClass('animate__animated animate__fadeOutUp');
            }
        })
    }
    else{
        $('.map .world').css('transform','translateX(0%)')
    }
})




// .map  .world{
    /* us */
    /* transform: translateX(30%); */
    /* eu */
    /* transform: translateX(0%); */
    /* as */
    /* transform: translateX(-25%); */
    /* au */
    /* transform: translateX(-30%); */
    // }



// 卡片跑出
$('.country').click(function(){
    $('.popup').removeClass('display-none');
    $('.map-card').addClass('animate__animated animate__flip');
})


// popup滑鼠移過動畫，點選關閉視窗
$('.popup .card-close i').mouseenter(function () {
    {
        $(this).addClass('animate__animated animate__rubberBand').addClass('time-075s').addClass('infinite').click(function(){
            $('.popup').addClass('display-none')
        })
    }
}).mouseleave(function () {
    {
        $(this).removeClass('animate__animated animate__rubberBand');
    }
})

//郵票動畫
$('.stamp_country').addClass('animate__animated animate__fadeInBottomLeft')

// 郵戳動畫
$('.stamp').addClass('animate__animated animate__fadeInBottomLeft')

// 返回上頁飛機
$('.pipi_plane').addClass('animate__animated animate__heartbeat').addClass('infinite').click(function() {
    $('world-each').addClass('display-none')
})

// 氣球天使到處飄移
function Fireworm() {
  this.element = $('.balloon');
}

// 設定初始位置：x軸和y軸
Fireworm.prototype.show = function() {
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
Fireworm.prototype.newPoint = function() {
  this.pointX = randomInt(400) +300;
  this.pointY = randomInt(200) +200;
  return this;
};

// 設定速度.speedRun = (randomInt(最大10) + 至少固定1) * 1000;(加起來最大11秒)
Fireworm.prototype.speed = function() { 
  this.speedRun = (randomInt(10) + 1) * 1000;
  return this;
};
 
 
Fireworm.prototype.fly = function() {
  let self = this;
  this.element.animate({
    "top": this.pointY,
    "left": this.pointX
  }, this.speedRun, function() {
    self.speed().newPoint().fly();
  })
};
 
// 亂數產生器（固定）
function randomInt(max) {
  return Math.floor(Math.random() * max);
};
 
//動畫幀數 
$(function() {
    // total隻數
  let totle = 30;
  let fireworm = [];
  for (let i = 0; i < totle; i++) {
    fireworm[i] = new Fireworm();
    fireworm[i].newPoint().show().speed().newPoint().fly()
  }
})
// -------------------------------------------------------



