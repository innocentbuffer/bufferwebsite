@extends('layouts.backend.main')


@section('title')
    Buffer Admin - Dashboard
@endsection

@section('head-title')
    Dashboard
@endsection

@section('subhead-title')
    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page"></li>
@endsection

@section('main-content')
    <section class="content">		
	  	<div class="row">
            <div class="col-12">
                <div class="row text-center justify-content-center">
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="flexbox flex-justified text-center bg-info mb-30 pull-up">
                        <div class="no-shrink py-30">
                            <span class="mdi mdi-file-document font-size-50"></span>
                        </div>

                        <div class="py-30 bg-white text-dark">
                            <div class="font-size-30 countnm">{{$totalQoutes}}</div>
                            <span>Qoutes Request</span>
                        </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="flexbox flex-justified text-center bg-warning mb-30 pull-up">
                        <div class="no-shrink py-30">
                            <span class="mdi mdi-message-reply-text font-size-50"></span>
                        </div>

                        <div class="py-30 bg-white text-dark">
                            <div class="font-size-30 countnm">{{$totalContacts}}</div>
                            <span>Contacts Request</span>
                        </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="flexbox flex-justified text-center bg-success mb-30 pull-up">
                        <div class="no-shrink py-30">
                            <span class="mdi mdi-microsoft-onenote font-size-50"></span>
                        </div>

                        <div class="py-30 bg-white text-dark">
                            <div class="font-size-30 countnm">{{$totalNewsletters}}</div>
                            <span>Newsletter Request</span>
                        </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    @if($role == 'admin' || $role == "")
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="flexbox flex-justified text-center bg-danger mb-30 pull-up">
                            <div class="no-shrink py-30">
                                <span class="mdi mdi-ticket font-size-50"></span>
                            </div>

                            <div class="py-30 bg-white text-dark">
                                <div class="font-size-30 countnm">{{$totalUsers}}</div>
                                <span>Users</span>
                            </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
			<!-- 
            <div class="col-12">
                <div class="row text-center justify-content-center">
                    <div class="col-12 col-lg-4">
                        <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Tickets share per agent</h3>

                            <div class="box-tools pull-right">
                                <ul class="card-controls">
                                <li class="dropdown">
                                    <a data-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item active" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Yesterday</a>
                                    <a class="dropdown-item" href="#">Last week</a>
                                    <a class="dropdown-item" href="#">Last month</a>
                                    </div>
                                </li>
                                <li><a href="" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="mdi mdi-toggle-switch-off-thin"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="flexbox mt-70">
                                <div class="bar" data-peity='{ "fill": ["#666EE8", "#1E9FF2", "#28D094", "#FF4961", "#FF9149"], "height": 298, "width": 250, "padding":0.2 }'>952,558,1254,427,784</div>
                            <ul class="list-inline align-self-end text-muted text-right mb-0">
                                <li>Jacob <span class="badge badge-primary ml-2">952</span></li>
                                <li>William <span class="badge badge-info ml-2">558</span></li>
                                <li>Emily <span class="badge badge-success ml-2">1254</span></li>
                                <li>Chloe <span class="badge badge-danger ml-2">427</span></li>
                                <li>Daniel <span class="badge badge-warning ml-2">784</span></li>
                            </ul>
                            </div>

                        </div>
                        </div>
                    </div>
                    			
                    <div class="col-lg-4 col-12">		  
                    
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Ticket Overview</h4>
                        </div>
                        <div class="box-body">
                            <ul class="list-inline text-right mt-10 mr-10">
                                <li>
                                    <h5 class="mb-0"><i class="mdi mdi-toggle-switch-off mr-5 text-info"></i>Total</h5>
                                </li>
                                <li>
                                    <h5 class="mb-0"><i class="mdi mdi-toggle-switch-off mr-5 text-danger"></i>Close</h5>
                                </li>
                            </ul>
                        <div id="morris-area-chart2" style="height: 330px;"></div>
                        </div>
                        
                    </div>
                    
                    </div>
                </div>
            </div>
             -->
			  

		</div>		      
	</section>
@endsection