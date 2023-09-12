<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


$host = "localhost:3306"; 
$username = "88893student"; 
$password = "I?c8u36q6"; 
$database = "portfolio88893"; 

session_start();

$conn = mysqli_connect($host, $username, $password, $database);


if (!$conn) {
    echo "FOUT: geen connectie naar database. <br>";
    echo "Error:" . mysqli_connect_error() . "<br>/";  
    echo "Errno:" . mysqli_connect_errno() . "<br>/"; 
    exit;
}



?>