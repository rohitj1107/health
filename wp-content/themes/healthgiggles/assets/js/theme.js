

(function ($) {
	"use strict";
	
	//sticky header
	window.onscroll = function() {myFunction()};

	var header = document.getElementById("sticky-header");
	var sticky = header.offsetTop;

	function myFunction() {
	  if (window.pageYOffset > sticky) {
		header.classList.add("sticky");
	  } else {
		header.classList.remove("sticky");
	  }
	} 
	
	
	
	// Mobile menu overlay
	
	$(".toggle-menu").on("click", function() {
		var $target = $($(this).attr("href"));
		if ($target.length) {
			$target.toggleClass("opened");
			$(".sidebar-overlay").toggleClass("opened");
			$("body").toggleClass("menu-opened");
			$(".sidebar-overlay").attr("data-reff", $(this).attr("href"));
		}
	});
	
	$(".sidebar-overlay").on("click", function() {
		var $target = $($(this).attr("data-reff"));
		if ($target.length) {
			$target.removeClass("opened");
			$("body").removeClass("menu-opened");
			$(this).removeClass("opened");
		}
	});
	
	// Mobile Menu
	
	$('.menu-toggle').on("click", function() {
		$(this).parents('li').children('.mobile-submenu-wrapper').slideToggle(300);
		return false;
	});
	
	
	//swiper
	
	var swiper = new Swiper('.single-blog-swiper', {
			  pagination: {
				el: '.blog-swiper-pagination',
				clickable: true
			  },
			  navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			  },
			});
	
	const mySwiper = new Swiper ('.video-section-swiper', {
		slidesPerView: 4,
		speed: 400,
		spaceBetween: 100,
		initialSlide: 0,
		//truewrapper adoptsheight of active slide
		autoHeight: false,
		// Optional parameters
		direction: 'horizontal',
		loop: true,
		// delay between transitions in ms
		autoplay: 5000,
		autoplayStopOnLast: false, // loop false also
	
		pagination: {
			el: '.swiper-pagination',
			clickable: true
		},
		
		effect: 'slide',
		// Distance between slides in px.
		spaceBetween: 20,
		//
		//
		centeredSlides: true,
		//
		slidesOffsetBefore: 0,
		//
		grabCursor: true,
		breakpoints: {
			500: {
			slidesPerView: 2
			},
			700: {
			slidesPerView: 4
			}
			}
	  }) 
		  
	
	
	// Testimonial Carousel
	
	if($('#testimonial_slider').length > 0 ){
		$("#testimonial_slider").owlCarousel({
			autoPlay: false,
			margin: 30,
			dots: true,
			pagination : false,
			loop: true,
			navText :["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			responsive: {
			  0: {
				items: 1
			  },
			  768: {
				items: 2
			  },
			  992: {
				items: 2
			  }
			}
		});
	}

	
	// Header menu dropdown

	if($('.header .dropdown').length > 0 ){
		$('.header .dropdown').hover(
			function() {
				$(this).addClass('show').attr('aria-expanded',"true");
				$(this).find('.dropdown-menu').addClass('show');
			},
			function() {
				$(this).removeClass('show').attr('aria-expanded',"false");
				$(this).find('.dropdown-menu').removeClass('show');
		});
	}
	

	
	//wow js
	
	var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null,    // optional scroll container selector, otherwise use window,
    resetAnimation: true,     // reset animation on end (default is true)
  }
);
wow.init();
	


//truncate slide
$(document).ready(function() {
	(function() {
	  var showChar = 200;
	  var ellipsestext = "...";
  
	  $(".truncate").each(function() {
		var content = $(this).html();
		if (content.length > showChar) {
		  var c = content.substr(0, showChar);
		  var h = content;
		  var html =
			'<div class="truncate-text" style="display:block">' +
			c +
			'<span class="moreellipses">' +
			ellipsestext +
			'&nbsp;&nbsp;<a href="" class="moreless more">more</a></span></span></div><div class="truncate-text" style="display:none">' +
			h +
			'<a href="" class="moreless less">Less</a></span></div>';
  
		  $(this).html(html);
		}
	  });
  
	  $(".moreless").click(function() {
		var thisEl = $(this);
		var cT = thisEl.closest(".truncate-text");
		var tX = ".truncate-text";
  
		if (thisEl.hasClass("less")) {
		  cT.prev(tX).toggle();
		  cT.slideToggle();
		} else {
		  cT.toggle();
		  cT.next(tX).fadeToggle();
		}
		return false;
	  });
	  /* end iffe */
	})();
  
	/* end ready */
  });



  //reply toggle

	$("#reply-toggle").click(function(){
	  $(".expand-reply").slideToggle('slow');
	});
  
	$("#reply2-toggle").click(function(){
	  $(".nested-comment").slideToggle('slow');
	});
  
	$("#reply3-toggle").click(function(){
	  $(".expand-reply2").slideToggle('slow');
	});
  
	$("#reply4-toggle").click(function(){
	  $(".nested-comment2").slideToggle('slow');
	});
  
	$("#reply5-toggle").click(function(){
	  $(".expand-reply3").slideToggle('slow');
	});
  
	$("#reply6-toggle").click(function(){
	  $(".nested-comment3").slideToggle('slow');
	});
  
	$(".reply-button").click(function(){
	  $(".reply-box").slideToggle('slow');
	});
  
	$(".reply-button2").click(function(){
	  $(".reply-box2").slideToggle('slow');
	});
  
	$(".reply-button3").click(function(){
	  $(".reply-box3").slideToggle('slow');
	});

	


	//seemore modal
	var modal = document.getElementById('myModal');
	var btn = document.getElementById("myBtn");
	var span = document.getElementsByClassName("close")[0];
	btn.onclick = function () {
	modal.style.display = "block";
	modal.style.display = "block";
	}
	span.onclick = function () {
	modal.style.display = "none";
	}
	window.onclick = function (event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
	}


	//like button
	const likeBtn = document.querySelector(".like__btn");
	let likeIcon = document.querySelector("#icon"),
	  count = document.querySelector("#count");
	
	let clicked = false;
	
	
	likeBtn.addEventListener("click", () => {
	  if (!clicked) {
		clicked = true;
		likeIcon.innerHTML = `<i class="fas fa-thumbs-up"></i>`;
		count.textContent++;
	  } else {
		clicked = false;
		likeIcon.innerHTML = `<i class="far fa-thumbs-up"></i>`;
		count.textContent--;
	  }
	});
	
	
	

	
})(jQuery);


