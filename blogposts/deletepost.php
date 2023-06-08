<?php
if (isset($_GET['id'])) {
    $postId = $_GET['id'];

    include '../utils/db_connect.php';

    $sql = "DELETE FROM blogposts WHERE id = '$postId'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../home.php");
        exit(); // just to make sure to exit the script after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}

?>