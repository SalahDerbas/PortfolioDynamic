@extends('layouts.master')

@section('title')
    Projects Portfolio
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
Projects 
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Projects Informations</h3>
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
                            Add Project
                        </button>

                        <div class="card-body">
                            <table id="datatable"  class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name Project</th>
                                    <th>Name Client</th>
                                    <th>URL</th>
                                    <th>Descriptions</th>
                                    <th>Date</th>
                                    <th>Maim Image</th>
                                    <th style="width :40px; ">Images</th>
                                    <th>Category</th>
                                    <th>Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($ItemsP as $Items)
                                    <tr>
                                        <?php $i++; ?>
                                        <td>{{ $i }}</td>
                                        <td>{{$Items->name_project_item}}</td>
                                        <td>{{$Items->name_client}}</td>
                                        <td>{{$Items->url}}</td>
                                        <td>{{$Items->descriptions_item}}</td>
                                        <td>{{$Items->date_item}}</td>
                                            <td>

                                          <img src="{{asset('attachments/projects/'.$Items->name_project_item .'/'.$Items->name_project_item . '/1111')}}" width="100" height="100" />

                                            </td>
                                        <td>
                                            @foreach($Items->images as $attachment)
                                                <img src="{{asset('attachments/projects/'.$Items->name_project_item. '/'.$attachment->filename)}}" width="100" height="100" />
                                            @endforeach
                                        </td>
                                        <td>
                                            {{$Items->category->name_category}}
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#edit{{$Items->id}}"
                                                    title=""><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#delete{{$Items->id}}"
                                                    title=""><i
                                                    class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    <!-- edit_modal_Grade -->
                                    <div class="modal fade" id="edit{{$Items->id}}" tabindex="-1" role="dialog"
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
                                                    <form action="{{ route('ItemsP.update', 'test') }}" method="post">
                                                        {{ method_field('put') }}
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="position_skill"
                                                                       class="mr-sm-2">Name Project
                                                                    :</label>
                                                                <input id="name_project_item" type="text" name="name_project_item"
                                                                       class="form-control"
                                                                       value="{{$Items->name_project_item}}"
                                                                       required>
                                                                <input id="id" type="hidden" name="id" class="form-control"
                                                                       value="{{ $Items->id }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="percentage"
                                                                       class="mr-sm-2">Name Client
                                                                    :</label>
                                                                <input type="text" class="form-control"
                                                                       value="{{$Items->name_client}}"
                                                                       name="name_client" required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col">

                                                                <div class="form-group">

                                                                    <label for="Name" class="mr-sm-2">Category
                                                                        :</label>
                                                                    <select class="form-control" name="category_id" id="category_id" required autofocus >
                                                                        @foreach($categories as $c)
                                                                            <option value = "{{ $c->id }}">{{ $c->name_category }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>





                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="position_skill"
                                                                       class="mr-sm-2">URL
                                                                    :</label>
                                                                <input id="url" type="text" name="url"
                                                                       class="form-control"
                                                                       value="{{$Items->url}}"
                                                                       required>
                                                            </div>
                                                            <div class="col">
                                                                <label for="percentage"
                                                                       class="mr-sm-2">Name Client
                                                                    :</label>
                                                                <input type="date" class="form-control"
                                                                       value="{{$Items->date_item}}"
                                                                       name="date_item" required>
                                                            </div>
                                                        </div>




                                                        <div class="form-group">
                                                            <label
                                                                for="exampleFormControlTextarea1">Descriptions
                                                                :</label>
                                                            <textarea class="form-control" name="descriptions_item"
                                                                      id="exampleFormControlTextarea1"
                                                                      rows="3">{{$Items->descriptions_item}}</textarea>
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
                                    <div class="modal fade" id="delete{{ $Items->id }}" tabindex="-1" role="dialog"
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
                                                    <form action="{{ route('ItemsP.destroy', 'test') }}" method="post">
                                                        {{ method_field('Delete') }}
                                                        @csrf
                                                        Are you sure delete ?
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="{{ $Items->id }}">
                                                        <input id="name_project_item" type="hidden" name="name_project_item" class="form-control"
                                                               value="{{ $Items->name_project_item }}">
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
                            Add Project
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- add_form -->
                        <form action="{{ route('ItemsP.store') }}"method="post"  autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="Name" class="mr-sm-2">Name Project
                                        :</label>
                                    <input id="name_project_item" type="text" name="name_project_item" class="form-control" required>
                                </div>
                                <div class="col">
                                    <label for="Name_en" class="mr-sm-2">Name Client
                                        :</label>
                                    <input id="name_client" type="text" class="form-control" name="name_client" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">

                                <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">

                                    <label for="Name" class="mr-sm-2">Category
                                        :</label>
                                    <select class="form-control" name="category_id" id="category_id" required autofocus required >
                                        @foreach($categories as $c)
                                            <option value = "{{ $c->id }}">{{ $c->name_category }}</option>
                                        @endforeach
                                    </select>


                                    @if ($errors->has('category_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="Name" class="mr-sm-2"> URL
                                        :</label>
                                    <input id="url" type="text" name="url" class="form-control" required>
                                </div>
                                <div class="col">
                                    <label for="Name_en" class="mr-sm-2">Date
                                        :</label>
                                    <input id="date_item" type="date" class="form-control" name="date_item" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descriptions
                                    :</label>
                                <textarea class="form-control" name="descriptions_item" required id="exampleFormControlTextarea1"
                                          rows="4"></textarea>
                            </div>

                            <div class="row" >
                                <div class="col">
                                    <label for="photos" class="mr-sm-2">Photos *(jpg)
                                        :</label>
                                    <input type="file" accept="image/*" name="photos[]" multiple required>
                                </div>
                            </div>
                            <br>

                            <div class="row" >
                                <div class="col">
                                    <label for="photoooooo" class="mr-sm-2">Main Photo *(jpg)
                                        :</label>
                                    <input type="file" accept="image" name="photoooooo[]" required >
                                </div>
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
