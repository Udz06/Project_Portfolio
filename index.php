<?php
// Get the current page or default to 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// List of allowed pages for security
$allowed_pages = ['home', 'about', 'skills', 'projects', 'contact'];

// If the requested page isn't in the allowed list, load 'home'
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My Portfolio Website">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navigation -->
    <header>
        <nav class="navbar">
            <a href="?page=home" class="<?= ($page === 'home') ? 'active' : '' ?>">Home</a>
            <a href="?page=about" class="<?= ($page === 'about') ? 'active' : '' ?>">About</a>
            <a href="?page=skills" class="<?= ($page === 'skills') ? 'active' : '' ?>">Skills</a>
            <a href="?page=projects" class="<?= ($page === 'projects') ? 'active' : '' ?>">Projects</a>
            <a href="?page=contact" class="<?= ($page === 'contact') ? 'active' : '' ?>">Contact</a>
        </nav>
    </header>

    <!-- Page Content -->
    <main>
        <?php include "pages/{$page}.php"; ?>
    </main>

</body>
</html>
