<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="images/logo/favicon.ico">

    <!-- CDN compiled and minified stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Css Vendors-->
    <link rel="stylesheet" href="css/vendors/slick.css">

    <!-- custom compiled and minified stylesheet -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/frontend.min.css">
    <link rel="stylesheet" href="css/frontend.css">
</head>
<body>
    <section class="loader-section">
        <div id="buffer-spinner">
            <img id="spinner-img" src="images/logo/spinner.png" alt="">
        </div>
    </section>
    <section class="main-section">
        <!-- header start -->
        <header id="frontend-head" class="buffer-navbar border-0 {{strpos(url()->current(), 'login') ? 'head-static-login' :''}}">
            @include('layouts.frontend.nav')
        </header>
        <!-- header end -->
        <!-- main start -->
        <main>
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

    
    <script src="js/app.js"></script>
   
    <script src="js/custom/main.js"></script>

    <!--Js Vendors -->
    <script src="js/vendors/slick.min.js"></script>

    <!-- custom  minified JavaScript 
    <script src="js/custom/main.min.js"></script>
    -->
</body>
</html>