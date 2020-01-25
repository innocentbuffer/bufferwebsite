<nav class="navbar navbar-expand-md navbar-light border-0">
    <div class="container ">
        <a class="navbar-brand" href="{{ url('/') }}">
           
              
         
            <img src="images/logo/nav_logo.png" id="salutelogo" alt="buffer media logo black" style="width:130px; height:43px; ">
            
        </a>
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
                    <a class="nav-link">SOLUTIONS</a>
                    <div id="solutions-dropdown">
                        <div class="container my-5">
                            <div class="row mx-0 w-100">
                                <div class="col-md-4">
                                    <ul class="list-unstyled submenu">
                                        <li><a href="{{ route('entmsg') }}" class="subsub active enterprisemessaging">Enterprise Messaging</a></li>
                                        <li><a href="{{ route('voice') }}" class="subsub voice">Enterprise Voice</a></li>
                                        <li><a href="{{ route('dmtk') }}" class="subsub ">Digital Marketing</a></li>
                                        <li><a href="{{ route('contdis') }}" class="subsub">Connectivity</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-8 position-relative">
                                    @include('frontend-includes.welcome-page.enterprise')
                                    @include('frontend-includes.welcome-page.voice')
                                    @include('frontend-includes.welcome-page.digital')
                                    @include('frontend-includes.welcome-page.content')
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link">PORTFOLIO</a>
                </li>
                <li class="nav-item action-btn-outline">
                    <a class="nav-link enquire btn text-left">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>
