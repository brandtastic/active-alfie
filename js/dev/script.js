$(document).ready(function() {
	$('.container').fitVids();
	$('.mob-nav-trigger').click(function(e) {
		e.preventDefault();
		$('nav.mobile-nav').slideToggle();
	});

	$(function() {
		//Search for optgroup- items
    	var foundin = $('option:contains("optgroup-")');
    		$.each(foundin, function(value) {

    			//remove optgroup prefix
    			var updated = $(this).val().replace("optgroup-","");
    			//replace items with optgroup tag
    			var replaced = $(this).replaceWith('<optgroup label="'+ updated +'">');
    		});
    	var foundin2 = $('option:contains("endoptgroup")');
    		$.each(foundin2, function(value) {
    			//replace items with </optgroup> tag
    			var replaced = $(this).replaceWith('</optgroup>');

    	});
	});
	
    $('.form select').prepend('<option disabled selected>Activity Type</option>');

    $('#scroll-trigger').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".holding-signup").offset().top
        }, 500);
    })

});
