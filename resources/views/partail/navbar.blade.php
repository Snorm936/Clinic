<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Klinik</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
                <a href="/about" class="nav-item nav-link {{ (request()->is('about')) ? 'active' : '' }}">About</a>
                <a href="/service" class="nav-item nav-link {{ (request()->is('service')) ? 'active' : '' }}">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="/feature" class="dropdown-item {{ (request()->is('feature')) ? 'active' : '' }}">Feature</a>
                        <a href="/doctor" class="dropdown-item {{ (request()->is('doctor')) ? 'active' : '' }}">Our Doctor</a>
                        <a href="/appointment" class="dropdown-item {{ (request()->is('appointment')) ? 'active' : '' }}">Appointment</a>
                        <a href="/testimonial" class="dropdown-item {{ (request()->is('testimonial')) ? 'active' : '' }}">Testimonial</a>
                        <a href="/error" class="dropdown-item {{ (request()->is('error')) ? 'active' : '' }}">404 Page</a>
                    </div>
                </div>
                <a href="/contact" class="nav-item nav-link {{ (request()->is('contact')) ? 'active' : '' }}">Contact</a>
            </div>
            <a href="/appointment" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Appointment<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>