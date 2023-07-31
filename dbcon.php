<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "teachers";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
?>
