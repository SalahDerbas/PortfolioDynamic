@extends('layouts.master')

@section('title')
    Portfolio
@stop

@section('css')

@endsection

@section('title_page1')
Main
@endsection

@section('title_page2')
Dashboard
@endsection


@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$Skill}}</h3>

                            <p>Skills</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{route('Skills.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$Pricings}}</h3>

                            <p>Pricings</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('Pricings.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
                <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$Clients}}</h3>

                            <p>Clients</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('Clients.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$Category}}</h3>

                            <p>Category</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{route('CategoryP.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                <div class="col-lg-4 col-12">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$ItemsP}}</h3>

                            <p>Projects</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{route('ItemsP.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Operations
                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#Skills" data-toggle="tab">Skills</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#Projects" data-toggle="tab">Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#Pricings" data-toggle="tab">Pricings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#Clients" data-toggle="tab">Clients</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">

                                <div class="chart tab-pane active" id="Skills" style="position: relative; height: 300px;">
                                    <div id="Skills">
                                        <div class="tab-pane fade active show" id="students" role="tabpanel" aria-labelledby="students-tab">
                                            <div class="table-responsive mt-15">
                                                <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                                                    <thead>
                                                    <tr  class="table-info text-danger">
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Positions</th>
                                                        <th>Percentage</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse(\App\skill::latest()->take(5)->get() as $skills)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$skills->title_skill}}</td>
                                                            <td>{{$skills->position_skill}}</td>
                                                            <td>{{$skills->percentage}}</td>
                                                            @empty
                                                                <td class="alert-danger" colspan="8">Data Not Found</td>
                                                        </tr>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chart tab-pane" id="Projects" style="position: relative; height: 300px;">
                                    <div id="Projects">
                                        <div class="tab-pane fade active show"  role="tabpanel" aria-labelledby="students-tab">
                                            <div class="table-responsive mt-15">
                                                <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                                                    <thead>
                                                    <tr  class="table-info text-danger">
                                                        <th>#</th>
                                                        <th>Project Name</th>
                                                        <th>Client Name</th>
                                                        <th>URL</th>
                                                        <th>Descriptions</th>
                                                        <th>Date</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse(\App\portfolioItem::latest()->take(5)->get() as $projects)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$projects->name_project_item}}</td>
                                                            <td>{{$projects->name_client}}</td>
                                                            <td>{{$projects->url}}</td>
                                                            <td>{{$projects->descriptions_item}}</td>
                                                            <td>{{$projects->date_item}}</td>
                                                            @empty
                                                                <td class="alert-danger" colspan="8">Data Not Found</td>
                                                        </tr>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="chart tab-pane" id="Pricings" style="position: relative; height: 300px;">
                                    <div id="Pricings">
                                        <div class="tab-pane fade active show"  role="tabpanel" aria-labelledby="students-tab">
                                            <div class="table-responsive mt-15">
                                                <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                                                    <thead>
                                                    <tr  class="table-info text-danger">
                                                        <th>#</th>
                                                        <th>Pricing Name</th>
                                                        <th>Date</th>
                                                        <th>Price</th>
                                                        <th>All Features</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse(\App\pricing::latest()->take(5)->get() as $pricings)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$pricings->name_pricing}}</td>
                                                            <td>{{$pricings->date}}</td>
                                                            <td>{{$pricings->price}}</td>
                                                            <td>
                                                            {{$pricings->featured_1}} <br>
                                                            {{$pricings->featured_2}} <br>
                                                            {{$pricings->featured_3}} <br>
                                                            {{$pricings->featured_4}} <br>
                                                            {{$pricings->featured_5}} <br>
                                                            </td>
                                                            @empty
                                                                <td class="alert-danger" colspan="8">Data Not Found</td>
                                                        </tr>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="chart tab-pane" id="Clients" style="position: relative; height: 300px;">
                                    <div id="Clients">
                                        <div class="tab-pane fade active show"  role="tabpanel" aria-labelledby="students-tab">
                                            <div class="table-responsive mt-15">
                                                <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                                                    <thead>
                                                    <tr  class="table-info text-danger">
                                                        <th>#</th>
                                                        <th>Client Name</th>
                                                        <th>Position Client</th>
                                                        <th>Title</th>
                                                        <th>Image</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse(\App\client::latest()->take(5)->get() as $clients)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$clients->name_client}}</td>
                                                            <td>{{$clients->position_client}}</td>
                                                            <td>{{$clients->title_client}}</td>
                                                            <td>
                                                            <img src="{{asset(  $clients->image)}}" width="100" height="100" /></td>
                                                            </td>
                                                            @empty
                                                                <td class="alert-danger" colspan="8">Data Not Found</td>
                                                        </tr>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                              
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </section>
                <!-- /.Left col -->

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection


@section('scripts')

@endsection

