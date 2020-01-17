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
        <header class="buffer-navbar border-0">
            @include('layouts.frontend.nav')
        </header>
        <!-- header end -->
        <!-- main start -->
        <main>
        @yield('content') 
        </main>
        <!-- main end -->
        <!-- footer start -->
        <footer class="px-md-5 py-5">
            @include('layouts.frontend.footer')
        </footer>
        <!-- footer end -->
    </section>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- custom JavaScript 
    <script src="js/app.js"></script>
    -->
    <script src="js/custom/main.js"></script>

    <!-- custom  minified JavaScript 
    <script src="js/custom/main.min.js"></script>
    -->
</body>
</html>