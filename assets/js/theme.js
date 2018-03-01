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

	// Smooth Anchor Link Scrolling
	$('.anchor-scroll').on('click', function(e) {
		e.preventDefault();

		// Store hash
    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top,
    }, 1000, function(){

      window.location.hash = hash;
    });
	});

	// Page Transitions
	$('#menu-primary > li > a').addClass('animsition-link');

  $(".animsition").animsition({
    inClass: 'fade-in-right-lg',
    outClass: 'fade-out-left-lg',
    inDuration: 1000,
    outDuration: 800,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: false,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });

	// AOS animations
	AOS.init({
      duration: 600,
			offset: -100,
      easing: 'ease-in-out-quart',
      delay: 200,
			disable: 'mobile',
			once: 'true',
    });

	function explode(){
	  $('.work-page > div > ol > li').removeAttr('data-aos');
	}
	setTimeout(explode, 1300);

	// Work (Posts) Page
	$('.post-title:first-of-type').addClass('active');
	$('.image-wrap:first-of-type').addClass('slide');

	$('.post-title').click(function() {
		$('.post-title').removeClass('active');
		$('.image-wrap').removeClass('slide');
		$(this).addClass('active');

		var id = $(this).attr('id')

		$('.image-wrap[id='+id+']').addClass('slide');
	})

	// Big laptop
	$('.big-laptop').click(function(){
		$('.laptop').css({'transform':'scale(1.5)','left':'10%'});
	})

	// Slick Slider
  // iPhone
  $('.iphone-slider').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    adaptiveHeight: true,
		fade: true,
    dots: true,
		arrows: false,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows: false,
        },
      },
    ],
  });

});
