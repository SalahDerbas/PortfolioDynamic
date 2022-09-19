<!DOCTYPE html>
<html lang="en">

<head>
@include('layoutPortFolioNew.head')
</head>

<body>


  <main id="main">
  <header id="header" class="fixed-top header-inner-pages">
  @include('layoutPortFolioNew.main-navbar')
</header>

      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/portfolio">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
        <h2>Portfolio Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

       @foreach ($Item as $I )

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
         <div class="row gy-5">
           <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{asset('attachments/projects/'.$I->name_project_item .'/'.$I->name_project_item . '/1111')}}" >
                </div>
                @foreach($I->images as $attachment)
                <div class="swiper-slide">
                  <img src="{{asset('attachments/projects/'.$I->name_project_item. '/'.$attachment->filename)}}" >
                </div>
                @endforeach
                </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>:  {{$I->category->name_category}}</li>
                <li><strong>Client</strong>: {{ $I->name_client }}</li>
                <li><strong>Project date</strong>: {{ $I->date_item }}</li>
                <li><strong>Project URL</strong>: <a href="{{ $I->url }}" target="_blank" >{{ $I->url }}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Portfolio Description</h2>
              <p>
              {{ $I->descriptions_item }}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
    @endforeach

  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
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

</body>

</html>