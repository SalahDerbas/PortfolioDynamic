<!-- <style>
    body {font-family: Arial, Helvetica, sans-serif;}

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 100%;
        height: 53%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style> -->


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1>{{ Auth::user()->name }}</h1>

        <p>I'm <span class="typed" data-typed-items="@foreach($Positions as $Position){{$Position->name_position}},@endforeach"></span></p>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ URL::asset('attachments/user/'.$about['user']) }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>{{ $about['Position'] }}.</h3>
                    <p class="fst-italic">
                        {{ $about['title_about'] }}.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$about['birthday'] }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $about['website'] }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $contact['Calls'] }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $about['city'] }}</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $about['age'] }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$about['degree'] }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $about['email'] }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ $about['freelancer'] }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        {{$about['descriptions']}}
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
{{--    <section id="facts" class="facts">--}}
{{--        <div class="container">--}}

{{--            <div class="section-title">--}}
{{--                <h2>Facts</h2>--}}
{{--                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
{{--            </div>--}}

{{--            <div class="row no-gutters">--}}

{{--                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">--}}
{{--                    <div class="count-box">--}}
{{--                        <i class="bi bi-emoji-smile"></i>--}}
{{--                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>--}}
{{--                        <p><strong>Happy Clients</strong> consequuntur quae</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <div class="count-box">--}}
{{--                        <i class="bi bi-journal-richtext"></i>--}}
{{--                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>--}}
{{--                        <p><strong>Projects</strong> adipisci atque cum quia aut</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <div class="count-box">--}}
{{--                        <i class="bi bi-headset"></i>--}}
{{--                        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>--}}
{{--                        <p><strong>Hours Of Support</strong> aut commodi quaerat</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">--}}
{{--                    <div class="count-box">--}}
{{--                        <i class="bi bi-people"></i>--}}
{{--                        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>--}}
{{--                        <p><strong>Hard Workers</strong> rerum asperiores dolor</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End Facts Section -->--}}

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Skills</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row skills-content">
                <div class="col-lg-1" data-aos="fade-up">
                </div>

                <div class="col-lg-10" data-aos="fade-up">
                    @foreach ($Skiils as $Skill)
                    <div class="progress">
                        <span class="skill">{{$Skill->position_skill}} <i class="val">{{$Skill->percentage}}%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{$Skill->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    @endforeach



                </div>

                <div class="col-lg-1" data-aos="fade-up">
                </div>

{{--                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">--}}

{{--                    <div class="progress">--}}
{{--                        <span class="skill">PHP <i class="val">80%</i></span>--}}
{{--                        <div class="progress-bar-wrap">--}}
{{--                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="progress">--}}
{{--                        <span class="skill">WordPress/CMS <i class="val">90%</i></span>--}}
{{--                        <div class="progress-bar-wrap">--}}
{{--                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="progress">--}}
{{--                        <span class="skill">Photoshop <i class="val">55%</i></span>--}}
{{--                        <div class="progress-bar-wrap">--}}
{{--                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>{{ $summary['descriptions_summary'] }}</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4>Alex Smith</h4>
                        <p><em>{{ $summary['title_summary'] }}.</em></p>
                        <ul>
                            <li>{{ $summary['place'] }}</li>
                            <li>{{ $contact['Calls'] }}</li>
                            <li>{{ $about['email'] }}</li>
                        </ul>
                    </div>

                    <h3 class="resume-title">Education</h3>
                    @foreach ($Educations as $Education)
                    <div class="resume-item">
                        <h4>{{$Education->name}}</h4>
                        <h5>{{$Education->from_education}}  - {{$Education->to_education}}</h5>
                        <p><em>{{$Education->univercity_name}}</em></p>
                        <p> {{$Education->title}}</p>
                    </div>
                    @endforeach
{{--                    <div class="resume-item">--}}
{{--                        <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>--}}
{{--                        <h5>2010 - 2014</h5>--}}
{{--                        <p><em>Rochester Institute of Technology, Rochester, NY</em></p>--}}
{{--                        <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Professional Experience</h3>
                    @foreach ($Experiences as $Experience)
                    <div class="resume-item">
                        <h4>{{$Experience->position_experience}}</h4>
                        <h5>{{$Experience->from_experience}} - {{$Experience->to_experience}}</h5>
                        <p><em>{{$Experience->company_name}}</em></p>
                        <ul>
                            <li> {{$Experience->title_experience}}</li>

                        </ul>
                    </div>
                    @endforeach
{{--                    <div class="resume-item">--}}
{{--                        <h4>Graphic design specialist</h4>--}}
{{--                        <h5>2017 - 2018</h5>--}}
{{--                        <p><em>Stepping Stone Advertising, New York, NY</em></p>--}}
{{--                        <ul>--}}
{{--                            <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>--}}
{{--                            <li>Managed up to 5 projects or tasks at a given time while under pressure</li>--}}
{{--                            <li>Recommended and consulted with clients on the most appropriate graphic design</li>--}}
{{--                            <li>Created 4+ design presentations and proposals a month for clients and account managers</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">

                    <ul id="portfolio-flters">

                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($Projects as $Project)
                        <li data-filter=".filter-{{$Project->name_category}}">{{$Project->name_category}}</li>
                        @endforeach
                    </ul>

                </div>
            </div>


            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    @foreach($Items as $Item)


                        <div  style="height:900px; boarder:1px solid black" class="col-lg-4 col-md-6 portfolio-item portfolio-info filter-{{$Item->category->name_category}}">
                             <div class="text-center" style="border:2px solid #67bce7; padding:12px;">
                                    <img width="250px" height="180px" src="{{asset('attachments/projects/'.$Item->name_project_item .'/'.$Item->name_project_item . '/1111')}}" />

                                    <h2>{{$Item->name_project_item}}</h2>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#edit{{$Item->id}}"
                                                    title=""><i class="fa fa-edit"></i></button>

                            <!-- Trigger/Open The Modal -->
                            <!-- <button id="myBtn">Open Modal</button> -->
                        </div>

                                   <!-- edit_modal_Grade -->
                                   <div class="modal" id="edit{{$Item->id}}" tabindex="0" role="dialog"
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
                                                    <form action="#" method="post">
                                                        {{ method_field('put') }}
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="position_skill"
                                                                       class="mr-sm-2">Name Project
                                                                    :</label>
                                                                <input id="name_project_item" type="text" name="name_project_item"
                                                                       class="form-control"
                                                                       value="{{$Item->name_project_item}}"
                                                                       required>
                                                                <input id="id" type="hidden" name="id" class="form-control"
                                                                       value="{{ $Item->id }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="percentage"
                                                                       class="mr-sm-2">Name Client
                                                                    :</label>
                                                                <input type="text" class="form-control"
                                                                       value="{{$Item->name_client}}"
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
                                                                       value="{{$Item->url}}"
                                                                       required>
                                                            </div>
                                                            <div class="col">
                                                                <label for="percentage"
                                                                       class="mr-sm-2">Name Client
                                                                    :</label>
                                                                <input type="date" class="form-control"
                                                                       value="{{$Item->date_item}}"
                                                                       name="date_item" required>
                                                            </div>
                                                        </div>




                                                        <div class="form-group">
                                                            <label
                                                                for="exampleFormControlTextarea1">Descriptions
                                                                :</label>
                                                            <textarea class="form-control" name="descriptions_item"
                                                                      id="exampleFormControlTextarea1"
                                                                      rows="3">{{$Item->descriptions_item}}</textarea>
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



                            <!-- The Modal -->
                            <!-- <div id="myModal" class="modal">

                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <section id="portfolio-details" class="portfolio-details">
                                        <div class="container">

                                            <div class="row gy-4">

                                                <div class="col-lg-8">
                                                    <div class="portfolio-details-slider swiper">
                                                        <div class="swiper-wrapper align-items-center">
                                                            @foreach($Item->images as $attachment)
                                                            <div class="swiper-slide">
                                                                <img src="{{asset('attachments/projects/'.$Item->name_project_item. '/'.$attachment->filename)}}"  />
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        <div class="swiper-pagination"></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="portfolio-info">
                                                        <h3>{{$Item->name_project_item}}</h3>
                                                        <ul>

                                                            <li><strong>Category</strong>:   {{$Item->category->name_category}}</li>
                                                            <li><strong>Client</strong>: {{$Item->name_client}}</li>
                                                            <li><strong>Project date</strong>: {{$Item->date_item}}</li>
                                                            <li><strong>Project URL</strong>: <a  target="_blank" href="{{$Item->url}}">{{$Item->url}}</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="portfolio-description">
                                                        <h2>This is an example of portfolio detail</h2>
                                                        <p>
                                                            {{$Item->descriptions_item}}
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </section>

                                </div>

                            </div> -->
                        </div>
                    @endforeach


            </div>

            </div>


    </section><!-- End Portfolio Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                @foreach ($Services as $Service)
                <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"><i class="bi bi-briefcase"></i></div>
                    <h4 class="title"><a href="">{{$Service->name_service}}</a></h4>
                    <p class="description"> {{$Service->title_service}}</p>
                </div>
                @endforeach
<!-- {{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <div class="icon"><i class="bi bi-card-checklist"></i></div>--}}
{{--                    <h4 class="title"><a href="">Dolor Sitema</a></h4>--}}
{{--                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <div class="icon"><i class="bi bi-bar-chart"></i></div>--}}
{{--                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>--}}
{{--                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">--}}
{{--                    <div class="icon"><i class="bi bi-binoculars"></i></div>--}}
{{--                    <h4 class="title"><a href="">Magni Dolores</a></h4>--}}
{{--                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">--}}
{{--                    <div class="icon"><i class="bi bi-brightness-high"></i></div>--}}
{{--                    <h4 class="title"><a href="">Nemo Enim</a></h4>--}}
{{--                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">--}}
{{--                    <div class="icon"><i class="bi bi-calendar4-week"></i></div>--}}
{{--                    <h4 class="title"><a href="">Eiusmod Tempor</a></h4>--}}
{{--                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>--}}
{{--                </div>--}} -->
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title">
                <h2>CLients</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($Clients as $Client)

                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="fade-up">

                                <p>

                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{$Client->title_client}}.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{asset($Client->image)}}" class="testimonial-img" alt="">
                            <h3>{{$Client->name_client}}</h3>
                            <h4>{{$Client->position_client}}</h4>
                        </div>
                    </div><!-- End testimonial item -->
                    @endforeach



{{--                    <div class="swiper-slide">--}}
{{--                        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">--}}
{{--                            <p>--}}
{{--                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.--}}
{{--                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                            </p>--}}
{{--                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">--}}
{{--                            <h3>Sara Wilsson</h3>--}}
{{--                            <h4>Designer</h4>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">--}}
{{--                            <p>--}}
{{--                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.--}}
{{--                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                            </p>--}}
{{--                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">--}}
{{--                            <h3>Jena Karlis</h3>--}}
{{--                            <h4>Store Owner</h4>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">--}}
{{--                            <p>--}}
{{--                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.--}}
{{--                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                            </p>--}}
{{--                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">--}}
{{--                            <h3>Matt Brandon</h3>--}}
{{--                            <h4>Freelancer</h4>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">--}}
{{--                            <p>--}}
{{--                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.--}}
{{--                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                            </p>--}}
{{--                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">--}}
{{--                            <h3>John Larson</h3>--}}
{{--                            <h4>Entrepreneur</h4>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>{{ $about['city'] }}</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{ $about['email'] }}</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>{{ $contact['Calls'] }}</p>
                        </div>
                        <div>
                            <img src="{{asset('assets/img/Logo SD1.jpg')}}"  width="300px" height="300px" alt="">
                        </div>




{{--                        <iframe src="{{asset('assets/img/Logo SD1.jpg')}}" frameborder="0" style="border:0; width: 10%; height: 90px;" allowfullscreen></iframe>--}}
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form  method="POST" role="form" class="php-email-form">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" >
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" ></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>




{{--                <div class="imagebg"></div>--}}
{{--                <div class="row " style="margin-top: 50px">--}}
{{--                    <div class="col-md-6 col-md-offset-3 form-container">--}}
{{--                        <h2>Feedback</h2>--}}
{{--                        <p>--}}
{{--                            Please provide your feedback below:--}}
{{--                        </p>--}}
{{--                        <form role="form" method="PUT" id="reused_form">--}}
{{--                            {{ method_field('PUT') }}--}}
{{--                            @csrf--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12 form-group">--}}
{{--                                    <label>How do you rate your overall experience?</label>--}}
{{--                                    <p>--}}
{{--                                        <label class="radio-inline">--}}
{{--                                            <input type="radio" name="experience" id="radio_experience" value="bad" >--}}
{{--                                            Bad--}}
{{--                                        </label>--}}

{{--                                        <label class="radio-inline">--}}
{{--                                            <input type="radio" name="experience" id="radio_experience" value="average" >--}}
{{--                                            Average--}}
{{--                                        </label>--}}

{{--                                        <label class="radio-inline">--}}
{{--                                            <input type="radio" name="experience" id="radio_experience" value="good" >--}}
{{--                                            Good--}}
{{--                                        </label>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12 form-group">--}}
{{--                                    <label for="comments">--}}
{{--                                        Comments:</label>--}}
{{--                                    <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-6 form-group">--}}
{{--                                    <label for="name">--}}
{{--                                        Your Name:</label>--}}
{{--                                    <input type="text" class="form-control" id="name" name="name" required>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 form-group">--}}
{{--                                    <label for="email">--}}
{{--                                        Email:</label>--}}
{{--                                    <input type="email" class="form-control" id="email" name="email" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12 form-group">--}}
{{--                                    <button type="submit" class="btn btn-lg btn-success btn-block" >Send </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </form>--}}
{{--                        <div id="success_message" style="width:100%; height:100%; display:none; ">--}}
{{--                            <h3>Posted your feedback successfully!</h3>--}}
{{--                        </div>--}}
{{--                        <div id="error_message"--}}
{{--                             style="width:100%; height:100%; display:none; ">--}}
{{--                            <h3>Error</h3>--}}
{{--                            Sorry there was an error sending your form.--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <form  method="POST">--}}
{{--                    @csrf--}}
{{--                    @method('PUT')--}}
{{--                    First Name: <input type="text" name="first_name"><br>--}}
{{--                    Last Name: <input type="text" name="last_name"><br>--}}
{{--                    Email: <input type="text" name="email"><br>--}}
{{--                    Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>--}}
{{--                    <input type="submit" name="submit" value="Submit">--}}
{{--                </form>--}}



            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->



<!-- <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script> -->





