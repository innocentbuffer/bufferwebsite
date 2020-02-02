@extends('layouts.frontend.main')

@section('metatags')
    @parent
    <meta name="description" content="Buffer enterprise voice messaging provides reliable, secure means to improve customer support, customer experience, retention with WhatsApp business messaging">
@endsection

@section('title')
    Voice Solutions
@endsection

@section('content')
    <section>
        <a name="sms"></a>
        <div class="aboutus-section">
            <div class="container">
                <div class="row mx-0" >
                    <div class="col-md-6">
                        <div class="section-description">
                            <h6 class="solutionscroll">ENTERPRISE VOICE</h6>
                            <h3 class="comp_bold">STEP-UP LEAD GENERATION AND CUSTOMER EXPERIENCE THROUGH CUSTOMIZABLE & INNOVATIVE VOICE SOLUTIONS.</h3>
                            <p class="solutionscroll">
                                Create unique experiences for your customers by personalizing campaigns and enriching their journey with voice applications. We offer secure and reliable voice solutions with a diverse product line up, allowing enterprises to manage inbound & outbound calls.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 solutionscroll">
                        <img src="images/evoice/evoice.png" alt="About Buffer media" style="width:100%; height:100%" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="outbound"></div>
        <div class="aboutus-section">
            <div class="container">
                <div class="row mx-0">
                    <div class="col-md-6 solutionscroll">
                        <img src="images/evoice/outbound.png" alt="About Buffer media" style="width:100%; height:100%" srcset="">
                    </div>
                    <div class="col-md-6">
                        <div class="section-description">
                            <h3>OUTBOUND DIALER</h3>
                            <p class="solutionscroll"></p>
                            <button class="btn btn-lg comp-background shadow ml-1 text-white enquire" data-qoute="outbound dialer"><span class="button-blink " data-qoute="outbound dialer"> Get a qoute</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
   <section>
        <div id="ivr"></div>
        <div class="aboutus-section">
            <div class="container">
                <div class="row mx-0">
                    
                    <div class="col-md-6">
                        <div class="section-description">
                            <h3>(IVR) INTERACTIVE VOICE RESPONSE</h3>
                            <p class="solutionscroll"></p>
                            <button class="btn btn-lg comp-background shadow ml-1 text-white enquire" data-qoute="interactive voice response"><span class="button-blink" data-qoute="interactive voice response"> Get a qoute</span></button>

                        </div>
                    </div>
                    <div class="col-md-6 solutionscroll">
                        <img src="images/evoice/eivr.png" alt="About Buffer media" style="width:100%; height:100%" srcset="">
                    </div>
                </div>
            </div>
        </div>
   </section>
   <section>
        <a name="click2call"></a>
        <div class="aboutus-section">
            <div class="container">
                <div class="row mx-0">
                    <div class="col-md-6 solutionscroll">
                        <img src="images/evoice/tocall.png" alt="About Buffer media" style="width:100%; height:100%" srcset="">
                    </div>
                    <div class="col-md-6">
                        <div class="section-description">
                            <h3>CLICK 2 CALL</h3>
                            <p class="solutionscroll"></p>
                            <button class="btn btn-lg comp-background shadow ml-1 text-white enquire" data-qoute="click 2 call"><span class="button-blink" data-qoute="click 2 call"> Get a qoute</span></button>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
   </section>
@endsection