jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,                            
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'                        
	});

});

function ecommerce_solution_menu_open() {
	window.ecommerce_solution_mobileMenu=true;
	jQuery(".menu-brand").addClass('show');
}
function ecommerce_solution_menu_close() {
	window.ecommerce_solution_mobileMenu=false;
	jQuery(".menu-brand").removeClass('show');
}

function ecommerce_solution_responsive_menu_open() {
	window.ecommerce_solution_mobileMenu=true;
	jQuery(".resp-menu").addClass('show');
}
function ecommerce_solution_responsive_menu_close() {
	window.ecommerce_solution_mobileMenu=false;
	jQuery(".resp-menu").removeClass('show');
}

jQuery(document).ready(function () {

	window.ecommerce_solution_currentfocus=null;
  	ecommerce_solution_checkfocusdElement();
	var ecommerce_solution_body = document.querySelector('body');
	ecommerce_solution_body.addEventListener('keyup', ecommerce_solution_check_tab_press);
	var ecommerce_solution_gotoHome = false;
	var ecommerce_solution_gotoClose = false;
	window.ecommerce_solution_mobileMenu=false;
 	function ecommerce_solution_checkfocusdElement(){
	 	if(window.ecommerce_solution_currentfocus=document.activeElement.className){
		 	window.ecommerce_solution_currentfocus=document.activeElement.className;
	 	}
 	}
	function ecommerce_solution_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.ecommerce_solution_mobileMenu){
			if (!e.shiftKey) {
				if(ecommerce_solution_gotoHome) {
					jQuery( ".menu-brand input.search-field" ).focus();
				}
			}
			if (jQuery("a.closebtn.responsive-menu").is(":focus")) {
				ecommerce_solution_gotoHome = true;
			} else {
				ecommerce_solution_gotoHome = false;
			}

		}else{

			if(window.ecommerce_solution_currentfocus=="mobiletoggle"){
				jQuery( "" ).focus();
			}
			}
		}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.ecommerce_solution_currentfocus=="header-search"){
				jQuery(".mobiletoggle").focus();
			}else{
				if(window.ecommerce_solution_mobileMenu){
				if(ecommerce_solution_gotoClose){
					jQuery("a.closebtn.responsive-menu").focus();
				}
				if (jQuery( ".menu-brand input.search-field" ).is(":focus")) {
					ecommerce_solution_gotoClose = true;
				} else {
					ecommerce_solution_gotoClose = false;
				}
			
			}else{

			if(window.ecommerce_solution_mobileMenu){
			}
			}

			}
		}
		}
	 	ecommerce_solution_checkfocusdElement();
	}

});

(function( $ ) {
	$(document).ready(function(){
		$(".product-cat").hide();
	    $(".border-cat button").click(function(){
	        $(".product-cat").toggle();
	    });
	});
})( jQuery );

// scroll
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
	    if (jQuery(this).scrollTop() > 0) {
	        jQuery('#scrollbutton').fadeIn();
	    } else {
	        jQuery('#scrollbutton').fadeOut();
	    }
	});
	jQuery(window).on("scroll", function () {
	   document.getElementById("scrollbutton").style.display = "block";
	});
	jQuery('#scrollbutton').click(function () {
	    jQuery("html, body").animate({
	        scrollTop: 0
	    }, 600);
	    return false;
	});
});

jQuery(function($){
	$(window).load(function() {
		$(".loader").delay(2000).fadeOut("slow");
	    $(".frame").delay(2000).fadeOut("slow");
	})
});

(function( $ ) {

	$(window).scroll(function(){
		var sticky = $('.sticky-header'),
		scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('fixed-header');
		else sticky.removeClass('fixed-header');
	});

})( jQuery );
