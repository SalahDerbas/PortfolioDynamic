<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @include('layoutPortFolioNew.head')
</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header"  class="fixed-top ">
 @include('layoutPortFolioNew.main-navbar')
</header><!-- End Header -->


 @include('layoutPortFolioNew.main')
@include('layoutPortFolioNew.footer')

@include('layoutPortFolioNew.footer-scripts')

</body>

</html>
