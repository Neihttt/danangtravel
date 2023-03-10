//back-to-top
jQuery(document).ready(function($){
// browser window scroll (in pixels) after which the "back to top" link is shown
var offset = 300,
//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
offset_opacity = 1200,
//duration of the top scrolling animation (in ms)
scroll_top_duration = 700,
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

// Hide Header on on scroll down
$(document).ready(function () {
	var previousScroll = 0;
	$(window).scroll(function () {
		var currentScroll = $(this).scrollTop();
		if (currentScroll < 100) {
			showTopNav();
		} else if (currentScroll > 0 && currentScroll < $(document).height() - $(window).height()) {
			if (currentScroll > previousScroll) {
				hideNav();
			} else {
				showNav();
			}
			previousScroll = currentScroll;
		}
	});

	function hideNav() {
		$(".navbar").removeClass("is-visible").addClass("is-hidden");
	}

	function showNav() {
		$(".navbar").removeClass("is-hidden").addClass("is-visible").addClass("scrolling");
	}
});

//slide post
$(document).ready(function() {
	    $("#news-slider").owlCarousel({
		        items:3,
		        itemsDesktop:[1199,3],
		        itemsDesktopSmall:[1000,2],
		        itemsMobile : [650,1],
		        navigationText:false,
		        autoPlay:true
	    });
});

//fixed sidebar
$(document).ready(function() {
	var $window = $(window);  
	var $sidebar = $(".sidebar-facebook"); 
	var $sidebarHeight = $sidebar.innerHeight();   
	var $footerOffsetTop = $(".footer").offset().top; 
	var $sidebarOffset = $sidebar.offset();
	$window.scroll(function() {
		if($window.scrollTop() > $sidebarOffset.top) {
			$sidebar.addClass("fixed");   
		} else {
			$sidebar.removeClass("fixed");   
		}    
		if($window.scrollTop() + $sidebarHeight > $footerOffsetTop) {
			$sidebar.css({"top" : -($window.scrollTop() + $sidebarHeight - $footerOffsetTop)});        
		} else {
			$sidebar.css({"top": "0",});  
		}    
	});   


});

//slide swiper
$(document).ready(function() {
	var swiper = new Swiper('.swiper-container', {
		effect: 'coverflow',
		grabCursor: true,
		centeredSlides: true,
		slidesPerView: 'auto',
		autoplay: {
			delay: 3000,
		},
		preloadImages: true,
		keyboard: {
			enabled: true,
			onlyInViewport: false,
		},
		coverflowEffect: {
			rotate: 80,
			stretch: 0,
			depth: 100,
			modifier: 2,
			slideShadows: true,
		},

	});
});
//check null search
function check_search(){
	var search = document.getElementById("search").value;
	if(search == ""){
		alert("Vui lòng nhập từ khóa cần tìm kiếm :)");
		return false;
	} 
	else {
		alert("WEBSITE ĐANG TRONG QUÁ TRÌNH PHÁT TRIỂN!");
		return true;
	}
}

function openInNewTab(url) {
	window.open(url, '_blank'); 
	window.focus(); 
	return false;
}

//contact
$(document).ready(function() {
	$('#contact-form').submit(function(e) {
		var name    = document.getElementById('exampleFormControlInput1');
		var email   = document.getElementById('exampleFormControlInput2');
		var message = document.getElementById('exampleFormControlTextarea1');

		if (!name.value || !email.value || !message.value) {
			alertify.error('VUI LÒNG NHẬP ĐẦY ĐỦ THÔNG TIN !'); 
			return false;
		} else {
			$.ajax({
				method: 'POST',
				url: '//formspree.io/xnqgakab',
				data: $('#contact-form').serialize(),
				datatype: 'json'
			});
			e.preventDefault();
			$(this).get(0).reset();
			alertify.success('GỬI THÀNH CÔNG! VUI LÒNG CHỜ PHẢN HỒI TỪ ADMIN');
		}
	});
});