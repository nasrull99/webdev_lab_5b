<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="login-container">
        <form action="insert.php" method="post">

        <h2 class="login-header mb-4">Register</h2>

        <div class="mb-3">
        <label class="form-label" for="matric">Matric Number</label>
        <input class="form-control" type="text" name="matric" id="matric" required>
        </div>

        <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" required>
        </div>

        <div class="mb-3">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" required>
        </div>

        <div class="mb-3">
        <label for="role">Role</label>
            <select class="form-select" name="role" id="role" required>
                <option value="">Please select</option>
                <option value="lecturer">Lecturer</option>
                <option value="student">Student</option>
            </select><br>
        </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Register">
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>