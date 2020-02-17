<!DOCTYPE html>
<html lang="en">
<head>
    @section('metatags')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileImage" content="{{env('APP_URL')}}/images/logo/favicon.png">
    <meta content="#20BCAD" name="theme-color">
    <meta content="#20BCAD" name="msapplication-TileColor">
    @show
    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="images/logo/favicon.ico">

    <!-- CDN compiled and minified stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">

    


    
    
    <!-- Css Vendors-->

    <!-- custom compiled and minified stylesheet -->
    <link rel="stylesheet" href="css/app.css">
    <!--
    <link rel="stylesheet" href="css/frontend.min.css">
-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/frontend.css">
    <link rel="stylesheet" href="css/vendors/slick.css">
    
    <script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
    <script>
        window.sr = ScrollReveal({ reset: true });
    </script>
    
</head>
<body>
    
    <section class="loader-section">
        <div id="buffer-spinner">
            <img id="spinner-img" src="images/logo/spinner.png" alt="">
        </div>
    </section>
    <section class="{{isset($otherPages) ?'':'main-section'}}">
        <!-- header start -->
        <header id="frontend-head" class="buffer-navbar border-0 {{strpos(url()->current(), 'login') ? 'head-static-login' :''}}">
            @include('layouts.frontend.nav')
        </header>
        
        <div id="mySidenav" class="sidenav d-md-none">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times; </a>
            
            <a class="sidenavsolution">SOLUTIONS <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-container">
                <a href="{{ route('entmsg') }}">Enterprise messaging</a>
                <a href="{{ route('voice') }}">Enterprise voice</a>
                <a href="{{ route('dmtk') }}">Digital marketing</a>
                <a href="{{ route('connectivity') }}">Connectivity</a>
            </div>
            <a href="{{env('APP_URL')}}#trustedportfolio">PORTFOLIO</a>
            <a href="{{ route('contact') }}">CONTACT</a>
            <div class="dropdown-divider"></div>
            <a class="sidenavsolution">Enterprise Messaging <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-container">
                <a href="/enterprise-messaging#sms">SMS</a>
                <a href="/enterprise-messaging#rcs">RCS</a>
                <a href="/enterprise-messaging#whatsapp">Whatsapp Business API</a>
                <a href="/enterprise-messaging#2-way">2-way Messaging</a>
                <a href="/enterprise-messaging#number-lookup">Number Lookup</a>
                <a href="/enterprise-messaging#secure-opt">Secure OPT</a>
            </div>
            <a class="sidenavsolution">Enterprise Voice <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-container">
                <a href="/voice#outbound">Outband Dialer</a>
                <a href="/voice#ivr">IVR</a>
                <a href="/voice#click2call">Click 2 call</a>
            </div>
            <a class="sidenavsolution">Digital Marketing <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-container">
                <a href="/digital-marketing#payperclick">Pay per click</a>
                <a href="/digital-marketing#contentmarketing">Content marketing</a>
                <a href="/digital-marketing#inbound">Inbound marketing</a>
                <a href="/digital-marketing#emailmarketing">Email marketing</a>
            </div>
            <a class="sidenavsolution">Conectivity <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-container">
                <a href="/connectivity#premium">Premium USSD</a>
                <a href="/connectivity#directbilling">Direct billing sevice</a>
                <a href="/connectivity#wapbilling">Wap billing</a>
            </div>
            
        </div>
        <!-- header end -->
        <!-- main start -->
        <main id="main" class="px-md-3">
        @yield('content') 
        </main>
        <!-- main end -->
        <!-- footer start -->
        @if(!strpos(url()->current(), 'login'))
            <footer class="px-md-5 py-5">
                @include('layouts.frontend.footer')
            </footer>
        @endif
        <!-- footer end -->
        <!--Scroll-->
        <div class="reach">
            <div class="reach-item">
                <a href="https://api.whatsapp.com/send?phone=2349013802242" class="text-white p-2" title="whatsapp to buffer"><img src="images/icons/whatsapp2.png" alt=""></a>
            </div>
            <div class="reach-item">
                <a href="mailto:info@buffer.media" class="text-white p-2" title="mail to buffer"><img src="images/icons/mail.png" alt=""></a>
            </div>
        </div>
        <div class="scrollup-hide scrollup">
            <a href="#top" class="text-white p-2" title="click to scroll up"><i class="fa fa-angle-up" style="font-size:30px"></i></a>
        </div>
        @include('layouts.frontend.modal')
    </section>

    

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

    
    <script src="js/app.js"></script>
   
    <script src="js/custom/main.js"></script>
    <script src="js/vendors/slick.min.js"></script>
    

    <!--Js Vendors -->
    


    <!-- custom  minified JavaScript 
    <script src="js/custom/main.min.js"></script>
    -->
</body>
</html>