@extends('layouts.master')

@section('title')
    Education Portfolio
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('title_page1')
    Experiences
@endsection

@section('title_page2')
    Dashboard
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Experience Informations</h3>
                        </div>
                        <!-- /.card-header -->

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <button style="margin-left: 12px; margin-top: 12px; width:150px;" type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                            Add Experience
                        </button>

                        <div class="card-body">
                            <table id="datatable"  class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Position Experience</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>Company Name & Place</th>
                                    <th>Title</th>
                                    <th>Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($Experiences as $Experience)
                                    <tr>
                                        <?php $i++; ?>
                                        <td>{{ $i }}</td>
                                        <td>{{$Experience->position_experience}}</td>
                                        <td>{{$Experience->from_experience}}</td>
                                        <td>{{$Experience->to_experience}}</td>
                                        <td>{{$Experience->company_name}}</td>
                                        <td>{{$Experience->title_experience}}</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#edit{{$Experience->id}}"
                                                    title=""><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#delete{{$Experience->id}}"
                                                    title=""><i
                                                    class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    <!-- edit_modal_Grade -->
                                    <div class="modal fade" id="edit{{$Experience->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- add_form -->
                                                    <form action="{{ route('Experiences.update', 'test') }}" method="post">
                                                        {{ method_field('put') }}
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="position_skill"
                                                                       class="mr-sm-2">Education Name
                                                                    :</label>
                                                                <input id="position_experience" type="text" name="position_experience"
                                                                       class="form-control"
                                                                       value="{{$Experience->position_experience}}"
                                                                       required>
                                                                <input id="id" type="hidden" name="id" class="form-control"
                                                                       value="{{ $Experience->id }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="from_experience"
                                                                       class="mr-sm-2">From Date
                                                                    :</label>
                                                                <input type="date" class="form-control"
                                                                       value="{{$Experience->from_experience}}"
                                                                       name="from_experience" required>
                                                            </div>
                                                            <div class="col">
                                                                <label for="to_experience"
                                                                       class="mr-sm-2">To Date
                                                                    :</label>
                                                                <input type="date" class="form-control"
                                                                       value="{{$Experience->to_experience}}"
                                                                       name="to_experience" required>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="univercity_name"
                                                                       class="mr-sm-2">Company Name & Place
                                                                    :</label>
                                                                <input id="company_name" type="text" name="company_name"
                                                                       class="form-control"
                                                                       value="{{$Experience->company_name}}"
                                                                       required>

                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label
                                                                for="exampleFormControlTextarea1">Title
                                                                :</label>
                                                            <textarea class="form-control" name="title_experience"
                                                                      id="exampleFormControlTextarea1"
                                                                      rows="3">{{$Experience->title_experience}}</textarea>
                                                        </div>
                                                        <br><br>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                    class="btn btn-success">Submit</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- delete_modal_Grade -->
                                    <div class="modal fade" id="delete{{ $Experience->id }}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        Delete Skill
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('Experiences.destroy', 'test') }}" method="post">
                                                        {{ method_field('Delete') }}
                                                        @csrf
                                                        Are you sure delete ?
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="{{ $Experience->id }}">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                    class="btn btn-danger">ٍSubmit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>


        <!-- add_modal_Grade -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                            Add Education
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- add_form -->
                        <form action="{{ route('Experiences.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="Name" class="mr-sm-2">Position Experience
                                        :</label>
                                    <input id="position_experience" type="text" name="position_experience" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="Name_en" class="mr-sm-2">From Date
                                        :</label>
                                    <input id="from_experience" type="date" class="form-control" name="from_experience">
                                </div>
                                <div class="col">
                                    <label for="Name_en" class="mr-sm-2">To Date
                                        :</label>
                                    <input id="to_experience" type="date" class="form-control" name="to_experience">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="Name" class="mr-sm-2">Company Name & Place
                                        :</label>
                                    <input id="company_name" type="text" name="company_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Title
                                    :</label>
                                <textarea class="form-control" name="title_experience" id="exampleFormControlTextarea1"
                                          rows="3"></textarea>
                            </div>
                            <br><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    </form>

                </div>
            </div>



        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
