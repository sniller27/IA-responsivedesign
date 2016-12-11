$(document).ready(function(){

	//scroll animation

	//home
	$("#gohome").click(function(e) {

	$('#bgvid').animatescroll();
	$('#myTopnav').removeClass('responsive');

	});

	//facts
	$("#gofacts").click(function(e) {

	$('#factstop').animatescroll();
	$('#myTopnav').removeClass('responsive');

	});

	//events
	$("#goevents").click(function(e) {

	$('#eventstop').animatescroll();
	$('#myTopnav').removeClass('responsive');

	});

	//how to
	$("#gohowto").click(function(e) {

	$('#howtostop').animatescroll();
	$('#myTopnav').removeClass('responsive');

	});

	//contact
	$("#gocontact").click(function(e) {

	$('#contactstop').animatescroll();
	$('#myTopnav').removeClass('responsive');

	});


	//show and hide menu background color
	$(window).scroll(function () {
	    var $this = $(this),
	        $header = $('header');
	    if ($this.scrollTop() > 0) {
	       $header.addClass('header-bg');
	    } else {

	    	if (!$("#myTopnav").hasClass("responsive")) {
	       		$header.removeClass('header-bg');
	    	}
	    }
	});

})