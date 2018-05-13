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
