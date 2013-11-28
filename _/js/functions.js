(function($){

$.fn.isOnScreen = function(){
     
    var win = $(window);
     
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
     
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
     
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
     
};

$('.no-touch-move').bind('touchmove', false);

var home_screen_seen = $.cookie('home_screen');
var mobile, desktop, event_type;

if (Modernizr.touch){

  event_type = 'touchstart';
  modile = true;
  $.cookie('home_screen', true, { expires: 1, path: '/' });
  home_screen_seen = $.cookie('home_screen');
  
} else {
 
 desktop = true;	
 event_type = 'click';	
 
}
var window_pos = $(window).scrollTop();
var window_h = $(window).height();
var nav_pos_top = $('.header').position().top;
var nav_pos = $('.page-wrapper').offset().top + $('.header').outerHeight();
var scrollPosition_calc = window_h - window_pos;
var header_h = $('.header').outerHeight();

var our_team_panels_total = $('#our-team-slider > .carousel-inner').find('.item').length;

if ($('body').attr("id") == "home") {
var header_pos = $('#home-page-content').offset().top;
var header_pos_offset = header_pos - window_pos;
var home_carousel = $('#home-carousel');
}

var page_wrapper_pos = $('.page-wrapper').position().top;

var onScrollEnd = new ScrollEnd();

$(window).on("resize", function(e){
	window_h = $(window).height();

});

function reset_sideform(){
	
	var claim_form = $('#claim-form-wrap').find('form');	
	var txt_inputs = claim_form.find('input[type="text"]');
	var email_input = claim_form.find('input[type="email"]');
	var tel_input = claim_form.find('input[type="tel"]');
	var radio_btns = claim_form.find('input[type="radio"]');
	var select = claim_form.find('select');
	
	txt_inputs.val("");
	email_input.val("");
	tel_input.val("");
	radio_btns.removeAttr('checked');
	
	if (select.parents('.gfield').is(':visible')) {
	select.parents('.gfield').hide();
	select.prop('selectedIndex',0);
	}
	
};

/* trigger when page is ready */
$(document).ready(function (){

window_pos = $(window).scrollTop();
page_wrapper_pos = $('.page-wrapper').position().top;

	/* HOME PAGE SLIDERS 
	Slider functions for the home page.
	- Full screen home screen slider	
	- Testimonials slider
	- Reccent news slider
	*/
	
if ($('body').attr("id") == "home") {

	if ($('#home-carousel').length == 1) {
		
		$('#home-carousel').carousel({
		pause: false,
		interval: 10000
		});
	}
	
	$('#testy-carousel').carousel({
		pause: false,
		interval: 10000
	});
	
	$('#news-carousel').carousel({
		pause: false,
		interval: 10000
	});
	
	$('li.tool-tip').tooltip({html: true});
	
}

	/* Our Team Slider
	Functions for when slider initiates and after the slide has slid.
	*/

	
	$('#our-team-slider').on('slid.bs.carousel', function(e){
	
		var active_item_index = $(this).find('.active').index();
		
		if ( active_item_index == (our_team_panels_total-1) ) {
		$(this).find('a.right').hide();
		} else {
			
			if ( $(this).find('a.right').is(':hidden') ) {
				$(this).find('a.right').show();
			}
			
		}
		
		if ( active_item_index > 0 ) {
		$(this).find('a.left').show();
		} else {
			
			if ( $(this).find('a.left').is(':visible') ) {
				$(this).find('a.left').hide();
			}
			
		}
		
	});
	
	
    /* 
    SIDE BAR MENU BUTTON 
	Click function for home screen sidebar menu
	which will push the home screen to the left and the 
	sidebar navigation will be displayed.  
	This has a toggle action so the button can be clicked to close
	and open the sidebar menu.  
    */
    $('body').on(event_type, "button.menu-btn", function(){
    
    	if ( $('#home-screen-wrap').hasClass('sidenav-closed') ) {
    	
    	$(this).addClass('open');
	    $('#home-screen-wrap').removeClass('sidenav-closed').addClass('sidenav-open');
	    
		} else {
	   
	    $(this).removeClass('open');
	    $('#home-screen-wrap').removeClass('sidenav-open').addClass('sidenav-closed');
	    
		}
		
		return false;
	 
    });
    
     /* 
    SIDE BAR MENU CLOSE BUTTON 
	Click function for sidebar menu close button which will put the 
	home screen back original position and hide the sidebar navigation.    
    */
    
    $('body').on(event_type, "button.side-nav-close", function(){
    
    	$('button.menu-btn').removeClass('open');
	    $('#home-screen-wrap').removeClass('sidenav-open').addClass('sidenav-closed');
		
		return false;
    });
    
	/*
	SIDE BAR MENU LINKS
    When a th hidden side nav is visible and alink is clicked 
    A cookie is set to say the home screen has been seen.
	*/
	
	$('#side-nav').on(event_type, "a", function(e){
		
		$.cookie('home_screen', true, { expires: 1, path: '/' });
		home_screen_seen = $.cookie('home_screen');
		
	});
	
	/* MOBILE MENU LINKS */
	
	$('body').on(event_type, "button#mobile-nav-btn", function(e){
	
		if ( $('#mobile-nav').hasClass('mobile-nav-closed') ) {
    	
    		$('#mobile-nav').removeClass('mobile-nav-closed').addClass('mobile-nav-open');	    
		}
		
		return false;
		
	});
	
	/* MOBILE MENU CLOSE BUTTON  */
	$('body').on(event_type, "button.mobile-menu-nav-close", function(){
    
    	if ( $(this).parents('#mobile-nav').hasClass('mobile-nav-open') ) {
    	
    		$(this).parents('#mobile-nav').removeClass('mobile-nav-open').addClass('mobile-nav-closed');	    
		}
		
		return false;
    });
	
	/* MAIN MENU LINKS */
	
	$('#home-page-content').find('#top-nav').on(event_type, "a", function(){
		
		$.cookie('home_screen', true, { expires: 1, path: '/' });
		home_screen_seen = $.cookie('home_screen');
		
	});
	
	/* MAIN MENU HOVER */
	
	$('#main-nav').find('li.with-sub-nav').on('mouseover', function(){
   	 	$(this).addClass('sub-hover');
	});
	
	$('#main-nav').find('li.with-sub-nav').on('mouseout', function(){
	    $(this).removeClass('sub-hover');
	});
	
	// Touch events
	$('#main-nav').find('li.with-sub-nav').on('touchend', function(){
	    $(this).parent().toggleClass('sub-hover');
	});
	
	/* GALLERY IMAGES HOVER */
	
	$('.gallery-imgs').find('li > a').on('mouseover', function(){
   	 	$(this).addClass('hover');
	});
	
	$('.gallery-imgs').find('li > a').on('mouseout', function(){
	    $(this).removeClass('hover');
	});
	
	// Touch events
	$('.gallery-imgs').find('li > a').on('touchend', function(){
	    $(this).parent().toggleClass('hover');
	});
    
    
    $('body').on(event_type, "button.enter-btn", function(){
	   
	  header_pos = $('#home-page-content').offset().top;
	   
	   if ( $('#home-screen-wrap').hasClass('sidenav-open') ) {
    	
    		$('button.menu-btn').removeClass('open');
			$('#home-screen-wrap').removeClass('sidenav-open').addClass('sidenav-closed');
	    
		}
		
		$.cookie('home_screen', true, { expires: 1, path: '/' });
		
		home_screen_seen = $.cookie('home_screen');
		
		 $('#home-screen').animate({marginTop: "-"+window_h+"px"},'slow', function() {
			$(this).hide(); 
		 });
	
		return false;
	    
    });
        
    /* 
    SIDEBAR ACCORDION FUNCTION 
	Using jquery ui accordion widget. 
    */
    
    $( "#side-nav" ).find('ul.sub-menu').accordion({
	    header: "li.with-sub-level > a",
	    heightStyle: "content",
	    collapsible: true,
	    active: false,
	    event: "mouseover",
	    icons: { "header": "ui-icon-plus", "activeHeader": "ui-icon-minus" }
    });
    
    /* 
    SIDEBAR ICON LINKS FUNCTION 
	The side icons slide in a nd out. 
    */
    
     $('#side-icon-links').on(event_type, "button", function(){
     
     var parent_li = $(this).closest('li');
		 
		 if (parent_li.hasClass('disabled')) {
			 
			 parent_li.removeClass('disabled').addClass('enabled');
			 
		 } else {
		 
		 	 parent_li.removeClass('enabled').addClass('disabled');
		 }
		 
		return false;
	    
    });
    
    /* PRACTICE LIST ITEMS VIEW BUTTON 
	This function expands the list of sub pages
	for each parent item.
    */
    
    $('body').on(event_type, "button.list-btn", function(){
    
    var sub_list = $(this).next();
    
    if (sub_list.hasClass('closed')) {
    
       $(this).removeClass('inactive-btn').addClass('active-btn'); 
	   
	   sub_list.removeClass('closed').addClass('open'); 
	    
    } else {
    
    	$(this).removeClass('active-btn').addClass('inactive-btn'); 
	    
	    sub_list.removeClass('open').addClass('closed');
    }
    
    return false;
	    
    });
    
   /*
 PANEL LIST BUTTON
    This function expands the list of sub pages
	for the Practice areas on the home page Practices panel.
*/

 $('body').on(event_type, "button.panel-list-btn", function(){
    
    var sub_list = $(this).next();
    
    $("button.panel-list-btn").not(this).removeClass('list-open').addClass('list-closed'); 
    $(".panel-list-wrap").not(sub_list).removeClass('list-open').addClass('list-closed'); 
    
    if (sub_list.hasClass('list-closed')) {
    
       $(this).removeClass('list-closed').addClass('list-open'); 
	   
	   sub_list.removeClass('list-closed').addClass('list-open'); 
	    
    } else {
    
    	$(this).removeClass('list-open').addClass('list-closed'); 
	    
	    sub_list.removeClass('list-open').addClass('list-closed');
    }
    
    return false;
	    
    });

    
     /* MAKE A CLAIM BUTTON 
	Opens the sidebar for the Make a clame form
    */
    
     $('#claim-form-btn').on(event_type, "button", function(){
     
     var btn_wrap = $('#claim-form-btn');
     
     	if ($('.page-wrapper').hasClass('side-form-closed')) {
	     	$('.page-wrapper').removeClass('side-form-closed').addClass('side-form-open');
	     	$('#show-main-menu').removeClass('side-form-closed').addClass('side-form-open');
	     	$(btn_wrap).removeClass('btn-visible').addClass('btn-hidden');
     	} else {
	     	$('.page-wrapper').removeClass('side-form-open').addClass('side-form-closed');
	     	$('#show-main-menu').removeClass('side-form-open').addClass('side-form-closed');
     	}
		 
		 return false;
	    
     });
     
     
     $('#home-banner-btn').on(event_type, "button", function(){
     
     	if ($('.page-wrapper').hasClass('side-form-closed')) {
	     	$('.page-wrapper').removeClass('side-form-closed').addClass('side-form-open');
	     	$('#show-main-menu').removeClass('side-form-closed').addClass('side-form-open');
     	} else {
	     	$('.page-wrapper').removeClass('side-form-open').addClass('side-form-closed');
	     	$('#show-main-menu').removeClass('side-form-open').addClass('side-form-closed');
     	}
		 
		 return false;
	    
     });
     
      /* 
    MAKE A CLAIM SIDE BAR LOSE BUTTON 
	Closes the sidebar for the Make a clame form.    
    */
    
    $('body').on(event_type, "button.side-form-close", function(){
    
		
    	if ($('body').attr("id") == "home") {
    	
    		if (!$('#home-banner-btn').isOnScreen()) {
	    	$('#claim-form-btn').removeClass('btn-hidden').addClass('btn-visible');	
    		}

    	} else {
	    	$('#claim-form-btn').removeClass('btn-hidden').addClass('btn-visible');	
    	}
    	
	    $('.page-wrapper').removeClass('side-form-open').addClass('side-form-closed');
	    $('#show-main-menu').removeClass('side-form-open').addClass('side-form-closed');
		
		return false;
    });
    
   /*  SHOW MAIN HEADER MENU 
	   
	Button to show the main header menu wehn scrolled
	to a lower part of the page.
	The button will only be visible when the page is scrolled past the Header menu position
   */
   
   $('body').on(event_type, "button#show-main-menu-btn", function(){
	   
	   window_pos = $(window).scrollTop();
	   window_h = $(window).height();
	   
	   console.log($('.header').position().top);
	   
	   scrollPosition_calc = $('.header').position().top + header_h;
	   home_carousel = $('#home-carousel');
	   
	   $('#show-main-menu').removeClass('btn-visible').addClass('btn-hidden');
	   
	   $('.header').animate({top: scrollPosition_calc}, 'fast');
	   
	   return false;
   });
   
   /* FEED SCROLLER 
	   
	Adds new styled scroll bars to media feeds   
   */
   	
	$('.feed-wrap').slimScroll({
        height: '180px'
    });
    
    $('#directions-panel').slimScroll({
        height: '300px',
       alwaysVisible: true
    });
    
});

/* SCROLL END FUNCTIONS 
 - Functions that happen when scrolling finishes.	
*/
onScrollEnd.subscribe(function (scrollPosition) {

	window_pos = $(window).scrollTop();
	window_h = $(window).height(); 
	scrollPosition_calc = window_pos - header_h;
	
	//If statemants for Home page only
	if ($('body').attr("id") == "home") {
	
		//If home screen is visible
		if ($('#home-screen').length > 0) {
		
		scrollPosition_calc = (window_pos - window_h) - header_h;
			
			//If Main nav header and Home screen is not on screen
			if (!$('.header').isOnScreen() && !$('#home-screen').isOnScreen()) {
				
				$('.header').css({top: (scrollPosition_calc)+"px"});
				
				//Show main nav button
				if ($("#show-main-menu").hasClass("btn-hidden")) {
				$("#show-main-menu").removeClass("btn-hidden").addClass("btn-visible");		
				}
			
			} 
			
			//If Banner claim form button and home screen is not on screen
			if (!$('#home-banner-btn').isOnScreen() && !$('#home-screen').isOnScreen()) {
				
				//If claim form button is hidden and page content wrapper is open.
				if ($("#claim-form-btn").hasClass("btn-hidden") && (!$('.page-wrapper').hasClass('side-form-open')) ) {
					//Show cliam form button
					$("#claim-form-btn").removeClass("btn-hidden").addClass("btn-visible");	
					
				}
			
			} 
			
			// If home screen is not on screen
			if (!$('#home-screen').isOnScreen()) {
				
				//If side icon links are hidden
				if ($("#side-icon-links").hasClass("icons-hidden")) {
					//show side icon links/
					$("#side-icon-links").removeClass("icons-hidden").addClass("icons-visible");		
				}
				
				$('#home-carousel').carousel('pause');
				
				//If Claim form sidebar is positioned absolute
				if ($("#claim-form-wrap").hasClass("abs")) {
					// Claim form wrap position fixed.
					$("#claim-form-wrap").removeClass("abs").addClass("fixed");		
				}
			
			} 
			
			// If home screen is on screen
			if ($('#home-screen').isOnScreen()) {
			$('#home-carousel').carousel('cycle');	
			
				if ($('.page-wrapper').hasClass('side-form-open')) {
					// Claim form wrap position fixed.
					$('.page-wrapper').removeClass("side-form-open").addClass("side-form-closed");	
					reset_sideform();	
				}	
			} 
			
		//If home screen is not visible	
		} else {
			
			//If main nav header is not on screen - show main menu button
			if (!$('.header').isOnScreen() && desktop ) {
				
				$('.header').css({top: (scrollPosition_calc)+"px"});
				
				if ($("#show-main-menu").hasClass("btn-hidden")) {
				$("#show-main-menu").removeClass("btn-hidden").addClass("btn-visible");		
				}
			
			} 
			
			// If Banner claim button is not on screen - show bottom claim form button
			if (!$('#home-banner-btn').isOnScreen()) {
			
				if ($("#claim-form-btn").hasClass("btn-hidden") && (!$('.page-wrapper').hasClass('side-form-open')) ) {
					$("#claim-form-btn").removeClass("btn-hidden").addClass("btn-visible");	
					
					if ($("#claim-form-btn").find('button').hasClass("inactive") ) {
					
						$("#claim-form-btn").find('button').removeClass("inactive").addClass("active");	
						
					}	
				}
			
			} 
			
			// Show side icons
			if ($("#side-icon-links").hasClass("icons-hidden")) {
				$("#side-icon-links").removeClass("icons-hidden").addClass("icons-visible");		
			}
			
			// Make sidebar claim form fixed position
			if ($("#claim-form-wrap").hasClass("abs")) {
				$("#claim-form-wrap").removeClass("abs").addClass("fixed");		
			}

			
		}
		
	//If statemants for all pages	
	} else {
		
		// Main nav header is not on screen
		if (!$('.header').isOnScreen() && desktop) {
			
			$('.header').css({top: (scrollPosition_calc)+"px"});
			
			// Show Main nav button
			if ($("#show-main-menu").hasClass("btn-hidden")) {
				$("#show-main-menu").removeClass("btn-hidden").addClass("btn-visible");		
			}
			
		} 
		
		if ($("#side-icon-links").hasClass("icons-hidden")) {
			$("#side-icon-links").removeClass("icons-hidden").addClass("icons-visible");		
		}
		
		if ($('.page-wrapper').hasClass('side-form-closed')) {
		
			if ($("#claim-form-btn").hasClass("btn-hidden")) {
				$("#claim-form-btn").removeClass("btn-hidden").addClass("btn-visible");	
			}
		
		}
		
		if ($('.page-wrapper').hasClass('side-form-open')) {
		$("#show-main-menu").removeClass("side-form-closed").addClass("side-form-open");
		}
			
	}
    
});

/* SCROLLING FUNCTIONS 
- Functions to show and hide elements on the page when certain rules apply.	
*/
$(window).on("scroll", function(e){

	window_pos = $(window).scrollTop();
	window_h = $(window).height();
	scrollPosition_calc = $('.header').position().top - header_h;
	
	if (desktop) {
	$('.header').css({top: 0});	
	}
	
	
	if ($("#show-main-menu").hasClass("btn-visible")) {
		$("#show-main-menu").removeClass("btn-visible").addClass("btn-hidden");	
	}
	
	if ($("#side-icon-links").hasClass("icons-visible") && desktop ) {
		$("#side-icon-links").removeClass("icons-visible").addClass("icons-hidden");		
	}
	
	if ($('.page-wrapper').hasClass('side-form-closed') && desktop ) {
	
		if ($("#claim-form-btn").hasClass("btn-visible")) {
			$("#claim-form-btn").removeClass("btn-visible").addClass("btn-hidden");	
		}
	
	}
	

	if ($('.page-wrapper').hasClass('side-form-closed')) {
		
		if ($('#show-main-menu').hasClass('side-form-open')) {
			$('#show-main-menu').removeClass('side-form-open').addClass('side-form-closed');
		}
	}
	
	
	
	
	//If statemants for Home page only
	if ($('body').attr("id") == "home") {
	
		if ($("#home-page-content").hasClass("side-form-closed") && desktop ) {
			$("#show-main-menu").removeClass("side-form-open").addClass("side-form-closed");	
		}
	
		if ($('#home-screen-wrap').hasClass('sidenav-open')) {
			$('button.menu-btn').removeClass('open');
			$('#home-screen-wrap').removeClass('sidenav-open').addClass('sidenav-closed');
		}
	
		//If home screen is not visible
		if ($('#home-screen').length == 1) {
		
		 	if ($('#home-screen').isOnScreen()) {
				
				if ($("#claim-form-wrap").hasClass("fixed")) {
					$("#claim-form-wrap").removeClass("fixed").addClass("abs");		
				}
				
			} 
		
		//If home screen is visible.	
		}
			
	// If not home page.
	}	
    
});

$(window).load(function() {
	
});

	
})(window.jQuery);