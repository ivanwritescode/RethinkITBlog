<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // TODO: Perform any necessary data validation and sanitization
    // TODO:  Associate an authorid later for each blog post

    include 'db_connect.php';

    $sql = "INSERT INTO blogposts (title, content) VALUES ('$title', '$content')";

    if ($conn->query($sql) === TRUE) {
        // Display if the post creation was successful
        echo "Post created successfully!";
    } else {
        // Display if an error occurred while creating the post
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
