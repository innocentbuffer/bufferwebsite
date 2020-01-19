@extends('layouts.frontend.main')

@section('title')
    Buffer Home
@endsection

@section('content')
    <section>
        <div class="welcome-banner">
            <div class="banner-body ">
                <div class="row mx-0">
                    <div class="col-md-7 comp_bold px-5">
                        <div>
                            <div class="banner-slide-content banner-content-active">
                                <h1>SMS</h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Quod ab tenetur itaque ullam repellendus ipsum! Nesciunt,
                                    deserunt porro nihil culpa illo deleniti.
                                </p>
                            </div>
                            <div class="banner-slide-content">
                                <h1>Dial</h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Quod ab tenetur itaque ullam repellendus ipsum! Nesciunt,
                                    deserunt porro nihil culpa illo deleniti.
                                </p>
                            </div>
                            <div class="banner-slide-content">
                                <h1>Whatsapp</h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Quod ab tenetur itaque ullam repellendus ipsum! Nesciunt,
                                    deserunt porro nihil culpa illo deleniti.
                                </p>
                            </div>
                        </div>
                        <div class="action-btn">
                            <button  id="quote" class="btn btn-lg shadow-sm enquire">Get A Quote</button><button id="hello" class="btn btn-lg comp-background shadow-sm ml-1 text-white enquire">Say Hello</button>
                        </div>
                    </div>
                    <div class="col-md-5 d-none d-md-block ">
                        <div id="banner-img-slider">
                            <div class="position-relative" > 
                                <div class="banner-slide-item banner-img-active"><img src="images/solutions/bulk_sms.png" alt="" srcset=""  style="width:100%;height:380px"></div>
                                <div class="banner-slide-item"><img src="images/solutions/outband_dialer.png" alt="" srcset=""  style="width:100%;height:380px"></div>
                                <div class="banner-slide-item"><img src="images/solutions/whatsapp.png" alt="" srcset=""  style="width:100%;height:380px"></div>
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
                    <div class="col-md-5 d-flex">
                        <div class="section-description">
                            <h3>OUR SOLUTIONS</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis, sit amet hendrerit metus vulputate id. Nulla laoreet maximus feugiat. Nullam rhoncus, orci vitae convallis venenatis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis, sit amet hendrerit metus.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-4 px-1">
                                <div class="card mb-3 shadow-sm border-0">
                                    <img src="images/solutions/bulk_sms.png" alt="buffer media bulk sms" class="card-img-top" style="height: 100px;width: 120px;margin: auto;"/>
                                    <div class="card-body">
                                        <h4 class="card-title">Bulk SMS</h4>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis.
                                        </p>
                                        <a href="" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                                <div class="card border-0 mb-3 shadow-sm md-md-0">
                                    <img src="images/solutions/whatsapp.png" alt="buffer media bulk sms" class="card-img-top" style="height: 100px;width: 120px;margin: auto;"/>
                                    <div class="card-body">
                                        <h4 class="card-title">WhatsApp Business API</h4>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis.
                                        </p>
                                        <a href="" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="card mb-3 shadow-sm border-0">
                                    <img src="images/solutions/t_sms.png" alt="buffer media transactional SMS" class="card-img-top" style="height: 100px;width: 120px;margin: auto;"/>
                                    <div class="card-body">
                                        <h4 class="card-title">Transactional SMS</h4>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis.
                                        </p>
                                        <a href="" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                                <div class="card border-0 mb-3 shadow-sm mb-md-0">
                                    <img src="images/solutions/rcs.png" alt="buffer media RCS business messaging" class="card-img-top" style="height: 100px;width: 120px;margin: auto;"/>
                                    <div class="card-body">
                                        <h4 class="card-title">RCS Business Messaging</h4>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis.
                                        </p>
                                        <a href="" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="card mb-3 shadow-sm border-0">
                                    <img src="images/solutions/outband_dialer.png" alt="buffer media outband dialer" class="card-img-top" style="height: 100px;width: 120px;margin: auto;"/>
                                    <div class="card-body">
                                        <h4 class="card-title">Outband Dialer</h4>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis.
                                        </p>
                                        <a href="" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                                <div class="card shadow-sm border-0">
                                    <img src="images/solutions/sdp.png" alt="buffer media digital content SDP" class="card-img-top" style="height: 100px;width: 120px;margin: auto;" />
                                    <div class="card-body">
                                        <h4 class="card-title">Digital Content SDP</h4>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis.
                                        </p>
                                        <a href="" class="btn stretched-link comp-background text-white">See Solution</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="bg-white">
        <div class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-description">
                            <h3>PORTFOLIO</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat rutrum turpis, sit amet hendrerit metus vulputate id.
                            </p>
                        </div>
                    </div>
                    <div  class="col-md-6">

                    </div>
                </div>
                <div>
                    <div class="slick-portfolio">
                        <div class="single-portfolio">
                            <img src="images/portfolio/p2.png" alt="" style="width:315px; height:415px">
                            <div class="portfolio-des">
                                <div class="card h-100">
                                    <img src="images/solutions/bulk_sms.png" alt="" class="card-img-top mx-auto mt-5" style="width:180px ">
                                    <div class="card-body">
                                        <h4 class="card-title">Helo</h4>
                                        <p class="card-text">jndkjkkdkjkjkd</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-portfolio">
                            <img src="images/portfolio/p2.png" alt="" style="width:315px; height:415px">
                            <div class="portfolio-des">
                                <div class="card h-100">
                                    <img src="images/solutions/bulk_sms.png" alt="" class="card-img-top mx-auto mt-5" style="width:180px ">
                                    <div class="card-body">
                                        <h4 class="card-title">Helo</h4>
                                        <p class="card-text">jndkjkkdkjkjkd</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-portfolio">
                            <img src="images/portfolio/p2.png" alt="" style="width:315px; height:415px">
                            <div class="portfolio-des">
                                <div class="card h-100">
                                    <img src="images/solutions/bulk_sms.png" alt="" class="card-img-top mx-auto mt-5" style="width:180px ">
                                    <div class="card-body">
                                        <h4 class="card-title">Helo</h4>
                                        <p class="card-text">jndkjkkdkjkjkd</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-portfolio">
                            <img src="images/portfolio/p2.png" alt="" style="width:315px; height:415px">
                            <div class="portfolio-des">
                                <div class="card h-100">
                                    <img src="images/solutions/bulk_sms.png" alt="" class="card-img-top mx-auto mt-5" style="width:180px ">
                                    <div class="card-body">
                                        <h4 class="card-title">Helo</h4>
                                        <p class="card-text">jndkjkkdkjkjkd</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-portfolio">
                            <img src="images/portfolio/p2.png" alt="" style="width:315px; height:415px">
                            <div class="portfolio-des">
                                <div class="card h-100">
                                    <img src="images/solutions/bulk_sms.png" alt="" class="card-img-top mx-auto mt-5" style="width:180px ">
                                    <div class="card-body">
                                        <h4 class="card-title">Helo</h4>
                                        <p class="card-text">jndkjkkdkjkjkd</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-portfolio">
                            <img src="images/portfolio/p2.png" alt="" style="width:315px; height:415px">
                            <div class="portfolio-des">
                                <div class="card h-100">
                                    <img src="images/solutions/bulk_sms.png" alt="" class="card-img-top mx-auto mt-5" style="width:180px ">
                                    <div class="card-body">
                                        <h4 class="card-title">Helo</h4>
                                        <p class="card-text">jndkjkkdkjkjkd</p>
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
        <div class="client px-2">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-4">
                        <div class="client-section">
                            <img src="images/clients/2.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-4">
                        <div class="client-section">
                            <img src="images/clients/2.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-4">
                        <div class="client-section">
                            <img src="images/clients/2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection