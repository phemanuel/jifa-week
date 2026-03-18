<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Event Registration') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Optional: Custom CSS -->
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
        
        <style>
/* =========================
   NAVBAR BRAND (GRADIENT TEXT)
========================= */
.navbar-brand {
    display: flex;
    align-items: center;
    gap: 10px;
    max-width: 420px; /* controls wrapping */
}

.navbar-brand img {
    height: 50px;
    flex-shrink: 0;
}

.navbar-brand h1 {
    font-family: 'Baloo 2', cursive;
    font-weight: 900;
    font-size: 20px;
    letter-spacing: 1px;
    text-transform: uppercase;

    background: linear-gradient(90deg, 
        #c000ff,
        #ff0066,
        #ff6a00,
        #0051ff
    );

    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;

    text-shadow: 3px 4px 12px rgba(0,0,0,0.6);

    /* ✅ Enable wrapping */
    white-space: normal;
    line-height: 1.1;
    margin: 0;
}

/* =========================
   NAVBAR LINKS FIX
========================= */
.navbar-nav {
    margin-left: auto;
}

/* =========================
   RESPONSIVE FIXES
========================= */
@media (max-width: 1200px) {
    .navbar-brand h1 {
        font-size: 26px;
    }
}

@media (max-width: 768px) {
    .navbar-brand h1 {
        font-size: 20px;
    }

    .navbar-brand {
        max-width: 250px;
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
<style>
   /* TECH BACKGROUND */

.tech-section{
background: url('images/circuit-bg2.png') center/cover no-repeat;
position: relative;
color:#fff;
}

.tech-section .container{
position:relative;
z-index:2;
}

/* circuit overlay */

.tech-section::before{
content:"";
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
background:url('images/circuit-bg2.png');
opacity:0.07;
pointer-events:none;
}

/* tech card */

.tech-card{
background:rgba(0,0,0,0.55);
border:1px solid rgba(0,150,255,0.35);
border-radius:10px;
backdrop-filter:blur(6px);
color:#e2e8f0;
}

/* section title */

.section-title{
color:#3bb4ff;
font-weight:700;
letter-spacing:1px;
}

/* headings */

.tech-heading{
color:#22c55e;
font-weight:600;
}

/* checklist */

.tech-list{
color:#cbd5f5;
}

.tech-list i{
color:#38bdf8;
margin-right:10px;
}

/* SDG cards */

.sdg-tech-card{
background:rgba(0,0,0,0.45);
border:1px solid rgba(59,180,255,0.35);
border-radius:10px;
padding:18px;
transition:0.3s;
}

.sdg-tech-card i{
color:#3bb4ff;
font-size:24px;
}

.sdg-tech-card:hover{
transform:translateY(-5px);
box-shadow:0 0 18px rgba(59,180,255,0.7);
}
</style>
<style>
    /* TEAM TECH CARD */

.team-tech-card{
background: rgba(0,0,0,0.55);
border:1px solid rgba(0,150,255,0.35);
border-radius:12px;
overflow:hidden;
transition:0.4s;
backdrop-filter:blur(6px);
}

.team-tech-card:hover{
transform:translateY(-8px);
box-shadow:0 0 25px rgba(0,150,255,0.6);
}


/* TEAM IMAGE */

.team-img{
position:relative;
overflow:hidden;
}

.team-img img{
transition:0.4s;
}

.team-tech-card:hover img{
transform:scale(1.08);
}


/* SOCIAL ICONS */

.team-social{
position:absolute;
bottom:15px;
left:50%;
transform:translateX(-50%);
display:flex;
gap:10px;
opacity:0;
transition:0.4s;
}

.team-tech-card:hover .team-social{
opacity:1;
}

.team-social a{
width:35px;
height:35px;
display:flex;
align-items:center;
justify-content:center;
background:#0096ff;
color:white;
border-radius:50%;
font-size:14px;
transition:0.3s;
}

.team-social a:hover{
background:#00c3ff;
box-shadow:0 0 12px #00c3ff;
}


/* TEAM CONTENT */

.team-content{
padding:20px;
text-align:center;
color:#e2e8f0;
}

.team-content h4{
color:#3bb4ff;
font-weight:600;
}

.team-content small{
color:#94a3b8;
display:block;
margin-bottom:6px;
}

.team-content p{
font-size:14px;
color:#cbd5f5;
}
</style>
<style>
  /* Footer Background */
.footer {
    background: #0a0a0a url('images/circuit-bg2.png') repeat;
    background-size: cover;
    position: relative;
}

/* Footer Card */
.footer-card {
    background: rgba(10, 10, 10, 0.85); /* Semi-transparent dark card */
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 0 30px rgba(0, 255, 255, 0.3);
    backdrop-filter: blur(10px); /* Frosted glass effect */
}

/* Neon Text & Glow */
.text-neon {
    color: #00fff0;
    text-shadow: 0 0 5px #00fff0, 0 0 10px #00fff0;
}
.text-glow {
    text-shadow: 0 0 3px rgba(0, 255, 255, 0.3);
}

/* Social Icons */
.social-icon {
    border: 1px solid #00fff0;
    box-shadow: 0 0 10px #00fff0;
    transition: 0.3s;
}
.social-icon:hover {
    box-shadow: 0 0 20px #ff00ff, 0 0 30px #00fff0;
    transform: scale(1.1);
}

/* Contact Info Cards */
.icon-square {
    padding: 15px;
    border-radius: 10px;
    background-color: rgba(0, 255, 255, 0.1);
    box-shadow: 0 0 10px #00fff0;
}

/* Neon Border Top */
.border-top-neon {
    border-top: 1px solid rgba(0, 255, 255, 0.2);
}

/* Instagram Hover */
.footer-instagram img {
    width: 100%;
    transition: 0.3s;
}
.footer-instagram img:hover {
    transform: scale(1.05);
    box-shadow: 0 0 15px #00fff0;
}
.footer-instagram i {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: 0.3s;
}
.footer-instagram:hover i {
    opacity: 1;
}
</style>
<style>
    /* Carousel Base */
.header-carousel-item {
    background-color: #0a0a0a !important; /* pure almost-black */
    position: relative;
    overflow: hidden;
}

/* Neon Headings */
.neon-text {
    color: #00fff0;
    text-shadow: 0 0 5px #00fff0, 0 0 10px #00fff0;
}

/* Glowing Paragraphs */
.glow-text {
    color: #ffffff;
    text-shadow: 0 0 5px rgba(0, 255, 255, 0.3);
}

/* Neon Buttons */
.neon-btn {
    border: 1px solid #00fff0;
    box-shadow: 0 0 10px #00fff0;
    transition: 0.3s;
}
.neon-btn:hover {
    box-shadow: 0 0 20px #ff00ff, 0 0 30px #00fff0;
    transform: scale(1.05);
}

/* Circular Image with Glow */
.carousel-img-circle {
    border-radius: 50%;
    padding: 5px;
    background: rgba(0, 255, 255, 0.05);
    box-shadow: 0 0 15px #00fff0;
    transition: 0.3s;
}
.carousel-img-circle:hover {
    box-shadow: 0 0 25px #ff00ff, 0 0 30px #00fff0;
    transform: scale(1.05);
}
.carousel-caption {
    position: relative;
    z-index: 2; /* bring text above overlay */
}
/* Subtitle – Neon Green */
.carousel-subtitle {
    font-family: 'Poppins', sans-serif;
    color: #33ff33; /* bright neon green */
    text-shadow: 0 0 1px #33ff33, 0 0 3px #33ff33;
}

/* Title – Electric Blue */
.carousel-title {
    font-family: 'Orbitron', sans-serif;
    color: #3399ff; /* neon blue */
    text-shadow: 0 0 2px #3399ff, 0 0 4px #3399ff;
}

/* Optional: Animated Circuit Lines Overlay */
/* Optional: subtle dark overlay to make text readable */
.header-carousel-item::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url('images/circuit-bg2.png') repeat;
    z-index: 1;
}
@keyframes moveCircuit {
    0% {background-position: 0 0;}
    100% {background-position: 200px 200px;}
}
</style>
<style>
    /* Topbar Background */
.topbar {
    background-color: #0a0a0a; /* pure dark */
    position: relative;
    z-index: 1000;
    font-size: 0.875rem;
}

/* Links in topbar */
.topbar-link {
    color: #00ffff; /* neon cyan */
    text-decoration: none;
    transition: 0.3s;
    text-shadow: 0 0 3px #00ffff, 0 0 6px #00ffff;
}

.topbar-link:hover {
    color: #ff33cc; /* neon pink on hover */
    text-shadow: 0 0 5px #ff33cc, 0 0 10px #ff33cc;
}

/* Social Icons Neon Glow */
.neon-icon {
    color: #00ffff;
    transition: 0.3s;
    text-shadow: 0 0 1px #00ffff, 0 0 3px #00ffff;
}
.neon-icon:hover {
    color: #ff33cc;
    text-shadow: 0 0 2px #ff33cc, 0 0 4px #ff33cc;
    transform: scale(1.1);
}

/* Optional: subtle circuit overlay on topbar */
.topbar::after {
    content: "";
    position: absolute;
    inset: 0;
    /* background: url('img/circuit-pattern.svg') repeat; */
    opacity: 0.05; /* very subtle */
    pointer-events: none;
}
</style>
<style>
/* Navbar background */
.navbar-collapse.bg-dark {
    background-color: #0a0a0a !important; /* pure dark for maximum contrast */
}

/* Links */
.nav-tech .nav-link {
    font-family: 'Orbitron', sans-serif; /* futuristic font */
    color: #00ffff; /* neon cyan default */
    font-weight: 500;
    transition: 0.3s;
}

.nav-tech .nav-link:hover,
.nav-tech .nav-link.active {
    color: #ff33cc; /* neon pink hover/active */
    text-shadow: 0 0 3px #ff33cc, 0 0 6px #ff33cc;
}

/* Dropdown menu */
.nav-tech .dropdown-menu {
    background-color: #0a0a0a; /* match navbar */
    border: 1px solid #00ffff;
    border-radius: 8px;
    padding: 0.5rem 0;
}

.nav-tech .dropdown-item {
    font-family: 'Orbitron', sans-serif;
    color: #00ffff;
    padding: 0.5rem 1.5rem;
    transition: 0.3s;
}

.nav-tech .dropdown-item:hover {
    color: #ff33cc;
    text-shadow: 0 0 3px #ff33cc, 0 0 6px #ff33cc;
    background-color: rgba(255, 51, 204, 0.1); /* subtle hover glow */
}

/* Icons spacing */
.nav-tech .dropdown-item i,
.nav-tech .nav-link i {
    width: 18px;
    text-align: center;
}
</style>
<style>
    /* Container styling */
.contact-experts {
    font-family: 'Orbitron', sans-serif; /* futuristic font */
    background-color: #0a0a0a; /* dark background for contrast */
    padding: 10px 15px;
    border-radius: 8px;
    text-align: left;
    width: max-content;
}

/* Label styling */
.contact-experts .contact-label {
    color: #00ffff; /* neon cyan */
    font-size: 0.875rem;
    text-shadow: 0 0 2px #00ffff, 0 0 4px #00ffff;
    display: block;
    margin-bottom: 5px;
}

/* Phone number styling */
.contact-experts .contact-number {
    color: #ff33cc; /* neon pink */
    font-size: 1rem;
    font-weight: 600;
    text-decoration: none;
    text-shadow: 0 0 3px #ff33cc, 0 0 6px #ff33cc;
    transition: 0.3s;
}

.contact-experts .contact-number:hover {
    color: #00ffff;
    text-shadow: 0 0 4px #00ffff, 0 0 8px #00ffff;
}
</style>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
        
</head>
<body>
    <div id="app">
       
       <!-- Topbar Start -->
            <div class="container-fluid topbar px-0 px-lg-4 py-2 d-none d-lg-block">
                <div class="container">
                    <div class="row gx-0 align-items-center">
                        <!-- Left Side: Location & Email -->
                        <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                            <div class="d-flex flex-wrap topbar-info">
                                <div class="border-end border-light pe-3">
                                    <a href="#" class="topbar-link">
                                        <i class="fas fa-map-marker-alt me-2"></i>Find A Location
                                    </a>
                                </div>
                                <div class="ps-3">
                                    <a href="mailto:jifaweek.com" class="topbar-link">
                                        <i class="fas fa-envelope me-2"></i>info@jifaweek.com
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side: Social + Language -->
                        <div class="col-lg-4 text-center text-lg-end">
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="d-flex border-end border-light pe-3 social-icons">
                                    <a class="btn p-0 neon-icon me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn p-0 neon-icon me-3" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn p-0 neon-icon me-3" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="btn p-0 neon-icon me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <div class="dropdown ms-3">
                                    <a href="#" class="dropdown-toggle topbar-link" data-bs-toggle="dropdown">
                                        <small><i class="fas fa-globe-europe me-2"></i>English</small>
                                    </a>
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
    
                    <!-- BRAND -->
                    <a href="#" class="navbar-brand p-0">
                        <img src="{{asset('images/jifa-logo.png')}}" alt="Logo">
                        <h1 class="mb-0">
                            Jewel International <br>
                            Fashion Art Week
                        </h1>
                    </a>

                    <!-- TOGGLER -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>

                    <!-- NAV LINKS -->
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-0 mx-lg-auto nav-tech bg-dark">
                            
                            <a href="{{route('home')}}" class="nav-item nav-link active">
                                <i class="fas fa-home me-1"></i>Home
                            </a>

                            <a href="{{route('home')}}" class="nav-item nav-link">
                                <i class="fas fa-info-circle me-1"></i>About
                            </a>            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <i class="fas fa-photo-video me-1"></i>Media 
                                    <span class="dropdown-toggle"></span>
                                </a>
                                <div class="dropdown-menu">
                                    
                                    <a href="#" class="dropdown-item">
                                        <i class="fas fa-images me-1"></i>Gallery
                                    </a>

                                    <a href="#" class="dropdown-item">
                                        <i class="fas fa-video me-1"></i>Videos
                                    </a>                    

                                </div>
                            </div>          
                            <a href="{{route('home')}}" class="nav-item nav-link">
                                <i class="fas fa-users me-1"></i>Team
                            </a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <i class="fas fa-user-plus me-1"></i>Signup 
                                    <span class="dropdown-toggle"></span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="{{route('designer-form')}}" class="dropdown-item">
                                        <i class="fas fa-pencil-alt me-1"></i>Designers
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="fas fa-child me-1"></i>Child Model(3-12)
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="fas fa-hands-helping me-1"></i>Volunteer
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="fas fa-newspaper me-1"></i>Media/Press
                                    </a>
                                </div>
                            </div>
                            <a href="{{route('home')}}" class="nav-item nav-link">
                                <i class="fas fa-envelope me-1"></i>Contact
                            </a>

                        </div>
                    </div>

                    <!-- CONTACT SECTION -->
                    <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                        <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                            <i class="fa fa-phone-alt fa-2x"></i>
                            <div class="position-absolute" style="top: 7px; right: 12px;">
                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                            </div>
                        </a>

                        <div class="d-flex flex-column ms-3">
                            <span style="font-size: 12px; color: #ccc;">Call to Our Experts</span>
                            <a href="tel:+01234567890" style="font-weight: 600; color: #fff; text-decoration: none;">
                                 +234 806 738 9576
                            </a>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <main class="py-4 tech-section ">
            @yield('content')
        </main>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery (needed for wizard) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap 5 JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>

<!-- Wizard JS -->
<script src="{{ asset('js/designer.js') }}"></script>

<!-- Optional: Custom JS -->
  <script src="{{asset('home/js/main.js')}}"></script>
</body>
</html>