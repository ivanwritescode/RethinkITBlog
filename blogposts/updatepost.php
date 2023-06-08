<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postId = $_POST['post_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    include '../utils/db_connect.php';

    $sql = "UPDATE blogposts SET title='$title', content='$content' WHERE id=$postId";

    if ($conn->query($sql) === TRUE) {
        echo "Post updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
