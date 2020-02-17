<!-- Content Header (Page header) -->	  
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto w-p50">
            <h3 class="page-title">@yield('head-title')</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        @yield('subhead-title')
                        
                    </ol>
                </nav>
            </div>
        </div>
        <div class="right-title text-right w-170">
            <span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker">
                <span class="subheader_daterange-label">
                    <span class="subheader_daterange-title"></span>
                    <span class="subheader_daterange-date text-primary"></span>
                </span>
                <a href="#" class="btn btn-sm btn-primary">
                    <i class="fa fa-angle-down"></i>
                </a>
            </span>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content">	
    @yield('main-content')
</section>