<?php
include 'Database.php';
include 'User.php';

// Validate if 'matric' is provided in the URL
if (!isset($_GET['matric']) || empty($_GET['matric'])) {
    echo "Error: Matric number is missing in the URL.";
    exit();
}

// Retrieve the matric value from the GET request
$matric = $_GET['matric'];

// Create an instance of the Database class and get the connection
$database = new Database();
$db = $database->getConnection();

// Create an instance of the User class and fetch user details
$user = new User($db);
$userDetails = $user->getUser($matric);

// Check if user exists
if (!$userDetails) {
    echo "Error: User not found.";
    $db->close();
    exit();
}

// Close the database connection
$db->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2>Update User</h2>
        <form action="update.php" method="post">
            <input type="hidden" name="matric" value="<?php echo $userDetails['matric']; ?>">
            <div class="mb-3">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo $userDetails['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="role">Role:</label>
                <select name="role" id="role" class="form-control" required>
                    <option value="">Please select</option>
                    <option value="lecturer" <?php echo ($userDetails['role'] == 'lecturer') ? 'selected' : ''; ?>>Lecturer</option>
                    <option value="student" <?php echo ($userDetails['role'] == 'student') ? 'selected' : ''; ?>>Student</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>