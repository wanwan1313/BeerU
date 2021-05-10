let myScore = 0;
// 在手機時改為彈出視窗
$(document).ready(function () {
    $('.option-1-title-ch').addClass('show');

    $(window).on("resize", function (e) {
        checkScreenSize();
    });

    checkScreenSize();

    function checkScreenSize() {
        var newWindowWidth = $(window).width();
        if (newWindowWidth < 481) {
            $(".modal-trigger").click(function (e) {
                e.preventDefault();
                dataModal = $(this).attr("data-modal");
                $("#" + dataModal).css({ "display": "block" });

            });

            $(".close-modal, .modal-sandbox").click(function () {
                $(".modal").css({ "display": "none" });

            });

            $(".option-wrap").click(function () {
                // 第一題

                $(this).siblings().find(".option-1-txt").removeClass('show').prev().addClass('show');

                $(this).siblings().find(".option-1-title-ch").removeClass('active').end().end().find(".option-1-title-ch").toggleClass('active');

                // 第二題

                $(".option-2-title-wrap").removeClass('show');

                $(this).siblings().find(".option-img").removeClass('active');

                $(this).find(".option-img").toggleClass('active').siblings().removeClass('active');

                // 第三題

                $(this).find(".option-3-txt").removeClass('show');

                $(this).siblings().find(".option-3-title").removeClass('active');

                $(this).find(".option-3-title").toggleClass('active').siblings().removeClass('active');

                // 第四題

                $(this).find(".option-4-txt").removeClass('show');

                $(this).siblings().find(".option-4-title").removeClass('active');

                $(this).find(".option-4-title").toggleClass('active').siblings().removeClass('active');

                // 第五題

                $(this).siblings().find(".option-5-title").removeClass('show').siblings().removeClass('show');

                $(this).find(".option-5-title").toggleClass('show').siblings().toggleClass('show');

            });

        }
    }
});



$(".option-wrap").click(function () {

    myScore = $(this).data("score");
    console.log($(this).data("score"));

    // 心理測驗點擊桌機板
    var newWindowWidth = $(window).width();
    if (newWindowWidth > 481) {

        // 第一題

        $(this).siblings().find(".option-1-txt").removeClass('show').prev().addClass('show');

        $(this).find(".option-1-title-ch").toggleClass('show').siblings().toggleClass('show');

        // 第二題

        $(this).siblings().find(".option-2-title-wrap").removeClass('show');

        $(this).find(".option-2-title-wrap").toggleClass('show');

        // 第三題

        $(this).siblings().find(".option-3-txt").removeClass('show');

        $(this).find(".option-3-txt").toggleClass('show');

        // 第四題

        $(this).siblings().find(".option-4-title span").removeClass('show').parent().next().next().removeClass('show');

        $(this).find(".option-4-title span").toggleClass('show').parent().next().next().toggleClass('show');

        // 第五題

        $(this).siblings().find(".option-5-title").removeClass('show').siblings().removeClass('show');

        $(this).find(".option-5-title").toggleClass('show').siblings().toggleClass('show');
    }

});

let totalScore = 0;
$('.next-btn-wrap').click(function () {
    totalScore += myScore;
    console.log(totalScore);

})


$('.result-btn').click(function (e) {
    e.preventDefault();
    console.log('.result-btn', totalScore > 0 <= 5);
    if (totalScore > 0 && totalScore <= 5) {
        window.location.href = "quiz-result-1.php";
    } else if (totalScore > 5 && totalScore <= 10) {
        window.location.href = "quiz-result-2.php";
    } else if (totalScore > 10 && totalScore <= 15) {
        window.location.href = "quiz-result-3.php";
    } else {
        window.location.href = "quiz-result-4.php";
    }

})