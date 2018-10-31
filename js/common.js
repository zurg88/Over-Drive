$(function() {
	// WOW.js
	new WOW().init();

	// Scroll menu

	$(window).scroll(function(event){
		if($(this).scrollTop() < 500){
			$('.main-menu').removeClass('main-menu-scroll');
			
		} else {
			$('.main-menu').addClass('main-menu-scroll');
		}
	});

	// Backgraund Header Slider
	$('.slider').slick({
			autoplay: true,
			autoplaySpeed: 3000,
			fade: true,
			pauseOnHover: false,
			easing: 'swing'
	});

 	// car-brands-slider

	$('.car-brands-slider').slick({
		autoplay: true,
		autoplaySpeed: 2000,
		slidesToShow: 5,
		pauseOnHover: false,
		easing: 'swing'
	});

	// Mobile Burger Menu

	$('.mobile-menu-toggle').click(function() {
		$('.mobile-menu-elem').toggleClass('active-mobile-menu');
		$('.menu-item').toggle();
	});

	$('.menu-item').click(function(){
		$('.mobile-menu-elem').toggleClass('active-mobile-menu');
		$('.menu-item').toggle();
	})

	// Repair price height
	var flag = 0;
	
	$('#show-more').click(function(){
		flag++;
		$('.car-repair-section').toggleClass('car-repair-section-show');
		$('.show-more').toggleClass('show-button-down');
		$(this).text('Свернуть');
		$(this).toggleClass('show-more-button-show');

		if(flag % 2 == 0) {
			$(this).html('показать больше <i class="show-more-button-icon icon-double-arrow-down"></i>');
		}
	});

	// Mobile show price 

	var buttonsShowPrice = $('.mobile-show-price-button');
	var buttonFlag = 0;

	for (let i = 0; i < buttonsShowPrice.length; i++) {
		var buttonFlag = 0;
		buttonsShowPrice[i].addEventListener('click', function() {
		buttonFlag++;
		var button = this;
		var parent = this.parentElement;
		var parentrevElementParent = parent.previousElementSibling;
		$(parentrevElementParent).toggle(400);
		$(this).text('Свернуть');
		
		if(buttonFlag % 2 == 0) {
			$(this).text('Развернуть цены');
		}
		} );
		
	};

});