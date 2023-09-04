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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/About.css">
</head>
<body>
    <header>
         
        <nav>
                <li><a href="../Root/index.php">Home</a></li>
                <li><a href="../pages/Project.php">Projecten</a></li>
                <li><a class="active" href="../pages/About.php">Over mij</a></li>
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
        <div class="about">
            <h2>Over Mij</h2>
            <button id="showMoreBtn" class="show-more-button">Show</button>
            <div class="popup" id="informationPopup">

                <h2>Over mij</h2>
                <p>
                    Ik ben Joshua Mohanlal, en ik krijg nu al 2 jaar les in coderen op het Grafisch Lyceum. 
                    <br>
                    In mijn jeugd had ik nog nooit gecodeerd of iets dergelijks gedaan. <br>Mijn interesse hiervoor werd gewekt toen enkele familieleden me lieten zien wat coderen inhield. <br>Ik vond het toen behoorlijk interessant en besloot een opleiding te volgen aan het Grafisch Lyceum. <br> Tot nu toe bevalt het me goed en heb ik het afgelopen jaar geen echte problemen ondervonden.
                    <br>
                    <br>
                    Los van mijn opleiding ben ik opgegroeid in Rotterdam. <br>Ik woon samen met mijn vader, moeder en zusje. <br> Persoonlijk hou ik ervan om buiten te zijn en af en toe te gamen. <br>In mijn vrije tijd bevind ik me meestal buiten met vrienden of zit ik thuis series te kijken of te gamen.</p>
                <button id="closePopupBtn">Close</button>
            </div>

            <div class="vaardig"> 
                <h2>Mijn Vaardigheden</h2> 
                </div>
                <ul id="skillsList"></ul>
                
            </section>


            <div class="favorite-artist">
                <h2>Favoriete Artiest</h2>
                <button id="showArtiestBtn" class="show-more-button">Destroy Lonely</button>
                <br>
                <div class="popup" id="artiestPopup">
                    <h2>Destroy Lonely</h2>

                    <p>Bobby Wardell Sandimanie III (born July 30, 2001), known professionally as Destroy Lonely, is an American rapper. <br>
                        His debut studio album If Looks Could Kill (2023) debuted at #18 on the US Billboard 200 and his fith mixtape No Stylist (2022) debuted at #91 on the US Billboard 200. <br>
                        Destroy Lonely signed to Playboi Carti's Opium label through Interscope Records and Ingrooves in early 2021 and is often affiliated with his labelmate Ken Carson. <br> The Rolling Stone magazine cites him as being characterized by his "dynamic yet boring" instrumentals and his unique aesthetic consisting of dark attire and designer clothes.[6]</p>
                    <button id="closeArtiestPopupBtn">Close</button>
                </div>

               <div class= "spotify"> <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/1cdqNRXIRrvT4HnApj6yw6?utm_source=generator&theme=0" width="565" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe> </div> 
                    


        <section class="cv-section">
            <h2>Mijn CV</h2>
            <p>Klik op de knop hieronder om mijn CV te downloaden.</p>
            <a href="../image/My project-1.png" download class="cv-download-btn">Download CV</a>
        </section>
    </main>



</body>
</html>

<script src="../js/About.js"></script>