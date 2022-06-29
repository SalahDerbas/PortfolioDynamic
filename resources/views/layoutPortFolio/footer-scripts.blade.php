


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
