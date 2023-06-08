<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('Y-m-d H:i:s'); // Get the current date and time

    // Check if the user ID session variable is set
    if (isset($_SESSION['id'])) {
        $userId = $_SESSION['id']; // Get the user ID from the session

        include '../utils/db_connect.php';

        $sql = "INSERT INTO blogposts (title, content, date, authorid) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $title, $content, $date, $userId);

        if ($stmt->execute()) {
            // Display if the post creation was successful
            echo "Post created successfully!";
            header("Location: ../home.php");
            exit(); // just to make sure to exit the script after redirection
        } else {
            // Display if an error occurred while creating the post
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        // User is not logged in, handle the case accordingly
        echo "User not logged in.";
    }
}
?>

