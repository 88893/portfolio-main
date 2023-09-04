<?php
require("../php/configproject.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $date = $_POST["date"];
    $description = $_POST["description"];
    
    // Afbeelding verwerken en omzetten naar base64
    $imageData = file_get_contents($_FILES["image"]["tmp_name"]);
    $base64Image = base64_encode($imageData);
    
    // Voeg de projectgegevens en de base64-gecodeerde afbeelding toe aan de database
    $query = "INSERT INTO projects (title, date, description, image) VALUES ('$title', '$date', '$description', '$base64Image')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Het project is succesvol toegevoegd, doorverwijzen naar project.php
        header("Location: ../pages/Project.php");
        exit;
    } else {
        // Er is een fout opgetreden bij het toevoegen van het project
        echo "Er is een fout opgetreden bij het toevoegen van het project.";
    }
}
?>
