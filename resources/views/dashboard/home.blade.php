<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Jifa Week :: Home</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
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

        <!-- Spinner Start -->
       
        <!-- Spinner End -->

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
                                <!-- <div class="dropdown ms-3">
                                    <a href="#" class="dropdown-toggle topbar-link" data-bs-toggle="dropdown">
                                        <small><i class="fas fa-globe-europe me-2"></i>English</small>
                                    </a>
                                </div> -->
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
                            
                            <a href="#" class="nav-item nav-link active">
                                <i class="fas fa-home me-1"></i>Home
                            </a>

                            <a href="#AboutUs" class="nav-item nav-link">
                                <i class="fas fa-info-circle me-1"></i>About
                            </a>            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <i class="fas fa-photo-video me-1"></i>Gallery 
                                    <span class="dropdown-toggle"></span>
                                </a>
                                <div class="dropdown-menu">
                                    
                                    <a href="{{route('designer-form')}}" class="dropdown-item">
                                        <i class="fas fa-images me-1"></i>Photos
                                    </a>

                                    <a href="#" class="dropdown-item">
                                        <i class="fas fa-video me-1"></i>Videos
                                    </a>                    

                                </div>
                            </div>          
                            <a href="#Team" class="nav-item nav-link">
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
                                    <a href="{{route('children-form')}}" class="dropdown-item">
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
                            <a href="#" class="nav-item nav-link">
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
    <!-- Slide 1 -->
    <div class="header-carousel-item">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h4 class="carousel-subtitle mb-3">✨ Welcome to Jifa Week</h4>
                            <h1 class="carousel-title mb-4">Where Creativity Meets Style</h1>
                            <p class="carousel-text glow-text mb-5">
                                Celebrate young talents showcasing the latest trends in children’s fashion. Fun, color, and glamour all in one stage!
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                <!-- <a class="btn btn-light neon-btn py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a> -->
                                <a class="btn btn-dark neon-btn py-3 px-4 px-md-5 ms-2" href="#AboutUs">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 animated fadeInRight d-flex justify-content-center">
                        <div class="carousel-img-circle neon-circle">
                            <img src="{{asset('home/img/jifa-week.png')}}" class="img-fluid" alt="Jifa Week">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide 2 -->
    <div class="header-carousel-item bg-dark">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h4 class="carousel-subtitle neon-text mb-3">👗 Runway Magic</h4>
                            <h1 class="carousel-title neon-text mb-4">Every Step is a Story</h1>
                            <p class="carousel-text glow-text mb-5">
                                From the first step to the final bow, witness the magic of fashion come alive on our spectacular runway.
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                <!-- <a class="btn btn-light neon-btn py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a> -->
                                <a class="btn btn-dark neon-btn py-3 px-4 px-md-5 ms-2" href="#AboutUs">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 animated fadeInRight d-flex justify-content-center">
                        <div class="carousel-img-circle neon-circle">
                            <img src="{{asset('home/img/jifa-week1.png')}}" class="img-fluid" alt="Jifa Week">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide 3 -->
    <div class="header-carousel-item bg-dark">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h4 class="carousel-subtitle neon-text mb-3">🌟 Celebrate Young Talent</h4>
                            <h1 class="carousel-title neon-text mb-4">Dreams in Motion</h1>
                            <p class="carousel-text glow-text mb-5">
                                Celebrate young talents showcasing the latest trends in children’s fashion. Fun, color, and glamour all in one stage!
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                <!-- <a class="btn btn-light neon-btn py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a> -->
                                <a class="btn btn-dark neon-btn py-3 px-4 px-md-5 ms-2" href="#AboutUs">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 animated fadeInRight d-flex justify-content-center">
                        <div class="carousel-img-circle neon-circle">
                            <img src="{{asset('home/img/jifa-week2.png')}}" class="img-fluid" alt="Jifa Week">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
        
<br>
        <!-- About Start -->
<div class="container-fluid tech-section about pb-5" id="AboutUs">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.2s">

                <div class="about-item-content tech-card rounded p-5 h-100">

                    <h2 class="section-title mb-4">About JIFAWEEK</h2>

                    <p class="lead-text" style='color:white'>
                        Jewel International Fashion & Art Week (JIFAWEEK) is more than a fashion event. It is a movement dedicated to awakening pride, purpose, creativity, and compassion in the next generation.
                    </p>

                    <p style='color:white'>
                        At JIFAWEEK, every child is seen as a leader in the making. Through fashion, art, culture, and performance, we nurture self-esteem, bold expression, leadership skills, and global awareness preserving our legacy while preparing children to thrive in tomorrow’s world.
                    </p>

                    <h4 class="tech-heading mt-4">A Platform With Purpose</h4>

                    <p style='color:white'>
                        JIFAWEEK is proudly packaged by Woodland Approach LTD a fully registered and incorporated creative powerhouse made up of innovative professionals with expertise in:
                    </p>

                    <div class="row mt-3">

                        <div class="col-md-4">
                            <p class="tech-list" style='color:white'><i class="fa fa-check"></i> Event Production</p>
                        </div>

                        <div class="col-md-4">
                            <p class="tech-list" style='color:white'><i class="fa fa-check"></i> Fashion Styling & Creative Direction</p>
                        </div>

                        <div class="col-md-4">
                            <p class="tech-list" style='color:white'><i class="fa fa-check"></i> Set Design</p>
                        </div>

                        <div class="col-md-4">
                            <p class="tech-list" style='color:white'><i class="fa fa-check"></i> Media & Public Relations</p>
                        </div>

                        <div class="col-md-4">
                            <p class="tech-list" style='color:white'><i class="fa fa-check"></i> Talent Grooming & Management</p>
                        </div>

                        <div class="col-md-4">
                            <p class="tech-list" style='color:white'><i class="fa fa-check"></i> Agency Development</p>
                        </div>

                    </div>

                    <h4 class="tech-heading mt-5">Fashion Meets Global Impact</h4>

                    <p style='color:white'>
                        JIFAWEEK is strategically aligned with the United Nations Sustainable Development Goals (SDGs).
                    </p>

                    <div class="row g-3 mt-3">

                        <!-- SDG CARD -->
                        <div class="col-md-3 col-6">
                            <div class="sdg-tech-card text-center">
                                <i class="fa fa-heartbeat"></i>
                                <h6 style='color:white'>SDG 3</h6>
                                <small>Good Health</small>
                            </div>
                        </div>

                        <div class="col-md-3 col-6">
                            <div class="sdg-tech-card text-center">
                                <i class="fa fa-graduation-cap"></i>
                                <h6 style='color:white'>SDG 4</h6>
                                <small>Quality Education</small>
                            </div>
                        </div>

                        <div class="col-md-3 col-6">
                            <div class="sdg-tech-card text-center">
                                <i class="fa fa-briefcase"></i>
                                <h6 style='color:white'>SDG 8</h6>
                                <small>Economic Growth</small>
                            </div>
                        </div>

                        <div class="col-md-3 col-6">
                            <div class="sdg-tech-card text-center">
                                <i class="fa fa-lightbulb"></i>
                                <h6 style='color:white'>SDG 9</h6>
                                <small>Innovation</small>
                            </div>
                        </div>

                        <div class="col-md-3 col-6">
                            <div class="sdg-tech-card text-center">
                                <i class="fa fa-city"></i>
                                <h6 style='color:white'>SDG 11</h6>
                                <small>Sustainability</small>
                            </div>
                        </div>

                        <div class="col-md-3 col-6">
                            <div class="sdg-tech-card text-center">
                                <i class="fa fa-leaf"></i>
                                <h6 style='color:white'>SDG 13</h6>
                                <small>Climate Action</small>
                            </div>
                        </div>

                        <div class="col-md-3 col-6">
                            <div class="sdg-tech-card text-center">
                                <i class="fa fa-water"></i>
                                <h6 style='color:white'>SDG 14</h6>
                                <small>Life Below Water</small>
                            </div>
                        </div>

                        <div class="col-md-3 col-6">
                            <div class="sdg-tech-card text-center">
                                <i class="fa fa-handshake"></i>
                                <h6 style='color:white'>SDG 16.2</h6>
                                <small>Child Protection</small>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->      

        <!-- Team Start -->
<div class="container-fluid team tech-section pb-5" id="Team">
    <div class="container pb-5">

        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width:800px;">
            <br>
            <h2 class="section-title">Our Team</h2>
        </div>

        <div class="row g-4">

            <!-- TEAM MEMBER -->
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-tech-card">

                    <div class="team-img">
                        <img src="{{asset('home/img/team01.jpg')}}" class="img-fluid w-100" alt="">

                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="team-content">
                        <h4>ADEWALE YUSUF</h4>
                        <small>Mr Useful Woodland</small>
                        <p style='color:white'>COVENER / EXECUTIVE DIRECTOR</p>
                    </div>

                </div>
            </div>


            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-tech-card">

                    <div class="team-img">
                        <img src="{{asset('home/img/team02.jpg')}}" class="img-fluid w-100" alt="">

                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="team-content">
                        <h4>KAYODE GOMES</h4>
                        <small>GOMES MULTIMEDIA</small>
                        <p style='color:white'>HEAD OF CINEMATOGRAPHY & VISUAL STORYTELLING</p>
                    </div>

                </div>
            </div>


            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-tech-card">

                    <div class="team-img">
                        <img src="{{asset('home/img/team03.jpg')}}" class="img-fluid w-100" alt="">

                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="team-content">
                        <h4>CHRISTABEL UWANDU OLUEBUBE</h4>
                        <p style='color:white'>LEAD CHAPERONE</p>
                    </div>

                </div>
            </div>


            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-tech-card">

                    <div class="team-img">
                        <img src="{{asset('home/img/team04.jpg')}}" class="img-fluid w-100" alt="">

                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="team-content">
                        <h4>EMIOLA ADEMOLA</h4>
                        <p style='color:white'>CREATIVE / VISUAL DIRECTOR</p>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<!-- Team End -->  

        <!-- Footer Start -->
<div class="container-fluid footer py-5">
    <div class="container footer-card py-5">
        <div class="row g-5">
            <!-- Brand & Social -->
            <div class="col-xl-5">
                <div class="footer-item mb-5">
                    <a href="index.html" class="p-0">
                        <h3 class="text-neon"><i class="fab fa-slack me-3"></i> JifaWeek</h3>
                    </a>
                    <p class="text-glow mb-4" style='color:white'>
                        JIFAWEEK is proudly packaged by Woodland Approach LTD, a fully registered creative powerhouse.
                    </p>
                    <div class="footer-btn d-flex">
                        <a class="btn btn-md-square rounded-circle me-3 social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-md-square rounded-circle me-3 social-icon" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-md-square rounded-circle me-3 social-icon" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-md-square rounded-circle social-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <!-- Useful Links -->
            <div class="col-xl-3">
                <div class="footer-item mb-5">
                    <h4 class="text-neon mb-4">Useful Links</h4>
                    <a href="#" style='color:white'><i class="fas fa-angle-right me-2"></i> About Us</a>
                    <a href="#" style='color:white'><i class="fas fa-angle-right me-2"></i> Designer Signup</a>
                    <a href="#" style='color:white'><i class="fas fa-angle-right me-2"></i> Child Model Signup</a>
                    <a href="#" style='color:white'><i class="fas fa-angle-right me-2"></i> Volunteer Signup</a>
                    <a href="#" style='color:white'><i class="fas fa-angle-right me-2"></i> Media/Press Signup</a>
                    <a href="#" style='color:white'><i class="fas fa-angle-right me-2"></i> Contact</a>
                </div>
            </div>

        </div> 

        <!-- Contact Info -->
        <div class="pt-5 border-top-neon">
            <div class="row g-4 text-glow">
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="icon-square bg-neon me-3"><i class="fas fa-map-marker-alt fa-2x"></i></div>
                    <div>
                        <h5 class="text-neon">Address</h5>
                        <p style='color:white'>123 Street, New York, USA</p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="icon-square bg-neon me-3"><i class="fas fa-envelope fa-2x"></i></div>
                    <div>
                        <h5 class="text-neon">Mail Us</h5>
                        <p style='color:white'>info@example.com</p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="icon-square bg-neon me-3"><i class="fa fa-phone-alt fa-2x"></i></div>
                    <div>
                        <h5 class="text-neon">Telephone</h5>
                        <p style='color:white'>(+012) 3456 7890</p>
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