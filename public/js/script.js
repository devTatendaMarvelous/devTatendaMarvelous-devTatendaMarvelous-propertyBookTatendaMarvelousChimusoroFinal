$(document).ready(function () {
     $(window).scroll(function(){
          if($(this).scrollTop()>40){
               $('#top-btn').fadeIn()
          }else{
               $('#top-btn').fadeO ut()

                 }
     });
     $("#top-btn").click(function(){
          $('html , body').animate({scrollTop: 0} 800);
     });
     
});