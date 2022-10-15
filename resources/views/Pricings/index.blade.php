@extends('layouts.master')

@section('title')
Pricings Portfolio
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
Pricings
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> Pricing Informations</h3>
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
                            Add Pricing
                        </button>

                        <div class="card-body">
                            <table id="datatable"  class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Price</th>
                                    <th>All Featured</th>
                                    <th>Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($pricings as $pricing)
                                    <tr>
                                        <?php $i++; ?>
                                        <td>{{ $i }}</td>
                                        <td>{{$pricing->name_pricing}}</td>
                                        <td>{{$pricing->date}}</td>
                                        <td>{{$pricing->price}}</td>
                                        <td>
                                       1-  {{$pricing->featured_1}} <br>
                                       2-  {{$pricing->featured_2}} <br>
                                       3-  {{$pricing->featured_3}} <br>
                                       4-  {{$pricing->featured_4}} <br>
                                       5-  {{$pricing->featured_5}} <br>

                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#edit{{$pricing->id}}"
                                                    title=""><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#delete{{$pricing->id}}"
                                                    title=""><i
                                                    class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    <!-- edit_modal_Grade -->
                                    <div class="modal fade" id="edit{{$pricing->id}}" tabindex="-1" role="dialog"
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
                                                    <form action="{{ route('Pricings.update', 'test') }}" method="post">
                                                        {{ method_field('put') }}
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="name_pricing"
                                                                       class="mr-sm-2">Pricing Name
                                                                    :</label>
                                                                <input id="name_pricing" type="text" name="name_pricing"
                                                                       class="form-control"
                                                                       value="{{$pricing->name_pricing}}"
                                                                       required>
                                                                <input id="id" type="hidden" name="id" class="form-control"
                                                                       value="{{ $pricing->id }}">
                                                            </div>

                                                        </div>
                                                        <div class="col">
                                                                <label for="price"
                                                                       class="mr-sm-2">Price
                                                                    :</label>
                                                                <input type="number" class="form-control"
                                                                       value="{{$pricing->price}}"
                                                                       name="price" required>
                                                            </div>

                                                            <label for="cars">Choose a Date:</label>

                                                                    <select name="date" id="date">
                                                                    <option value="day">Day</option>
                                                                    <option value="week">Week</option>
                                                                    <option value="mounth">Mounth</option>
                                                                    <option value="year">Year</option>
                                                                    </select>

                                                                    <div class="col">
                                                                <label for="featured_1"
                                                                       class="mr-sm-2">featured 1
                                                                    :</label>
                                                                <input id="featured_1" type="text" name="featured_1"
                                                                       class="form-control"
                                                                       value="{{$pricing->featured_1}}"
                                                                       required>
                                                                
                                                            </div>
                                                            <div class="col">
                                                                <label for="featured_2"
                                                                       class="mr-sm-2">featured 2
                                                                    :</label>
                                                                <input id="featured_2" type="text" name="featured_2"
                                                                       class="form-control"
                                                                       value="{{$pricing->featured_2}}"
                                                                       required>
                                                            
                                                            </div>
                                                            <div class="col">
                                                                <label for="featured_3"
                                                                       class="mr-sm-2">featured 3
                                                                    :</label>
                                                                <input id="featured_3" type="text" name="featured_3"
                                                                       class="form-control"
                                                                       value="{{$pricing->featured_3}}"
                                                                       required>
                                                              
                                                            </div>
                                                            <div class="col">
                                                                <label for="featured_4"
                                                                       class="mr-sm-2">featured 4
                                                                    :</label>
                                                                <input id="featured_4" type="text" name="featured_4"
                                                                       class="form-control"
                                                                       value="{{$pricing->featured_4}}"
                                                                       required>
                                                                
                                                            </div>
                                                            <div class="col">
                                                                <label for="featured_5"
                                                                       class="mr-sm-2">featured 5
                                                                    :</label>
                                                                <input id="featured_5" type="text" name="featured_5"
                                                                       class="form-control"
                                                                       value="{{$pricing->featured_5}}"
                                                                       required>
                                                                
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
                                    <div class="modal fade" id="delete{{ $pricing->id }}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        Delete Pricing
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('Pricings.destroy', 'test') }}" method="post">
                                                        {{ method_field('Delete') }}
                                                        @csrf
                                                        Are you sure delete ?
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="{{ $pricing->id }}">
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
                            Add Pricing
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- add_form -->
                        <form action="{{ route('Pricings.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="name_pricing" class="mr-sm-2">Pricing Name
                                        :</label>
                                    <input id="name_pricing" type="text" name="name_pricing" class="form-control">
                                </div>

                            </div>

                            <label for="cars">Choose a Date:</label>

                                <select name="date" id="date">
                                <option value="day">Day</option>
                                <option value="week">Week</option>
                                <option value="mounth">Mounth</option>
                                <option value="year">Year</option>
                                </select>

                            <div class="row">
                                <div class="col">
                                    <label for="price" class="mr-sm-2"> Price
                                        :</label>
                                    <input id="price" type="number" name="price" class="form-control">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="featured_1" class="mr-sm-2"> featured 1
                                        :</label>
                                    <input id="featured_1" type="text" name="featured_1" class="form-control">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="featured_2" class="mr-sm-2"> featured 2
                                        :</label>
                                    <input id="featured_2" type="text" name="featured_2" class="form-control">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="featured_1" class="mr-sm-2"> featured 3
                                        :</label>
                                    <input id="featured_3" type="text" name="featured_3" class="form-control">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="featured_1" class="mr-sm-2"> featured 4
                                        :</label>
                                    <input id="featured_4" type="text" name="featured_4" class="form-control">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="featured_1" class="mr-sm-2"> featured 5
                                        :</label>
                                    <input id="featured_5" type="text" name="featured_5" class="form-control">
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
