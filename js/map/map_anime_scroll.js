// $('.animatable').hide()
if ($(window).width() < 768) {
jQuery(function ($) {
  // 設置執行Animations=function (){}
  let doAnimations = function () {
      // 設offset=捲軸捲動+螢幕高度
      let offset = $(window).scrollTop() + $(window).height(),
// 設置預設動作的class=$('.animatable')(預設為hidden，paused)
          $animatables = $('.animatable');
      // 條件1:若$('.animatable')的數量為0
      if ($animatables.length == 0) {
        // 結果1:解除綁定scroll,Animations
          $(window).off('scroll', doAnimations);
      }
      // Check all animatables and animate them if necessary
      $animatables.each(function (i) {
          let $animatable = $(this);
          if (($animatable.offset().top + $animatable.height() - 500) < offset) {
              $animatable.removeClass('animatable').addClass('animated');
          }
      });
  };
  // Hook doAnimations on scroll, and trigger a scroll
  $(window).on('scroll', doAnimations);
  $(window).trigger('scroll');
});
}
else{
  jQuery(function ($) {
    // Function which adds the 'animated' class to any '.animatable' in view
    let doAnimations = function () {
        // Calc current offset and get all animatables
        let offset = $(window).scrollTop() + $(window).height(),
            $animatables = $('.animatable');
        // Unbind scroll handler if we have no animatables
        if ($animatables.length == 0) {
            $(window).off('scroll', doAnimations);
        }
        // Check all animatables and animate them if necessary
        $animatables.each(function (i) {
            let $animatable = $(this);
            if (($animatable.offset().top + $animatable.height() - 100) < offset) {
                $animatable.removeClass('animatable').addClass('animated');
            }
        });
    };
    // Hook doAnimations on scroll, and trigger a scroll
    $(window).on('scroll', doAnimations);
    $(window).trigger('scroll');
  }); 
}