@extends('layouts.frontend.main')

@section('metatags')
    @parent
@endsection

@section('title')
    Buffer Products
@endsection

@section('content')
<section>
        <div class="portfolio-pages">
            <div class="container">
                <div class="text-center">
                    <h1>Buffer Products</h1>
                    <p class="mb-5">
                        Below are our upcoming products.
                    </p>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <div class="section-description">
                            <h3>AUDEBOOK</h3>
                            <div class="shadow-sm">
                                <img src="images/products/audebook.png" alt="About Buffer media" style="width:100%; height:100%" srcset="">
                            </div>
                            <p class="solutionscroll"></p>

                        </div>
                    </div>
                    <div class="col-md-6 mt-5 mt-md-0">
                        <div class="section-description">
                            <h3>PLAYCODE</h3>
                            <div class="shadow-sm">
                                <img src="images/products/playcode.png" alt="About Buffer media" style="width:100%; height:100%" srcset="">
                            </div>
                            <p class="solutionscroll"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
@endsection