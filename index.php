<?php
session_start(); // Start session management

// Check if the user is logged in
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

// Get the requested page from the URL (default to 'read')
$page = isset($_GET['page']) ? $_GET['page'] : 'read';

// Define the path to the content file
$content = $page . '.php';

// Validate if the content file exists
if (!file_exists($content)) {
    $content = '404.php'; // Load 404 error page if the file is missing
}

// Include the layout file (which dynamically includes $content)
include 'layout/layout.php';
