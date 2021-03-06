<header>
    <div class="header-top-bar">
        <div class="container-flude">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0">
                        <li class="list-inline-item"><a href="mailto:master-mistress@gmail.com"><i class="icofont-support-faq mr-2"></i>master-mistress@gmail.com</a></li>
                        <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Dhaka,Mirpur-1216,South Paikpara </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                        <a href="tel:+23-345-67890">
                            <span>Call Now : </span>
                            <span class="h4">01515-612832</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('novena/images/logo.png') }}" alt="" class="img-fluid">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icofont-navigation-menu"></span>
      </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('find-tuitor') }}">Find A Tutor</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('tuitor_list') }}">Our Tutors</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('job') }}">Tuitions Job</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                   @if (Auth::check() && Auth::user()->role->id == 1)              
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.route') }}">{{ Auth::user()->name }}</a></li>
                    @elseif(Auth::check() &&Auth::user()->role->id == 2)
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">{{ Auth::user()->name }}</a></li>
                   @else
                    <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('register') }}">Register</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</header>