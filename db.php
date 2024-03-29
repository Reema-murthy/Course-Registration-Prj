<?php
$servername = "localhost";
$username = "root";
$password = "@1784323Ansh";
$database = "lab_prj";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
