$(function(){

    setTimeout(function(){
        $('.loader-section').hide();
        $('.main-section').show();
    }, 500);

    var currentSlide = $('.banner-slide-item.banner-img-active');
    var contentSlide = $('.banner-slide-content.banner-content-active');
    
    setInterval(() => {
       
        var nextSlide = currentSlide.next();
        currentSlide.fadeOut(500).removeClass('banner-img-active');
        nextSlide.fadeIn(6000).addClass('banner-img-active');
        currentSlide = $('.banner-slide-item.banner-img-active');

        if(nextSlide.length == 0){
            $('.banner-slide-item').first().fadeIn("6000").addClass('banner-img-active');
        }
    }, 6000);

    setInterval(() => {
        
        var contentnextSlide = contentSlide.next();
        contentSlide.fadeOut(500).removeClass('banner-content-active');
        contentnextSlide.fadeIn(6000).addClass('banner-content-active');
        contentSlide = $('.banner-slide-content.banner-content-active');

        if(contentnextSlide.length == 0){
            $('.banner-slide-content').first().fadeIn("6000").addClass('banner-content-active');
        }
    }, 6000);

    
    $(".trusted-item").hover(function(){
        $(".trusted-body").addClass('trusted-body-pos');
        $(".trusted-body").addClass('shadow-sm');
        $(".trusted-content").show();
    }, function(){
        $(".trusted-body").removeClass('trusted-body-pos');
        $(".trusted-body").removeClass('shadow-sm');
        $(".trusted-content").hide();
    });

   

    if(window.pageYOffset > 7 ){
        $(".scrollup-hide").addClass("scrollup");
    }else{
        $(".scrollup-hide").removeClass("scrollup");
    }

    $('.scrollup-hide').on('click', scrollToTop);

    
        var headings = $(".subsub");
        var divContent = $(".sub-solution-content");
        divContent.not(":first").hide();

        headings.on("mouseover", function(event) {
            var t = $(this);
            var content = event.target.textContent.toLowerCase().trim().replace(" ","");
            var idContent = "#"+content;
            var classContent = "."+content;
            var sub = "#sub"+content;
            if($(idContent).is(":visible")) {
                return;
            }
            
            divContent.hide();
            headings.removeClass('active');
            console.log(sub);
            $(sub).addClass('active');
            $(idContent).show();
            });
       
    
    $('.enquire').on('click', function(event){
        var heading = "";
        if(event.target.textContent == "CONTACT")
        {
            heading = " Contact Us";
        }else{
            heading = event.target.textContent;
        }
        
        $('.modal-title').text(heading);
        $("#myModal").modal()
    });


    $('.slick-portfolio').slick({
        arrows: true,
		prevArrow: "<i class='fas fa-chevron-left left-arrow'></i>",
		nextArrow: "<i class='fas fa-chevron-right right-arrow'></i>",
		infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 500,
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
    }else if(window.pageYOffset == 0 ){
        $(".scrollup-hide").removeClass("scrollup");
        $("#frontend-head").removeClass("head-static");
        $(".body-header").removeClass('body-header-opacity');
    }
   
}

document.getElementById('vid').play();

function scrollToTop(event){
    event.preventDefault();
    var body = $('html, body');
    body.stop().animate({scrollTop:0}, 900, 'swing');
}