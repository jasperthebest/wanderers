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

		/* Outer Click */
		$('body').click(function(){
			$('.popup').fadeOut();
		});

		$('.skyfallpopup .middleflex > div img').click(function(e){
			e.stopImmediatePropagation();
		})

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

		/* Sky Land Sea Popup */
		$('.landimgs div').click(function(){
			$('.skyfallpopup img').attr('src', $(this).find('img').data('bigimg'));
			$('.skyfallpopup').fadeIn();
			return false;
		});

		/* Alcohol Percentage */
		var errnum = 0;
		$('.contactform .formcntfield .txtbox').focusout(function(){
			if($(this).val().length == 0) {
				errnum++;
				$(this).addClass('error');
			} else {
				errnum--;
				$(this).removeClass('error');
			}
		});

		$('.submitbloodsample').click(function(){
			if(errnum <= 0) {
				var alc = $('#alcoholoz').val();
				var wgt = $('#weightpd').val();
				var tim = $('#timehr').val();
				var per = $('#alcoholper').val();
				var result = per * alc * 0.033814 * 0.823 * 0.62 / (16 * wgt * 2.2046) - 0.015 * tim;
				//var result = (alc * 5.14 / wgt * 0.62) - .015 * tim;
				if(result < 0) {
					$('.middlealcohol h5').addClass('result').text(0 + ' %');
				} else {
					$('.middlealcohol h5').addClass('result').text(result.toFixed(2) + ' %');
				}
				
			}
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

		/* Tap action */
		$('.poptabs').click(function(){
			$(this).addClass('active');
		});

		var userAgent = window.navigator.userAgent;
		if (userAgent.match(/iPad/i) || userAgent.match(/iPhone/i)) {
			var anime = document.querySelector('.poptabs');
			anime.style.display = "none";
		}

		/* Cookie */
		function cookie() {
			var name = "bannertab=";
			var decodedCookie = decodeURIComponent(document.cookie);
		    var ca = decodedCookie.split(';');
		    for(var i = 0; i <ca.length; i++) {
		        var c = ca[i];
		        while (c.charAt(0) == ' ') {
		            c = c.substring(1);
		        }
		        if (c.indexOf(name) == 0) {
		            //return c.substring(name.length, c.length);
		            $('.poptabs').hide();
		            console.log("hello");
		        } else {
		        	console.log("world");
		        	var d = new Date();
					var cname = "bannertab";
					var cvalue = "true";
				    d.setTime(d.getTime() + (1*24*60*60*1000));
				    var expires = "expires="+ d.toUTCString();
				    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		        }
		    }
		}
		cookie();

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
