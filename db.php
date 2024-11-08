<?php
$servername = "localhost";
$username = "root"; // Default username for MySQL in XAMPP
$password = ""; // Default password is empty for XAMPP
$dbname = "student_management";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
