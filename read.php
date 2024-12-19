<?php
include 'config.php';
include 'Database.php';
include 'User.php';

// Create an instance of the Database class and get the connection
$database = new Database();
$db = $database->getConnection();

// Create an instance of the User class
$user = new User($db);
$result = $user->getUsers();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>Matric</th>
                <th>Name</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
        if ($result->num_rows > 0) {
            // Fetch each row from the result set
            while ($row = $result->fetch_assoc()) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row["matric"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["role"]; ?></td>
                        <td>
                            <a class="btn btn-primary" href="update_form.php?matric=<?php echo $row["matric"]; ?>">Update</a>
                            <a class="btn btn-danger" href="delete.php?matric=<?php echo $row["matric"]; ?>" >Delete</a>
                        </td>

                    </tr>
                    </tr>
                </tbody>
                <?php
            }
        } else {
            echo "<tr><td colspan='4'>No users found</td></tr>";
        }
        // Close connection
        $db->close();
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>