<!-- Content Header (Page header) -->	  
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto ">
            <h3 class="page-title">@yield('head-title')</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        @yield('subhead-title')
                        
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content">	
    @yield('main-content')
</section>