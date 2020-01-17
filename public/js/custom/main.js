$(function(){
    setTimeout(function(){
        $('.loader-section').hide();
        $('.main-section').show();
    }, 500);

    if(window.pageYOffset > 45 ){
        $(".scrollup-hide").addClass("scrollup");
    }else{
        $(".scrollup-hide").removeClass("scrollup");
    }

    $('.scrollup-hide').on('click', scrollToTop);

    
});

window.addEventListener("scroll", showScrollButton);

function showScrollButton(event){
    if(window.pageYOffset > 45 ){
        $(".scrollup-hide").addClass("scrollup");
        $(".body-header").addClass('body-header-opacity');
    }else if(window.pageYOffset == 0 ){
        $(".scrollup-hide").removeClass("scrollup");
        $(".body-header").removeClass('body-header-opacity');
    }
   
}

function scrollToTop(event){
    event.preventDefault();
    var body = $('html, body');
    body.stop().animate({scrollTop:0}, 900, 'swing');
}