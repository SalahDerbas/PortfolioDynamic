<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{asset('assets/img/Logo SD1.jpg')}}" alt="SD Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

        <span class="brand-text font-weight-light">Portfolio Project</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">




        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{route('home')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('About.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            About You
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('AboutQuestions.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Questions About You
                        </p>
                    </a>
                </li>
                

                <li class="nav-item">
                    <a href="{{route('Position.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Position You
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('Summary.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Summary You
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Skills.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Skills You
                        </p>
                    </a>
                </li>
                <li class="nav-header">Professional</li>
                <li class="nav-item">
                    <a href="{{route('Experiences.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Experiences You
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Educations.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Educations You
                        </p>
                    </a>
                </li>
                <li class="nav-header">Questions</li>
                <li class="nav-item">
                    <a href="{{route('Questions.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Questions  You
                        </p>
                    </a>
                </li>
                <li class="nav-header">Pricing</li>
                <li class="nav-item">
                    <a href="{{route('Pricings.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                        Pricing  You
                        </p>
                    </a>
                </li>
                <li class="nav-header">Portfolio</li>
                <li class="nav-item">
                    <a href="{{route('CategoryP.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Category You
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('ItemsP.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Projects You
                        </p>
                    </a>
                </li>
                <li class="nav-header"> Services </li>
                <li class="nav-item">
                    <a href="{{route('Services.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>    Services You </p>
                    </a>
                </li>
                <li class="nav-header"> Clients </li>
                <li class="nav-item">
                    <a href="{{route('Clients.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>  Client You </p>
                    </a>
                </li>
               
                <li class="nav-header"> Contacts </li>
                <li class="nav-item">
                    <a href="{{route('Contact.index')}}" class="nav-link">
                        <i class="fas fa-file nav-icon"></i>
                        <p>    Contact </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
