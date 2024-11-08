<?php
session_start();
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $user['role'];
            header("Location: ../dashboard.html");
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "No user found!";
    }
}

$conn->close();
?>
