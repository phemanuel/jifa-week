<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Jifa Week :: Home</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="{{asset('home/lib/animate/animate.min.css')}}"/>
        <link href="{{asset('home/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('home/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('home/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('home/css/style.css')}}" rel="stylesheet">
        
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
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
       
        <!-- Spinner End -->

        <!-- Topbar Start -->
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
                            <span>Call to Our Experts</span>
                            <a href="tel:+ 0123 456 7890"><span class="text-dark">Free: + 0123 456 7890</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center bg-primary">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item bg-dark">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h4 class="carousel-subtitle mb-3">✨ Welcome to Jifa Week</h4>
									<h1 class="carousel-title mb-4">Where Creativity Meets Style</h1>
									<p class="carousel-text mb-5">Celebrate young talents showcasing the latest trends in children’s fashion. Fun, color, and glamour all in one stage!</p>
                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                        <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 animated fadeInRight d-flex justify-content-center">
							    <div class="carousel-img-circle">
							        <img src="{{asset('home/img/jifa-week.png')}}" class="img-fluid" alt="Jifa Week">
							    </div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="header-carousel-item bg-dark">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h4 class="carousel-subtitle mb-3">👗 Runway Magic</h4>
									<h1 class="carousel-title mb-4">Every Step is a Story</h1>
									<p class="carousel-text mb-5">From the first step to the final bow, witness the magic of fashion come alive on our spectacular runway.</p>
                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                        <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 animated fadeInRight d-flex justify-content-center">
							    <div class="carousel-img-circle">
							        <img src="{{asset('home/img/jifa-week1.png')}}" class="img-fluid" alt="Jifa Week">
							    </div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="header-carousel-item bg-dark">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h4 class="carousel-subtitle mb-3">🌟 Celebrate Young Talent</h4>
									<h1 class="carousel-title mb-4">Dreams in Motion</h1>
									<p class="carousel-text mb-5">Celebrate young talents showcasing the latest trends in children’s fashion. Fun, color, and glamour all in one stage!</p>
                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                        <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 animated fadeInRight d-flex justify-content-center">
							    <div class="carousel-img-circle">
							        <img src="{{asset('home/img/jifa-week2.png')}}" class="img-fluid" alt="Jifa Week">
							    </div>
							</div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- <div class="header-carousel-item bg-dark">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                            <div class="col-lg-5 animated fadeInRight d-flex justify-content-center">
							    <div class="carousel-img-circle">
							        <img src="img/jifa-week.png" class="img-fluid" alt="Jifa Week">
							    </div>
							</div>
                            <div class="col-lg-7 animated fadeInRight">
                                <div class="text-sm-center text-md-end">
                                    <h4 class="carousel-subtitle mb-3">✨ Welcome to Jewel Week</h4>
									<h1 class="carousel-title mb-4">Where Creativity Meets Style</h1>
									<p class="carousel-text mb-5">Celebrate young talents showcasing the latest trends in children’s fashion. Fun, color, and glamour all in one stage!</p>
                                    <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                        <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
        <!-- Carousel End -->

        <!-- Feature Start -->
        <!-- <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">About Jifa Week</h4>
                    <h1 class="display-4 mb-4">Insurance Provide you a Better Future</h1>
                    <p class="mb-0">Jewel International Fashion & Art Week (JIFAWEEK) is more than a fashion event. It is a movement dedicated to awakening pride, purpose, creativity, and compassion in the next generation. We exist to raise confident, expressive, and socially conscious children who understand their worth and their power to shape the future.
                    </p><br>
                    <p class="mb-0">At JIFAWEEK, every child is seen as a leader in the making. Through fashion, art, culture, and performance, we nurture self-esteem, bold expression, leadership skills, and global awareness preserving our legacy while preparing children to thrive in tomorrow’s world.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="far fa-handshake fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Trusted Company</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-dollar-sign fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Anytime Money Back</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-bullseye fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Flexible Plans</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-headphones fa-3x"></i>
                            </div>
                            <h4 class="mb-4">24/7 Fast Support</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Feature End -->
<br>
        <!-- About Start -->
        <div class="container-fluid bg-light about pb-5">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-item-content bg-white rounded p-5 h-100">                           

                            <p class="lead-text">
                                Jewel International Fashion & Art Week (JIFAWEEK) is more than a fashion event. It is a movement dedicated to awakening pride, purpose, creativity, and compassion in the next generation. We exist to raise confident, expressive, and socially conscious children who understand their worth and their power to shape the future.
                            </p>

                            <p>
                                At JIFAWEEK, every child is seen as a leader in the making. Through fashion, art, culture, and performance, we nurture self-esteem, bold expression, leadership skills, and global awareness preserving our legacy while preparing children to thrive in tomorrow’s world.
                            </p>
                            <h4 class="text-primary"><strong>A Platform With Purpose</strong></h4>

                            <p>
                                JIFAWEEK is proudly packaged by Woodland Approach LTD a fully registered and incorporated creative powerhouse made up of innovative professionals with expertise in:

                            </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Event Production</p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Fashion Styling & Creative Direction</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Set Design</p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Media & Public Relations</p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Talent Grooming & Management</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Agency Development</p>
                            <p>
                                Our creativity and innovation consistently set us apart, delivering world-class experiences that are both impactful and unforgettable.
                            </p>

                            <h4 class="text-primary mt-4"><strong>Fashion Meets Global Impact</strong></h4>

                            <p>
                                JIFAWEEK is strategically aligned with the United Nations Sustainable Development Goals (SDGs), with strong emphasis on:
                            </p>

                            <div class="row g-3 mt-3">

                                <div class="col-md-3 col-6">
                                    <div class="sdg-card-mini text-center p-3">
                                        <i class="fa fa-heartbeat mb-2"></i>
                                        <h6>SDG 3</h6>
                                        <small>Good Health</small>
                                    </div>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="sdg-card-mini text-center p-3">
                                        <i class="fa fa-graduation-cap mb-2"></i>
                                        <h6>SDG 4</h6>
                                        <small>Quality Education</small>
                                    </div>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="sdg-card-mini text-center p-3">
                                        <i class="fa fa-briefcase mb-2"></i>
                                        <h6>SDG 8</h6>
                                        <small>Economic Growth</small>
                                    </div>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="sdg-card-mini text-center p-3">
                                        <i class="fa fa-lightbulb mb-2"></i>
                                        <h6>SDG 9</h6>
                                        <small>Innovation</small>
                                    </div>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="sdg-card-mini text-center p-3">
                                        <i class="fa fa-city mb-2"></i>
                                        <h6>SDG 11</h6>
                                        <small>Sustainability</small>
                                    </div>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="sdg-card-mini text-center p-3">
                                        <i class="fa fa-leaf mb-2"></i>
                                        <h6>SDG 13</h6>
                                        <small>Climate Action</small>
                                    </div>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="sdg-card-mini text-center p-3">
                                        <i class="fa fa-water mb-2"></i>
                                        <h6>SDG 14</h6>
                                        <small>Life Below Water</small>
                                    </div>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="sdg-card-mini text-center p-3">
                                        <i class="fa fa-handshake mb-2"></i>
                                        <h6>SDG 16.2</h6>
                                        <small>Child Protection</small>
                                    </div>
                                </div>

                            </div>

                            <!-- <div class="mt-4">
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="#">
                                    More Information
                                </a>
                            </div> -->

                        </div>
                    </div>
                    <!-- <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-white rounded p-5 h-100">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12">
                                    <div class="rounded bg-light">
                                        <img src="img/about-1.png" class="img-fluid rounded w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">129</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Insurance Policies</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">99</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Awards WON</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">556</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Skilled Agents</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">967</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Team Members</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Service Start -->
        <!-- <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Services</h4>
                    <h1 class="display-4 mb-4">We Provide Best Services</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/blog-1.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-users fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Life Insurance</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, eum!</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/blog-2.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-hospital fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Health Insurance</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, eum!</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/blog-3.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-car fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Car Insurance</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, eum!</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/blog-4.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-home fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Home Insurance</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, eum!</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Services</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Service End -->

        <!-- FAQs Start -->
        <!-- <div class="container-fluid faq-section bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="h-100">
                            <div class="mb-5">
                                <h4 class="text-primary">Some Important FAQ's</h4>
                                <h1 class="display-4 mb-0">Common Frequently Asked Questions</h1>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Q: What happens during Freshers' Week?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show active" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body rounded">
                                            A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Q: What is the transfer application process?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Q: Why should I attend community college?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <img src="img/carousel-2.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div> -->
        <!-- FAQs End -->

        <!-- Blog Start -->
        <!-- <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">From Blog</h4>
                    <h1 class="display-4 mb-4">News And Updates</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-1.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="blog-categiry py-2 px-4">
                                    <span>Business</span>
                                </div>
                            </div>
                            <div class="blog-content p-4">
                                <div class="blog-comment d-flex justify-content-between mb-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                    <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Which allows you to pay down insurance bills</a>
                                <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                                <a href="#" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-2.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="blog-categiry py-2 px-4">
                                    <span>Business</span>
                                </div>
                            </div>
                            <div class="blog-content p-4">
                                <div class="blog-comment d-flex justify-content-between mb-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                    <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Leverage agile frameworks to provide</a>
                                <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                                <a href="#" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-3.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="blog-categiry py-2 px-4">
                                    <span>Business</span>
                                </div>
                            </div>
                            <div class="blog-content p-4">
                                <div class="blog-comment d-flex justify-content-between mb-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                    <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Leverage agile frameworks to provide</a>
                                <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                                <a href="#" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Blog End -->

        <!-- Team Start -->
        <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <br>
                    <h4 class="text-primary">Our Team</h4>
                    <!-- <h1 class="display-4 mb-4">Meet Our Expert Team Members</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p> -->
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('home/img/team01.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">ADEWALE YUSUF</h4>
                                <small>Mr Useful Woodland</small>
                                <p class="mb-0">COVENER / EXECUTIVE DIRECTO</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('home/img/team02.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">KAYODE GOMES</h4>
                                <small>GOMES MULTIMEDIA</small>
                                <p class="mb-0">HEAD OF CINEMATOGRAPHY & VISUAL STORYTELLING</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('home/img/team03.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">CHRISTABEL UWANDU OLUEBUBE</h4>
                                <p class="mb-0">LEAD CHAPERONE</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('home/img/team04.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">EMIOLA ADEMOLA</h4>
                                <p class="mb-0">CREATIVE/VISUAL DIRECTOR</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Testimonial Start -->
        <!-- <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-4 mb-4">What Our Customers Are Saying</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="img/testimonial-1.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0">Client Name</h4>
                                    <p class="mb-3">Profession</p>
                                    <div class="d-flex text-primary mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="img/testimonial-2.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0">Client Name</h4>
                                    <p class="mb-3">Profession</p>
                                    <div class="d-flex text-primary mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="img/testimonial-3.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0">Client Name</h4>
                                    <p class="mb-3">Profession</p>
                                    <div class="d-flex text-primary mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-9">
                        <div class="mb-5">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-6 col-xl-5">
                                    <div class="footer-item">
                                        <a href="index.html" class="p-0">
                                            <h3 class="text-white"><i class="fab fa-slack me-3"></i> JifaWeek</h3>
                                            <!-- <img src="img/logo.png" alt="Logo"> -->
                                        </a>
                                        <p class="text-white mb-4">JIFAWEEK is proudly packaged by Woodland Approach LTD a fully registered and incorporated creative powerhouse.</p>
                                        <div class="footer-btn d-flex">
                                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="footer-item">
                                        <h4 class="text-white mb-4">Useful Links</h4>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Designer Signup</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Child Model Signup</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Volunteer Signup</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Media/Press Signup</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Contact</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="footer-item">
                                        <h4 class="mb-4 text-white">Instagram</h4>
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/instagram-footer-1.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/instagram-footer-1.jpg" data-lightbox="footerInstagram-1" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/instagram-footer-2.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/instagram-footer-2.jpg" data-lightbox="footerInstagram-2" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/instagram-footer-3.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/instagram-footer-3.jpg" data-lightbox="footerInstagram-3" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/instagram-footer-4.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/instagram-footer-4.jpg" data-lightbox="footerInstagram-4" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/instagram-footer-5.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/instagram-footer-5.jpg" data-lightbox="footerInstagram-5" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/instagram-footer-6.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/instagram-footer-6.jpg" data-lightbox="footerInstagram-6" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5" style="border-top: 1px solid rgba(255, 255, 255, 0.08);">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="row g-4">
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Address</h4>
                                                    <p class="mb-0">123 Street New York.USA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fas fa-envelope fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Mail Us</h4>
                                                    <p class="mb-0">info@example.com</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fa fa-phone-alt fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Telephone</h4>
                                                    <p class="mb-0">(+012) 3456 7890</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Newsletter</h4>
                            <p class="text-white mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="position-relative rounded-pill mb-4">
                                <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                            </div>
                            <div class="d-flex flex-shrink-0">
                                <div class="footer-btn">
                                    <a href="#" class="btn btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                                        <i class="fa fa-phone-alt fa-2x"></i>
                                        <div class="position-absolute" style="top: 2px; right: 12px;">
                                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column ms-3 flex-shrink-0">
                                    <span>Call to Our Experts</span>
                                    <a href="tel:+ 0123 456 7890"><span class="text-white">Free: + 0123 456 7890</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>JifaWeek</a>, All right reserved.</span>
                    </div>
                   <!--  <div class="col-md-6 text-center text-md-start text-body">                        
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('home/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('home/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('home/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('home/lib/counterup/counterup.min.js')}}"></script>
        <script src="{{asset('home/lib/lightbox/js/lightbox.min.js')}}"></script>
        <script src="{{asset('home/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        

        <!-- Template Javascript -->
        <script src="{{asset('home/js/main.js')}}"></script>
    </body>

</html>