<?php
require("./php/configproject.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $image = ""; 

   

    $sql = "INSERT INTO projects (title, date, description, image) VALUES ('$title', '$date', '$description', '$image')";

    if (mysqli_query($conn, $sql)) {
        echo "Project uploaded successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
