<?php
require("../php/configproject.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    header("Location: ../Root/index.php"); // Redirect naar de homepage als niet geauthenticeerd
    exit;
}

// Check if the form for editing a project is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit_project"])) {
    $project_id = $_POST["project_id"];
    $title = $_POST["title"];
    $date = $_POST["date"];
    $description = $_POST["description"];

    // Update the project details in the database
    $query = "UPDATE projects SET title='$title', date='$date', description='$description' WHERE id='$project_id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Project details updated successfully
        header("Location: ../pages/Project.php");
        exit;
    } else {
        // Error occurred while updating project details
        echo "Er is een fout opgetreden bij het bijwerken van het project.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_project"])) {
    $project_id = $_POST["project_id"];

    // Delete the project from the database
    $query = "DELETE FROM projects WHERE id='$project_id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Project deleted successfully
        header("Location: ../pages/Project.php");
        exit;
    } else {
        // Error occurred while deleting the project
        echo "Er is een fout opgetreden bij het verwijderen van het project.";
    }
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

    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>

    <header>
        <nav>
                <li><a href="../Root/index.php">Home</a></li>
                <li><a href="../pages/Project.php">Projecten</a></li>
                <li><a href="../pages/About.php">Over mij</a></li>
                <li><a href="../pages/Contact.php">Contact</a></li>
                <?php
                    if($_SESSION['authenticated'] == true) {
                        echo '<li><a class="active" href="../pages/admin.php">Admin</a></li>';
                    } else {
                        echo '<li><a href="../pages/inlog.php">Login</a></li>';
                    }
                ?>
                <li> <a href="logout.php">Uitloggen</a></li>
                
            </nav>
            
          
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </header>
   
<main>




<form method="post" enctype="multipart/form-data" action="../php/submit.php">
<h2>Een Project Indienen</h2>
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



<form method="post" action="">
<h2>Wijzig een project</h2>
        <label for="project_id">Selecteer het project:</label>
        <select id="project_id" name="project_id" required>
            <?php
            // Fetch all projects from the database
            $query = "SELECT * FROM projects";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['id']}'>{$row['title']}</option>";
            }
            ?>
        </select><br><br>

        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="date">Datum:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="description">Beschrijving:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <input type="submit" name="edit_project" value="Project Bewerken">
    </form>


    <form  class= "delete" method="post" action="">
  <div class="h2l">   <h2>Een Project Verwijderen</h2> </div>
        <label for="delete_project">Selecteer het project om te verwijderen:</label>
        <select id="delete_project" name="project_id" required>
            <?php
            // Fetch all projects from the database
            $query = "SELECT * FROM projects";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['id']}'>{$row['title']}</option>";
            }
            ?>
        </select><br><br>

        <input type="submit" name="delete_project" value="Project Verwijderen">
    </form>

    
    
        </main>


<br><br>


<script src="../js/header.js"></script>

</body>
</html>
