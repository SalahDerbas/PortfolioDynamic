@extends('layouts.master')

@section('title')
    Contact Informations
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('title_page1')
Dashboard  
@endsection

@section('title_page2')
Contact
@endsection

@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form enctype="multipart/form-data" method="post" action="{{route('Contact.update','test')}}">
                        @csrf @method('PUT')
                        <div class="row">
                            <div class="col-md-12 border-right-2 border-right-blue-400">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label font-weight-semibold">Location<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="location" value="{{ $contact['location'] }}" required type="text" class="form-control" >
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label font-weight-semibold">Calls</label>
                                    <div class="col-lg-9">
                                        <input name="Calls" value="{{$contact['Calls'] }}" type="text" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label font-weight-semibold">Facebook<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="facebook" value="{{ $contact['facebook'] }}" required type="text" class="form-control" >
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label font-weight-semibold">Instagram<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="instagram" value="{{ $contact['instagram'] }}" required type="text" class="form-control" >
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label font-weight-semibold">Skype</label>
                                    <div class="col-lg-9">
                                        <input name="skype" value="{{$contact['skype'] }}" type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label font-weight-semibold">LinkedIn<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="linkedIn" value="{{ $contact['linkedIn'] }}" required type="text" class="form-control" >
                                    </div>

                                </div>



                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
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


@endsection
