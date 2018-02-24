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

});
