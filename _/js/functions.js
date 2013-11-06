// remap jQuery to $
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

var event_type = 'click';

if (Modernizr.touch){

  event_type = 'touchstart';
  
} 
var window_pos = $(window).scrollTop();
var window_h = $(window).height();
var nav_pos_top = $('.header').position().top;
var nav_pos = $('.page-wrapper').offset().top + $('.header').outerHeight();
var scrollPosition_calc = window_pos - ( $('.header').outerHeight() + 2 );

if ($('body').attr("id") == "home") {
var header_h = $('.header').outerHeight();
var header_pos = $('#home-page-content').offset().top;
var header_pos_offset = header_pos - window_pos;
var home_carousel = $('#home-carousel');
}

//var current_slide = $('#home-carousel').find('.item.active');
//var trans_counter = 0;
//var slide_timer;
var home_screen_seen = $.cookie('home_screen');
var page_wrapper_pos = $('.page-wrapper').position().top;

var onScrollEnd = new ScrollEnd();


/* trigger when page is ready */
$(document).ready(function (){

window_pos = $(window).scrollTop();
page_wrapper_pos = $('.page-wrapper').position().top;

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
    
    
    $('body').on(event_type, "button.enter-btn", function(){
	   
	  header_pos = $('#home-page-content').offset().top;
	   
	   if ( $('#home-screen-wrap').hasClass('sidenav-open') ) {
    	
    		$('button.menu-btn').removeClass('open');
			$('#home-screen-wrap').removeClass('sidenav-open').addClass('sidenav-closed');
	    
		}
		
		$.cookie('home_screen', true, { expires: 1, path: '/' });
		
		home_screen_seen = $.cookie('home_screen');
		
		 $('html,body').animate({scrollTop: header_pos}, 500);
	
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
	     	$(btn_wrap).removeClass('side-form-closed').addClass('side-form-open');
     	} else {
	     	$('.page-wrapper').removeClass('side-form-open').addClass('side-form-closed');
	     	$('#show-main-menu').removeClass('side-form-open').addClass('side-form-closed');
	     	$(btn_wrap).removeClass('side-form-open').addClass('side-form-closed');
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
    
    	$('#claim-form-btn').removeClass('side-form-open').addClass('side-form-closed');
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
	   
	   scrollPosition_calc = window_pos;
	   home_carousel = $('#home-carousel');
	   
	   if (home_screen_seen && (home_carousel.length == 1)) {
		 
		 scrollPosition_calc = ( (window_pos) - $('#home-screen').height() ); 
		   
	   }
	   
	   page_wrapper_pos = $('.page-wrapper').offset().top;
	   
	   $('#show-main-menu').removeClass('btn-visible').addClass('btn-hidden');
	   
	   //console.log(window_pos);
	   
	   $('.header').animate({top: scrollPosition_calc}, 'fast');
	   
	   return false;
   });
   
   /* FEED SCROLLER 
	   
	Adds new styled scroll bars to media feeds   
   */
   	
	$('.feed-wrap').slimScroll({
        height: '180px'
    });
    
    
});

$(window).on("resize", function(e){
	window_h = $(window).height();
	
	if ($('body').attr("id") == "home") {
	header_orig_pos = $('#home-page-content').offset().top + header_h;
	}
});

onScrollEnd.subscribe(function (scrollPosition) {

	window_pos = $(window).scrollTop();
	window_h = $(window).height();
	nav_pos_top = $('.header').offset().top;
    nav_pos = $('.page-wrapper').offset().top + $('.header').outerHeight();
        
    if ($('body').attr("id") == "home") {
   header_pos = $('#home-page-content').offset().top;
   banner_pos = header_pos + $('#page-banner-lrg').height();
   header_pos_offset =  scrollPosition - header_pos;
   home_carousel = $('#home-carousel');
    
    	if (scrollPosition >= header_pos ) {
    	
    	scrollPosition_calc = scrollPosition - ( $('.header').outerHeight() + 2 );
    	
			/* Carousel Home screen checks */
    		if (home_carousel.length == 1) {
	    		$('#home-carousel').carousel('pause');
    		}
		
			
			if (!home_screen_seen) {
				
				$.cookie('home_screen', true, { expires: 1, path: '/' });
		
				home_screen_seen = $.cookie('home_screen');
				
			}
			
			if (home_screen_seen && (home_carousel.length == 0)) {
								
				if ($('#claim-form-wrap').hasClass('abs')) {
					$('#claim-form-wrap').removeClass('abs').addClass('fixed');
				}
				
				if ($('#side-icon-links').hasClass('icons-hidden')) {
					$('#side-icon-links').removeClass('icons-hidden').addClass('icons-visible');
				}
				
			}
			
			if (home_screen_seen && (home_carousel.length == 1)) {
				
				if ($('#claim-form-wrap').hasClass('abs home-screen-enabled')) {
					$('#claim-form-wrap').removeClass('abs home-screen-enabled').addClass('fixed home-screen-disabled');
				}
				
				if ($('#side-icon-links').hasClass('icons-hidden')) {
					$('#side-icon-links').removeClass('icons-hidden').addClass('icons-visible');
				}
				
				scrollPosition_calc = ( (scrollPosition) - $('#home-screen').height() ) - ( $('.header').outerHeight() + 2  );
			}
			
			/* Menu Button Checks */
			
			if (!$('.header').isOnScreen() && scrollPosition >= ( $('.header').outerHeight() + 2 ) ) {
		
			$('.header').css({top: scrollPosition_calc});
			nav_pos_top = $('.header').position().top;
	
			}
    	
    		if (!$('.header').isOnScreen() && nav_pos_top > 0) {
			
				if ($('#show-main-menu').hasClass('btn-hidden')) {
				
					$('#show-main-menu').removeClass('btn-hidden').addClass('btn-visible');
			
					}
	
			}
						
		}
		
		if (scrollPosition == 0 && (home_carousel.length == 1) ) {
		
			$('#home-carousel').carousel('cycle');
		
		}
		
		if (scrollPosition >= banner_pos) {
			
			if ($('#claim-form-btn').hasClass('btn-hidden')) {
				$('#claim-form-btn').removeClass('btn-hidden').addClass('btn-visible');
			}
			
		}
    
    } else {
	   
	//$('.header').animate({top: scrollPosition+"px"}); 
		
		if (!$('.header').isOnScreen() && $('.page-wrapper').offset().top <= 0 ) {
		
			$('.header').css({top: scrollPosition -  ($('.header').outerHeight() + 2)});
			nav_pos_top = $('.header').position().top;
			
			//console.log($('.header').isOnScreen());
	
		}
		
		if (!$('.header').isOnScreen() && nav_pos_top > 0 ) {
			
			if ($('#show-main-menu').hasClass('btn-hidden')) {
				
			$('#show-main-menu').removeClass('btn-hidden').addClass('btn-visible');
			
			}
	
		}
	    
    }
    
    
});

$(window).on("scroll", function(e){

	window_pos = $(window).scrollTop();
	window_h = $(window).height();
	
	page_wrapper_pos = $('.page-wrapper').offset().top;
	nav_pos_top = $('.header').offset().top;
	nav_pos = $('.page-wrapper').offset().top + $('.header').outerHeight();
	
	//console.log( $('.header').isOnScreen() );
	
	if (nav_pos_top > 0 && $('.header').isOnScreen()) {
		
		$('.header').css({top: 0});

	}
	
	
	if ($('.header').isOnScreen()) {
		
		if ($('#show-main-menu').hasClass('btn-visible')) {
			
		$('#show-main-menu').removeClass('btn-visible').addClass('btn-hidden');
		
		}

	}
	
	if ($('body').attr("id") == "home") {
	
	home_carousel = $('#home-carousel');
	header_pos = $('#home-page-content').offset().top;
	banner_pos = header_pos + $('#page-banner-lrg').height();
	
		if (window_pos <= header_pos && (home_carousel.length == 1) ) {
			
			if ($('#claim-form-wrap').hasClass('fixed home-screen-disabled')) {
					$('#claim-form-wrap').removeClass('fixed home-screen-disabled').addClass('abs home-screen-enabled');
				}
				
			if ($('#side-icon-links').hasClass('icons-visible')) {
		
				$('#side-icon-links').removeClass('icons-visible').addClass('icons-hidden');
		
			}
			
		}
		
		if (window_pos <= banner_pos ) {
		
			if ($('#claim-form-btn').hasClass('btn-visible')) {
				$('#claim-form-btn').removeClass('btn-visible').addClass('btn-hidden');
			}
		
		}
	
	}
    
});

$(window).load(function() {
	
});

	
})(window.jQuery);