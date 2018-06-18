// Feather Icons
feather.replace();

// Show arrow when scroll
$(window).scroll(function(){
	var scrollValue = $(window).scrollTop();
	
   if(scrollValue > 50) {
       $('nav.navbar').addClass('sticky100');
   }else{
       $('nav.navbar').removeClass('sticky100');
   }
});