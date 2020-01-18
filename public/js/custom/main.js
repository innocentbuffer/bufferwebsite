$(function(){
    setTimeout(function(){
        $('.loader-section').hide();
        $('.main-section').show();
    }, 500);

    if(window.pageYOffset > 7 ){
        $(".scrollup-hide").addClass("scrollup");
    }else{
        $(".scrollup-hide").removeClass("scrollup");
    }

    $('.scrollup-hide').on('click', scrollToTop);

    $('.slick-portfolio').slick({
        arrows: true,
		prevArrow: "<i class='fas fa-chevron-left left-arrow'></i>",
		nextArrow: "<i class='fas fa-chevron-right right-arrow'></i>",
		infinite: true,
		lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					dots: false
				}
    		},
			{
				breakpoint: 800,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					dots: false
				}
    		},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: false
				}
    		}

			]
    });
});

window.addEventListener("scroll", showScrollButton);

function showScrollButton(event){
    if(window.pageYOffset > 7 ){
        $(".scrollup-hide").addClass("scrollup");
        $("#frontend-head").addClass("head-static");
        $(".body-header").addClass('body-header-opacity');
        $(".buffer-bold li a").removeClass("text-white");
        $("#salutelogo").hide();
        $("#navlogo").show();
    }else if(window.pageYOffset == 0 ){
        $(".scrollup-hide").removeClass("scrollup");
        $("#frontend-head").removeClass("head-static");
        $(".body-header").removeClass('body-header-opacity');
        $(".buffer-bold li a").addClass("text-white");
        $("#salutelogo").show();
        $("#navlogo").hide();
    }
   
}

function scrollToTop(event){
    event.preventDefault();
    var body = $('html, body');
    body.stop().animate({scrollTop:0}, 900, 'swing');
}