<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); // Start de sessie

if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    header("Location: ../Root/index.php"); // Redirect naar de homepage als niet geauthenticeerd
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pagina</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <header>
        <nav>
                <li><a href="../Root/index.php">Home</a></li>
                <li><a href="../pages/Project.php">Projecten</a></li>
                <li><a href="../pages/About.php">Over mij</a></li>
                <?php
                    if($_SESSION['authenticated'] == true) {
                        echo '<li><a class="active" href="../pages/admin.php">Admin</a></li>';
                    } else {
                        echo '<li><a href="../pages/inlog.php">Login</a></li>';
                    }
                ?>

                <li><a href="../pages/Contact.php">Contact</a></li>
            </nav>
    </header>
    <h2>Welkom op de Admin Pagina</h2>
    <p>Dit is jouw administratieve content.</p>


   

<h2>Een Project Indienen</h2>
<form method="post" enctype="multipart/form-data" action="../php/submit.php">
    <label for="title">Titel:</label>
    <input type="text" id="title" name="title" required><br><br>

    <label for="date">Datum:</label>
    <input type="date" id="date" name="date" required><br><br>

    <label for="description">Beschrijving:</label>
    <textarea id="description" name="description" required></textarea><br><br>

    <label for="image">Afbeelding (JPEG, PNG, GIF):</label>
    <input type="file" id="image" name="image" accept="image/jpeg, image/png, image/gif" required><br><br>


    <input type="submit" value="Project Indienen">
</form>

<br><br>
<a href="logout.php">Uitloggen</a>

</body>
</html>
