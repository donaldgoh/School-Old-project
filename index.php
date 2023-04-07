<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Violecar</title>
</head>
<body>
    <div id="background"></div>
        <header>
            <!-- <a href="#" class="logo">Violecar</a> -->
            <h1 class="logo">Violecar</h1>
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
            <nav>
                <ul>
                    <li><a href="jualan.php">jualan</a></li>
                    <li><a href="pendapat.php">pendapat</a></li>
                    <li><a href="daftar.php">daftar</a></li>
                    <li><a href="import.php">import</a></li>
                    <li><a href="logout.php">log keluar</a></li>
                </ul>
            </nav>

            <label for="nav-toggle" class="nav-toggle-label">
                <span></span>
            </label>

        </header>
    
        <div class="content">
            <!-- content here -->
        </div>
</body>
</html>