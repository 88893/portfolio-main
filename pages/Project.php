<?php
require("../php/configproject.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/project.css">
</head>
<body>
    <header>
        <nav>
            <li><a href="../Root/index.php">Home</a></li>
            <li><a class="active" href="../pages/Project.php">Projecten</a></li>
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
        <div class="project-container">
            <ul>
                <?php
                $query = "SELECT * FROM projects";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>";
                    echo "<img src='data:image/png;base64,{$row['image']}' alt='Project Image'>";
                    echo "<h3>{$row['title']}</h3>";
                    echo "<p>Date: {$row['date']}</p>";
                    echo "<p>Description: {$row['description']}</p>";
                    echo "</li>";
                }
                ?>
            </ul>
        </div>
    </main>
</body>
</html>
