jQuery( document ).ready(function( $ ) {
	// Inside of this function, $() will work as an alias for jQuery()
	// and other libraries also using $ will not be accessible under this shortcut
	// https://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers

	// Touch Device Detection
	var isTouchDevice = 'ontouchstart' in document.documentElement;
	if( isTouchDevice ) {
		$('body').removeClass('no-touch');
	}

	// Browser detection via Bowser (https://github.com/lancedikson/bowser) - add detection as needed
	if( bowser.msie && bowser.version == 11 ) {
		$('body').addClass('ie-11');
	} else if ( bowser.safari ) {
		$('body').addClass('safari');
	}

	// Nifty Nav
  $('#nifty-nav-toggle').niftyNav();

	// Mobile Nav submenu
	// Nifty click actions for sub menus
	$('.nifty-panel .menu-item-has-children a').click(function(){
	  $(this).toggleClass('open');
	});

	$('.nifty-panel .menu-item-has-children').click(function(){
		$(this).toggleClass('open');
		$(this).find('.sub-menu').first().slideToggle();
	});

	// Social Menu
	$('.menu-social li a').text('');

	// Smooth Anchor Link Scrolling
	$('.anchor-scroll').on('click', function(e) {
		e.preventDefault();

		// Store hash
    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top,
    }, 1200, function(){

      window.location.hash = hash;
    });
	});

	// AOS animations
	AOS.init({
    duration: 400,
		offset: -100,
    easing: 'ease-in-out-quart',
    delay: 200,
		disable: 'mobile',
		once: 'true',
  });

	// Search Bar in Header
	$('.header-search-toggle').click(function() {
		$('#modal-search').slideToggle('fast');
	});

	// Fix Nav Bar
	$(window).scroll(function () {
		//set var navHeight = "" to height of navigation bar
		var navHeight = 50;
		if ($(window).scrollTop() > navHeight) {
			$('.header').addClass('header--fixed');
		}
		if ($(window).scrollTop() < (navHeight + 1)) {
			$('.header').removeClass('header--fixed');
		}
	});

	//Landing Page Slide Down Navbar
		$(window).scroll(function(){
		if($(document).scrollTop() > 100) {
			$('.show-custom-navigation-on-scroll').fadeIn('200');
		}
		else {
		$('.show-custom-navigation-on-scroll').fadeOut('200');
		}
	});

	//Dropdown accordion
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		  acc[i].addEventListener("click", function() {
		    this.classList.toggle("active");
		    var panel = this.nextElementSibling;
		    if (panel.style.maxHeight){
		      panel.style.maxHeight = null;
		    } else {
		      panel.style.maxHeight = panel.scrollHeight + "px";
		    }
		  });
		}

});
