
$(document).ready(function(){


    // 一開始進門畫面//
    let scrollNow = $(window).scrollTop();

    if (scrollNow == 0){

        $('.header').addClass('nav-headerOut');
        $('#beeru-nav-bar').addClass('OUT');
        $('#LandingPage').addClass('IN');
        $('#content-wrap').addClass('OUT');
        $('#footer').addClass('OUT')

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
                $('#beeru-nav-bar').removeClass('OUT');
                $('#LandingPage').removeClass('IN'); 
                $('#footer').removeClass('OUT')
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

        setTimeout(()=>{

            $('.pip_pick').addClass('pipi-flyout')
    
    
        },3000)
    }


 
 
  


    

    $(window).scroll(function(){


        let scrollNow = $(window).scrollTop();
        console.log('scrollTop',scrollNow );



    });
    
   




});







