/************************Designed by Fabian Shamano, www.fabianshamano.com, fabianshamano@yahoo.com***************************/	
function updateLoadingBar(loadingBar, value){
	value = Math.round(value);
	loadingBar.querySelector(".loading-bar__fill").style.width = `${value}%`;
	loadingBar.querySelector(".loading-bar__text").style.width = `${value}%`;
}



jQuery(window).load(function() {
	
	$('body').addClass('loaded');
	
	//$(window).resize(function(){location.reload();});
	
	$(window).scroll(function(){
	
	  var wScroll = $(this).scrollTop();
		
		if (!jQuery('#about .read-more-list li').hasClass("is-showing")) {    
			if(wScroll > $('#about .section-read-more').offset().top - ($(window).height() / 1.2)) {

				$('#about .read-more-list li').each(function(i){

				  setTimeout(function(){
					$('#about .read-more-list li').eq(i).addClass('is-showing');
				  }, (700 * (Math.exp(i * 0.25))) - 700);

				});
			}
		}
		
		if (!jQuery('#property .read-more-list li').hasClass("is-showing")) {    
			if(wScroll > $('#property .section-read-more').offset().top - ($(window).height() / 1.2)) {

				$('#property .read-more-list li').each(function(i){

				  setTimeout(function(){
					$('#property .read-more-list li').eq(i).addClass('is-showing');
				  }, (700 * (Math.exp(i * 0.25))) - 700);

				});
			}
		}
		
		if (!jQuery('#banking .read-more-list li.main-list-tab').hasClass("is-showing")) {    
			if(wScroll > $('#banking .section-read-more').offset().top - ($(window).height() / 1.2)) {

				$('#banking .read-more-list li.main-list-tab').each(function(i){

				  setTimeout(function(){
					$('#banking .read-more-list li.main-list-tab').eq(i).addClass('is-showing');
				  }, (700 * (Math.exp(i * 0.25))) - 700);

				});
			}
		}
		
		if (!jQuery('#contact-us .read-more-list li.main-list-tab').hasClass("is-showing")) {    
			if(wScroll > $('#contact-us .section-read-more').offset().top - ($(window).height() / 1.2)) {

				$('#contact-us .read-more-list li.main-list-tab').each(function(i){

				  setTimeout(function(){
					$('#contact-us .read-more-list li').eq(i).addClass('is-showing');
				  }, (700 * (Math.exp(i * 0.25))) - 700);

				});
			}
		}
	
	
		$.fn.revealOnScroll = function(title){
			return this.each(function(){
				
				var sliderContainerHeight = $('#slider').height()/6;
				
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
				
					if(title=="flipped"){
						if(!$('this').hasClass('flipped')){
							if(wScroll > sliderContainerHeight){
								$(this).addClass('flipped');
							}
							else{
								$(this).removeClass('flipped');
							}
						}
					}

				if(($(window).width() <= 767) ){
					if(title=="navbar-color"){
					$(this).addClass('navbar-color');

					}
				}
				
				if (!jQuery(this).hasClass("showing")) { 			
					if(title=="fadeInLeft"){	
							if(wScroll > $(this).offset().top - ($(window).height() / 1.0)) {
						
								$(this).addClass('showing');
							}
					}
				}
	
				if (!jQuery(this).hasClass("showing")) { 			
					if(title=="fadeInRight"){	
							if(wScroll > $(this).offset().top - ($(window).height() / 1.0)) {
						
								$(this).addClass('showing');
							}
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
					
					if (!jQuery(this).hasClass("is-showing")) { 			
						if(title=="fadeIn"){	
							if(wScroll > $(this).offset().top - ($(window).height() / 1.0)) {
						
								$(this).addClass('is-showing');
							}
						}
					}
				}
				
			});
			
		}
		
		$('.fade-in-left').revealOnScroll("fadeInLeft");
		$('.fade-in-right').revealOnScroll("fadeInRight");
		$('.hero-bg, .services-bg, .menus-bg, .events-bg').revealOnScroll("parallax");
		$('.fade-in').revealOnScroll("fadeIn");
		$('.navbar').revealOnScroll('navbar-color');
		$('.logo-caption-short, .logo-caption-full').revealOnScroll('flipped');
	});
	
	
	jQuery(function( $ ){
	/**
	 * Most jQuery.localScroll's settings, actually belong to jQuery.ScrollTo, check it's demo for an example of each option.
	 * @see http://demos.flesler.com/jquery/scrollTo/
	 * You can use EVERY single setting of jQuery.ScrollTo, in the settings hash you send to jQuery.localScroll.
	 */

	// The default axis is 'y', but in this demo, I want to scroll both
	// You can modify any default like this
	$.localScroll.defaults.axis = 'xy';

	/**
	 * NOTE: I use $.localScroll instead of $('#navigation').localScroll() so I
	 * also affect the >> and << links. I want every link in the page to scroll.
	 */
	$.localScroll({
		queue:true,
		duration:2500,
		hash:true,
		onBefore:function( e, anchor, $target ){
			// The 'this' is the settings object, can be modified
		},
		onAfter:function( anchor, settings ){
			// The 'this' contains the scrolled element (#content)
		}
		});
	});
	
});


////////Tab Panels
$(document).ready(function(){
	
	$('.content-panel').hide();
	$('.content-panel:first-child').show();
	
	$('#about .section-read-more ul li, nav .nav-about a').click(function(){
		$('#about .section-read-more ul li, nav .nav-about a').removeClass('active');
		$(this).addClass('active');
		
		var current_tab = $(this).attr('data-list');
		$('#about .content-panel').hide();
		$("."+current_tab).show();
		
	});
	
	$('#banking .section-read-more ul li, nav .nav-banking a, #about .card-banking-link, #banking .horizontal-card').click(function(){
		$('#banking .section-read-more ul li, nav .nav-banking a, #about .card-banking-link, #banking .horizontal-card').removeClass('active');
		$(this).addClass('active');
		
		var current_tab = $(this).attr('data-list');
		$('#banking .content-panel').hide();
		$("."+current_tab).show();
		
	});
	
	$('#property .section-read-more ul li, nav .nav-property a,#about .card-property-link').click(function(){
		$('#property .section-read-more ul li, nav .nav-property a,#about .card-property-link').removeClass('active');
		$(this).addClass('active');
		
		var current_tab = $(this).attr('data-list');
		$('#property .content-panel').hide();
		$("."+current_tab).show();
		
	});
	
	$('#contact-us .section-read-more ul li, nav .nav-contact-us a').click(function(){
		$('#contact-us .section-read-more ul li, nav .nav-contact-us a').removeClass('active');
		$(this).addClass('active');
		
		var current_tab = $(this).attr('data-list');
		$('#contact-us .content-panel').hide();
		$("."+current_tab).show();
		
	});
	
});


// Remove anchor tags from url
$(document).ready(function() {
  // get the anchor link buttons
  const menuBtn = $('.remove-anchor-tag');
  // when each button is clicked
  menuBtn.click(()=>{	
    // set a short timeout before taking action
    // so as to allow hash to be set
    setTimeout(()=>{
      // call removeHash function after set timeout
      removeHash();
    }, 5); // 5 millisecond timeout in this case
  });

  // removeHash function
  // uses HTML5 history API to manipulate the location bar
  function removeHash(){
    history.replaceState('', document.title, window.location.origin + window.location.pathname + window.location.search);
  }
});


/************************Designed by Fabian Shamano, www.fabianshamano.com, fabianshamano@yahoo.com***************************/