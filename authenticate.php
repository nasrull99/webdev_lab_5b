<?php
session_start(); // Start the session to manage the login state
include 'Database.php';
include 'User.php';

// Check if form is submitted
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    // Create database connection
    $database = new Database();
    $db = $database->getConnection();

    // Sanitize inputs using mysqli_real_escape_string
    $matric = $db->real_escape_string($_POST['matric']);
    $password = $db->real_escape_string($_POST['password']);

    // Validate inputs
    if (!empty($matric) && !empty($password)) {
        $user = new User($db);
        $userDetails = $user->getUser($matric); // Get the user details from DB

        // Check if user exists and verify password
        if ($userDetails && password_verify($password, $userDetails['password'])) {
            // Set session variables to indicate the user is logged in
            $_SESSION['user_logged_in'] = true; // This keeps the user logged in
            header("Location: index.php");
            exit();
        } else {
            header("Location: login.php");
            exit();
            echo '<script>alert("Invalid credentials. Please try again.");</script>';

        }
    } else {
        echo 'Please fill in all required fields.';
    }
}
?>