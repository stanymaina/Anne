@extends('layouts.html')

@section('links')
        <!-- Bootstrap core CSS-->
        <link href="/vendor/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="/vendor/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="/vendor/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

        <link href="/vendor/time/jquery.timepicker.css" rel="stylesheet">
        <link href="/vendor/time/lib/bootstrap-datepicker.css" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="/vendor/admin/css/sb-admin.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
        </head>

            @yield('admin-index')

        <!-- Bootstrap core JavaScript-->
        <script src="/vendor/admin/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="/vendor/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Page level plugin JavaScript-->
        <script src="/vendor/admin/vendor/chart.js/Chart.min.js"></script>
        <script src="/vendor/admin/vendor/datatables/jquery.dataTables.js"></script>
        <script src="/vendor/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="/vendor/admin/js/sb-admin.min.js"></script>
        <!-- Custom scripts for this page-->
        <script src="/vendor/admin/js/sb-admin-datatables.min.js"></script>
        <script src="/vendor/admin/js/sb-admin-charts.min.js"></script>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
        {{--  <script type="text/javascript" src="/vendor/time/datepair.js"></script>
        <script type="text/javascript" src="/vendor/time/jquery.datepair.js"></script>  --}}
        <script type="text/javascript" src="/vendor/time/jquery.timepicker.js"></script>
        <script type="text/javascript" src="/vendor/time/lib/bootstrap-datepicker.js"></script>        
        <script>
            // initialize input widgets first
            $('#datepairExample .time').timepicker({
                'showDuration': true,
                'timeFormat': 'g:ia'
            });
        
            $('#datepairExample .date').datepicker({
                'format': 'yyyy-m-d',
                'autoclose': true
            });
        
            // initialize datepair
            $('#datepairExample').datepair();
        </script>
         {{--  <script src="{{ asset('js/app.js') }}"></script>  --}}

        {{--  @yield('admin-index')     --}}
        
    </div>
@endsection