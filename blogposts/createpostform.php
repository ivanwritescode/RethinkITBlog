<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Post</title>
	<link rel="stylesheet" href="../public/styles/reset.css">
	<link rel="stylesheet" href="../public/styles/styles.css">
</head>
<body>
    <?php include '../header.php'; ?>
    <div class="container">
        <main>
            <h2 class="section-title">Create a Post!</h1>
            <div class="card card-bg-inherit">
                <form action="createpost.php" method="POST">
                    <p class="form-group">
                        <label for="title">Enter Title</label>
                        <input type="text" id="title" name="title" required>
                    </p>
                    <br>
                    <p class="form-group">
                        <label for="content">Enter Content</label>
                        <textarea id="content" name="content" required></textarea>
                    </p>
                    <br>
                    <button class="btn btn-submit" type="submit">POST</button>
                </form>
            </div>
        </main>
    </div>

    <script src="../public/js/formfields.js"></script>
</body>
</html>