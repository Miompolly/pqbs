<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Professional Quality Building Services - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="professional quality building services, facility management, construction design, home projects" name="keywords">
    <meta content="We provide comprehensive solutions for construction, facility management, and home improvement projects with a focus on reliability, innovation, and sustainability." name="description">
    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .project-item {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    
        .project-item .position-relative img {
            width: 100%;          
            height: 300px;         
            object-fit: cover;     
        }
    
        .project-item .text-center {
            flex-grow: 1;
        }
    
        .project-item .d-flex {
            margin-top: auto;
        }
    </style>
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="img/logo.png" style="width:50px;" alt="Professional Logo"> PROFESSIONAL</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Project Types</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="contruction.php" class="dropdown-item">Construction Design</a>
                        <a href="facility.php" class="dropdown-item">Facility Management</a>
                        <a href="carpenting.php" class="dropdown-item">Carpentry</a>
                        <a href="painting.php" class="dropdown-item">Painting & Color Expertise</a>
                        <a href="electricty.php" class="dropdown-item">Electricity</a>
                        <a href="plumbing.php" class="dropdown-item">Plumbing</a>
                        <a href="cctv.php" class="dropdown-item">CCTV Services</a>
                        <a href="sustainability.php" class="dropdown-item">Sustainability</a>
                    </div>
                </div>
                <a href="career.php" class="nav-item nav-link">Career</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <a href="contact.php" class="nav-item nav-link">Contact Us</a>
            </div>
        </div>
    </nav>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" style="background-color: rgba(255, 255, 255, 0);">
                <img class="img-fluid" src="img/back.jpeg" alt="Background Image">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h2 class="text-primary text-uppercase mb-3">Our Core Values</h2>
                                <h1 class="display-3 text-white animated slideInDown">Reliability is Our Strength</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Comprehensive Facility Management Solutions: Ensuring Optimal Performance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Carousel Item -->
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/stade.jpeg" alt="Electric Power Plant">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h2 class="text-primary text-uppercase mb-3">Our Core Values</h2>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    We are driving innovation in the energy sector by providing advanced solutions that empower industries and communities. Our state-of-the-art electric power plants deliver efficient, sustainable, and reliable energy, ensuring optimal performance and long-term sustainability.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

<!-- Services Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Construction Design -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center h-100 d-flex flex-column justify-content-center align-items-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-building text-primary mb-4"></i>
                        <h5 class="mb-3">Construction Design</h5>
                        <p>We provide innovative construction design solutions tailored to meet your unique needs, ensuring functionality and aesthetics.</p>
                    </div>
                </div>
            </div>

            <!-- Facility Management -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center h-100 d-flex flex-column justify-content-center align-items-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-tools text-primary mb-4"></i>
                        <h5 class="mb-3">Facility Management</h5>
                        <p>Our comprehensive facility management services ensure your properties are maintained to the highest standards, optimizing performance and efficiency.</p>
                    </div>
                </div>
            </div>

            <!-- Renovation & Remodeling -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center h-100 d-flex flex-column justify-content-center align-items-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-hammer text-primary mb-4"></i>
                        <h5 class="mb-3">Renovation & Remodeling</h5>
                        <p>Transform your spaces with our professional renovation and remodeling services, bringing new life to both residential and commercial properties.</p>
                    </div>
                </div>
            </div>

            <!-- Sustainability Solutions -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center h-100 d-flex flex-column justify-content-center align-items-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-seedling text-primary mb-4"></i>
                        <h5 class="mb-3">Sustainability Solutions</h5>
                        <p>We specialize in sustainable building practices, providing eco-friendly construction solutions that promote environmental conservation and energy efficiency.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <!-- About Image -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpeg" alt="About Us" style="object-fit: cover;">
                </div>
            </div>

            <!-- About Content -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                <h1 class="mb-4">Building Excellence, Delivering Quality</h1>
                <p class="mb-4">We are a leading provider of professional construction and facility management services, committed to excellence in every project we undertake. With a proven track record in delivering quality building solutions, we specialize in innovative, sustainable, and reliable construction practices that meet the highest industry standards.</p>
                <p class="mb-4">From large-scale commercial projects to bespoke residential developments, our team of experienced professionals ensures that each project is delivered on time, within budget, and to the exact specifications of our clients. We strive to exceed expectations by implementing cutting-edge technology and adhering to the best practices in the construction industry.</p>

                <!-- Key Features List -->
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Experienced Team</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Comprehensive Solutions</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>On-Time Project Delivery</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Innovative Building Techniques</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Sustainable Practices</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Client-Centered Approach</p>
                    </div>
                </div>

                <!-- Call to Action Button -->
                <a class="btn btn-primary py-3 px-5 mt-2" href="about.php">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


    <!-- About End -->

<!-- Categories Start -->
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
            <h1 class="mb-5">Construction Service Categories</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden h-100" href="">
                            <img class="img-fluid w-100 h-100" src="img/back.jpeg" alt="Construction Design" style="object-fit: cover;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Construction Design</h5>
                                <small class="text-primary">15 Projects</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden h-100" href="">
                            <img class="img-fluid w-100 h-100" src="img/back.jpeg" alt="Renovation Services" style="object-fit: cover;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Renovation Services</h5>
                                <small class="text-primary">10 Projects</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden h-100" href="">
                            <img class="img-fluid w-100 h-100" src="img/back.jpeg" alt="Sustainability Solutions" style="object-fit: cover;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Sustainability Solutions</h5>
                                <small class="text-primary">8 Projects</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/back.jpeg" alt="Facility Management" style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                        <h5 class="m-0">Facility Management</h5>
                        <small class="text-primary">12 Projects</small>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Projects</h6>
            <h1 class="mb-5">Our Recent Projects</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- Project 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/back.jpeg" alt="Residential Building">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">View Details</a>
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Contact Us</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h5 class="mb-4">Residential Building Development</h5>
                        <p>Completed a modern residential building with eco-friendly design elements, located in the heart of the city.</p>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i>12 Months</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Kigali</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-primary me-2"></i>100 Workers</small>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/about.jpeg" alt="Commercial Complex">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">View Details</a>
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Contact Us</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h5 class="mb-4">Commercial Complex Construction</h5>
                        <p>Developed a state-of-the-art commercial complex designed to cater to the needs of modern businesses.</p>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i>18 Months</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Rwanda</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-primary me-2"></i>200 Workers</small>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="project-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/about.jpeg" alt="Sustainable Office Building">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">View Details</a>
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Contact Us</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h5 class="mb-4">Sustainable Office Building</h5>
                        <p>Completed a LEED-certified sustainable office building with energy-efficient technology and green materials.</p>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i>14 Months</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Rwanda</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-primary me-2"></i>150 Workers</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Remera Kigali/Rwanda</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+250780036022</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@pqualitybservice.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">PQBS</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Miompolly</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>