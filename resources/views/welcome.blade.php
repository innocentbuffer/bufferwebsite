@extends('layouts.frontend.main')

@section('metatags')
    @parent
    <meta name="description" content="Buffer Media is a digital marketing and mobile VAS service company in Nigeria that has transformed the way African businesses reach their customers">
@endsection

@section('title')
    Buffer Home
@endsection

@section('content')
    <section>
        <div class="welcome-banner">
            <div class="overlay">
                <div class="banner-body ">
                    <div class="row mx-0">
                        <div class="col-md-7 px-md-5">
                            <div class="my-slider-text">
                                <div >
                                    <h1 class="comp_bold banner-title">AFRICA'S EMERGING AND INNOVATIVE MOBILE SOLUTIONS COMPANY.</h1>
                                    <p class="slidetext">
                                        Buffer helps brands discover new and better ways to achieve their goals and desires around the mobile and digital space by providing solutions that connect them to their interests.
                                    </p>
                                </div>
                                <div >
                                    <h1 class="comp_bold text-uppercase banner-title">Result driven, yet cost-effective digital and mobile solutions</h1>
                                    <p class="slidetext">
                                        There are 173 million Nigerians either unreached or underreached, we can help you reach them in minutes and give them the dose of your brand that turns all prospects to customers with out cost-effective solutions.
                                    </p>
                                </div>
                            </div>
                            <div class="action-btn ">
                                <button  id="quote" class="btn btn-lg shadow enquire"><span class="button-white-blink">Get A Quote</span></button><button id="hello" class="btn btn-lg comp-background shadow ml-1 text-white enquire" data-qoute="contact"><span class="button-blink" data-qoute="contact"> Say Hello</span></button>
                            </div>
                        </div>
                        <div class="col-md-5 d-none d-md-block ">
                            <div id="banner-img-slider">
                                <div class="position-relative" > 
                                    <div class="banner-slide-item banner-img-active" id="video1">
                                        <video id="vid1" style="width:100%; height:100%" muted>
                                            <source src="animation/emerg.mp4" type="video/mp4">
                                                Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="banner-slide-item" id="video2">
                                        <video id="vid2" style="width:100%; height:100%"  muted>
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
        </div>
    </section>
    <section>
        <div class="our-solutions">
            <svg id="curve" data-name="layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1416.99 174.01">
				<path class="cls-1" d="M0,280.8S283.66,59,608.94,163.56s437.93,150.57,808,10.34V309.54H0V280.8Z" transform="translate(0 -135.53)"></path>
            </svg>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 order-md-last">
                        <div class="section-description-left">
                            <h3>OUR SOLUTIONS</h3>
                            <p class="cardRevealText mb-3 mb-md-0">
                            We work on a diverse range of projects; from helping start ups get their business up, to crafting digital and mobile solutions that are unique and tailor-made.                            
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7 order-md-first">
                        <div class="row">
                            <div class="col-md-4 px-1 ">
                                <div class="card mb-3 shadow border-0 solution-card-top cardReveal">
                                    <img src="images/icons/bulk-sms.png" alt="buffer media bulk sms" class="card-img-top mt-2" style="width: 60px;margin: auto;"/>
                                    <div class="card-body ">
                                        <h5 class="card-title text-center">SMS</h5>
                                        <p class="card-text solu-size">
                                            Send Bulk SMS messages to all networks in Nigeria and over 600 Networks Worldwide.
                                        </p>
                                        <a href="/enterprise-messaging#sms" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                                <div class="card border-0 mb-3 shadow md-md-0 solution-card-bottom cardReveal">
                                    <img src="images/icons/whatsapp.png" alt="buffer media bulk sms" class="card-img-top mt-2" style="width: 60px;margin: auto;"/>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">WhatsApp Business API</h5>
                                        <p class="card-text solu-size">
                                            Buffers WhatsApp Business solutions allows companies to message their customers.
                                        </p>
                                        <a href="/enterprise-messaging#whatsapp" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="card mb-3 mt-3 mt-md-0 shadow border-0 solution-card-top cardReveal">
                                    <img src="images/icons/inbound_marketing.png" alt="buffer media transactional SMS" class="card-img-top mt-2" style="width: 60px;margin: auto;"/>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Inbound Marketing</h5>
                                        <p class="card-text solu-size">
                                            At Buffer our Inbound marketing services is a buyer-focused, measurable approach.
                                        </p>
                                        <a href="/digital-marketing#inbound" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                                <div class="card border-0 mb-3 shadow mb-md-0 solution-card-bottom cardReveal">
                                    <img src="images/icons/ivr.png" alt="buffer media RCS business messaging" class="card-img-top mt-2" style="width: 60px;margin: auto;"/>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">IVR</h5>
                                        <p class="card-text solu-size">
                                            Effective Voice campaigns require an active and effective customer engagement rate which can be ...
                                        </p>
                                        <a href="/voice#ivr" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="card mb-3 mt-4 mt-md-0 shadow border-0 solution-card-top cardReveal">
                                    <img src="images/icons/outband-dialer.png" alt="buffer media outband dialer" class="card-img-top mt-2" style="width: 60px;margin: auto;"/>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Outband Dialer</h5>
                                        <p class="card-text solu-size ">
                                            Outbound dialer is a system that automatically calls pre defined lists of customers.
                                        </p>
                                        <a href="/voice#outbound" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                                <div class="card shadow border-0 solution-card-bottom cardReveal">
                                    <img src="images/icons/content_marketing.png" alt="buffer media digital content SDP" class="card-img-top mt-2" style="width: 60px;margin: auto;" />
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Content Marketing</h5>
                                        <p class="card-text solu-size">
                                            Your business online and offline presence revolves around content.
                                        </p>
                                        <a href="/digital-marketing#contentmarketing" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </section>
    <section>
        <a name="trustedportfolio" id="trustedportfolio"></a>
        <div class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-description-center">
                            <h3 class="text-center">TRUSTED BY</h3>
                        </div>
                    </div>
                </div>
                <div class="trusted-by mt-5">
                    <div class="autoplay">
                        <div class="" style="height:100%">
                            <div class="card shadow-sm border-0">
                                <img src="images/trusted/uber.png" class="d-block my-3 mx-auto trusted-img card-img" alt="" style="width:40%;height:60%">
                                <div class="card-body px-4">
                                    <h5 class="card-title text-center">Bulk SMS/ Snap Call</h5>
                                    <p class="card-text solu-size">
                                        Buffer helped Uber increase new driver and rider sign ups.  
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="" style="height:100%">
                            <div class="card shadow-sm border-0">
                                <img src="images/trusted/pepsi.png" class="d-block my-3 mx-auto card-img" alt="" style="width:40%;height:60%">
                                <div class="card-body px-4">
                                    <h5 class="card-title text-center">Bulk SMS/ Transactional SMS</h5>
                                    <p class="card-text solu-size">
                                        Pepsi employed Buffer’s messaging solutions system. 
                                    </p>    
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="card shadow-sm border-0">
                                <img src="images/trusted/zenith.png" class="d-block my-3 mx-auto card-img" alt="" style="width:40%;height:60%">
                                <div class="card-body px-4">
                                    <h5 class="card-title text-center">Bulk SMS/ Snap Call</h5>
                                    <p class="card-text solu-size">
                                        Inbound voice and messaging solution was use by Zenith. 
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="">
                            <div class="card shadow-sm border-0">
                                <img src="images/trusted/leadway.png" class="d-block my-3 mx-auto trusted-img card-img" alt="" style="width:40%;height:60%">
                                <div class="card-body px-4">
                                    <h5 class="card-title text-center">Bulk SMS/ SMS Tagging</h5>
                                    <p class="card-text solu-size">
                                        Leadway assurance used SMS Tagging from Buffer. 
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="">
                            <div class="card shadow-sm border-0">
                                <img src="images/trusted/premier.png" class="d-block my-3 mx-auto trusted-img card-img" alt="" style="width:40%;height:60%">
                                <div class="card-body px-4">
                                    <h5 class="card-title text-center">SMS Tagging/Bulk SMS</h5>
                                    <p class="card-text solu-size">
                                        Baba Ijebu utilized SMS tagging to increase audience sign ups. 
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="">
                            <div class="card shadow-sm border-0">
                                <img src="images/trusted/cola.png" class="d-block my-3 mx-auto trusted-img card-img" alt="" style="width:40%;height:55%">
                                <div class="card-body px-4">
                                    <h5 class="card-title text-center">SEO/SEM</h5>
                                    <p class="card-text solu-size">
                                        Buffer deployed its social listening tools, SEO and SEM 
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection