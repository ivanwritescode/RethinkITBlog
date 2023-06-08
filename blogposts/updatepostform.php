<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Post</title>
</head>
<body>
    <!-- <?php include 'header.php'; ?> -->
    <main>
        <?php
        $blogpostId = $_GET['blogpost_id'];

        include '../utils/db_connect.php';

        $sql = "SELECT * FROM blogposts WHERE id = $blogpostId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $post = $result->fetch_assoc();
        ?>
        <h1>Edit Post - <?php echo $post['title']; ?></h1>
        <div class="card">
            <form action="updatepost.php" method="POST">
                <label for="title">Enter New Title:</label>
                <input type="text" id="title" name="title" value="<?php echo $post['title']; ?>" required>
                <br>
                <label for="content">Enter New Content:</label>
                <textarea id="content" name="content" required><?php echo $post['content']; ?></textarea>
                <br>
                <input type="hidden" name="post_id" value="<?php echo $post['id']; ?>">
                <button type="submit">SAVE</button>
            </form>
            <?php
            } else {
                echo "Post not found.";
            }

            $conn->close();
            ?>
        </div>
    </main>
</body>
</html>