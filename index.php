<?php
require './src/controller/UserController.php';

$data = query("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/css/styles.css">
    <title>Dashboard</title>

</head>
<body>
    <header class="navbar-container">
        <div class="title-webpage">
            <p><a href="">NilaiKu</a></p>
        </div>
        <nav class="nav-list">
            <ul>
                <li><a href="./src/input.php">Input Nilai</a></li>
                <li><a href="./src/views.php">Lihat Nilai</a></li>
            </ul>    
        </nav>
    </header>
    <main>
        <div>
            <div class="main-header">
                <h1>Selamat Datang, hello world!</h1>
            </div>
            <div class="box-container">
                <div class="box">
                    <h5>IPK</h5>
                    <p>0</p>
                </div>
                <div class="box">
                    <h5>IP Semester</h5>
                    <p>0</p>
                </div>
                <div class="box">
                    <h5>SKS Lulus</h5>
                    <p>0</p>
                </div>
            </div>
        </div>
    </main>
    <footer> copyright &copy; Nilaiku <?= getYear(); ?> </footer>
</body>
</html>