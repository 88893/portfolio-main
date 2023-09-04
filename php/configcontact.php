<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


$host = "localhost"; // Hostname of your database server
$username = "root"; 
$password = ""; 
$database = "Contact"; // Name of your database

session_start();

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    echo "FOUT: geen connectie naar database. <br>";
    echo "Error:" . mysqli_connect_error() . "<br>/";  // Corrected mysqli_connect_error()
    echo "Errno:" . mysqli_connect_errno() . "<br>/";  // Corrected mysqli_connect_errno()
    exit;
}


?>
