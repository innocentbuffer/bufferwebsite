$(function(){  
    
    setTimeout(function(){
        $('.loader-section').hide();
        $('.main-section').show();
    }, 500);  

    
    

    $(".trusted-item").on('mouseover', function(event){
        var container = $(event.target).children().first();
        var containerText = container.children().last();
        container.addClass('trusted-body-pos');
        container.addClass('shadow-sm');
        containerText.show();
    });
    $(".trusted-item").on('mouseleave', function(event){
        var container = $(event.target).children().first();
        var containerText = container.children().last();
        console.log(event.target);
        containerText.hide();
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
        var qoute = "";
        if(event.target.dataset.qoute)
        {
            heading = "Get a qoute on " + event.target.dataset.qoute;
            qoute = event.target.dataset.qoute;
        }else if(event.target.textContent.toLowerCase() == "contact")
        {
            heading = " Contact Us";
            qoute = event.target.textContent;
        }else{
            heading = event.target.textContent;
            qoute = event.target.textContent;
        }

        console.log(qoute);
        $('#qoutetype').value = qoute;
        $('.modal-title').text(heading);
        $("#myModal").modal()
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

setInterval(()=>{

        $('#video1').fadeToggle();
        $('#video2').fadeToggle();

    if(document.getElementById('video1')){
        document.getElementById('vid1').play();
    }
    if(document.getElementById('video2')){
        document.getElementById('vid2').play();
    }
    
}, 20000);

if(document.getElementById('video1')){
    document.getElementById('vid1').play();
}

function scrollToTop(event){
    event.preventDefault();
    var body = $('html, body');
    body.stop().animate({scrollTop:0}, 900, 'swing');
}

tns({
    container: '.my-slider-text',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    controls:false,
    navAsThumbnails:false,
    nav:false,
    autoplayButtonOutput:false,
    autoplayTimeout: 20000
});


  ScrollReveal().reveal('.cardReveal');

  