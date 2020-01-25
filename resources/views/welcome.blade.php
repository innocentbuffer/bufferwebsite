@extends('layouts.frontend.main')

@section('title')
    Buffer Home
@endsection

@section('content')
    <section>
        <div class="welcome-banner">
            <div class="banner-body ">
                <div class="row mx-0">
                    <div class="col-md-7 px-5">
                        <div class="back-ground">
                            <div class="banner-slide-content banner-content-active">
                                <h1 class="comp_bold">AFRICA'S EMERGING AND INNOVATIVE MOBILE SOLUTIONS COMPANY.</h1>
                                <p>
                                    Buffer helps brands discover new and better ways to achieve their goals and desires around the mobile and digital space by providing solutions that connect them to their interests.
                                </p>
                            </div>
                            <div class="banner-slide-content">
                                <h1 class="comp_bold text-uppercase">Result driven, yet cost-effective digital and mobile solutions</h1>
                                <p>
                                    There are 173 million Nigerians either unreached or underreached, we can help you reach them in minutes and give them the dose of your brand that turns all prospects to customers with out cost-effective solutions.
                                </p>
                            </div>
                        </div>
                        <div class="action-btn">
                            <button  id="quote" class="btn btn-lg shadow enquire"><span class="button-white-blink">Get A Quote</span></button><button id="hello" class="btn btn-lg comp-background shadow ml-1 text-white enquire"><span class="button-blink"> Say Hello</span></button>
                        </div>
                    </div>
                    <div class="col-md-5 d-none d-md-block ">
                        <div id="banner-img-slider">
                            <div class="position-relative" > 
                                <div class="banner-slide-item banner-img-active">
                                    <video id="vid" style="width:100%; height:100%" autoplay muted>
                                        <source src="animation/emerg.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="banner-slide-item">
                                    <video id="vid" style="width:100%; height:100%" autoplay muted>
                                        <source src="animation/result.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="our-solutions">
            <svg id="curve" data-name="layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1416.99 174.01">
				<path class="cls-1" d="M0,280.8S283.66,59,608.94,163.56s437.93,150.57,808,10.34V309.54H0V280.8Z" transform="translate(0 -135.53)"></path>
            </svg>
            <div class="container">
                <div class="row">
                <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-4 px-1">
                                <div class="card mb-3 shadow-sm border-0">
                                    <img src="images/solutions/bulk-sms.png" alt="buffer media bulk sms" class="card-img-top mt-2" style="width: 60px;margin: auto;"/>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">SMS</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis.
                                        </p>
                                        <a href="" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                                <div class="card border-0 mb-3 shadow-sm md-md-0">
                                    <img src="images/solutions/whatsapp.png" alt="buffer media bulk sms" class="card-img-top mt-2" style="width: 60px;margin: auto;"/>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">WhatsApp Business API</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis.
                                        </p>
                                        <a href="" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="card mb-3 shadow-sm border-0">
                                    <img src="images/solutions/inbound_marketing.png" alt="buffer media transactional SMS" class="card-img-top mt-2" style="width: 60px;margin: auto;"/>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Inbound Marketing</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis.
                                        </p>
                                        <a href="" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                                <div class="card border-0 mb-3 shadow-sm mb-md-0">
                                    <img src="images/solutions/ivr.png" alt="buffer media RCS business messaging" class="card-img-top mt-2" style="width: 60px;margin: auto;"/>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">IVR</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis.
                                        </p>
                                        <a href="" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="card mb-3 shadow-sm border-0">
                                    <img src="images/solutions/outband-dialer.png" alt="buffer media outband dialer" class="card-img-top mt-2" style="width: 60px;margin: auto;"/>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Outband Dialer</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis.
                                        </p>
                                        <a href="" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                                <div class="card shadow-sm border-0">
                                    <img src="images/solutions/content_marketing.png" alt="buffer media digital content SDP" class="card-img-top mt-2" style="width: 60px;margin: auto;" />
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Content Marketing</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis.
                                        </p>
                                        <a href="" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-5 d-flex">
                        <div class="section-description-left">
                            <h3>OUR SOLUTIONS</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis, sit amet hendrerit metus vulputate id. Nulla laoreet maximus feugiat. Nullam rhoncus, orci vitae convallis venenatis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis, sit amet hendrerit metus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-description">
                            <h3>TRUSTED BY</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis, sit amet hendrerit metus vulputate id.
                            </p>
                        </div>
                    </div>
                    <div  class="col-md-6">

                    </div>
                </div>
                <div class="trusted-by ">
                    <div class="mx-md-4 py-md-4 shadow bg-white">
                        <div class="slick-portfolio">
                            <div>
                                <a href=""><img src="images/clients/2.png" alt="" style="width:113px;height:60px"></a>
                            </div>
                            <div>
                                <a href=""><img src="images/clients/2.png" alt="" style="width:113px;height:60px"></a>
                            </div>
                            <div>
                                <a href=""><img src="images/clients/2.png" alt="" style="width:113px;height:60px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection