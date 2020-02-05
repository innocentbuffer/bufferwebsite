<nav class="navbar navbar-expand-md navbar-light border-0">
    <div class="container ">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="images/logo/nav_logo.png" id="salutelogo" alt="buffer media logo black" style="width:100%; height:43px;"> 
        </a>
        <button class="navbar-toggler" type="button" id="smsidebar" >
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
                    <a class="nav-link portsol">SOLUTIONS</a>
                    <div id="solutions-dropdown">
                        <div class="container my-5">
                            <div class="row mx-0 w-100">
                                <div class="col-md-4">
                                    <ul class="list-unstyled submenu">
                                        <li><a href="{{ route('entmsg') }}" class="subsub active enterprisemessaging" id="subenterprisemessaging">Enterprise Messaging</a></li>
                                        <li><a href="{{ route('voice') }}" class="subsub voice" id="subenterprisevoice">Enterprise Voice</a></li>
                                        <li><a href="{{ route('dmtk') }}" class="subsub " id="subdigitalmarketing">Digital Marketing</a></li>
                                        <li><a href="{{ route('connectivity') }}" class="subsub" id="subconnectivity">Connectivity</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-8 position-relative">
                                    @include('frontend-includes.welcome-page.enterprise')
                                    @include('frontend-includes.welcome-page.voice')
                                    @include('frontend-includes.welcome-page.digital')
                                    @include('frontend-includes.welcome-page.connectivity')
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{env('APP_URL')}}#trustedportfolio" class="nav-link portsol">PORTFOLIO</a>
                </li>
                <li class="nav-item action-btn-outline">
                    <a href="/contactus" class="nav-link btn text-left">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>
