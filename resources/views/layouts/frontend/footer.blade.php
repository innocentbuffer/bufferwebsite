<div class="px-2 px-md-0">
    <div class="row  footer-text-color mx-0 ">
        <div class="col-12 col-md-3 mb-5 mb-md-0">
            <header>
                <h3 class="mt-3 mt-md-0 mb-3">
                    <a href="./" alt=""><img src="images/logo/footer_logo.png" alt="buffer media logo" style="width:70%"></a>
                </h3>
            </header>
            <div>
                <p>Buffer is a digital media company and mobile value added service provider focused on delivering innovative mobile solutions to the global media market.</p>
            </div>
            <div class="mt-3">
                <strong>Subscribe to our newsletter</strong>
                <div>
                    <form action="/newsletter" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" placeholder="Your email address" id="email" required>
                            <div class="input-group-append">
                                <button class="btn comp-background text-white" type="submit">
                                    <i class="fa fa-paper-plane "></i>
                                </button>
                            
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        <div class="col-12 col-md-3 mb-5 mb-md-0">
            <header>
                <h5 class="mt-3 mt-md-0 mb-4 text-white">About Us</h5>
            </header>
            <div>
                <ul class="list-unstyled footer-list footer-anchor">
                    <li><a href="{{ route('company') }}">Company</a></li>
                    <li><a  href="/contactus" class="btn p-0 ">Contact</a></li>
                    @guest
                        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @else
                        <li>
                            
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                           
                        </li>
                    @endguest
                    <!--
                    <li><a href="">Careers</a></li>
                    <li><a href="">Blog</a></li>
                    -->
                </ul>
            </div>   
        </div>
        <div class="col-12 col-md-3 mb-5 mb-md-0">
            <header>
                <h5 class="mt-3 mt-md-0 mb-4 text-white">Solutions</h5>
            </header>
            <div>
                <ul class="list-unstyled footer-list footer-anchor">
                    <li><a href="{{ route('entmsg') }}">Enterprise Messaging</a></li>
                    <li><a href="{{ route('voice') }}">Enterprise Voice</a></li>
                    <li><a href="{{ route('dmtk') }}">Digital Marketing</a></li>
                    <li><a href="{{ route('connectivity') }}">Connectivity</a></li>
                    <li><a href="{{ route('prod') }}">Products</a></li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-5 mb-md-0">
            <header>
                <h5 class="mt-3 mt-md-0 mb-4 text-white">Media Contact</h5>
            </header>
            <div>
                <ul class="list-inline footer-anchor footer-anchor-media">
                    <li class="list-inline-item"><a href="https://www.facebook.com/buffermediaLTD/" class="rounded-circle px-2 py-1" title="Buffer Facebook Link"><i class="b-text-color fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/BufferMedia" class="rounded-circle px-2 py-1" title="Buffer Twitter Link"><i class="b-text-color fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="https://pinterest.com/buffermedia" class="rounded-circle px-2 py-1" title="Buffer Pinterest Link"><i class="b-text-color fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.linkedin.com/company/buffer-media-limited/" class="rounded-circle px-2 py-1" title="Buffer Linked In Link"><i class="b-text-color fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
                <ul class="list-unstyled footer-list footer-anchor mt-4">
                    <li data-qoute="support"><a class="btn p-0 enquire" data-qoute="support"><img src="images/icons/support.png" alt="contact buffer suport" class="mr-1" data-qoute="support">Support</a></li>
                    <li><a class="btn p-0 enquire" data-qoute="sales"><img src="images/icons/sales.png" alt="contact buffer suport" class="mr-1">Sales</a></li>
                    <li><a class="btn p-0 enquire" data-qoute="developer"><img src="images/icons/dev.png" alt="contact buffer suport" class="mr-1">Developer</a></li>
                </ul>
            </div> 
        </div>
    </div>
</div>
<div class="text-center pt-2 footer-text-color">
    <small>{{date('Y')}} &copy; Buffer Media</small>
</div>