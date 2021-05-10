
$(document).ready(function(){


    // Landingpage一開始進門畫面//
    let scrollNow = $(window).scrollTop();

    if (scrollNow == 0){
        
        // 門以外的東西都消失
        $('.header').addClass('nav-headerOut');
        $('.beeru-nav-bar').addClass('OUT');
        $('#LandingPage').addClass('IN');
        $('#content-wrap').addClass('OUT');
        $('footer').addClass('OUT')


        // 按了Yes之後
        $('#YES').click(function(){
            
////////////////////// 首頁效果///////////////////

            if ($(window).width() >= 992){
                $('.LandingPage .pip_push').addClass('pipi-flyIn');

                setTimeout(() => {
                    $('.door_outside').addClass('DOOR-OPEN');

                },2000);

            }
      
            if ($(window).width() < 992){
                $('.LandingPage .pip_push').addClass('pipi-flyIn-RWD');
                setTimeout(() => {
                    $('.door_outside').addClass('DOOR-OPEN-RWD');

                },2000);
            }


             $('.doorSign_warp').css('opacity','0');
             $('.button_warp').css('opacity','0');
            


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


   

        if ($(window).width() >= 992){
       
       
        setTimeout(()=>{
            $('.woman01-img').css('opacity','1').css('transition','0.8s');

        },9000)

        setTimeout(()=>{
            $('.woman02-img').css('opacity','1').css('transition','0.8s');

        },9500)

        setTimeout(()=>{
            $('.woman03-img').css('opacity','1').css('transition','0.8s');

        },10000)
        setTimeout(()=>{
            $('.woman04-img').css('opacity','1').css('transition','0.8s');

        },10500)

         // 說話的女人們
         setTimeout(() => {
                    

            $('.woman01').on({
            
                mouseenter:function(){
                $('.talk01').css('transform','scale(1) translate(-80px, -80px)').css('opacity','1').css('transition','0.5s')
                },
                mouseleave:function(){
                $('.talk01').css('transform','scale(0.5)  translate(-80px, -80px)').css('opacity','0').css('transition','0.5s')
            
                }
                
            })
            
            $('.woman02').on({
            
                mouseenter:function(){
                $('.talk02').css('transform','scale(1) translate(50px, -60px)').css('opacity','1').css('transition','0.5s')
                },
                mouseleave:function(){
                $('.talk02').css('transform','scale(0.5) translate(50px, -60px)').css('opacity','0').css('transition','0.5s')
            
                }
                
            })
            
            $('.woman03').on({
            
                mouseenter:function(){
                $('.talk03').css('transform','scale(1) translate(50px, -80px)').css('opacity','1').css('transition','0.5s')
                },
                mouseleave:function(){
                $('.talk03').css('transform','scale(0.5) translate(50px, -80px)').css('opacity','0').css('transition','0.5s')
            
                }
                
            })
            
            $('.woman04').on({
            
                mouseenter:function(){
                $('.talk04').css('transform','scale(1) translate(30px, -60px)').css('opacity','1').css('transition','0.5s')
                },
                mouseleave:function(){
                $('.talk04').css('transform','scale(0.5) translate(30px, -60px)').css('opacity','0').css('transition','0.5s')
            
                }
                
            })
            
            }, 10500);
           

       
        }
     
        if ($(window).width() < 992){
            setTimeout(()=>{
                $('.RWD-button').css('opacity','1').css('transition','0.8s');
    
            },9000)
        }


       
    }

    //若沒開門
    else{
        $('#LandingPage').addClass('OUT');
        $('#content-wrap').css('display','block').css('opacity','1');


        setTimeout(()=>{

            $('.pip_pick').addClass('pipi-flyout')
    
        },3000)

    
        if ($(window).width() >= 992){
            setTimeout(()=>{
                $('.woman01-img').css('opacity','1').css('transition','0.8s');

            },2000)

            setTimeout(()=>{
                $('.woman02-img').css('opacity','1').css('transition','0.8s');

            },2500)

            setTimeout(()=>{
                $('.woman03-img').css('opacity','1').css('transition','0.8s');

            },3000)
            setTimeout(()=>{
                $('.woman04-img').css('opacity','1').css('transition','0.8s');

            },3500)



            // 說話的女人們
                setTimeout(() => {
                    

                    $('.woman01').on({
                    
                        mouseenter:function(){
                        $('.talk01').css('transform','scale(1) translate(-80px, -80px)').css('opacity','1').css('transition','0.5s')
                        },
                        mouseleave:function(){
                        $('.talk01').css('transform','scale(0.5)  translate(-80px, -80px)').css('opacity','0').css('transition','0.5s')
                    
                        }
                        
                    })
                    
                    $('.woman02').on({
                    
                        mouseenter:function(){
                        $('.talk02').css('transform','scale(1) translate(50px, -60px)').css('opacity','1').css('transition','0.5s')
                        },
                        mouseleave:function(){
                        $('.talk02').css('transform','scale(0.5) translate(50px, -60px)').css('opacity','0').css('transition','0.5s')
                    
                        }
                        
                    })
                    
                    $('.woman03').on({
                    
                        mouseenter:function(){
                        $('.talk03').css('transform','scale(1) translate(50px, -80px)').css('opacity','1').css('transition','0.5s')
                        },
                        mouseleave:function(){
                        $('.talk03').css('transform','scale(0.5) translate(50px, -80px)').css('opacity','0').css('transition','0.5s')
                    
                        }
                        
                    })
                    
                    $('.woman04').on({
                    
                        mouseenter:function(){
                        $('.talk04').css('transform','scale(1) translate(30px, -60px)').css('opacity','1').css('transition','0.5s')
                        },
                        mouseleave:function(){
                        $('.talk04').css('transform','scale(0.5) translate(30px, -60px)').css('opacity','0').css('transition','0.5s')
                    
                        }
                        
                    })
                    
                    }, 3500);

       }


    //    首頁RWD按鈕出現
       if ($(window).width() < 992){
        setTimeout(()=>{
            $('.RWD-button').css('opacity','1').css('transition','0.8s');

        },1500)
     
       }

    
      
    }

////////精釀小學堂效果////////////

$(window).scroll(function(){


    let scrollNow = $(window).scrollTop();
    console.log('scrollTop',scrollNow );

   
    if ($(window).width() >= 992){
        if(scrollNow >= 175){
        
            $('.Brew-school').addClass('BeerU-fadeIN')

        }

        if(scrollNow >= 300){
            $('.brew-beer-img').css('transform','translateX(0px)').css('transition','2s');
            $('.bussiness-beer-img').css('transform','translateX(0px)').css('transition','2s');
        }
        else{
            $('.brew-beer-img').css('transform','translateX(-200px)').css('transition','2s');
            $('.bussiness-beer-img').css('transform','translateX(200px)').css('transition','2s');

        }



   } 

   if ($(window).width() < 992){

      if(scrollNow >= 141){

        $('.Brew-school').css('opacity','1').css('transition','0.8s')

      }
   }


});


if ($(window).width() >= 992){

    $('.brew-beer-left').on({

        mouseenter:function(){

            $('.brew-beer-img').css('opacity','1').css('transition','0.3s');
            
        },
    
        mouseleave:function(){

            $('.brew-beer-img').css('opacity','0.6').css('transition','0.8s');
        }
    

    })


    $('.bussiness-beer-right').on({

        mouseenter:function(){

            $('.bussiness-beer-img').css('opacity','1').css('transition','0.3s');
            
        },
    
        mouseleave:function(){

            $('.bussiness-beer-img').css('opacity','0.6').css('transition','0.8s');
        }
    
    })     
}      

if ($(window).width() < 992){

    $('.brew-beer-left').click(function(){
        
        $('.brew-beer-img').css('opacity','1').css('transition','0.3s');

        $('.bussiness-beer-img').css('opacity','0.6').css('transition','0.8s');
    })


    $('.bussiness-beer-right').click(function(){


        $('.bussiness-beer-img').css('opacity','1').css('transition','0.8s');

        $('.brew-beer-img').css('opacity','0.6').css('transition','0.8s');
    })
     


}



 
 ///////////// Beer-type輪播牆//////////////////


 $(window).scroll(function(){


    let scrollNow = $(window).scrollTop();
    console.log('scrollTop',scrollNow );

   
    if ($(window).width() >= 992){
        if(scrollNow >= 800){
        
            $('.Beer-type').addClass('BeerU-fadeIN')

        }


        if(scrollNow >= 1320){
        
            $('.hand').css('transform','translate(-150px,-250px) rotate(0)').css('transition','2s')

          

          setInterval(() => {
            $('.type-color').css('opacity','1').css('transition','1s')
              
          }, 1200);
           

        }

        else{
            $('.hand').css('transform','translate(-150px,-250px) rotate(-30deg)').css('transition','2s')

        }




   } 

   if ($(window).width() < 992){

      if(scrollNow >= 764){

        $('.Beer-type').css('opacity','1').css('transition','0.8s')

      }
   }


});


///////////// Beer-type輪播牆//////////////////


let page = 0;

$('.Beer-type-content').parents().find('.drop').eq(page).css('filter','drop-shadow(0 0 10px #0AB6E4)').siblings().css('filter','transparent');

$('.Beer-type-content').parents().find('.colorDot').eq(page).css('border','solid 3px white').siblings().css('border','transparent');





$('.drop').on({

    click:function(){

            page = $(this).index(); 
            console.log('dots page',$(this).index());

            $(this).css('filter','drop-shadow(0 0 10px #0AB6E4  )').siblings().css('filter','none');

            $('.Beer-type-content-warp').css('left',$(this).index()*-720+'px').css('transition','1s');

    },

    mouseenter:function(){
        page = $(this).index(); 
            // console.log('dots page',$(this).index());
    
            $(this).css('filter','drop-shadow(0 0 10px #0AB6E4  )').siblings().css('filter','none');
        
            $('.Beer-type-content-warp').css('left',$(this).index()*-720+'px').css('transition','1s');


    }


});



$('.colorDot').click(function(){

    page = $(this).index(); 

    // console.log('little dots',$(this).index());

     
    $(this).css('border','solid 3px white').siblings().css('border','transparent');

    $('.Beer-type-content-warp').css('left',$(this).index()*-370+'px').css('transition','1s');




});



$('.type-backward').click(function(){

    page += 1;

    if (page > 8){
        page = 0;
    };
    
    $('.type-backward img').toggleClass('BeerU-fadeOut');

    $('.Beer-type-content').parents().find('.drop').eq(page).css('filter','drop-shadow(0 0 10px #0AB6E4  )').siblings().css('filter','none');


    $('.Beer-type-content').parents().find('.colorDot').eq(page).css('border','solid 3px white').siblings().css('border','transparent');



    if ($(window).width() >= 992){

        $('.Beer-type-content-warp').css('left',page*-720+'px').css('transition','1s');
    
        }
    
        if ($(window).width() < 992){
    
            $('.Beer-type-content-warp').css('left',page*-370+'px').css('transition','1s');
    
         }
         console.log(page);

})




$('.type-forward').click(function(){

    page -= 1;

    if (page < 0){
        page = 8;
    };
  


    $('.Beer-type-content').parents().find('.drop').eq(page).css('filter','drop-shadow(0 0 10px #0AB6E4)').siblings().css('filter','none');


    $('.Beer-type-content').parents().find('.colorDot').eq(page).css('border','solid 3px white').siblings().css('border','transparent');


    if ($(window).width() >= 992){
        $('.Beer-type-content-warp').css('left',page*-720+'px').css('transition','1s');
        
    
        }
    
        if ($(window).width() < 992){
    
            $('.Beer-type-content-warp').css('left',page*-370+'px').css('transition','1s');
    
         }

        //   console.log(page);

        //   console.log('lg-3 width', $('.colllection-items-warp .col-lg-3').outerWidth());
})














    

   
    
   




});







