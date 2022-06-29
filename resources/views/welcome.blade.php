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
                            <h3>{{$Experiences}}</h3>

                            <p>Experiences</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('Experiences.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
                <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$Educations}}</h3>

                            <p>Educations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('Educations.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                                        <a class="nav-link" href="#Experiences" data-toggle="tab">Experiences</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#Educations" data-toggle="tab">Educations</a>
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
                                                        <th>Created At</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse(\App\skill::latest()->take(5)->get() as $skills)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$skills->title_skill}}</td>
                                                            <td>{{$skills->position_skill}}</td>
                                                            <td>{{$skills->percentage}}</td>
                                                            <td class="text-success">{{$skills->created_at}}</td>
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
                                                        <th>Created At</th>
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
                                                            <td class="text-success">{{$projects->created_at}}</td>
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
                                <div class="chart tab-pane" id="Experiences" style="position: relative; height: 300px;">
                                    <div id="Experiences">
                                        <div class="tab-pane fade active show"  role="tabpanel" aria-labelledby="students-tab">
                                            <div class="table-responsive mt-15">
                                                <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                                                    <thead>
                                                    <tr  class="table-info text-danger">
                                                        <th>#</th>
                                                        <th>Position</th>
                                                        <th>From </th>
                                                        <th>To</th>
                                                        <th>Company Name</th>
                                                        <th>Title</th>
                                                        <th>Created At</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse(\App\experience::latest()->take(5)->get() as $experience)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$experience->position_experience}}</td>
                                                            <td>{{$experience->from_experience}}</td>
                                                            <td>{{$experience->to_experience}}</td>
                                                            <td>{{$experience->company_name}}</td>
                                                            <td>{{$experience->title_experience}}</td>
                                                            <td class="text-success">{{$experience->created_at}}</td>
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
                                <div class="chart tab-pane" id="Educations" style="position: relative; height: 300px;">
                                    <div id="Educations">
                                        <div class="tab-pane fade active show"  role="tabpanel" aria-labelledby="students-tab">
                                            <div class="table-responsive mt-15">
                                                <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                                                    <thead>
                                                    <tr  class="table-info text-danger">
                                                        <th>#</th>
                                                        <th>name</th>
                                                        <th>From </th>
                                                        <th>To</th>
                                                        <th>University Name</th>
                                                        <th>Title</th>
                                                        <th>Created At</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse(\App\education::latest()->take(5)->get() as $education)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$education->name}}</td>
                                                            <td>{{$education->from_education}}</td>
                                                            <td>{{$education->to_education}}</td>
                                                            <td>{{$education->univercity_name}}</td>
                                                            <td>{{$education->title}}</td>
                                                            <td class="text-success">{{$education->created_at}}</td>
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

