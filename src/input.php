<?php
require 'controller/UserController.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/styles.css">
    <title>Input Nilai</title>
</head>
<body>
    <header class="navbar-container">
        <div class="title-webpage">
            <p><a href="../index.php">NilaiKu</a></p>
        </div>
        <nav class="nav-list">
            <ul>
                <li><a href="input.php">Input Nilai</a></li>
                <li><a href="views.php">Lihat Nilai</a></li>
            </ul>    
        </nav>
    </header>
    <main>
        <div>
            <div class="main-header">
                <h1>Input Nilai</h1>
            </div>
            <div>
                <!-- Form input -->
            </div>
        </div>
    </main>
    <footer> copyright &copy; NilaiKu <?= getYear(); ?> </footer>
</body>
</html>