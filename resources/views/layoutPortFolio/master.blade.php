<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @include('layoutPortFolio.head')
</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
 @include('layoutPortFolio.main-sidebar')
</header><!-- End Header -->

 @include('layoutPortFolio.main')
@include('layoutPortFolio.footer')

  @include('layoutPortFolio.footer-scripts')

</body>

</html>
