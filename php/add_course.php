<?php
session_start();
include '../db.php';

if ($_SESSION['role'] == 'admin') {
    $course_name = "Sample Course"; // Replace with actual form data
    $description = "Description of the sample course.";

    $sql = "INSERT INTO courses (course_name, description) VALUES ('$course_name', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Course added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Unauthorized access.";
}

$conn->close();
?>
