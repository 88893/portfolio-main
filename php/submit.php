<?php
require("../php/configproject.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    
    
   
    $imageData = file_get_contents($_FILES["image"]["tmp_name"]);
    $base64Image = base64_encode($imageData);
    
    
    $query = "INSERT INTO projects (title, date, description, image) VALUES ('$title', '$date', '$description', '$base64Image')";
    $result = mysqli_query($conn, $query);

    if ($result) {
       
        header("Location: ../pages/Project.php");
        exit;
    } else {
        
        echo "Er is een fout opgetreden bij het toevoegen van het project.";
    }
}
?>
