<?php
session_start();
include '../db.php';

if ($_SESSION['role'] == 'student') {
    $user_id = $_SESSION['user_id']; // assuming you store user_id on login
    $course_id = 1; // Set this dynamically based on selected course

    $sql = "INSERT INTO enrollments (user_id, course_id) VALUES ('$user_id', '$course_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Enrolled successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Unauthorized access.";
}

$conn->close();
?>
