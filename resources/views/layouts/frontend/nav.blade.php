<nav class="navbar navbar-expand-md navbar-light border-0">
    <div class="container ">
        <a class="navbar-brand" href="{{ url('/') }}">
    </a>
    <img src="images/logo/logo-salute.png" alt="buffer media logo black" style="width:130px; height:43px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto buffer-bold ">
                <!-- Authentication Links -->
                <li class="nav-item" id="solution-toggle">
                    <a class="nav-link text-white"  href="{{ route('login') }}">SOLUTIONS <i class="fa fa-caret-down" id="solutions-down"></i><i id="solutions-up" class="fa fa-caret-up"></i></a>
                    <div id="solutions-dropdown">
                        <div class="container my-5">
                            <div class="row mx-0 w-100">
                                <div class="col-md-6">
                                    <ul class="list-unstyled submenu">
                                        <li><a href="{{ route('entmsg') }}">Enterprise Messaging</a></li>
                                        <li><a href="{{ route('voice') }}">Voice</a></li>
                                        <li><a href="{{ route('mvas') }}">Mobile Vas</a></li>
                                        <li><a href="{{ route('dmtk') }}">Digital Marketing</a></li>
                                        <li><a href="{{ route('contdis') }}">Content Distribution</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-8">

                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('portfolio') }}">PORTFOLIO</a>
                </li>
                <li class="nav-item action-btn-outline">
                    <a class="nav-link text-white" href="{{ route('login') }}">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>
