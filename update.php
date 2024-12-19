<?php
include 'Database.php';
include 'User.php';

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $matric = $_POST['matric'];
    $name = $_POST['name'];
    $role = $_POST['role'];

    // Validate inputs
    if (!empty($matric) && !empty($name) && !empty($role)) {
        // Create a database connection
        $database = new Database();
        $db = $database->getConnection();

        // Create an instance of the User class and update the user
        $user = new User($db);
        $updateResult = $user->updateUser($matric, $name, $role); // Ensure `updateUser()` is implemented in the `User` class

        // Check if the update was successful
        if ($updateResult) {
            // Redirect to the table page after a successful update
            header("Location: index.php");
            exit();
        } else {
            echo "Error: Failed to update the user.";
        }

        // Close the database connection
        $db->close();
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request method.";
}
?>
