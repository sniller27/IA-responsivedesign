$(document).ready(function(){

	//scroll animation

	//home
	$("#gohome").click(function(e) {

	$('#bgvid').animatescroll();

	});

	//facts
	$("#gofacts").click(function(e) {

	$('#factstop').animatescroll();

	});

	//events
	$("#goevents").click(function(e) {

	$('#eventstop').animatescroll();

	});

	//how to
	$("#gohowto").click(function(e) {

	$('#howtostop').animatescroll();

	});

	//contact
	$("#gocontact").click(function(e) {

	$('#contactstop').animatescroll();

	});


	//show and hide menu background color
	$(window).scroll(function () {
	    var $this = $(this),
	        $header = $('header');
	    if ($this.scrollTop() > 0) {
	       $header.addClass('header-bg');
	    } else {
	       $header.removeClass('header-bg');
	    }
	});

})