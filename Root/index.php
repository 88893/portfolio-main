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
                <li><a href="../pages/Contact.php">Contact</a></li>
                <?php
                    if($_SESSION['authenticated'] == true) {
                        echo '<li><a href="../pages/admin.php">Admin</a></li>';
                    } else {
                        echo '<li><a href="../pages/inlog.php">Login</a></li>';
                    }
                ?>

                
            </nav>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        </header> 

    <main>
        <div class="pfp">
            <h1>Welkom op me pagina</h1>
            <img src="https://media.discordapp.net/attachments/1076950186699526214/1147089021005209621/Screenshot_2023-08-29_at_02.17.54.png?width=1468&height=1396" alt="" >
           
            
            <div class="text-container">
                
            <p> Hallo, ik ben Joshua Mohanlal en ik heet je van harte welkom op mijn portfolio website.
                <br>
                <br>
                Op deze plek deel ik trots mijn <a href="../pages/Project.php">projecten</a> van het afgelopen jaar. 
                <br>
                Ik neem je graag mee op een reis door mijn creatieve werk en laat zien wat ik heb bereikt.
                <br><br>
               
                Daarnaast vertel ik je graag meer <a href="../pages/About.php">over mezelf</a>. 
                <br>
                Wie ben ik? Wat zijn mijn passies en interesses? Welke vaardigheden bezit ik? 
                <br><br>
                Leer me beter kennen terwijl we samen door mijn portfolio bladeren.
                
                
            </p>
            </div>
        </div>
    </main>
    

  
    <script src="../js/header.js"></script>

</body>
</html>