<?php
session_start();

// Database connection
require 'config.php';

// Fetch all carpentry projects from the database
$sql = "SELECT * FROM projects WHERE project_type = 'Carpentry'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$carpentry_projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Carpentry Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Carpentry services, building services, home projects" name="keywords">
    <meta content="We offer carpentry services for all types of home improvement and construction projects." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
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
</head>

<body>

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
                <h1 class="display-3 text-white animated slideInDown">Carpentry</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>                          
                        <li class="breadcrumb-item text-white active" aria-current="page">Carpentry</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Carpentry Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Services</h6>
            <h1 class="mb-5">Carpentry Services</h1>
        </div>
        <div class="row g-4">
            <?php foreach ($carpentry_projects as $project): ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card h-100">
                    <!-- Display the project image -->
                    <?php if (!empty($project['image'])): ?>
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($project['image']); ?>" class="card-img-top w-100" style="height: 250px; object-fit: cover;" alt="<?php echo htmlspecialchars($project['title']); ?>">
                    <?php else: ?>
                        <img src="img/default-placeholder.png" class="card-img-top w-100" style="height: 250px; object-fit: cover;" alt="No image available">
                    <?php endif; ?>

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo htmlspecialchars($project['title']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($project['description']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Carpentry Projects End -->

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <!-- Footer content -->
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
