<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="authenticate.php" method="post">
        <div class="login-container">

            <h2 class="login-header mb-4">Login</h2>

            <div class="mb-3 ">
                <label for="matric" class="form-label">Matric Number</label>
                <input class="form-control" type="text" name="matric" id="matric" placeholder="Matric Number" required>
            </div>
        
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
            </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="Login">
            
            <button class="btn btn-primary">
                <a class="nav-link" href="register_form.php">Register</a>
            </button>

        </div>
    </form>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>