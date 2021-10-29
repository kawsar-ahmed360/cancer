

(function ($) {
	'use strict';
	jQuery(document).on('ready', function () {
		jQuery('.mean-menu').meanmenu({
			meanScreenWidth: "991"
		});
		jQuery(window).on('load', function () {
			$('.preloader').fadeOut();
		});
		$(window).on('scroll', function () {
			if ($(this).scrollTop() > 150) {
				$('.navbar-area').addClass("is-sticky");
			} else {
				$('.navbar-area').removeClass("is-sticky");
			}
		});
		$('.campaing-wrap').owlCarousel({
			loop: true,
			nav: false,
			autoplay: true,
			autoplayHoverPause: true,
			mouseDrag: true,
			center: false,
			dots: true,
			smartSpeed: 1500,
			responsive: {
				0: {
					items: 1,
				},
				576: {
					items: 2,
					margin: 10,
				},
				992: {
					items: 3,
				},
				1200: {
					items: 3,
				}
			}
		});
		$('.project-slider').owlCarousel({
			loop: true,
			nav: false,
			autoplay: true,
			autoplayHoverPause: true,
			mouseDrag: true,
			center: false,
			dots: true,
			smartSpeed: 1500,
			margin: 20,
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 3
				},
				992: {
					items: 3
				},
				1200: {
					items: 3
				}
			}
		});
		$('.testimonial-wrap').owlCarousel({
			loop: true,
			nav: false,
			autoplay: true,
			autoplayHoverPause: true,
			mouseDrag: true,
			dots: false,
			smartSpeed: 1500,
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 2
				},
				992: {
					items: 3
				},
				1200: {
					items: 3
				}
			}
		});
		$('.partner-wrap').owlCarousel({
			loop: true,
			nav: false,
			autoplay: true,
			autoplayHoverPause: true,
			mouseDrag: true,
			center: true,
			margin: 20,
			dots: false,
			smartSpeed: 1500,
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 3
				},
				992: {
					items: 4
				},
				1200: {
					items: 5
				}
			}
		});
		$(window).on('scroll', function () {
			var scrolled = $(window).scrollTop();
			if (scrolled > 300) $('.go-top').addClass('active');
			if (scrolled < 300) $('.go-top').removeClass('active');
		});
		$('.go-top').on('click', function () {
			$("html, body").animate({
				scrollTop: "0"
			}, 500);
		});
		$('.accordion').find('.accordion-title').on('click', function () {
			$(this).toggleClass('active');
			$(this).next().slideToggle('fast');
			$('.accordion-content').not($(this).next()).slideUp('fast');
			$('.accordion-title').not($(this)).removeClass('active');
		});

		function makeTimer() {
			var endTime = new Date("november  30, 2019 17:00:00 PDT");
			var endTime = (Date.parse(endTime)) / 1000;
			var now = new Date();
			var now = (Date.parse(now) / 1000);
			var timeLeft = endTime - now;
			var days = Math.floor(timeLeft / 86400);
			var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
			var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
			var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
			if (hours < "10") {
				hours = "0" + hours;
			}
			if (minutes < "10") {
				minutes = "0" + minutes;
			}
			if (seconds < "10") {
				seconds = "0" + seconds;
			}
			$("#days").html(days + "<span>Days</span>");
			$("#hours").html(hours + "<span>Hours</span>");
			$("#minutes").html(minutes + "<span>Minutes</span>");
			$("#seconds").html(seconds + "<span>Seconds</span>");
		}
		setInterval(function () {
			makeTimer();
		}, 300);
		$('a[data-imagelightbox="video"]').imageLightbox({
			activity: true,
			overlay: true,
			button: true,
		});
		$('.odometer').appear(function (e) {
			var odo = $(".odometer");
			odo.each(function () {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});
		$('.hero-slider').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			mouseDrag: false,
			items: 1,
			dots: true,
			autoHeight: true,
			autoplay: true,
			smartSpeed: 1500,
			autoplayHoverPause: true,
		});
		$(".hero-slider-area").on("translate.owl.carousel", function () {
			$(".hero-slider-text span, .hero-slider-text h1, .hero-slider-text .typewrite").removeClass("animated fadeInUp").css("opacity", "0");
			$(".hero-slider-text p").removeClass("animated fadeInDown").css("opacity", "0");
			$(".hero-slider-text a").removeClass("animated fadeInDown").css("opacity", "0");
		});
		$(".hero-slider-area").on("translated.owl.carousel", function () {
			$(".hero-slider-text span, .hero-slider-text h1, .hero-slider-text .typewrite").addClass("animated fadeInUp").css("opacity", "1");
			$(".hero-slider-text p").addClass("animated fadeInDown").css("opacity", "1");
			$(".hero-slider-text a").addClass("animated fadeInDown").css("opacity", "1");
		});
		$('.close-btn').on('click', function () {
			$('.search-overlay').fadeOut();
			$('.search-btn').show();
			$('.close-btn').removeClass('active');
		});
		$('.search-btn').on('click', function () {
			$(this).hide();
			$('.search-overlay').fadeIn();
			$('.close-btn').addClass('active');
		});
		$('#Container').mixItUp();
	});
})(jQuery);

