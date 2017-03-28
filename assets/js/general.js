$( window ).load(function() {
	heroSize();
	$('hr').on('click', function() {
		var div = $(this).next();
		smoothScroll(div, 0)
	})
	$('body').css('opacity', 1)
	if ($(window).width() > 990) {
		
	} else {
		
	}

})

$( document).ready(function() {

})

$( window ).resize(function() {

	if ($(window).width() > 630) {
		heroSize()
	} else {
		
	}	
})

$(document).ajaxComplete( function() {
	
})


function squareMaker(selector) {
	var width = selector.width();
	selector.css('height', width);
	if ($(window).width() > 1150) {
		$('.contact.offset-cont .side-cont').css('height', width);
	}
}

function divEqualizer(divSelector) {
	var maxHeight = 0;
	divSelector.each(function(){
   		if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
	});
	divSelector.height(maxHeight);
}

function centerBlogImages() {
	$('img.aligncenter').parent().css('text-align','center')
}

function smoothScroll(element, padding) {
	$('html, body').animate({
        scrollTop: element.offset().top - padding
    }, 600);
}

function heroSize() {
	var winH = $(window).height();
	$('.hero').css('height', winH);
}



