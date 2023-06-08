<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
</head>
<body>
    <div class="container">
        <?php
        include 'utils/db_connect.php';

        $sql = "SELECT * FROM blogposts";
        $result = $conn->query($sql);

        // Check if there are any posts
        if ($result->num_rows > 0) {
            // Loop through each post and generate a card
            while ($post = $result->fetch_assoc()) {
        ?>
            <div class="card">
                <div class="card-container">
                    <div class="card-header"><h1><?php echo $post['title']; ?></h1></div>
                    <div class="card-body">
                        <p><?php echo $post['content']; ?></p>
                        <p>Date: <span id="post-date-<?php echo $post['id']; ?>"><?php echo $post['date']; ?></span></p>
                    </div>
                    <div class="card-footer">
                        <p>
                            <button onclick="deletePost(<?php echo $post['id']; ?>)">DELETE</button>
                            <button>EDIT</button>
                        </p>
                    </div>
                </div>
            </div>

            <script>
                // Format and display the date using Moment.js
                var postDate = moment("<?php echo $post['date']; ?>").format('Do [of] MMMM YYYY hh:mm:ss A');
                document.getElementById("post-date-<?php echo $post['id']; ?>").textContent = postDate;
            </script>
        <?php
            }
        } else {
            echo "No posts found.";
        }

        $conn->close();
        ?>

        <div class="card">
            <a href="blogposts/createpostform.php">CREATE NEW POST</a> 
        </div>
    </div>
</body>

    <script>
        function deletePost(postId) {
            var confirmDelete = confirm("Are you sure you want to delete this post?");
            if (confirmDelete) {
                // Redirect to the deletepost.php page passing the postId as a parameter
                window.location.href = "blogposts/deletepost.php?id=" + postId;
            }
        }
    </script>
</html>