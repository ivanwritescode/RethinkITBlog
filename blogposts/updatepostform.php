<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post</title>
	<link rel="stylesheet" href="../public/styles/reset.css">
	<link rel="stylesheet" href="../public/styles/styles.css">
</head>
<body>
    <?php include '../header.php'; ?>
    <div class="container">
        <main>
            <?php
            $blogpostId = $_GET['blogpost_id'];

            include '../utils/db_connect.php';

            $sql = "SELECT * FROM blogposts WHERE id = $blogpostId";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $post = $result->fetch_assoc();
            ?>
            <div class="card card-bg-inherit">
                <div class="card-header">
                    <h2>Edit Post - <?php echo $post['title']; ?></h1>
                </div>
                <div class="card-body">
                    <form action="updatepost.php" method="POST">
                        <p class="form-group">
                            <label for="title">Enter New Title</label>
                            <input type="text" id="title" name="title" value="<?php echo $post['title']; ?>" required>
                        </p>
                        <br>
                        <p class="form-group">
                            <label for="content">Enter New Content</label>
                            <textarea id="content" name="content" required><?php echo $post['content']; ?></textarea>
                        </p>
                        <br>
                        <input type="hidden" name="post_id" value="<?php echo $post['id']; ?>">
                        <button class="btn btn-submit" type="submit">SAVE</button>
                    </form>
                </div>
                <?php
                } else {
                    echo "Post not found.";
                }

                $conn->close();
                ?>
            </div>
        </main>
    </div>

    <script src="../public/js/formfields.js"></script>
</body>
</html>