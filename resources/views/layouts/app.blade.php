<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Event Registration') }}</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Optional: Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        	.nav-bar {
			    background: linear-gradient(135deg, #ff9ad5, #8fd3ff, #fff3a3, #d5a6ff);
			    background-size: 300% 300%;
			    animation: gradientMove 8s ease infinite;
			}

			@keyframes gradientMove {
			    0% { background-position: 0% 50%; }
			    50% { background-position: 100% 50%; }
			    100% { background-position: 0% 50%; }
			}

			/* Make text white for contrast */
			.navbar .nav-link,
			.navbar-brand h1,
			.navbar span,
			.navbar a {
			    color: #ffffff !important;
			}

			/* Optional: Hover effect */
			.navbar .nav-link:hover {
			    color: #000000 !important;
			}

        </style>
        
        <style type="text/css">
        	.navbar-brand h1 {
    font-family: 'Baloo 2', cursive;
    font-weight: 900;              /* thicker */
    font-size: 38px;               /* slightly bigger */
    letter-spacing: 1px;
    text-transform: uppercase;

    /* DARKER fashion runway colors */
    background: linear-gradient(90deg, 
        #c000ff,   /* deep purple */
        #ff0066,   /* strong pink */
        #ff6a00,   /* deep orange */
        #0051ff    /* royal blue */
    );

    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;

    /* strong depth shadow */
    text-shadow: 3px 4px 12px rgba(0,0,0,0.6);
}
			}

        </style>
        <style type="text/css">
        	.header-carousel-item::before {
    content: "";
    position: absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background: rgba(0,0,0,0.4);  /* adjust opacity */
    z-index:1;
}

.carousel-caption > .container {
    position: relative;
    z-index: 2;  /* make text appear above overlay */
}

        </style>
        <style type="text/css">
        	.carousel-img-circle {
    width: 550px;               /* bigger circle */
    height: 550px;              /* equal height for circle */
    border-radius: 50%;         /* makes it a circle */
    overflow: hidden;           /* hides overflow of image */
    border: 8px solid #fff;     /* optional white border */
    box-shadow: 0 0 40px rgba(0,0,0,0.5); /* stronger shadow for depth */
    background: #fff;           /* fallback background */
    display: flex;
    align-items: center;
    justify-content: center;

    /* pulse animation */
    animation: pulseCircle 2s infinite;
}

.carousel-img-circle img {
    width: 100%;
    height: 100%;
    object-fit: cover;          /* ensures the image fills the circle */
}

/* Pulse keyframes */
@keyframes pulseCircle {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

/* Responsive sizes */
@media (max-width: 992px) {
    .carousel-img-circle {
        width: 400px;
        height: 400px;
    }
}

@media (max-width: 768px) {
    .carousel-img-circle {
        width: 300px;
        height: 300px;
    }
}

@media (max-width: 576px) {
    .carousel-img-circle {
        width: 220px;
        height: 220px;
    }
}

        </style>
        <style type="text/css">
/* Desktop - default */
.carousel-title {
    font-family: 'Baloo 2', cursive;
    font-weight: 900;
    font-size: 40px;
    color: #fff;
    text-shadow: 3px 3px 10px rgba(0,0,0,0.6);
    line-height: 1.2;
}

.carousel-subtitle {
    font-family: 'Baloo 2', cursive;
    font-weight: 700;
    font-size: 24px;
    text-transform: uppercase;
    color: #fff;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.5);
}

.carousel-text {
    font-family: 'Quicksand', sans-serif;
    font-weight: 400;
    font-size: 18px;
    color: #fff;
    text-shadow: 1px 1px 6px rgba(0,0,0,0.4);
}

/* Tablet - medium screens */
@media (max-width: 992px) {
    .carousel-title {
        font-size: 32px;
    }
    .carousel-subtitle {
        font-size: 20px;
    }
    .carousel-text {
        font-size: 16px;
    }
}

/* Small tablets / large phones */
@media (max-width: 768px) {
    .carousel-title {
        font-size: 28px;
    }
    .carousel-subtitle {
        font-size: 18px;
    }
    .carousel-text {
        font-size: 15px;
    }
}

/* Mobile phones */
@media (max-width: 576px) {
    .carousel-title {
        font-size: 22px;
    }
    .carousel-subtitle {
        font-size: 16px;
    }
    .carousel-text {
        font-size: 14px;
    }
}


        </style>
        <style type="text/css">
            .nav-item .dropdown-menu {
    background-color: #ffffff;
}

.nav-item .dropdown-menu .dropdown-item {
    color: #000000 !important;
}

.nav-item .dropdown-menu .dropdown-item:hover {
    background-color: #f2f2f2;
    color: #000000 !important;
}

.navbar .nav-link {
    color: #ffffff;
}

.navbar .nav-link:hover,
.navbar .nav-link:focus {
    color: #ffffff !important;
}
        </style>
        
   <style>
.sdg-card-mini {
    background: #f8f9ff; /* light tint */
    border: 1px solid #e9ecff;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.04);
    transition: all 0.4s ease;
    cursor: pointer;
}

.sdg-card-mini i {
    font-size: 22px;
    color: #0d6efd;
    transition: all 0.4s ease;
}

.sdg-card-mini h6 {
    font-weight: 700;
    margin-bottom: 3px;
}

.sdg-card-mini small {
    color: #666;
    transition: all 0.4s ease;
}

/* Hover */
.sdg-card-mini:hover {
    background: linear-gradient(135deg, #0d6efd, #6610f2);
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.sdg-card-mini:hover i,
.sdg-card-mini:hover h6,
.sdg-card-mini:hover small {
    color: #ffffff;
}

.sdg-card-mini:hover i {
    transform: scale(1.2);
}
</style>
<style>
.about-item-content p {
    font-family: 'Poppins', sans-serif;
    font-size: 17px;
    line-height: 1.9;
    color: #444;
    font-weight: 400;
    letter-spacing: 0.3px;
}

.about-item-content p:first-of-type {
    font-size: 18px;
    font-weight: 500;
    color: #222;
}

.about-item-content strong,
.about-item-content h4 {
    font-family: 'Playfair Display', serif;
}
.lead-text {
    font-size: 20px;
    font-weight: 500;
    color: #111;
}
</style>
</head>
<body>
    <div id="app">
        <!-- Navbar (optional) -->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Event Registration') }}
                </a>
            </div>
        </nav> -->
        <div class="container-fluid topbar px-0 px-lg-4 bg-black py-2 d-none d-lg-block" style="background-color:#000;">
    <div class="container">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <div class="border-end border-light pe-3">
                        <a href="#" class="text-white small">
                            <i class="fas fa-map-marker-alt text-white me-2"></i>Find A Location
                        </a>
                    </div>
                    <div class="ps-3">
                        <a href="mailto:example@gmail.com" class="text-white small">
                            <i class="fas fa-envelope text-white me-2"></i>example@gmail.com
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex justify-content-end">
                    <div class="d-flex border-end border-light pe-3">
                        <a class="btn p-0 text-white me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn p-0 text-white me-3" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn p-0 text-white me-3" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="btn p-0 text-white me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                    <div class="dropdown ms-3">
                        <a href="#" class="dropdown-toggle text-white" data-bs-toggle="dropdown">
                            <small>
                                <i class="fas fa-globe-europe text-white me-2"></i> English
                            </small>
                        </a>
                        <!-- <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item">English</a>
                            <a href="#" class="dropdown-item">Bangla</a>
                            <a href="#" class="dropdown-item">French</a>
                            <a href="#" class="dropdown-item">Spanish</a>
                            <a href="#" class="dropdown-item">Arabic</a>
                        </div> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
 <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark"> 
                    <a href="#" class="navbar-brand p-0">
                        <h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> Jifa Week</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-black" id="navbarCollapse" >
                        <div class="navbar-nav mx-0 mx-lg-auto" style="background-color:#000;">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <span class="dropdown-toggle">Signup</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="{{route('designer-form')}}" class="dropdown-item">Designers</a>
                                    <a href="#" class="dropdown-item">Child Model(3-12)</a>
                                    <a href="#" class="dropdown-item">Volunteer</a>
                                    <a href="#" class="dropdown-item">Media/Press</a>
                                </div>
                            </div>
                            <!-- <a href="blog.html" class="nav-item nav-link">Blog</a> -->
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <span class="dropdown-toggle">Pages</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="feature.html" class="dropdown-item">Our Features</a>
                                    <a href="team.html" class="dropdown-item">Our team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="FAQ.html" class="dropdown-item">FAQs</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div> -->
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                            <!-- <div class="nav-btn px-3">
                                <button class="btn-search btn btn-primary btn-md-square rounded-circle flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0"> Get a Quote</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                        <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                            <i class="fa fa-phone-alt fa-2x"></i>
                            <div class="position-absolute" style="top: 7px; right: 12px;">
                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                            </div>
                        </a>
                        <div class="d-flex flex-column ms-3">
                            <span></span>
                            <a href=""><span class="text-dark"></span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- jQuery (needed for wizard) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap 5 JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>

<!-- Wizard JS -->
<script src="{{ asset('js/designer.js') }}"></script>

<!-- Optional: Custom JS -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>