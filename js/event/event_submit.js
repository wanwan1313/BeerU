$('.join .fa-check').css('display','none')

// 套入「送出」function
function event_submit(){
// !point!要先設給「通過」的條件
let isPass = true;
//  -------------------------------------------- 
// 手機驗證：
// 1.設定套用的對象，設參數
const $p0_mobile=$('#p0_mobile')
// 2.設定正規表達式
const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
// 3.設定「錯誤狀態」顯示方式
  if(!mobile_re.test($p0_mobile.val())){
//  !point!要設定結果為「錯誤」
isPass=false
$p0_mobile.css('border','2px solid var(--pink)');
$p0_mobile.parent().next().css('color','var(--pink)');
$p0_mobile.siblings().children().css('display','none');
  }
  else{
    $p0_mobile.css('border','2px solid var(--gold)');
    $p0_mobile.parent().next().css('color','white');
    $p0_mobile.siblings().children().css('color','var(--gold)').css('display','inline-block');
  }
//  -------------------------------------------- 
// 姓名驗證:
// 1.設定套用的對象，設參數
const $p0_name=$('#p0_name');
// 2.設定正規表達式
const name_re = /^[\u4E00-\u9FA5]{2,15}$/;
// 3.設定「錯誤狀態」顯示方式
    if(!name_re.test($p0_name.val())){
    isPass=false
    $p0_name.css('border','2px solid var(--pink)');
    $p0_name.parent().next().next().css('color','var(--pink)');
    $p0_name.siblings().children().css('display','none');
      }
      else{
        $p0_name.css('border','2px solid var(--gold)');
        $p0_name.parent().next().css('color','white');
        $p0_name.siblings().children().css('color','var(--gold)').css('display','inline-block');}
    
//  -------------------------------------------- 
//驗證碼驗證:
// 1.設定套用的對象，設參數
const $input_check_val = $('#js5-form3-input').val()
const $input_check = $('#js5-form3-input')
// 2.設定正規表達式
// 條件為等於，不用設
// 3.設定「錯誤狀態」顯示方式
console.log($input_check_val)
console.log(authCode)
if($input_check_val != authCode){
    isPass=false
    $input_check.css('border','2px solid var(--pink)');
    $input_check.prev().children().css('display','none');
}
else{
    $input_check.css('border','2px solid var(--gold)');
    $input_check.prev().children().css('color','var(--gold)').css('display','inline-block');
}
//  -------------------------------------------- 

// 如果上述條件都達到
   if(isPass){
    $.post(
        'event-join-api.php',
        $(document.event_join).serialize(),
        function(data){
            console.log(data)
            if(data.success){
              $('.pop-up-1').fadeIn(150)
              $('.pop-up-1 .icon').html('<i class="fas fa-check"></i>').css('background-color','var(--gold)')
              $('.pop-up-1 .pop-up-text').text('已報名成功，可前往會員中心查詢。')

              $('button.ok').on('click', function () {
                $('.general-pop-up').fadeOut(150)
                window.location.href = 'member.php?memberEvent' ;
            })

            } else{
              $('.pop-up-1').fadeIn(150)
              $('.pop-up-1 .icon').html('<i class="fas fa-check"></i>').css('background-color','var(--gold)')
              $('.pop-up-1 .pop-up-text').text(data.error)

              $('button.ok').on('click', function () {
                $('.general-pop-up').fadeOut(150)
            })
            }
        },
        'json'
    )
}

}
