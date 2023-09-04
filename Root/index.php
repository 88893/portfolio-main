<?php
session_start();

if (!isset($_SESSION['authenticated'])) {
    $_SESSION['authenticated'] = false;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>
</head>
<body>
    <header>
            <nav>
                <li><a class='active' href="../Root/index.php">Home</a></li>
                <li><a href="../pages/Project.php">Projecten</a></li>
                <li><a href="../pages/About.php">Over mij</a></li>
                <?php
                    if($_SESSION['authenticated'] == true) {
                        echo '<li><a href="../pages/admin.php">Admin</a></li>';
                    } else {
                        echo '<li><a href="../pages/inlog.php">Login</a></li>';
                    }
                ?>

                <li><a href="../pages/Contact.php">Contact</a></li>
            </nav>
        </header> 

    <main>
        <div class="pfp">
           
            <img src="https://media.discordapp.net/attachments/1076950186699526214/1147089021005209621/Screenshot_2023-08-29_at_02.17.54.png?width=1468&height=1396" alt="" >
            <h1>Welkom op me pagina</h1>
            <p> Hoi Ik ben Joshua Mohanlal en dit is mijn  portfolio Website.
                <br>
                <br>
                Hier laat ik zien wat voor <a href="../html/Project.html">projecten</a> ik heb gemaakt in dit jaar.
                <br>
                <br>
                Ik vertel ook nog wat <a href="../html/About.html">over mezelf </a>en wat me skills zijn.
                
                
            </p>
        </div>
    </main>
</body>
</html>