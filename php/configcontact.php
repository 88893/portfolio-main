<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


$host = "localhost:3306";
$username = "portfolio88893"; 
$password = "B8z7q$57e"; 
$database = "portfolio88893"; 

session_start();

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    echo "FOUT: geen connectie naar database. <br>";
    echo "Error:" . mysqli_connect_error() . "<br>/";  
    echo "Errno:" . mysqli_connect_errno() . "<br>/"; 
    exit;
}


?>
