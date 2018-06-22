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

/*Progressbar */

//
//	$('.js--step').click(function(){
//		var nbr = this.val();
//		for (var i=1; i<6; i++){
//			if(i<=nbr){
//				if(!$('.js--step'+i).hasClass('active')){
//					$('.js--step'+i).addClass('active');
//				}
//			}else {
//				if($('.js--step'+i).hasClass('active')){
//					$('.js--step'+i).removeClass('active');
//				}
//			}
//		}
//	});

	$('.js--step-1').click(function(){
		if($('.js--step-2').hasClass('active')){
			$('.js--step-2').removeClass('active');
		}
		if($('.js--step-3').hasClass('active')){
			$('.js--step-3').removeClass('active');
		}
		if($('.js--step-4').hasClass('active')){
			$('.js--step-4').removeClass('active');
		}
		if($('.js--step-5').hasClass('active')){
			$('.js--step-5').removeClass('active');
		}

		$('.js--text-step-1').fadeIn(100);
		document.querySelector('.js--text-step-2').style.display='none';
		document.querySelector('.js--text-step-3').style.display='none';
		document.querySelector('.js--text-step-4').style.display='none';
		document.querySelector('.js--text-step-5').style.display='none';
	});

	$('.js--step-2').click(function(){
		if(!$('.js--step-2').hasClass('active')){
			$('.js--step-2').addClass('active');
		}
		if($('.js--step-3').hasClass('active')){
			$('.js--step-3').removeClass('active');
		}
		if($('.js--step-4').hasClass('active')){
			$('.js--step-4').removeClass('active');
		}
		if($('.js--step-5').hasClass('active')){
			$('.js--step-5').removeClass('active');
		}
		document.querySelector('.js--text-step-1').style.display='none';
		$('.js--text-step-2').fadeIn(100);
		document.querySelector('.js--text-step-3').style.display='none';
		document.querySelector('.js--text-step-4').style.display='none';
		document.querySelector('.js--text-step-5').style.display='none';
	});

	$('.js--step-3').click(function(){
		if(!$('.js--step-2').hasClass('active')){
			$('.js--step-2').addClass('active');
		}
		if(!$('.js--step-3').hasClass('active')){
			$('.js--step-3').addClass('active');
		}
		if($('.js--step-4').hasClass('active')){
			$('.js--step-4').removeClass('active');
		}
		if($('.js--step-5').hasClass('active')){
			$('.js--step-5').removeClass('active');
		}
		document.querySelector('.js--text-step-1').style.display='none';
		document.querySelector('.js--text-step-2').style.display='none';
		$('.js--text-step-3').fadeIn(100);
		document.querySelector('.js--text-step-4').style.display='none';
		document.querySelector('.js--text-step-5').style.display='none';
	});

	$('.js--step-4').click(function(){
		if(!$('.js--step-2').hasClass('active')){
			$('.js--step-2').addClass('active');
		}
		if(!$('.js--step-3').hasClass('active')){
			$('.js--step-3').addClass('active');
		}
		if(!$('.js--step-4').hasClass('active')){
			$('.js--step-4').addClass('active');
		}
		if($('.js--step-5').hasClass('active')){
			$('.js--step-5').removeClass('active');
		}
		document.querySelector('.js--text-step-1').style.display='none';
		document.querySelector('.js--text-step-2').style.display='none';
		document.querySelector('.js--text-step-3').style.display='none';
		$('.js--text-step-4').fadeIn(100);
		document.querySelector('.js--text-step-5').style.display='none';
	});

	$('.js--step-5').click(function(){
		if(!$('.js--step-2').hasClass('active')){
			$('.js--step-2').addClass('active');
		}
		if(!$('.js--step-3').hasClass('active')){
			$('.js--step-3').addClass('active');
		}
		if(!$('.js--step-4').hasClass('active')){
			$('.js--step-4').addClass('active');
		}
		if(!$('.js--step-5').hasClass('active')){
			$('.js--step-5').addClass('active');
		}
		document.querySelector('.js--text-step-1').style.display='none';
		document.querySelector('.js--text-step-2').style.display='none';
		document.querySelector('.js--text-step-3').style.display='none';
		document.querySelector('.js--text-step-4').style.display='none';
		$('.js--text-step-5').fadeIn(100);
	});

});
