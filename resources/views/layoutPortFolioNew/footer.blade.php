 <!-- ======= Footer ======= -->
 <footer id="footer">
<hr />
<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 col-md-6 footer-contact">
        <h3>{{ $user->name }}</h3>
        <p>
        {{ $about['Position'] }}. <br>
        {{ $about['website'] }}<br>
        {{ $about['city'] }} <br><br>
          <strong>Phone:</strong> {{ $contact['Calls'] }}<br>
          <strong>Email:</strong> {{ $about['email'] }}<br>
        </p>
      </div>



      <div class="col-lg-6 col-md-6 footer-links">
      <h4>Our Social Networks</h4>
        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
        <div class="social-links mt-3">
        <a href="{{ $contact['twitter'] }}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="{{ $contact['facebook'] }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="{{ $contact['instagram'] }}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="{{ $contact['skype'] }}" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="{{ $contact['linkedIn'] }}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    
    </div>
  </div>
</div>

<div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span><a href="http://salah-derbas.sd-softwares.com/">D.Salah Derbas</a></span></strong><br> All Rights Reserved &copy; 2022
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
    Designed by <a href="http://salah-derbas.sd-softwares.com/">Salah Derbas</a>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
