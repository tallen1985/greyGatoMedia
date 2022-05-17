<?php
$servername = "localhost";
$database = "u124605564_checkguess";
$username = "u124605564_jake";
$password = "GreyGato39";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>