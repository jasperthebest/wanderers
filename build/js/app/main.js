	/* Build-in */

	/* Ready function */
	$(function() {
		/* Body Animate */
		$('body').animate({'opacity':1}, 1500);
		/* BG intro */
		$('[data-bg]').each(function(){
			var curBg = $(this).data('bg');
			$(this).css({'background-image':'url('+curBg+')'});
		});

		/* Mobile Menu */
		$('nav > ul > li').each(function() {
			if($(this).find('ul').length == 1) {
				$(this).find('> a').addClass('submenu');
			}
		});

		$('.nav-icon').click(function(){
			$('.nav-icon, nav').toggleClass('active');
		});

		$('.closedpop').click(function(){
			$(this).parents('.popup').fadeOut();
		});

		$('.threewanders > div a').click(function(){
			var openid = $(this).data('openid');
			$('#'+openid).fadeIn();
			return false;
		});

		/* Event Sliders */
		$('.showevtslide').slick({
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  dots: false,
		  arrows: true,
		  /* centerMode: false,
		  focusOnSelect: true, */
		  prevArrow: '<a href="javascript:void(0);" class="slick-prev slick-arrow"><i class="material-icons">chevron_left</i></a>',
		  nextArrow: '<a href="javascript:void(0);" class="slick-next slick-arrow"><i class="material-icons">chevron_right</i></a>',
		  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 2
		      }
		    },
		    {
		      breakpoint: 540,
		      settings: {
		        slidesToShow: 1
		      }
		    }]
		});

		/* Offer Sliders */
		$('.showofferslide').slick({
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  dots: false,
		  arrows: true,
		  /* centerMode: false,
		  focusOnSelect: true, */
		  prevArrow: '<a href="javascript:void(0);" class="slick-prev slick-arrow"><i class="material-icons">chevron_left</i></a>',
		  nextArrow: '<a href="javascript:void(0);" class="slick-next slick-arrow"><i class="material-icons">chevron_right</i></a>',
		  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 2
		      }
		    },
		    {
		      breakpoint: 540,
		      settings: {
		        slidesToShow: 1
		      }
		    }]
		});

		/* International Food Listing for mobile */
		$('.internatbroad').slick({
		  autoplay: true,
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  dots: false,
		  arrows: true,
		  /* centerMode: false,
		  focusOnSelect: true, */
		  prevArrow: '<a href="javascript:void(0);" class="slick-prev slick-arrow"><i class="material-icons">chevron_left</i></a>',
		  nextArrow: '<a href="javascript:void(0);" class="slick-next slick-arrow"><i class="material-icons">chevron_right</i></a>',
		});

		/* Scroll Animation */ 
		$('*[data-animated]').addClass('animated');
			function animated_contents() {
			$(".animated:appeared").each(function (i) {
				var $this    = $(this),
					animated = $(this).data('animated');
				setTimeout(function () {
					$this.addClass(animated);
				}, 70 * i);
			});
		}
		
		/* Init Function */
		animated_contents();
		$(window).scroll(function() {
			animated_contents();
		});
	});

	/* Scroll */
	$(window).scroll(function() {
		
	});
	
	/* Resize */
	$(window).resize(function(){

		/* Init Function */
	});


	/* Orientation  */
	$(window).on("orientationchange",function(){

		/* Init Function */
	});
