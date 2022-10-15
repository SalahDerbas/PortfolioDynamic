@extends('layouts.master')

@section('title')
    Clients Portfolio
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
Clients
@endsection

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Clients Informations</h3>
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

                    <button style="margin-left: 12px; margin-top: 12px; width:110px;" type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                        Add Client
                    </button>

                    <div class="card-body">
                        <table id="datatable"  class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name Client</th>
                                <th>Position Client</th>
                                <th>Title</th>
                                <th>Facebook</th>
                                <th>Instegram</th>
                                <th>Image</th>
                                <th>Operations</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach ($Clients as $Client)
                            <tr>
                                <?php $i++; ?>
                                <td>{{ $i }}</td>
                                <td>{{$Client->name_client}}</td>
                                <td>{{$Client->position_client}}</td>
                                <td>{{$Client->title_client}}</td>
                                <td>{{$Client->facebook}}</td>
                                <td>{{$Client->instegram}}</td>
{{--                                <td>--}}
{{--                                    <img src="{{ asset( $Client->image) }}" />--}}
{{--                                </td>--}}
                                    <td>

                                        <img src="{{asset(  $Client->image)}}" width="100" height="100" /></td>

{{--                                    <td>--}}
{{--                                        <img class="animation__shake" src="{{asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">--}}

{{--                                        <img  class="animation__shake" src="{{asset('storage/app/public/ZRsR9loJ6MEEEXVTrqIJeqMlvePIFeuRbN5L98Yo.png') }}"--}}
{{--                                              style="height: 100px; width: 150px;"></td>--}}

                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#edit{{$Client->id}}"
                                            title=""><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#delete{{$Client->id}}"
                                            title=""><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            <!-- edit_modal_Grade -->
                            <div class="modal fade" id="edit{{$Client->id}}" tabindex="-1" role="dialog"
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
                                            <form action="{{ route('Clients.update', 'test') }}" method="post">
                                                {{ method_field('put') }}
                                                @csrf
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="position_skill"
                                                               class="mr-sm-2">Name Client
                                                            :</label>
                                                        <input id="name_client" type="text" name="name_client"
                                                               class="form-control"
                                                               value="{{$Client->name_client}}"
                                                               required>
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="{{ $Client->id }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="percentage"
                                                               class="mr-sm-2">Position Client
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                               value="{{$Client->position_client}}"
                                                               name="position_client" required>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col">
                                                        <label for="facebook"
                                                               class="mr-sm-2">Facebook Client
                                                            :</label>
                                                        <input  type="text" name="facebook"
                                                               class="form-control"
                                                               value="{{$Client->facebook}}"
                                                               required>
                                                       
                                                    </div>
                                                    <div class="col">
                                                        <label for="instegram"
                                                               class="mr-sm-2">Instegram Client
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                               value="{{$Client->instegram}}"
                                                               name="instegram" required>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label
                                                        for="exampleFormControlTextarea1">Title
                                                        :</label>
                                                    <textarea class="form-control" name="title_client"
                                                              id="exampleFormControlTextarea1"
                                                              rows="3">{{$Client->title_client}}</textarea>
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
                            <div class="modal fade" id="delete{{ $Client->id }}" tabindex="-1" role="dialog"
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
                                            <form action="{{ route('Clients.destroy', 'test') }}" method="post">
                                                {{ method_field('Delete') }}
                                                @csrf
                                                Are you sure delete ?
                                                <input id="id" type="hidden" name="id" class="form-control"
                                                       value="{{ $Client->id }}">
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
                        Add Client
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- add_form -->
                    <form action="{{ route('Clients.store') }}"  enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="Name" class="mr-sm-2">Name Client
                                    :</label>
                                <input id="name_client" type="text" name="name_client" class="form-control">
                            </div>
                            <div class="col">
                                <label for="Name_en" class="mr-sm-2">Position Client
                                    :</label>
                                <input id="position_client" type="text" class="form-control" name="position_client">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col">
                                <label for="facebook" class="mr-sm-2">Facebook Client
                                    :</label>
                                <input id="facebook" type="text" class="form-control" name="facebook">
                            </div>
                            <div class="col">
                                <label for="instegram" class="mr-sm-2">Instegram Client
                                    :</label>
                                <input id="instegram" type="text" class="form-control" name="instegram">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Title
                                :</label>
                            <textarea class="form-control" name="title_client" id="exampleFormControlTextarea1"
                                      rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="Name_en" class="mr-sm-2">Image Client
                                    :</label>
                                <input type="file" name="image" placeholder="Choose image" id="image">
                            </div>
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
