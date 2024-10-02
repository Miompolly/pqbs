<?php
require 'config.php';
$id = $_GET['id'];

$sql = "DELETE FROM messages WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

// Redirect back to the messages page
header("Location: message.php");
exit();
?>
