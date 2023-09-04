<?php
require("../php/configcontact.php");
require("../php/toevoegwerk.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Formulier</title>
    <link rel="stylesheet" href="../css/contact.css"> 
</head>
<body>
    <header>
        <nav>
                <li><a href="../Root/index.php">Home</a></li>
                <li><a href="../pages/Project.php">Projecten</a></li>
                <li><a href="../pages/About.php">Over mij</a></li>
                <?php
                    if($_SESSION['authenticated'] == true) {
                        echo '<li><a href="../pages/admin.php">Admin</a></li>';
                    } else {
                        echo '<li><a href="../pages/inlog.php">Login</a></li>';
                    }
                ?>

                <li><a class="active" href="../pages/Contact.php">Contact</a></li>
            </nav>
        </header> 

    <main>
        <div class="contact-form">
            <h2>Contact Formulier</h2>
            <form method="POST">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="nummer">Telefoonnummer:</label>
                <input type="tel" id="nummer" name="nummer">
                
                <label for="Bedrijf">Bedrijf naam:</label>
                <input type="text" id="Bedrijf" name="Bedrijf">
                
                <label for="Bericht">Bericht:</label>
                <textarea id="Bericht" name="Bericht" rows="8" required></textarea>
                
                <button type="submit">Verstuur</button>
            </form>
        </div>
    </main>

 

</body>
</html>
