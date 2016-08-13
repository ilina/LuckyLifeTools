//footer year
    var currentYear = (new Date).getFullYear();
    $("#year").text( (new Date).getFullYear() );
	
//smooth jump to	
	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html, body').animate({
			  scrollTop: target.offset().top
			}, 400);
			return false;
		  }
		}
	  });
	});

//split h3 to two lines media query
    $('#printables h3').each(function() {
        var word = $(this).html();
        var index = word.indexOf(' ');
        if(index == -1) {
            index = word.length;
        }
        $(this).html('<span class="first-word">' + word.substring(0, index) + '</span>' + word.substring(index, word.length));
    });
	
	
//sticky header - retired?	
	$(function(){	
		var cubuk_seviye = $(document).scrollTop();
		var header_yuksekligi = $('.yapiskan').outerHeight();
	
		$(window).scroll(function() {
			var kaydirma_cubugu = $(document).scrollTop();
	
			if (kaydirma_cubugu > header_yuksekligi){$('.yapiskan').addClass('gizle');} 
			else {$('.yapiskan').removeClass('gizle');}
	
			if (kaydirma_cubugu > cubuk_seviye){$('.yapiskan').removeClass('sabit');} 
			else {$('.yapiskan').addClass('sabit');}				
	
			cubuk_seviye = $(document).scrollTop();	
		 });
	});
	
	
	
//sticky header	
	$(window).scroll(function () {
		if( $(window).scrollTop() > $('#headerfix').offset().top && !($('#headerfix').hasClass('fixate'))){
		  $('#headerfix').addClass('fixate');
		} else if ($(window).scrollTop() == 0){
		  $('#headerfix').removeClass('fixate');
		}
	});	
	
	
	
// scroll to top
	$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});

//scroll to top button
jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 300,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});

$(document).ready(function() {
	// submit the logout form when the logout button is clicked
	$('.logout-button').click(function() {
		$('.logout-form').submit();
		return false;
	});
	
});