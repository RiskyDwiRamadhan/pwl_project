<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        @yield('title')	
    </title>
    <meta name="description" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="Nura Admin/assets/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="Nura Admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="Nura Admin/assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="Nura Admin/assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="Nura Admin/assets/plugins/chart.js/Chart.min.css" />
    <link rel="stylesheet" type="text/css" href="Nura Admin/assets/plugins/datatables/datatables.min.css" />
    <!-- END CSS for this page -->
</head>

<body class="adminbody">

    <div id="main">

      @include('layouts.navigation')        
      @include('layouts.sidebar')
	  @yield('content')	

      <footer class="footer">
          <span class="text-right">                
              Copyright <a target="_blank" href="#">DVD</a>
          </span>
      </footer>
      {{-- @include('layouts.footer') --}}
        <script src="Nura Admin/assets/js/modernizr.min.js"></script>
        <script src="Nura Admin/assets/js/jquery.min.js"></script>
        <script src="Nura Admin/assets/js/moment.min.js"></script>

        <script src="Nura Admin/assets/js/popper.min.js"></script>
        <script src="Nura Admin/assets/js/bootstrap.min.js"></script>

        <script src="Nura Admin/assets/js/detect.js"></script>
        <script src="Nura Admin/assets/js/fastclick.js"></script>
        <script src="Nura Admin/assets/js/jquery.blockUI.js"></script>
        <script src="Nura Admin/assets/js/jquery.nicescroll.js"></script>

        <!-- App js -->
        <script src="Nura Admin/assets/js/admin.js"></script>

    </div>
    <!-- END main -->
    <!-- BEGIN Java Script for this page -->
    <script src="Nura Admin/assets/plugins/chart.js/Chart.min.js"></script>
    <script src="Nura Admin/assets/plugins/datatables/datatables.min.js"></script>


    <!-- Counter-Up-->
    <script src="Nura Admin/assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="Nura Admin/assets/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- dataTabled data -->
    <script src="Nura Admin/assets/data/data_datatables.js"></script>

    <!-- Charts data -->
    <script src="Nura Admin/assets/data/data_charts_dashboard.js"></script>
    <script>
        $(document).on('ready', function() {
            // data-tables
            $('#dataTable').DataTable({
                data: dataSet,
                columns: [{
                    title: "Name"
                }, {
                    title: "Position"
                }, {
                    title: "Office"
                }, {
                    title: "Extn."
                }, {
                    title: "Date"
                }, {
                    title: "Salary"
                }]
            });

            // counter-up
            $('.counter').counterUp({
                delay: 10,
                time: 600
            });
        });
    </script>
    <!-- END Java Script for this page -->

</body>

</html>