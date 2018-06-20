$(document).ready(function() {

/* Animations on scroll */

	$('.js--scroll-to-s-one').click(function(){
		$('html,body').animate({scrollTop: $('.js--s-one').offset().top}, 1000); /*1000 ms, html ET body*/
	});
    
	$('.js--scroll-to-s-two').click(function(){
	   $('html,body').animate({scrollTop: $('.js--s-two').offset().top}, 1000);
	});
	
	$('.js--scroll-to-s-three').click(function(){
	   $('html,body').animate({scrollTop: $('.js--s-three').offset().top}, 1000);
	});
	
	$('.js--scroll-to-s-four').click(function(){
	   $('html,body').animate({scrollTop: $('.js--s-four').offset().top}, 1000);
	});
	
	$('.js--scroll-to-s-five').click(function(){
	   $('html,body').animate({scrollTop: $('.js--s-five').offset().top}, 1000);
	});
	
	$('.js--scroll-to-s-six').click(function(){
	   $('html,body').animate({scrollTop: $('.js--s-six').offset().top}, 1000);
	});

	

	$('.js--nav-icon').click(function(){
		var mobile =$('.js--mobile');
		var navSol =$('.js--main-nav-solar');
		navSol.fadeToggle(200);
		 /*ouvre et ferme une boite en 200ms*/
		if (mobile.hasClass('mobile')){
			mobile.removeClass('mobile');
		} else {
			mobile.addClass('mobile');
		}
		
	});

});