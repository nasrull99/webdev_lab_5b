<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 5b</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            border-right: 1px solid #ddd;
            width: 200px;
            height: 100vh;
            position: fixed;
            top: 56px; /* Height of navbar */
            left: 0;
            background-color: #f8f9fa;
            padding: 15px;
        }

        .content {
            margin-left: 250px; /* Sidebar width */
            padding: 20px;
        }

        body {
            padding-top: 56px; /* Height of navbar */
        }
    </style>
</head>

<body>
    <!-- Include Navbar -->
    <?php include 'layout/navbar.php'; ?>

    <div class="d-flex">
        <!-- Include Sidebar -->
        <?php include 'layout/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="content flex-grow-1">
            <?php include $content; ?> <!-- Dynamically load content -->
        </div>
    </div>

    <!-- Include Footer -->
    <!-- <?php include 'layout/footer.php'; ?> -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
