
$(document).ready(function(){


    // 一開始進門畫面//
    let scrollNow = $(window).scrollTop();

    if (scrollNow == 0){

        $('.header').addClass('nav-headerOut');
        $('.beeru-nav-bar').addClass('OUT');
        $('#LandingPage').addClass('IN');
        $('#content-wrap').addClass('OUT');
        $('footer').addClass('OUT')

        $('#YES').click(function(){
            
             $('#pipi01').addClass('pipi-flyIn');
             $('.doorSign_warp').css('opacity','0');
             $('.button_warp').css('opacity','0');
             setTimeout(() => {
                  $('.door_outside').addClass('DOOR-OPEN');

             },2000);


             setTimeout(() => {
                $('.door_outside').css('opacity','0');
             },3500);


             setTimeout(() =>{

                $(".LandingPage_warp").addClass('Door-ZoomOut')
                $(".colum").css('opacity','0')
               
                
            
             },4000);


             setTimeout(()=>{
                $('#content-wrap').removeClass('OUT');
                $('.header').removeClass('nav-headerOut');
                $('.beeru-nav-bar').removeClass('OUT');
                $('#LandingPage').removeClass('IN'); 
                $('footer').removeClass('OUT')
                $('#LandingPage').fadeOut();

                $('#content-wrap').fadeIn();
                $('#beeru-nav-bar').fadeIn();

               
            },5200)  

            setTimeout(()=>{

                $('.pip_pick').addClass('pipi-flyout')
        
        
            },7500)
            

        });

     

    }
    else{
        $('#LandingPage').addClass('OUT');
        $('#content-wrap').css('display','block').css('opacity','1');
        setTimeout(()=>{

            $('.pip_pick').addClass('pipi-flyout')
    
    
        },3000)
    }


 
 
  // Beer-type輪播牆

    let page = 0;

    $('.Beer-type-content').parents().find('.drop').eq(page).css('border','solid 1px white').siblings().css('border','transparent');

    $('.Beer-type-content').parents().find('.colorDot').eq(page).css('border','solid 3px white').siblings().css('border','transparent');


    $('.drop').on({
        click:function(){

                page = $(this).index(); 
                console.log('dots page',$(this).index());

                $(this).css('border','solid 1px white').siblings().css('border','transparent');

                $('.Beer-type-content-warp').css('left',$(this).index()*-720+'px').css('transition','1s');

        },
        mouseenter:function(){
            page = $(this).index(); 
                // console.log('dots page',$(this).index());
        
                $(this).css('border','solid 1px white').siblings().css('border','transparent');
            
                $('.Beer-type-content-warp').css('left',$(this).index()*-720+'px').css('transition','1s');


        }
     });

    $('.colorDot').click(function(){
        page = $(this).index(); 

        // console.log('little dots',$(this).index());

        $(this).css('border','solid 3px white').siblings().css('border','transparent');

        $('.Beer-type-content-warp').css('left',$(this).index()*-370+'px').css('transition','1s');

    });




    setInterval(()=>{
        page += 1;

        if (page > 8){
            page = 0;
        };


        $('.Beer-type-content').parents().find('.drop').eq(page).css('border','solid 1px white').siblings().css('border','transparent');


        $('.Beer-type-content').parents().find('.colorDot').eq(page).css('border','solid 3px white').siblings().css('border','transparent');


        if ($(window).width() >= 992){
        $('.Beer-type-content-warp').css('left',page*-720+'px').css('transition','1s');

        }

        if ($(window).width() < 992){

            $('.Beer-type-content-warp').css('left',page*-370+'px').css('transition','1s');

        }

    },8000)


    

    $(window).scroll(function(){


        let scrollNow = $(window).scrollTop();
        console.log('scrollTop',scrollNow );



    });
    
   




});







