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
        <h1>Create a Post!</h1>
        <div class="card">
            <form action="createpost.php" method="POST">
                <label for="title">Enter Title:</label>
                <input type="text" id="title" name="title" required>
                <br>
                <label for="content">Enter Content:</label>
                <textarea id="content" name="content" required></textarea>
                <br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>