// 預設:關閉

// pipi氣球
$('.balloon').hide();
// deco
$('.flag').hide();
// 彈跳視窗
$('.bg-black').hide();
// -------------------
// 預設：持續動畫

// 各大州中英文名
$('.title_us, .title_eu, .title_as, .title_au').toggleClass('animate__animated animate__pulse').toggleClass('infinite').toggleClass('shadow_gold')


// -------------------
// 手機版

// 高度視覺調整
// 若手機高度小於815會自動調整載入頁面時的位置，到地圖中間
if ($(window).height() < 815) {
    $("html, body").animate({ scrollTop: 100 }, "slow")
}
