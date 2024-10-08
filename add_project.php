<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $project_type = filter_input(INPUT_POST, 'project_type', FILTER_SANITIZE_STRING);

    // Handle image upload
    $image = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = file_get_contents($_FILES['image']['tmp_name']);
    }

    // Insert project into the database
    $sql = "INSERT INTO projects (title, description, project_type, image) VALUES (:title, :description, :project_type, :image)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':title' => $title,
        ':description' => $description,
        ':project_type' => $project_type,
        ':image' => $image
    ]);

    // Redirect to the project page after insertion
    header("Location: project.php");
    exit();
}
