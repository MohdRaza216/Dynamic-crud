<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyApp</title>

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css') ?>">

    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- Bootstrap 5 JS & jQuery (For AJAX) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <div class="container mt-4">
        <?= view('content'); ?>  
    </div>

    <script src="<?= base_url('public/assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
