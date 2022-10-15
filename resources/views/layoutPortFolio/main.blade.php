
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1>{{ $user->name }}</h1>

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
            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4>Alex Smith</h4>
                        <ul>

                        </ul>
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

                    <div class="col-lg-6 col-md-6 portfolio-item portfolio-info filter-{{$Item->category->name_category}}">

                    <div class="text-center" >
             <img width="250px" height="180px" src="{{asset('attachments/projects/'.$Item->name_project_item .'/'.$Item->name_project_item . '/1111')}}" />

                <h2>{{$Item->name_project_item}}</h2>
                <a href="{{'/projectinformation/'. $Item->id }}" target="_blank"><i class="bx bxl-twitter"></i>
                <button type="button" class="btn btn-info btn-sm"
                                data-target="#edit{{$Item->id}}"
                                title=""><i class="fa fa-edit"></i></button>
                                </a>
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




{{--  <iframe src="{{asset('assets/img/Logo SD1.jpg')}}" frameborder="0" style="border:0; width: 10%; height: 90px;" allowfullscreen></iframe>--}}
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

            </div>

        </div>
    </section><!-- End Contact Section -->
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=963954241914" target="_blank">
            <h5><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/> </svg>
            </h5></a>
    </div>
</main><!-- End #main -->

<style>
    .whatsapp {
        position: fixed;
        right: 0px;
        top: 77%;
    }
    .whatsapp h5  {
        color: white;
        background: #20b20f;
        padding: 20px;
        border-radius: 10px;
    }
</style>






