$(function() {
	$(".rslides").responsiveSlides({
		auto: true,
		speed: 1000,
		timeout: 8000
	});
	$(".solutions-carousel").jCarouselLite({
		btnNext: ".solutions-next",
		btnPrev: ".solutions-prev",
		visible: 4
	});
	$(window).on('scroll load', function(){
		var elem = $('footer'),
			flElem = $('.contact'),
			flElemHeight = flElem.height(),
			windowHeight = $(window).height(),
			docViewTop = $(window).scrollTop(),
			docViewBottom = docViewTop + windowHeight
			elemTop = $(elem).offset().top;
			// console.log(windowHeight);
			if (docViewBottom >= (elemTop + flElemHeight)) {
				$(flElem).css({
					'position': 'static'
				});
			}  else if (docViewBottom - elemTop < 0) {
				$(flElem).css({
					'position': 'fixed'
				})
			};
	});
	$('.arrow-wrap').on('click', function () {
		var target = $('.banner_h2').css('display') === 'block' ? $('.banner_h2') : $('.solutions-x2 h2');
		$('html, body').animate({
			scrollTop: $(target).offset().top
		}, 800);
	});
	$('.nav-toggle').on('click', function() {
		$('.menu-mobile-menu-container').slideToggle(200,'swing');
	});
	$('.mobile-menu .menu-item-has-children > a').on('click', function(event) {
		event.preventDefault();
		$(this).toggleClass('expanded');
		$(this).next('.sub-menu').slideToggle(200,'swing');
	});
	$(window).on('resize', function() {
		if ($(window).width() >= 1009){	
			$('.menu-mobile-menu-container').hide();

		}
	});				
});
