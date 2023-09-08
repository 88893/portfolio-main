<?php

require_once 'configcontact.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $nummer = $_POST['nummer'];
    $bedrijf = $_POST['Bedrijf'];
    $bericht = $_POST['Bericht'];

    
    $sql = "INSERT INTO `contact_submissions`(`naam`, `email`, `nummer`, `bedrijf`, `bericht`) VALUES ('$naam', '$email', '$nummer', '$bedrijf', '$bericht')";


    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
