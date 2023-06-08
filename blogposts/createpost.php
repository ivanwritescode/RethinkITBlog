<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('Y-m-d H:i:s'); // Get the current date and time

    // TODO: Perform any necessary data validation and sanitization
    // TODO:  Associate an authorid later for each blog post

    include '../utils/db_connect.php';

    $sql = "INSERT INTO blogposts (title, content, date) VALUES ('$title', '$content', '$date')";

    if ($conn->query($sql) === TRUE) {
        // Display if the post creation was successful
        echo "Post created successfully!";
        header("Location: ../home.php");
        exit(); // just to make sure to exit the script after redirection

    } else {
        // Display if an error occurred while creating the post
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
