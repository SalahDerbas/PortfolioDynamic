<!-- jQuery -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/moment/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="{{ URL::asset('assets/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript" src="{{ URL::asset('assets/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script type="text/javascript" src="{{ URL::asset('assets/js/pages/dashboard.js') }}"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>
@yield('scripts')
