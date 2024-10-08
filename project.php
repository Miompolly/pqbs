<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require 'config.php';

// Fetch all projects from the database
$sql = "SELECT * FROM projects ORDER BY created_at DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$projects = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">View web</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content Wrapper -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user.php">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="message.php">Messages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="project.php">Projects</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Dashboard Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Project Management</h1>
                    <!-- Button to trigger add project modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addProjectModal">
                        Add New Project
                    </button>
                </div>

                <!-- Projects Table -->
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Project Type</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($projects as $project): ?>
                            <tr>
                                <td><?php echo $project['id']; ?></td>
                                <td><?php echo htmlspecialchars($project['title']); ?></td>
                                <td><?php echo htmlspecialchars($project['description']); ?></td>
                                <td><?php echo htmlspecialchars($project['project_type']); ?></td>
                                <td><?php echo $project['created_at']; ?></td>
                                <td>
                                    <!-- Edit Button -->
                                    <a href="edit_project.php?id=<?php echo $project['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <!-- Delete Button -->
                                    <a href="delete_project.php?id=<?php echo $project['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this project?');">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <!-- Modal to Add New Project -->
    <div class="modal fade" id="addProjectModal" tabindex="-1" aria-labelledby="addProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProjectModalLabel">Add New Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="add_project.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Project Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="project_type" class="form-label">Project Type</label>
                            <select class="form-select" name="project_type" required>
                            <option value="Pending">Construction Design</option>
                                <option value="Facility">Facility Management</option>
                                <option value="Carpentry">Carpentry</option>
                                <option value="Painting">Painting & Color Expertise</option>
                                <option value="Electricity">Electricity</option>
                                <option value="Completed">Plumbing</option>
                                <option value="CCTV">CCTV Services</option>
                                <option value="Sustainability">Sustainability</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Project Image</label>
                            <input type="file" class="form-control" name="image" accept="image/*" required>
                        </div>
                        <button type="submit" class="btn btn-success">Add Project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
