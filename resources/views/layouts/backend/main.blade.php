<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>

        <!-- Bootstrap 4.0-->
        <link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.css">
        
        <!-- Bootstrap extend-->
        <link rel="stylesheet" href="css/bootstrap-extend.css">
        
        <!-- theme style -->
        <link rel="stylesheet" href="css/master_style.css">
        
        <!-- Superieur Admin skins -->
        <link rel="stylesheet" href="css/skins/all-skins.css">
        
        
        <!-- fullCalendar -->
        <link rel="stylesheet" href="assets/vendor_components/fullcalendar/fullcalendar.min.css">
        <link rel="stylesheet" href="assets/vendor_components/fullcalendar/fullcalendar.print.min.css" media="print">
        
        <!-- Data Table-->
        <link rel="stylesheet" type="text/css" href="assets/vendor_components/datatable/datatables.min.css"/>
        
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
        
        <!-- Bootstrap switch-->
        <link rel="stylesheet" href="assets/vendor_components/bootstrap-switch/switch.css">
        
        <!-- Morris charts -->
        <link rel="stylesheet" href="assets/vendor_components/morris.js/morris.css">
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-info-light sidebar-mini">
        
        <div class="wrapper">
            <header class="main-header">
                @include('layouts.backend.nav')
            </header>

            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar-->
                @include('layouts.backend.left-aside')
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @include('layouts.backend.content')
            </div>
            
        </div>
        <!-- ./wrapper -->
        
        <!-- jQuery 3 -->
        <script src="assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
        
        <!-- popper -->
        <script src="assets/vendor_components/popper/dist/popper.min.js"></script>
        
        <!-- date-range-picker -->
        <script src="assets/vendor_components/moment/min/moment.min.js"></script>
        <script src="assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        
        <!-- Bootstrap 4.0-->
        <script src="assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>
        
        <!-- Slimscroll -->
        <script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
        
        <!-- FastClick -->
        <script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
        
        <!-- peity -->
        <script src="assets/vendor_components/jquery.peity/jquery.peity.js"></script>
        
        <!-- Morris.js charts -->
        <script src="assets/vendor_components/raphael/raphael.min.js"></script>
        <script src="assets/vendor_components/morris.js/morris.min.js"></script>
        
        <!-- This is data table -->
        <script src="assets/vendor_components/datatable/datatables.min.js"></script>
        
        <!-- Bootstrap WYSIHTML5 -->
        <script src="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
        
        <!-- Superieur Admin App -->
        <script src="js/template.js"></script>
        
        <!-- Superieur Admin for demo purposes -->
        <script src="js/demo.js"></script>	
        
        <!-- Superieur Admin dashboard demo-->
        <script src="js/pages/dashboard6.js"></script>
        
        <!-- Superieur Admin for Data Table -->
        <script src="js/pages/data-table.js"></script>

    </body>
</html>