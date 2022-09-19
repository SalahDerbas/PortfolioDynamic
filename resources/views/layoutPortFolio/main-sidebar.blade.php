<div class="d-flex flex-column">

    <div class="profile">
        <img src="{{ URL::asset('attachments/logo/'.$about['logo']) }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">{{ $user->name }}</a></h1>
        <div class="social-links mt-3 text-center">
            <a href="{{ $contact['twitter'] }}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="{{ $contact['facebook'] }}" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="{{ $contact['instagram'] }}" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="{{ $contact['skype'] }}" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="{{ $contact['linkedIn'] }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>

    <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-badge-check"></i> <span>Skills</span></a></li>
            <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
            <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
            <li><a href="#testimonials" class="nav-link scrollto"><i class="bx bx-user-plus"></i> <span>Clients</span></a></li>
            <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->
</div>
