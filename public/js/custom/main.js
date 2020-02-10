$(function(){  
    
    setTimeout(function(){
        $('.loader-section').hide();
        $('.main-section').show();
    }, 500);  
    
    $(".trusted-item").on('mouseover', function(event){
        var container = $(event.target).find('div');
        var containerText = container.children().last();
        container.addClass('trusted-body-pos');
        container.addClass('shadow-sm');
        containerText.show();
    });
    

    $(".trusted-content").on('mouseleave', function(event){
        var containerText = $(event.target);
        var container = containerText.parent();
        containerText.hide();
        container.removeClass('trusted-body-pos');
        container.removeClass('shadow-sm');
        console.log(event.target);
        
    });
    $(".trusted-img").on('mouseleave', function(event){
        var containerText = $(event.target).next();
        var container = containerText.parent();
        containerText.hide();
        container.removeClass('trusted-body-pos');
        container.removeClass('shadow-sm');
        console.log(event.target);
        
    });
    $(".trusted-body").on('mouseleave', function(event){
        var container = $(event.target);
        var containerText = $(event.target).find('p');
        container.removeClass('trusted-body-pos');
        container.removeClass('shadow-sm');
        containerText.hide();        
    });
    $(".trusted-item").on('mouseleave', function(event){
        var container = $(event.target).find('div');
        var containerText = container.children().last();
        container.removeClass('trusted-body-pos');
        container.removeClass('shadow-sm');
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
        if(event.target.dataset.qoute && event.target.dataset.qoute != "contact" && event.target.dataset.qoute != "support" && event.target.dataset.qoute != "sales" && event.target.dataset.qoute != "dev")
        {
            heading = "Get a qoute on " + event.target.dataset.qoute;
            qoute = event.target.dataset.qoute;
            $("#type-state").addClass("type-state");
            $("#email-state").removeClass("col-6");
            $("#email-state").addClass("col-12");
        }else if(event.target.dataset.qoute == "contact")
        {
            heading = " Contact Us";
            qoute = event.target.textContent;
            $("#type-state").addClass("type-state");
            $("#email-state").removeClass("col-6");
            $("#email-state").addClass("col-12");
        }else if(event.target.dataset.qoute == "support" || event.target.dataset.qoute == "sales" || event.target.dataset.qoute == "dev")
        {
            
            heading = event.target.textContent;
            qoute = event.target.textContent;
            $("#type-state").addClass("type-state");
            $("#email-state").removeClass("col-6");
            $("#email-state").addClass("col-12");
        }else{
            heading = event.target.textContent;
            qoute = event.target.textContent;
            $("#type-state").removeClass("type-state");
            $("#email-state").removeClass("col-12");
            $("#email-state").addClass("col-6");
        }

        
        $('#qoutetype').value = qoute;
        $('.modal-title').text(heading);
        $("#myModal").modal()
    });

    $("#smsidebar").on("click", openNav);

    $(".sidenavsolution").on('click', sideNavSub);
    $(".sidenavsolution > i").on('click', sideNavSub);



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

function openNav() {
    $("#mySidenav").css('width', "250px");
    $("#mySidenav").css('display', "block");
  }
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
      console.log("ss");
    $("#mySidenav").css('width', "0");
    $('.dropdown-container').hide();
    $("#mySidenav").css('display', "none");

  }
  function sideNavSub(event){
      console.log($(event.toElement).text());
      if($(event.toElement).text()){

        if($(event.target).next().css('display') == "block"){
            return;
        }else{
            $('.dropdown-container').hide();
            $(event.target).next().show();

        }
    }else{
        $(event.target).parent();
        if($(event.target).parent().next().css('display') == "block"){
            return;
        }else{
            $('.dropdown-container').hide();
            $(event.target).parent().next().show();

        }
    }
    
  }
  

  