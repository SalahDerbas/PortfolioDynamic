


<!-- Vendor JS Files -->
<script src="{{URL::asset('assets2/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{URL::asset('assets2/vendor/aos/aos.js')}}"></script>
<script src="{{URL::asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('assets2/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{URL::asset('assets2/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{URL::asset('assets2/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{URL::asset('assets2/vendor/typed.js/typed.min.js')}}"></script>
<script src="{{URL::asset('assets2/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{URL::asset('assets2/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{URL::asset('assets2/js/main.js')}}"></script>

<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>


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

@yield('scripts')
