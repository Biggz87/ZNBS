//*================================Designed by Fabian Shamano, fabianshamano@yahoo.com=========================*//
//*===========================================Show and hide toggle functions===================================*//
//*================================Designed by Fabian Shamano, fabianshamano@yahoo.com=========================*//
	$('.intro').hide();
	$('.aboutUs').hide();
	$('.facilities-infomation').hide();
	$('.booking-info').hide();
	$('.activites').hide();

	function toggleDisplayShowIntro(){		
		if ((!jQuery('.windowWrapper').hasClass("showing")) ){
			$('.aboutUs, .facilities-infomation, .booking, .booking-info, .activites, .highlight-1, .highlight-2').hide();
			$('.intro').show();
			$('.windowWrapper, .windowInfo').addClass('showing');
		}
	}
	
	function toggleDisplayShowAbout(){		
		if ((!jQuery('.windowWrapper').hasClass("showing")) ){
			$('.intro, .facilities-infomation, .booking, .booking-info, .activites, .highlight-1, .highlight-2').hide();
			$('.aboutUs').show();
			$('.windowWrapper, .windowInfo').addClass('showing');
		}
	}

	function toggleDisplayShowFacilities(){		
		if ((!jQuery('.windowWrapper').hasClass("showing")) ){
			$('.intro, .aboutUs, .booking, .booking-info, .activites, .highlight-1, .highlight-2').hide();
			$('.facilities-infomation').show();			
			$('.windowWrapper, .windowInfo').addClass('showing');
		}
	}
	
	function toggleDisplayShowActivities(){		
		if ((!jQuery('.windowWrapper').hasClass("showing")) ){
			$('.intro, .aboutUs, .facilities-infomation, .booking, .booking-info, .highlight-1, .highlight-2').hide();
			$('.activites').show();			
			$('.windowWrapper, .windowInfo').addClass('showing');
		}
	}
	
	function toggleDisplayShowBookingInfo(){		
		if ((!jQuery('.windowWrapper').hasClass("showing")) ){
			$('.intro, .aboutUs, .facilities-infomation, .booking, .activites, .highlight-1, .highlight-2').hide();
			$('.booking-info').show();			
			$('.windowWrapper, .windowInfo').addClass('showing');
		}
	}
	
	function toggleDisplayShowBooking(){		
		if ((!jQuery('.windowWrapper').hasClass("showing")) ){
			$('.intro, .aboutUs, .facilities-infomation, .booking-info, .activites, .highlight-1, .highlight-2').hide();
			$('.booking').show();			
			$('.windowWrapper, .windowInfo').addClass('showing');
		}
	}

	function toggleDisplayShowHighlight1(){		
		if ((!jQuery('.windowWrapper').hasClass("showing")) ){
			$('.intro, .aboutUs, .facilities-infomation, .activites, .booking, .booking-info, .highlight-2').hide();
			$('.highlight-1').show();			
			$('.windowWrapper, .windowInfo').addClass('showing');
		}
	}

	function toggleDisplayShowHighlight2(){		
		if ((!jQuery('.windowWrapper').hasClass("showing")) ){
			$('.intro, .aboutUs, .facilities-infomation, .activites, .booking, .booking-info, .highlight-1').hide();
			$('.highlight-2').show();			
			$('.windowWrapper, .windowInfo').addClass('showing');
		}
	}

	
	function toggleDisplayHide(){		
		if (jQuery('.windowWrapper').hasClass("showing")){
			$('.windowWrapper, .windowInfo').removeClass('showing');
		}
	}


//*================================Designed by Fabian Shamano, fabianshamano@yahoo.com=========================*//
//*===========================================loader===================================*//
//*================================Designed by Fabian Shamano, fabianshamano@yahoo.com=========================*//

$(function () {
    
    "use strict";
  

    var $grid = $('.grid'),
        i;

    $(window).on('load', function () {

        /*--------------------------------
            01. Isotope Plugin
        ----------------------------------*/
       
        /*--------------------------------
            02. Preloader
        ----------------------------------*/
        $(".preloader").css('display','none');

        setTimeout(function(){

            $('html, body').animate({
                scrollTop: 0
            }, 1000, function () {
                
                $('.navbar-nav li:first-of-type').addClass('active').siblings().removeClass('active');
                $('.page-loader').css('animation-name','');
                $('.home .content').removeClass('opacity-zero');
                $('.main_img').removeClass('img-shadow');
                $('main').removeClass('load-main');

            });

        },1000);

        
    }); 
    


});

//**=============================================================================================**//
//**======================Designed by Fabian Shamano fabianshamano@yahoo.com=====================**//
//**=============================================Toggle==========================================**//
//**======================Designed by Fabian Shamano fabianshamano@yahoo.com=====================**//
//**=============================================================================================**//

$(function() {

	$('.drop-down-mobile .drop-down-menu').hide(); //hide
	
	jQuery.fn.showHide = function() {
		return this.each(function(){

	$(this).click(function(){
		$(this).next().animate(
			{'height':'toggle'}, 'slow', 'swing'
		);
		
		return false; //prevents the browser default
		
		});
			
	});
		
	}
	
	$('.drop-down-mobile .drop-down-toggle').showHide();

				
}); //documnet.redy function

//Parallax 
$(window).scroll(function(){

	var sliderContainerHeight = $('#slider').height()/6;
	var wScroll = $(this).scrollTop();
	
	if (!jQuery('#gallery .thumbnail').hasClass("is-showing")) {    
			if(wScroll > $('#gallery .row').offset().top - ($(window).height() / 1.2)) {

				$('#gallery .row .thumbnail').each(function(i){

				  setTimeout(function(){
					$('#gallery .row .thumbnail').eq(i).addClass('is-showing');
				  }, (700 * (Math.exp(i * 0.20))) - 700);

				});
			}
		}
	
	$.fn.revealOnScroll = function(title){
		return this.each(function(){
			if(($(window).width() >= 768) ){
				if(title=="navbar-color"){
					if (!$('this').hasClass("navbar-color")){
						if(wScroll > sliderContainerHeight) {					
							$(this).addClass('navbar-color');
						}
						else {
							$(this).removeClass('navbar-color');
						}
					}
				}
			}
			
			if(($(window).width() <= 767) ){
				if(title=="navbar-color"){
				$(this).addClass('navbar-color');
						
				}
			}
			
			if(title=="parallax"){
					
				var offset = (wScroll - $(this).offset().top);
				var conTop = $(this).offset().top - $(window).height();
				var conBottom = $(this).offset().top - $(window).height() + ($(this).height()*2);
				var conTopOfWindow = $(this).offset().top - $(window).height() + $(this).height();

				if((wScroll > conTop && wScroll <= conBottom) && ($(window).width() >= 1023) ){
					$(this).css({'background-position':'center '+ -offset/3 + 'px'});								
				}

				if(($(window).width() <= 1023) ){
					$(this).css({'background-position':'center'});								
				}
			}
			
			if (!jQuery(this).hasClass("is-showing")) { 			
				if(title=="fadeIn"){	
						if(wScroll > $(this).offset().top - ($(window).height() / 1.0)) {

							$(this).addClass('is-showing');
						}
				}
			}
			
			if (!jQuery(this).hasClass("is-showing")) { 			
				if(title=="fadeIn-Y-axis"){	
						if(wScroll > $(this).offset().top - ($(window).height() / 1.0)) {

							$(this).addClass('is-showing');
						}
				}
			}
			
			if (!jQuery(this).hasClass("is-showing")) { 			
				if(title=="fadeIn-X-axis"){	
						if(wScroll > $(this).offset().top - ($(window).height() / 1.0)) {

							$(this).addClass('is-showing');
						}
				}
			}
		});
	}
	
	$('.news-bg').revealOnScroll("parallax");
	$('.navbar').revealOnScroll('navbar-color');
	$('.fade-in').revealOnScroll("fadeIn");
	$('.fadeIn-x-axis').revealOnScroll("fadeIn-X-axis");
	$('.fadeIn-y-axis').revealOnScroll("fadeIn-y-axis");
});

