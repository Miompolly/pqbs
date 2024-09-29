<?php
session_start();
?>

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
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Painting & Color Expertise</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>                          
                            <li class="breadcrumb-item text-white active" aria-current="page">Painting & Color Expertise</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



<!-- Cards Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Services</h6>
            <h1 class="mb-5">Painting & Color Expertise Services</h1>
        </div>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card">
                    <img src="img/back.jpeg" class="card-img-top" alt="Service Title 1">
                    <div class="card-body">
                        <h5 class="card-title">Service Title 1</h5>
                        <p class="card-text">Description for service 1. This includes details about the service and its benefits.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="card">
                    <img src="img/back.jpeg" class="card-img-top" alt="Service Title 2">
                    <div class="card-body">
                        <h5 class="card-title">Service Title 2</h5>
                        <p class="card-text">Description for service 2. This includes details about the service and its benefits.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card">
                    <img src="img/back.jpeg" class="card-img-top" alt="Service Title 3">
                    <div class="card-body">
                        <h5 class="card-title">Service Title 3</h5>
                        <p class="card-text">Description for service 3. This includes details about the service and its benefits.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="card">
                    <img src="img/back.jpeg" class="card-img-top" alt="Service Title 4">
                    <div class="card-body">
                        <h5 class="card-title">Service Title 4</h5>
                        <p class="card-text">Description for service 4. This includes details about the service and its benefits.</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card">
                    <img src="img/back.jpeg" class="card-img-top" alt="Service Title 5">
                    <div class="card-body">
                        <h5 class="card-title">Service Title 5</h5>
                        <p class="card-text">Description for service 5. This includes details about the service and its benefits.</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="card">
                    <img src="img/back.jpeg" class="card-img-top" alt="Service Title 6">
                    <div class="card-body">
                        <h5 class="card-title">Service Title 6</h5>
                        <p class="card-text">Description for service 6. This includes details about the service and its benefits.</p>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="card">
                    <img src="img/back.jpeg" class="card-img-top" alt="Service Title 7">
                    <div class="card-body">
                        <h5 class="card-title">Service Title 7</h5>
                        <p class="card-text">Description for service 7. This includes details about the service and its benefits.</p>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="card">
                    <img src="img/back.jpeg" class="card-img-top" alt="Service Title 8">
                    <div class="card-body">
                        <h5 class="card-title">Service Title 8</h5>
                        <p class="card-text">Description for service 8. This includes details about the service and its benefits.</p>
                    </div>
                </div>
            </div>

            <!-- Card 9 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="card">
                    <img src="img/back.jpeg" class="card-img-top" alt="Service Title 9">
                    <div class="card-body">
                        <h5 class="card-title">Service Title 9</h5>
                        <p class="card-text">Description for service 9. This includes details about the service and its benefits.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cards End -->

            </div>
        </div>
    </div>
    <!-- Contact End -->


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
                            <img class="img-fluid bg-light p-1" src="img/back.jpeg" alt="">
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